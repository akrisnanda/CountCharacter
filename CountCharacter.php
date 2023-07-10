<?php

function countCharacter($input){

    if(strlen($input) > 0){
        $arr = [];
        for($i=0;$i<strlen($input);$i++){
            if(isset($arr[$input[$i]])){
                $arr[$input[$i]] += 1;
            }else{
                $arr[$input[$i]] = 1;
            }
        }

        // echo json_encode($arr);

        $output = '';
        foreach($arr as $idx=>$row){
            $output .= $idx .":".$row ." ";
        }

        echo "Input: ". $input."\n";
        echo "Output: ". $output;
    }
}
$a = readline('Enter an string: ');
//'Aether'
$char1 = countCharacter($a);


?>