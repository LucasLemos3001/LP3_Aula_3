<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 3</title>
</head>
<body>
    <h1> LP3 Aula 3 - Lucas Lemos de Souza</h1>
    <h3>Uso For</h3>
    <?php
    for($i = 0; $i < 10; $i+=2) {
    echo "$i <br>";
}
?>
<h3>Uso While para números ímpares</h3>
<?php
    $i = 1;
    while ($i < 10) {
        echo "$i <br>";
        $i+=2;
    }
?>
<h3>Uso While para números pares</h3>
<?php
    $i = 0;
    while ($i < 10) {
        echo "$i <br>";
        $i+=2;
    }
?>
<h4>Múltiplos de 3 entre 0 e 100</h4>
<ul>
    <?php for($x = 0; $x < 101; $x+=3) { 
    ?> 
    <li> Número: <?= $x; ?></li>  
  <?php } ?>

   <h4>1- Contagem de 5 em 5</h4>
<ul>
    <?php for($x = 100; $x > -1; $x-=5) {
        echo "$x <br>";
        if($x == 0){
            echo "Acabou <br>";
        }
    }
    ?>
    
</ul>
<h4>2- Média aritmética entre 13 e 73</h4>
<ul>
    <?php for($x = 13; $x < 73; $x++) {
        $soma = $soma + $x;
        $soma++;
        $total = 0;
        $total++;
        }
        $resp = $soma / $total;
        echo "a média entre 13 e 73 é: $resp <br>";
    
    ?>
    
</ul>
<h4>3- Contagem regressiva de 30 a 1 com divisíveis de 4 marcados</h4>
<ul>
    <?php for($x = 30; $x > 0; $x--) {
        echo "$x <br>";
         if($x % 4 == 0) {
         echo " [$x] <br>"; 
     }
      
    }
    ?>
    
</ul>
</body>
</html>
