<html>
<body>
<h3>Matrix multiplication</h3>

<form method="POST">
Matrix A <br>
<input type="text" name="a1"><br>
<input type="text" name="a2"><br><br>

Matrix B <br>
<input type="text" name="b1"><br>
<input type="text" name="b2"><br><br>

<input type="submit" value="add">
</form>

<?php
if (isset($_POST['a1'])) {

    $a[0] = explode(" ", $_POST['a1']);
    $a[1] = explode(" ", $_POST['a2']);

    $b[0] = explode(" ", $_POST['b1']);
    $b[1] = explode(" ", $_POST['b2']);

    echo "Result matrix<br>";

    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
            echo ($a[$i][$j] + $b[$i][$j]) . " ";
        }
        echo "<br>";
    }
}
?>

</body>
</html>
