var visualizarBotao = document.getElementById('visualizar-botao');
var tabelaSimples = document.getElementById('tabela-simples');

visualizarBotao.addEventListener('click', function() {
    var corCaixa = getComputedStyle(this.parentNode).backgroundColor;
    tabelaSimples.style.backgroundColor = corCaixa;
});
