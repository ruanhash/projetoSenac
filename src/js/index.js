const opcoes = document.querySelectorAll(".opcoes");

opcoes.forEach(function (opcoes) {
    opcoes.style.display = "none"
})

const arrow = document.querySelectorAll("#arrow");

arrow.forEach(function (arrow) {
    arrow.addEventListener("mouseover", aparecerOpcoes)
})

arrow.forEach(function (arrow) {
    arrow.addEventListener("mouseout", desaparecerOpcoes)
})

function aparecerOpcoes() {

    opcoes.forEach(function (opcoes) {
        opcoes.style.display = "block"
    })

}

function desaparecerOpcoes() {
    opcoes.forEach(function (opcoes) {
        opcoes.style.display = "none"
    });
}

