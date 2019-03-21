<?php


if(isset($_POST['Login']))
   {
    include("Connection.php");
     $uname=mysqli_real_escape_string($conn,$_POST['username']);
     $pword=mysqli_real_escape_string($conn,$_POST['password']);
   

	


$sql = "SELECT * FROM  register WHERE Username = '$uname';";

$result = mysqli_query($conn,$sql);

$resultCheck=mysqli_num_rows($result);

if($resultCheck == 0)
	{ echo"<script >
		 alert('Wrong Username and Password');
		
	 </script>";
}
if ($row = mysqli_fetch_assoc($result)) {

      /*  $passwordcheck = password_verify($password, $row['Password']); */

      if($pword==$row['Password'])

      /*  if ($passwordcheck == false) */{
          $_SESSION["Usernm"]=$uname;

          $_SESSION["Name"]=$row['Name'];
          $_SESSION['Mobile'] = $row['Mobile'];
          $_SESSION['Branch']= $row['Branch'];
          $_SESSION['Year']= $row['Year'];
          $_SESSION['Div']= $row['Div']; 
          $_SESSION['Enroll']=$row['Enroll'];       
          header("Location: StudentFdbk.php");
          

        } 
        else {
                 echo"
		 <script >
		 alert('Wrong Password');
		
	     </script>";
       }
        
}
}
?>	  