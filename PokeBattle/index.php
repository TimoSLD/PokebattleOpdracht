<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poke Battle </title>
</head>
<body style="background-color:powderblue;">
    <center>
        <?php
            require_once('Pokemon.php');
            require_once('Pikachu.php');
            require_once('Charmeleon.php');
            require_once('Weakness.php');
            require_once('Resistance.php');
            require_once('Attack.php');

            $pikachu = new Pikachu();

            $charmeleon = new Charmeleon();

            echo $pikachu->name . " start met " . $pikachu->hitpoints . "hp" . "<br>";
            echo $charmeleon->name . " start met " . $charmeleon->hitpoints . "hp" . "<hr>";

            for ($i=0; $i < 2; $i++) { 
                $damage = $pikachu->attack( $pikachu->attacks[$i], $charmeleon);
                echo "<br>". $pikachu->name . " valt " . $charmeleon->name . " aan met de " . $pikachu->attacks[$i]->name. "<br>";
                echo "it dealt " . $damage . " damage" . "<br>";
                echo "<br>". $charmeleon->name . " heeft nog " . $charmeleon->hitPoints . " hp" . "<hr>";
              
                
                

                $damage = $charmeleon->attack( $charmeleon->attacks[$i], $pikachu);
                echo "<br>". $charmeleon->name . " valt " . $pikachu->name . " aan met de " . $charmeleon->attacks[$i]->name. "<br>";
                echo "it dealt " . $damage . " damage" . "<br>";
                echo "<br>". $pikachu->name . " heeft nog " . $pikachu->hitPoints . " hp" . "<hr>";
            
            }
        ?>
    </center>
</body>
</html>



