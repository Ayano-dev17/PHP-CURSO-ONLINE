<?php 

//Foreach e for para arrys

$arr = array('matheus','ayano','ayanokoji','lcodeace');

/*

foreach ($arr as $key => $value) {
    # code...
    echo $key;
    echo '=>';
    echo $value;
    echo "<hr>";
}

*/


$Total = count($arr);

for($i=0;$i<$Total;$i++){
    echo $arr[$i];
    echo "<br>";
}


?>