function showPromo() {
    ouibounce(false,{
        'cookieName':'promoDepressao',
        'aggressive': true,
        callback:function () {
            $('#promo-overlay').fadeIn();
            $('#promoloader').fadeIn();
        }
    });
}

function closePromo() {
    $('#promoloader').fadeOut();
    $('#promo-overlay').fadeOut();
}