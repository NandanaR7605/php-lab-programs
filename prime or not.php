<html>
<head>
    <title>Prime or not</title>
</head>
<body>

<h1>Prime or not</h1>

<form action="" method="POST">
    <input type="number" name="n">
    <br><br>
    <input type="submit" value="check">
</form>

<?php
if (isset($_POST['n'])) 
{
    $n = $_POST['n'];
    $f = true;

    if ($n == 0 || $n == 1)
    {
        $f = false;
    }
    else
    {
        for ($i = 2; $i < $n; $i++)
        {
            if ($n % $i == 0)
            {
                $f = false;
                break;
            }
        }
    }

    if ($f == false)
    {
        echo "not prime";
    }
    else
    {
        echo "prime";
    }
}
?>

</body>
</html>
