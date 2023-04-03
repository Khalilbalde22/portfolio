

const btnToggle = document.querySelector(".btn-toggle");

let valInit = 0;

btnToggle.addEventListener("click", () => {
  //pour changer le background du body en mode light ou dark
  const body = document.body;
  if (body.classList.contains("dark")) {
    body.classList.add("light");
    body.classList.remove("dark");
    btnToggle.innerHTML = "Sombre";
  } else if (body.classList.contains("light")) {
    body.classList.add("dark");
    body.classList.remove("light");
    btnToggle.innerHTML = "Claire";
  }

  //   if (section.classList.contains("lightS")) {
  //     section.classList.add("darkS");
  //     section.classList.remove("light");
  //   } else if (section.classList.contains("darkS")) {
  //     section.classList.add("lightS");
  //     section.classList.remove("darkS");
  //   }

  // pour changer la couleur du background des section passer en mode light ou dark
  if (valInit == 0) {
    document.documentElement.style.setProperty("--ecriture", "#fff");
    document.documentElement.style.setProperty("--background", "#333");
    valInit++;
  } else {
    document.documentElement.style.setProperty("--ecriture", "#fff");
    document.documentElement.style.setProperty("--background", "#2980b9");
    valInit--;
  }
});

//pour changer la couleur des elements statistique lorsque l'utilisateur passe le curseur decu
const statistique = document.getElementById('stats');

statistique.addEventListener("mouseover", function () {
  $this.style.backgroundColor = "rgba(255,255,255)";
});

stats.addEventListener("mouseout", function () {
  $this.style.backgroundColor = "";
});

// pour telecharger le CV en pdf
let loadPdf = document.getElementsByClassName("btn");

loadPdf.addEventListener("click", function () {
  let lienPdf = "pdf/cv.pdf";
  window.open(lienPdf, "_blank");
});
