const ListServices=[
    {id:1,image:`../../PUBLIC/IMAGES/CONSEIL_JURIDIQUE.svg`,title:'CONSEIL JURIDIQUE',description:`Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, animi voluptate perferendis impedit est quae natus architecto`},               
    {id:2,image:`../../PUBLIC/IMAGES/RECRUTEMENT.svg`,title:'RECRUTEMENT',description:`Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, animi voluptate perferendis impedit est quae natus architecto`},
    {id:3,image:`../../PUBLIC/IMAGES/COACHING.svg`,title:'COACHING',description:`Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, animi voluptate perferendis impedit est quae natus architecto`},
    {id:4,image:`../../PUBLIC/IMAGES/CERTIFICATION.svg`,title:'CERTIFICATION',description:`Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, animi voluptate perferendis impedit est quae natus architecto`},
    {id:5,image:`../../PUBLIC/IMAGES/INGENIERIE.svg`,title:'INGÉNIERIE',description:`Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, animi voluptate perferendis impedit est quae natus architecto`},
    {id:6,image:`../../PUBLIC/IMAGES/FORMATION.svg`,title:'FORMATION',description:`Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, animi voluptate perferendis impedit est quae natus architecto`}
]
var serviceContainer=document.querySelector(".serviceContainer")
var services=document.querySelector(".service")
var GetMore=document.querySelector(".getMore-container")
var show=false
function listServicesContainer() {
ListServices.map((elem,i)=>{
        serviceContainer.innerHTML+=`
            <div class="service" onclick="OpenWindow()">
    <img src=${elem.image} alt=${elem.title}>
    <div class="serviceTitle">
        ${elem.title}
    </div>
    <div class="serviceDescription">
        ${elem.description}
    </div>
    <div class="learnMoreAboutService">
        learn more
        <img src="../../PUBLIC/IMAGES/chevron.svg" alt="start learn">
    </div>
</div>
        `        
})
}
function OpenWindow() {
    GetMore.style.display='block'
}
function CloseWindow() {
    GetMore.style.display='none'
}