<? include "backend.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-control" content="no-cache">
    <title>Coding Liquids</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
   <!---content to be displayed after loading-->
    <div class="wrapper">
        <div class="container-fluid"><div class="hamburger"><span>menu </span><span class="close">close</span> <i class="material-icons close">close</i><i class="material-icons">menu</i></div></div>
        <!---Fullscreen menu-->
        <div class="menu hidden">
            <div class="container">
                <h4>MENU</h4>
                <div class="row">
                    <div class="col-2">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="comingsoon.php">What We Do</a></li>
                        <!--     <li><a href="comingsoon.php">Portfolio</a></li> -->

                        </ul>
                    </div>
                    <div class="col-2">
                        <ul>
                          <li><a href="comingsoon.php">Team</a></li>
                            <li><a href="events.php">Events</a></li>
                        <!--    <li><a href="comingsoon.php">Career</a></li>  -->
                        </ul>
                    </div>
                </div>
                <div class="get-quote">
                    <h5>Have a project in mind?</h5>
                    <a href="getquote.php" class="call-to-action">Lets Talk</a>
                </div>
                <div class="social">
                    <div class="icon-wrapper"><a href=""> <img src="img/insta.svg" alt="Instagram Icon"></a> </div>
                    <div class="icon-wrapper"><a href=""><img src="img/fb.svg" alt="Facebook Icon"></a></div>
                    <div class="icon-wrapper"><a href=""><img src="img/twit.svg" alt="Twitter Icon"></a></div>
                </div>

            </div>
        </div>


        <div class="hero-img">
           <div class="container">
             <h2>We are developing</h2>
             <p>Stay tuned.</p>
           </div>
        </div>


        <section id="coming-soon">
          <h3>Coming Soon . . .</h3>
        </section>


        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <ul>
                            <li><a href="#">What We Do</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Team</a></li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <ul>
                            <li><a href="#">What We Do</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Team</a></li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <p>Address: Newtown, Kolkata-700157</p>
                        <p>+91 8017742989</p>
                        <div class="social">
                            <div class="icon-wrapper"><a href=""> <img src="img/insta.svg" alt="Instagram Icon"></a> </div>
                            <div class="icon-wrapper"><a href=""><img src="img/fb.svg" alt="Facebook Icon"></a></div>
                            <div class="icon-wrapper"><a href=""><img src="img/twit.svg" alt="Twitter Icon"></a></div>

                        </div>
                    </div>
                    <p>&copy; Coding Liquids 2018.</p>
                </div>
            </div>
        </footer>

    </div>

<script src="js/jquery.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
