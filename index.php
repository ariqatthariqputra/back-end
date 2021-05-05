<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Counter-Strike: Global Offensive</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/hai.jpg" alt="sunrise" width="1530" height="500">
      <div class="carousel-caption">
        <h3>Counter-Strike: Global Offensive</h3>
        <p>It includes access to the CS:GO 360 Stats page as well as your team's Round Win Chance report in Competitive and Premier game modes.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/halo.jpg" alt="nature" width="1530" height="500">
      <div class="carousel-caption">
        <h3>Grind</h3>
        <p>Grind are now available to play in Competitive Scrimmage</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/hi.jpg" alt="island" width="1530" height="500">
      <div class="carousel-caption">
        <h3>Calavera</h3>
        <p>Calavera are now available to play in Competitive Scrimmage</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-3">
		<h2 class="text-center">Premier for All</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div>
			<img src="image/orang.png" class="img-fluid aboutimg">
			</div>
			<div >
        <br/>
			<h2 style="text-align:   center" class="display-10" >Today we are opening up Broken Fang Premier to everyone.</h2>
			<p style="text-align:   center" class="py-3">Broken Fang Premier, which introduces a pick/ban phase to the start of a competitive match, allows players to test their mettle across the entire Active Duty map pool. Pick and ban maps, choose your starting side, and work together to win 16 rounds.</p>
			<a href="about.php" class="btn btn-success" >Read More</a>

		</div>
	</div>
</section>

<section class="my-5">
<div class="py-3">
	<h2 class="text-center">Snakebite Case</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  					<img class="card-img-top" src="image/deagle.png" alt="Card image">
  					<div class="card-body">
   	 					<h4 class="card-title">Desert Eagle</h4>
    					<p class="card-text">The Desert Eagle, or Night Hawk .50C, as it was previously known, is one of the pistols featured in the Counter-Strike series. It can be replaced with the R8 Revolver in Global Offensive.</p>
   						 <a href="halaman1.html" class="btn btn-primary">See Profile</a>
  						</div>
					</div>
				</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  					<img class="card-img-top" src="image/mac.png" alt="Card image">
  					<div class="card-body">
   	 					<h4 class="card-title">MAC-10</h4>
    					<p class="card-text">The MAC-10 is a machine pistol featured in the Counter-Strike series, exclusive to the Terrorists. The counterpart for Counter-Terrorists is the TMP before Global Offensive and MP9 in Global Offensive.</p>
   						 <a href="halaman2.html" class="btn btn-primary">See Profile</a>
  						</div>
					</div>
				</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  					<img class="card-img-top" src="image/negrev.png" alt="Card image">
  					<div class="card-body">
   	 					<h4 class="card-title">Negev</h4>
    					<p class="card-text">The Negev is a machine gun featured in Counter-Strike: Global Offensive. The Negev is available for both Counter-Terrorists and Terrorists to purchase.The Negev is available for both Counter-Terrorists and Terrorists to purchase.</p>
   						 <a href="halaman3.html" class="btn btn-primary">See Profile</a>
  						</div>
					</div>
				</div>


			</div>
		</div>
</section>




<section class="my-5">
	<div class="py-3">
		<h2 class="text-center">Sign In / Sign Up</h2>
	</div>
		<div class="w-50 m-auto">
			<form action="infouser.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" autocomplete="of" class="form-control">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" autocomplete="of" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="text" name="mob" autocomplete="of" class="form-control">
				</div>
				<div class="form-group">
					<label>Note</label>
					<textarea class="form-control" name="komentar">
					</textarea>
				</div>
				<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
</section>

<footer>
	<p class="p-2 bg-dark text-white text-center">© 2011 Ariq At-Thariq Putra All Rights Reserved</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>