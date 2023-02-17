$(document).ready( function () {
    renderTable();
} );

function renderTable(){
    myTable =  $('#phone_books').DataTable({
        "responsive": false, "autoWidth": false, "pageLength": 4, "lengthChange": false,
        "paging": true,
        "scrollX": true,
        "search": {
            "caseInsensitive": true,
        },
        "": false,
        "columnDefs": [{
            "className": "dt-left",
            "targets": "_all"
        }
        ],
        "dom": "lrtip"

    });

    $('#customSearch').keyup(function (){
        myTable.search($(this).val()).draw();
    })
}
