<?php get_header(); ?>


			<div class="title_wrapper container">
				<div class="span12">
					<div class="span6">
						<h1>Clan Members</h1>
					</div>
					<div class="breadcrumbs">
						<strong><a href="#">Home</a> / Clan Members</strong>
					</div>
				</div>
			</div>
		<div class="page normal-page container">
			<div class="row">
				<div class="span12">
					<div class="template-wrapper">
						<div class="block block-page_header_block span12 first ">
							<div class="span12 block-title centered">
								<h2>A TOP QUALITY TEAM</h2>
								<p>Creating amazing stuff to help you be the hero of the story.</p>
							</div>
							<div class="span12 block-divider"></div>
						</div>

						<!-- Members -->
						
						<?php
							$users_admin = get_users( 'order=ASC&role=administrator' );
							$users = get_users( 'order=ASC&role=subscriber' );
							$first = 0;


							foreach( $users_admin as $user) {
								echo '<a href="">';

								if( $first == 0 ) {
									echo '<div class="block block-team_member_block span3 first cf">';
									$first = 4;
								}
								else{
									echo '<div class="block block-team_member_block span3 ">';
								}
								echo '<div class="member">';
								echo '<div class="member-social"><a data-original-title="Facebook" data-toggle="tooltip" href="#" class="icon-facebook-sign"></a><a data-original-title="Twitter" data-toggle="tooltip" href="#" class="icon-twitter-sign"></a> <a data-original-title="Linkedin" data-toggle="tooltip" href="#" class="icon-linkedin-sign"></a> <a data-original-title="Youtube" data-toggle="tooltip" href="#" class="icon-youtube"></a></div>';
								echo get_avatar( $user->user_email, 243 );
								echo '<h3>'. $user->display_name . '</h3>';
								echo '<span>Admin</span>';
								echo '<a href="';
								echo bloginfo('url'); 
								echo '/author/'; 
								echo $user->user_login;
								echo '">';
								echo '<div class="content"><input class="button-small" name="Button" value="More info" type="button"></a></div>';
								echo '<div class="bline"></div>';
								echo '</div></div>';
								$first--;
							}

							foreach( $users as $user) {
								if( $first == 0 ) {
									echo '<div class="block block-team_member_block span3 first cf">';
									$first = 4;
								}
								else{
									echo '<div class="block block-team_member_block span3 ">';
								}
								echo '<div class="member">';
								echo '<div class="member-social"><a data-original-title="Facebook" data-toggle="tooltip" href="#" class="icon-facebook-sign"></a><a data-original-title="Twitter" data-toggle="tooltip" href="#" class="icon-twitter-sign"></a> <a data-original-title="Linkedin" data-toggle="tooltip" href="#" class="icon-linkedin-sign"></a> <a data-original-title="Youtube" data-toggle="tooltip" href="#" class="icon-youtube"></a></div>';
								echo get_avatar( $user->user_email, 243 );
								echo '<h3>'. $user->display_name . '</h3>';
								echo '<span>Member</span>';
								echo '<a href="';
								echo bloginfo('url'); 
								echo '/author/'; 
								echo $user->display_name;
								echo '">';
								echo '<div class="content"><input class="button-small" name="Button" value="More info" type="button"></a></div>';
								echo '<div class="bline"></div>';
								echo '</div></div>';
								$first--;
							}

							echo '</a>';

						?>

						








						<div class="clear"></div>
					</div>
				</div>
			</div>

		</div>

<?php get_footer(); ?>