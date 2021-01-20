
<?php
if(!empty($this->data['htmlinject']['htmlContentPost'])) {
  foreach($this->data['htmlinject']['htmlContentPost'] as $c) {
    print $c;
  }
}
?>
</div><!-- /container -->
</div><!-- /ssp-container -->

<?php if(strpos($this->t('{themeegi:discopower:cookies_text}'), 'not translated') === false || strpos($this->t('{themeegi:discopower:cookies_accept_btn_text}'), 'not translated') === false): ?>
  <!-- cookies popup -->
  <div id="cookies">
    <div id="cookies-wrapper">
      <p>
        <?php print $this->t('{themeegi:discopower:cookies_text}'); ?>
        <?php if(strpos($this->t('{themeegi:discopower:cookies_link_text}'), 'not translated') === false): ?>
        <a href="<?php print $this->t('{themeegi:discopower:cookies_link_url}'); ?>" target="_blank"><?php print $this->t('{themeegi:discopower:cookies_link_text}'); ?></a>
        <?php endif; ?>
      </p>
      <a id="js-accept-cookies" class="cookies-ok" href="#">
        <?php print $this->t('{themeegi:discopower:cookies_accept_btn_text}'); ?>
      </a>
    </div>
  </div>
  <!-- /cookies popup -->
<?php endif; ?>

<footer class="ssp-footer text-center">
  <div class="container-fluid ssp-footer--container container">
    <div class="row ssp-content-group--footer">
      <!--   Add language bar   -->
      <?php
      $includeLanguageBar = (!empty($_POST)) ? false : true;
      $includeLanguageBar = (isset($this->data['hideLanguageBar']) && $this->data['hideLanguageBar'] === true) ? false : true;

      if ($includeLanguageBar) {
          $this->includeAtTemplateBase('includes/language_bar.php');
      }
      ?>
      <div class="col-sm-12 col-md-4 ssp-footer__item ssp-footer__item--images text-center">
        <a href="https://grnet.gr/">
          <img class="ssp-footer__item__logo" src="<?php print SimpleSAML_Module::getModuleURL('themeegi/resources/images/grnet_logo_en.svg'); ?>" alt="GRNET" />
        </a>
          <img class="ssp-footer__item__logo--eu" src="<?php print SimpleSAML_Module::getModuleURL('themeegi/resources/images/eu.svg'); ?>" alt="European Union" />
      </div>
      <div class="col-sm-12 col-md-4 ssp-footer__item">
        <div class="ssp-footer__item__links">
          <a class="ssp-footer__item__links__left_link" href="/proxy/module.php/themeegi/views.php?id=aup">Terms</a><a href="/proxy/module.php/themeegi/views.php?id=privacy">Privacy</a>
        </div>
      </div>
    </div><!-- /row -->
    <div class="row">
      <div class="col-sm-12 ssp-footer__item ssp-footer__item--ack text-center">
        Copyright &copy;<?php
          print (strpos($this->t('{themeegi:discopower:copyright_year_start}'), 'not translated') === false)
                ? $this->t('{themeegi:discopower:copyright_year_start}') . '-'
                : '';
          print date("Y");
          ?> | Check-in is an EGI service provided by GRNET, receiving funding from the
        <a href="https://www.egi.eu/about/egi-foundation/" target="_blank">EGI Foundation (EGI.eu)</a> and the <a href="https://eosc-hub.eu" target="_blank">EOSC-hub project</a> (Horizon 2020) under Grant number 777536 | Powered by <a href="https://github.com/rciam">RCIAM</a>
      </div>
    </div>
  </div> <!-- /container-fluid -->
</footer>

  <script type="text/javascript"
          src="<?php print htmlspecialchars(SimpleSAML_Module::getModuleURL('themeegi/resources/js/cookie.js')); ?>">
  </script>

  <script type="text/javascript"
          src="<?php print htmlspecialchars(SimpleSAML_Module::getModuleURL('themeegi/resources/js/dropdown.js')); ?>">
  </script>
  <script type="text/javascript"
          src="<?php print htmlspecialchars(SimpleSAML_Module::getModuleURL('themeegi/resources/js/modal.js')); ?>">
  </script>
  <script type="text/javascript"
          src="<?php print htmlspecialchars(SimpleSAML_Module::getModuleURL('themeegi/resources/js/tooltip.js')); ?>">
  </script>
  <script type="text/javascript"
          src="<?php print htmlspecialchars(SimpleSAML_Module::getModuleURL('themeegi/resources/js/theme.js')); ?>">
  </script>

</body>
</html>
