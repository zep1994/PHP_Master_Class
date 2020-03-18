<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <main>
            <header>
                <h1>Title of the Website</h1>
            </header>
            <?php 
                include 'script.php';
            ?>
        </main>
        <?php
        
            echo 'hello';
            $arr = ["tim", "<h2>hto</h2>"];
            
            foreach ($arr as $id) {
                echo "</br>";
                echo $id;
            }
            
            function sayHello() {
                echo "say hello";
            }
            
            sayHello();
        ?>
    </body>
</html>
