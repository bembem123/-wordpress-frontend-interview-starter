<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <div class="newsletter-modal">
        <div class="newsletter-modal-content">
            <h3>PRUNDERGROUND NEWSLETTER</h3>
            <form action="<?php echo plugin_dir_url(__DIR__).'submit_request.php' ?>" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <button type="submit">SIGNUP</button>
            </form>
        </div>
    </div>
</body>
</html>