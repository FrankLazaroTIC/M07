<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
    //Gestió taulas restaurants
        //Creem el array
        $taulas= array();
        for($i=0;$i<10;$i++){
            //Afegim valors amb ajuda de la funció random que ens assignara numeros entre 0 i el 10
            array_push($taulas,rand(0,10));
            //Si la taula es igual a 10 ens mostrara per pantalla que esta plena
            if($taulas[$i]==10){
                ?>
                <li><?php echo "La taula ".$i." està plena";?></li><br>
                <?php
            //Si la taula es igual a 0 ens mostrara per pantall que esta plena
            } else if($taulas[$i]==0){
                ?>
                <li><?php echo "La taula ".$i." està buida";?></li><br>
                <?php
            } else{
                ?>
                <li><?php echo "La taula ".$i." té ".$taulas[$i]." comensals";?></li><br>
                <?php
            }
        }
    ?>
    </ul>

    <ul>
    <?php
    
    //Gestió d'habitacions d'un hotel
        $hotel= array(
            "plantes"=> array(),
            "habitacions"=>array(),
            "persones"=>array()
        );



            /*
            array_push($hotel,rand(0,5),rand(0,10),rand(0,10));
            
            if($hotel['persones'][$i]==10){
                ?>
                <li><?php echo "A l'habitació ".$i." de la planta".$hotel['plantes'][$i]."està plena";?></li><br>
                <?php
            } else if($hotel['persones'][$i]==0){
                ?>
                <li><?php echo "A l'habitació ".$i." de la planta ".$hotel['plantes'][$i]." està buida";?></li><br>
                <?php
            } else{
                ?>
                <li><?php echo "A l'habitació ".$i." de la planta ".$hotel['plantes']." té ".$hotel['persones'];?></li><br>
                <?php
            }
            
        }
        */
    ?>
    </ul>
    

</body>
</html>