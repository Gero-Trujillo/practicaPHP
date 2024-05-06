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
            <a href="activity3.php">Exercise 3</a>
            <a href="activity4.php">Exercise 4</a>
        </nav>
    </header>
    <hr>
    <section>
        <?php
            $products = array(
                'Zapatos' => 350000,
                'Tenis' => 280000,
                'Camisetas' => 175000,
                'Jeans' => 200000
            );
        ?>
        <h2>Precios Actuales</h2>
        <?php
            $sum = 0;
            $cant = 0;
            foreach($products as $key => $value){
                echo "<h3>{$key} = {$value}</h3>";
                $sum+=$value;
                $cant++;
            }
            echo '<br>';
            echo 'Suma de todos los precios: ' . $sum;
            $promedio = $sum/$cant;
            echo ' Promedio es: ' . $promedio;
        ?>
        <hr>
        <h2>Precios modificados</h2>
        <?php
            foreach($products as $key => $value){
                if($key == 'Jeans'){
                    $value = $value+($value*0.062);
                }
                if($key == 'Zapatos'){
                    $value = $value-($value*0.008);
                }
                echo "<h3>{$key} = {$value}</h3>";
            }
        ?>
    </section>
</body>
</html>