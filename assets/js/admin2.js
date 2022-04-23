const success = $('#flash-data').data('flashdata');
if (success) {
    Swal.fire({
        title: 'SUCCESS',
        text: 'Data ' + success,
        icon: 'success'
    });
}

$('.delete-btn-conf').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value == true) {
            document.location.href = href;
        }
    })
});