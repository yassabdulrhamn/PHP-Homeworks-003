<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
* {
  margin: 0;
  padding: 0;
  font-family: Lato;
}
body {
  padding: 0px;
  background: #e5e2e6;
}
.flatTable {
  width: 100%;
  min-width: 500px;
  border-collapse: collapse;
  font-weight: bold;
  color: #6b6b6b;
}
.flatTable tr {
  height: 50px;
  background: #d4d1d5;
  border-bottom: rgba(0, 0, 0, 0.05) 1px solid;
}
.flatTable td {
  box-sizing: border-box;
  padding-left: 30px;
}
.flatTable .titleTr {
  height: 70px;
  color: #f6f3f7;
  background: #418a95;
  border: 0px solid;
}
.flatTable .plusTd {
  background: url(https://i.imgur.com/3hSkhay.png) center center no-repeat, rgba(0, 0, 0, 0.1);
}
.flatTable .controlTd {
  position: relative;
  width: 80px;
  background: url(https://i.imgur.com/9Q5f6cv.png) center center no-repeat;
  cursor: pointer;
}
.flatTable .headingTr {
  height: 30px;
  background: #63acb7;
  color: #f6f3f7;
  font-size: 8pt;
  border: 0px solid;
}
.button {
  text-align: center;
  cursor: pointer;
}
.sForm {
  position: absolute;
  top: 0;
  right: -400px;
  width: 400px;
  height: 100%;
  background: #d4d1d5;
  overflow: hidden;
  transition: width 1s, right .3s;
  padding: 0px;
  box-sizing: border-box;
}
.sForm .close {
  float: right;
  height: 70px;
  width: 80px;
  padding-top: 25px;
  box-sizing: border-box;
  background: rgba(255, 0, 0, 0.4);
}
.sForm .title {
  width: 100%;
  height: 70px;
  padding-top: 20px;
  padding-left: 20px;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.1);
}
.open {
  right: 0;
  width: 400px !important;
}
.settingsIcons {
  position: absolute;
  top: 0;
  right: 0;
  width: 0;
  overflow: hidden;
}
.display {
  width: 300px;
}
.settingsIcon {
  float: right;
  background: #418a95;
  color: #f6f3f7;
  height: 50px;
  width: 80px;
  padding-top: 15px;
  box-sizing: border-box;
  text-align: center;
  overflow: hidden;
  transition: width 1s;
}
.settingsIcon:hover {
  background: #1f6873;
}
tr:nth-child(3) .settingsIcon {
  height: 51px;
}
.openIcon {
  width: 80px;
}

	</style>
<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
   <?php
   $link = mysqli_connect("localhost", "root", "", "construction_projects");
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    // Attempt insert query execution
   
   
   if(!empty($_GET))
   {
    $sql = "INSERT INTO Accounts (fname, lname, birth, mobile, email, job) VALUES ('".$_GET['fname']."', '".$_GET['lname']."', '".$_GET['birth']."', '".$_GET['mobile']."', '".$_GET['email']."', '".$_GET['job']."');";
    if(mysqli_query($link, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }   
   }
   
   
   
   // Attempt select query execution
$sql = "SELECT * FROM Accounts";

if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){

        echo "<table class='flatTable'>";

            echo "<tr class='titleTr'>";

                echo "<td class='titleTd'>TABLE TITLE</td>";

                echo "<td colspan='4'></td>";

                echo "<td></td>";

                echo "</tr>";

            echo "<tr class='headingTr'>";
			
			echo "<td>First Name</td>";
			
			echo "<td>Last name</td>";
			
			echo "<td>Birthday</td>";
			
			echo "<td>Mobile</td>";
			
			echo "<td>Email</td>";
			
			echo "<td>job title</td>";
			
			echo "</tr>";

        while($row = mysqli_fetch_array($result)){

            echo "<tr>";

                echo "<td>" . $row['fname'] . "</td>";

                echo "<td>" . $row['lname'] . "</td>";

                echo "<td>" . $row['birth'] . "</td>";

                echo "<td>" . $row['mobile'] . "</td>";
				
				echo "<td>" . $row['email'] . "</td>";
				
				echo "<td>" . $row['job'] . "</td>";

            echo "</tr>";

        }

        echo "</table>";

        // Free result set

        mysqli_free_result($result);
		
		$sql = "SELECT job ,COUNT(job) FROM Accounts GROUP BY job ORDER BY COUNT(job) DESC LIMIT 3";

if($result = mysqli_query($link, $sql)){
	  if(mysqli_num_rows($result) > 0){
		  echo "Top three profession are:<br>";
		   while($row = mysqli_fetch_array($result)){
	  echo "- ".$row['job']." || ".$row['COUNT(job)']."<br>";
		   }
	  }
}

    } else{

        echo "No records matching your query were found.";

    }

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// Close connection

mysqli_close($link);
    ?> 
<body>
</body>
</html>
