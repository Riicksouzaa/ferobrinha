<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Souza
 * Date: 05/10/2019
 * Time: 02:22
 */

if (Website::getWebsiteConfig()->getValue('widget_tibiaClips')) { ?>

    <script>
        let $streamName = "<?=Website::getWebsiteConfig()->getValue('tibialcips_streamName');?>";
        let $parentName = "<?=Website::getWebsiteConfig()->getValue('tibialcips_parentName');?>";
        let $modalTitle = "<?=Website::getWebsiteConfig()->getValue('tibialcips_modalTitle');?>";
        let $modalSubTitle = "<?=Website::getWebsiteConfig()->getValue('tibialcips_modalSubtitle');?>";
    </script>

    <div id='troleiANajila' class='iziModal'>
        <div id="clips-display"></div>
    </div>
    <div class="Themebox">
        <div id="opensModal" style="width: 195px; height: 150px; position: absolute"></div>
        <iframe src="https://player.twitch.tv/?channel=<?=Website::getWebsiteConfig()->getValue('tibialcips_streamName');?>&parent=<?=Website::getWebsiteConfig()->getValue('tibialcips_parentName');?>"
                height="150"
                width="195"
                frameborder="false"
                scrolling="false"
                allowfullscreen="true">
        </iframe>
    </div>
    <div id="modal-iframe"></div>

    <script src="<?php echo $layout_name; ?>/js/tibiaClips.js<?php echo $css_version; ?>"></script>
<?php } ?>