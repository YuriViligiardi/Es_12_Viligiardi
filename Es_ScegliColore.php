<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzione Scegli Colore</title>
</head>
<body>
    <?php
        setColor();

        function chooseColor($c){
            switch ($c) {
                case 'r':
                    echo "<p style='color: red;'>Questo paragrafo ha la proprietà color con valore red</p>";
                    break;
                case 'g':
                    echo "<p style='color: green;'>Questo paragrafo ha la proprietà color con valore green</p>";
                    break;
                case 'b':
                    echo "<p style='color: blue;'>Questo paragrafo ha la proprietà color con valore blue</p>";
                    break;
                
                default:
                    echo "<p style='color: black;'>Questo paragrafo ha la proprietà color con valore black</p>";
                    break;
            }
        }

        function setColor(){
            $color;
            $num = rand(1,5);
            if ($num == 1) {
                $color = "r";
            } elseif ($num == 2) {
                $color = "g";
            } elseif ($num == 3) {
                $color = "b";
            } else {
                $color = "p";
            }
            chooseColor($color);
        }
    ?>
</body>
</html>