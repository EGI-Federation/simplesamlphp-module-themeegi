<?php

$themeConfig = SimpleSAML\Configuration::getConfig('module_themeegi.php');
$enable_cookies_banner = $themeConfig->getValue('enable_cookies_banner');

if (!empty($this->data['htmlinject']['htmlContentPost'])) {
    foreach ($this->data['htmlinject']['htmlContentPost'] as $c) {
        echo $c;
    }
}
?>
</div><!-- /container -->
</div><!-- /ssp-container -->

<?php if ($enable_cookies_banner) : ?>
    <!-- cookies popup -->
    <div id="cookies">
        <div id="cookies-wrapper">
            <p>
                <?= $this->t('{themeegi:discopower:cookies_text}') ?>
                <?php
                if (
                    strpos($this->t('{themeegi:discopower:cookies_link_text}'), 'not translated') === false
                ) : ?>
                    <a
                        href="<?= $this->t('{themeegi:discopower:cookies_link_url}') ?>"
                        target="_blank"
                    >
                        <?= $this->t('{themeegi:discopower:cookies_link_text}') ?>
                    </a>
                <?php endif; ?>
            </p>
            <a id="js-accept-cookies" class="cookies-ok" href="#">
                <?= $this->t('{themeegi:discopower:cookies_accept_btn_text}') ?>
            </a>
        </div>
    </div>
    <!-- /cookies popup -->
<?php endif; ?>

<footer class="ssp-footer text-center">
    <div class="container-fluid ssp-footer--container container">
        <div style="display:flex; align-items:center;" class="row ssp-content-group--footer">
            <!--   Add language bar   -->
            <?php
            $includeLanguageBar = (!empty($_POST)) ? false : true;
            $includeLanguageBar = (
                (isset($this->data['hideLanguageBar']) && $this->data['hideLanguageBar'] === true)
                ? false
                : true
            );

            if ($includeLanguageBar) {
                $this->includeAtTemplateBase('includes/language_bar.php');
            }

            ?>
            <div class="col-sm-12 col-md-4 ssp-footer__item ssp-footer__item--images text-center">
                <a href="https://grnet.gr/">
                    <img
                        class="ssp-footer__item__logo"
                        src="<?= SimpleSAML\Module::getModuleURL('themeegi/resources/images/grnet_logo_en.svg') ?>"
                        alt="GRNET"
                    />
                </a>
                <img
                    class="ssp-footer__item__logo--eu"
                    src="<?= SimpleSAML\Module::getModuleURL('themeegi/resources/images/eu.svg') ?>"
                    alt="European Union"
                />
            </div>
            <div class="col-sm-12 col-md-4 ssp-footer__item">
                <div class="ssp-footer__item__links">
                    <a class="ssp-footer__item__links__left_link" href="/proxy/module.php/themeegi/views.php?id=aup">
                        Terms
                    </a>
                    <a href="/proxy/module.php/themeegi/views.php?id=privacy">Privacy</a>
                    <a href="https://docs.egi.eu/users/aai/check-in">Documentation</a>
                </div>
            </div>
        </div><!-- /row -->
        <div class="row">
        <div class="col-sm-12 ssp-footer__item ssp-footer__item--ack text-center">
                Copyright &copy;<?=
                (
                    (strpos($this->t('{themeegi:discopower:copyright_year_start}'), 'not translated') === false)
                    ? $this->t('{themeegi:discopower:copyright_year_start}') . '-'
                    : ''
                )
                . date("Y") ?> | Check-in is an EGI service provided by GRNET, receiving funding from the
                <a href="https://www.egi.eu/egi-foundation/" target="_blank">EGI Foundation (EGI.eu)</a>
                and the <a href="https://www.egi.eu/project/egi-ace/" target="_blank">EGI-ACE project</a>
                (Horizon 2020) under Grant number 101017567 | Powered by <a href="https://rciam.github.io/rciam-docs/" target="_blank">RCIAM</a>
            </div>
        </div>
    </div> <!-- /container-fluid -->
</footer>

<script
    type="text/javascript"
    src="<?= htmlspecialchars(SimpleSAML\Module::getModuleURL('themeegi/resources/js/cookie.js')) ?>"
>
</script>
<script
    type="text/javascript"
    src="<?= htmlspecialchars(SimpleSAML\Module::getModuleURL('themeegi/resources/js/dropdown.js')) ?>"
>
</script>
<script
    type="text/javascript"
    src="<?= htmlspecialchars(SimpleSAML\Module::getModuleURL('themeegi/resources/js/modal.js')) ?>"
>
</script>
<script
    type="text/javascript"
    src="<?= htmlspecialchars(SimpleSAML\Module::getModuleURL('themeegi/resources/js/tooltip.js')) ?>"
>
</script>
<script
    type="text/javascript"
    src="<?= htmlspecialchars(SimpleSAML\Module::getModuleURL('themeegi/resources/js/theme.js')) ?>"
>
</script>

</body>

</html>
