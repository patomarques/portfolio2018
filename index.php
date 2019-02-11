<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package patomarques
 */

get_header();
?>
    <section id="home" class="dark particles-bg">
        <div class="slide-wrap">
            <div class="slide-content"><i class="fa fa-lg fa-facebook"></i></h6>
                <div class="container">
                    <h2 class="logo-home">Pato Marqués</h2>

                    <div id="text-rotator" class="flexslider mt-15 mb-15">
                        <ul class="slides">
                            <li>
                                <h2 class="text-work upper fw-400">< Desenvolvedor Front-End /></h2>
                            </li>
                            <li>
                                <h2 class="text-work upper fw-400">{ Desenvolvedor Back-end; }</h2>
                            </li>
                            <li>
                                <h2 class="text-work upper fw-400">[Desenvolvedor Wordpress]</h2>
                            </li>
                        </ul>
                    </div>
                    <ul class="social-list">
                        <li>
                            <a target="_blank" href="https://github.com/patomarques" class="mdi mdi-github-circle btn-tippy" title="Github"></a>
                        </li>
                        <li>
                            <a target="_blank" href="#" class="mdi mdi-twitter btn-tippy" title="Twitter: @patomarqs"></a>
                        </li>
                        <li>
                            <a target="_blank" href="#" class="mdi mdi-telegram btn-tippy" title="Telegram: @patomarques"></a>
                        </li>
                        <li>
                            <a target="_blank" href="#" class="mdi mdi-telegram btn-tippy" title="Email: patoxmarques@gmail.com"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<!--    <section id="sobre-mim">-->
