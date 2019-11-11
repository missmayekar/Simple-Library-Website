<html>
<head>
        <title>www.vummumbai.com/About Us</title>
        <link href="../css/aboutus.css" type="text/css" rel="stylesheet">
        
        <link rel="stylesheet" href="../css/aboutus.css">
     
    <script type='text/javascript'>
         function validate(){
           //alert('hello');
          var book=document.getElementsByName("engineering_books[]");
          var selectedItems="";
          var str=book.length();
          //alert(str);
            for(var i=0; i<book.length; i++){
              if(book[i].type=="checkbox" && book[i].checked==true)
                selectedItems+=book[i].value+'\n';
            }
            document.getElementById("display").innerHTML=selectedItems;
            document.getElementById("display").innerHTML="hell";

            return false;
        }

        </script>
        <?php
    session_start();
    if(isset($_SESSION['un'])){


         ?>
 <style>

#fivediv1c input{
  background-color: #4C1863;
  border: none;
  color: white;
  width:130px;
  padding: 10px;
  text-decoration: none;
  cursor: pointer;
}

#fivediv1c input:hover{
        color: #F1C40F;
    }



</style>
</head>
<body>
<div id="one">
        <img src="../images/logo.png" id="logo">
        <div class='onediv1'>
            <a href="../html/homepage.html"><img src="../images/home.png" id='home'></a>
            <div id='onediv2'>
                    <a href="../html/aboutus.html">About Us</a>
                    <a href="../html/Library.html">Library</a>
                    <a href="../html/hmp.html">Hirak Mohotsav Project</a>
