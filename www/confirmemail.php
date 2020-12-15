<?php
// Get global config
$config = SimpleSAML_Configuration::getInstance();
// Get the template
$template = new SimpleSAML_XHTML_Template($config, 'themeegi:confirmemail.tpl.php');
$template->show();