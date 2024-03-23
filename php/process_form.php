<?php
include('connection.php');
session_start();

// Verifica si se ha enviado el formulario
if (isset($_POST['submit'])) {
    $email = $_POST["email"];
    $_SESSION['valid_email'] = $email;

    $code = rand(100000, 999999);
    $_SESSION['confirmation_code'] = $code;

    $subject = "Verification Code";
    $message = "Your verification code is: $code";
    $headers = "From: bryanscorro085@gmail.com";

    mail($email, $subject, $message, $headers);

    // Redirige a una página donde el usuario ingresará el código
    header("Location: ../pages/index.php?hideDiv=true");
    exit();
}

// Utiliza "if" en lugar de "(" antes de "isset"
if (isset($_POST['submit_code'])) {
    $confirmation_code = $_SESSION['confirmation_code'];
    $valid_email = $_SESSION['valid_email'];

    $inputCode = $_POST['code'];

    if ($inputCode == $confirmation_code)
    {
        $query = "INSERT INTO `users` (`email`) VALUES ('$valid_email')";
        $result = mysqli_query($connection, $query);

        header("Location: ../pages/home.php");
        exit();
    }
    else 
    {
        header("Location: ../pages/index.php?notification=Invalid verification code&showMessage=true&hideDiv=true");
        exit();
    }
}
?>
