<?php

// Get Configuration
$themeConfig = SimpleSAML\Configuration::getConfig('module_themeegi.php');
$views = $themeConfig->getValue('views');

// Content
$body = $this->t('{themeegi:default:no_content}');

// Get request parameter and load Content
if(!empty($_REQUEST['id']) && !empty($views)) {
    $ld_view = $views[$_REQUEST['id']];
    $contextOptions = array(
        'ssl' => array(
            'verify_peer'   => false,
        ),
        'http' => array(
            'timeout' => 2,  // 2 Seconds
        ),
    );
    $sslContext = stream_context_create($contextOptions);
    $loaded_content = file_get_contents($ld_view, NULL, $sslContext);
    if(!empty($loaded_content)) {
      $body = $loaded_content;
    }
}

// Load Head and Dependencies
$this->data['jquery'] = array('core' => TRUE, 'ui' => TRUE, 'css' => TRUE);
// Load Header
$this->includeAtTemplateBase('includes/header.php');
// Load Body
print $body;
// Load Footer
$this->includeAtTemplateBase('includes/footer.php');

?>