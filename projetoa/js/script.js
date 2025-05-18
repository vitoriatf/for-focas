function showSection() {
    const hash = window.location.hash; // Obtém o hash da URL
    if (hash) {
        document.querySelectorAll('section').forEach(function(section) {
            section.classList.remove('active'); // Oculta todas as seções
        });
        const section = document.querySelector(hash);
        if (section) {
            section.classList.add('active'); // Exibe a seção correspondente
        }
    } else {
        // Se não houver hash, exibe a primeira seção por padrão
        document.querySelector('section').classList.add('active');
    }
}

window.addEventListener('load', showSection); // Exibe a seção ao carregar a página
window.addEventListener('hashchange', showSection); // Exibe a seção quando o hash muda