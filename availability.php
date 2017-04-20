

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
    });
});

</script>

</head>
<body>

<table id="table_id">
  <tr>
    <th>Name</th>
    <th>Date & Time 1</th>
    <th>Date & Time 2</th>
    <th>Date & Time 3</th>
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
    <td class="y_n">No</td>
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
