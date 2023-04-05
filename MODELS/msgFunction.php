<?php

function msgError($msg){
    echo<<<_MSG
    <div class="msgContainer_er msgContainer">
    <div class="closeWindowForMsgContainer" onclick="hiddeMessage()">
        <img src="../PUBLIC/IMAGES/rentalHalls/close.svg" alt="close icon">
    </div>
    <div class="infoIconContainer_er infoIconContainer">
        <div class="infoIconBorder_er infoIconBorder">
            <img src="../PUBLIC/IMAGES/userMsg/exclamation_er.svg" alt="exclamation">
        </div>
    </div>
    <div class="messageInfo_er messageInfo">
        <div class="messageTitle_er messageTitle">
            erreur
        </div>
        <div class="messageDetail_er messageDetail">
            $msg
        </div>
    </div>
</div>
_MSG;
}
function msgSuccess($msg){
    echo<<<_MSG
    <div class="msgContainer_su msgContainer">
        <div class="closeWindowForMsgContainer" onclick="hiddeMessage()">
            <img src="../PUBLIC/IMAGES/rentalHalls/close.svg" alt="close icon">
        </div>
        <div class="infoIconContainer_su infoIconContainer">
            <div class="infoIconBorder_su infoIconBorder">
                <img src="../PUBLIC/IMAGES/userMsg/exclamation_su.svg" alt="exclamation">
            </div>
        </div>
        <div class="messageInfo_su messageInfo">
            <div class="messageTitle_su messageTitle">
                succès
            </div>
            <div class="messageDetail_su messageDetail">
               $msg
            </div>
        </div>
    </div>
_MSG;
}