<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!-- sets width to css pixes (1/96 inch) -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" />

		<!-- add custom css after bootstrap-->
		<link rel="stylesheet" href="css/main.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- latest min jQuery and Bootstrap-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="js/lib.js"></script>
		<title>Matthew R. Fisher</title>
	</head>
	<body>

		<nav class="navbar navbar-dark bg-inverse navbar-fixed-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand scroll-down" href="#page-top">Matt Fisher</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link1</a></li>
						<li><a href="#">link2</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<article id="page-top">
			<div class="parallax">
				<div class="mobile-background"></div>
				<div class="cover">
					<div class="col-xs-6 col-xs-offset-3 text-center v-center">
						<a href="#about-me" class="btn custom-btn scroll-down">login</a>
					</div>
				</div>
				<div class="bg__foo"></div>
				<div class="bg__bar"></div>
				<a name="about-me"></a>
				<div class="container-fluid">
					<div id="title-row" class="row">
						<div class="col-xs-12">
							<div class="pad-down text-center">
								<div id="pulse" class="pulse">
									<h1 id="kiteCrypt-title" class="fade-in">KiteCrypt</h1>
								</div>
								<p id="slogan" class="fade-in-out">A secure chat site for our insecure world</p>
								<p id="sign-up" class="pad-down2 fade-in-2">New? <a href="">Sign up!</a></p>
							</div>
						</div>
					</div>
					<div id="login-row" class="row">
						<div class="col-sm-2 col-sm-offset-5">
							<div class="form-login">
								<input type="text" id="user-name" class="form-control input-sm chat-input" placeholder="username" />
								<br>
								<input type="text" id="user-password" class="form-control input-sm chat-input" placeholder="password" />
								<br>
							</div>
						</div>
					</div>
					<div id="login-row-button" class="row">
						<div class="col-xs-6 col-xs-offset-3 text-center">
							<a href="#" class="btn btn-login btn-lg">login</a>
						</div>
					</div>
				</div>
				<div class="bg__baz">baz</div>
				<div class="bg__bazz">bazz</div>

			</div>
		</article>

	</body>
	<footer>
		<nav class="navbar navbar-dark bg-inverse navbar-fixed-bottom">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand scroll-up" href="#">Matt Fisher</a>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link1</a></li>
						<li><a href="#">link2</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</footer>


</html>
