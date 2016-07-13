
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Books for kids</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

				<style type="text/css" media="screen">
						/*************************
						Base Styles
						*************************/

						html {
						  color: #222;
						  font-size: 1em;
						  line-height: 1.3;
						  box-sizing: border-box;
						}

						*, *:before, *:after {
						  box-sizing: inherit;
						}

						body {
						  font-family: Helvetica, Helvetica Neue, Arial;
						  font-size: 16px;
						  line-height: 25px;
						}

						.wrapper {
						  width: 90%;
						  margin: 0 auto;
						}

						.header-container {
							border-bottom: 20px solid #000066;
						}

						.footer-container,
						.main aside {
							border-top: 20px solid #000066
						}

						.header-container,
						.footer-container,
						.main aside {

							background: #3366cc;
						}

						.title {
							color: yellow; 
						}
						

						nav ul {
						  margin: 0;
						  padding: 0;
						  list-style-type: none;
						}

						nav a {
						  display: block;
						  margin-bottom: 10px;
						  padding: 15px 0;
						  text-align: center;
						  text-decoration: none;
						  font-weight: bold;
						  color: white;
							background: #000066
						}

						nav a:hover,
						nav a:visited {
						  color: white;
						}

						nav a:hover {
						  text-decoration: underline;
						}

						.main {
						  padding: 30px 0;
						}

						.main article h1 {
						  font-size: 2em;
						}

						.main aside {
						  color: white;
						  padding: 0px 5% 10px;
						}

						.footer-container footer {
						  color: white;
						  padding: 20px 0;
						}
						#searchIcon, #avatar {
								width: 50%;
								border-radius: 50%;
								margin: 0 25% 0 25%;
						}

						#gallery {
						  margin: 0;
						  padding: 0;
						  list-style: none;
						}
						
						#hidden {
							display: none;
						}
						
						
						/*************************
						Media Queries
						*************************/

						@media only screen and (min-width: 480px) {

						  nav a {
							float: left;
							width: 30%;
							margin: 0 0 0 5%;
							padding: 25px 1%;
							margin-bottom: 0;
						  }

						  nav li:first-child a {
							margin-left: 0;
						  }

						  nav li:last-child a {
							margin-right: 0;
						  }

						}

						@media only screen and (min-width: 768px),
							   only screen and (min-width: 700px) and (orientation: landscape) {

						  .title {
							float: left;
							font-size: 1.4em;
						  }

						  nav {
							float: right;
							width: 60%;
						  }

						  nav a {
							padding: 15px 1%;
						  }

						  .main article {
							float: left;
							width: 57%;
						  }

						  .main aside {
							float: right;
							width: 38%;
						  }
						  
						}

						@media only screen and (min-width: 1140px) {

						  .wrapper {
							width: 1026px;
							margin: 0 auto;
						  }

						  .title {
							font-size: 2em;
						  }

						  nav a {
							padding: 25px 1%;
						  }
						  
						}


						/*************************
						Clearfix
						*************************/

						.clearfix:before,
						.clearfix:after {
						  content: " ";
						  display: table;
						}

						.clearfix:after {
						  clear: both;
						}

						.clearfix {
						  *zoom: 1;
						}

				</style>
    </head>
    <body>

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">Books for kids</h1>
                <nav>
                    <ul>
                        <li><a>Our database</a></li>
                        <li><a>Your thoughts</a></li>
						<li><a>Suggest</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>Our database</h1>
                        <p>Do you want some fun and educational books for kids? Check out the full catalog of our recommendations!</p>
						<div class="Full_Catalog">
							<form method="get" action="catalog.php">
							<input type="submit" value="Full Catalog">
							</form>
						</div>
                    </header>
                    <section>
                        <h1>Your thoughts</h1>
                        <p>Not satisfied with our recommendations? Put your own prefered books in our database.</p>
						<p>Please put the book title first, and then put the minimum age appropriate for this book.</p>
						
						</form>
						<form method="post" action="input.php">
							<input type="text" name="gift">
							<input type="text" name="minimum_age">
							<input type="submit">
						</form>
			
                    </section>
                 </article>

                <aside>
                    <h3>Suggest</h3>
                    <p>Please contact us for any suggestions to improve this website. Our email address is suggest@booksforkids.org</p>
									
                </aside>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>Books for kids: an interactive website for gift ideas</h3>
            </footer>
        </div>
			   		
    </body>
</html>