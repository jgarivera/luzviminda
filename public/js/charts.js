
/* Donation chart chart */
var donationCtx = document.getElementById('donationChart').getContext('2d');
var donationChart = new Chart(donationCtx, {
    type: 'bar',
    data: {
        labels: ['Baliuag, Bulacan', 'Rodriguez, Rizal', 'Marikina City, Metro Manila', 'Cabanatuan City, Nueva Ecija', 'San Mateo, Rizal'],
        datasets: [{
            label: '# of Donations (PHP)',
            data: [11692444.90, 11336311.50, 8753115.00, 7244947.00, 6374230.95],
            backgroundColor: 'rgba(20, 151, 107, 0.7)',
            borderColor: 'rgba(20, 151, 107, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            labels: {
                fontColor: "white",
                fontSize: 18
            }
        },
        scales: {
            xAxes: [{
                ticks: {
                    fontColor: "white"
                }
            }],
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    fontColor: "white",
                    callback: function (value, index, values) {
                        return value.toLocaleString("en-US", { style: "currency", currency: "PHP" });
                    }
                }
            }]
        }
    }
});

/* Affected people chart */
var affectedCtx = document.getElementById('affectedPeopleChart').getContext('2d');
var affectedPeopleChart = new Chart(affectedCtx, {
    type: 'bar',
    data: {
        labels: ['Baliuag, Bulacan', 'Tuguegarao City, Cagayan', 'Tabaco City, Albay', 'Ilagan, Isabela', 'Bocaue, Bulacan'],
        datasets: [{
            label: '# of Affected People',
            data: [196475, 153085, 146134, 135042, 132795],
            backgroundColor: 'rgba(220, 20, 60, 0.7)',
            borderColor: 'rgba(255, 0, 0, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            labels: {
                fontColor: "white",
                fontSize: 18
            }
        },
        scales: {
            xAxes: [{
                ticks: {
                    fontColor: "white"
                }
            }],
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    fontColor: "white"
                }
            }]
        }
    }
});