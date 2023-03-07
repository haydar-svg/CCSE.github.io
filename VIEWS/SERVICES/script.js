const ListServices = [
  {
    id: 1,
    image: `../../PUBLIC/IMAGES/CONSEIL_JURIDIQUE.svg`,
    title: "JURIDIQUE",
    description: `Optez pour un accompagnement de qualité pour votre développement et la gestion de vos formalités juridiques.
    Faites confiance à l'expertise reconnue de nos avocats pour garantir la sécurité de vos stratégies et de vos obligations`,
  },
  {
    id: 2,
    image: `../../PUBLIC/IMAGES/RECRUTEMENT.svg`,
    title: "CONSEIL",
    description: `Profitez d'un accompagnement opérationnel et stratégique personnalisé au quotidien,
    avec des conseils d'experts pointus pour vous aider à mener à bien vos projets clés.`,
  },
  {
    id: 3,
    image: `../../PUBLIC/IMAGES/COACHING.svg`,
    title: "COACHING",
    description: `Atteignez vos objectifs personnels et professionnels grâce à notre service de
    coaching personnalisé`,
  },
  {
    id: 4,
    image: `../../PUBLIC/IMAGES/CERTIFICATION.svg`,
    title: "CERTIFICATION",
    description: `Concevez des programmes de formation efficaces et sur mesure avec notre service
    d'ingénierie de formation`,
  },
  {
    id: 5,
    image: `../../PUBLIC/IMAGES/INGENIERIE.svg`,
    title: "Gestion de Ressources Humaines",
    description: `Optimisez la gestion de vos ressources humaines et améliorez la performance de votre entreprise
    avec notre service de conseil en GRH`,
  },
  {
    id: 6,
    image: `../../PUBLIC/IMAGES/FORMATION.svg`,
    title: "FORMATION",
    description: `Développez les compétences de vos employés et augmentez la productivité de votre
    entreprise grâce à notre service de formation professionnelle`,
  },
];
var serviceContainer = document.querySelector(".serviceContainer");
var services = document.querySelector(".service");
var GetMore = document.querySelector(".getMore-container");
var show = false;
function listServicesContainer() {
  ListServices.map((elem, i) => {
    serviceContainer.innerHTML += `
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
        `;
  });
}
function OpenWindow() {
  GetMore.style.display = "block";
}
function CloseWindow() {
  GetMore.style.display = "none";
}
