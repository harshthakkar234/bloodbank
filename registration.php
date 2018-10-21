<HTML>
  <HEAD>
    <TITLE>REGISTRATION PAGE </TITLE>
    <link rel="stylesheet" href="registration.css" type="text/css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </HEAD>
  <BODY>

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

    <DIV class="container">
      <br>
      <H2>REGISTRATION</H2>
      <hr>
      <FORM method="post" action="try.php">
	    <P>
          <INPUT class="radsp" NAME="REGTYPE" TYPE="RADIO" VALUE="DONOR">DONOR
          <INPUT class="radsp" NAME="REGTYPE" TYPE="RADIO" VALUE="RECEIVER">RECEIVER
        </P>
        <p>
          <LABEL class="lab">First Name</LABEL>
          <INPUT TYPE="TEXT" name="FNAME" PLACEHOLDER="FIRST NAME" REQUIRED>
        </p>
        <P>
          <LABEL class="lab">Last Name</LABEL>
          <INPUT TYPE="TEXT" name="LNAME" PLACEHOLDER="LAST NAME" REQUIRED>
        </P>
        <P>
          <LABEL class="lab">Email</LABEL>
          <INPUT TYPE="EMAIL" name="EMAIL" PLACEHOLDER="EMAIL" REQUIRED>
        </P>
        <P>
          <LABEL class="lab">Password</LABEL>
          <INPUT TYPE="PASSWORD" name="PASSWORD" PLACEHOLDER="PASSWORD" REQUIRED>
        </P>
        <P>
          <LABEL class="lab">Age</LABEL>
          <INPUT TYPE="NUMBER" name="AGE" PLACEHOLDER="AGE" REQUIRED>
        </P>
        <p>
          <LABEL class="lab">Blood Group</LABEL>
          <SELECT name="BLOODGROUP" REQUIRED>
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
        <P>
          <LABEL class="lab">Sex</LABEL>
          <INPUT class="radsp" NAME="SEX" TYPE="RADIO" VALUE="MALE">MALE
          <INPUT class="radsp" NAME="SEX" TYPE="RADIO" VALUE="FEMALE">FEMALE
        </P>

        <H2>CONTACT DETAILS</H2>
        <hr>
        <P>
          <LABEL class="lab">Mobile Number</LABEL>
          <INPUT TYPE="NUMBER" name="MNO" PLACEHOLDER="MOBILE NUMBER" REQUIRED>
        </P>

        <P>
          <LABEL class="lab">Alternate Number</LABEL>
          <INPUT TYPE="NUMBER" name="ALNO" PLACEHOLDER="Alt. NUMBER" >
        </P>

        <H2>LOCATION DETAILS</H2>
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
      <P>
        <LABEL class="lab">Landmark</LABEL>
        <INPUT TYPE="TEXT" name="LMARK" PLACEHOLDER="LANDMARK" >
      </P>
        <input type="submit">
      </FORM>
    </DIV>
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
  </BODY>
</HTML>
ss
