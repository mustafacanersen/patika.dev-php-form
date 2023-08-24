<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>sayı giriniz:</label>
        <input type="text" name="number" id="number">
        <button type="submit">Gönder</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["number"];
    if (isset($num) && $num != null) {
        $remainder = $num % 3;
        if ($remainder == 0) {
            echo "<font color = FF0000>$num</font> 3'e bölünebilen bir sayıdır";
        } else {
            echo "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı " . ($num + $remainder) . "'dır";
        }
    } else {
        echo "Boş değer girilemez";
    }
}
?>
