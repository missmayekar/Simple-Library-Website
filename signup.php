<html>
    <head>
        <title>www.vummumbai.com</title>
        <link href="../css/aboutus.css" type="text/css" rel="stylesheet">
      
        <title> Saraswati Vikas Trust</title>
       
        <script type="text/javascript">
            
   if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
            function validate()
            {
              // if(document.userform.userid.value=="")
              // {
              //   alert("Please enter user id");
              //   document.userform.userid.value.focus();
              //   return false;
              // }
              if(document.userform.name.value=="")
              {

                alert("Please enter name");
                document.userform.name.focus();
                return false;
              }
              if(document.userform.emailid.value=="")
              {

                alert("Please enter email id");
                document.userform.emailid.focus();
                return false;
              }

              if(document.userform.mobileno.value=="")
              {
                alert("Please enter 10 digit contact number");
                document.userform.mobileno.focus();
                return false;
              }
              var mob=document.userform.mobileno.value;
              if(mob.length!=10)
              {
                alert("Mobile no should be of 10 digit");
                document.userform.mobileno.focus();
                return false;
              }
              if(document.userform.password.value=="")
              {
                alert("Please enter password of your choice");
                document.userform.password.focus();
                return false;
              }

              if(document.userform.city.value=="")
              {
                alert("Enter name of your city");
                document.userform.city.focus();
                return false;
              }



            }
            // function generate_alert()
            // {
            //
            //
            // }
        </script>

<style>
#userform{
    float:left;
    color:#4C1863;
    font-size:17px ;
    font-family: "Times New Roman", Times, serif;
    text-align: left;
    font-weight: bold;

}

#userform label{
    display:inline-block;
    width:150px;
    margin-right:30px;
    text-align:left;

}


</style>

    </head>
<body style=" background-image:url('../images/back2.jpg');">
    <div id="one">
        <img src="../images/logo.png" id="logo">
        <div class='onediv1'>
            <a href="../html/homepage.html"><img src="../images/home.png" id='home'></a>
            <div id='onediv2'>
                    <a href="../html/aboutus.html">About Us</a>
                    <a href="../php/login.php">Login</a>
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
    <div id='five' style="height:550px">
        <div id="fivediv1" style="height:500px">
            <div id="fivediv1a">Sign-Up</div>
             <div id="fivediv1b"></div>
            <div id="fivediv1c">

            <form method="post" onSubmit="return(validate())" name="userform" enctype="multipart/form-data" style=": center;" id="userform">

   <label>Name:</label><input type="text" name="name" id="textbox">

    <br><label>E-mail ID:</label><input type="email" name="emailid" id="textbox">

    <br><label>Mobile no.:</label><input type="text" name="mobileno" id="textbox">

    <br><label>Username:</label><input type="text" name="username" id="textbox">

    <br><label>Set Password:</label><input type="password" name="password" id="textbox">
    <br><label>Address :</label><input type="textarea" name="address" id="textbox">


    <br><label>City:</label><input type="text" name="city" id="textbox">

    <br><label>State:</label><input type="text" name="state" id="textbox">



    <br><label>Course:</label><select name="course" id="textbox" >
        <option value="Engineering">Engineering</option>
        <option value="SSC">SSC</option>
        <option value="HSC">HSC</option>
        <option value="diploma">Diploma</option>
        <option value="others">Others</option>
    </select>

        <br><label>Upload Photo :</label><input type="file"  name="userphoto">

    <br><br><input type="submit" name="signup" value="Signup" class="but" >

    <input type="reset" name="reset" value="Reset" class="but">
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




<?php
if(isset($_POST["signup"])){


$server="localhost";
$user="root";
$password="";
$dbname="library";

$con =mysqli_connect($server,$user,$password,$dbname) or die(mysqli_connect_error());
error_reporting(0);

mysqli_query($con,"create table if not exists library_users(username varchar(20) primary key, name varchar(20), emailid varchar(40), mobileno varchar(10),
password varchar(20), address varchar(200), city varchar(20), state varchar(20), course varchar(20), userphoto varchar(100));");

//$id=$_POST['userid'];
$n=$_POST['name'];
$email=$_POST['emailid'];
$mno=$_POST['mobileno'];
$un=$_POST['username'];
$p=$_POST['password'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$course=$_POST['course'];
$files=$_FILES['userphoto'];

$result=mysqli_query($con,"select * from library_users where username='$un' and mobileno='$mno'");
$row=mysqli_fetch_row($result);

        if($row === null)
        {
          print_r($row);
          $filename = $files['name'];
          $filerror = $files['error'];
          $filetmp = $files['tmp_name'];

            //will check extension of file, we want extension to be png or jpeg
            $fileext = explode('.',$filename);
            echo "<br>";

            $filecheck = strtolower(end($fileext)); //incase if extension is in uppercase , we convert it to the lowercase
            echo "<br>";
            $fileextstored = array('png','jpg','jpeg');
            if(in_array($filecheck,$fileextstored)) //to check whether extension of uploaded file is there in array or not
                  {
                      $destinationfile = '../userphoto/'.$filename;
                      move_uploaded_file($filetmp, $destinationfile); //to store temperoray file in destination folder
                      echo $destinationfile;
                      echo $filetmp;

                      //mysqli_query($con, "insert into users('userphoto')values('$destinationfile')");

                      mysqli_query($con,"insert into library_users values('$un','$n','$email','$mno','$p','$address','$city','$state','$course', '$destinationfile','NULL','N');");

                
                      echo '<script type="text/javascript">alert("You have been registered");</script>';

                
                    }
            }




else {
  echo '<script type="text/javascript">alert("this username or mobile number is already reagistered, please try with another mobile number");</script>';
  //echo "<div id='fivediv1c'>This username or mobile number is already registered</div>";
  //echo "";


      // mysqli_query($con,"insert into users values('$id','$n','$email','$mno','$un','$p','$s','$city','$state','$country','$v');");
}
}

?>
</body>
</html>
