<?php
/*-------------------------------------------------------------------------------	
# mod_pixabay module for Joomla 3.x v1.1.0	
# -------------------------------------------------------------------------------	
# author    JoomDev (Formerly GraphicAholic)
# copyright Copyright (C) 2020 Joomdev, Inc. All rights reserved.
# @license - GNU General Public License version 2 or later
# Websites: https://www.joomdev.com
--------------------------------------------------------------------------------*/	
// No direct access 	
defined('_JEXEC') or die('Restricted access');	
$document = JFactory::getDocument();	
$path			= $params->get('path');	
?>
<?php if($preText != ""):?>
<?php echo $params->get('preText') ?>
<?php endif;?>
<div class="pixabay_widget" <?php if ($selectSource == "1") : ?>data-user="<?php echo $params->get('data-user') ?>" <?php elseif ($selectSource == "2") : ?>data-search="<?php echo $params->get('data-search') ?>"<?php endif ; ?> data-editors-choice="<?php echo $params->get('data-editors-choice') ?>" data-max-rows="<?php echo $params->get('data-max-rows') ?>" data-target="<?php echo $params->get('data-target') ?>" data-per-page="<?php echo $params->get('data-per-page') ?>" data-navpos="<?php echo $params->get('data-navpos') ?>" data-row-height="<?php echo $params->get('data-row-height') ?>" data-order="<?php echo $params->get('data-order') ?>" data-lang="<?php echo $params->get('data-lang') ?>" data-image-type="<?php echo $params->get('data-image-type') ?>" data-safesearch="<?php echo $params->get('data-safesearch') ?>" data-truncate="<?php echo $params->get('data-truncate') ?>" data-branding="<?php echo $params->get('data-branding') ?>" data-branding-text="<?php echo $params->get('data-branding-text') ?>" data-branding-text-link="<?php echo $params->get('data-branding-text-link') ?>" data-branding-text-sufx="<?php echo $params->get('data-branding-text-sufx') ?>" data-prev="<?php echo $params->get('data-prev') ?>"data-next="<?php echo $params->get('data-next') ?>"></div>
<?php if($postText != ""):?>
<?php echo $params->get('postText') ?>
<?php endif;?>	
<?php if($addScript !== "0"):?>
<script>var pixabayWidget = { key: "<?php echo $params->get('apiKey') ?>" };</script>	
<script src="<?php echo $LiveSite ?>modules/mod_pixabay/js/pixabay-widget.min.js" async defer></script>
<?php endif;?>