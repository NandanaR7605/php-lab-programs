<html>
<head>
    <title>Large and Small</title>
</head>
<body>

<h1>Largest and Smallest</h1>

<form method="POST">
    <input type="text" name="n" >
    <input type="submit" value="Check">
</form>

<?php
if (isset($_POST['n'])) {
    $a = explode(" ", $_POST['n']);   // split numbers by space
    echo "Smallest: " . min($a) . "<br>";
    echo "Largest: " . max($a);
}
?>

</body>
</html>
