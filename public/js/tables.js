$(document).ready(function() {
    var donationsTable = $('#donations').DataTable({ responsive: true });
    var focusTable = $('#focuses').DataTable({ responsive: true, searching: false });

    // Initiate focus chart
    var focusChartCtx = document.getElementById('focusChart').getContext('2d');
    var focusChart = new Chart(focusChartCtx, {
        type: 'pie',
        data: {
            labels: ["Donor", "Others"],
            datasets: [
                {
                    label: "Donation (PHP)",
                    backgroundColor: ["#ff0000", "#0000ff"],
                    data: [0, 140100.00]
                }
            ]
        },
        options: {
            responsive: true
        }
    });

    // On click donations row
    $('#donations tbody').on( 'click', 'tr', function () {
        const data = donationsTable.row( this ).data();

        focusTable.clear();

        // Update the table
        focusTable.row.add(data).draw();

        // Update the chart
        focusChart.data.labels[0] = data[1];
        focusChart.data.datasets[0].data[0] = data[4];
        focusChart.update();
    } );
} );