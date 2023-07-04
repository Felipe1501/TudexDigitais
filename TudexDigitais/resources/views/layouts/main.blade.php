<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 

    <script src="/assets/js/progressbar.min.js"></script>
</head>
<body>
<header>
        <div class="container-fluid">
            <div class="navb-logo">
                <img src="" alt="logoprj">
            </div>
            <div class="navb-items d-none d-xl-flex">
                <div class="item">
                    <a href="/">INÍCIO</a>
                </div>
                <div class="item">
                    <a href="#about-area">SOBRE</a>
                </div>
                
                <div class="item">
                    <a href="/canals/create">VENDER CANAIS</a>
                </div>
               
                <div class="item">
                    <a href="/dashboard">MEUS CANAIS</a>
                </div>
                <div class="item">
                <form action="/logout" method="POST">
                    
                    <a href="/logout" 
                       class="a" 
                        onclick="event.preventDefault();
                        this.closest('form')
                        .submit();">SAIR</a>
                </div>
                
                <div class="item">
                    <a href="/login">LOGIN</a>
                </div>
                <div class="item">
                    <a href="/register">REGISTRAR</a>
                </div>
                
            </div>


            <div class="mobile-toggler d-lg-none" >
                <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
                    <i class='bx bx-menu'></i>
                </a>
            </div>
  
            <!-- Modal -->
            <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <img src="#" alt="logovariant">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bx bx-x cancel"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-line">
                            <i class='bx bx-home' ></i><a href="/">INÍCIO</a>
                        </div>
                        <div class="modal-line">
                            <i class='bx bx-info-circle' ></i><a href="#about-area">SOBRE</a>
                        </div>
                        <div class="modal-line">
                            <i class='bx bx-slideshow'></i><a href="/canals/create">VENDER CANAIS</a>
                        </div>
                        
                        <div class="modal-line">
                            <a href="/dashboard">MEUS CANAIS</a>
                        </div>
                        <div class="modal-line">
                        <form action="/logout" method="POST">
                        
                        <a  href="/logout" 
                            class="a" 
                            onclick="event.preventDefault();
                            this.closest('form')
                            .submit();">SAIR</a>
                        </div>
                        
                        <div class="modal-line">
                            <a href="/login">LOGIN</a>
                        </div>
                        <div class="modal-line">
                            <a href="/register">REGISTRAR</a>
                        </div>
                       
                    </div>
                    <div class="mobile-modal-footer">
                        <a target="_blank" href="#"><i class='bx bxl-whatsapp' ></i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </header>
    <main>
    @yield('content')
    
    <!-- <footer class="container-fluid text-white bg-danger">
        <div class="row pt-5 pb-5">
            <section>
                
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <p>FALE CONOSCO!</p>
                  </li>
                  <li class="nav-item">
                    <a href="https://api.whatsapp.com/send?phone=5513999999999&text=Quero%20saber%20mais%20sobre%20a%20Tudex!"
                      target="_blank" class="nav-link text-white"> <i class='bx bxl-whatsapp' > </i>WHASTAPP:
                      (13) 9 9999-9999
                    </a>
                  </li>
                </ul>
              </section> -->
        
              <!-- <section>
                <a href="#" class="text-white">Voltar ao Top!</a>
              </section> -->
              <!-- <section>
                <p>Copyright &copy; 2023 Dtudex CNPJ: 499228922</p>
              </section>
        </div>
    </footer> -->
    
<script src="/assets/js/scripts.js"></script>
</body>
</html>
    
