<?php
	function getPlus($category) {
		$args = array('category' => $category);
		$postsList = array_reverse(get_posts($args));
		foreach ($postsList as $post) {
			echo('
				<div class = "col-sm-12 col-md-4 column">
				<div class = "colorSmallPost">
				<div class = "plus">Y</div>
				<div class = "columnSmall">');
			setup_postdata($post);
			the_content();
			wp_reset_postdata();
			echo('
				</div>
				</div>
				</div>');
		}
		
	}
	
	function getAllPost($nameClass, $category) {
		$args = array('category' => $category);
		$postsList = array_reverse(get_posts($args));
		foreach ($postsList as $post) {
			setup_postdata($post);  
			echo("<div class = \"".$nameClass."\">");
			the_content();
			echo("</div>");
		}
		wp_reset_postdata();
	}
	
	function getOnePost($id) {
		$post = get_post($id);
		setup_postdata($post);  
		the_content();
		wp_reset_postdata();
	}
	
	add_action( 'wp_ajax_send_email', 'callback_send_email' );
	add_action( 'wp_ajax_nopriv_send_email', 'callback_send_email' );

	function callback_send_email(){
		$emailMy = 'sklep@caviaron.pl';
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$order = $_REQUEST['order'];
		$textSend = $_REQUEST['textSend'];
		$header = "From: $name <$email>";
		$message = "$name złożył/złożyła zamówienie na $order
Numer telefonu: $phone
Wiadomość:
$textSend";
		$header2 = "From: Caviaron.pl <$emailMy>";
		$message2 = "Dziękujemy za złożenie zamówienia na $order, odpowiemy na nie najszybciej jak to tylko możliwe.
Caviaron.pl	";
		$mail = mail($emailMy, "Zamówienie $order", $message, $header);
		$mail = mail($email, "Zamówienie $order", $message2, $header2);
		
		if($mail) {
			echo ("wysłano");
		} else {
			echo ("Nie udało sie złożyć zamówienia, spróbuj później");
		}
	}
/*
	
	if ($_POST['submit']) {
		$emailMy = 'web.mateusz@reklama-lublin.pl';
		$name = $_POST['nameOrder'];
		$email = $_POST['email'];
		$text = $_POST['order'];
		$header = "From: $name <$email>";
		$textSend = "$name złożył/złóżyła zamówienie na $text";
		@mail($emailMy, "Zamówienie", $textSend, $header) or die('Błąd: wiadomość nie została wysłana');
		echo 'Zamówienie zostało złożone';
	}*/
?>