<?php
include "connexion.php";
session_start();
$_SESSION['data']=[];
if (isset($_POST['First-name'])) {
    $first_name=$_POST['First-name'];
    $last_name=$_POST['Last-name'];
    $email=$_POST['Email'];
    $mobile=$_POST['Mobile'];
    $Message=$_POST['Message'];
    $_SESSION['data']=[$first_name,$last_name,$email,$mobile,$Message];
    $email_pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $tel_pattern="/^(?:(?:\+|00)212[\s]?(?:[\-\s]?\d[\-\s]?){9}|0[\s]?(?:[\-\s]?\d[\-\s]?){9})$/";
    $name_pattern="/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/";
    $message_pattern="/^(?=\s*\S)[\s\S]*$/";
    try {
        if (empty($first_name)||empty($last_name)||empty($email)||empty($mobile)||empty($Message)) {
            throw new Exception(
                '
        <div class="toast error" onclick="document.querySelector(\'.toast\').classList.add(\'hide\')">
            <img src="../../PUBLIC/IMAGES/Error.svg" alt="">Veuillez remplir les champs
            </div>
            <script>
            setTimeout(()=>{
                document.querySelector(".toast").classList.add(\'hide\')
            },5000)
            </script>
'
            );
            header("location:index.php");
            exit();
        }
            elseif (!preg_match($name_pattern, $first_name)||!preg_match($name_pattern, $last_name)||!preg_match($tel_pattern, $mobile)||(!preg_match($email_pattern, $email))||(!preg_match($message_pattern, $Message))) {              
                throw new Exception(        
                '
                <div class="toast error" onclick="document.querySelector(\'.toast\').classList.add(\'hide\')">
                    <img src="../../PUBLIC/IMAGES/Error.svg" alt="">Veuillez vérifier les informations
                    </div>
                    <script>
                    setTimeout(()=>{
                        document.querySelector(".toast").classList.add(\'hide\')
                    },5000)
                    </script>
        '
                );
                header("location:index.php");
                exit();
            }
        else {
            $_SESSION['data']=[];
            $req="INSERT INTO `messages` VALUES (NULL, :first_name, :last_name, :email, :mobile, :message)";
            $stm=$con->prepare($req);
            $stm->bindParam(':first_name',$first_name);
            $stm->bindParam(":last_name",$last_name);
            $stm->bindParam(":email",$email);
            $stm->bindParam(":mobile",$mobile);
            $stm->bindParam(":message",$Message);
            if( $stm->execute()){
                      throw new Exception(
                '
                <div class="toast success" onclick="document.querySelector(\'.toast\').classList.add(\'hide\')">
                    <img src="../../PUBLIC/IMAGES/Success.svg" alt="">Merci pour votre feedback
                    </div>
                    <script>
                    setTimeout(()=>{
                        document.querySelector(".toast").classList.add(\'hide\')
                    },5000)
                    </script>
        '
            );
                header("location:index.php");
                exit();
            }
        };
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
?>