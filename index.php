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
    <!-- Home Section-->
    <section id="home" class="dark particles-bg">
        <div class="slide-wrap">
            <div class="slide-content"><i class="fa fa-lg fa-facebook"></i></h6>
                <div class="container">
                    <h3 class="mb-0">Olá, me chamo Pato Marques e trampo como... </h3>

                    <div id="text-rotator" class="flexslider mt-15 mb-15">
                        <ul class="slides">
                            <li>
                                <h2 class="text-work upper fw-400">Desenvolvedor Front-End<span class="red-dot dot-gray"></span></h2>
                            </li>
                            <li>
                                <h2 class="text-work upper fw-400">Desenvolvedor Back-end<span class="red-dot dot-gray"></span></h2>
                            </li>
                            <li>
                                <h2 class="text-work upper fw-400">Desenvolvedor Wordpress<span class="red-dot dot-gray"></span></h2>
                            </li>
                        </ul>
                    </div>
                    <ul class="social-list">
                        <li>
                            <a target="_blank" href="#" class="mdi mdi-github-circle btn-tippy" title="https://github.com/patomarques"></a>
                        </li>
                        <li>
                            <a target="_blank" href="#" class="mdi mdi-twitter btn-tippy" title="@patomarqs"></a>
                        </li>
<!--                        <li>-->
<!--                            <a target="_blank" href="#" class="mdi mdi-wordpress btn-tippy" title="Blog WP"></a>-->
<!--                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="sobre-mim">
        <div class="container">
            <div class="title center"><img src="<?php echo get_template_directory_uri(); ?>/custom/img/origami.svg" class="icon-origami"/>
                <h3>Sobre Mim<span class="red-dot"></span></h3>
                <hr>
            </div>
            <div class="section-content text-center">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                        <div class="photo-me">
                            <img src="<?php echo get_template_directory_uri(); ?>/custom/img/yo.jpg" alt="Pato Marques">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                        <p class="text-base">Tenho conhecimentos no desenvolvimento de sites e aplicações web que vão desde o planejamento até a implementação, com experiência tanto na parte do back-end quanto front-end;</p>
                        <p class="text-base">Escrever mais coisas a meu respeito profissional, talvez socialmente; Tenho preferencia e interesse em participar e desenvolver projetos firmezas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="dark">
        <div class="container">
            <div class="title center"><i class="icon-briefcase"></i>
                <h3>Eu desenvolvo<span class="red-dot"></span><span class="red-dot"></span><span class="red-dot"></span></h3>
                <hr>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div data-options="{&quot;items&quot;: 2, &quot;autoplay&quot;: true, &quot;margin&quot;: 30, &quot;mdItems&quot;: 2}" class="owl-carousel">
                            <div class="item">
                                <div class="icon-box-small boxed mb-25 mt-25"><i class="icon-dial"></i>
                                    <h4>Sites Responsivos</h4>
                                    <p>Sed laborum voluptatem optio, minima placeat quaerat laboriosam cupiditate, magni aut accusamus iusto voluptatum consectetur nostrum ipsum.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-box-small boxed mb-25 mt-25"><i class="icon-layers"></i>
                                    <h4>Lojas Virtuais</h4>
                                    <p>Sed laborum voluptatem optio, minima placeat quaerat laboriosam cupiditate, magni aut accusamus iusto voluptatum consectetur nostrum ipsum.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-box-small boxed mb-25 mt-25"><i class="icon-pricetags"></i>
                                    <h4>PSD para Código</h4>
                                    <p>Sed laborum voluptatem optio, minima placeat quaerat laboriosam cupiditate, magni aut accusamus iusto voluptatum consectetur nostrum ipsum.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-box-small boxed mb-25 mt-25"><i class="icon-pricetags"></i>
                                    <h4>Analise & Segurança</h4>
                                    <p>Sed laborum voluptatem optio, minima placeat quaerat laboriosam cupiditate, magni aut accusamus iusto voluptatum consectetur nostrum ipsum.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-box-small boxed mb-25 mt-25"><i class="icon-pricetags"></i>
                                    <h4>Temas & Plugins (wordpress)</h4>
                                    <p>Sed laborum voluptatem optio, minima placeat quaerat laboriosam cupiditate, magni aut accusamus iusto voluptatum consectetur nostrum ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="experience">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-item">
                                <h4>Idealizza</h4><span>Mar 2018 - <b>Atualmente</b></span>
                            </div>
                            <div class="timeline-description">
                                <h4>Web Dev Fullstack</h4>
                                <p>Quisquam eveniet reprehenderit quis recusandae voluptatem debitis corrupti hic dolorum ut commodi vero ab quasi nisi sit dolor officiis numquam, aspernatur fugiat!</p>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-item">
                                <h4>Freelancer</h4><span>Junho 2013 - <b>Março 2018</b></span>
                            </div>
                            <div class="timeline-description">
                                <h4>Desenvolvedor Web </h4>
                                <p>Quisquam eveniet reprehenderit quis recusandae voluptatem debitis corrupti hic dolorum ut commodi vero ab quasi nisi sit dolor officiis numquam, aspernatur fugiat!</p>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-item">
                                <h4>Corptech</h4><span>Abril 2011 - <b>Abril 2013</b></span>
                            </div>
                            <div class="timeline-description">
                                <h4>Desenvolvedor Backend</h4>
                                <p>Quisquam eveniet reprehenderit quis recusandae voluptatem debitis corrupti hic dolorum ut commodi vero ab quasi nisi sit dolor officiis numquam, aspernatur fugiat!</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="skills" class="dark">
        <div class="container">
            <div class="title center">
                <h3>Habilidades<span class="red-dot"></span></h3>
                <hr>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="skill"><span class="skill-name">< html5 /></span><span class="skill-perc">90%</span>
                            <div class="progress">
                                <div role="progressbar" data-progress="90" class="progress-bar"></div>
                            </div>
                        </div>
                        <div class="skill"><span class="skill-name">.css3{ }</span><span class="skill-perc">80%</span>
                            <div class="progress">
                                <div role="progressbar" data-progress="80" class="progress-bar"></div>
                            </div>
                        </div>
                        <div class="skill"><span class="skill-name">js;</span><span class="skill-perc">85%</span>
                            <div class="progress">
                                <div role="progressbar" data-progress="85" class="progress-bar"></div>
                            </div>
                        </div>
                        <div class="skill"><span class="skill-name">php 7+</span><span class="skill-perc">95%</span>
                            <div class="progress">
                                <div role="progressbar" data-progress="95" class="progress-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="skill"><span class="skill-name">Wordpress</span><span class="skill-perc">90%</span>
                            <div class="progress">
                                <div role="progressbar" data-progress="90" class="progress-bar"></div>
                            </div>
                        </div>
                        <div class="skill"><span class="skill-name">Laravel 5+</span><span class="skill-perc">35%</span>
                            <div class="progress">
                                <div role="progressbar" data-progress="35" class="progress-bar"></div>
                            </div>
                        </div>
                        <div class="skill"><span class="skill-name">fumá Maconha todo dia</span><span class="skill-perc">420%</span>
                            <div class="progress">
                                <div role="progressbar" data-progress="420" class="progress-bar"></div>
                            </div>
                        </div>
                        <div class="skill"><span class="skill-name">Andar de bike</span><span class="skill-perc">95%</span>
                            <div class="progress">
                                <div role="progressbar" data-progress="95" class="progress-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="title center"><i class="icon-envelope"></i>
                <h3>Contate Me<span class="red-dot"></span></h3>
                <hr>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="contact-form">
                            <form id="contact-form" method="POST" action="mail.php">
                                <div class="form-group">
                                    <input name="fullname" type="text" placeholder="Your Name" data-required="true" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" placeholder="Your Email" data-required="true" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input name="phone" type="text" placeholder="Phone Number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Message" data-required="true" class="form-control"></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-color">Enviar Mensagem</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
//get_sidebar();
get_footer();
