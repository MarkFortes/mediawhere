<html>
    <head>
        <meta charset="utf-8">
        <title>Activitat 02</title>
    </head>
    <body>
        <h2>ACTIVITAT 02 - MARC FORTES</h2>
        <!------------------------------>
        <h3>Tasca 1 - Sessió</h3>
        <p>Dissenyar un script en PHP que ens llegeixi en un camp de formulari un número de tres xifres. Si el valor que s’introdueix al formulari no correspon amb el que es demana, s’ha d’imprimir un missatge d’error i s’ha de continuar demanant. Si el camp introduït és correcte, hem de canviar d’ordre les xifres que ens han donat per a que el número resultant sigui el més gran possible</p>
        <p><b>Anotación de Marc:</b> El algoritmo está diseñado para que sea capaz de ordenar cualquier cantidad de cifras. Aún así limito la entrada a 3 cifras según ordena el enunciado.</p>
        <form action="" method="get">
            <label>Número de 3 xifres: </label>
            <input type="number" name="txtNumTresXifres">
            <input type="submit" value="Ordenar" name="btnValidarNumTresXifres">
        </form>
        <?php
            //Valida si ha enviado el formulario
            if(isset($_GET["btnValidarNumTresXifres"])){ 
                $num = $_GET["txtNumTresXifres"];
                $numOrdenat = "";
                $numFinal = "";
                //Comproba que la xifra ingressada sigui de tres xifres
                if(strlen($num) == 3 ){
                    for($i=0; $i<strlen($num); $i++){
                         //solo se hace al buscar el primer numero y por lo tanto más grande
                        if($i == 0){
                            $numOrdenat[$i] = $num[$i];
                            for($j=1; $j<strlen($num); $j++){
                                if($num[$j] > $numOrdenat[$i]){
                                    $numOrdenat[$i] = $num[$j];
                                }
                            } 
                        //ordena del segundo numero al penultimo preguntando que sea mas pequeño que el anterior y más grande que el resto
                        }else if($i != 0 && $i !=(strlen($num))-1){
                            $sigNum = $num[0];
                            for($j=0; $j<strlen($num); $j++){
                                for($k=0; $k<strlen($num); $k++){
                                    if(($num[$j] < $numOrdenat[$i-1]) && ($num[$j] > $num[$k])){
                                        $sigNum = $num[$j];
                                    }
                                }
                            }
                            $numOrdenat[$i] = $sigNum;
                        //busca el numero más pequeño y lo coloca al final
                        }else{  
                            $numPetit = $num[0];
                            for($j=0; $j<strlen($num); $j++){
                                if($num[$j] < $numPetit){
                                    $numPetit = $num[$j];
                                }
                            } 
                            $numOrdenat[$i] = $numPetit;
                        }
                    }
                    for($i=0;$i<strlen($num);$i++){
                        $numFinal = $numFinal . strval($numOrdenat[$i]); //echo $numOrdenat[$i];
                    }
                    echo "Número introduit: " . $num . "<br>";
                    echo "Número ordenat: " . $numFinal . "<br>";
                }else{
                    echo "Xifra de mida incorrecta";
                }
            }
        ?>




        <!------------------------------>
        <h3>Tasca 2 - Cookie</h3>
        <!------------------------------>
        <h3>Tasca 3 - Arxiu</h3>                
    </body>

</html>