
<?php
include('header.php');
?>

<?php
include('footer.php');
?>
<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "dbg2bacaoco";

$conn = new mysqli($server,$user,$pass,$db);
if (isset($_POST["ServiceID"])) {
    $ServiceID = $_POST["ServiceID"];
} else {
   
    echo "Error: ServiceID field is required.";
    exit;
}

if (isset($_POST["Servicename"])) {
    $Servicename = $_POST["Servicename"];
} else {

    echo "Error: Servicename field is required.";
    exit;
}

if (isset($_POST["Description"])) {
    $Description = $_POST["Description"];
} else {

    echo "Error: Description field is required.";
    exit;
}

if (isset($_POST["Price"])) {
    $Price = $_POST["Price"];
} else {
 
    echo "Error: Price field is required.";
    exit;
}


$sql = "INSERT INTO tblservice (ServiceID, Servicename, Description, Price) VALUES ('$ServiceID', '$Servicename', '$Description', '$Price')";

if (mysqli_query($conn, $sql)) {
    echo "New service record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


<?php
include('footer.php');
?>

