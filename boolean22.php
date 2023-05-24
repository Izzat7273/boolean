<?php
$num = isset($_POST['num']) ? $_POST ['num'] : null;

$a = floor($num/100);
$b = floor($num/10)%10;
$c = $num%10;
if ($a<$b && $b<$c){
    echo "Ushbu sonning raqamlari ketama- ket osuvchi bolib joylashgan";
}
elseif ($a>$b && $b>$c){
    echo "Ushbu sonning raqamlari ketama- ket kamayuvchi bolib joylashgan";
}
else{
    echo "false";}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean22</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="num" placeholder="num ni kiriting" value="<?php echo $num ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>