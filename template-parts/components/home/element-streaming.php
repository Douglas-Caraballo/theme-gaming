<div class="wrapper-twitch-transmision">
    <span>En vivo</span>
    <div class="twitch-container" id="twitch-embed">
    </div>
    <select name="channels" id="channels">
        <option value="lla">lla</option>
        <option value="reventxz">reventxz</option>
    </select>
    <script src="https://embed.twitch.tv/embed/v1.js"></script>
    <script type="text/javascript">
        const channnelSelect = document.getElementById('channels');
        const container = document.getElementById('twitch-embed');
        channnelSelect.addEventListener('change', ()=>{
            let channelSelected = channnelSelect.value;
            transmision(channelSelected);
        });

        function transmision(channelSelected){
            let embed = new Twitch.Embed("twitch-embed", {
                        channel: channelSelected,
                        width: "100%",
                        height: "100%",
                        // Only needed if this page is going to be embedded on other websites
                        //parent: ["embed.example.com", "othersite.example.com"]
                        });
            container.innerHTML='';
            container.appendChild(embed._iframe);
        }
    </script>
</div>
