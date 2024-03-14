<?php 

    function numprimos($num){

        for($i=2; $i < $num; $i++){ 

            if($num % $i == 0){
                return false;
            }
        }

        return true;

    }

    $numprimo = array();

    do{

        $num = readline("Informe um número: ");

        numprimos($num);
        
    } while($num > 1);


    $primo = numprimos($num);

    if($primo == true){

        $numprimo[] = $num;
        
        echo $num . " é primo \n";
    } else {
        echo $num . " não é primo \n"; 
    }
