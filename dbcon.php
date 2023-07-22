<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "projectjs";

// Try connecting to the Database
$con = mysqli_connect($server, $user, $password, $db);

//Check the connection
if ($con) {
/* ?>
    <script>
        alert("Connection Successful");
    </script>
<?php */
} else {
/* ?>
    <script>
        alert("No Connection");
    </script>
<?php */
}

?>