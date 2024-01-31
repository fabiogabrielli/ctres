<?php include 'header.php'; ?>


<!-- INICIO CAROUSEL -->
    
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

    <div class="carousel-inner">
      <div class="carousel-item hero01 active">
          <div class="stage conteudoHero">
            <h1 class="titHero">Somos mais do que uma corretora.</h1>
            <h6 class="subHero">Somos consultores estratégicos, dedicados a construir soluções sob medida em logística e seguros.</h6>
            <a href="#somos"><button type="button" class="btnConheca">Saiba Mais</button></a>
          </div>
      </div>
    <div class="carousel-item hero02">
      <div class="stage conteudoHero">
        <h1 class="titHero">Impactos Estratégicos da Lei 14.599/23 no Mercado de Seguros de Transporte Rodoviário.</h1>
        <h6 class="subHero">A recente Lei 14.599/23, promulgada em junho de 2023, representa um divisor de águas no cenário dos seguros de transporte rodoviário no Brasil. Suas implicações vão além das simples mudanças normativas, refletindo em toda a cadeia logística e no mercado segurador.</h6>
        <button class="btnConheca">Leia Mais</button>
      </div>
  </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
  
<!-- FIM CAROUSEL -->

<!-- INICIO SOMOS -->

<section id="somos" class="somos">
    <div class="stage conteudoSomos">
      <h1 class="titulo">Somos o Grupo CTrês</h1>
      <p>Acreditamos na singularidade de cada cliente, reconhecendo suas histórias, necessidades e desafios únicos.

        <br>Com mais de <b>17 anos de experiência em  gestão de riscos,  seguros e logística</b>, não adotamos abordagens genéricas. Em vez disso, nos dedicamos a oferecer soluções alinhadas e especializadas para cada parceiro.
        
        <br><br>Nossa notável taxa de retenção de 98% é um testemunho do nosso compromisso em compreender e atender de forma personalizada.
        
        <br><br>Vamos além do tradicional papel de corretora. Atuamos como consultores estratégicos, com foco em desenvolver soluções sob medida que resultem em redução de custos, aumento de eficiência e fortalecimento do seu balanço.
        
        <br><br>O Grupo CTrês valoriza a individualidade da sua empresa, proporcionando expertise e soluções alinhadas às melhores práticas do mercado e verdadeiramente adaptadas às suas demandas.</p>
        <a href="somos.php"><button class="btnSaibaMais">Grupo CTrês</button></a>
    </div>
</section>

<!-- FIM SOMOS -->

<!-- INICIO ABORDAGEM CONSULTIVA -->

<section class="abordagem lazy-load-section">
  <div class="stage conteudoAbordagem">
    <h1>Abordagem Consultiva</h1>
    <div id="fluxoCiclico">
        <div onclick="abreModal('ponto1')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Clique e Saiba Mais" class="ponto" id="ponto1"><h1>Compreender o seu negócio</h1><i class="fa-solid fa-angles-right"></i></div>
        <div onclick="abreModal('ponto2')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Clique e Saiba Mais" class="ponto" id="ponto2"><h1>Mapeamento dos Riscos</h1><i class="fa-solid fa-angles-right"></i></i></div>
        <div onclick="abreModal('ponto3')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Clique e Saiba Mais" class="ponto" id="ponto3"><h1>Personalização de Estratégias</h1><i class="fa-solid fa-angles-down"></i></div>
        <div onclick="abreModal('ponto4')" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip"data-bs-title="Clique e Saiba Mais" class="ponto" id="ponto4"><h1>Entrega e Comprometimento</h1><i class="fa-solid fa-angles-left"></i></div>
        <div onclick="abreModal('ponto5')" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip"  data-bs-title="Clique e Saiba Mais" class="ponto" id="ponto5"><h1>Monitoramento Contínuo</h1><i class="fa-solid fa-angles-left"></i></div>
      </div>
  </div>
</section>

<div onclick="fecharModalAbordagem()" class="modalAbordagem" id="modalAbordagem">
  <div class="modalAbordagemConteudo">
    <div id="resultAbordagem">
      <h1 id="textoAbordagem"></h1>
    </div>
  </div>
</div>

<!-- FIM ABORDAGEM CONSULTIVA -->

<!-- INICIO SERVICOS -->

<section id="servicos" class="produtosServicos lazy-load-section">
  <div class="conteudoProdutosServicos">
    <div class="bloco bloco01">
      <h1>Soluções em Logística</h1>
      <h6>A logística é o coração de muitos negócios, e seu sucesso está na capacidade de se adaptar e responder rapidamente às mudanças. Na Ctrês, reconhecemos a importância de uma logística eficiente. Por isso, vamos além dos padrões tradicionais, oferecendo consultoria avançada e soluções que atendem às necessidades específicas da sua operação. Nosso objetivo é garantir que sua cadeia de suprimentos seja otimizada, resiliente e alinhada com seus objetivos de negócios.</h6>
    </div>
    
    <div class="bloco bloco02"></div>
    
    <div class="bloco bloco03"></div>
    
    <div class="bloco bloco04"></div>
    
    <div class="bloco bloco05">
      <h1>Estratégia e Gestão de Riscos</h1>
      <h6>A prevenção é a chave para uma logística eficiente. Na Ctrês, não apenas reagimos aos desafios, mas também trabalhamos proativamente para identificar e mitigar riscos. Nossos serviços consultivos incluem:</h6>
      <a href="servicos.php"><button type="button" class="btnProdSaiba">Saiba Mais</button></a>
    </div>
    
    <div class="bloco bloco06"></div>

    <div class="bloco bloco07">
      <h1>Seguros Especializados para a Cadeia Logística</h1>
      <a href="servicos.php"><button type="button" class="btnProdSaiba">Saiba Mais</button></a>
    </div>

    <div class="bloco bloco08"></div>
  </div>
