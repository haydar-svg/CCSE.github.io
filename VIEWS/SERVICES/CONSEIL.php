<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="ccse">
    <meta name="description" content=" LE CABINET CCSE EST UN CABINET INDÉPENDANT SPÉCIALISÉ DANS LE CONSULTING, LA FORMATION, L’ACCOMPAGNEMENT, L’ASSISTANCE, L’ORIENTATION ET LE DÉVELOPPEMENT DU CAPITAL HUMAIN, DEPUIS 2011.">
    <link rel="icon" href="../PUBLIC/IMAGES/icon.png">
    <link rel="stylesheet" href="../PUBLIC/CSS/Public.css">
    <link rel="stylesheet" href="../PUBLIC/FONT/Oswald/Font.css">
    <link rel="stylesheet" href="../VIEWS/SERVICES/serviceDescription.css">
    <script src="../PUBLIC/JS/global.js"></script>
    <title>
        CONSEIL
    </title>
</head>

<body>
    <style>
        .descriptionTitleAndPictures {
            background-image: linear-gradient(#00000088, #00000088), url(../PUBLIC/IMAGES/services/CONSEIL.jpeg);
        }
    </style>
    <div class="descriptionContainer">
        <div class="descriptionTitleAndPictures">
            <div class="backToServicePage">
                <a href="./CCSE#services">
                    <img src="../PUBLIC/IMAGES/services/back.svg" alt="back link">
                </a>
            </div>
            <div class="serviceInfoText">
                <div class="serviceTitle">
                    CONSEIL
                </div>
                <div class="serviceDetail">
                    Profitez d'un accompagnement opérationnel et stratégique personnalisé au quotidien, avec des conseils d'experts pointus pour vous aider à mener à bien vos projets clés.</div>
            </div>
        </div>
        <div class="descriptionParagraphes">
            <img src="" class="designIcon" id="sectionBackgroundDesign" alt="design">
            <div class="switchInfo">
                <div class="circel circel1" onclick="vision(this)" id="vision">
                    <img src="../PUBLIC/IMAGES/services/telescope-observation-svgrepo-com.svg" alt="telescope">
                </div>
                <div class="circel circel2" onclick="mission(this)" id="mission">
                    <img src="../PUBLIC/IMAGES/services/assignment_turned_in_FILL0_wght400_GRAD0_opsz48.svg" alt="assignment">
                </div>
                <div class="circel circel3" onclick="objectif(this)" id="objectif">
                    <img src="../PUBLIC/IMAGES/services/flag_FILL0_wght400_GRAD0_opsz48.svg" alt="flag">
                </div>
            </div>
            <div class="infoAboutServiceTitle" id="sectionTitle">
            </div>
            <div class="infoAboutService" id="sectionPara">
            </div>
        </div>
    </div>
    <script>
        function vision(element) {
            element.style.opacity = '1';
            element.style.width = '80px';
            element.style.height = '80px';
            $('sectionTitle').innerHTML = 'vision'
            $('sectionPara').innerHTML = `  Notre service de conseil est conçu pour aider les entreprises à atteindre leur plein
potentiel en leur fournissant des conseils stratégiques et opérationnels personnalisés.</br>
Nous comprenons que chaque entreprise est unique, c'est pourquoi nous offrons des
conseils adaptés à vos besoins spécifiques.
            `;
            $('sectionBackgroundDesign').setAttribute('src', '../PUBLIC/IMAGES/services/telescopeDesign.svg');
            $('mission').style.opacity = '0.6';
            $('mission').style.width = '60px';
            $('mission').style.height = '60px';
            $('objectif').style.opacity = '0.6';
            $('objectif').style.width = '60px';
            $('objectif').style.height = '60px';
        }
        vision($('vision'))

        function mission(element) {
            element.style.opacity = '1';
            element.style.width = '80px';
            element.style.height = '80px';
            $('sectionTitle').innerHTML = 'Mission'
            $('sectionPara').innerHTML = ` Nos consultants sont des experts dans leur domaine, avec une vaste expérience et une
connaissance approfondie des dernières tendances et des meilleures pratiques de
l'industrie.</br>
Ils travaillent en étroite collaboration avec les clients pour comprendre leurs défis et
leurs opportunités, et proposent des solutions innovantes et pratiques pour les aider à
atteindre leurs objectifs.
            `;
            $('sectionBackgroundDesign').setAttribute('src', '../PUBLIC/IMAGES/services/assignmentDesign.svg');
            $('vision').style.opacity = '0.6';
            $('vision').style.width = '60px';
            $('vision').style.height = '60px';
            $('objectif').style.opacity = '0.6';
            $('objectif').style.width = '60px';
            $('objectif').style.height = '60px';
        }

        function objectif(element) {
            element.style.opacity = '1';
            element.style.width = '80px';
            element.style.height = '80px';
            $('sectionTitle').innerHTML = 'Objectif'
            $('sectionPara').innerHTML = ` Notre service de conseil est la solution idéale pour les entreprises qui cherchent à améliorer
leur performance, à surmonter les obstacles et à atteindre leur plein potentiel.</br>
Nos consultants expérimentés vous guideront à chaque étape du processus, en offrant des
conseils pratiques et personnalisés pour vous aider à réussir.
            `;
            $('sectionBackgroundDesign').setAttribute('src', '../PUBLIC/IMAGES/services/flagDesign.svg');
            $('vision').style.opacity = '0.6';
            $('vision').style.width = '60px';
            $('vision').style.height = '60px';
            $('mission').style.opacity = '0.6';
            $('mission').style.width = '60px';
            $('mission').style.height = '60px';
        }
    </script>
</body>

</html>