<!-- Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou.
 Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Ex01_POO</title>
</head>
<body>
    <?php

    class Employee {
        public $nom;
        public $sou;

        function initialize ($nom, $sou) {
            $this->nom = $nom;
            $this->sou = $sou;
        }

        function print () {
            echo "$this->nom. <br>";

            if ($this->sou > 6000) {
                echo "Haurà de pagar imopstos. <br>";
            } else {
                echo "No haurà de pagar impostos. <br>";
            }
        }
    }

    ?>
</body>
</html>