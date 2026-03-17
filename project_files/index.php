<?php
    require_once "process.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Upload Picture</title>
</head>

<body>


    <h1 class="title">Welcome, Upload Picture Now</h1>

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">

            <input type="file" name="picture">
            

            <br>
            <br>

            <button type="submit">Upload Picture</button>

        </form>
    </div>


</body>

</html>