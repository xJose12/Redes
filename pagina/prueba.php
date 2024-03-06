<!-- tabla  -->
<?php
$conn = new mysqli('db', 'root', 'secret', 'misdatos');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, apellidos FROM nombres";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["nombre"] . " " . $row["apellidos"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>