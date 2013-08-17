		<!-- Menu -->
		<div class="sixteen columns" id="menu"> 
			
			<?php if(get_option_tree('header_social') == 'No') { $header_social = 'sixteen omega'; } ?>
			
			<div class="twelve columns alpha navigation <?php echo $header_social; ?>">
				
				<!-- DEFAULT NAVIGATION -->
				<?php wp_nav_menu( array(
					 'container' =>false,
					 'theme_location' => 'topbar',
					 'menu_class' => 'sf-menu light',
					 'echo' => true,
					 'before' => '',
					 'after' => '',
					 'link_before' => '',
					 'link_after' => '',
					 'depth' => 0,
					 'walker' => new description_walker())
				 ); ?>
				 <!-- /DEFAULT NAVIGATION -->
				 
				 
				 <!-- RESPONSIVE NAVIGATION FLIP -->
				<form id="responsive-nav" action="" method="post">
				<select class="chzn-select">
				<option value="">Navigation</option>
				<?php 
				
				$menu = wp_nav_menu(array('theme_location' => 'topbar_small', 'echo' => false));
				   if (preg_match_all('#(<a [^<]+</a>)#',$menu,$matches)) {
				      $hrefpat = '/(href *= *([\"\']?)([^\"\' ]+)\2)/';
				      foreach ($matches[0] as $link) {
				         // Do something with the link
				         if (preg_match($hrefpat,$link,$hrefs)) {
				            $href = $hrefs[3];
				         }
				         if (preg_match('#>([^<]+)<#',$link,$names)) {
				            $name = $names[1];
				         }
				         echo "<option value=\"$href\">$name</option>";
				      }
				   }				
				
				?>
				</select>
				</form>
				<!-- /END RESPONSIVE NAV -->
							 
			</div>	
			
			<?php if (get_option_tree('header_social') == 'No') { } else { ?>	
			<div class="four columns omega" id="tagline">
				<?php get_template_part( 'element', 'getsocial' ); ?>
			</div>	
			<?php } ?>
			
			<hr class="remove-top"/>
		</div>		 
		<!-- /End Menu -->