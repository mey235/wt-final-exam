<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$myfile = fopen("newfile1.txt", "w") or die("Unable to open file!");
$txt = "Hi,I am amey nimbalkar,Roll no A037,from batch B2 & currently pursuing MCA from MPSTME";
fwrite($myfile, $txt);
$txt = "Hi,I am amey nimbalkar,Roll no A037,from batch B2 & currently pursuing MCA from MPSTME";
fclose($myfile);
?>

</body>
</html>