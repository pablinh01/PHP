<?php
    $velo = @$_POST['vel'];
    if ($velo <= 60) {
        echo "<p style='color: green'> Velocidade permitida</p>";
    } else if ($velo > 60 and $velo <= 80) {
        echo "<p style='color: yellow'>reduza velocidade</p>";
    }
    else if ($velo - 80) {
        echo "<p style='color: red'> Multado</p>";
    }
