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

$query4 = "select time4 from groups where GID =1;";
$result4 = mysqli_query($conn, $query4);
while ($row = mysqli_fetch_array($result4, MYSQLI_NUM)) {
	$time4 = $row[0];
}

$query5 = "select time5 from groups where GID =1;";
$result5 = mysqli_query($conn, $query5);
while ($row = mysqli_fetch_array($result5, MYSQLI_NUM)) {
	$time5 = $row[0];
}

$query6 = "select time6 from groups where GID =1;";
$result6 = mysqli_query($conn, $query6);
while ($row = mysqli_fetch_array($result6, MYSQLI_NUM)) {
	$time6 = $row[0];
}

$query7 = "select time7 from groups where GID =1;";
$result7 = mysqli_query($conn, $query7);
while ($row = mysqli_fetch_array($result7, MYSQLI_NUM)) {
	$time7 = $row[0];
}

$query8 = "select time8 from groups where GID =1;";
$result8 = mysqli_query($conn, $query8);
while ($row = mysqli_fetch_array($result8, MYSQLI_NUM)) {
	$time8 = $row[0];
}

$query9 = "select time9 from groups where GID =1;";
$result9 = mysqli_query($conn, $query9);
while ($row = mysqli_fetch_array($result9, MYSQLI_NUM)) {
	$time9 = $row[0];
}

$query10 = "select time10 from groups where GID =1;";
$result10 = mysqli_query($conn, $query10);
while ($row = mysqli_fetch_array($result10, MYSQLI_NUM)) {
	$time10 = $row[0];
}
//echo $time10;


//getting user 1's availability
$results1 = mysqli_query($conn,"select * from availabilities where UID = 1");
while ($row1 = mysqli_fetch_array($results1))
{
	$U1time1 = $row1['time1'];
	$U1time2 = $row1['time2'];
	$U1time3 = $row1['time3'];
	$U1time4 = $row1['time4'];
	$U1time5 = $row1['time5'];
	$U1time6 = $row1['time6'];
	$U1time7 = $row1['time7'];
	$U1time8 = $row1['time8'];
	$U1time9 = $row1['time9'];
	$U1time10 = $row1['time10'];
}

//user2
$results2 = mysqli_query($conn,"select * from availabilities where UID = 2");
while ($row2 = mysqli_fetch_array($results2))
{
	$U2time1 = $row2['time1'];
	$U2time2 = $row2['time2'];
	$U2time3 = $row2['time3'];
	$U2time4 = $row2['time4'];
	$U2time5 = $row2['time5'];
	$U2time6 = $row2['time6'];
	$U2time7 = $row2['time7'];
	$U2time8 = $row2['time8'];
	$U2time9 = $row2['time9'];
	$U2time10 = $row2['time10'];
}


//user3
$results3 = mysqli_query($conn,"select * from availabilities where UID = 3");
while ($row3 = mysqli_fetch_array($results3))
{
	$U3time1 = $row3['time1'];
	$U3time2 = $row3['time2'];
	$U3time3 = $row3['time3'];
	$U3time4 = $row3['time4'];
	$U3time5 = $row3['time5'];
	$U3time6 = $row3['time6'];
	$U3time7 = $row3['time7'];
	$U3time8 = $row3['time8'];
	$U3time9 = $row3['time9'];
	$U3time10 = $row3['time10'];
}


//user4
$results4 = mysqli_query($conn,"select * from availabilities where UID = 4");
while ($row4 = mysqli_fetch_array($results4))
{
	$U4time1 = $row4['time1'];
	$U4time2 = $row4['time2'];
	$U4time3 = $row4['time3'];
	$U4time4 = $row4['time4'];
	$U4time5 = $row4['time5'];
	$U4time6 = $row4['time6'];
	$U4time7 = $row4['time7'];
	$U4time8 = $row4['time8'];
	$U4time9 = $row4['time9'];
	$U4time10 = $row4['time10'];
}


//user5
$results5 = mysqli_query($conn,"select * from availabilities where UID = 5");
while ($row5 = mysqli_fetch_array($results5))
{
	$U5time1 = $row5['time1'];
	$U5time2 = $row5['time2'];
	$U5time3 = $row5['time3'];
	$U5time4 = $row5['time4'];
	$U5time5 = $row5['time5'];
	$U5time6 = $row5['time6'];
	$U5time7 = $row5['time7'];
	$U5time8 = $row5['time8'];
	$U5time9 = $row5['time9'];
	$U5time10 = $row5['time10'];
}

//echo $U1time1;


//getting users names;
$name1 = mysqli_query($conn,"select first_name from users where id = 1");
while ($rowName1 = mysqli_fetch_array($name1))
{
	$user1 = $rowName1['first_name'];

}


$name2 = mysqli_query($conn,"select first_name from users where id = 2");
while ($rowName2 = mysqli_fetch_array($name2))
{
	$user2 = $rowName2['first_name'];

}


$name3 = mysqli_query($conn,"select first_name from users where id = 3");
while ($rowName3 = mysqli_fetch_array($name3))
{
	$user3 = $rowName3['first_name'];

}

$name4 = mysqli_query($conn,"select first_name from users where id = 4");
while ($rowName4 = mysqli_fetch_array($name4))
{
	$user4 = $rowName4['first_name'];

}

