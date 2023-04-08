var a = true;
function switch_selection() {
  let profession = document.getElementById("profession");
  let placeInput = document.querySelector(".select");
  if (a) {
    if (profession.value == "autre") {
      placeInput.innerHTML = `
        <div>
        <img src="../../../PUBLIC/IMAGES/CLOSE.svg" alt="input icon" onclick="switch_selection()" style="cursor:pointer;">
    </div>
        <input type="text" id="fullNameForUser" name="profession" placeholder="Tapez votre profession svp">`;
      a = false;
    }
  } else {
    placeInput.innerHTML = `
            <div>
                                <img src="../../../PUBLIC/IMAGES/profession.svg" alt="input icon">
                            </div>
                            <select name="profession" id="profession" class="Select" onchange="switch_selection()">
                                <option value="">
                                    --veuillez choisir votre profession ici--
                                </option>
                                <option value="étudiant">
                                    étudiant
                                </option>
                                <option value="professeur">
                                    professeur
                                </option>
                                <option value="autre">
                                    autre
                                </option>
                            </select>`;
    a = true;
  }
}
