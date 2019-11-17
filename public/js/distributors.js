$(document).ready(function () {
    $('#btn-save-distributor').on('click', function (event) {
        event.preventDefault();
        var form = $('#form-create-distributor');
        $.ajax({
            url: 'store/ajax',
            data: form.serialize(),
            dataType: 'html',
            method: 'post'
        }).done(function (data) {
            $('#distributors-list').html(data);
        }).fail(function (data) {
            alert('Failed to send the form');
        });
    });
});
