
<?php
if(!empty($this->data['htmlinject']['htmlContentPost'])) {
  foreach($this->data['htmlinject']['htmlContentPost'] AS $c) {
    echo $c;
  }
}
?>
  </div><!-- /container -->
  </div><!-- /ssp-container -->

<?php if(strpos($this->t('{themeegi:discopower:cookies_text}'), 'not translated') === FALSE || strpos($this->t('{themeegi:discopower:cookies_accept_btn_text}'), 'not translated') === FALSE) { ?>
  <!-- cookies popup -->
  <div id="cookies">
    <div id="cookies-wrapper">
      <p>
        <?php echo $this->t('{themeegi:discopower:cookies_text}'); ?>
        <?php if(strpos($this->t('{themeegi:discopower:cookies_link_text}'), 'not translated') === FALSE) { ?>
        <a href="<?php echo $this->t('{themeegi:discopower:cookies_link_url}'); ?>" target="_blank"><?php echo $this->t('{themeegi:discopower:cookies_link_text}'); ?></a>
        <?php } ?>
      </p>
      <a id="js-accept-cookies" class="cookies-ok" href="#">
        <?php echo $this->t('{themeegi:discopower:cookies_accept_btn_text}'); ?>
      </a>
    </div>
  </div>
  <!-- /cookies popup -->
<?php
}
?>

<footer class="ssp-footer text-center">
  <div class="container-fluid ssp-footer--container container">
    <div class="row ssp-content-group--footer">

<?php

$includeLanguageBar = TRUE;
if (!empty($_POST))
  $includeLanguageBar = FALSE;
if (isset($this->data['hideLanguageBar']) && $this->data['hideLanguageBar'] === TRUE)
  $includeLanguageBar = FALSE;

if ($includeLanguageBar) {

  $languages = $this->getLanguageList();
  if ( count($languages) > 1 ) {
    echo '<div class="col-sm-12 col-md-4 ssp-footer__item">
      <div class="dropup ssp-footer__item__lang">';
    $langnames = array(
      'no' => 'Bokmål', // Norwegian Bokmål
      'nn' => 'Nynorsk', // Norwegian Nynorsk
      'se' => 'Sámegiella', // Northern Sami
      'sam' => 'Åarjelh-saemien giele', // Southern Sami
      'da' => 'Dansk', // Danish
      'en' => 'English',
      'de' => 'Deutsch', // German
      'sv' => 'Svenska', // Swedish
      'fi' => 'Suomeksi', // Finnish
      'es' => 'Español', // Spanish
      'fr' => 'Français', // French
      'it' => 'Italiano', // Italian
      'nl' => 'Nederlands', // Dutch
      'lb' => 'Lëtzebuergesch', // Luxembourgish
      'cs' => 'Čeština', // Czech
      'sl' => 'Slovenščina', // Slovensk
      'lt' => 'Lietuvių kalba', // Lithuanian
      'hr' => 'Hrvatski', // Croatian
      'hu' => 'Magyar', // Hungarian
      'pl' => 'Język polski', // Polish
      'pt' => 'Português', // Portuguese
      'pt-br' => 'Português brasileiro', // Portuguese
      'ru' => 'русский язык', // Russian
      'et' => 'eesti keel', // Estonian
      'tr' => 'Türkçe', // Turkish
      'el' => 'ελληνικά', // Greek
      'ja' => '日本語', // Japanese
      'zh' => '简体中文', // Chinese (simplified)
      'zh-tw' => '繁體中文', // Chinese (traditional)
      'ar' => 'العربية', // Arabic
      'fa' => 'پارسی', // Persian
      'ur' => 'اردو', // Urdu
      'he' => 'עִבְרִית', // Hebrew
      'id' => 'Bahasa Indonesia', // Indonesian
      'sr' => 'Srpski', // Serbian
      'lv' => 'Latviešu', // Latvian
      'ro' => 'Românește', // Romanian
      'eu' => 'Euskara', // Basque
    );

    $textarray = array();
    foreach ($languages AS $lang => $current) {
      $lang = strtolower($lang);
      if ($current) {
        $lang_current = $langnames[$lang];
      } else {
        $textarray[] = '<li class="ssp-dropdown__two_cols--item"><a href="' . htmlspecialchars(\SimpleSAML\Utils\HTTP::addURLParameters(\SimpleSAML\Utils\HTTP::getSelfURL(), array($this->languageParameterName => $lang))) . '">' .
          $langnames[$lang] . '</a></li>';
      }
    }
    echo '<button class="ssp-btn btn ssp-btn__footer dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'
      . $lang_current
      . '<span class="caret"></span>
      </button>
      <ul class="dropdown-menu dropdown-menu-left ssp-dropdown__two_cols" aria-labelledby="dropdownMenu1">';
    echo join(' ', $textarray);
    echo '</ul></div></div>'; // /dropup /col-sm-4
  }
}

?>
      <div class="col-sm-12 col-md-4 ssp-footer__item ssp-footer__item--images text-center">
        <a href="https://grnet.gr/">
          <img class="ssp-footer__item__logo" src="<?php echo SimpleSAML_Module::getModuleURL('themeegi/resources/images/grnet_logo_en.svg'); ?>" alt="GRNET" />
        </a>
          <img class="ssp-footer__item__logo--eu" src="<?php echo SimpleSAML_Module::getModuleURL('themeegi/resources/images/eu.svg'); ?>" alt="European Union" />
      </div>
      <div class="col-sm-12 col-md-4 ssp-footer__item">
        <div class="ssp-footer__item__links">
          <a class="ssp-footer__item__links__left_link" href="https://aai.egi.eu/terms">Terms</a><a href="https://aai.egi.eu/privacy">Privacy</a>
        </div>
      </div>
    </div><!-- /row -->
    <div class="row">
      <div class="col-sm-12 ssp-footer__item ssp-footer__item--ack text-center">
        Copyright &copy; 2016-2018 | Check-in is an EGI service provided by GRNET, receiving funding from the <a href="https://www.egi.eu/about/egi-foundation/" target="_blank">EGI Foundation (EGI.eu)</a> and the <a href="https://eosc-hub.eu" target="_blank">EOSC-hub project</a> (Horizon 2020) under Grant number 777536 | Powered by <a href="https://github.com/rciam">RCIAM</a>
      </div>
    </div>
  </div> <!-- /container-fluid -->
</footer>

  <script type="text/javascript"
          src="<?php echo htmlspecialchars(SimpleSAML_Module::getModuleURL('themeegi/resources/js/cookie.js')); ?>">
  </script>

  <script type="text/javascript"
          src="<?php echo htmlspecialchars(SimpleSAML_Module::getModuleURL('themeegi/resources/js/dropdown.js')); ?>">
  </script>
  <script type="text/javascript"
          src="<?php echo htmlspecialchars(SimpleSAML_Module::getModuleURL('themeegi/resources/js/modal.js')); ?>">
  </script>
  <script type="text/javascript"
          src="<?php echo htmlspecialchars(SimpleSAML_Module::getModuleURL('themeegi/resources/js/tooltip.js')); ?>">
  </script>
  <script type="text/javascript"
          src="<?php echo htmlspecialchars(SimpleSAML_Module::getModuleURL('themeegi/resources/js/theme.js')); ?>">
  </script>

</body>
</html>
