<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <title>OSMS</title>
</head>
<body>
<!--nav start here --->
<nav class="navbar navbar-expand-sm navbar-dark bg-info pl-5 fixed-top"> 
    <a href="index.php" class="navbar-brand">OSMS</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav pl-5 custom-nav">
            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
            <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
    </div>
</nav>

<!--nav ends here --->

<!--Header start here --->
<header class="jumbotron back-image" style="background-image:url(img/maintwo.jpeg);">
    <div class="myclass mainHeading">
        <h1 class="text-danger font-weight-bold">WELCOME TO OSMS</h1>
        <p class="font-italic">Customer's Happiness is our Aim</p>
        <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
        <a href="UserReg.php" class="btn btn-danger mr-4">Sign-up</a>
    </div>
</header>

<!--Header ends here --->

<!--intro starts here --->

<div class="container">
    <div class="jumbotron">
        <h3 class="text-center">OSMS Services</h3>
        <p>OSMS Services is Bangladesh's leading chain of multi-brand Electronics and 
            Electrical service workshops offering a wide array of services. We focus on
            enhancing your user experience by offering world-class Electronic Appliances
            maintenance services. Our sole mission is to provide Electronic Appliances
            care services to keep the devices fit and healthy, and customers happy and
            smiling. With well-equipped Electronic Appliances service centres and fully
            trained mechanics, we provide quality services with excellent packages that
            are designed to offer you great savings. Our state-of-the-art workshops are
            conveniently located in many cities across the country. Now you can book your
            service online by doing Registration.</p>
    </div>
</div>

<!--intro ends here --->

<!--services start here --->

<div class="container text-center border-bottom" id="Services">
    <h2>Our Services</h2>
    <div class="row mt-4">
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-tv fa-8x text-primary"></i></a>
            <h4 class="mt-4">Electronic Appliances</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-sliders-h fa-8x text-success"></i></a>
            <h4 class="mt-4">Preventive Maintenance</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
            <h4 class="mt-4">Fault Repair</h4>
        </div>
    </div>
</div>

<!--services end here --->



<?php include('UserReg.php') ?>




<!--customer  starts here -->
<div class="jumbotron bg-info">
    <div class="container">
        <h2 class="text-center text-white">Happy Customers</h2>
        <div class="row mt-5">
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2" style="height: 100%;">
                    <div class="card-body text-center">
                        <img src="img/bill-gates.jpg" class="img-fluid" style="border-radius: 100px; height: 150px; width: 150px;">
                        <h4 class="card-title">Bill Gates</h4>
                        <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, adducimus voluptas nesciunt debitis numquam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2" style="height: 100%;">
                    <div class="card-body text-center">
                        <img src="img/elon mask.jpg" class="img-fluid" style="border-radius: 100px; height: 150px; width: 150px;">
                        <h4 class="card-title">Elon Musk</h4>
                        <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, adducimus voluptas nesciunt debitis numquam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2" style="height: 100%;">
                    <div class="card-body text-center">
                        <img src="img/larry-page.jpg" class="img-fluid" style="border-radius: 100px; height: 150px; width: 150px;">
                        <h4 class="card-title">Larry Page</h4>
                        <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, adducimus voluptas nesciunt debitis numquam hiskhe fsff</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2" style="height: 100%;">
                    <div class="card-body text-center">
                        <img src="img/mark-zuckerberg.jpg" class="img-fluid" style="border-radius: 100px; height: 150px; width: 150px;">
                        <h4 class="card-title">Mark Zuckerberg</h4>
                        <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, adducimus voluptas nesciunt debitis numquam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('contact.php') ?>


<!--footer starts here --->
<footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6">
                <span>Follow Us:</span>
                <a href="#" target="_blank" class="pr-2 fi-color"><i
                class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i
                class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i
                class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i
                class="fab fa-google"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i
                class="fab fa-rss"></i></a>
            </div>
            <div class="col-md-6" text-right>
                <small>Designed by S&N Copyright@2024</small>
                <small class="ml-2"><a href="#">Admin</a></small>
            </div>
        </div>
    </div>
</footer>
<!--footer ends here --->


<!-- JS -->
<script src="js/jquery.js"></script>
<script src="js/proper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>

</body>
</html>
