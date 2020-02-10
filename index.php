<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
   
    <title>Table de multuiplication</title>
</head>
<body>
    <?php
        $number = 2;

        for($i = 1; $i < 11; $i++){
            echo
                "<p>", $number,
                " &times; ", $i,
                " = ", $number*$i,
                "</p>";
        }
    ?>
</body>
</html>