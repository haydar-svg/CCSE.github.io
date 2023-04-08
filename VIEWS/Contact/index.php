<?php

include 'Validate.php';


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../PUBLIC/CSS/Public.css">
    <link rel="stylesheet" href="../../PUBLIC/FONT/Oswald/Font.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<section>
    <div class="form">
        <p class="form-title">Send your feedback</p>
            <form action="index.php" method="POST">
                <div class="section1">
                    <label>First-name</label>
                    <input type="text" placeholder="First-name" name="First-name" value="<?php if (count($_SESSION['data'])>0) {
                        echo $_SESSION['data'][0];
                    } ?>">
                    <label>Last-name</label>
                    <input type="text" placeholder="Last-name" name="Last-name" value="<?php if (count($_SESSION['data'])>0) {
                        echo $_SESSION['data'][1];
                    }?>">
                </div>
                <div class="section2">
                    <label>Email</label>
                    <input type="text" placeholder="Email" name="Email" value="<?php if (count($_SESSION['data'])>0) {
                        echo $_SESSION['data'][2];
                    } ?>">
                    <label>Mobile</label>
                    <input type="text" placeholder="Mobile" name="Mobile" value="<?php if (count($_SESSION['data'])>0) {
                        echo $_SESSION['data'][3];
                    } ?>">
                </div>
                <div class="section3">
                    <label>Message</label>
                    <textarea  id="" cols="20" rows="8" name="Message" id="message">
                    <?php if (count($_SESSION['data'])>0) {
                        echo $_SESSION['data'][4];
                    } ?>
                    </textarea>
                </div>
                <div class="section4">
                    <button id="btn">
                        Send
                    </button>
                </div>
            </form>
    </div>
    <div class="contact-map">
        <div class="contact">
               <div class="contact-title">
                    Contacter-nous
               </div>
                    <ul class="contacts">
                        <li>
                            <img src="../../PUBLIC/IMAGES/Contacts/location.svg" alt="location">
                            <a href="">BOULEVARD MOHAMMED DERFOUFI, IMMEUBLE HIMRI,3ÈME ÉTAGE N°5, 60000 OUJDA-MAROC</a>
                        </li>
                        <li>
                            <img src="../../PUBLIC/IMAGES/Contacts//phone.svg" alt="location">
                           <a href="tel:+212536681122">0536681122</a>  <a>/</a>  <a href="tel:+212661396051"> 
                            0661396051
                        </a>
                        </li>
                        <li>
                            <img src="../../PUBLIC/IMAGES/Contacts/mail.svg" alt="location">
                            <a href="mailto:CABINETCCSE@GMAIL.COM">
                                CABINETCCSE@GMAIL.COM
                            </a>
                        </li>
                    </ul>
                    <ul class="contacts-second">
                        <li>
                            <img src="../../PUBLIC/IMAGES/Contacts/insta.svg" alt="location">
                            <a href="https://www.instagram.com/ccse.consulting/">
                                CCSE.CONSULTING
                            </a>
                        </li>
                        <li>
                            <img src="../../PUBLIC/IMAGES/Contacts//fb.svg" alt="location">
                            <a href="https://web.facebook.com/ccse.consulting">
                                CCSE CONSULTING
                            </a>
                        </li>
                    </ul>
        </div>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.9650045992066!2d-1.9177607147171258!3d34.68083269179071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7865bba6c03af9%3A0x55e3a56a49a1ba7!2sCabinet%20de%20consulting%20et%20services%20aux%20Entreprises%20CCSE!5e0!3m2!1sar!2sma!4v1678674742747!5m2!1sar!2sma" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
    </div>
</section>

</html>