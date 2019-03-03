<?php 
	/* 
	The template for displaying pages
	*/
	get_header(); 
?>
<div class = "container">
	<div class = "row">
		<div class = "pageShow">
			<?php
			$id = $_REQUEST['preview_id'];
			getOnePost($id);
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
