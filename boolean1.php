<?php
$a = isset($_POST['a']) ? $_POST ['a'] : null;
if ($a>0){
    echo "a soni musbat";

}elseif($a<0){
    echo "a soni musbat emas";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Boolean1</title>
</head>
<body>
<form action="" method="POST">
        <input type="text" name="a" placeholder="a ni kiriting" value="<?php echo $a ?>">
    <button type="SUBMIT">OK</button>
</form>
</body>
</html>