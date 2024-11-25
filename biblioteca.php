<!-- biblioteca.php -->


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livraria Arm Lock</title>
        <link rel="stylesheet" href="style_Livr.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            body {
                background-color: #8f8f8f; 
            }
        </style>
    </head>
    <body>
        <section>

            <nav>

                <div class="logo">
                    <img src="image/logo.png">
                </div>
                <p>Bem vindo, <?php echo isset($_SESSION['usuario']) ? htmlspecialchars($_SESSION['usuario']) : 'Visitante'; ?>!</p>

                <ul>
    <li><a href="Index_carrinho.php">biblioteca</a></li>
    <li><a href="#destaques">Destaques</a></li>
    <li><a href="#novidades">Novidades</a></li>
    <li><a href="logout.php">Sair</a></li>
</ul>

            
           
            </nav>  
            <div class="banner">
            <a href="index.php" >Sair</a>
        </div>
            <div class="main">

                <div class="main_tag">
                    <h1>BEM-VINDO À<br><strong><span>Livraria Arm Lock</span></strong></h1>
                    <p>
                        Bem-vindo à nossa livraria! Aqui oferecemos uma ampla seleção de livros digitais para todos os gostos. 
                        Navegue por nossa coleção e encontre o próximo livro que você vai amar. Aproveite a conveniência de comprar 
                        e ler seus livros favoritos em qualquer lugar e a qualquer hora.
                    </p>
                    <a href="#sobre-nos" class="main_btn">Mais Informações</a>

                </div>

                <div class="main_img">
                    <img src="image/table.png">
                </div>

            </div>

        </section>

        <div class="services">

            <div class="services_box">

                <div class="services_card">
                    <i class="fa-solid fa-headset"></i>
                    <h3> De segunda a sexta, das 9h às 20h.</h3>
                </div>

            </div>

        </div>

        <div class="about">

            <div class="about_image">
                <img src="image/about.png">
            </div>
            <div class="about_tag">
            <h1 id="sobre-nos">Sobre nós</h1>
                <p>
                    Fundada em 2020, nossa <strong>Livraria Arm Lock</strong> foi criada com o objetivo de proporcionar aos leitores uma maneira conveniente e moderna de acessar livros digitais. Com uma vasta coleção de títulos em diversas categorias, nos orgulhamos de oferecer uma experiência de leitura acessível e agradável para todos.
                </p>
                <p>
                    Desde nossa criação, temos nos dedicado a expandir continuamente nosso catálogo, garantindo que nossos clientes encontrem sempre novos e emocionantes lançamentos, bem como clássicos atemporais. Acreditamos que a leitura é uma jornada que enriquece a vida e promove o crescimento pessoal.
                </p>
                <p>
                    Nosso compromisso é fornecer um serviço de alta qualidade, com atendimento personalizado durante o horário comercial. Nossa equipe está sempre pronta para ajudar com qualquer dúvida ou necessidade que nossos clientes possam ter. Junte-se a nós e descubra um mundo de possibilidades literárias na palma da sua mão.
                </p>
               
                <a href="Index_carrinho.php" class="about_btn">Adquirir</a>
            </div>

        </div>

            <div class="featured_boks">
            <h1 id="destaques">Livros em Destaques</h1>
    <div class="featured_book_box">

            <div class="featured_book_card">

                    <div class="featurde_book_img">
                    <img src="image/livro_1.jpg">
                    </div>

                    <div class="featurde_book_tag">
                    <h2>Livros em Destaques</h2>
                        <p class="writer">Zefrons</p>
                        <div class="categories">gothic, Romance</div>
        <p class="preço_do_livro">R$31.99<sub><del>R$55,00</del></sub></p>
                        <br>

                        <a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
                    </div>               

                </div>

                <div class="featured_book_card">

    <div class="featurde_book_img">
    <img src="image/livro_02.jpg">
    </div>

    <div class="featurde_book_tag">
    <h2>Livros em Destaques</h2>
        <p class="writer">Jhon Hansen</p>
        <div class="categories">Ação,Crime,Fantasia</div>
        <p class="preço_do_livro">R$31.99<sub><del>R$55,00</del></sub></p>
        <br>

        <a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
    </div>               

    </div>


    <div class="featured_book_card">

    <div class="featurde_book_img">
    <img src="image/livro_3.jpg">
    </div>

    <div class="featurde_book_tag">
    <h2>Livros em Destaques</h2>
        <p class="writer">John Deo</p>
        <div class="categories">Suspense, Terror, Romance</div>
        <p class="preço_do_livro">R$37.99<sub><del>R$48.60</del></sub></p>
        <br>

        <a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
    </div>               

    </div>

    <div class="featured_book_card">

    <div class="featurde_book_img">
    <img src="image/livro_4.jpg">
    </div>

    <div class="featurde_book_tag">
    <h2>Livros em Destaques</h2>
        <p class="writer">Akther</p>
        <div class="categories"> Comida , Saúde</div>
        <p class="preço_do_livro">R$27.99<sub><del>R148.30</del></sub></p>
        <br>

        <a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
    </div>               

    </div>

    <div class="featured_book_card">

    <div class="featurde_book_img">
    <img src="image/livro_5.jpg">
    </div>

    <div class="featurde_book_tag">
    <h2>Livros em Destaques</h2>
        <p class="writer">Lucy Crehan</p>
        <div class="categories">Educacional</div>
        <p class="preço_do_livro">R$17.99<sub><del>R$08.60</del></sub></p>
        <br>

        <a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
    </div>               

    </div>

    <div class="featured_book_card">

    <div class="featurde_book_img">
    <img src="image/livro_6.jpg">
    </div>

    <div class="featurde_book_tag">
    <h2>Livros em Destaques</h2>
        <p class="writer">John Deo</p>
        <div class="categories">Suspense, Romance</div>
        <p class="preço_do_livro">R$57.99<sub><del>R$68,83</del></sub></p>
        <br>

        <a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
    </div>               

    </div>

    <div class="featured_book_card">

    <div class="featurde_book_img">
    <img src="image/livro_7.jpg">
    </div>

    <div class="featurde_book_tag">
    <h2>Livros em Destaques</h2>
        <p class="writer">John Deo</p>
        <div class="categories">Suspense, Terror, Romance</div>
        <p class="preço_do_livro">R$37.99<sub><del>R$48.60</del></sub></p>
        <br>

        <a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
    </div>               

    </div>

    <div class="featured_book_card">

    <div class="featurde_book_img">
    <img src="image/livro_8.jpg">
    </div>

    <div class="featurde_book_tag">
    <h2>Livros em Destaques</h2>
        <p class="writer">John Deo</p>
        <div class="categories">Suspense, Terror, Romance</div>
        <p class="preço_do_livro">R$37.99<sub><del>R$48.60</del></sub></p>
        <br>

        <a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
    </div>               

    </div>

    <div class="featured_book_card">

    <div class="featurde_book_img">
    <img src="image/livro_9.jpg">
    </div>

    <div class="featurde_book_tag">
    <h2>Livros em Destaques</h2>
        <p class="writer">John Deo</p>
        <div class="categories">Suspense, Terror, Romance</div>
        <p class="preço_do_livro">R$37.99<sub><del>R$48.60</del></sub></p>
        <br>

        <a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
    </div>               

    </div>

    <div class="featured_book_card">

    <div class="featurde_book_img">
    <img src="image/livro_10.jpg">
    </div>

    <div class="featurde_book_tag">
    <h2>Livros em Destaques</h2>
        <p class="writer">John Deo</p>
        <div class="categories">Suspense, Terror, Romance</div>
        <p class="preço_do_livro">R$37.99<sub><del>R$48.60</del></sub></p>
        <br>

        <a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
    </div>               

    </div>

    <div class="featured_book_card">

    <div class="featurde_book_img">
    <img src="image/livro_11.jpg">
    </div>

    <div class="featurde_book_tag">
    <h2>Livros em Destaques</h2>
        <p class="writer">John Deo</p>
        <div class="categories">Suspense, Terror, Romance</div>
        <p class="preço_do_livro">R$37.99<sub><del>R$48.60</del></sub></p>
        <br>

        <a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
    </div>               

    </div>

    <div class="featured_book_card">

    <div class="featurde_book_img">
    <img src="image/livro_12.jpg">
    </div>

    <div class="featurde_book_tag">
    <h2>Livros em Destaques</h2>
        <p class="writer">John Deo</p>
        <div class="categories">Suspense, Terror, Romance</div>
        <p class="preço_do_livro">R$37.99<sub><del>R$48.60</del></sub></p>
        <br>

        <a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
    </div>               

    </div>

    <div class="featured_book_card">

    <div class="featurde_book_img">
    <img src="image/livro_13.jpg">
    </div>

    <div class="featurde_book_tag">
    <h2>Livros em Destaques</h2>
        <p class="writer">John Deo</p>
        <div class="categories">Suspense, Terror, Romance</div>
        <p class="preço_do_livro">R$37.99<sub><del>R$48.60</del></sub></p>
        <br>

        <a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
    </div>               

    </div>

    <div class="featured_book_card">

    <div class="featurde_book_img">
    <img src="image/livro_14.jpg">
    </div>

    <div class="featurde_book_tag">
    <h2>Livros em Destaques</h2>
        <p class="writer">John Deo</p>
        <div class="categories">Suspense, Terror, Romance</div>
        <p class="preço_do_livro">R$37.99<sub><del>R$48.60</del></sub></p>
        <br>
        <a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
    </div>               

    </div>

    <div class="featured_book_card">

    <div class="featurde_book_img">
    <img src="image/livro_15.jpg">
    </div>

    <div class="featurde_book_tag">
    <h2>Livros em Destaques</h2>
        <p class="writer">John Deo</p>
        <div class="categories">Suspense, Terror, Romance</div>
        <p class="preço_do_livro">R$37.99<sub><del>R$48.60</del></sub></p>
        <br>
        <<a href="Index_carrinho.php" class="f_btn">Tenho Interesse</a>
    </div>               

    </div>


        </div>
    <br></br>
    <br></br>
    <br></br>
        <div class="arrivals">
        
        <h1 id="novidades">Recém Chegados</h1>
        

            <div class="arrivals_box">

                <div class="arrivals_card">
                    <div class="arrivals_image">
                        <img src="image/N_livr_1.jpg" >
                    </div>
                    <div class="arrivals_tag">
                    <p> Recém Chegado </p>
                    <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="Index_carrinho.php" class="arrivals_btn"> Tenho Interesse </a>
                    </div>
                </div>

                <div class="arrivals_card">
                    <div class="arrivals_image">
                        <img src="image/N_livr_2.jpg" >
                    </div>
                    <div class="arrivals_tag">
                    <p> Recém Chegado </p>
                    <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="Index_carrinho.php" class="arrivals_btn"> Tenho Interesse </a>
                    </div>
                </div>

                <div class="arrivals_card">
                    <div class="arrivals_image">
                        <img src="image/N_livr_3.jpg" >
                    </div>
                    <div class="arrivals_tag">
                    <p> Recém Chegado </p>
                    <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="Index_carrinho.php" class="arrivals_btn"> Tenho Interesse </a>
                    </div>
                </div>

                <div class="arrivals_card">
                    <div class="arrivals_image">
                        <img src="image/N_livr_4.jpg" >
                    </div>
                    <div class="arrivals_tag">
                    <p> Recém Chegado </p>
                    <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="Index_carrinho.php" class="arrivals_btn"> Tenho Interesse </a>
                    </div>
                </div>

                <div class="arrivals_card">
                    <div class="arrivals_image">
                        <img src="image/N_livr_5.jpg" >
                    </div>
                    <div class="arrivals_tag">
                    <p> Recém Chegado </p>
                    <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="Index_carrinho.php" class="arrivals_btn"> Tenho Interesse </a>
                    </div>
                </div>

                <div class="arrivals_card">
                    <div class="arrivals_image">
                        <img src="image/N_livr_6.jpg" >
                    </div>
                    <div class="arrivals_tag">
                    <p> Recém Chegado </p>
                    <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="Index_carrinho.php" class="arrivals_btn"> Tenho Interesse </a>
                    </div>
                </div>

                <div class="arrivals_card">
                    <div class="arrivals_image">
                        <img src="image/N_livr_7.jpg" >
                    </div>
                    <div class="arrivals_tag">
                    <p> Recém Chegado </p>
                    <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="Index_carrinho.php" class="arrivals_btn"> Tenho Interesse </a>
                    </div>
                </div>

                <div class="arrivals_card">
                    <div class="arrivals_image">
                        <img src="image/N_livr_8.jpg" >
                    </div>
                    <div class="arrivals_tag">
                    <p> Recém Chegado </p>
                    <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="Index_carrinho.php" class="arrivals_btn"> Tenho Interesse </a>
                    </div>
                </div>

                <div class="arrivals_card">
                    <div class="arrivals_image">
                        <img src="image/N_livr_9.jpg" >
                    </div>
                    <div class="arrivals_tag">
                    <p> Recém Chegado </p>
                    <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="Index_carrinho.php" class="arrivals_btn"> Tenho Interesse </a>
                    </div>
                </div>

                <div class="arrivals_card">
                    <div class="arrivals_image">
                        <img src="image/N_livr_10.jpg" >
                    </div>
                    <div class="arrivals_tag">
                    <p> Recém Chegado </p>
                    <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="Index_carrinho.php" class="arrivals_btn"> Tenho Interesse </a>
                    </div>
                </div>

            </div>


        </div>

     





    </body>
    </html>
