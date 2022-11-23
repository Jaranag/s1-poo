<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N2-Ex01</title>
</head>
<body>
    <?php

    class PokerDice {
        public static $cares = array('As', 'K', 'Q', 'J', '7', '8');
        public $cara;
        public static $timesThrown = 0;

    public function throw(){
            $caraRandom = array_rand(self::$cares, 2);
            $this->cara = self::$cares[$caraRandom[0]];
            self::$timesThrown++;
        }
    
    public function shapeName() {
        return 'Ha caigut en: ' . $this->cara . '<br>';
        }
    
    public static function getTotalThrows() {
        return 'El nombre total de tirades entre tots els daus ha sigut de: ' . self::$timesThrown . '<br>';
    }

    }

    $daus = array();
    $dau1 = new PokerDice();
    $dau2 = new PokerDice();
    $dau3 = new PokerDice();
    $dau4 = new PokerDice();
    $dau5 = new PokerDice();
    array_push($daus, $dau1, $dau2, $dau3, $dau4 , $dau5);


    $dau1->throw();
    echo $dau1->shapeName();
    $dau2->throw();
    echo $dau2->shapeName();
    $dau3->throw();
    echo $dau3->shapeName();
    $dau4->throw();
    echo $dau4->shapeName();
    $dau5->throw();
    echo $dau5->shapeName();

    echo PokerDice::getTotalThrows();

    $dau4->throw();

    echo PokerDice::getTotalThrows();


    ?>
</body>
</html>