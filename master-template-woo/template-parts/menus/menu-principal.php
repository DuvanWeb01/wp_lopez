<?php if(has_nav_menu('menu-1')): ?>
	<div class="box-menu-nav">
		<nav>
			<?php 
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap' => '<ul class="nav">%3$s</ul>',
					'menu_class' => 'nav-item'
				) );
			?>
		</nav>
	</div>
<?php endif;?>