$name5 = mysqli_query($conn,"select first_name from users where id = 5");
while ($rowName5 = mysqli_fetch_array($name5))
{
	$user5 = $rowName5['first_name'];

}






?>

<html>
<head>
  <title>Availability</title>
  <?php include 'css/css.html'; ?>
  <style>
    table, th, td {
      border: 5px solid gray;
      border-collapse: collapse;
}
    td {
      text-align: center;
}
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js">

</script>
<script type="text/javascript">
high = false;
function changeColor(tableItem, highlight){
	
	if (high){
		tableItem.style.backgroundColor = '#008000'; //green -> user answered yes
		high = false;
	}
	else if (highlight){
		//tableRow.text = 'No';		
		tableItem.style.backgroundColor = '#f00'; //red -> user answered no 
		high = true;
		//highlight = false;
		
	}
	
	/*else {
		tableItem.style.backgroundColor = '#ffff';
	}*/
}
</script>
<script type="text/javascript">

/*$(document).ready(function(){
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
});*/

</script>

</head>
<body>




<table width="600" height="500" id="table_id">
  <tr>
    <th>Name</th>
    <th><?php echo $time1; ?></th>
    <th><?php echo $time2; ?></th>
    <th><?php echo $time3; ?></th>
    <th><?php echo $time4; ?></th>
    <th><?php echo $time5; ?></th>
    <th><?php echo $time6; ?></th>
    <th><?php echo $time7; ?></th>
    <th><?php echo $time8; ?></th>
    <th><?php echo $time9; ?></th>
    <th><?php echo $time10; ?></th>
  </tr>
  <tr>
    <td><?php echo $user1; ?></td>
    <td onclick="changeColor(this, true);"><?php echo $U1time1; ?></td>
    <td onclick="changeColor(this, true);"><?php echo $U1time2; ?></td>
    <td onclick="changeColor(this, true);"><?php echo $U1time3; ?></td>
    <td onclick="changeColor(this, true);"><?php echo $U1time4; ?></td>
    <td onclick="changeColor(this, true);"><?php echo $U1time5; ?></td>
    <td onclick="changeColor(this, true);"><?php echo $U1time6; ?></td>
    <td onclick="changeColor(this, true);"><?php echo $U1time7; ?></td>
    <td onclick="changeColor(this, true);"><?php echo $U1time8; ?></td>
    <td onclick="changeColor(this, true);"><?php echo $U1time9; ?></td>
    <td onclick="changeColor(this, true);"><?php echo $U1time10; ?></td>
  </tr>
  <tr>
    <td><?php echo $user2; ?></td>
    <td class="y_n"><?php echo $U2time1; ?></td>
    <td class="y_n"><?php echo $U2time2; ?></td>
    <td class="y_n"><?php echo $U2time3; ?></td>
    <td class="y_n"><?php echo $U2time4; ?></td>
    <td class="y_n"><?php echo $U2time5; ?></td>
    <td class="y_n"><?php echo $U2time6; ?></td>
    <td class="y_n"><?php echo $U2time7; ?></td>
    <td class="y_n"><?php echo $U2time8; ?></td>
    <td class="y_n"><?php echo $U2time9; ?></td>
    <td class="y_n"><?php echo $U2time10; ?></td>
  </tr>
  <tr>
    <td><?php echo $user3; ?></td>
    <td class="y_n"><?php echo $U3time1; ?></td>
    <td class="y_n"><?php echo $U3time2; ?></td>
    <td class="y_n"><?php echo $U3time3; ?></td>
    <td class="y_n"><?php echo $U3time4; ?></td>
    <td class="y_n"><?php echo $U3time5; ?></td>
    <td class="y_n"><?php echo $U3time6; ?></td>
    <td class="y_n"><?php echo $U3time7; ?></td>
    <td class="y_n"><?php echo $U3time8; ?></td>
    <td class="y_n"><?php echo $U3time9; ?></td>
    <td class="y_n"><?php echo $U3time10; ?></td>
  </tr>
  <tr>
    <td><?php echo $user4; ?></td>
    <td class="y_n"><?php echo $U4time1; ?></td>
    <td class="y_n"><?php echo $U4time2; ?></td>
    <td class="y_n"><?php echo $U4time3; ?></td>
    <td class="y_n"><?php echo $U4time4; ?></td>
    <td class="y_n"><?php echo $U4time5; ?></td>
    <td class="y_n"><?php echo $U4time6; ?></td>
    <td class="y_n"><?php echo $U4time7; ?></td>
    <td class="y_n"><?php echo $U4time8; ?></td>
    <td class="y_n"><?php echo $U4time9; ?></td>
    <td class="y_n"><?php echo $U4time10; ?></td>
  </tr>
  <tr>
    <td><?php echo $user5; ?></td>
    <td class="y_n"><?php echo $U5time1; ?></td>
    <td class="y_n"><?php echo $U5time2; ?></td>
    <td class="y_n"><?php echo $U5time3; ?></td>
    <td class="y_n"><?php echo $U5time4; ?></td>
    <td class="y_n"><?php echo $U5time5; ?></td>
    <td class="y_n"><?php echo $U5time6; ?></td>
    <td class="y_n"><?php echo $U5time7; ?></td>
    <td class="y_n"><?php echo $U5time8; ?></td>
    <td class="y_n"><?php echo $U5time9; ?></td>
    <td class="y_n"><?php echo $U5time10; ?></td>
  </tr>
</table>

</body>
</html> 
















