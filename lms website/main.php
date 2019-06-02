<?php
  // Create database connection
	$db = mysqli_connect("localhost", "root", "", "project");
	
	$result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<style type="text/css">
  #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
  }
  form{
    width: 50%;
    margin: 20px auto;
  }
  form div{
    margin-top: 5px;
  }
  #img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
  }
  #img_div:after{
    content: "";
    display: block;
    clear: both;
  }
  img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 200px;
  }
  </style>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                  <a class="navbar-brand" href="#">LMS</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                              <span class="sr-only">(current)</span>
                            </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              
              <div class="container">
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                      <img src="1.jpg" style="height:auto;" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                      <img src="2.jpg" style="height:auto;" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="3.jpg" style="height:auto;" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              

              <section class="py-5">
                <div class="container">
                  <h1 class="font-weight-light">Learning Managment System</h1>
                  <p class="lead">From here you can download your <b>Favourte Complete Lectures.</b></p>
                </div>
              </section>

              
<?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p><b>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>