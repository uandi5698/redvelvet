<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>RV FANSITE For Reveluv</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
	<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
	<script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="starter_template.css" rel="stylesheet">
  </head>
  <body>
<nav class="navbar navbar-expand-md navbar-light bg-light ">
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#collapse_target" >
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <div class="collapse navbar-collapse" id="collapse_target">
  	  <ul class="navbar-nav" style="float:left;">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">Home <span class="caret"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">album</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
    </ul>
  	<a class="navbar-brand mx-auto" href="#" style="padding-right: 220px;">Red Velvet</a>
  	
  </div>
</nav>

<!--
<main role="main" class="container">
-->
<div align="center">
	<section class="main_container" >
		<div class="jumbotron">
			<div class="row">
				<div class="col-sm-9">
					<div class="subcontainer">
						<h1 >Red Velvet Fan Site </h1>
						<p>Red Red Velvet (레드벨벳) is a South Korean girl group formed by SM Entertainment. The group debuted on August 1, 2014, with the digital single "Happiness" and four group members: Irene, Seulgi, Wendy and Joy. In March 2015, Yeri was added into the group. </p>
					</div>
				</div>	
				<div class="col-sm-3">
					<div class="container">

					<img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/49c4ddcb-3d71-411e-8a32-79e215993a20/d9uozks-2e2f179f-ccd6-490b-9701-0fec4583ea60.png/v1/fill/w_1024,h_331,strp/red_velvet_the_velvet_logo_png_by_hyukhee05_d9uozks-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MzMxIiwicGF0aCI6IlwvZlwvNDljNGRkY2ItM2Q3MS00MTFlLThhMzItNzllMjE1OTkzYTIwXC9kOXVvemtzLTJlMmYxNzlmLWNjZDYtNDkwYi05NzAxLTBmZWM0NTgzZWE2MC5wbmciLCJ3aWR0aCI6Ijw9MTAyNCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.9Ev4xW_DJSgUaw_dKS0qhrLdxH6hX8f9p-TTilmR75I" style="width: auto; height: auto;max-width: 220px;max-height: 200px">
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


<br>
<h2 style="color:white" align="center">
	Subscribe
</h2>
<br>

   

<div align="center" style="width:100%;">
<?php 
$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
<form action="process.php" method="POST">
<div class="input-group" style="width:50%;"  >
  <div class="input-group-prepend">
    <span class="input-group-text" style="width:120px;" >
    		Name/ID
	</span>
  </div>
  <input type="text" class="form-control" placeholder="Enter your Name or UserID" aria-label="Username" aria-describedby="addon-wrapping">
</div>
<br>
<div class="input-group" style="width:50%;"  >
  <div class="input-group-prepend">
    <span class="input-group-text" style="width:120px;" align="center" id="addon-wrapping">Email Addr.</span>
  </div>
  <input type="text" class="form-control" placeholder="Enter your Email Address" aria-label="Username" aria-describedby="addon-wrapping">
</div>
<br>
<div class="button-pad">
<button class="btn btn-light" type="button" id="inputGroupFileAddon04" style="width:25%;">Submit</button>
</div>
</form>
</div>
<!--
</main>
-->


</body>

</html>
