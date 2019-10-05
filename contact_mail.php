<!DOCTYPE html>
<html>

<head>
    <title>Charites Finance | Feedback Page</title>
    <!-- Font awesome -->
    <!-- <link href="font-awesome.css" type='text/css' rel="stylesheet"> -->
    <link href="css/animate.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/about.css">
    

    <style>
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke=' #008000 ' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .navbar-toggler {
            border-color: #008000;
        }
    </style>
</head>


<body>
            <nav class="navbar navbar-expand-md text-white navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="index.html"><img src="css/img/nav.png" id='logo' alt="Brand"></a>
                    <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                        <span class="navbar-toggler-icon text-white"></span>
                    </button>
                    <div class="collapse navbar-collapse text-white" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="signup.html">SIGN UP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="calculator.html">CALCULATOR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://drive.google.com/open?id=1XIXm-2W0ikv3QbJbZhK2wHUfDtRdf5bp">DOWNLOAD&nbsp;APP</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


    <div class="container mt-5" class="animate-bottom">
   <b><h1  align= "center">THANK YOU!</h1></b>
    <img src="css/img/5d97acbbbe092.png" alt="check mark"  width="15%" height="10%" style="margin-left: 43%"><br>

<?php 
if(isset($_POST['submit'])){
    $to = "teamcharites@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['number'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . $phone . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    
    echo   $name . ",your mail was received, we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>

    </div>
   

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3 class=''>About Us</h3>
                    <p>Charites Finance is a start up that aims to create a stable financial life for its users. We are
                        interested in helping you have a knowledge of your current financial status and assist you in
                        maximizing your money for a secure future.</p>
                </div>
                <div class="col-md-4">
                    <h3 class=''>About the App</h3>
                    <p>This free calculator helps you get a view of your financial positon by adding the values of your
                        assets and substracting your liabilites.</p>
                </div>
                <div class="col-md-3">
                    <h3 class='      '>Contact Us</h3>
                    <address style="margin-bottom:30px;">
                        Team Charites <br>
                        3, Remote House,<br>
                        HNG Avenue, Nigeria <br>
                        +234-1111-0000 <br>
                        info@charitesfinance.com
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <p style='text-align: center' class='   rollIn'>
                    CharitesFinance.com &copy;  2019
                </p>
            </div>
            </div>
        </div>
        </footer>


    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


</html>
