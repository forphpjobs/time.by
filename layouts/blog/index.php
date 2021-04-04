<?php include_once "layouts/layout/header.php" ?>

    <?php foreach ($content as $item):?>

            <?php
                $d=new DateTime($item['date']);
                $date=$d->format('d-M-Y');
                echo "<p>".$date."</p>";
?>
            <?php echo $item['content'];?>

    <?php endforeach?>

<?php include_once "layouts/layout/footer.php" ?>



