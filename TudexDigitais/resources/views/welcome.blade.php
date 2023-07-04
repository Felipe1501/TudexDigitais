@extends('layouts.main')

@section('title', 'TUDEX DIGITAIS')


@section('content')


<section class="products container">
      @foreach($canals as $canal )
        <section class="product-card {{$canal->monetized}} sim">
          <img src="/img/canals/{{$canal->image}}" alt="canal" class="card_img">
          <div class="card_info">
            <h2 class="card_price">R$ {{$canal->price}}</h2>
            <h2 class="card_title">{{$canal->title}}</h2>
          </div>
          <button type="button" class="button_addCard">
              <a href="/canals/{{$canal->id}}"><i class='bx bx-cart-add'></i></a>
          </button>
          
        </section>
        @endforeach
        
            @if(count($canals) == 0)
                <p>Não há canais disponíveis</p>
            @endif
          </div>
        </div>
      </div>

      <!-- <script>
        // Filtro portfólio

          $('.filter-btn').on('click', function() {

          let type = $(this).attr('id');
          let boxes = $('.project-box');

          $('.main-btn').removeClass('active');
          $(this).addClass('active');

          if(type == 'monetized-btn') {
            eachBoxes('1', boxes);
          } else if(type == 'notmonetized-btn') {
            eachBoxes('0', boxes);
          } else {
            eachBoxes('all', boxes);
          }

          });

          function eachBoxes(type, boxes) {

          if(type == 'all') {
            $(boxes).fadeIn();
          } else {
            $(boxes).each(function() {
              if(!$(this).hasClass(type)) {
                $(this).fadeOut('slow');
              } else {
                $(this).fadeIn();
              }
            });
          }
        }
      </script> -->

        <!-- <card-canal
          photo="/assets/img/Eagle Tech 2.0.png"
          card-price="R$ 697,00"
          card-title="CANAL YOUTUBE MONETIZADO COM 1.33K DE INSCRITOS - TECNOLOGIA"
        ></card-canal>
        <card-canal
          photo="/assets/img/Tech Mania.png"
          card-price="R$ 637,00"
          card-title="CANAL MONETIZADO YOUTUBE COM 1.31K DE INSCRITOS - INFORMATIVO"
        ></card-canal>
        <card-canal
          photo="/assets/img/Eagle Tech 2.0.png"
          card-price="R$ 1990,00"
          card-title="TNT SPORTS CANAL"
        ></card-canal> -->
      </section>
      <div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">SOBRE A TUDEX</h3>  
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="/img/agencia.jpg" alt="a">
                        </div>
                        <div class="col-md-6">
                            <h3 class="about-title">SOLUÇÕES QUE IMPULSIONAM SEUS NEGÓCIOS</h3>
                            <p>A Tudex atua na Intermediação e Venda dos Canais.</p>
                            <p>Somos um dos principais Marketplace de venda de canais do YouTube no país.</p>
                            <p>Se você possui um canal e deseja lucrar com ele, anuncie em nossa plataforma ou adquira um dos já disponíveis aqui.</p>
                            <p>Nosso objetivo é garantir a segurança durante a transação, prevenindo golpes.</p>
                            <p>Para isso, estabelecemos processos bem definidos que priorizam a segurança.</p>
                            <p>Trabalhamos de maneira transparente com todas as partes envolvidas.</p>
                        </div>
                    </div>
                </div>
              </div>
              <div id="services-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">NOSSAS ESPECIALIDADES</h3>  
                        </div>
                        <div class="col-md-4 service-box">
                            <i class='bx bx-support'></i>
                            <h4>ATENDIMENTO</h4>
                            <p>Entre em contato conosco e tire suas duvidas, daremos suporte em todo momento nas transferências das contas!</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class='bx bx-shield-quarter'></i>
                            <h4>SEGURANÇA</h4>
                            <p>Em todas as transações só repassamos o dinheiro após o canal estar 100% com o comprador, assim evitando qualquer tipo de golpe!</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class='bx bxs-cart' ></i>
                            <h4>E-COMMERCES</h4>
                            <p>Temos uma plataforma própria de e-commerce que se adapta a qualquer regra de negócio</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class='bx bxs-building'></i>
                            <h4>EMPRESA</h4>
                            <p>Somos um Marketplace de Venda de Canais do YouTube, e nossa missão é garantir que o canal chegue de forma adequada aos compradores e que o valor da venda seja repassado devidamente aos anunciantes, proporcionando segurança para ambas as partes envolvidas.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class='bx bxs-credit-card' ></i>
                            <h4>SUPORTE NAS VENDAS</h4>
                            <p>A Tudex inicia o processo de transferência de titularidade da conta e fornece todo o suporte e acompanhamento necessário para garantir a segurança durante a transação.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class='bx bxl-youtube' ></i>
                            <h4>PARCERIAS</h4>
                            <p>Descubra o canal do YouTube perfeito para você, e o lugar perfeito para encontrar o seu canal do YouTube é aqui na Tudex Digitais.</p>
                        </div>
                    </div>
                </div>
              </div>
              <!-- <div id="data-area">
                <div class="container">
                    <div class="row">
                    
                    </div>
                </div>
              </div> -->
              
        </div>
    </main>
    <footer>
        <p>FALE CONOSCO!</p>
        <p><a href="https://api.whatsapp.com/send?phone=5513999999999&text=Quero%20saber%20mais%20sobre%20a%20Tudex!"
                      target="_blank" class="nav-link text-white"> <i class='bx bxl-whatsapp' > </i>WHASTAPP:
                      (13) 9 9999-9999
            </a></p>
        <p><a href="#" class="text-white">Voltar ao Top!</a></p>
        <p>Copyright &copy; 2023 Dtudex CNPJ: 499228922</p>
    </footer>
@endsection