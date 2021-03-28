<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Formular</title>
</head>
<body>

<section>
<body>
    <?php if(array_key_exists("errors", $_SESSION)): ?>
        <div>
            <strong><?php echo implode("<br>", $_SESSION["errors"]); ?></strong>
            <br><br>
        </div>
    <?php unset($_SESSION["errors"]); endif; ?>

    <form action="thanks.php" method="post">
    <h1> Formular </h1>
       
            <label for="firstName">Name :</label>
            <input type="text" id="name" name="firstName" required>

            <label for="lastname">Last name :</label>
            <input type="text" id="firstname" name="lastName" required>

            <label for="email">e-mail :</label>
            <input type="email" id="mail" name="email" required>

            <label for="phone">Phone :</label>
            <input type="text" id="phone" name="phone" required>

            <label for="subject">subject :</label>
            <select name="subject" id="subject" required>
                <option value="">Choose your service </option>
                <option value="costumer">Costumer</option>
                <option value="support">Support</option>
                <option value="webmaster">Webmaster</option>
            </select>

            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>
        
            <button>send</button>
       
    </form>
    </section>
</body>
</html>