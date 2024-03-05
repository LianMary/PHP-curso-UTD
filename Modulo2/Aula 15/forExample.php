<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Exemplo</title>
</head>
<body>
    <select>
        <?php for ($day=1; $day < 32; $day++): ?>
            <option> <?=$day;?> </option>
        <?php endfor; ?>    
    </select>
    
    <select>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
    </select>

    <select>
        <?php for ($year=2024; $year > 1904; $year--): ?>
            <option> <?=$year;?> </option>
        <?php endfor;?>
    </select>

 <!-- Consegui resolver caraio. -->



</body>
</html>
