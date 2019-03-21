<?php
include("Connection.php");
$Name=$_SESSION["Name"];

if (isset($_POST["Logout"])) {
  session_destroy();
  header("Location: login_principal.php");
   # code...
 }



?>
<!DoCTYPE = "html">
<html>
<head>
<title>Principal Log In</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    background-image: url("bg1.jpg");
    background-repeat: no-repeat;
	background-size: cover;
}

pre.serif {
    font-family: "Times New Roman", Times, serif;
}
div.a {
    text-align: center;
}


.dropbtn {
    background-color: #0e180e;
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
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:#dddddd;}

</style>
</head>


<body>


<form method="POST" action ="principal_view.php">

<pre class="serif" align="CENTER"><font size="8"><u><?php echo $Name;?></u></font></pre>
<P calss= "serif" align="right"><input type="submit" name="Logout" value="LOGOUT"></P>
<BR><BR>
<H5 ALIGN = "CENTER">WELCOME TO ONLINE FEEDBACK PORTAL</H5><HR>

<div>
<p ALIGN="CENTER">
    Please Click On The Teachers To View Their Feedback
</p>
</div>

<?php
$sql="SELECT * FROM faculty;";
$result=mysqli_query($conn,$sql);
?>
<table><tr>
<?php  
while ($row=mysqli_fetch_array($result)) {
?>
<td>
<form action="Tfdbk.php"  method="post">  
<input type="submit" value="<?php echo $row['Name'] ;?>" name="teacher">
<input type="hidden" value="<?php echo $row['Name'] ;?>" name="hiddenpno">
</form>
</td>
<?php }?>
</tr></table>

<div>
  <p align='center'>
  <form action="Compare.php"  method="post">   
  <input type="submit" value="Compare Teachers" name="Compare">

</form>
</td>
   
</body>
</html> 