<!--        <div class="container">-->
<!--            <div class="title center"><img src="--><?php //echo get_template_directory_uri(); ?><!--/custom/img/origami.svg" class="icon-origami"/>-->
<!--                <h3 class="title-section">Sobre Mim</h3>-->
<!--                <hr>-->
<!--            </div>-->
<!--            <div class="section-content text-center">-->
<!--                <div class="row">-->
<!--                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">-->
<!--                        <div class="photo-me">-->
<!--                            <img src="--><?php //echo get_template_directory_uri(); ?><!--/custom/img/yo.jpg" alt="Pato Marques">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-7 col-lg-offset-2">-->
<!--                        <p class="text-base">Olá, me chamo Pato Marques, tenho --><?//= calculateAte() ?><!-- anos. Sou vegan, ando de bike, desenvolvo pra web e moro em Recife-PE. </p>-->
<!--                        <p class="text-base">Estudei Sistemas de informação, na Universidade Joaquim Nabuco. Trabalhei em algumas fábricas de software, agências de publicidade & como webdev freelancer.</p>-->
<!--                        <p class="text-base">Tenho conhecimentos no desenvolvimento de sites e aplicações web, com experiência como back-end & front-end;</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!---->
<!--    <section id="services" class="bg-red-orange">-->
<!--        <div class="container">-->
<!--            <div class="title center"><i class="icon-briefcase"></i>-->
<!--                <h3>Eu desenvolvo<span class="red-dot"></span><span class="red-dot"></span><span class="red-dot"></span></h3>-->
<!--                <hr>-->
<!--            </div>-->
<!--            <div class="section-content">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-10 col-md-offset-1">-->
<!--                        <div data-options="{&quot;items&quot;: 2, &quot;autoplay&quot;: true, &quot;margin&quot;: 30, &quot;mdItems&quot;: 2}" class="owl-carousel">-->
<!--                            <div class="item">-->
<!--                                <div class="icon-box-small boxed mb-25 mt-25"><i class="icon-dial"></i>-->
<!--                                    <h4>Sites Responsivos</h4>-->
<!--                                    <p>Sed laborum voluptatem optio, minima placeat quaerat laboriosam cupiditate, magni aut accusamus iusto voluptatum consectetur nostrum ipsum.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <div class="icon-box-small boxed mb-25 mt-25"><i class="icon-layers"></i>-->
<!--                                    <h4>Lojas Virtuais</h4>-->
<!--                                    <p>Sed laborum voluptatem optio, minima placeat quaerat laboriosam cupiditate, magni aut accusamus iusto voluptatum consectetur nostrum ipsum.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <div class="icon-box-small boxed mb-25 mt-25"><i class="icon-pricetags"></i>-->
<!--                                    <h4>PSD para Código</h4>-->
<!--                                    <p>Sed laborum voluptatem optio, minima placeat quaerat laboriosam cupiditate, magni aut accusamus iusto voluptatum consectetur nostrum ipsum.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <div class="icon-box-small boxed mb-25 mt-25"><i class="icon-pricetags"></i>-->
<!--                                    <h4>Analise & Segurança</h4>-->
<!--                                    <p>Sed laborum voluptatem optio, minima placeat quaerat laboriosam cupiditate, magni aut accusamus iusto voluptatum consectetur nostrum ipsum.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <div class="icon-box-small boxed mb-25 mt-25"><i class="icon-pricetags"></i>-->
<!--                                    <h4>Temas & Plugins (wordpress)</h4>-->
<!--                                    <p>Sed laborum voluptatem optio, minima placeat quaerat laboriosam cupiditate, magni aut accusamus iusto voluptatum consectetur nostrum ipsum.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    <section id="experience">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-xs-12 col-sm-12 col-lg-12">-->
<!--                    <div class="title center"><i class="icon-briefcase"></i>-->
<!--                        <h3>Trabalhos<span class="red-dot"></span><span class="red-dot"></span><span class="red-dot"></span></h3>-->
<!--                        <hr>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-10 col-md-offset-1">-->
<!--                    <ul class="timeline">-->
<!--                        <li>-->
<!--                            <div class="timeline-item">-->
<!--                                <h4>Idealizza</h4><span>Mar 2018 - <b>Atualmente</b></span>-->
<!--                            </div>-->
<!--                            <div class="timeline-description">-->
<!--                                <h4>Web Dev Fullstack</h4>-->
<!--                                <p>Quisquam eveniet reprehenderit quis recusandae voluptatem debitis corrupti hic dolorum ut commodi vero ab quasi nisi sit dolor officiis numquam, aspernatur fugiat!</p>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <div class="timeline-item">-->
<!--                                <h4>Freelancer</h4><span>Junho 2013 - <b>Março 2018</b></span>-->
<!--                            </div>-->
<!--                            <div class="timeline-description">-->
<!--                                <h4>Desenvolvedor Web </h4>-->
<!--                                <p>Quisquam eveniet reprehenderit quis recusandae voluptatem debitis corrupti hic dolorum ut commodi vero ab quasi nisi sit dolor officiis numquam, aspernatur fugiat!</p>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <div class="timeline-item">-->
<!--                                <h4>Corptech</h4><span>Abril 2011 - <b>Abril 2013</b></span>-->
<!--                            </div>-->
<!--                            <div class="timeline-description">-->
<!--                                <h4>Desenvolvedor Backend</h4>-->
<!--                                <p>Quisquam eveniet reprehenderit quis recusandae voluptatem debitis corrupti hic dolorum ut commodi vero ab quasi nisi sit dolor officiis numquam, aspernatur fugiat!</p>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    <section id="skills" class="dark">-->
<!--        <div class="container">-->
<!--            <div class="title center">-->
<!--                <h3>Habilidades<span class="red-dot"></span></h3>-->
<!--                <hr>-->
<!--            </div>-->
<!--            <div class="section-content">-->
<!--                <div class="row">-->
<!--                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">-->
<!--                        <div class="skill"><span class="skill-name">< html5 /></span><span class="skill-perc">75%</span>-->
<!--                            <div class="progress">-->
<!--                                <div role="progressbar" data-progress="75" class="progress-bar"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="skill"><span class="skill-name">.css3{ }</span><span class="skill-perc">55%</span>-->
<!--                            <div class="progress">-->
<!--                                <div role="progressbar" data-progress="55" class="progress-bar"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="skill"><span class="skill-name">js;</span><span class="skill-perc">60%</span>-->
<!--                            <div class="progress">-->
<!--                                <div role="progressbar" data-progress="60" class="progress-bar"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="skill"><span class="skill-name">php 7+</span><span class="skill-perc">80%</span>-->
<!--                            <div class="progress">-->
<!--                                <div role="progressbar" data-progress="80" class="progress-bar"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="skill"><span class="skill-name">SQL / DBA</span><span class="skill-perc">70%</span>-->
<!--                            <div class="progress">-->
<!--                                <div role="progressbar" data-progress="70" class="progress-bar"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="skill"><span class="skill-name">Gateway's de pagamentos (Api / Rest)</span><span class="skill-perc">75%</span>-->
<!--                            <div class="progress">-->
<!--                                <div role="progressbar" data-progress="75" class="progress-bar"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">-->
<!--                        <div class="skill"><span class="skill-name">Wordpress</span><span class="skill-perc">85%</span>-->
<!--                            <div class="progress">-->
<!--                                <div role="progressbar" data-progress="85" class="progress-bar"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="skill"><span class="skill-name">Laravel 5+</span><span class="skill-perc">65%</span>-->
<!--                            <div class="progress">-->
<!--                                <div role="progressbar" data-progress="65" class="progress-bar"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="skill"><span class="skill-name">Bootstrap</span><span class="skill-perc">80%</span>-->
<!--                            <div class="progress">-->
<!--                                <div role="progressbar" data-progress="80" class="progress-bar"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="skill"><span class="skill-name">Vue.js</span><span class="skill-perc">55%</span>-->
<!--                            <div class="progress">-->
<!--                                <div role="progressbar" data-progress="55" class="progress-bar"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="skill"><span class="skill-name">Design Responsivo</span><span class="skill-perc">80%</span>-->
<!--                            <div class="progress">-->
<!--                                <div role="progressbar" data-progress="80" class="progress-bar"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="skill"><span class="skill-name">E-commerce</span><span class="skill-perc">75%</span>-->
<!--                            <div class="progress">-->
<!--                                <div role="progressbar" data-progress="75" class="progress-bar"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!---->
<!--    <section id="technologies">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-xs-12 col-sm-12">-->
<!--                    <h3>Tecnologias <small>que uso</small></h3>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12">-->
<!--                    <ul>-->
<!--                        <li>html5</li>-->
<!--                        <li>css3</li>-->
<!--                        <li>js </li>-->
<!--                        <li>responsive design</li>-->
<!--                        <li></li>-->
<!--                        <li></li>-->
<!--                        <li></li>-->
<!--                        <li></li>-->
<!--                    </ul>>span-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    <section id="contact">-->
<!--        <div class="container">-->
<!--            <div class="title center"><i class="icon-envelope"></i>-->
<!--                <h3>Contato<span class="red-dot"></span></h3>-->
<!--                <hr>-->
<!--            </div>-->
<!--            <div class="section-content">-->
<!--                <div class="row">-->
<!--                    <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">-->
<!--                        --><?php //echo do_shortcode("[contact-form-7 id=\"29\" title=\"Formulário de contato 1\"]"); ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<!--    <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>-->
<?php
get_footer();
