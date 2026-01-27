<html>
    <head>
        <title>html and php</title>
        <style>
            #result{
                color:red;
            }
            h1{
                font-style:italic;
            }
        </style>
    </head>
    <body>
        <form  method="POST"  action= "first.php">         
                        <input type="number" name="n1"/>
                        <input type="number" name="n2"/>
                        <input type="submit" name="add"/>            
        </form> 
        <?php if(!empty($_POST)){
        /* $name = "rakeeta";
            echo "hello " . $name;
            $number1 = 3;
            $number2 = 10;
            $result = $number1 + $number2; 
        */
        $number1 = $_POST["n1"];
        $number2 = $_POST["n2"];
        $result = $number1 + $number2;
       ?>
            <div id="result">
                <?php echo "<h1>". "the result is " .  $result . "</h1>";?>
            </div>
        <?php } ?>
    </body>
</html>