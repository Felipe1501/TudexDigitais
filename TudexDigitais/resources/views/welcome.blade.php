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
    </main>
@endsection