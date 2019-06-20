$(document).ready(function () {
    $.ajax({
        url: "api/getStates"
    }).done(function (response) {
        var data = JSON.parse(response);
        for (var i = 0; i < data.length; i++) {
            $("#O_State").append('<option value="' + data[i] + '">' + data[i] + '</option>');
            $("#D_State").append('<option value="' + data[i] + '">' + data[i] + '</option>');
        }

    });
});

save = function () {

    $.ajax({
        url: "api/createRoute",
        method: "POST",
        data: {
            'Order_ID': $('#Order_ID').val(),
            'Vehicle': $('#Vehicle').val(),
            'O_City': $('#O_City').val(),
            'O_State': $('#O_State').val(),
            'O_ZIP': $('#O_ZIP').val(),
            'D_City': $('#D_City').val(),
            'D_State': $('#D_State').val(),
            'D_ZIP': $('#D_ZIP').val(),
            'Carrier': $('#Carrier').val(),
            'Based': $('#Based').val(),
            'Phone1': $('#Phone1').val(),
            'Phone2': $('#Phone2').val(),
            'email': $('#email').val(),
            'Ins_exp': $('#Ins_exp').val(),
            'ID': $('#ID').val(),
            'Last_Action': $('#Last_Action').val(),
            'Deposit': $('#Deposit').val(),
            'Tariff': $('#Tariff').val(),
            'Carrier_Pay': $('#Carrier_Pay').val(),
            'Notes': $('#Notes').val()
        }
    }).done(function (response) {

        alert(JSON.parse(response));
        window.location.replace("/cargo/public");

    });
};