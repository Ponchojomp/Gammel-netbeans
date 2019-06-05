<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<br> Oppgave 1 <br>";
        $test = range(1, 9);
        echo $test[3];
        echo $test[6];
        
        echo "<br> Oppgave 2 <br>";
        $test[] = 10;
        $test[] = 11;
        
        
        for ($i = 0; $i < count($test); $i += 1) {
            echo $test[$i];
            echo "<br>";
        }
        
        echo "<br> Oppgave 3 <br>";
        $sum = 0;
        for ($i = 0; $i < count($test); $i += 1) {
            $sum += $test[$i];
        }
        echo $sum;
        echo 'Gjennomsnitt: '.$sum/ count($test);
        
        echo "<br> Oppgave 4 <br>";
        $navnArray = ["per", 23, "line", 21, "ola", 34];
        for ($i = 0; $i < count($navnArray); $i += 2) {
            echo $navnArray[$i]." har alder ".$navnArray[$i+1];
        }
        
        echo "<br> Oppgave 5 <br>";
        $tallArray = [45,34,5,8,10,2,13,25];
        for ($i = count($tallArray)-1; $i >= 0; $i -= 1) {
            echo $tallArray[$i]." ";
        }
        echo "<br> Oppgave 6 <br>";
        $tekst = "Det var en gang en mann som av en eller annen grunn ikke kunne si hei";
        function echoArray($tabell) {
            foreach ($tabell as $teller => $ord) {
                echo "$ord ";
            }
            echo "<br>";
        }
        $liste = explode(" ", $tekst);
        echoArray($liste);
        shuffle($liste);
        echoArray($liste);
        ?>
    </body>
</html>
