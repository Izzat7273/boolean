<?php
$a = isset($_POST['a']) ? $_POST ['a'] : null;
if (){
    echo "true";
}else{
    echo "flase";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean20</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a" placeholder="a ni kiriting" value="<?php echo $a ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>