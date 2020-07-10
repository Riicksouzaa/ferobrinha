function showPromo() {
    var promo = ouibounce(false,{
        'cookieName':'promoDepressao',
        // 'aggressive': true,
        callback:function () {
            $('#promo-overlay').fadeIn();
            $('#promoloader').fadeIn();
        }
    });
    promo.fire();
    promo.disable({cookieExpire: 1});
}

function closePromo() {
    $('#promoloader').fadeOut();
    $('#promo-overlay').fadeOut();
}
