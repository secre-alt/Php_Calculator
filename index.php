<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="calculator">
        <div class="display">
            <?php
             include 'display.php';
              ?>
        </div>
        <form action="calculate.php" method="post">
            <div class="buttons">
                <input type="submit" name="num" value="7">
                <input type="submit" name="num" value="8">
                <input type="submit" name="num" value="9">
                <input type="submit" name="operation" value="/" class="operation">

                <input type="submit" name="num" value="4">
                <input type="submit" name="num" value="5">
                <input type="submit" name="num" value="6">
                <input type="submit" name="operation" value="*" class="operation">

                <input type="submit" name="num" value="1">
                <input type="submit" name="num" value="2">
                <input type="submit" name="num" value="3">
                <input type="submit" name="operation" value="-" class="operation">
                 
                <input type="submit" name="clear" value="C" class="clear-button">
                <input type="submit" name="num" value="0">
                <input type="submit" name="num" value=".">
                <input type="submit" name="operation" value="+" class="operation">
            </div>
            <button type="submit" name="submit" value="calculate">=</button>
        </form>
    </div>
</body>
</html>