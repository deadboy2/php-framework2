/**
 * Created by Mhrustik on 11.02.2017.
 */

function call() {
    var msg = $('#formReCall').serialize();
    $.ajax({
        type: 'POST',
        url: '/ajax',
        data: msg,
        success: function (data) {
            $('#myModal').modal('hide');
            $('#myModal2').modal('hide');
            $('#myModalOk').modal('show');
        },
        error: function (xhr, str) {
            alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });

}