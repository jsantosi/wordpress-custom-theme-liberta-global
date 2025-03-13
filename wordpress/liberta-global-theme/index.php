<?php get_header(); ?>

<section class="introducao" style="background-image: url('<?php the_field('imagem_fundo_introducao'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-7 text-left pt-3 mt-5">
                <h1><?php the_field('titulo_principal'); ?></h1>
                <h3><?php the_field('texto_introducao'); ?></h3>
                <p><a href="<?php the_field('link_botao_comecar'); ?>" class="btn btn-custom p-3 btn-primary-lg text-uppercase"><?php the_field('texto_botao_comecar'); ?></a></p>
            </div>
        </div>
    </div>
</section>

<section class="produtos py-5">
    <div class="container produto-container">
        <div id="produtoCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <?php
                $produtos = get_field('produtos_carousel');

                if( $produtos ):
                    $i = 0;
                    $num_produtos = count($produtos); 
                    while( $i < $num_produtos ):
                        $active_class = ($i == 0) ? 'active' : '';
                        ?>

                        <div class="carousel-item <?php echo $active_class; ?>">
                            <div class="row">
                                <?php
                                for ($j = 0; $j < 3; $j++):
                                    $produto_index = $i + $j; 

                                    if (isset($produtos[$produto_index])):
                                        $produto = $produtos[$produto_index];
                                        ?>
                                        <div class="col-md-4">
                                            <div class="card card-produto h-100 pb-4">
                                                <img src="<?php echo esc_url($produto['imagem_produto']['url']); ?>" class="card-img-top" alt="<?php echo esc_attr($produto['imagem_produto']['alt']); ?>">
                                                <div class="card-body text-center">
                                                    <h3 class="card-title text-dark"><?php echo esc_html($produto['titulo_produto']); ?></h3>
                                                    <p class="card-text"><?php echo esc_html($produto['descricao_produto']); ?></p>
                                                    <a href="<?php echo esc_url($produto['link_produto']); ?>" class="card-link-custom text-uppercase font-weight-bold">Saiba mais</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    else:
                                        echo '<div class="col-md-4"></div>';
                                    endif;
                                endfor;
                                ?>
                            </div>
                        </div>
                        <?php
                        $i += 3; 
                    endwhile;
                endif;
                ?>
            </div>

            <a class="carousel-control-prev" href="#produtoCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#produtoCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>
</section>

<section class="secao-ebook pb-5">
<img class="bgimg" src="<?php echo esc_url('https://project.dgin.com.br/wp-content/uploads/2025/03/candlesticks-1.png'); ?>" alt="candlesticks">
    <div class="container">
        <div class="row produto-apoio px-5">
            <div class="col-md-6 py-5 px-5">
                <img class="img-ipad mx-auto" src="<?php the_field('imagem_ebook'); ?>" alt="book">
                <div class="book px-5 text-center">
                    <?php the_field('titulo_ebook'); ?>
                    <a href="<?php the_field('link_download_ebook'); ?>" class="book-link text-uppercase"><i class="font-weight-bold bi bi-download "></i>
                        <?php the_field('texto_link_download'); ?></a>
                </div>
            </div>
            <div class="col-md-6 py-5 px-5 mt-5 pt-5 text-white">
                <?php the_field('titulo_secao_conheca'); ?>
                <?php the_field('texto_conheca_liberta'); ?>
            </div>
        </div>
    </div>
</section>

