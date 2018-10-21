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
$REGTYPE=$_POST['REGTYPE'];
$FNAME=$_POST['FNAME'];
$LNAME=$_POST['LNAME'];
$EMAIL=$_POST['EMAIL'];
$PASS=$_POST['PASSWORD'];
$PASSWORD=md5($PASS);
$AGE=$_POST['AGE'];
$BLOODGROUP=$_POST['BLOODGROUP'];
$SEX=$_POST['SEX'];
$MNO=$_POST['MNO'];
$ALNO=$_POST['ALNO'];
$STATE=$_POST['state'];
$CITY=$_POST['city'];
$LMARK=$_POST['LMARK'];
$country=$_POST['country'];
  $sql = "INSERT INTO user(REGTYPE,FNAME,LNAME,EMAIL,PASSWORD,AGE,BLOODGROUP,SEX,MNO,ALNO,STATE,CITY,LMARK,COUNTRY)
                  VALUES('$REGTYPE','$FNAME','$LNAME','$EMAIL','$PASSWORD','$AGE','$BLOODGROUP','$SEX','$MNO','$ALNO','$STATE','$CITY','$LMARK','$country')";
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  header("Location: home.php", true, 301);
  exit();
?>
