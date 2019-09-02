<div id="loader">
  <div class="sk-circle">
    <div class="sk-circle1 sk-child"></div>
    <div class="sk-circle2 sk-child"></div>
    <div class="sk-circle3 sk-child"></div>
    <div class="sk-circle4 sk-child"></div>
    <div class="sk-circle5 sk-child"></div>
    <div class="sk-circle6 sk-child"></div>
    <div class="sk-circle7 sk-child"></div>
    <div class="sk-circle8 sk-child"></div>
    <div class="sk-circle9 sk-child"></div>
    <div class="sk-circle10 sk-child"></div>
    <div class="sk-circle11 sk-child"></div>
    <div class="sk-circle12 sk-child"></div>
  </div>
</div>
<?php

$faventry = NULL;
foreach( $this->data['idplist'] AS $tab => $slist) {
  if (!empty($this->data['preferredidp']) && array_key_exists($this->data['preferredidp'], $slist))
    $faventry = $slist[$this->data['preferredidp']];
}


if(!array_key_exists('header', $this->data)) {
  $this->data['header'] = 'selectidp';
}
$this->data['header'] = $this->t($this->data['header']);
$this->data['jquery'] = array('core' => TRUE, 'ui' => TRUE, 'css' => TRUE);


$this->data['head'] = '<script type="text/javascript" src="' . SimpleSAML_Module::getModuleUrl('discopower/js/jquery.livesearch.js')  . '"></script>';
$this->data['head'] .= '<script type="text/javascript" src="' . SimpleSAML_Module::getModuleUrl('discopower/js/' . $this->data['score'] . '.js')  . '"></script>';

$this->data['head'] .= '<script type="text/javascript">

  $(document).ready(function() {';
    $i = 0;
    foreach ($this->data['idplist'] AS $tab => $slist) {
  if ($tab == 'idps_in_searchable_list') {
      $this->data['head'] .= "\n" . '$("#query_' . $tab . '").liveUpdate("#list_' . $tab . '")' .
        (($i++ == 0) && (empty($faventry)) ? '.focus()' : '') . ';';
  }


    }

    $this->data['head'] .= '
});

</script>';

if (!empty($faventry)) $this->data['autofocus'] = 'favouritesubmit';

$this->includeAtTemplateBase('includes/header.php');

function showEntry($t, $metadata, $favourite = FALSE, $withIcon = FALSE) {

  $basequerystring = '?' .
    'entityID=' . urlencode($t->data['entityID']) . '&amp;' .
    'return=' . urlencode($t->data['return']) . '&amp;' .
    'returnIDParam=' . urlencode($t->data['returnIDParam']) . '&amp;idpentityid=';



  if($withIcon) {
    if(isset($metadata['login_button']['label']) && !empty($metadata['login_button']['label'])) {
        $label =  $metadata['login_button']['label'];
    }
    $filename = $metadata['login_button']['icon_filename'];
    $css_classname = $metadata['login_button']['css_classname'];
    $css_button_type = '';

    // is $label empty string
    if(!isset($label) || trim($label) == '') {
      $css_button_type = 'ssp-btn__icon-no-label';
    }
    else {
      $css_button_type = 'ssp-btn__icon-with-label';
    }

    $html = '<a class="metaentry ssp-btn ' . $css_button_type  .  ' ' . $css_classname . '" href="' . $basequerystring . urlencode($metadata['entityid']) . '">';
    $html .= '<img alt="Identity Provider" class="entryicon" src="' . SimpleSAML_Module::getModuleURL('themeegi/resources/images/' . $filename ) . '" />';
    if (isset($label)) {
        $html .= '<span>' . $label . '</span></a>';
    }
  }
  else {
    $html = '<a class="metaentry " href="' . $basequerystring . urlencode($metadata['entityid']) . '">';
    $html .= htmlspecialchars(getTranslatedName($t, $metadata)) . '';

    if(array_key_exists('icon', $metadata) && $metadata['icon'] !== NULL) {
      $iconUrl = \SimpleSAML\Utils\HTTP::resolveURL($metadata['icon']);
      $html .= '<img alt="Identity Provider" class="entryicon" src="' . htmlspecialchars($iconUrl) . '" />';
    }

    $html .= '</a>';
  }



  return $html;
}

?>

  <h2 class="text-center"><?php echo $this->t('{themeegi:discopower:title}'); ?></h2>


<?php

function getTranslatedName($t, $metadata) {
  if (isset($metadata['UIInfo']['DisplayName'])) {
    $displayName = $metadata['UIInfo']['DisplayName'];
    assert('is_array($displayName)'); // Should always be an array of language code -> translation
    if (!empty($displayName)) {
      return $t->getTranslation($displayName);
    }
  }

  if (array_key_exists('name', $metadata)) {
    if (is_array($metadata['name'])) {
      return $t->getTranslation($metadata['name']);
    } else {
      return $metadata['name'];
    }
  }
  return $metadata['entityid'];
}


$this->includeAtTemplateBase('includes/login_help.php');


