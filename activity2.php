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
    <h2>Salarios</h2>
    <?php
        $a = 20000;
        $b = 10000;
        $c = 5000;

        $empleados = array(
            'Empleado1' => 'b',
            'Empleado2' => 'a',
            'Empleado3' => 'b',
            'Empleado4' => 'c'
        );

        foreach($empleados as $key => $value){
            echo "<h3>{$key}</h3>";
            if($value == 'a'){
                echo "Valor hora: " . $a;
                $salarioMes = $a*8*30;
                echo ' Salario mensual: ' . $salarioMes;
                if($salarioMes > 1500000){
                    echo ' Salario mayor a tope maximo';
                }else{
                    $valorHoraExtra = $a+($a*0.06);
                    $horasExtras = $valorHoraExtra*3;
                    $salarioMes += $horasExtras;
                    echo ' Salario mensual: ' . $salarioMes;
                }
            }
            else if($value == 'b'){
                echo "Valor hora: " . $b;
                $salarioMes = $b*8*30;
                echo ' Salario mensual: ' . $salarioMes;
                if($salarioMes > 1500000){
                    echo ' Salario mayor a tope maximo';
                }else{
                    $valorHoraExtra = $b+($b*0.06);
                    $horasExtras = $valorHoraExtra*3;
                    $salarioMes += $horasExtras;
                    echo ' Salario mensual: ' . $salarioMes;
                }
            }
            else if($value == 'c'){
                echo "Valor hora: " . $c;
                $salarioMes = $c*8*30;
                echo ' Salario mensual: ' . $salarioMes;
                if($salarioMes > 1500000){
                    echo ' Salario mayor a tope maximo';
                }else{
                    $valorHoraExtra = $c+($c*0.06);
                    $horasExtras = $valorHoraExtra*3;
                    $salarioMes += $horasExtras;
                    echo ' Salario mensual: ' . $salarioMes;
                }
            }
        }
    ?>
</body>
</html>