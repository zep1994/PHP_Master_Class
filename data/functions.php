<?php
        include 'db.php';

        function showAllData() {

            $query = "SELECT * FROM users";  
            global $conn;
            $result = mysqli_query($conn, $query);  
                if (!$result) {
                    die('query failed');
                }      


                while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['username'];

                echo "<option value='$id'>$id, $name</option>";
            }
        }