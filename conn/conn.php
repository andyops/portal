<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'registration_login_db';
$port = "3306";
try {
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // // Test query
    // $sql = "SELECT * FROM test LIMIT 2"; // Replace 'your_table_name' with an actual table name
    // $stmt = $conn->query($sql);

    // // Check if query was successful
    // if ($stmt) {
    //     echo "Connection is working. Data fetched successfully.";
    // } else {
    //     echo "Connection is working but unable to fetch data.";
    // }

} catch (PDOException $e) {
    echo "Failed " . $e->getMessage();
}
?>