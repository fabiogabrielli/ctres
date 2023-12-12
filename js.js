// CAROUSEL 

$(document).ready(function(){
    $('.testimonial-carousel').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: true,
      prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });

  });

  //FIM CAROUSEL


  // MODAL ABORDAGEM

  const modalAbordagem = document.getElementById("modalAbordagem");
  const textoAbordagem = document.getElementById("textoAbordagem");

  function abreModal(pontoId) {
    modalAbordagem.style.display = "flex";

    var conteudos = {
      ponto1: "Nós nos aprofundamos para realmente compreender a essência do seu negócio. Queremos conhecer sua visão, seus desafios, sua estrutura financeira e como você percebe os riscos. ",
      ponto2: "Seu histórico de perdas não é apenas um conjunto de dados para nós. Vemos as histórias por trás dos números, avaliamos os seus contratos chave e comparamos com as melhores práticas de mercado para o seu segmento. ",
      ponto3: "Com uma clara compreensão do seu negócio, priorizamos e adaptamos soluções de tratamento de risco. Propomos técnicas de retenção e transferência de risco de forma a desenhar um programa de seguros que combine a melhor eficiência e encaixe perfeitamente as suas necessidades.",
      ponto4: "Implementamos cada solução conforme o acordado, apoiando a sua empresa nas negociações com os principais stakeholders de forma a garantia a completa implementação de seu programa de seguros e o plano de gestão de risco. ",
      ponto5: "Nossa parceria não termina com a implementação. Estamos constantemente ao seu lado, avaliando os resultados, acompanhando possíveis mudanças em suas operações e propondo ajustes quando necessário, para garantir que as soluções permaneçam eficazes ao longo do tempo.",
  };

  textoAbordagem.innerHTML = conteudos[pontoId];
  }

  function fecharModalAbordagem() {
    modalAbordagem.style.display = "none";
  }

  
