<?php

class Sort
{
    public static function byBubble(array $numbers){

        for ($j=0; $j < count($numbers) -1 ; $j++) { 
            for ($i=0; $i < count($numbers) -1 - $j ; $i++) { 

                $n = $numbers[$i];
                $n_1 = $numbers[$i+1];
    
                if ( $n > $n_1 ) {
                    $numbers[$i] = $n_1;
                    $numbers[$i+1] = $n;
                }
                
            }
        }
        return $numbers;
    }

    public static function byCarlos(array $numbers){

        for ($i=1; $i < count($numbers) ; $i++) { 
            
            for ($j=0; $j < $i  ; $j++) { 
                
                if( $numbers[$j] > $numbers[$i] ){
                    $aux = $numbers[$j];

                    $numbers[$j] = $numbers[$i];
                    $numbers[$i] = $aux; 
                }
            }
        }
        return $numbers;
    }

    public static function bySelection(array $numbers){

        for ($i=0; $i < count($numbers) - 1; $i++) { 
            $minimo = $i;

            for ($j= $i+1; $j < count($numbers); $j++) { 
                
                if( $numbers[$minimo] > $numbers[$j] ){
                    $minimo = $j;
                }
            }

            $aux = $numbers[$i];

            $numbers[$i] = $numbers[$minimo];
            $numbers[$minimo] = $aux;
        }
        return $numbers;
    }
}

$arr = array(3,4,5,8,1,3,7,0,43,3,84,33,48,7);

$arr = Sort::bySelection( $arr );

foreach( $arr as $value){
    echo $value . " , ";
}