<html>
  <head>
    <title>Login page</title>
    <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

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
    <div class="sidebar">
    <a href="home.php"><i class="fa fa-fw fa-home" style="font-size:48px"></i> HOME</a>
    <a href="search.php"><i class="fa fa-fw fa-search" style="font-size:48px"></i> SEARCH</a>
    <a href="registration.php"><i class="fa fa-fw fa-user" style="font-size:48px"></i> REGISTER</a>
    <a href="contactus.php"><i class="fa fa-fw fa-envelope" style="font-size:48px"></i> CONTACT</a>
      </div>
    <br>
    <div class="container">
      <form method="post" action="validate.php">
        <h2>Login</h2>
        <hr>
        <p>
          <label class="lab">Email-id</label>
          <input type="text" name="EMAIL" placeholder="Username" required>
        </p>
        <p>
          <label class="lab">Password</label>
          <input type="password" name="PASSWORD" placeholder="Password" required>
        </p>
        <input type="submit">
      </form>
    </div>
    <div id="fixbot" class="container-fluid">
      <h2 id="ContactUs">REACH US:</h2>
      <hr color="#f2f2f2">
      Address: Somaiya Ayurvihar ,Sion (W) , Mumbai - 400022.<br>
      Contact <br>
      Phone : 9123456789 <br>
      Email: bloodbank@somaiya.edu
    </div>

    <!-- <?php
    if(isset($_POST["submit"])){

    if(!empty($_POST['EMAIL']) && !empty($_POST['PASSWORD'])) {
        $EMAIL=$_POST['EMAIL'];
        $PASSWORD=$_POST['PASSWORD'];

        $servername = "localhost";
        $username = "username";
        $password = "";
        $dbname = "bloodbank";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query=mysql_query("SELECT * FROM user WHERE EMAIL='".$EMAIL."' AND PASSWORD='".$PASSWORD."'");
        $numrows=mysql_num_rows($query);
        if($numrows!=0)
        {
        while($row=mysql_fetch_assoc($query))
        {
        $dbEMAIL=$row['EMAIL'];
        $dbPASSWORD=$row['PASSWORD'];
        }

        if($EMAIL == $dbEMAIL && $PASSWORD == $dbPASSWORD)
        {
        session_start();
        $_SESSION['sess_user']=$EMAIL;

        /* Redirect browser */
        header("Location: search.php");
        }
        } else {
        echo "Invalid username or password!";
        }

    } else {
        echo "All fields are required!";
    }
    }
    ?> -->
  </body>
</html>
