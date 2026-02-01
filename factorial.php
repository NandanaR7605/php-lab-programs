<html>
<head>
    <title>Factorial</title>
</head>
<body>

<h1>Factorial</h1>

<form action="" method="POST">
    <input type="number" name="n">
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
function fac($n)
{
    $fact = 1;

    for ($i = 1; $i <= $n; $i++)
    {
        $fact = $fact * $i;
    }

    return $fact;
}

if (isset($_POST['n']))
{
    $n = $_POST['n'];
    echo "Factorial = " . fac($n);
}
?>

</body>
</html>
