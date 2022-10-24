<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCLUDING</title>
</head>
<body>
<h1> included parts </h1>
    <?php
    include "heading.php";
    

    for ($z =0; $z <= 20; $z+=1){
        echo "<p>.<p/>";
    }
    echo "The time is " .date("h:i:sa");
    
    ?>
    <hr style ="font-size:70px;">

</body>
</html>