if (!empty($faventry)) {
  echo('
    <div class="modal fade" id="favourite-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="js-close-custom close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title">' . $this->t('{themeegi:discopower:favourite_dialog_title}') . '</h2>
          </div>
          <div class="modal-body ssp-modal-body">
            <div class="row text-center">
              <form id="idpselectform" method="get" action="' . $this->data['urlpattern'] . '" class="ssp-form-favourite">
                <input type="hidden" name="entityID" value="' . htmlspecialchars($this->data['entityID']) . '" />
                <input type="hidden" name="return" value="' . htmlspecialchars($this->data['return']) . '" />
                <input type="hidden" name="returnIDParam" value="' . htmlspecialchars($this->data['returnIDParam']) . '" />
                <input type="hidden" name="idpentityid" value="' . htmlspecialchars($faventry['entityid']) . '" />
                <input type="submit" name="formsubmit" id="favouritesubmit" class="ssp-btn ssp-btn__action text-uppercase" value="'
                  . $this->t('login_at') . ' ' . htmlspecialchars(getTranslatedName($this, $faventry)) . '" />
              </form>
            </div>
            <div class="row text-center ssp-modal-or">' . $this->t('{themeegi:discopower:or}') . '</div>
            <div class="row text-center">
              <button class="ssp-btn text-uppercase ssp-btn ssp-btn__secondary js-close-custom">' . $this->t('{themeegi:discopower:favourite_dialog_button_close}')  . '</button>
            </div>
          </div> <!-- /modal-body -->
        </div> <!-- /modal-content -->
      </div> <!-- /modal-dialog -->
    </div> <!-- /modal -->
  ');
}

$idps_in_searchable_list_index;
$idps_with_logos_index;
foreach( $this->data['idplist'] AS $tab => $slist) {
  if (!empty($slist)) {
    if($tab == 'idps_in_searchable_list') {
      $idps_in_searchable_list_index = array_search($tab, array_keys($this->data['idplist']));
      $top = '<div class="row ssp-content-group js-spread">
                <div class="col-sm-12 js-spread">';
      $search_name = 'query_' . $tab;
      $search = '<div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                  <form id="idpselectform" action="?" method="get">
                    <input class="form-control" aria-describedby="search institutions" placeholder="Search..." type="text" value="" name="'
                    . $search_name . '" id="' . $search_name . '" />'
                . '</form>'
                . '</div>';
      $list_open = '<div class="metalist ssp-content-group__provider-list ssp-content-group__provider-list--idps_in_searchable_list js-spread" id="list_' . $tab . '">';
      $list_items = '';
      $close = '</div></div></div>'; // /metalist /ssp-content-group /row

      if (!empty($this->data['preferredidp']) && array_key_exists($this->data['preferredidp'], $slist)) {
        $idpentry = $slist[$this->data['preferredidp']];
        $list_items .= (showEntry($this, $idpentry, TRUE));
      }

      foreach ($slist AS $idpentry) {
        if ($idpentry['entityid'] != $this->data['preferredidp']) {
          $list_items .= (showEntry($this, $idpentry));
        }
      }
      echo($top . $search . $list_open . $list_items . $close);
    }
    else if($tab == "idps_with_logos") {
      $idps_with_logos_index = array_search($tab, array_keys($this->data['idplist']));
      $top = '<div class="row ssp-content-group"><div class="col-sm-12">
            ';
      $list_open = '<div class="metalist ssp-content-group__provider-list ssp-content-group__provider-list--other js-idps">';
      $list_items = '';
      $close_list = '</div>'; // /metalist
      $close = '</div></div>'; // /ssp-content-group /col-sm-12
      if (!empty($this->data['preferredidp']) && array_key_exists($this->data['preferredidp'], $slist)) {
        $idpentry = $slist[$this->data['preferredidp']];
        $list_items .=  (showEntry($this, $idpentry, TRUE, TRUE));
      }

      foreach ($slist AS $idpentry) {
        if ($idpentry['entityid'] != $this->data['preferredidp']) {
          $list_items .= (showEntry($this, $idpentry, FALSE, TRUE));
        }
      }
      $list_items .= '<p class="ssp-logos__help" id="js-open-help"><a href="#">' . $this->t('{themeegi:discopower:login_help_text}')  .'</a></p>';
      if($idps_in_searchable_list_index < $idps_with_logos_index) {
        $or = '<div class="text-center ssp-line-or-line ssp-line-or-line--top"><span class="ssp-line-or-line__or">' . $this->t('{themeegi:discopower:or}') . '</span></div>';
        echo $top . $or . $list_open . $list_items . $close_list . $close;
      }
      else {
        $or = '<div class="text-center ssp-line-or-line ssp-line-or-line--bottom"><span class="ssp-line-or-line__or">' . $this->t('{themeegi:discopower:or}') . '</span></div>';
        echo $top . $list_open . $list_items . $close_list . $or . $close;
      }
    }
  }
}

?>





<?php $this->includeAtTemplateBase('includes/footer.php');