<img class="bg-elipse" src="https://project.dgin.com.br/wp-content/uploads/2025/03/Ellipse-14.png" alt="elipse">
        <section class="foco py-5">
            <div class="container">
                <h2 class="text-center mb-4 text-center">Nosso <b>foco</b></h2>
                <div class="row mt-5">
                    <div class="col-md-4 mb-4 p-5 my-auto mx-auto item-foco">
                        <img class="pb-4" src="https://project.dgin.com.br/wp-content/uploads/2025/03/candle-graph.png" alt="Educação Financeira">
                        <p><b>Educação financeira e investimentos</b> em mercados globais</p>
                    </div>
                    <div class="col-md-4 mb-4 p-5 my-auto mx-auto item-foco">
                        <img class="pb-4" src="https://project.dgin.com.br/wp-content/uploads/2025/03/medalha.png" alt="Pioneiros">
                        <p><b>Pioneiros</b> em educação financeira para atletas profissionais</p>
                    </div>
                    <div class="col-md-4 mb-4 p-5 my-auto mx-auto item-foco">
                        <img class="pb-4" src="https://project.dgin.com.br/wp-content/uploads/2025/03/Papo-Global.png" alt="Papo Global">
                        <p><b>Papo Global</b> - Nosso programa no Youtube toda semana</p>
                    </div>
                    <div class="col-md-4 mb-4 p-5 my-auto mx-auto item-foco">
                        <img class="pb-4" src="https://project.dgin.com.br/wp-content/uploads/2025/03/podcast.png" alt="LibertaCast">
                        <p><b>LibertaCast</b>, o podcast com os maiores especialistas do mercado global</p>
                    </div>
                    <div class="col-md-4 mb-4 p-5 my-auto mx-auto item-foco">
                        <img class="pb-4" src="https://project.dgin.com.br/wp-content/uploads/2025/03/assinatura.png" alt="Assinatura exclusiva">
                        <p>Serviços de <b>assinatura exclusiva</b></p>
                    </div>
                    <div class="col-md-4 mb-4 p-5 my-auto mx-auto item-foco">
                        <img class="pb-4" src="https://project.dgin.com.br/wp-content/uploads/2025/03/curso.png" alt="Novo Curso">
                        <p><b>Novos cursos</b> para te atender</p>
                    </div>
                    <div class="col-md-4 mb-4 p-5 my-auto mx-auto item-foco">
                        <img class="pb-4" src="https://project.dgin.com.br/wp-content/uploads/2025/03/mercado-financeiro.png" alt="Mercado Financeiro">
                        <p><b>Nova linguagem</b> para o mercado financeiro</p>
                    </div>
                    <div class="col-md-4 mb-4 p-5 my-auto mx-auto item-foco">
                        <img class="pb-4" src="https://project.dgin.com.br/wp-content/uploads/2025/03/patrocinio.png" alt="Patrocínio">
                        <p>Patrocinador pontual da <b>Seleção Brasileira de basquete no Pré-Olímpico</b></p>
                    </div>
                    <div class="col-md-4 mb-4 my-auto mx-auto item-foco">
                        <p class="font-weight-bold w-50"><a href="#">
                                <u>Faça parte agora mesmo</u>
                            </a></p>
                        <a href="#" class="btn btn-custom-bg p-3 btn-primary-lg text-uppercase">Comece agora</a>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <img class="bg-elipse2" src="https://project.dgin.com.br/wp-content/uploads/2025/03/Ellipse-15.png" alt="elipse">
        <div class="container tablet-container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <img src="https://project.dgin.com.br/wp-content/uploads/2025/03/mockups-1.png" alt="Tablet and Phone" class="ensinar-image">
                </div>
            </div>
        </div>

        <section class="ensinar-section">
            <div class="container  mt-5 py-2 mb-5">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="ensinar-content">
                            <h2 class="ensinar-title">O que queremos <b>te ensinar</b></h2>
                            <ul class="ensinar-list">
                                <li><b>Analise</b> técnica e fundamentalista</li>
                                <li>Como achar as <b>melhores ações e ETFs</b></li>
                                <li><b>Macroeconomia e microeconomia</b></li>
                                <li><b>Psicologia e neurociência</b> do investidor</li>
                                <li>Filosofia para alcançar <b>liberdade financeira</b></li>
                                <li>Investimentos alternativos como criptomoedas</li>
                                <li><b>Preservação e crescimento de capital</b></li>
                                <li>Dolarização de patrimônio e <b>renda em dólar</b></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

<?php get_footer(); ?>