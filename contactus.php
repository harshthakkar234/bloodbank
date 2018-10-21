<html>
  <head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
      Somaiya BloodBank
    </title>
    <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <div class="sidebar">
    <a href="home.php"><i class="fa fa-fw fa-home" style="font-size:48px"></i> HOME</a>
    <a href="search.php"><i class="fa fa-fw fa-search" style="font-size:48px"></i> SEARCH</a>
    <a href="registration.php"><i class="fa fa-fw fa-user" style="font-size:48px"></i> REGISTER</a>
    <a href="#contact"><i class="fa fa-fw fa-envelope" style="font-size:48px"></i> CONTACT</a>
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
    <div id="google_Map" style="width:100%;height:40%;"></div>
    <script>
      function GMap() {
        var scal= {
          center:new google.maps.LatLng(19.046941,72.874592),
          zoom:17,
        };
        var map=new google.maps.Map(document.getElementById("google_Map"),scal);
      }
    </script>
    <div class="container-fluid">
      <h2>Contact Us | SOMAIYABLOODBANK</h2>
    </div>
    <hr>
    <div class=" container row">
      <div class="col-6">
        <!-- <form name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
 </td>
</tr>
</table>
</form> -->
      </div>
      <div class="col-4">
        <b>Address:</b> K.J.Somaiya Hospital, Somaiya Ayurvihar, Sion (W), Mumbai- 400022.<br>
        <b>Phone:</b> 9123456789 <br>
        <b>Email</b>: bloodbank@somaiya.edu
        <hr>
        <em>Questions About Donation Camps,<br>
        Donation Process, <br>
        or Active Events <br>
        Visit our FAQ and Events Section.</em>
      </div>
      <div class="col-2">

      </div>
    </div>


<script src="https://maps.googleapis.com/maps/api/js?key=&callback=GMap"></script>

    <!-- <div id="fixbot" class="container-fluid">
      <h2 id="ContactUs">REACH US:</h2>
      <hr color="#f2f2f2">
      Address: Somaiya Ayurvihar ,Sion (W) , Mumbai - 400022.<br>
      Contact <br>
      Phone : 9123456789 <br>
      Email: bloodbank@somaiya.edu

    </div> -->


  </body>
</html
