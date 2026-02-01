<html>
<head>
    <title>Fibonacci series</title>
</head>
<body>

<h1>Fibonacci Series</h1>

<form action="" method="POST">
    <input type="number" name="n">
    <br><br>
    <input type="submit" value="Print">
</form>

<?php
if (isset($_POST['n']))
{
    $n = $_POST['n'];
    $a = 0;
    $b = 1;

    while ($a < $n)
    {
        echo $a . " ";
        $s = $a + $b;
        $a = $b;
        $b = $s;
    }
}
?>

</body>
</html>
