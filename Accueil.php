<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			  <script src="viande.JFIF"></script>
			  <script src="viande1.jpg"></script>
			  <script src="viande2.jpg"></script>
		<style>
		/* Make the image fully responsive */
		.carousel-inner img {
		width: 50%;
		height: 50%;
		}
		</style>
	</head>
	<body>
		<nav>
			<ul> 
				<li class="menu-accueil"><a href="accueil.php">Accueil</a></li>
				<li class="menu-NosVideos"><a href="NosVideos.php">Tout Savoir</a>
					<ul class="submenu">
						<li><a href="NosVideos.php">Tout savoir en video!</a></li>
						<li><a href="Viande.php">Tout savoir en image!</a></li>
					</ul></li>
				<li class="menu-contact"><a href="Contact.php">Nous contacter</a></li>
			</ul>
		</nav>
		
<!-- Content -->
    <div class="container">

        <!-- Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
        <div class="col-md-12 portfolio-item">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active" align="center">
      <img src="Viande.JFIF" alt=":/" >
    </div>
	
   <div class="item" align="center">
	 <div class="item active" align="center">
      <img src="Viande2.jpg" alt=":/">
    </div>
  
   <div class="item" align="center">
	 <div class="item active" align="center">
	 <img src="Viande3.jpg" alt=":/">
    </div>
  
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
    <!-- /.container -->

	</body>
</html>
