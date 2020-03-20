<?php 
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_DATABASE', 'loginapp');
        $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        
        if($conn) {
                echo "We are connected <br />";
            } else {
                echo "Could Not Connect <br />";
            }
?>
