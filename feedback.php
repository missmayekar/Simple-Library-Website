<html>
    <head>
        <title>www.vummumbai.com/About Us</title>
        <link href="../css/aboutus.css" type="text/css" rel="stylesheet">
        <script type="text/javascript">
        function validate()
        {
          if(document.feedbackform.comments.value=="")
          {
            alert("Please enter comments");
            document.feedbackform.comments.focus();
            return false;
          }
          if(document.feedbackform.rating.value=="")
          {

            alert("Please rate us");
            document.feedbackform.rating.focus();
            return false;
          }
        }
        </script>
        
      
    </head>
    <style>
#feedbackform{
    float:left;
    color:#4C1863;
    font-size:17px ;
    font-family: "Times New Roman", Times, serif;
    text-align: left;
    font-weight: bold;
  
}

#feedbackform label{
    display:inline-block;
    width:150px;
    margin-right:30px;
    text-align:left;

}
    
    </style>
<body>
    <div id="one">
        <img src="../images/logo.png" id="logo">
        <div class='onediv1'>
            <a href="../html/homepage.html"><img src="../images/home.png" id='home'></a>
            <div id='onediv2'>
                    <a href="../html/aboutus.html">About Us</a>
                    <a href="../html/Library.html">Library</a>
                    <a href="../html/hmp.html">Hirak Mohotsav Project</a>
                    <a href="../php/booksearch.php">Booksearch</a>
                <a href='../php/logout.php' class='right'>Logout</a>

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
            <div id="fivediv1a">Feedback</div>
            <div id="fivediv1b"></div>
           
            <div id="fivediv1c">
            <form  method='post' name='feedbackform' onsubmit='return(validate())' action='#' id="feedbackform">

                  
                  <label>Comments:</label><input type="text" name="comments" id="textbox">

                    <br><br>
                   <label>Rating:</label> <input type="text" placeholder="Rate us out of 10!!!" name="rating" id="textbox">


                    <br><br>

                     <input type="submit" name="feedback"  value="Submit Feedback" class="but">


            </form>
            </div>
            <img src="../images/aboutusimg.png" id="aboutusimg">
        </div>
    </div>
    <div id='six'></div>
    <div id="seven">
       <a href="https://www.facebook.com/vummumbai"><img src="../images/facebook.jpg" id="facebook"></a>
       <a href="https://twitter.com/vummumbai?lang=en"><img src="../images/twitter.png" ></a>

       <p>© 2019.Saraswati Vikas Trust Mumbai. All rights reserved. Designed By <a href="">Blueberry  Pvt.Ltd</a></p>

    </div>
</body>
</html>


<?php

    session_start();
    $server="localhost";
    $user="root";
    $password="";
    $dbname="library";


    $con =mysqli_connect($server,$user,$password,$dbname) or die(mysqli_connect_error());
    error_reporting(0);

    $comment=$_POST['comments'];
    $rate=$_POST['rating'];

    //$username= $_SESSION['username'];
    //$password = $_SESSION['password'];
  

   $un=$_SESSION['un'];
   $psw=$_SESSION['psw'];

    if(isset($_POST["feedback"]))
    {
      mysqli_query($con,"update library_users set feedback='$comment' where username='$un' and password='$psw'");
      mysqli_query($con,"update library_users set rating='$rate' where username='$un' and password='$psw'");
      echo '<script type="text/javascript">alert("Your feedback has been recorded");</script>';


    }




?>
