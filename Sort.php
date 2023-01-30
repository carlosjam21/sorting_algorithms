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
}

$arr = array(3,4,5,8,1,3,7,0,43,3,84,33,48,7);

$arr = Sort::byBubble( $arr );

foreach( $arr as $value){
    echo $value . " , ";
}