const response = await fetch('json/pieces-autos.json');
const pieces = await response.json();

const sectionFiches = document.querySelector(".fiches");

function displayParts(pieces_array) {
    for (let i=0; i<pieces_array.length; i++) {
        const article = pieces_array[i];

        const imageElement = document.createElement("img");
        imageElement.src = article.image;

        const nomElement = document.createElement("h2");
        nomElement.innerText = article.nom;

        const prixElement = document.createElement("p");
        prixElement.innerText = `Prix: ${article.prix} MAD`;

        const categorieElement = document.createElement("p");
        categorieElement.innerText = article.categorie;

        const descriptionElement = document.createElement("p");
        descriptionElement.innerText = article.description;

        sectionFiches.appendChild(imageElement);
        sectionFiches.appendChild(nomElement);
        sectionFiches.appendChild(prixElement);
        sectionFiches.appendChild(categorieElement);
        sectionFiches.appendChild(descriptionElement);
    }
}

displayParts(pieces);

const btn_trier = document.querySelector(".btn-trier");
const btn_trier_desc = document.querySelector(".btn-trier-desc");
const btn_filtrer = document.querySelector(".btn-filtrer");
const btn_filtrer_dispo = document.querySelector(".btn-filtrer-dispo");


function event_trier() {
    sectionFiches.innerHTML = "";
    const piecesTriees = Array.from(pieces);
    piecesTriees.sort(function(a, b) {
        return a.prix - b.prix;
    })

    displayParts(piecesTriees);
}

function event_trier_desc() {
    sectionFiches.innerHTML = "";
    const piecesTrieesDesc = Array.from(pieces);
    piecesTrieesDesc.sort(function(a, b) {
        return b.prix - a.prix;
    })

    displayParts(piecesTrieesDesc);
}

function event_filtrer() {
    sectionFiches.innerHTML = "";
    const piecesFiltrees = pieces.filter(function (piece) {
        return piece.prix <= 35;
    });

    displayParts(piecesFiltrees);
}

function event_filtrer_dispo() {
    sectionFiches.innerHTML = "";
    const piecesFiltreesDispo = pieces.filter(function (piece) {
        return piece.disponibilite;
    });

    displayParts(piecesFiltreesDispo);
}


btn_trier.addEventListener("click", event_trier);
btn_trier_desc.addEventListener("click", event_trier_desc);
btn_filtrer.addEventListener("click", event_filtrer);
btn_filtrer_dispo.addEventListener("click", event_filtrer_dispo);


const range_value = document.querySelector("#range-value");
const range_input = document.querySelector("#range-input");

range_input.addEventListener("input", function() {
    range_value.value = range_input.value;
    sectionFiches.innerHTML = "";
    const piecesFiltreesPrix = pieces.filter(function (piece) {
        return piece.prix <= range_input.value;
    });

    displayParts(piecesFiltreesPrix);
})


