<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- local css -->
    <link rel="stylesheet" href="./css/check.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
        <main class="text-center my-3 text-white">
            <h1>Sign In</h1>
            <form method="post" action="verify.php">
                <label for="email">Enter Your Registered Email ID</label><br>
                <input class="my-3 text-center" type="email" name="email" placeholder="abc@gmail.com" required><br>
                <Button id="submit" type="submit" class="btn btnth" name="submit">Sign In</Button>
            <form>
        </main>
        </div>
    </div>
</body>
</html>