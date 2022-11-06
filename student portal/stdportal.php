<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>std portal</title>
</head>
<body>
    



<?php 
if (isset($file_uploaded)) {
    echo '<h3>Uploaded File</h3>';
    echo '<img src="' . $upload_to . $file_name . '" style="height:200px">';
}

?>









</body>
</html>