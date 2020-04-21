<?php /* Template Name: TestCustomPage */ 

get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
			<div>
			<h1>Test content here.</h1>
			</div> <!-- #left-area -->
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php

get_footer();
