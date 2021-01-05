<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
    crossorigin="anonymous">
    <style>
	body,html{
	height:100%;
}
 *{
    box-sizing:border-box;
  }

  table{
	width:100%;
    text-align:left;
    font-size:20px;
    font-style:bold;
    font-weight:thick;
    text-transform:capitalize;
    word-break: break-word;
}
tr:nth-child(even) {
	background-color: #f2f2f2
}
td{
	padding:1%;
}
@media only screen and (max-width:620px){
      table{
      	width:100%;
      	font-size:9px;
      	font-weight:bold;
      }
    }
</style>
</head>
<body>


 <div style="background-color:white;margin:50px;">
 <table>
 <tr>
 <th>name</th>
 <th>email</th>
 <th>number</th>
 <th>branch</th>
 <th>question1</th>
 <th>question2</th>
 <th>question33</th>
 <th>question4</th>
 <th>question5</th>
 <th>question6</th>
 <th>comment...to be noted</th>
</tr>
 <?php
 $conn = mysqli_connect('localhost', 'root', '', 'userregistration');
 $query="SELECT name,email,number,branch,q1,q2,q3,q4,q5,q6,comment FROM answer";
$result = $conn->query($query);
if (isset($result->num_rows) && $result->num_rows >0) {
while ($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo  $row["name"]?></td>
<td><?php echo  $row["email"]?></td>
<td><?php echo  $row["number"]?></td>
<td><?php echo  $row["branch"]?></td>
<td><?php echo  $row["q1"]?></td>
<td><?php echo  $row["q2"]?></td>
<td><?php echo  $row["q3"]?></td>
<td><?php echo  $row["q4"]?></td>
<td><?php echo  $row["q5"]?></td>
<td><?php echo  $row["q6"]?></td>
<td><?php echo  $row["comment"]?></td>
</tr>
<?php } ?>
<?php } ?>
</table>
</div>
   
</div>
</body>
</html>