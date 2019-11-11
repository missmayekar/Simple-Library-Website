<html>
    <head>
        <title>www.vummumbai.com/About Us</title>
        <link href="../css/aboutus.css" type="text/css" rel="stylesheet">
        <script type="text/javascript">
        function validate()
        {
        if(document.loginform.username.value=="")
        {

          alert("Please enter user name");
          document.loginform.username.focus();
          return false;
        }
        if(document.loginform.password.value=="")
        {

          alert("Please enter password");
          document.loginform.password.focus();
          return false;
        }
      }
      function myFunction() {
  var x = document.getElementsByTagName("input")[1];//there are two input fields in our form, first one is username having index 0 and second one is password having index 1
  
  if (x.type === "password") {
    x.type = "text";
  } 
else {
    x.type = "password";
  }
}


        </script>

    </head>

<body style="background-image:url('../images/back2.jpg');">
    <div id="one">
        <img src="../images/logo.png" id="logo">
        <div class='onediv1'>
            <a href="../html/homepage.html"><img src="../images/home.png" id='home'></a>
            <div id='onediv2'>
                    <a href="../html/aboutus.html">About Us</a>
                    <a href="http://localhost/Int%20Prog%20Project/php/login.php">Login</a>
                    <a href="../html/Library.html">Library</a>
                    <a href="../html/hmp.html">Hirak Mohotsav Project</a>

            </div>
        </div>
    </div>
    <div id="two"></div>
    <div id="three">
        <h3>Vidyaarthi Utkarsha Mandal</h3>
        <label id='divthreelabel'>Reg. no. 3361/ Mumbai acc P.T. Act Estd - 1954 <br>119, Anand Estate, Sane Guruji Road, Mumbai - 400011  </label>
    </div>
    <div id="four"></div>
    <div id='five'>
        <div id="fivediv1">
            <div id="fivediv1a">Login</div>
             <div id="fivediv1b"></div>
            <div id="fivediv1c">
            <form  method='post' name='loginform' onSubmit="return(validate())">

                  Username: <input type='text' name='username' id='textbox' >

                    <br><br>
                   Password: <input type='password' name='password' id='textbox'>

                    <br>
                    <input type="checkbox" onclick="myFunction()">Show Password<br>

                     <input type="submit" name="signin" value="Signin" class="but">

                     <input type="button" name="signup"  value="Signup" onclick="window.location.href='../php/signup.php';" class="but">

            </form>
            </div>
            <img src="../images/aboutusimg.png" id="aboutusimg">
        </div>
    </div>
    <div id='six'></div>
    <div id="seven">
       <a href="https://www.facebook.com/vummumbai"><img src="../images/facebook.jpg" id="facebook"></a>
       <a href="https://twitter.com/vummumbai?lang=en"><img src="../images/twitter.png" ></a>

       <p>© 2019.Vidyarthi Utkarsha Mandal Mumbai. All rights reserved. Designed By <a href="">Blueberry  Pvt.Ltd</a></p>


    </div>
</body>
</html>

<?php
  session_start();

  $user="root";
  $pass="";
  $db="library";

  $con=mysqli_connect("localhost",$user,$pass,$db) or die("unable to connect");
  //echo "connection established";
  //print_r($_POST);

  if(isset($_POST['signin']))
  {
  $un=$_POST['username'];
  $psw=$_POST['password'];

  $_SESSION['un']=$un;
  $_SESSION['psw']=$psw;
  $result=mysqli_query($con,"select * from library_users where username='$un' and password='$psw'");
  $row=mysqli_fetch_row($result);
  // echo $row[5];
  //print_r($row);
  if($row === null)
  {
      echo "<script type='text/javascript'>alert('INVALID CREDENTIALS');
      document.loginform.username.focus();</script>";

  }
  else {
    // code...

        // $_SESSION['username'] =$un;
        // $_SESSION['password'] =$psw;
        // header("Location: http://localhost/int%20Prog%20Project/php/booksearch.php");
        header("Location: ../php/booksearch.php");



  }
}

?>
