$(document).ready(function() {
    $('.modalbtn').on('click', function() {
        $('#editmodal').modal('show');
    });
});
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
        'excelHtml5',
        'csvHtml5',
    ],
    "lengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
    ],
});

$('#import_csv_mid').on('submit', function(event) {
    event.preventDefault();
    $.ajax({
        url: "<?php echo base_url(); ?>admin/import_mid",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
            $('#import_mid_btn').html('Importing...');
        },
        success: function(data) {
            $('#import_csv_mid')[0].reset();
            $('#import_mid_btn').attr('disabled', false);
            $('#import_mid_btn').html('Import Done');
            alert("Import berhasil!");
            location.reload();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("Gagal Menyimpan");
        }
    })
});

$('#import_csv_semester').on('submit', function(event) {
    event.preventDefault();
    $.ajax({
        url: "<?php echo base_url(); ?>admin/import_semester",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
            $('#import_semester_btn').html('Importing...');
        },
        success: function(data) {
            $('#import_csv_semester')[0].reset();
            $('#import_semester_btn').attr('disabled', false);
            $('#import_semester_btn').html('Import Done');
            alert("Import berhasil!");
            location.reload();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("Gagal menyimpan");
        }
    })
});
$('#import_csv_siswa').on('submit', function(event) {
    event.preventDefault();
    $.ajax({
        url: "<?php echo base_url(); ?>admin/import_siswa",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
            $('#import_siswa_btn').html('Importing...');
        },
        success: function(data) {
            $('#import_csv_siswa')[0].reset();
            $('#import_siswa_btn').attr('disabled', false);
            $('#import_siswa_btn').html('Import Done');
            alert("Import berhasil!");
            location.reloads();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("Gagal menyimpan");
        }
    })
});

$('.submit-btn').on('click', function(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data akan disimpan ke database!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.isConfirmed) {
            $('#form').submit();
        }
    })
});