<!--                    <a href="../php/booksearch.php">Booksearch</a>-->
                    <a href="../php/feedback.php">Feedback</a>     
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
    <div id='five' style="height:550px">
        <div id="fivediv1" style="height:550px">
            <div id="fivediv1a">Book Search</div>
            <div id="fivediv1b">    
            </div>
            <div id="fivediv1c">
                <form method="post"  onsubmit="return(validate())" name="bookform">

                      <input type="button"  value="engineering_books" onclick="myFunction1()">
                    
                      <input type="button" value="arts_books" onclick="myFunction2()">
                    
                      <input type="button" value="commerce_books" onclick="myFunction3()">
                    
                <label id='display' ></label>


                    <br><br><input type="submit" name="submit" value="submit" id="btn2" >
                    <input type="reset" name="reset" value="Reset" id="btn2" >
                  </form></div>
            <img src="../images/books.jpg" id="aboutusimg">
        </div>
    </div>
    <div id='six'></div>
    <div id="seven">
       <a href="https://www.facebook.com/vummumbai"><img src="../images/facebook.jpg" id="facebook"></a>
       <a href="https://twitter.com/vummumbai?lang=en"><img src="../images/twitter.png" ></a>

       <p>© 2019.Saraswati Vikas Trust Mumbai. All rights reserved. Designed By <a href="">Blueberry  Pvt.Ltd</a></p>

    </div>
            <script type="text/javascript">
            function myFunction1() {
              var data1='<input type="checkbox" name="engineering_books[]" value="Industrial Organisation & Management">Industrial Organisation & Management';
              var data2='<input type="checkbox" name="engineering_books[]" value="Unit Operations">Unit Operations';
              var data3='<input type="checkbox" name="engineering_books[]" value="Electric Machines">Electric Machines';
              var data4='<input type="checkbox" name="engineering_books[]" value="Electornic Instrumentation & Measurement">Electronic Instrumentation & Measurement';
              var data5='<input type="checkbox" name="engineering_books[]" value="Differential Questions">Differential Questions';
              var data6='<input type="checkbox" name="engineering_books[]" value="Principle of Electronics">Principle of Electronics';
              var data7='<input type="checkbox" name="engineering_books[]" value="Electric Machines">Electric Machines';
              var data8='<input type="checkbox" name="engineering_books[]" value="Heat Engineering">Heat Engineering';
              var data9='<input type="checkbox" name="engineering_books[]" value="Element of Heat Engines Vol1">Element of Heat Engines Vol1';
              var data10='<input type="checkbox" name="engineering_books[]" value="Element of Heat Engines Vol2">Element of Heat Engines Vol2';
              document.getElementById('display').innerHTML=data1+"<br>"+data2+"<br>"+data3+"<br>"+data4+"<br>"+data5+"<br>"+data6+"<br>"+data7+"<br>"+data8+"<br>"+data9+"<br>"+data10;



            }
            function myFunction2() {
              var data1='<input type="checkbox" name="arts_books[]" value="Indian Economy">Indian Economy';
              var data2='<input type="checkbox" name="arts_books[]" value="Macro Economics">Macro Economics';
              var data3='<input type="checkbox" name="arts_books[]" value="Indian Political System">Indian Political System';
              var data4='<input type="checkbox" name="arts_books[]" value="Public Administration">Public Administration';
              var data5='<input type="checkbox" name="arts_books[]" value="History Of Asia">History Of Asia';
              var data6='<input type="checkbox" name="arts_books[]" value="Ancient India">Ancient India';
              var data7='<input type="checkbox" name="arts_books[]" value="Bharatiya Arthvyavstha Bhag-II">Bharatiya Arthvyavstha Bhag-II';
              var data8='<input type="checkbox" name="arts_books[]" value="Advanced Economic Theory">Advanced Economic Theory';
              var data9='<input type="checkbox" name="arts_books[]" value="Micro Economics">Micro Economics';
              var data10='<input type="checkbox" name="arts_books[]" value="Origin Of Science & Ecological Studies">Origin Of Science & Ecological Studies';




              document.getElementById('display').innerHTML=data1+"<br>"+data2+"<br>"+data3+"<br>"+data4+"<br>"+data5+"<br>"+data6+"<br>"+data7+"<br>"+data8+"<br>"+data9+"<br>"+data10;
            }

            function myFunction3() {
              var data1='<input type="checkbox" name="commerce_books[]" value="Indian Economy">Indian Economy';
              var data2='<input type="checkbox" name="commerce_books[]" value="Financial Accounting">Financial Accounting';
              var data3='<input type="checkbox" name="commerce_books[]" value="Cost Accounting">Cost Accounting';
              var data4='<input type="checkbox" name="commerce_books[]" value="Economics">Economics';
              var data5='<input type="checkbox" name="commerce_books[]" value="Introduction To Management Accounting">Introduction To Management Accounting';
              var data6='<input type="checkbox" name="commerce_books[]" value="Economics Of Global Trade & Finance">Economics Of Global Trade & Finance';
              var data7='<input type="checkbox" name="commerce_books[]" value="Business Policies & Strategic Management">Business Policies & Strategic Management';
              var data8='<input type="checkbox" name="commerce_books[]" value="Advanced Financial Accounting">Advanced Financial Accounting';





              document.getElementById('display').innerHTML=data1+"<br>"+data2+"<br>"+data3+"<br>"+data4+"<br>"+data5+"<br>"+data6+"<br>"+data7+"<br>"+data8;
            }

            
            </script>



                  <?php
                  $un=$_SESSION['un'];
                  $psw=$_SESSION['psw'];

                    $server="localhost";
                    $user="root";
                    $password="";
                    $dbname="library";


                    $con =mysqli_connect($server,$user,$password,$dbname) or die(mysqli_connect_error());
                    error_reporting(0);
                    $flag=0;
                    $copies=0;
                    if(isset($_POST['submit'])){//to run PHP script on submit

                      if(!empty($_POST['engineering_books'])){
                      // Loop to store and display values of individual checked checkbox.
                      
                      foreach($_POST['engineering_books'] as $selected){
                      //echo $selected."</br>";
                      $available=mysqli_query($con,"select no_of_copies from engineering_books where bookname='$selected'");
                      $available1=mysqli_fetch_row($available);
                      //print_r($available1);
                      if($available1[0]>0)
                      {
                      mysqli_query($con, "insert into books_issued values('$un','$psw','$selected')");
                      mysqli_query($con,"update engineering_books set no_of_copies=no_of_copies-1 where bookname='$selected'");
                      $flag=1;
                    }
                    else {
                      echo '<script type="text/javascript">alert("any one of the Engineering book that you have selected is not available");</script>';
                    }

                    }}
                    if(!empty($_POST['arts_books'])){
                    // Loop to store and display values of individual checked checkbox.
                    foreach($_POST['arts_books'] as $selected){
                      $available=mysqli_query($con,"select no_of_copies from arts_books where bookname='$selected'");
                      $available1=mysqli_fetch_row($available);
                      //print_r($available1);
                      if($available1[0]>0)
                      {
                    //echo $selected."</br>";
                    mysqli_query($con, "insert into books_issued values('$un','$psw','$selected')");
                    mysqli_query($con,"update arts_books set no_of_copies=no_of_copies-1 where bookname='$selected'");
                    $flag=1;
                  }
                  else{
                    echo '<script type="text/javascript">alert("any one of the arts book that you have selected is not available");</script>';

                  }

                  }}

                    if(!empty($_POST['commerce_books'])){
                    // Loop to store and display values of individual checked checkbox.
                    foreach($_POST['commerce_books'] as $selected){
                    //echo $selected."</br>";
                    $available=mysqli_query($con,"select no_of_copies from commerce_books where bookname='$selected'");
                    $available1=mysqli_fetch_row($available);
                    //print_r($available1);
                    if($available1[0]>0)
                    {
                    mysqli_query($con, "insert into books_issued values('$un','$psw','$selected')");
                    mysqli_query($con,"update commerce_books set no_of_copies=no_of_copies-1 where bookname='$selected'");
                    $flag=1;
                  }
                  else{
                    echo '<script type="text/javascript">alert("any one of the Commerce book that you have selected is not available");</script>';
                  }

                  }}
                  if($flag==1)
                  {
                    echo '<script type="text/javascript">alert("You can collect your books after 4 days");</script>';

                  }
                  else{
                    echo '<script type="text/javascript">alert("You have not selected any books");</script>';

                  }

                  }

                }
                else {
                  header("Location: http://localhost/int%20Prog%20Project/php/login.php");
                }


               ?>
</body>
</html>







    <!-- <label>Engineering Books:</label><br><br> -->
