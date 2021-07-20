<!DOCTYPE html>
<html>
<head>
<style>
    body {
    background-color: blue;
    margin-top: 80px;
    margin-left: 100px;
    margin-right: 100px;
    margin-bottom:100px;
   
    }
    table {
            border-collapse: collapse;
            width: 100%;
            height: 100%;
            
            font-family: monospace;
            font-size: 25px;
            text-align: center;
            overflow: hidden;
            float: left;
            background:orange;
            height: 100px;
            border-radius: 10px;
            border-color:black;
            align-items: center;
        }
    th {
        background-color: #588c7e
        color: red;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
    .container{
        background-image: red;
        color: white;
        position:relative;
        padding:0;
        width:100%;
        height: 50px;
        text-align: center;
        font-weight: 800;
        font-family:cursive; 
    }
    .btn{
        display: flex;
  			height: 40px;
			width: 100px;
  			padding: 0;
  			margin-left: 100px;
  			background: #009578;
  			border: 50px;ss;
  			outline: none;
  			border-radius: 5px;
  			overflow: hidden;
  			font-family: "Quicksand", sans-serif;
  			font-size: 20px;
  			font-weight: 400;
  			cursor: pointer;
  			transform:scale(1);
  			transition:1s;
			text-decoration: none;
            align-items: center;
            
    }
    .btn:hover 
		{
  			background: red;
  			transform:scale(1.15);
			transition:1s;
		}
		.btn:active
		{
  			background: #006e58;
  		}
</style>
</head>
<body>
<div class="container"><h1>ACCOOUNTS</h1></div>
    <table>
        <tr>
            
        <th>&nbspID</th>
            <th>Name</th>
            <th>Email ID</th>
            <th>Balance</th>
            <th>&nbspTransaction</th>
        </tr>
<?php
include "db.php";  // Using database connection file here
$sql = "SELECT * FROM `transfer`;";
$result=$conn->query($sql);
$row_cnt = $result->num_rows;
if ($row_cnt > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["ID"]. "</td>
    <td>" . $row["Name"] . "</td>
    <td>". $row["Email ID"]. "</td>
    <td>" . $row["Balance"] ."</td>  
 <td><button class='btn'>&nbsp&nbsp&nbsp&nbspSEND&nbsp&nbsp&nbsp&nbsp&nbsp</button></td>
    </tr>";
    
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
?>
</table>
</body>
</html>