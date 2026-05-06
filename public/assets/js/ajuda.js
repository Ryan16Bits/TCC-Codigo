document.addEventListener('DOMContentLoaded', function () {

    const links = document.querySelectorAll('.ajuda-nav-link');
    const secoes = document.querySelectorAll('.ajuda-secao');

   
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');

                links.forEach(link => {
                    link.classList.remove('ativo');
                    if (link.getAttribute('href') === '#' + id) {
                        link.classList.add('ativo');

                        // Rola o menu para mostrar o link ativo
                        link.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                    }
                });
            }
        });
    }, {
        rootMargin: '-80px 0px -60% 0px',
        threshold: 0
    });

    secoes.forEach(secao => observer.observe(secao));

    
    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const alvo = document.querySelector(this.getAttribute('href'));
            if (alvo) {
                alvo.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

});