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
    map.on("load", () => {
       
    });

    map.once("style.load", () => {
        styleMap(map);
        loadData(map);
        initMap(map);
    });

    map.on("idle", () => {

    });

    // Add navigation control
    const nav = new mapboxgl.NavigationControl()
    map.addControl(nav);
}

const sourceLayerID = "MuniCities-5hms3a";
var hoveredMunicityID = null;

function initMap(map) {

    // Fill layer for hover effect
    map.addLayer({
        'id': 'hover-fills',
        'type': 'fill',
        'source': 'composite',
        'source-layer': sourceLayerID,
        'layout': {},
        'paint': {
            'fill-color': '#627BC1',
            'fill-opacity': [
                'case',
                ['boolean', ['feature-state', 'hover'], false],
                0.4,
                0
            ]
        }
    });

    // Line layer for hover effect
    map.addLayer({
        'id': 'hover-lines',
        'type': 'line',
        'source': 'composite',
        'source-layer': sourceLayerID,
        'layout': {},
        'paint': {
            'line-color': '#627BC1',
            'line-width': 4,
            'line-opacity': [
                'case',
                ['boolean', ['feature-state', 'hover'], false],
                0.9,
                0
            ]
        }
    });
    
    // Hook hover events
    map.on("mousemove", "hover-fills", (e) => onMouseMove(e, map, hoveredMunicityID));
    map.on("mouseleave", "hover-fills", onMouseLeave(map, hoveredMunicityID));
    map.on("mousemove", "hover-lines", (e) => onMouseMove(e, map, hoveredMunicityID));
    map.on("mouseleave", "hover-lines", onMouseLeave(map, hoveredMunicityID));

    // Hook click event
    map.on("click", "municities-fills", (e) => {
        if (e.features.length > 0) {
            console.log(e.features[0])
        }
    });
}

function updateOverlay(e) {
    const features = e.features[0];
    const state = features.state;
    const props = features.properties;

    // Municity details
    const id = props.ID_2;
    const province = props.NAME_2;
    const municity = props.NAME_1;
    const region = props.REGION;
    const type = props.TYPE_2;

    // SitRep variables. Comma-separate by thousands.
    const affected = state.affected ? state.affected.toLocaleString("en", {useGrouping: true}) : 0;
    const donations = state.donations ? state.donations.toLocaleString("en", {useGrouping: true}) : 0;

    // Update HTML elements. JQuery is <3.
    // Enye character's encoding gets messed up upon upload... hotfix is <3.
    $("#ov-province").html(province.replace("Ã±", "ñ"));
    $("#ov-municity").html(municity);

    $("#ov-affected").html(affected);
    $("#ov-donoamount").html(donations);
}

function onMouseMove(e, map) {
    if (e.features.length > 0) {
        if (hoveredMunicityID) {
            map.setFeatureState(
                { source: "composite", sourceLayer: sourceLayerID, id: hoveredMunicityID},
                { hover: false }
            );
        }
        hoveredMunicityID = e.features[0].id;
        map.setFeatureState(
            { source: "composite", sourceLayer: sourceLayerID, id: hoveredMunicityID},
            { hover: true  }
        );
        // Fire update overlay whenever hovering
        updateOverlay(e);
    }
}

function onMouseLeave(map) {
    if (hoveredMunicityID) {
        map.setFeatureState(
            { source: "composite", sourceLayer: sourceLayerID, id: hoveredMunicityID },
            { hover: false }
        );
        hoveredMunicityID = null;
    }
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