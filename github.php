<?php
echo 'stop';
$fruit = array('apple', 'banane', "orange", 'poire');
if(in_array('myrtille',$fruit)){
    echo ("the myrtille is not among our fruits");
}
if(in_array('apple',$fruit)){
    echo ("the apple is among our fruits");
}


?>