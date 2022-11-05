<?php
//3.if..elseif else

$mark = 70;
if($mark < 50){  //1.
    echo "F grade";
}else if($mark >= 50 && $mark < 60){ //2.
    echo "D grade";
}else if($mark >= 60 && $mark < 70){ //3.
    echo "C grade";
}else{
    echo "Invalid value";
}
