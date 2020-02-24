<?PHP

$totaal = round( (float)$argv[1] / 0.05) * 0.05;

if ($totaal != 0) {

    $wisselgeld = floor($totaal/50);
    if ($wisselgeld != 0) {
    echo $wisselgeld. " x €50 billetten".PHP_EOL;
    $totaal -= $wisselgeld * 50;
    }

    $wisselgeld = floor($totaal/20);
    if ($wisselgeld != 0) {
    echo $wisselgeld. " x €20 billetten".PHP_EOL;
    $totaal -= $wisselgeld * 20;
    }

    $wisselgeld = floor($totaal/10);
    if ($wisselgeld != 0) {
    echo $wisselgeld. " x €10 billetten".PHP_EOL;
    $totaal -= $wisselgeld * 10;
    }

    $wisselgeld = floor($totaal/5);
    if ($wisselgeld != 0) {
    echo $wisselgeld. " x €5 billetten".PHP_EOL;
    $totaal -= $wisselgeld * 5;
    }

    $wisselgeld = floor($totaal/2);
    if ($wisselgeld != 0) {
    echo $wisselgeld. " x €2 munten".PHP_EOL;
    $totaal -= $wisselgeld * 2;
    }
    
    $wisselgeld = floor($totaal/1);
    if ($wisselgeld != 0) {
    echo $wisselgeld. " x €1 munten".PHP_EOL;
    $totaal -= $wisselgeld * 1;        
    }

    $wisselgeld = floor($totaal/0.5);
    if ($wisselgeld != 0) {
    echo $wisselgeld. " x 50c munten".PHP_EOL;
    $totaal -= $wisselgeld * 0.5;        
    }

    $wisselgeld = floor($totaal/0.2);
    if ($wisselgeld != 0) {
    echo $wisselgeld. " x 20c munten".PHP_EOL;
    $totaal -= $wisselgeld * 0.2;        
    }

    $wisselgeld = floor($totaal/0.1);
    if ($wisselgeld != 0) {
    echo $wisselgeld. " x 10c munten".PHP_EOL;
    $totaal -= $wisselgeld * 0.1;        
    }

    $wisselgeld = floor(round($totaal * 100 / 5));
    if ($wisselgeld != 0) {
    echo $wisselgeld. " x 5c munten".PHP_EOL;
    $totaal -= $wisselgeld * 0.05;        
    }
}

else {
    echo"er is geen wisselgeld";
}

?>