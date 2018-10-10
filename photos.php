<!DOCTYPE html>
<html>
<body>

<h1> My photo album </h1>

<ul>
<?php
$photos = glob("photo/*.JPG");

foreach ($photos as $photo) {
        echo "<li><a href='". $photo . "'>" . basename($photo).PHP_EOL . "</a>" . "(" . round(filesize($photo)/1024) . "KB" . ")" . "</li>". "\n";
 }
?>

</ul>
</body>
</html>
