<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<!-- sets width to css pixes (1/96 inch) -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
				crossorigin="anonymous"/>

		<!-- add custom css after bootstrap-->
		<link rel="stylesheet" href="css/main.css" type="text/css"/>
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- latest min jQuery and Bootstrap-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>
		<script src="js/lib.js"></script>
		<title>Matthew R. Fisher</title>
	</head>
	<body>

		<nav class="navbar navbar-dark bg-inverse navbar-fixed-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand scroll" href="#page-top">Matt Fisher</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#intro" class="scroll">Intro</a></li>
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
						<a href="#intro" class="btn custom-btn scroll">Enter</a>
					</div>
				</div>
				<div class="bg__foo"></div>
				<div class="bg__bar"></div>
				<a name="intro"></a>
				<div id="greeting" class="container-fluid pad-down"></div>
				<div id="intro" class="container-fluid pad-down content"></div>
				<div id="cookie-time"></div>
				<div class="bg__baz"></div>
				<div class="bg__bazz"></div>

			</div>
		</article>

	</body>
	<footer>
		<nav class="navbar navbar-dark bg-inverse navbar-fixed-bottom inanimate-nav">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
							  data-target="#bs-example-navbar-collapse-2" aria-expanded="false"><i class="fa fa-bars fa-2x"
																														  aria-hidden="true"></i>
						<span class="sr-only">Toggle navigation</span>
					</button>
					<button type="button" class="navbar-toggle" data-toggle="collapse"
							  data-target="#bs-example-navbar-collapse-3" aria-expanded="false"><i class="fa fa-language fa-2x"
																														  aria-hidden="true"></i>
						<span class="sr-only">Toggle navigation</span>
					</button>

					<a class="navbar-brand scroll" href="#page-top">Matt Fisher</a>

				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
					<div class="nav navbar-nav navbar-center text-center">
						<label for="en" class="lang_label" id="en_label"><h1>EN</h1></label>
						<input name="lang" id="en" type="radio" value="en">
						<label for="jp" class="lang_label" id="jp_label"><h1>JP</h1></label>
						<input name="lang" id="jp" type="radio" value="jp">
						<label for="de" class="lang_label" id="de_label"><h1>DE</h1></label>
						<input name="lang" id="de" type="radio" value="de">
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#intro" class="scroll">Intro</a></li>
						<li><a href="#">link2</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</footer>


</html>