</section>

<!-- FIM SERVICOS -->

<!-- INICIO PRODUTOS -->

<section id="produtos" class="produtos lazy-load-section">
  <div class="conteudoProdutos">
    <div class="prod01 produto">
      <h1>Seguros Corporativos e Benefícios Empresariais</h1>
      <h6>Proteção Integral para Sua Empresa: Na Ctrês, entendemos profundamente os desafios do mercado corporativo. Com nossa vasta expertise em seguros empresariais, desenvolvemos soluções sob medida, garantindo que sua empresa opere com a máxima confiança e segurança. Estamos comprometidos em proteger seus ativos valiosos e otimizar seu capital, enquanto também cuidamos do bem-estar e satisfação de sua equipe.</h6>
    </div>
    <div class="prod02 produto"></div>

    <div class="prod03 produto"></div>

    <div class="prod04 produto">
      <h1>Segurança Patrimonial e Otimização de Capital</h1>
      <a href="#"><button type="button" class="btnProdSaiba">EM BREVE</button></a>
    </div>

    <div class="prod05 produto">
      <h1>Proteção e Valorização do Capital Humano</h1>
      <a href="#"><button type="button" class="btnProdSaiba">EM BREVE</button></a>
    </div>

    <div class="prod06 produto"></div>

    <div class="prod07 produto"></div>
  </div>
</section>

<!-- FIM PRODUTOS -->

<!-- INICIO PARALAX-->

<div class="paralax lazy-load-section">
  <div class="stage conteudoParalax">
    <h1>O que os clientes falam de nós</h1>
  </div>
</div>

<!-- FIM PARALAX-->

<!-- INICIO TESTEMUNHOS -->

<section class="secTestimonial lazy-load-section">
  <div class="stage testimonial-carousel">
      <div class="testimonial">
        <h6 class="depoimento">O Grupo CTRÊS conta com profissionais qualificados e dedicados para atender as nossas necessidades como clientes, posso dizer que em 4 anos de parceria nunca tivemos um caso, em que não tive retorno rápido e bom atendimento.</h6>
        <h4 class="cargoCliente">Coordenadora de Importação</h4>
        <h6 class="empresaCliente">RIO BRANCO COM. E IND. DE PAPEIS</h6>
      </div>
      <div class="testimonial">
        <h6 class="depoimento">A CTrês Corretora vem desempenhando com dedicação e competência os serviços relacionados a seguros. Admirável a atenção que recebemos dos seus profissionais. Observamos um time preparado para atender todas as nossas demandas.</h6>
        <h4 class="cargoCliente">Chief Financial Officer</h4>
        <h6 class="empresaCliente">Supersonic Logística e Transportes Ltda / Componel Indústria e Comércio Ltda</h6>
      </div>
      <div class="testimonial">
        <h6 class="depoimento">A Ctrês é a corretora e consultora que nos acompanha há anos. Sempre nos trazem segurança e tranquilidade nas contratações de seguros, além de serem especialistas em seguros de carga, otimizando nossos recursos. Agradeço ao time pela dedicação e empenho contínuos. </h6>
        <h4 class="cargoCliente">Gerente de Comex</h4>
        <h6 class="empresaCliente">Grupo 3 Corações Alimentos</h6>
      </div>
      <div class="testimonial">
        <h6 class="depoimento">Há 12 anos o grupo Dismarina Transportes  Rodoviários conta com o atendimento da CTrês Seguros na contratação de todos os nossos seguros. Empresa séria, com excelentes profissionais, sempre atentos as melhores oportunidades para nos atender. Estamos muito satisfeitos com a nossa parceria.</h6>
        <h4 class="cargoCliente">Gerente de Vendas</h4>
        <h6 class="empresaCliente">Dismarina Transortes Rodoviários</h6>
      </div>
  </div>
</section>
  
<!-- FIM TESTEMUNHOS --> 

<!-- INICIO ARTIGOS --> 

<section id="secArtigos" class="secArtigos lazy-load-section">
  <div class="stage artigos">
    <div class="artigo01">
      <h6 class="secao">ARTIGO</h6>
      <h1>Os Riscos Logísticos e seus Impactos na Saúde Financeira das Transportadoras</h1>
      <p>O setor de transporte desempenha um papel fundamental na economia brasileira, ligando mercados, permitindo o comércio e impulsionando o crescimento. No entanto, as transportadoras de pequeno e médio porte no Brasil enfrentam uma série de desafios financeiros que podem impactar significativamente suas operações e sustentabilidade a longo prazo.</p>
      <a href="02-Riscos-Logisticos.php"><button hre type="button" class="btnLeiaMais">LEIA MAIS</button></a>
    </div>
    <div class="artigo02">
      <h6 class="secao">ARTIGO</h6>
      <h1>Impactos Estratégicos da Lei 14.599/23 no Mercado de Seguros de Transporte Rodoviário</h1>
      <p>A recente Lei 14.599/23, promulgada em junho de 2023, representa um divisor de águas no cenário dos seguros de transporte rodoviário no Brasil. Suas implicações vão além das simples mudanças normativas, refletindo em toda a cadeia logística e no mercado segurador.</p>
      <a href="01-Lei-14599-23.php"><button hre type="button" class="btnLeiaMais">LEIA MAIS</button></a>
    </div>
  </div>
</section>

<!-- FIM ARTIGOS --> 

<?php include 'footer.php'; ?>