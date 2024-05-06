<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="activity1.php">Exercise 1</a>
            <a href="activity2.php">Exercise 2</a>
            <a href="activity3.html">Exercise 3</a>
            <a href="activity4.php">Exercise 4</a>
        </nav>
    </header>
    <section>
        <h2>Variables</h2>
        <?php
            //Variables
            $greeting = "Hola";
            $name = 'Geronimo Trujillo';
            echo $greeting.' '.$name;

            echo '<br>';
            //Operations
            $num1 = 5;
            $num2 = 8;
            $result = $num1 + $num2;
            echo $result;

            $user = array(
                'name' => 'Gero',
                'firstName' => 'Trujillo',
                'lastName' => 'Bustamante',
                'phone' => '3104049506'
            );
            echo '<br>';
            echo "User is " . $user["name"] . " " . $user["firstName"];
        ?>
    </section>
    <br><br><br><br>
    <footer>
        &copy; created By Gero - 2024
    </footer>
</body>
</html>