<?php 

    //Ass 5
    $arr2=[10,3,4,5,10,5,6,7,10,4];
    $emptyarr=[];

    foreach($arr2 as $a){
        foreach($emptyarr as $e){
            if($a==$e){
               continue 2;
            }
        }
        $emptyarr[]=$a;
    }
    print_r($emptyarr);


   
?>
