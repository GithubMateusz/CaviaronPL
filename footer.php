
	<div class = "container-fluid">
		<div class = "row">
			<div class = "col-12 footer">
				<?php
					getOnePost(170);
				?>
				<div class = "socialMobile">
					<a href="https://www.facebook.com/caviaron/"><img src = "<?php bloginfo('template_url'); ?>/img/facebook-01.png" alt = "Facebook" ></a>
					<a href="<?php echo site_url(); ?>"><img src = "<?php bloginfo('template_url'); ?>/img/instagram-01.png" alt = "Instagram" ></a>
				</div>	
				<div class = "cookieAndRegulamin">
						<a href="<?php echo site_url(); ?>/regulamin/" class="hrefLink">REGULAMIN</a>
						<a href="<?php echo site_url(); ?>/polityka-cookies-ciasteczek/" class="hrefLink">POLITYKA COOKIES</a>
				</div>
				<div class = "rodo">
					<?php
						getOnePost(172);
					?>
				</div>
			</div>
		</div>
	</div>
	<script>
		jQuery('#formMail').submit(function(e){
			e.preventDefault();
			jQuery.ajax({
				url: '<?php echo admin_url('admin-ajax.php'); ?>',
				type: "POST",
				cache: false,
				data:{ 
					action: 'send_email', 
					name: $('#nameID').val(),
					email: $('#emailID').val(),
					phone: $('#phoneID').val(),
					order: $('#orderID').val(),
					textSend: $('#textSendID').val()
				},
				success:function(){
					$('.rowForm').html("<b><p class ='sendTrue'>Zamówienie zostało złożone.</p></b>");
				}
			}); 
		});
	</script>
	<?php wp_footer(); ?>
</body>
</html>