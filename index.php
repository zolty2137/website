<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


    $conn = new mysqli('localhost', 'root', '', 'sklep_ii');

    $sql = "select nazwa, cena, opis from podzespoly where typy_id='1'";
        $result = $conn->query($sql);
        echo "<ul>";
        while($row = $result->fetch_assoc()){
            $nazwa=$row['nazwa'];
            $opis=$row['opis'];
            $cena=$row['cena'];
            echo "<li> $nazwa $opis $cena </li>";
        }
        echo "</ul>";


        

      $conn->close();
?>

<?php
    $conn = new mysqli('localhost', 'root', '', 'sklep_ii');

    $sql = "select nazwa, cena from podzespoly ";
    $result = $conn->query($sql);
    echo "<p>";
    while($row = $result->fetch_assoc()){
        $nazwa=$row['nazwa'];
       
        $cena=$row['cena'];
        echo "<p> $nazwa  $cena </p>";
    }
    echo "</p>";
    $conn->close();
?>
</body>
</html>

