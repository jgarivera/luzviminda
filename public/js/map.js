// Supply Mapbox API token
mapboxgl.accessToken = "pk.eyJ1IjoiamFyaXZlcmEiLCJhIjoiY2tpdWZvdjZzMDZueDJ2bzhqZmpnYnJ1ciJ9.aDQC2QuoEINAmMP6YQllAQ";

navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
    enableHighAccuracy: true
});

function successLocation(position) {
    setupMap([position.coords.longitude, position.coords.latitude]);
}

function errorLocation() {
    // Setup map at Metro Manila as center
    const lat = 14.599512;
    const long = 120.984222;
    setupMap([long, lat])
}

/**
 * 
 * @param center - location 
 */
function setupMap(center) {
    const map = new mapboxgl.Map({
        container: "map",
        style: "mapbox://styles/jarivera/ckj42bxb91wr019myo22v0aux",
        center: center,
        zoom: 7
    });

    // Setup event hooks
    map.on("load", initMap);

    map.once("style.load", () => {
        styleMap(map);
        loadData(map);
    });

    // Add navigation control
    const nav = new mapboxgl.NavigationControl()
    map.addControl(nav);
}

function initMap() {
    console.log("Map loaded")
}

/**
 * Prepares the styling needed for visualizing data distributions
 */
function styleMap(map) {
    const layerID = "municities-fills";
    const stateValue = "donations_ratio";

    // Modifies the layer's fill-color paint property
    map.setPaintProperty(layerID, "fill-color", [
        "case",
        ["!=", ["feature-state", stateValue], null],
        // if we have turnout information for a feature, use it to interpolate a color
        [
            "interpolate",
            ["exponential", 2],
            // use the value of the `voteProportion` feature-state as an input
            ["feature-state", stateValue],
            // color low turnout purple
            0,
            "rgba(220, 39, 39, 0.5)",
            0.4,
            "rgba(248, 178, 12, 0.5)",
            // color high turnout bright green
            0.6,
            "rgba(72, 231, 79, 0.9)"
        ],
        // if there is no turnout information, use gray
        "rgba(127, 127, 127, 0.1)"
    ]);
}

/**
 * Attaches the sitrep data into the map's feature state
 * @param {*} map 
 */
function loadData(map) {
    const http = new XMLHttpRequest();
    const url = "json/sitrepdata.json";
    const sourceLayerID = "MuniCities-5hms3a";

    // Send HTTP request
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            update = JSON.parse(http.responseText);

            // Update each municity
            update.forEach(municity => {
                const id = municity.id_2;
                const affected = municity.affected;
                const donations = municity.donations;

                const affected_ratio = municity.affected_ratio;
                const donations_ratio = municity.donations_ratio;

                map.setFeatureState(
                    { source: "composite", sourceLayer: sourceLayerID, id: +id },
                    { affected, donations, affected_ratio, donations_ratio }
                );
            });
        }
    }
}