<?php
$this->data['header'] = $this->t('{themeegi:attrauthcomanage:exception_header}');

$this->includeAtTemplateBase('includes/header.php');
?>
<h1><?= $this->t('{themeegi:attrauthcomanage:exception_title}') ?></h1>

<?= $this->t('{themeegi:attrauthcomanage:exception_description}') ?>
<pre>
<?php
$tag = preg_replace('/attrauthcomanage:/', 'themeegi:', $this->data['e'], 1);
echo !empty($this->getTag('{' . $tag . '}'))
      ? $this->t('{' . $tag . '}', $this->data['parameters'])
      : $this->data['e'];
?>
</pre>

<?php
$this->includeAtTemplateBase('includes/footer.php');
