<?php
  include("Connection.php");
  $sql0="SELECT * FROM subject;";
  $result0=mysqli_query($conn,$sql0);



?>
<!Doctype html>
<head>
	<title>Compare</title>
</head>
<body>
	<Form action="Compare.php" method="POST">
	<h4 align="center"> Select The Year And The Subject To Compare The Teachers Of </h4>
	<div>
		<p align = "center">
			<select name="Subject">
		    <option value="Select">SELECT YEAR</option>
            <option value="FE">FE</option>
            <option value="SE">SE</option>
            <option value="TE">TE</option>
            <option value="BE">BE</option>
         	</select>		

                                            <select name="Subject">
		                                    <option value="Select">SELECT SUBJECT</option>
		                                    <?php
                                            while($row0=mysqli_fetch_assoc($result0))
                                            {
                                            $name=$row0['SName'];  
                                            echo "<option value='$name'>".$row0['SName']."</option>";
                                            }
                                            ?>
                                            </select>


        </p>
        <p align='center'><input type="submit" value="COMPARE" name="Compare"></p>
    </div>
    </Form>
