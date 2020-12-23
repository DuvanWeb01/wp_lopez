<?php if(has_nav_menu('menu-3')): ?>
	<div class="box-menu-nav">
		<nav>
			<?php 
				wp_nav_menu( array(
					'theme_location' => 'menu-3',
					'menu_id'        => 'lateral-menu',
					'items_wrap' => '<ul class="nav flex-column">%3$s</ul>',
					'menu_class' => 'nav-item'
				) );
			?>
		</nav>
	</div>
<?php endif;?>