<?php
for ($numero = 1; $numero <= 10; $numero++) {
    echo "--- Tabuada do $numero ---\n";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado\n";
    }
    echo "\n";
}
?>