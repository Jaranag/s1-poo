<!-- Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

A l'arxiu main defineix dos objectes, un triangle i un rectangle i truca al mètode area de cadascun. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex02_POO</title>
</head>
<body>
    <?php

        class Shape {
            public $ample;
            public $alt;
            public function __construct($ample, $alt) {
                $this->ample = $ample;
                $this->alt = $alt;
            }

        }

        class Triangle extends Shape {

            public function area() {
                $area = ($this->alt * $this->ample) / 2;
                echo "L' àrea del triangle és: $area.<br>";
            }
        }

        class Rectangle extends Shape {

            public function area() {
                $area = ($this->alt * $this->ample);
                echo "L' àrea del rectangle és: $area.<br>";
            }

        }

        $triangle = new Triangle(25, 12);
        $rectangle = new Rectangle(16,45);

        echo $triangle->area();
        echo $rectangle->area();

    ?>
</body>
</html>