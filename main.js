let form = document.querySelector("#formulario");
let container = document.querySelector("#container");

form.addEventListener('submit', function(e) {
    e.preventDefault();

    let nome = document.getElementById('nome').value;
    let cadastro = document.getElementById('numMat').value;
    let num1 = parseInt(document.getElementById('num1').value);
    let num2 = parseInt(document.getElementById('num2').value);

    let media = calculando(num1, num2);

    let novaLinha = document.createElement("tr");
    novaLinha.innerHTML = `<td>${nome}</td><td>${cadastro}</td><td>${num1}</td><td>${num2}</td><td>${media}</td>`;

    container.appendChild(novaLinha);
});

function calculando(num1, num2) {
    let media = ((num1 + num2) / 2);
    return media;
}