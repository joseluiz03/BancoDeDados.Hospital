<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href = "/imagem para o site/CESMI.jpg" type="image/x-icon" >
    <title>Caps</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel = "stylesheet" href = "css/normalize.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "home.css">
    
</head>
<body>
    
    <!-- header -->
    <header class = "header bg-blue">
        <nav class = "navbar bg-blue">
            <div class="logo">
                <img style="width: 100px;" src = "../imgs/Logo.png" alt = "logotipo do site" >
            </div>
            <div class = "container flex">
                <a href = "/index.html" class = "navbar-brand"> 
                    
                    
                </a>
                <button type = "button" class = "navbar-show-btn">
                    <img src = "images/ham-menu-icon.png">
                </button>
                
                <div class = "navbar-collapse bg-white">
                    <button type = "button" class = "navbar-hide-btn">
                        <img src = "images/close-icon.png">
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "#" class = "nav-link">Sobre</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "../graficos/graficos.php" class = "nav-link">Graficos</a>
                        </li>
                        <!-- lista dropdown -->
                        <div class="dropdown">
                            <button class="dropbtn"><b>Cadastrar</b></button>
                            <div class="dropdown-content">
                              <a href="../cadPac/cadPac.php">Paciente</a>
                              <a href="../cadMed/cadMed.php">Médico</a>
                            </div>
                          </div>
                        <!-- <li class = "nav-item">
                            <a href = "/c.paciente/cadastro-p.html" class = "nav-link">cadastro do paciente</a>
                        </li> -->
                        
                    </ul>
                    <div class = "search-bar">
                        <form>
                            <div class = "search-bar-box flex">
                                <span class = "search-icon flex">
                                    <ion-icon name="search-outline" style="color: white;"></ion-icon>
                                </span>
                                <input type = "search" class = "search-control" placeholder="Procure aqui">
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </nav>
        
        <div class = "header-inner text-white text-center">
            <div class = "container grid">
                <div class = "header-inner-left">
                    <h1>Seu parceiro mais confiavel, parceiro de saúde<br> <span>CAPS</span></h1>
                    <p class = "lead">Os Melhores Serviços De Correspondência Para Você</p>
                    <div class = "btn-group">
                        <a href = "#" class = "btn btn-white">Saber mais</a>
                        <a href = "#" class = "btn btn-light-blue">Entrar</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <main>
        <!-- about section -->
        <section id = "about" class = "about py">
            <div class = "about-inner">
                <div class = "container grid">
                    <div class = "about-left text-center">
                        <div class = "section-head">
                            <h2>Sobre nós</h2>
                            <div class = "border-line"></div>
                        </div>
                        <p class = "text text-lg">Em nossa clinica psiquiatrica CAPS, é onde priorizamos o bem estar mental e emocional de nossos pacientes. Nosso centro oferece uma ampla gama de métodos e tratamentos inovadores, incluindo terapia cognitiva-comportamental, terapia de grupo, terapia familiar e terapia ocupacional, ambas adaptadas para atender ás necessidades individuais de cada paciente. Com uma equipe de profissionais altamente especializados, estamos comprometidos em proporcionar um ambiente acolhedor e empático, onde cada pessoa se sinta ouvida, focada e completamentada em sua jornada para a saúde mental. </p>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- banner one -->
        <section id = "banner-one" class = "banner-one text-center">
            <div class = "container text-white">
                <blockquote class = "lead"><i class = "fas fa-quote-left"></i> Quando Você É Jovem E Saudável, Nunca Lhe Ocorre Que Em Um Único Segundo Toda A Sua Vida Possa Mudar. <i class = "fas fa-quote-right"></i></blockquote>
                <small class = "text text-sm">- Anonim Nano</small>
            </div>
        </section>
        <!-- end of banner one -->

        <!-- services section -->
        <section id = "services" class = "services py">
            <div class = "container">
                <div class = "section-head text-center">
                    <h2 class = "lead">O Melhor Médico Dá Menos Remédios</h2>
                    <p class = "text text-lg">Uma maneira perfeita de mostrar seus serviços hospitalares</p>
                </div>

    <!-- custom js -->
    <script src = "js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>