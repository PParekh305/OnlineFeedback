<?php

include("Connection.php");

$Teacher=$_SESSION["Teacher"];
$Year=$_SESSION["Year"];
$Div=$_SESSION["Div"];



$sql0="SELECT * FROM teacher WHERE TName='$Teacher' AND TYear='$Year' AND TDiv = '$Div';";
$result0=mysqli_query($conn,$sql0);
$row0=mysqli_fetch_assoc($result0);
if (isset($_POST["submit"])) {
   

 


$Q1=$_POST["Marks1"];
$Q2=$_POST["Marks2"];
$Q3=$_POST["Marks3"];
$Q4=$_POST["Marks4"];
$Q5=$_POST["Marks5"];
$Name=$_SESSION['Name'];
$Branch=$_SESSION["Branch"];
$Year=$_SESSION['Year'];
$Div=$_SESSION['Div'];
$Enroll=$_SESSION['Enroll'];
$Subject=$row0["TSubject"];

  $sql="INSERT INTO feedback( FTeacher,FSubject,FName,FBranch,FYear,FDiv,Enroll,Q1,Q2,Q3,Q4,Q5) 
        VALUES('$Teacher','$Subject','$Name','$Branch','$Year','$Div','$Enroll','$Q1','$Q2','$Q3','$Q4','$Q5');";
  $result= mysqli_query($conn, $sql);
  if($result)
    echo"Entered Successfully"; 

header("Location: StudentFdbk.php");    # code...
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
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
</style>
</head>

<body>

<form method='POST' action='fdbk.php'>

<h3><?php echo $Teacher ;?></h3>
<pre align='center'><FONT SIZE = '4'>
Please rate the teacher on the grade of 1 to 5</BR>1.SUFFICIENT    2.MODERATE    3.GOOD     4.HIGH     5.EXCELLENT </FONT>
</pre>

</DIV>
<div  class='intro' style="padding:30px">
    <p>1. Did you attain ability to apply knowlege of science,mathematics and Engineering fundamentals appropriate to the domain?</p>
     <ul id="intro">
        
     <li>
        <label>1.<input  name="Marks1" value="1" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>2.<input name="Marks1" value="2" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>3.<input name="Marks1" value="3" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>4.<input name="Marks1" value="4" type="radio" />&nbsp&nbsp                                             
        </label>
    <li>
        <label>5.<input name="Marks1" value="5" type="radio" />&nbsp&nbsp                                    
        </label>   
     
     </ul>
 


    <p>2. Were you able to use the knowlege of programming languages to design and code software?</p>
     <ul id ="intro">
        
     <li>
        <label>1.<input  name="Marks2" value="1" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>2.<input name="Marks2" value="2" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>3.<input name="Marks2" value="3" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>4.<input name="Marks2" value="4" type="radio" />&nbsp&nbsp                                              
        </label>
    <li>
        <label>5.<input name="Marks2" value="5" type="radio" />&nbsp&nbsp                                    
        </label>   
     
     </ul>


 
    <p>3. Did you attain the ability to design a system using modern technologies for commercial use?</p>
     <ul id="intro">
        
     <li>
        <label>1.<input  name="Marks3" value="1" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>2.<input name="Marks3" value="2" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>3.<input name="Marks3" value="3" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>4.<input name="Marks3" value="4" type="radio" />&nbsp&nbsp                                              
        </label>
    <li>
        <label>5.<input name="Marks3" value="5" type="radio" />&nbsp&nbsp                                    
        </label>   
     
     </ul>                     
 


 
    <p>4. Were you able to use various emerging technologies to solve complex problems?</p>
      <ul id="intro">
        
     <li>
        <label>1.<input  name="Marks4" value="1" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>2.<input name="Marks4" value="2" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>3.<input name="Marks4" value="3" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>4.<input name="Marks4" value="4" type="radio" />&nbsp&nbsp                                              
        </label>
    <li>
        <label>5.<input name="Marks4" value="5" type="radio" />&nbsp&nbsp                                    
        </label>   
     
     </ul>                  


 
    <p>5. Were you able to attain multi-disciplinary knowlege so that you could participate in multi-disciplinary activites?</p>
         <ul id="intro">
        
     <li>
        <label>1.<input  name="Marks5" value="1" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>2.<input name="Marks5" value="2" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>3.<input name="Marks5" value="3" type="radio" />&nbsp&nbsp
        </label>
    </li>
    <li>
        <label>4.<input name="Marks5" value="4" type="radio" />&nbsp&nbsp                                              
        </label>
    <li>
        <label>5.<input name="Marks5" value="5" type="radio" />&nbsp&nbsp                                    
        </label>   
     
     </ul>                 

    <p align="center"><button type="submit" name="submit" align='center'style="font-size: 20px">Submit</button></p>
</div>
</FORM>

<footer>
            <div>
                <p>
                    Universal College Of Engineering
                </p>
            </div>
        </footer>
</body>
</html>