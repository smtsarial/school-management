<?php
if ($_GET['button1']) {
    fun1();
}
if ($_GET['button2']) {
    fun2();
}

function fun1()
{
    //This function will update some column in database to 1
}
function fun2()
{
    //This function will update some column in database to 2
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <button id="button1" name="button1" onClick='location.href="?button1=1"'>Update to 1</button>
    <button id="button2" name="button2" onClick='location.href="?button2=1"'>Update to 2</button>
</body>

</html>