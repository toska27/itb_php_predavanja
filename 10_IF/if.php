<?php
    $a = 0;
    $b = 5;
    $c = 10;

    if($a == $b)
    {
        echo "<p>$a je jednako $b</p>";
    }

    if($a != $b)
    {
        echo "<p>$a je razlicito od $b</p>";
    }

    if($a <= $b)
    {
        echo "<p>$a je manje ili jednako od $b</p>";
    }

    echo "<p>Nastavljam dalje</p>";

    $br1 = 3;
    $br2 = "3";

    if($br1 == $br2)
    {
        echo "<p>$br1 jednako je po vrednosti sa $br2</p>";
    }
    
    if($br1 === $br2)
    {
        echo "<p>$br1 jednako je po vrednosti i tipu sa $br2</p>";
    }

    // IF - ELSE

    $a = 5;
    $b = 5;

    if($a > $b)
    {
        echo "<p>$a je vece od $b</p>";
    }
    else
    {
        echo "<p>$a je manje ili jednako od $b</p>";
    }

    echo "Nastavljamo ponovo dalje";
?>