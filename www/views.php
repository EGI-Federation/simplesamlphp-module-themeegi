<?php
// Get global config
$config = SimpleSAML\Configuration::getInstance();
// Get the template
$template = new SimpleSAML\XHTML\Template($config, 'themeegi:views.tpl.php');
$template->show();