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
        public $timesThrown;

        public function __construct(){
            $this->timesThrown = 0;
        }

    public function get_timesThrown(){
        return $this->timesThrown;
    }
    public function throw(){
            $caraRandom = array_rand(self::$cares, 2);
            $this->cara = self::$cares[$caraRandom[0]];
            $this->timesThrown++;
        }
    
    public function shapeName() {
        return 'Ha caigut en: ' . $this->cara . '<br>';
        }
    }


    function getTotalThrows($daus) {
        $totalThrows = 0;


        foreach ($daus as $dau) {
            $totalThrows += $dau->get_timesThrown();
        }

        return 'El nombre total de tirades és de: ' . $totalThrows . '<br>';
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

    echo '<br>' . getTotalThrows($daus);

    $dau4->throw();

    echo '<br>' . getTotalThrows($daus);


    ?>
</body>
</html>