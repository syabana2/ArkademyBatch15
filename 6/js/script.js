$(function() {

    $('.tampilModalAdd').on('click', function() {
        $('#addModalLabel').html('ADD DATA');
        $('#name').val('');
        $('#work').val('');
        $('#salary').val('');
        $('.modal-footer button[type=submit]').html('ADD');
    });
    $('.tampilModalUbah').on('click', function() {
        $('#addModalLabel').html('EDIT DATA');
        $('.modal-footer button[type=submit]').html('EDIT');
        $('.modal-body form').attr('action', 'config/update.php')
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/arka/6/config/getData.php',
            data: {id: id},
            method: 'post',
            dataType: 'json',

            success: function(data) {
                $('#name').val(data.name);
                $('#work').val(data.id_work);
                $('#salary').val(data.id_salary);
                $('#id').val(data.id);
            }
        })

    });
});