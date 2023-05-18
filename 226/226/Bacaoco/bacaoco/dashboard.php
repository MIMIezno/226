<!DOCTYPE html>
<html>
<head>
  <title>My Database Table</title>
  <style>
    .table-box {
      margin: 0 auto;
      max-width: 1000px;
      border: 1px solid #ccc;
      padding: 10px;
      font-family: Arial, sans-serif;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

<!DOCTYPE html>
<html>
<head>
  <title>My Database Table</title>
  <style>
    .table-box {
      margin: 0 auto;
      max-width: 600px;
      border: 1px solid #ccc;
      padding: 10px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .add-button {
    position: fixed;
    bottom: 96px;
    right: 60px;
    background-color: green;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
    font-family: Arial, sans-serif;
    cursor: pointer;
  }
    
    .add-button:hover {
      background-color: #3e8e41;
    }


  </style>
</head>
<?php
include('header.php');
?>
<h1 align='center'> Services </h1>
<body>
  <div class="table-box">


<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "dbg2bacaoco";

$conn = new mysqli($server,$user,$pass,$db);

$sql = "SELECT * FROM tblservice";
$result = mysqli_query($conn, $sql);


echo "<table>";
echo "<tr><th>Service ID</th><th>Service Name</th><th>Description</th><th>Price</th></tr>";


    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["ServiceID"] . "</td>";
        echo "<td>" . $row["Servicename"] . "</td>";
        echo "<td>" . $row["Description"] . "</td>";
        echo "<td>" . $row["Price"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";


$conn->close();
?> 



</div>
<a href="add.php" class="add-button">Add New Data</a>
<?php
include('footer.php');
?>
</body>
</html>