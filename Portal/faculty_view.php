
<?php

include_once "Connection.php" ;

$Teacher=$_SESSION["Name"];
$sql0="SELECT * FROM teacher WHERE TName='$Teacher'; ";
$result0=mysqli_query($conn, $sql0);


 if (isset($_POST["Logout"])) {
  session_destroy();
  header("Location: login_faculty.php");
   # code...
 }



?>

<!DoCTYPE = "html">
<html>
<head>
<title>Faculty Log In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding:5px;
    
}
body {
    background-image: url("faculty login.jpg");
}
pre.serif {
    font-family: "Times New Roman", Times, serif;
  }

  div.a{
  text-align: center;
}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    float:center;

}

.dropdown {
    position: relative;
    display: inline-block;
    float:center;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    float:center;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    float:center;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:#3e8e41;}

.column {
    float: left;
    width: 20%;
    padding: 10px;
    height: 100px; /* Should be removed. Only for demonstration */
}
</style>
</head>


<body>
  <div align = "center">
  <h1> WELCOME <?php echo $Teacher;?> </h1>
  <h3> EMAIL: <?php echo $_SESSION["Usernm"];?>       MOBILE: <?php echo $_SESSION["Mobile"];?></h3> 
  <h5>Please select the subject you want to view the feedback of</h5>
  </div>

  <div class= "column">
  <p> <form method="POST" action = "faculty_view.php"><select name="Subject">
                                                        <option value="Teacher">SELECT SUBJECT</option>
                                                        <?php
                                                          while($row0=mysqli_fetch_assoc($result0))
                                                          {
                                                           $name=$row0['TSubject'];  
                                                           echo "<option value='$name'>".$row0['TSubject']."</option>";
                                                          }
                                                        ?>
                                                        </select>
                                                        
  </p>
  <p><input type="submit" name="VIEW" value="VIEW"></p>
  <p><input type="submit" name="GRAPH" value="VIEW GRAPH"></p>
  <p><input type="submit" name="Logout" value="LOG OUT"></p>
  </form>
  </div>
  <?php
    if (isset($_POST["VIEW"])) {
      $sub=$_POST["Subject"];
      $sql="SELECT * FROM feedback WHERE FSubject = '$sub' AND FTeacher = '$Teacher';";
      $result=mysqli_query($conn, $sql);

    echo"<TABLE width=60%>";
    echo"
    
         
         <TR>
         <TH ALIGN='LEFT'>Name :</TH>
         <TH ALIGN='LEFT'>Subject :</TH>
         <TH ALIGN='LEFT'>Enroll :</TH>
         <TH ALIGN='LEFT'>Q1</TH>
         <TH ALIGN='LEFT'>Q2</TH>
         <TH ALIGN='LEFT'>Q3</TH>
         <TH ALIGN='LEFT'>Q4</TH>
         <TH ALIGN='LEFT'>Q5</TH>
         <TH ALIGN='LEFT'>TOTAL</TH>
         </TR>
          ";
  
  while($row=mysqli_fetch_assoc($result))
  {
  echo "<tr><td>".$row['FName']."</td><td>".$row['FSubject']."</td><td>".$row['Enroll']."</td><td>". $row['Q1']."</td><td>".$row['Q2']."</td><td>".$row['Q3']."</td><td>".$row['Q4']."</td><td>".$row['Q5']."</td></tr>";  
  }
echo "</TABLE>";
}

        ?>


  </div>




</body>
</html>