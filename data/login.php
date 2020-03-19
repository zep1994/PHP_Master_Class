<?php 
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $conn = mysqli_connect('localhost', 'root', '', 'loginapp');
        
            if($conn) {
                echo "We are connected <br />";
            } else {
                echo "Could Not Connect <br />";
            }
            
            $query = "INSERT INTO users(username, email, password) ";
            $query .= "VALUES ('$username', '$email', '$password')";
            
            $result = mysqli_query($conn, $query);
            
            if (!$result) {
                die('query failed');
            }        
                    
        if($username && $email && $password) {
            echo $username;
            echo $email;
            echo $password;
        } else {
            echo "All Values are required";
        }
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
                    <form action="login.php" method="POST">
                        
<!--                        Username -->
                        <div class="form-group">
                            <label for='username'>Username</label>
                            <input type="text" name="username" class="form-control" />
                        </div>

 <!--                        Email -->
                        <div class="form-group">
                             <label for='email'>E-mail</label>
                            <input type="text" name="email" class="form-control" />
                        </div>
 
<!--                        Password-->
                        <div class="form-group">
                             <label for='password'>Password</label>
                             <input type="password" name="password" class="form-control" />
                        </div>

                        <input type="submit" name="submit" class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>