<?php
// use classes\Calce;

require 'calc.php';
$calce = new Calce();

// echo $calce->getPi();
// echo $calce->addation();
// echo Calce::PI;

if(isset($_POST['submit']) && !empty($_POST['num1']) && !empty($_POST['num2']) && !empty($_POST['operator'])){
    $calce->setNum1($_POST['num1']);
    $calce->setNum2($_POST['num2']);
    $calce->setOperator($_POST['operator']);
    $calce->calculate();
}
else{
    echo "Please fill all the fields";
}
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculation</title>
</head>
<body>
    <?php Calce::showForm() ?>
</body>
</html>