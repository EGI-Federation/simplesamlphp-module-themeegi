<?php
// Get global config
$config = SimpleSAML\Configuration::getInstance();
// Get the template
$template = new SimpleSAML\XHTML\Template($config, 'themeegi:confirmemail.tpl.php');
$template->show();