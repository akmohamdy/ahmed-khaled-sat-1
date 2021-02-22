<?php 

    //Ass 1
    $arr=[5,7,2,1,4];
    $minno=$arr[0];
    $maxno=$arr[0];

    foreach($arr as $a){
        if($a<$minno){
          $minno=$a;  
        }

        if($a>$maxno){
            $maxno=$a;
        }
    }

    echo "Maximum number : $maxno <br> Minimum number : $minno <br>";

        

?>

