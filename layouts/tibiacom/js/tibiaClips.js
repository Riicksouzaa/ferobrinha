// let httpRequest = new XMLHttpRequest();
//
// let $key = "jlhwwz43qd9u6u7f7us3i9sf6v12br";
// let $game = "Tibia";
// let $limit = '3';
//
// httpRequest.addEventListener('load', clipsLoaded);
// httpRequest.open('GET', 'https://api.twitch.tv/kraken/clips/top?limit=' + $limit + '&game=' + $game + '&trending=true');
// httpRequest.setRequestHeader('Client-ID', $key);
// httpRequest.setRequestHeader('Accept', 'application/vnd.twitchtv.v5+json');
// httpRequest.send();
//
// function clipsLoaded() {
//     let clipsDisplay = document.getElementById('clips-display'),
//         clipList = JSON.parse(httpRequest.responseText);
//
//
//     clipList.clips.forEach(function (clip, index, array) {
//         let $clipItem = document.createElement('');
//         $clipItem.innerHTML = clip.embed_html;
//         clipsDisplay.appendChild($clipItem);
//     });
//     $('#troleiANajila').iziModal('open')
// }
//

let $clip = $("#opensModal");

$('#troleiANajila').iziModal({
    top: 50,
    headerColor: '#21c25e',
    background: 'green',
    title: $modalTitle,
    subtitle: $modalSubTitle,
    icon: 'icon-settings_system_daydream',
    overlayClose: true,
    iframe: true,
    iframeURL: 'https://player.twitch.tv/?channel=' + $streamName,
    iframeHeight: 500,
    fullscreen: true,
    openFullscreen: false,
    borderBottom: true,
    // group: 'grupo1',
    onFullscreen: function (modal) {
        console.log(modal.isFullscreen);
    },
    onClosing: function () {
    },
});

$clip.on('click', function () {
    $('#troleiANajila').iziModal('open')
});