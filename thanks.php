<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>thank you</title>
    </head>
    <body>
    
    <section>
    
<?php
    session_start();
    $errors = [];
    $_SESSION['errors'] = $errors;
   
    $thanksMessage = "thank you " . $_POST['firstName'] . " " . $_POST['lastName'] . " for contacting our service :    " . $_POST['subject'] . ".<br>We will contact you on your email : " . $_POST['email'] . " or your phone : " . $_POST['phone'] . "as soon as possible about your message :<br> " . $_POST['message'];

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (empty($_POST["email"])) {
        $_SESSION["errors"]["emailErr"] = "Email is required";
        header("Location: index.php");
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["errors"]["emailErr"] = "Invalid email format";
            header("Location: index.php");
        } else {
            echo $thanksMessage;
        };
    };
?>
        </section>
    </body>
</html>