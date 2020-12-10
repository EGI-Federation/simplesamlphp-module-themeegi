<?php
$this->includeAtTemplateBase('includes/header.php');
?>
<link rel="stylesheet" type="text/css" href="resources/css/confirmemail.css">

<div class="body-container" id="content">
    <div class="message-container">
      <span class="head-title">
        <img class="email-gif" src="resources/icons/email.gif">
        <h2><span class="title-msg"><?php echo $this->t('{themeegi:default:message_title}'); ?></span></h2>
      </span>
      <div class="message"><?php echo $this->t('{themeegi:default:message_bd}'); ?></div>
      <div class="subtitle"><?php echo $this->t('{themeegi:default:message_sub}'); ?></div>
    </div>
</div>

<?php
$this->includeAtTemplateBase('includes/footer.php'); ?>
