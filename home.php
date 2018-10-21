<html>
  <head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
      Somaiya BloodBank
    </title>
    <link rel="stylesheet" href="home.css" type="text/css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- HOME BAR -->
    <div class="topnav topbar" id="myTopnav">
      <a href="home.php"><b id="tp2"><img id="logo" src="somaiyalogo.png" alt="somaiya trust" height="50px" > SOMAIYA </b><b id="tp">BLOOD</b><b id="tp2">BANK</b></a>
      <?php
      session_start();
        if(!isset($_SESSION['login_user']))
        {
          echo '<a href="login.php" class="topright navlinkh" id="nava">Login</a>';
        }
        else
          {
            echo '<a href="logout.php" class="topright navlinkh" id="nava">Logout</a>';
          }
        ?>
      <!-- <a href="login.php" class="topright navlinkh" id="nava">Login</a> -->
    </div>
    <!-- sidebar -->
    <div class="sidebar">
      <a href="home.php"><i class="fa fa-fw fa-home" style="font-size:48px"></i> HOME</a>
      <a href="search.php"><i class="fa fa-fw fa-search" style="font-size:48px"></i> SEARCH</a>
      <a href="registration.php"><i class="fa fa-fw fa-user" style="font-size:48px"></i> REGISTER</a>
      <a href="contactus.php"><i class="fa fa-fw fa-envelope" style="font-size:48px"></i> CONTACT</a>
    </div>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="caro1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="caro2.jpg" alt="Chicago" style="width:100%;">
      </div>

      <div class="item">
        <img src="caro3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    <div class=" container-fluid jumbotron " id="reg">
      “There is no great joy than saving a soul.”
    </div>

    <div class="container-fluid">
      <h2>WHY DONATE BLOOD?</h2>
      <p> &emsp; Blood Donation is service to Humankind,By Donating Blood you help a needy and save a precious life.Transfusion of blood every year saves Millions of life all over the world every year.There are Millions of Blood Donors all over the world, but still their are number of countries who don’t have adequate number of blood suppliers and face the challenge of blood supply to the patients in the country.</p>
      <img src="why.jpeg" alt="donate blood" height="50%" width="100%" id="height="50%" width="100%"" >
      <p>&emsp; Each year, thousands of people rely on receiving donated blood and blood products to stay alive.<br>
        &emsp;Certain injuries and illnesses can quickly cause a person's blood levels to drop. Without enough blood, they will not receive enough oxygen in their body, resulting in death.<br>
        &emsp;Many hospitals and medical centers utilize donated blood to save the lives of their patients.</p>
    </div>
    <div class="container">
      <hr>
      <h2 id="Events">Events</h2>
      <hr>
      <h5>Vidyavihar Blood Camp</h5
      <p> A camp setup in the Somaiya Vidyavihar Campus For students and Faculty to donate bood.</p>
      <h5>Ayurvihar Blood Camp</h5>
      <p> A camp setup in the Somaiya Ayurvihar Campus For students and Faculty to donate bood.</p>
    </div>
    <div class="container">
      <hr>
      <h2 id="FAQ">Frequently Asked Questions</h2>
      <hr>
      <h5>Who can donate?</h5>
      <p>Donors must weigh at least 110 pounds and be at least 17 years old. In Minnesota, 16-years-olds may donate with written consent from a parent or guardian. During your donation appointment, you will complete a brief health questionnaire to make sure blood donation is safe for you and the recipient of your blood.</p>
      <h5>How long does donation take?</h5>
      <p>Whole blood donation takes approximately 45 to 60 minutes.<br>
      Donating plasma or platelets (called apheresis or automated donation) takes about 1 1/2 to two hours. The Mayo Clinic Blood Donor Center in Rochester provides televisions, video on demand and wireless Internet access for donors to use during donations.</p>
      <h5>How often may I donate?</h5>
      <p>You can donate whole blood as often as every 84 days at the Mayo Clinic Blood Donor Center in Rochester.<br>
        Plasma donors may donate as often as every 28 days.<br>
        Platelet donors may donate as frequently as every eight days, and up to 24 times in a 12-month period.<br>
        Double red cell donors may donate as often as every 168 days.</p>
    </div>
    <div id="fixbot" class="container-fluid">
      <h2 id="ContactUs">REACH US:</h2>
      <hr color="#f2f2f2">
      Address: Somaiya Ayurvihar ,Sion (W) , Mumbai - 400022.<br>
      Contact <br>
      Phone : 9123456789 <br>
      Email: bloodbank@somaiya.edu

    </div>


  </body>
</html>
