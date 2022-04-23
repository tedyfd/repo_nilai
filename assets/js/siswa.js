var table = '';
// DataTable, untuk Pencarian
var table = $('#tabel1').DataTable({
    initComplete: function() {
        // Apply the search
        this.api().columns().every(function() {
            var that = this;

            $('input', this.footer()).on('keyup change clear', function() {
                if (that.search() !== this.value) {
                    that
                        .search(this.value)
                        .draw();
                }
            });
        });
    }
});

//untuk tampilkan button export 
$('#tabel1').DataTable({
    destroy: true,
    dom: 'Bfrtip',
    buttons: [
        'pageLength',
    ],
    "lengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
    ],
});