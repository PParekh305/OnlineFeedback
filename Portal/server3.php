<?php


if(isset($_POST['Login']))
   {

     include("Connection.php");

     $uname=mysqli_real_escape_string($conn,$_POST['username']);
     $pword=mysqli_real_escape_string($conn,$_POST['password']);
   

	


$sql = "SELECT * FROM admin WHERE AUsername = '$uname';";

$result = mysqli_query($conn,$sql);

$resultCheck=mysqli_num_rows($result);

if($resultCheck == 0)
	{ echo"<script >
		 alert('Wrong Username and Password');
		
	 </script>";
}
if ($row = mysqli_fetch_assoc($result)) {

      /*  $passwordcheck = password_verify($password, $row['Password']); */

      if($pword==$row['APassword'])

      /*  if ($passwordcheck == false) */{
          // $_SESSION["Usernm"]=$uname;

          // $_SESSION["Name"]=$row['TName'];
          // $_SESSION['Mobile'] = $row['TMobile'];
          // $_SESSION['Branch']= $row['TBranch'];
          // $_SESSION['Year']= $row['TYear'];
          // $_SESSION['Div']= $row['TDiv'];        
          header("Location: admin_login_view.html");
          

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