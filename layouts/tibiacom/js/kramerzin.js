$('.iziModal').iziModal({
    width: 700,
    radius: 5,
    padding: 20,
    group: 'products',
    loop: true,
    // group: 'grupo1',
    onFullscreen: function (modal) {
        console.log(modal.isFullscreen);
    },
    onClosing: function () {
    },
});


$("#kkkkk").on('click', () => {
    $(".iziModal").iziModal("open");
})
