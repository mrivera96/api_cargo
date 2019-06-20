/*$("#regs").pagination({
    dataSource: ['1, 2, 3, 4, 5, 6, 7, ... , 195'],
callback: function(data, pagination) {
    // template method of yourself
    var html = template(data);
    dataContainer.html(html);
}
})*/

$(document).ready(function () {
    $.ajax({
        url: "api/getStates"
    }).done(function (response) {
        var data = JSON.parse(response);
        for (var i = 0; i < data.length; i++) {
            $("#OSte").append('<option value="' + data[i] + '">' + data[i] + '</option>');
            $("#DSte").append('<option value="' + data[i] + '">' + data[i] + '</option>');
        }

    });
});

search = function () {
    oSte = $("#OSte").val();
    dSte = $("#DSte").val();
    Parent = document.getElementById('regs');
    while (Parent.hasChildNodes()) {
        Parent.removeChild(Parent.firstChild);
    }

    $.ajax({
        url: "api/results",
        method: "GET",
        data: {'O_Ste': oSte, 'D_Ste': dSte}
    }).done(function (response) {

        if (response !== "no results") {
            var data = response;


            for (var i = 0; i < data.length; i++) {
                $("#regs").append('<tr >' +
                    '<td ><input id="sms" name="sms" value="' + data[i]['Order_ID'] + '" type="checkbox"></td>' +
                    '               <td>' + data[i]['O_City'] + '</td>' +
                    '               <td>' + data[i]['O_State'] + '</td>' +
                    '               <td>' + data[i]['D_City'] + '</td>' +
                    '               <td>' + data[i]['D_State'] + '</td>' +
                    '               <td>' + data[i]['Carrier'] + '</td>' +
                    '               <td>' + data[i]['Based'] + '</td>' +
                    '               <td>' + data[i]['Phone1'] + '</td>' +
                    '               <td>' + data[i]['Phone2'] + '</td>' +
                    '               <td>' + data[i]['Notes'] + '</td>' +
                    '</tr>');
            }
        } else {
            $("#regs").append(' ');
        }


    });
};

editar = function () {
    var id = $("#sms:checked").val();
    window.location.href = '/cargo/public/editar?id=' + id;
};

/*sendMessage=function(){
    var phones=[];
    $.each($("#sms:checked"),function () {
        phones.push($(this).val())
    });
    console.log(phones)
};*/