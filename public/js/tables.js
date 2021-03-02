$(document).ready(function() {
    var donationsTable = $('#donations').DataTable({ responsive: true });
    var focusTable = $('#focuses').DataTable({ responsive: true, searching: false });

    // On click donations row
    $('#donations tbody').on( 'click', 'tr', function () {
        const data = donationsTable.row( this ).data();
        focusTable.clear();
        focusTable.row.add(data).draw();
    } );

    var focusChartCtx = document.getElementById('focusChart').getContext('2d');
    var focusChart = new Chart(focusChartCtx, {
        type: 'pie',
        
        data: {
            labels: ["Donor", "Others"],
            datasets: [
                {
                    label: "Donation (PHP)",
                    backgroundColor: ["#ff0000", "#0000ff"],
                    data: [69, 69]
                }
            ]
        },
        options: {
            responsive: true
        }
    });
} );