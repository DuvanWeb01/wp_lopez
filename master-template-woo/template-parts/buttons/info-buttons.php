<?php

global $geniorama;
?>

<div class="box-info-menu">
    <ul class="nav">
        <!--Email header-->
		<?php if (isset($geniorama['opt-email-info']) && strlen($geniorama['opt-email-info'])):?>
            <li class="nav-item">
                <a href="mailto:<?php echo $geniorama['opt-email-info'] ?>" class="nav-link">
                    <i class="<?php echo $geniorama['icon-mail'] ?>"></i> 
                    <?php echo $geniorama['opt-email-info'] ?>
                </a>
            </li>
		<?php endif; ?>
        
        <!--Phone header-->
		<?php if (isset($geniorama['opt-phone']) && strlen($geniorama['opt-phone'])):?>
                <li class="nav-item">
                    <a href="tel:<?php echo sanitizePhone($geniorama['opt-phone']);?>" class="nav-link" target='_blank'>
                        <i class="<?php echo $geniorama['icon-phone'] ?>" aria-hidden="true"></i> 
                        <?php echo $geniorama['opt-phone'] ?>
                    </a>
                </li>
		<?php endif; ?>

		<!--Address header-->
		<?php if (isset($geniorama['opt-address']) && strlen($geniorama['opt-address'])):?>
            <li class="nav-item">
                <a href="<?php echo $geniorama['opt-url-address'] ?>" class="nav-link" target='_blank'>
                    <i class="<?php echo $geniorama['icon-address'] ?>" aria-hidden="true"></i> 
                    <?php echo $geniorama['opt-address'] ?>
                </a>
            </li>
        <?php endif; ?>
        

        <!-- Whatsapp -->
        <?php if(isset($geniorama['opt-whp']) && strlen($geniorama['opt-whp'])): ?>
			<li class="nav-item">
				<a href="<?php echo api_whatsapp(); ?>" class="nav-link" target="_blank">
                    <i class="<?php echo $geniorama['icon-mobile-phone'] ?>"></i>
                    <?php echo $geniorama['opt-whp'] ?>
				</a>
			</li>
		<?php endif; ?>
    </ul>
</div>