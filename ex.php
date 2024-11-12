<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">">
    <link rel="stylesheet" href="css/custom.css">
    <title>OSMS</title>
</head>
<body>
<!--nav start here --->
<nav class="navbar navbar-expand-sm navbar-dark bg-info pl-5 fixed-top"> 
    <a href="index.php" class="navbar-brand">OSMS</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler"
    data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav pl-5 custom-nav">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="index.php" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="index.php" class="nav-link">Registration</a></li>
            <li class="nav-item"><a href="index.php" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="index.php" class="nav-link">Contact</a></li>
        </ul>
    </div>
</nav>


<!--nab start here --->

<!--Header start here --->
<header class="jumbotron back-image" style="background-image:url(img/mainpic.jpg);">
    <div class="myclass mainHeading">
        <h1 class="text-danger font-weight-bold">WELCOME TO OSMS</h1>
        <p class="font-italic">Customer's Happiness is our Aim</p>
        <a href="#" class="btn btn-success mr-4">Login</a>
        <a href="#" class="btn btn-danger mr-4">Sign-up</a>

    </div>
</header>

<!--Header ends here --->

<!--intro starts here --->


<div class="container">
    <div class="jumbotron">
        <h3 class="text-center">OSMS Services</h3>
        <p>OSMS Services is India's leading chain of multi-brand Electronics and 
            Electrical service workshops offering wide array of services. We focus
            on enhancing your uses experience by offering world class Electronic 
            Appliances maintenance services. Our sole mission is To provide Electronic
            Appliances care services to keep the devices fit and healthy and customers 
            happy and smiling". With well-equipped Electronic Appliances service centres 
            and fully trained mechanics, we provide quality services with excellent packages
            that are designed to offer you great savings. Our state-of- art workshops are
            conveniently located in many cities across the country. Now you can book your
            service online by doing Registration.</p>
    </div>
</div>
<!--intro ends here --->

<!--services starts here --->

<div class="container text-center border-bottom">
    <h2>Our Services</h2>
    <div class="row mt-4">
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-tv fa-8x text-primary"></i></a>
            <h4 class="mt-4">Electronic Appliances</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-sliders-h fa-8x text-success"></i></a>
            <h4 class="mt-4">Preventive maintenance</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
            <h4 class="mt-4">Fault Repair</h4>
        </div>
    </div>
</div>

<!--services ends here --->

<!--Registration starts here --->

<div class="container pt-5">
    <h2 class="text-center">Create an Account</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-4" method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i> <label for="name" class="font-weight-bold pl-2">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name"name="rname">
                </div>
                <div class="form-group">
                    <i class="fas fa-user"></i> <label for="email" class="font-weight-bold pl-2">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Email"name="remail">

                    <small class ="form-text">We'll never share your email with anyone else.</small>
                    
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">New Password</label>
                    <input type="password" class="form-control" placeholder="Enter Name"name="rpassword">
                </div>
                <button type="submit" class="btn btn-info mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
                <em style="font-size: 10px;">Note-By clicking Sign up,you agree to our Terms,Data Policy & Cookie Policy</em>
            </form>
        </div>
    </div>
</div>



<!-- js-->

<script src="js/jquery.js"></script>
<script src="js/proper .js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>


    
</body>
</html>