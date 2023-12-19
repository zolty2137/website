<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $conn = new mysqli('localhost', 'root', '', 'tttt');

    

     $sql = "select tytul, gatunek from filmy ";
     $result = $conn->query($sql);
     echo "<ol>";
     while($row = $result->fetch_assoc()){
         $tytul=$row['tytul'];
        
         $gatunek=$row['gatunek'];
         echo "<li> $tytul  $gatunek </li>";
     }
     echo "</ol>";
    
     $conn->close();
    ?>

    <?php
    $conn = new mysqli('localhost', 'root', '', 'tttt');


    $sql = "select tresc, recenzent from recenzje where ocena='4' ";
    $result = $conn->query($sql);
    echo "<p>";
    while($row = $result->fetch_assoc()){
        $tresc=$row['tresc'];
       
        $recenzent=$row['recenzent'];
        echo "<p> $tresc $recenzent </p>";
    }
    echo "</p>";


    $conn->close();
    ?>
</body>
</html>