const produtos = document.querySelectorAll('.produto');
let index = 0;

document.getElementById('proximo').addEventListener('click', () => {
  index = (index + 2) % produtos.length; // Avança 2 produtos
  atualizarVisibilidade();
});

document.getElementById('anterior').addEventListener('click', () => {
  index = (index - 2 + produtos.length) % produtos.length; // Retrocede 2 produtos
  atualizarVisibilidade();
});

function atualizarVisibilidade() {
  produtos.forEach((produto, i) => {
    produto.style.display = (i >= index && i < index + 4) ? 'flex' : 'none'; // Exibe apenas 4 produtos
  });
}