$("#picpayform").submit(function() {
    var form = $(this);
    var data = form.serialize();
    var url = form.attr("action");
    var type = form.attr("method");

    $.ajax({
        url: url,
        data: data,
        type: type,
        dataType: "json",
        beforeSend: function(){
            iziToast.show({
                title:"Now:",
                message: "Loading",
                position:"topRight",
                zindex: 99999,
                timeout: 2500
            })
        },
        success: function(response) {
            console.log(response);
            if(response.status === "success"){
                iziToast.success({
                    title:"Pagamento processado:",
                    message:response.msg,
                    position:"topRight",
                    timeout: 2500,
                    zindex: 99999,
                    onClosing: function (instance, toast, closedBy) {
                        const modalPicPay = $("#modal-picpay");
                        modalPicPay.iziModal({
                            top: 50,
                            headerColor: "#21c25e",
                            background: "green",
                            title: "Fazer doação com PicPay",
                            subtitle: "Escaneie o qrcode com o aplicativo PicPay",
                            icon: "icon-settings_system_daydream",
                            overlayClose: true,
                            iframe: true,
                            iframeURL: response.url_qrcode,
                            iframeHeight: 500,
                            fullscreen: true,
                            openFullscreen: false,
                            borderBottom: false,
                            group: "grupo1",
                            onFullscreen: function (modal) {
                                console.log(modal.isFullscreen);
                            },
                            onClosing: function () {
                                window.location.replace("./?subtopic=accountmanagement&action=paymentshistory");
                            },
                        });
                        modalPicPay.iziModal("open");
                    }
                })
            }else{
                iziToast.error({
                    title:"Error:",
                    message:response.msg,
                    position:"topRight",
                    timeout:2500,
                    zindex: 99999
                })
            }
        }
    });
    return false;
});



let newPicPay = $("#picpayTest");

newPicPay.on('click', function () {
    $.ajax({
        url: "https://appws.picpay.com/ecommerce/public/payments",
        data: data,
        type: "POST",
        dataType: "json",
        beforeSend: function (request) {
            request.setRequestHeader("x-picpay-token", picPayToken);
        },
        success: function (response) {
            iziToast.success({
                title: "Success:",
                message: "Em instantes será aberto um modal com o qrcode para pagamento.",
                position: "topRight",
                timeout: 2500,
                zindex: 99999,
                onClosing: function (instance, toast, closedBy) {
                    $("#modal-picpay").iziModal("open");
                }
            });
        }
    });
    return false;
});