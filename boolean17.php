<?php
$a = isset($_POST['a']) ? $_POST ['a'] : null;

if ($a%2==1 && $a>=100 && $a<1000){
    echo "true";
}else{
    echo "false";
}
echo "3 xonali toq son";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Boolean17</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a" placeholder="a ni kiriting" value="<?php echo $a ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>