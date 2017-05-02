<!DOCTYPE html>

<html>
<head>
    <title>New Group</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Create a new Group </h3>
  </div>
  <div class="panel-body">
 <form  id="myForm" action = "newgroup.php">
    <strong>Group Name:</strong>
    <input type = "text" name = "groupName"> <br>
	<br>
	<br>
    <strong>Enter up to 10 times for your group to meet: </strong><br>
	<table class="table">
    <tr>
	<td> Time 1: </td>
    <td> <input type = "text" name = "time1"> </td> 
	</tr>
    <tr>
	<td> Time 2: </td>
    <td> <input type = "text" name = "time2"> </td> 
	</tr>
    <tr>
	<td> Time 3: </td>
    <td> <input type = "text" name = "time3"> </td> 
	</tr>
    <tr>
	<td> Time 4: </td>
	<td> <input type = "text" name = "time4"> </td> 
	</tr>
    <tr>
	<td> Time 5:</td>
    <td> <input type = "text" name = "time5"> </td> 
	</tr>
    <tr>
	<td> Time 6:</td>
    <td> <input type = "text" name = "time6"> </td> 
	</tr>
    <tr>
	<td> Time 7:</td>
    <td> <input type = "text" name = "time7"> </td>
	</tr>
    <tr>
	<td> Time 8:</td>
    <td> <input type = "text" name = "time8"> </td>
	</tr>
    <tr>
	<td> Time 9: </td>
    <td> <input type = "text" name = "time9"> </td>
	</tr>
    <tr>
	<td> Time 10: </td>
    <td> <input type = "text" name = "time10"> </td> 
	</tr>
	</table>
	<strong> Add the emails of users you want in this group: </strong>
	<table class="table">
	<tr>
 <td id="addUserCell"> <input id="textBox" type="text" name="user0"> </input> <input type="button" name="answer" value="Add another user" id = 'addUser' > <br> </td>
 </tr>
  </table> 
 <input type = "submit" value = "Submit">
 </table>
 </form>
  </div>
</div>
<script type = "text/javascript">
    var i = 1;     
    document.getElementById("addUser").onclick = function() {
    var addUserrow = document.getElementById("addUserCell");
    var input = document.createElement("input");
    input.type = "text";
    input.name = "user" + i;
    var br = document.createElement("br");
    addUserrow.appendChild(input);
    addUserrow.appendChild(br);
    i++;
}
</script>
<?php
    echo "check";
    var_dump($_REQUEST);
    $host = 'localhost';
    $user = 'root';
    $pass = 'Alli!196584';
    $db = 'accounts';
    $connection = @mysqli_connect($host,$user,$pass,$db);

    $groupName = $_REQUEST["groupName"];
    $time1 = $_REQUEST["time1"];	
    $time2 = $_REQUEST["time2"];
    $time3 = $_REQUEST["time3"];
    $time4 = $_REQUEST["time4"];
    $time5 = $_REQUEST["time5"];
    $time6 = $_REQUEST["time6"];
    $time7 = $_REQUEST["time7"];
    $time8 = $_REQUEST["time8"];
    $time9 = $_REQUEST["time9"];
    $time10 = $_REQUEST["time10"];
    echo "check22";

    $usersArray = array();
    for($i = 11, $j = 0; $i < count($_REQUEST); $i++, $j++)
    {
       $newuser = $_REQUEST["user" . $j];
       //echo $newuser;
       array_push($usersArray, $newuser);
       //echo $usersArray[$j];
    }
    //echo count($_REQUEST);

    $query = "INSERT INTO groups(groupName, Time1, Time2, Time3, Time4, Time5, Time6, Time7, Time8, Time9, Time10) VALUES ('$groupName', '$time1', '$time2', '$time3', '$time4', '$time5', '$time6', '$time7', '$time8', '$time9','$time10');";
    $resultset = mysqli_query($connection,$query);
    //echo $resultset;

    //echo "here";
    $query2 = "SELECT gID FROM groups WHERE (groupName = '$groupName');";
    $result = mysqli_query($connection,$query2);
    
    $row = mysqli_fetch_assoc($result);
    $GID = $row['gID'];
    echo $GID;


    for ($i = 0; $i < count($usersArray); $i++)
    {
        $userEmail = $usersArray[$i];
        $getUIDquery = "SELECT id FROM users WHERE email = '$userEmail';";
        $UIDresults = mysqli_query($connection,$getUIDquery);
        $row = mysqli_fetch_assoc($UIDresults);
        $UID = $row['id'];

        $query3 = "INSERT INTO availabilities(UID, gID) VALUES ('$UID', '$GID');";
        $results = mysqli_query($connection,$query3);
    }
?> 
</body>
</html>

