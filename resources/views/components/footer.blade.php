<div class="footer-main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="sb-footer-section">
                    <div class="footer-logo">
                        <img src="{{ asset('images/footer-logo.png') }}" alt="img">
                    </div>
                    <ul>
                        <li><a href="javascript:;"><i class="fas fa-map-marker-alt"></i>Endereço<br>
                                Endereço aqui</a>
                        </li>
                        <li><a href="javascript:;"><i class="fas fa-phone"></i>Telefone<br>
                                00000-0000, 00000-0000</a>
                        </li>
                        <li><a href="javascript:;"><i class="fas fa-envelope"></i>Email<br>
                                Nayara@example.com</a>
                        </li>
                        <li>
                            <ul class="footer-media">
                                <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                <div class="links">
                    <h4>Links de Navegação</h4>
                    <ul>
                        <li><a href="/"><i class="fas fa-angle-right"></i>Sobre Nós</a></li>
                        <li><a href="/"><i class="fas fa-angle-right"></i>Serviços</a></li>
                        <li><a href="/"><i class="fas fa-angle-right"></i>Galeria</a></li>
                        <li><a href="/"><i class="fas fa-angle-right"></i>Blog</a></li>
                        <li><a href="/"><i class="fas fa-angle-right"></i>Consultas</a></li>
                        <li><a href="/"><i class="fas fa-angle-right"></i>Contato</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <h4>Blogs Recentes</h4>
                <div class="img-link">
                    <ul>
                        <li>
                            <img src="{{ asset('images/post-img1.jpg') }}" alt="img">
                            <div class="content">
                                <h5 class="pb-0"><a href="/">Melhor Cirurgia</a></h5>
                                <p>Nossa melhor cirurgia<br>
                                    disponível aqui.
                                </p>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('images/post-img2.jpg') }}" alt="img">
                            <div class="content">
                                <h5 class="pb-0"><a href="/">Melhores Médicos</a></h5>
                                <p>Nossa melhor cirurgia<br>
                                    disponível aqui.
                                </p>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('images/post-img3.jpg') }}" alt="img">
                            <div class="content">
                                <h5 class="pb-0"><a href="/">Melhores Serviços</a></h5>
                                <p>Nossa melhor cirurgia<br>
                                    disponível aqui.
                                </p>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('images/post-img4.jpg') }}" alt="img">
                            <div class="content">
                                <h5 class="pb-0"><a href="/">Melhores Quartos</a></h5>
                                <p>Nossa melhor cirurgia<br>
                                    disponível aqui.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="time-wrapper">
                    <div>
                        <h4>Dias</h4>
                        <ul>
                            <li>Segunda-feira</li>
                            <li>Terça-feira</li>
                            <li>Quarta-feira</li>
                            <li>Quinta-feira</li>
                            <li>Sexta-feira</li>
                            <li>Sábado</li>
                            <li>Domingo</li>
                        </ul>
                    </div>
                    <div>
                        <h4>Horário de Abertura</h4>
                        <ul>
                            <li>08:00 - 10:00</li>
                            <li>09:00 - 11:00</li>
                            <li>10:00 - 12:00</li>
                            <li>11:00 - 13:00</li>
                            <li>12:00 - 14:00</li>
                            <li>13:00 - 14:00</li>
                            <li>14:00 - 16:00</li>
                        </ul>
                    </div>
                </div>
                <div id="newsletter">
                    <h5>Assine nossa Newsletter</h5>
                    <div class="input-box">
                        <input type="text" name="text" id="text" placeholder="Insira seu Email">
                        <a href="javascript:;">
                            <i class="fas fa-paper-plane"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <p>© Copyright 2024 - Todos os direitos reservados | Coida de IT Girl.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <p class="last-para">Política de Privacidade | Termos e Condições</p>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Fim da seção de rodapé -->
<!-- Painel Lateral -->
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/contact_form.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<!-- custom js-->
<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100,
        callback: function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    });
    wow.init();
</script>
<script>
    function actionToggleOne() {
        let action = document.querySelector('.contact-action');
        action.classList.toggle('open1');
    }

    function actionToggleTwo() {
        let action = document.querySelector('.action-1');
        action.classList.toggle('open2');
    }

    function actionToggleThree() {
        let action = document.querySelector('.action-2');
        action.classList.toggle('open3');
    }

    function actionToggleFour() {
        let action = document.querySelector('.action-3');
        action.classList.toggle('open4');
    }
</script>
