<?php
    //3.Relation/Comparation Operatot
    $x = 25;
    $y = 35;
    $z = "25";

    echo "1.equal $x == $z :"; var_dump($x == $z); echo "<br>"; //true
    echo "2.Identical $x === $z :"; var_dump($x === $z); echo "<br>"; //false
    echo "3.Not equal $x != $y :"; var_dump($x != $y); echo "<br>"; //true
    echo "4.Not equal $x != $z :"; var_dump($x != $z); echo "<br>"; //false
    echo "5.Not Identical $x !== $z :"; var_dump($x !== $z); echo "<br>"; //false
    echo "6.Greater than $x > $y :"; var_dump($x > $y); echo "<br>"; //false
    echo "7.Greater than $x > $z :"; var_dump($x > $z); echo "<br>"; //false
    echo "8.Less than $x < $y :"; var_dump($x < $y); echo "<br>"; //true
    echo "9.Less than $x >= $y :"; var_dump($x >= $y); echo "<br>"; //false
?>