<?php
    $file = fopen("log.csv", "r");
    if(!$file){ 
        die("Errore nell'apertura del file");
        
    }
    

    echo "<table border='1'>";

    while(!feof($file)){
        $row = fgets($file);
        $campi = explode(",", $row);
        echo "<tr>";
        for($i = 0; $i < count($campi); $i++){
            echo "<td>" . $campi[$i] . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

    fclose($file);



?>