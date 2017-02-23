<!doctype html>
<html lang="sr">

	<head>
		<?php include("head.php");?>
	</head>
	<body>
		
		<!-- Ovo je komentar-->
		<div id="wrapper">
		
			<header>
				<?php include("header.php");?>
			</header>
		
			<nav>
				<?php include("nav.php");?>
			</nav>
			
			<main>
				<content>

					<article>
					<h2>Terminal example</h2>
					<img src="img/t2.gif" class="centar" />


					</article>

					<article>
					<h2>Map</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2808.84265304267!2d19.792111515615662!3d45.250974479099085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475b11c5c71d146b%3A0x5c0909efe9d222fc!2z0JTRg9GI0LDQvdCwINCU0LDQvdC40LvQvtCy0LjRm9CwLCDQndC-0LLQuCDQodCw0LQ!5e0!3m2!1ssr!2srs!4v1484058538246" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					
					</article>
					
					<article>

						<h2>Formular</h2>
						<form>
						
						
						<label>Name:</label>
						<input name="name" type="text" />
						
						<label>E-mail</label>
						<input name="mail" type="mail"/><br />

						<br />
						
						<label>Password:</label>
						<input name="password" type="password" /><br />

						<br />
						
						<label>Text:</label><br />
						<textarea name="message" colons="30" rows="6" ></textarea><br />

						<br />
						
						<input type="submit" value="Submit"/>	

						</form>
						
					</article>
				</content>

				<aside>
					<?php include("aside.php");?>
				</aside>
			</main>
		
			<footer>
				<?php include("footer.php");?>
			</footer>
	
		</div>
	

		
	</body>
</html>
