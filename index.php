<?php
    date_default_timezone_set('Europe/Amsterdam');
    $d = date("H:i");

    if($d < "06:00"){
        $greeting = "Goedenacht! ";
        $file = "night";
    } elseif ($d < "12:00" ){
        $greeting = "Goedemorgen! ";
        $file = "morning";        
    } elseif ($d < "18:00" ){
        $greeting = "Goedemiddag! ";
        $file = "afternoon ";        
    } elseif ($d < "24:00"){
        $greeting = "Goedenavond! ";
        $file = "evening";        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht</title>

    <link rel="stylesheet" href="assets/style.css">
</head>
<body style="background: url(backgrounds/<?php echo $file; ?>.png); background-size: 86%">
<div>
    <p><?php echo $greeting; ?><br>
        Het is nu <?php echo $d; ?></p>
</div>

</body>
</html>