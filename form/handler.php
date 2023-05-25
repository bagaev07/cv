<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $offer = $_POST["subject"];
    $message = $_POST["message"];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL){
        echo "Пожалуйста, введите действительный адрес электронной почты.";
        exit;
    }

    $to = "bagaev07@list.ru";
    $subject = "Тема: $offer";
    $body = "От: $name\nEmail: $email\nСообщение:\n$message"

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: #email\r\n";

    if(mail($to, $subject, $body, $headers)){
        echo "Сообщение успешно отправлено";
    }else {
        echo "Произошла ошибка при отправке сообщения.";
    }
}
?>