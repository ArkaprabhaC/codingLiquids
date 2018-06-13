<?php
  if(isset($_POST['action'])){
      if ($_POST['g-recaptcha-response'] != ''){
          $name = $_POST['name'];
          $email= $_POST['email'];
          $options = $_POST['options'];

          $budgetlv = $_POST['budgetlv'];
          $budgetuv = $_POST['budgetuv'];
          $referral = $_POST['ref'];

          $message = $_POST['message'];
          $optionsVal="";
          $captcha=$_POST['g-recaptcha-response'];

          switch ($options) {
              case 'Choice 1':
                  $optionsVal = "Web Development" ;
                  break;
              case 'Choice 2':
                  $optionsVal = "App Development" ;
                  break;
              case 'Choice 3':
                  $optionsVal = "UX/UI and Business Design" ;
                  break;
              case 'Choice 4':
                  $optionsVal = "Social Media Marketing" ;
                  break;
          }
          /*echo "name is ".$name."<br>";
          echo "name is ".$email."<br>";
          echo "name is ".$optionsVal."<br>";

          echo "name is ".$budgetuv."<br>";
          echo "name is ".$budgetlv."<br>";

          echo "name is ".$message."<br>";*/
          $to="sagnikbhattacharya1506@gmail.com";
          $subject = "New client message.";
          $body =  "Client's name is ".$name."\n\n";
          $body .= "Client's Intention: ".$optionsVal."\n\n";
          $body .= "Client's Budget Lower Bound: ".$budgetlv."\n\n";
          $body .= "Client's Budget Upper Bound: ".$budgetuv."\n\n";
          $body .= "Referral: ".$referral."\n\n";
          $body .= "Message: \n\n".$message;

          //$from = "From: ".$email;


          $secretKey = "6Lf6ZU8UAAAAAH7VSKjPncgYXEfu-GDLTwqFKvXv";  //auth token
          $ip = $_SERVER['REMOTE_ADDR']; //Get the ip of the client.
          $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
          $responseKeys = json_decode($response,true);
          if($responseKeys["success"]==true) {
              if (mail($to, $subject, $body, $email)) {
                  header("Location: getquote.php?mail=success");
              } else {
                  header("Location: getquote.php?mail=failure");
              }
          } else {
              echo '<h2>Some error occured.</h2>';
          }
      }else{
          echo "<script type='text/javascript'>alert('Please do the Captcha check to prove you\'re not a bot!');</script>";
      }

      
  }
   
  if(isset($_GET['mail'])){
     if($_GET['mail']=='success'){
         echo "<script type='text/javascript'>alert('Thank you. Your Mesage has been received.');</script>";
    }
    if($_GET['mail']=='failure'){
       echo "<script type='text/javascript'>alert('Some error occured. Try again later.');</script>";
   }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-control" content="no-cache">
  <title>Contact | Coding Liquids</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/main.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
  <!---content to be displayed after loading-->
  <div class="wrapper">
    <div class="container-fluid">
      <div class="hamburger">
        <span>menu </span>
        <span class="close">close</span>
        <i class="material-icons close">close</i>
        <i class="material-icons">menu</i>
      </div>
    </div>
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
            <a href="" class="call-to-action">Lets Talk</a>
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
        <h2>Get an Estimation</h2>
        <p>or just start a conversation.</p>
      </div>
      </div>


      <section id="contact">
        <div class="container">

            <form method="post" action="" id="contactForm" class="col s6">

              <div class="row">
                <div class="col-2">
                <div class="form-element"><label for="name">Your Name</label>
                <input type="text" name="name" placeholder="Type Your name" required autofocus></div>
              </div>
              <div class="col-2">
              <div class="form-element">
                <label for="name">Your Email</label>
                <input type="email" name="email" placeholder="Type Your email"  required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-element dropdown">
              <label for="service needed">Service Needed</label>
              <select name="options" id="select-choice">
                <option value="Choice 0">None Selected</option>
                <option value="Choice 1">Web Development</option>
                <option value="Choice 2">App Development</option>
                <option value="Choice 3">UX/UI and Business Design</option>
                <option value="Choice 4">Social Media Marketing</option>
              </select>
            </div>
          </div>
          <div class="form-element budget-range">
            <h5>Your Budget Range</h5>
            <div class="row">
                <div class="col-2">
                  <label for="budget lower end">Lower Value(&#8377)</label>
                  <input type="number" name="budgetlv" placeholder="15000" title="Enter least amount your are willing to spend">
                </div>
                <div class="col-2">
                  <label for="budget upper end">Upper Value(&#8377)</label>
                  <input type="number" name="budgetuv" placeholder="20000" title="Enter the maximum amount you can spent. This can be of same amount as the least.">
              </div>
            </div>
          </div>
          <div class="row">
              <div class="form-element">
                  <label for="ref">Refferal Link (if any)</label>
                  <input type="text" name="ref" placeholder="Type Your Refferal" title="Where did you hear about us?">
              </div>
          </div>
          <div class="form-element">
            <div class="row">
              <label class="message-label" for="textarea">Message:</label>
              <textarea name="message" rows="4"  placeholder="Type Your Message" title="Tell us about your business problems, your revenue objections or your current conversion rate"></textarea>
            </div>
          </div>

                <div class="row">
                    <div class="g-recaptcha" data-sitekey="6Lf6ZU8UAAAAAH4u9xtpiFM8KrDzLzt-Yvj6Ewas"></div>
                </div>

          <div class="row">
            <input type="submit" name="action" id="submit" onclick="showText()">
          </div>

        </form>

    </div>
  </section>
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-3">
          <ul>
            <li><a href="comingsoon.php">Coding Liquids</a></li>
            <li><a href="comingsoon.php">Portfolio</a></li>
            <li><a href="comingsoon.php">Team</a></li>
        </ul>
    </div>
    <div class="col-3">
        <ul>
            <li><a href="comingsoon.php">What We Do</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="comingsoon.php">Career</a></li>
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
<script type="text/javascript">
  $(window).scroll(function(){
    var $wScroll = $(this).scrollTop();
    var $heroHeight = $(window).height();
    $heroHeight = $heroHeight - ($heroHeight/5);
      if(($wScroll > ($heroHeight - 20))) {
      $('.hamburger span, .hamburger .material-icons').css({"color": "#000"});
    }
    else{
      $('.hamburger span, .hamburger .material-icons').css({"color": "#fff"});
    }
    $('.hamburger .close').css({"color": "#fff"});
  });
</script>
</body>
</html>