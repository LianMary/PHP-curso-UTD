<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="string"><br>
        <input type="submit">
    </form>    
<?php
    if(isset($_POST['string'])){
        $string = $_POST['string'];
        echo "String é: ".$string;
    }
?>

</body>
</html>