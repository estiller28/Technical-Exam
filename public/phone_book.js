$(document).ready( function () {
    renderTable();

} );

function renderTable(){
    myTable =  $('#phone_books').DataTable({
        "responsive": false, "autoWidth": false, "pageLength": 4, "lengthChange": false,
        "paging": true,
        "scrollX": true,
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

//
document.addEventListener("DOMContentLoaded", () => {
    Livewire.hook('message.received', (message, component) => {
        $('#phone_books').DataTable().destroy();
    })
    Livewire.hook('message.processed', (message, component) => {
        renderTable();
    })
});


document.addEventListener("DOMContentLoaded", () => {
    Livewire.on('importContact', () => {
        $('#uploadContactModal').modal('hide');
    })

    Livewire.on('update', () => {
        $('#updateContactModal').modal('hide');
    })

    Livewire.on('saveDataFromFileToDB', () => {
        $('#uploadContactModal').modal('hide');
    })
});


// sweetalert


window.addEventListener('swal:success', event => {
    swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: 'success',
        confirmButtonColor: '#0D6EFD',
        confirmButtonText: 'Ok'
    });
});
