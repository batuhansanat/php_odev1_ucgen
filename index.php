<?php
function ucgen($adet){
    for($i=0; $i <= $adet; $i++){
        $j = 0;
        while($j < $i){
            echo "0";
            $j++;
        }
        echo "<br>";
    }
}
ucgen(15)

?>