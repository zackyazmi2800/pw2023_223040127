<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2c</title>
	<style>
		*{
			margin: 0;
            padding: 0;
            line-height:0;
		}

		.kotak{
			width: 50px;
			height: 50px; 
			background-color: red;
			text-align: center;
			line-height: 50px;
			display: inline-block;
            margin-right: -5px;
            border: 1px solid black;
		}
	</style>
</head>
<body>
    <?php for ($i=10; $i >= 1; $i--) : ?>
        <?php for ($l=1; $l <= $i; $l++) : ?>
        <div class="kotak"><?= $l; ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor;?>
</body>
</html>