/*
SE (tamanhoY_documento < tamanhoY_tela) {
    fotter = recebe classe fixada 
} SE NÃO {
    fotter = remove classe fixada
}
*/

window.onload = function() { calculaPosicaoFotter() };
window.onresize = function() { calculaPosicaoFotter() };

function calculaPosicaoFotter() {
    let footer = document.getElementById("footer");
    let documentH = $(document).height(); //Mudar
    let windowH = window.screen.height;

    console.log('documentH = ' + documentH);
    console.log('windowH = ' + windowH);

    if (documentH < windowH) {
        if (!footer.classList.contains("fixed-bottom")) {
            footer.classList.add("fixed-bottom");
        }
    } else {
        if (footer.classList.contains("fixed-bottom")) {
            footer.classList.remove("fixed-bottom");
        }
    }
}