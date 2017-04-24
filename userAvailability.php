<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'rabber333';
$db = 'accounts';
$conn = new mysqli($host,$user,$pass,$db) or die($conn->error);

session_start();
/*defining user info from session variables */
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email = $_SESSION['email'];
$active = $_SESSION['active'];


/*getting user's id*/
$query = "SELECT id FROM users WHERE email = '$email'"; 
$resultset = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM)) {
	$id = $row[0];
}
//echo $id;

//assume that GID is 1 for now

//getting all proposed times
$query1 = "select time1 from groups where GID =1;";
$result1 = mysqli_query($conn, $query1);
while ($row = mysqli_fetch_array($result1, MYSQLI_NUM)) {
	$time1 = $row[0];
}

$query2 = "select time2 from groups where GID =1;";
$result2 = mysqli_query($conn, $query2);
while ($row = mysqli_fetch_array($result2, MYSQLI_NUM)) {
	$time2 = $row[0];
}

$query3 = "select time3 from groups where GID =1;";
$result3 = mysqli_query($conn, $query3);
while ($row = mysqli_fetch_array($result3, MYSQLI_NUM)) {
	$time3 = $row[0];
}
//echo $time1;



?>

<html>
<head>
  <title>Availability</title>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
}
    td {
      text-align: center;
}
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $('#table_id td.y_n').each(function(){
        if ($(this).text() == 'No') {
            $(this).css('background-color','#f00');
        }
	else if ($(this).text() == 'Yes') {
            $(this).css('background-color','#008000');
        }
	else {
	    $(this).css('background-color','#C0C0C0');
	}
    });
});

</script>

</head>
<body>


<table id="table_id">
  <tr>
    <th>Name</th>
    <th><?php echo $time1; ?></th>
    <th><?php echo $time2; ?></th>
    <th><?php echo $time3; ?></th>
  </tr>
  <tr>
    <td>Sam</td>
    <td> 
      <select>
       <option value="yes">Yes</option>
       <option value="no">No</option>
      </select> 
    </td>
    <td class="y_n">No</td>
    <td class="y_n">Yes</td>
  </tr>
  <tr>
    <td>David</td>
    <td class="y_n">Yes</td>
    <td class="y_n">Yes</td>
    <td class="y_n">Yes</td>
  </tr>
  <tr>
    <td>Alli</td>
    <td class="y_n">No</td>
    <td class="y_n">Yes</td>
    <td class="y_n">Yes</td>
  </tr>
  <tr>
    <td>Yifeng</td>
    <td class="y_n">Yes</td>
    <td class="y_n">Eh</td>
    <td class="y_n">Yes</td>
  </tr>
  <tr>
    <td>Matt</td>
    <td class="y_n">No</td>
    <td class="y_n">No</td>
    <td class="y_n">Yes</td>
  </tr>
</table>

</body>
</html> 


