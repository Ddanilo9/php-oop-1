<?php   

include __DIR__. '/app/Movie.php';

$Uncharted = new Movie('Uncharted', 'United States', 'English', 120, 116);

$SonicTheHedgeHog2 = new Movie('Sonic the Hedgehog 2', 'United States', 'English', 90 , 122);

$MoonFall = new Movie('Moonfall', 'Germany', 'English', 140, 130);



var_dump($Uncharted, $SonicTheHedgeHog2, $MoonFall);

?>

<ul>
    <?php foreach($Uncharted as $key=>$value){ ?>
    <li>
        <?php echo "$key : $value\n"; ?>
    </li>
    <?php } ?>
</ul>