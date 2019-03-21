<?php
include("Connection.php");


$teacher = mysqli_real_escape_string($conn, $_POST['hiddenpno']);

$sql1="SELECT * From feedback WHERE FTeacher='$teacher';";
$result1=mysqli_query($conn,$sql1);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Teachers Feedback</title>
</head>
<body>
  <h1 align="center"><?php echo $teacher;?></h1>
  <h3><a href="principal_view.php"><button name="Back">BACK</button></a></h3> 

<?php
echo"<TABLE align ='center' width=60%>";
    echo"<TR>
         <TH ALIGN='LEFT'>Name :</TH>
         <TH ALIGN='LEFT'>Subject :</TH>
         <TH ALIGN='LEFT'>Enroll :</TH>
         <TH ALIGN='LEFT'>Q1</TH>
         <TH ALIGN='LEFT'>Q2</TH>
         <TH ALIGN='LEFT'>Q3</TH>
         <TH ALIGN='LEFT'>Q4</TH>
         <TH ALIGN='LEFT'>Q5</TH>
         <TH ALIGN='LEFT'>TOTAL</TH>
         </TR>";
  
  while($row1=mysqli_fetch_assoc($result1))
  {
  echo "<tr><td>".$row1['FName']."</td><td>".$row1['FSubject']."</td><td>".$row1['Enroll']."</td><td>". $row1['Q1']."</td><td>".$row1['Q2']."</td><td>".$row1['Q3']."</td><td>".$row1['Q4']."</td><td>".$row1['Q5']."</td></tr>";  
  }
echo "</TABLE>";

?>

<h3><pre>1.SUFFICIENT    2.MODERATE   3.GOOD   4.HIGH   5.EXCELLENT</pre></h3>
</body>
</html>
