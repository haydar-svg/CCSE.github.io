<?php
include '../../Contact/connexion.php';
if (isset($_GET['type'])) {
    $type = $_GET['type'];
    $sql = "SELECT * FROM formations where type like '$type'";
    $stm = $con->prepare($sql);
    $stm->execute();
    $data = $stm->fetch();
    $_SESSION['type']=$type;
    $_SESSION['message_inscription']=$data[4];
};
include 'validate.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../PUBLIC/CSS/Public.css" />
    <link rel="stylesheet" href="../../../PUBLIC/FONT/Oswald/Font.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="inscriptionForm.css">
</head>
<style>
    .InscriptionTitleAndPictures {
        width: 50%;
        height: 100vh;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: linear-gradient(#00000088, #00000088), url('../../../PUBLIC/IMAGES/inscription.jpg');
        background-position: center;
        position: relative;
    }
</style>
<body>
    <div class="InscriptionContainer">
        <div class="InscriptionTitleAndPictures" id="sectionImage">
            <div class="backToHomePage">
                <a href="../index.php">
                    <img src="../../../PUBLIC/IMAGES/SERVICES/back.svg" alt="back link">
                </a>
            </div>
            <div class="InscriptionInfoText">
                <div class="InscriptionTitle">
                    INSCRIPTION
                </div>
                <div class="InscriptionDetail">
                    <?php
                   if (empty($_SESSION['message_inscription'])) {
                        header('location:../index.php');
                   }else{
                        echo $_SESSION['message_inscription'];
                   }
                    ?>
                </div>
            </div>
        </div>
        <div class="InscriptionParagraphes">
            <div class="infoAboutInscriptionTitle" id="sectionTitle">
                Inscription
            </div>
            <div class="infoAboutInscription" id="sectionPara">
                <form action="index.php" method="post">                  
                    <div class="InscriptionForm">
                        <div class="inputTitle">
                            Le nom complet :
                        </div>
                        <div class="inputInscription">
                            <div>
                                <img src="../../../PUBLIC/IMAGES/footer/persone.svg" alt="input icon">
                            </div>
                            <input type="text" id="fullNameForUser" name="full_name" value="<?php
                            if (count($_SESSION['data'])>0) {
                                echo $_SESSION['data'][0] ;
                            }
                             ?>" placeholder="Le nom complet">
                        </div>
                    </div>
                    <div class="InscriptionForm">
                        <div class="inputTitle">
                            L'adresse mail :
                        </div>
                        <div class="inputInscription">
                            <div>
                                <img src="../../../PUBLIC/IMAGES/mail.svg" alt="input icon">
                            </div>
                            <input type="text" id="fullNameForUser" name="email" value="<?php 
                                                        if (count($_SESSION['data'])>0) {
                                                            echo $_SESSION['data'][1] ;
                                                        }
                            ?>" placeholder="L'adresse mail">
                        </div>
                    </div>
                    <div class="InscriptionForm">
                        <div class="inputTitle">
                            Numéro de téléphone :
                        </div>
                        <div class="inputInscription">
                            <div>
                                <img src="../../../PUBLIC/IMAGES/footer/phone.svg" alt="input icon">
                            </div>
                            <input type="text" id="fullNameForUser" name="tel" value="<?php 
                                                        if (count($_SESSION['data'])>0) {
                                                            echo $_SESSION['data'][2] ;
                                                        }
                            ?>" placeholder="Numéro de téléphone">
                        </div>
                    </div>
                    <div class="InscriptionForm">
                        <div class="inputTitle">
                            Profession :
                        </div>
                        <div class="inputInscription select">
                            <div>
                                <img src="../../../PUBLIC/IMAGES/profession.svg" alt="input icon">
                            </div>
                            <select name="profession" id="profession" class="Select" onchange="switch_selection()">
                                <option value="">
                                    --veuillez choisir votre profession ici--
                                </option>
                                <option value="etudiant">
                                    étudiant
                                </option>
                                <option value="professeur">
                                    professeur
                                </option>
                                <option value="autre">
                                    autre
                                </option>
                            </select>
                        </div>
                    </div>
                    <button class="inscriptionButton">
                        INSCRIPTION
                    </button>
                </form>
            </div>
        </div>
    </div>   
    <script src="script.js"></script>
</body>
</html>