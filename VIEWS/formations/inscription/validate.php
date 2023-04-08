<?php
include "../../Contact/connexion.php";
session_start();
$_SESSION['data']=[];
if (isset($_POST['full_name'])) {
    $fullname=$_POST['full_name'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $profession=$_POST['profession'];
    $_SESSION['data']=[$fullname,$email,$tel,$profession];
    $email_pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $tel_pattern="/^(?:(?:\+|00)212[\s]?(?:[\-\s]?\d[\-\s]?){9}|0[\s]?(?:[\-\s]?\d[\-\s]?){9})$/";
    $name_pattern="/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/";
    try {
        if (empty($fullname)||empty($email)||empty($tel)||empty($profession)) {
            throw new Exception(
                '
        <div class="toast error" onclick="document.querySelector(\'.toast\').classList.add(\'hide\')">
            <img src="../../../PUBLIC/IMAGES/Error.svg" alt="">Veuillez remplir tous les champs
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
            elseif (!preg_match($name_pattern, $fullname)||!preg_match($name_pattern, $profession)||!preg_match($tel_pattern, $tel)||(!preg_match($email_pattern, $email))) {              
                throw new Exception(        
                '
                <div class="toast error" onclick="document.querySelector(\'.toast\').classList.add(\'hide\')">
                    <img src="../../../PUBLIC/IMAGES/Error.svg" alt="">Veuillez vérifier les informations
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
            $reqq = "INSERT INTO `inscriptions` VALUES (NULL ,:fullname, :email, :tel, :profession, :typeFormation)";
        $stmm = $con->prepare($reqq);
        $stmm->bindParam(':fullname', $fullname);
        $stmm->bindParam(":profession", $profession);
        $stmm->bindParam(":email", $email);
        $stmm->bindParam(":tel", $tel);
        $stmm->bindParam(":typeFormation", $_SESSION['type']);
    if ($stmm->execute()) {
        throw new Exception(
        '
        <div class="toast success" onclick="document.querySelector(\'.toast\').classList.add(\'hide\')">
            <img src="../../../PUBLIC/IMAGES/Success.svg" alt="">Merci pour votre inscription
        </div>
        <script>
        setTimeout(()=>{
            document.querySelector(".toast").classList.add(\'hide\')
        },5000)
        </script>
        '
         );
   }else{
               echo "error";
            }
        };
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
?>