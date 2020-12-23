<?php if(has_nav_menu('menu-2')): ?>
	<div class="box-menu-nav">
		<nav>
			<?php 
				if (has_nav_menu('menu-2')) {
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'secondary-menu',
						'items_wrap' => '<ul class="nav">%3$s</ul>',
						'menu_class' => 'nav-item'
					) );
				}
			?>
		</nav>
	</div>
<?php endif;?>