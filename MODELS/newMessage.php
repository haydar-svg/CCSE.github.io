<?php
session_start();
require_once('./dbConnect.php');
try {
    $userFullName = htmlentities($_POST['userFullName']);
    $userPhoneNumber = htmlentities($_POST['userPhoneNumber']);
    $userMessage = htmlentities($_POST['userMessage']);
    if (
        !preg_match("/(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})$/i", $userFullName)  ||
        !preg_match("/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/i", $userPhoneNumber)  ||
        !preg_match("/^[a-zA-Z ]*$/i", $userMessage) 
    ) {
        $_SESSION['errorMsg'] = "Le message n'a pas été reçu, veuillez le renvoyer";
        header('location:../index.php/CCSE#footer');
        exit();
    }
    $request = dbConnect()->prepare("INSERT INTO `MESSAGES`(`userFullName`, `userPhoneNumber`, `userMessage`) VALUES (:userFullNameBP,:userPhoneNumberBP,:userMessageBP)");
    $request->bindParam(':userFullNameBP', $userFullName);
    $request->bindParam(':userPhoneNumberBP', $userPhoneNumber);
    $request->bindParam(':userMessageBP', $userMessage);
    if ($request->execute()) {
            $_SESSION['successMsg'] = "Message reçu avec succès";
            header('location:../index.php/CCSE#footer');
            exit();
    } else {
        $_SESSION['errorMsg'] = "Le message n'a pas été reçu, veuillez le renvoyer";
        header('location:../index.php/CCSE#footer');
        exit();
    }
} catch (\Throwable $th) {
    $_SESSION['errorMsg'] = "Le message n'a pas été reçu, veuillez le renvoyer";
    header('location:../index.php/CCSE#footer');
    exit();
}
