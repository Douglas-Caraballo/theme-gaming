let iframe = document.querySelector('.embed-twitch iframe');
let channels = document.querySelector('#channels');
const source = "https://player.twitch.tv/?channel=";
const parent ="&parent=localhost";

if(iframe){
    channels.addEventListener('change', (e)=>{
        iframe.setAttribute('src', source+channels.value+parent)
    })
}
