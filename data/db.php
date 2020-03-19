<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'loginapp');
        
            if($conn) {
                echo "We are connected <br />";
            } else {
                echo "Could Not Connect <br />";
            }
?>
