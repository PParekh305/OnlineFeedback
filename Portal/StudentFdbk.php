<?php
include("Connection.php");
if(isset($_POST["button"]))
{
    $_SESSION["Teacher"]=$_POST["Teacher"];
    header("Location: fdbk.php");
          
}

if (isset($_POST["Logout"])) {
  session_destroy();
  header("Location: login_student.php");
   # code...
 }
?>

<!DoCTYPE = "html">
<html>
<head>
<title> Sign In</title>
<style>

div.intro
{
    border: 3px solid black;
    margin: 25px 25px;
}

li 
{
    display:inline;
}

p.intro1
{
   border: 3px solid black;
    margin: 25px 25px; 
}

.column {
    float: right;
    width: 20%;
    margin:10px;
    height: 100px; /* Should be removed. Only for demonstration */
}
</style>
</head>


<body>


<div class='intro'><H3 ALIGN = "CENTER">WELCOME TO UCOE ONLINE FEEDBACK FORM</H3>
<form method='POST' action="StudentFdbk.php">    
<HR>
<P ALIGN= 'CENTER'><font size = '5'>PERSONAL DETAILS</font></P>
<PRE ALIGN="CENTER"><font size="4">
NAME:  <?php echo $_SESSION['Name']?>       ENROLL: <?php echo $_SESSION['Enroll'];?> <Br>       
YEAR: <?php echo $_SESSION['Year']?>    BRANCH: <?php echo $_SESSION['Branch']?><br>
EMAIL: <?php echo $_SESSION['Usernm']?>   MOBILE: <?php echo $_SESSION['Mobile']?>
</FONT></PRE>
</DIV>

<DIV  class='intro'><h4 ALIGN="center"> SELECT TEACHER</h4>
    <?php
     $branch=$_SESSION['Branch']; $year=$_SESSION['Year']; $div=$_SESSION['Div']; 
     $sql= "SELECT TName FROM  teacher WHERE TBranch='$branch' AND TYear='$year' AND      
     TDiv='$div';"; 
     $result = mysqli_query($conn,$sql);
     $resultCheck=mysqli_num_rows($result);
    ?>
      
     <p align = "center" style="margin:25px">

       <select name='Teacher' action='feedback.php'>
                            <?php 
                            while($row=mysqli_fetch_assoc($result))
                            {
                              $name=$row['TName'];  
                              echo "<option value='$name'>".$row['TName']."</option>";
                            }





                            /*for($i=0;$i<$c;$i++)
                            $name=$array1[$i]['TName'];
                            echo "<option value='<?php $name?>'>".$array1[$i]['TName']."</option>";*/
                            ?>
                            </select>

     
     </p>
     
 
     <p align="center"><input type ="submit" style="font-size: 16px" name="button" value= "FEEDBACK"><br><br>
                       <input type="submit" name="Logout" value="LOG OUT"></p>



<pre align='center'><FONT SIZE = '4'>
Please rate the teacher on the grade of 1 to 5</BR>1.SUFFICIENT    2.MODERATE    3.GOOD     4.HIGH     5.EXCELLENT </FONT>
</pre>

</DIV>

</body>
</html>