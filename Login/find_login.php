<?php 
    
    include '../data/db.php';
    
            $query = "SELECT * FROM users";
            
            $result = mysqli_query($conn, $query);
            
            if (!$result) {
                die('query failed');
            }        
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>
            The Login Page
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <main>
            <header>
                <h1>Login Form</h1>
            </header>
            
            <div class="container">
                <div class="col-xs-6">
                    <?php 
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <pre>
                        <?php
                            print_r($row);
                        ?>
                    </pre>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </main>
    </body>
</html>