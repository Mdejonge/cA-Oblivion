<?php get_header(); ?>

<style>
.avatar{
	margin-left: -24px;
	margin-top: -19px;
	border: 20px solid #f1f1f1;
}
</style>



	

			<div class="title_wrapper container">
					<div class="span12">
					<div class="span6">
						<h1>ABOUT THE author</h1>
					</div>
					<div class="breadcrumbs">
						<strong><a href="#">Home</a> / About the author</strong>
					</div>
			</div>
		</div>

		<div class="page normal-page container">
			<div class="row">
				<div class="span12">
					<div class="template-wrapper">
						<div class="block span12 first cf">
							<div class="block boxed full-width-section parallax_section parallax-no-padding parallax-no-padding-top bgpat">
								<div class="light">
									<div class="block block-text_block span6 first cf">
											<?php
												$user = get_userdata( $userid );
												echo get_avatar( $user->email, 200);
											?>
											<br/><br/><br/><br/>
											<p><span class="fz48"><?php echo $users->nice_name ?></span></p>
											<p><span class="fz26">
												<?php
												if(have_posts()) : while(have_posts()) : the_post();
												    echo get_author_role();
												endwhile;endif;
											?>
											</span></p>
										<div class="highlight-no-margin mt100"></div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						<div id="block-4" class="block block-text_block span6 first cf">
							<div class="title-wrapper">
								<h3 class="widget-title">About me</h3>
								<div class="clear"></div>
							</div>
							<div class="wcontainer">
								<?php 
									echo get_the_author_meta('description');
								?>

							</div>
						</div>
						<div id="block-5" class="block block-skills_block span6  cf">
						    <div class="title-wrapper">
						        <h3 class="widget-title">My best skills</h3>
						        <div class="clear"></div>
						    </div>
						    <h6>Ownage</h6>
						    <div class="progress progress-striped active">
						        <div style="width: 90%; " data-original-title="90%" data-toggle="tooltip" class="bar b-with-animation" data-animation="fade-in-from-left" data-delay="500"></div>
						    </div>
						    <h6>Defense</h6>
						    <div class="progress progress-striped active">
						        <div style="width: 82%; " data-original-title="82%" data-toggle="tooltip" class="bar b-with-animation" data-animation="fade-in-from-left" data-delay="500"></div>
						    </div>
						    <h6>Offense</h6>
						    <div class="progress progress-striped active">
						        <div style="width: 85%; " data-original-title="85%" data-toggle="tooltip" class="bar b-with-animation" data-animation="fade-in-from-left" data-delay="500"></div>
						   </div>
						   <h6>Attack</h6>
						   <div class="progress progress-striped active">
						       <div style="width: 72%; " data-original-title="72%" data-toggle="tooltip" class="bar b-with-animation" data-animation="fade-in-from-left" data-delay="500"></div>
						   </div>
						   <h6>Strategy</h6>
						   <div class="progress progress-striped active">
						       <div style="width: 79%;" data-original-title="79%" data-toggle="tooltip" class="bar b-with-animation" data-animation="fade-in-from-left" data-delay="500"></div>
						  </div>
					   </div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		</div>
</html>


<?php get_footer(); ?>