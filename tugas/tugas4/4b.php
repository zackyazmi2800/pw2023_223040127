<?php 
$hardWare = ['Motherboard', 'Processor', 'Hard Disk', 'PC Collor', 'VGA Card', 'SSD'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>
<body>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php foreach ($hardWare as $h) {?>
            <li><?= $h; ?></li>
            <?php } ?>
        </ol>
        
        <br><br>
        
        
    <h2>Macam-macam perangkat keras komputer baru</h2>
    <?php 
    array_push($hardWare, 'Card Reader', 'Modem');
    asort($hardWare);
    ?>
    <ol>
        <?php foreach ($hardWare as $h) {?>
        <li><?= $h; ?></li>
        <?php } ?>
    </ol>
</body>
</html>