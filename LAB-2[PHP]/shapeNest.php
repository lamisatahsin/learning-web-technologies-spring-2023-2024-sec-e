<?php

for($i=0; $i<3; $i++){
    
    for($j = 0; $j <= $i; $j++)
    {
        echo "* ";
    }
    echo "\n";
}
echo "\n";




for($i=0; $i < 3; $i++){
    
    for($j = 0; $j < 3 - $i; $j++)
    {
        echo "" .$j+1;
    }
    echo "\n";
}


echo "\n";


for($i=0; $i<3; $i++){
    
    for($j = 0; $j <= $i; $j++)
    {
        echo "A ".+ $j;
    }
    echo "\n";
}


?>