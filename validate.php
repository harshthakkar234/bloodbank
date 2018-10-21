<!-- <?php
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
          $EMAIL=$_POST['EMAIL'];
          $PASSWORD=$_POST['PASSWORD'];
          $sql = "SELECT * FROM user WHERE EMAIL='".$EMAIL."'and PASSWORD='".$PASSWORD."'";
          $res = mysqli_query($conn, $sql);
          if(mysqli_num_rows($res) == 1){
            session_start();
            $_SESSION['login_user']= $EMAIL;
            header("Location: home.php", true, 301);
          }
      else{
          }

 ?> -->
 <?php

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

 ?>
