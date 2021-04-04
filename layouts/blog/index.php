<?php include_once "layouts/layout/header.php" ?>
<?php

//$q=new DateTime($content[0]['date']);
//$q1=$q->format('d-M-Y');
//echo $q1.'<br>';
//$q->modify('-4 Day');
//$q1=$q->format('d-M-Y');
//echo $q1.'<br>';
//$q->add(new DateInterval('P1Y3M3D'));
//$q1=$q->format('d-M-Y');
//echo $q1;


?>
    <?php foreach ($content as $item):?>

            <?php
                $d=new DateTime($item['date']);
                $date=$d->format('d-M-Y');
                echo "<p>".$date."</p>";
?>
            <?php echo $item['content'];?>

    <?php endforeach?>

<?php include_once "layouts/layout/footer.php" ?>



