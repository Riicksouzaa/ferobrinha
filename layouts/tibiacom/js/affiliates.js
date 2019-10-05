let $formAddAffiliate = $("#form_add_affiliate");
let $formAddNivelAffiliate = $("#form_add_nivel_affiliate");

$.ajax({
    url:'?subtopic=accountmanagement&action=affiliates_api',
    type:'post',
    data:{'type':'getAllNivelAffiliate'},
    dataType:'JSON',
    success:function ($response) {
        console.log($response);
    }
});

$("#add_affiliate").on('click', function () {
    $formAddAffiliate.submit();
});

$("#add_nivel_affiliate").on('click', function () {
    $formAddNivelAffiliate.submit();
});

$formAddNivelAffiliate.submit(function () {
    let $data = $formAddNivelAffiliate.serialize();
    let $url = $formAddNivelAffiliate.attr("action");
    let $type = $formAddNivelAffiliate.attr("method");

    $.ajax({
        url: $url,
        data: $data,
        type: $type,
        dataType: "JSON",
        beforeSend: function () {
            iziToast.show({
                title: "Loading..."
            });
        },
        success: function ($response) {
            console.log($response);
            iziToast.destroy();
            $.each($response, function ($key, $value) {
                iziToast.show({
                    title: $value.status,
                    message: $value.msg,
                    position: 'topRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
                    timeout: 2500
                });
            });
        }
    });
    return false;
});

$formAddAffiliate.submit(function () {
    let $data = $formAddAffiliate.serialize();
    let $url = $formAddAffiliate.attr("action");
    let $type = $formAddAffiliate.attr("method");

    $.ajax({
        url: $url,
        data: $data,
        type: $type,
        dataType: "JSON",
        beforeSend: function () {
            iziToast.show({
                title: "Loading..."
            });
        },
        success: function ($response) {
            console.log($response);
            iziToast.destroy();
            $.each($response, function ($key, $value) {
                iziToast.show({
                    title: $value.status,
                    message: $value.msg,
                    position: 'topRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
                    timeout: 2500
                });
            });
        }
    });
    return false;
});