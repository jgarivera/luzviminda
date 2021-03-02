$(document).ready(function() {
    var donationsTable = $('#donations').DataTable({ responsive: true });
    var focusTable = $('#focuses').DataTable({ responsive: true, searching: false });

    // On click donations row
    $('#donations tbody').on( 'click', 'tr', function () {
        const data = donationsTable.row( this ).data();
        focusTable.clear();
        focusTable.row.add(data).draw();
    } );
} );