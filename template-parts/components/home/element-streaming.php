<?php
    $terms = get_terms([
        'taxonomy'=> 'transmision',
        'hide_empty' => false,
    ]);
?>
<div class="wrapper-transmition">
    <span class="wrapper-transmition__title">En vivo</span>
    <div class="wrapper-transmition__embed-twitch">
        <iframe src="https://player.twitch.tv/?channel=reventxz&parent=localhost" frameborder="0" allowfullscreen="true" scrolling="no" height="100%" width="100%"></iframe>
    </div>
    <div class="wrapper-transmition__select-channel">
        <select class="wrapper-transmition__select-channel__channels" name="channels" id="channels">
            <optgroup label="Canales de Twitch">
                <option selected disabled>Canales</option>
                <?php
                    foreach($terms as $transmision){
                        echo '<option value="'.$transmision->slug.'">'.$transmision->name.'</option>';
                    }
                ?>
            </optgroup>
        </select>
    </div>
</div>
