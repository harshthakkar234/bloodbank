
<html>
  <head>
    <title>
      Somaiya BloodBank
    </title>
    <link rel="stylesheet" href="search.css" type="text/css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
  <body>
    <div class="sidebar">
    <a href="home.php"><i class="fa fa-fw fa-home" style="font-size:48px"></i> HOME</a>
    <a href="search.php"><i class="fa fa-fw fa-search" style="font-size:48px"></i> SEARCH</a>
    <a href="registration.php"><i class="fa fa-fw fa-user" style="font-size:48px"></i> REGISTER</a>
    <a href="contactus.php"><i class="fa fa-fw fa-envelope" style="font-size:48px"></i> CONTACT</a>
      </div>
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
	<div class="container sear">
		<h2>Search for </h2>
		<hr>
		<form action="search.php" method="post">
		<p>
          <LABEL class="lab">Blood Group</LABEL>
          <SELECT name="BLOODGROUP">
            <OPTION selected value="A+">A+</OPTION>
            <OPTION value="A-">A-</OPTION>
            <OPTION value="B+">B+</OPTION>
            <OPTION value="B-">B-</OPTION>
            <OPTION value="AB+">AB+</OPTION>
            <OPTION value="AB-">AB-</OPTION>
            <OPTION value="O+">O+</OPTION>
            <OPTION value="O-">O-</OPTION>
          </SELECT>
        </p>
		<h3>In Location </h3>
		<hr>
    <P>
      <LABEL class="lab">Country</LABEL>
      <select name="country" class="countries" id="countryId" REQUIRED>
        <option selected disabled >Select Country</option>
      </select>
    </P>
		<p>
      <LABEL class="lab">State</LABEL>
      <select name="state" class="states" id="stateId" REQUIRED>
        <option selected disabled>Select State</option>
      </select>
    </p>
    <p>
      <LABEL class="lab">City</LABEL>
      <select name="city" class="cities" id="cityId" REQUIRED>
      <option selected disabled >Select City</option>
    </select>
  </p>
		<input type="Submit" name="submit">
		</form>
	</div>
	<div class=" container seares">
		<h4>Search Results</h4>
		<hr>
    <?php
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
        if (isset($_POST['submit'])){
          $bd=$_POST['BLOODGROUP'];
          $coun=$_POST['country'];
          $statee=$_POST['state'];
          $cty=$_POST['city'];
          $sql = "SELECT * FROM user WHERE REGTYPE='DONOR' and BLOODGROUP='".$bd."'and COUNTRY='".$coun."'and STATE='".$statee."'and CITY='".$cty."'";
         if($res = mysqli_query($conn, $sql)){
             if(mysqli_num_rows($res) > 0){
                 echo "<table border='1'>";
                     echo "<tr>";
                         echo "<th>Firstname</th>";
                         echo "<th>Lastname</th>";
                         echo "<th>Email</th>";
                         echo "<th>Mobile No</th>";
                         echo "<th>Alternate No</th>";
                     echo "</tr>";
                 while($row = mysqli_fetch_array($res)){
                     echo "<tr>";
                         echo "<td>" . $row['FNAME'] . "</td>";
                         echo "<td>" . $row['LNAME'] . "</td>";
                         echo "<td>" . $row['EMAIL'] . "</td>";
                         echo "<td>" . $row['MNO'] . "</td>";
                         echo "<td>" . $row['ALNO'] . "</td>";
                     echo "</tr>";
                 }
                 echo "</table>";
                 mysqli_free_result($res);
             } else{
                 echo "No Matching records are found.";
             }
         } else{
             echo "ERROR: Could not able to execute $sql. "
                                         . mysqli_error($link);
         }
         $conn->close();
       }
          ?>
	</div>
	<div id="fixbot" class="container-fluid">
      <h2 id="ContactUs">REACH US:</h2>
      <hr color="#f2f2f2">
      Address: Somaiya Ayurvihar ,Sion (W) , Mumbai - 400022.<br>
      Contact <br>
      Phone : 9123456789 <br>
      Email: bloodbank@somaiya.edu
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//geodata.solutions/includes/countrystatecity.js"></script>
  </body>
</html>
