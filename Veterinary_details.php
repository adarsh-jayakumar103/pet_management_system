<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Pawfect</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <meta charset="UTF-8" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->

    <!-- owl carousel -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link href="css/blast.min.css" rel="stylesheet" />

    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!--lightbox -->
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- lightbox -->


    <!-- Font-Awesome-Icons-CSS -->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">


</head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<body>
    <div class="main">
        <div id="page">
            <div id="home" class="banner" data-blast="bgColor">

                <!--/banner-->
                <nav class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--abv">
                    <div class="container">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
      </button>
                        <a class="navbar-brand mx-auto" href="admindashboard.html">Paw<span data-blast="color">Fect</span></a>
                        <div class="collapse navbar-collapse" id="navbarCollapse1">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"> <a class="nav-link" href="admindashboard.html" data-blast="color">Home <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#invoice">Invoice</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="pet_list1.html">Add Pet</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="pet.php">Pet List</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="veterenarian.html">Add Veterinary</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="veterinary_details.php">Veterinary List</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>
                            </ul>
                        </div>
                    </div>
                </nav>
			</div>
		</div>
		</div>
		<section class="about-sec contact-sec parallax-section py-lg-5 py-4" id="contact">
                    <div class="container">
                        <div class="inner-sec-w3layouts py-md-5 py-3">
                            <div class="choose-main row">
                                <div class="col-md-4">
                                    <h2 align="left" textstyle="Normal" style="border-color: #000" > Veterinary List </h2>        
                                    <div class = "container">    
                                        <div class="row">
                                            <div class="col-md-12">
												<?php
												    $host="localhost";
												    $dbusername="root";
												    $dbpassword="";
												    $dbname="pawfect";

	       											//create connection
    												$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
			     									if(mysqli_connect_error())
				    								{
					       								die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
							     					}
								    				else
									       			{
											     		$sqlget = "SELECT * FROM `veterinary_details`";
												    	$sqldata = mysqli_query($conn, $sqlget) or die('error getting while displaying');

													   echo "<table align=''>";
													   echo "<tr><th>ID</th><th>Name</th><th>Location</th><th>Contact Number</th><th>Available time</th></tr>";

													   while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
													   {
														  echo "<tr><td>";
														  echo $row['Id'];
														  echo "<br>";
														  echo "</td><td>";
														  echo $row['Name'];
														  echo "<br>";
														  echo "</td><td>";
														  echo $row['Location'];
														  echo "<br>";
														  echo "</td><td>";
														  echo $row['contact_no'];
														  echo "<br>";
														  echo "</td><td>";
														  echo $row['Available_time'];
														  echo "</td></tr>";
													    }

													   echo "</table>";
		
												    }

												?>

                                                <style>												
                                                    table {
                                                        border-spacing: 0 15px;
                                                        width:600%;
                                                    }
                                                    th {
                                                            background-color: #4287f5;
                                                            color: white;
                                                        }

                                                    th,
                                                    td {
                                                            width: 150px;
                                                            text-align: center;
                                                            border: 1px solid black;
                                                            padding: 5px;
                                                        }

                                                    h2 {
                                                            color: #4287f5;
                                                        }
                   
                                                </style>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

<!--footer-->
<footer class="action-sec py-lg-5 py-3">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row">
                <div class="col-lg-5 footer-grid">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h3 class="text-uppercase mb-3 ">Connect With Social</h3>
                            <p><span class="fa fa-twitter"></span> twitter/@pawfect</p>
                            <p><span class="fa fa-instagram"></span> instagram/@pawfect</p>
                            <p><span class="fa fa-youtube mb-5"></span> youtube/@pawfect</p>
                            <a href="#" class="facebook-footer mr-2"><span class="fa fa-facebook mr-1"></span> Facebook</a>
                            <a href="#" class="twitter-footer"><span class="fa fa-twitter mr-1"></span> Twitter</a>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-4">Address</h3>
                            <address class="mb-0">
							<p class="mb-2"><i class="fas fa-map-marker-alt"></i> Christ University<br>Block, Bangalore</p>
							<p><i class="fa fa-phone mr-1"></i> +91 1234567890</p>
							<p><i class="fa fa-fax mr-1"></i> +91 987654321</p>
							<p><i class="fa fa-envelope-open  mr-1"></i> <a href="mailto:info@example.com">pawfect@gmail.com</a></p>
						</address>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 footer-grid">
                    <h3 class="mb-4">Instagram</h3>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
							<img src="images/5.jpg" class="img-fluid" alt="">
						</a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
								<i class="far fa-clock"></i> 10 Sep, 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
							<img src="images/4.jpg" class="img-fluid" alt="">
						</a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
								<i class="far fa-clock"></i> 22 Sep, 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
							<img src="images/6.jpg" class="img-fluid" alt="">
						</a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
								<i class="far fa-clock"></i> 23 Sep, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid">
                    <h3 class="mb-4">We Offer</h3>
                    <ul>
                        <li><i class="fa mr-1 fa-long-arrow-alt-right"></i> Blandit nibh ut pretium elementum.</li>
                        <li><i class="fa mr-1 fa-long-arrow-alt-right"></i> Convallis nunc a dictum ipsum.</li>
                        <li><i class="fa mr-1 fa-long-arrow-alt-right"></i> Ultrices metus sit amet.</li>
                    </ul>
                    <h3 class="mt-4 mb-4">Newsletter</h3>
                    <p class="mb-3">Subscribe to Our Newsletter to get News, Amazing Offers &amp; More</p>
                    <form action="#" method="post">
                        <input type="email" name="Email" placeholder="Enter your email..." required="">
                        <button class="btn1" data-blast="bgColor"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright mt-md-5 mt-4 text-center">
            <p>© 2021 Pawfect . All Rights Reserved | Design by <a href="#">Adarsh Jayakumar</a></p>

        </div>

    </footer>
    </body>    
</html>
