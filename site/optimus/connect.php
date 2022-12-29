 <?php
    // conection file to connect web portal to database 

    $servername = "localhost"; // your host
    $username1 = "zaphloaf_root";// database username
    $password = "Zaphir12345$"; // database password
    $database="zaphloaf_db"; // database name

    // Create connection
    $conn = new mysqli($servername, $username1, $password, $database);

    // Check connection or produce error
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    //echo "Connected successfully";
?>
