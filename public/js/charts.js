
/* Donation chart chart */
var donationCtx = document.getElementById('donationChart').getContext('2d');
var donationChart = new Chart(donationCtx, {
    type: 'bar',
    data: {
        labels: ['Baliuag, Bulacan', 'Rodriguez, Rizal', 'Marikina City, Metro Manila', 'Cabanatuan City, Nueva Ecija', 'San Mateo, Rizal'],
        datasets: [{
            label: 'Donations (PHP)',
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
            label: 'Affected People',
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

/* Recoveries chart */
var recoveriesCtx = document.getElementById('recoveriesChart').getContext('2d');
var recoveriesChart = new Chart(recoveriesCtx, {
    type: 'bar',
    data: {
        labels: ['Region VI', 'Region X', 'Region I', 'Region VIII', 'Region IX'],
        datasets: [{
            label: 'Stand-by Funds (PHP)',
            data: [84642546, 48226714, 43101900, 34829754, 31064858],
            backgroundColor: 'rgba(3, 140, 252, 0.7)',
            borderColor: 'rgba(3, 140, 252, 1)',
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