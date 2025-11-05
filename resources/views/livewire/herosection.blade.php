<div class="mxd-section mxd-hero-section padding-pre-stack">
    <div class="mxd-hero-04">
        <div class="mxd-hero-04__wrap overflow-hidden loading-wrap">
            <div class="container-fluid p-0">
                <div class="row g-0 flex-column flex-xl-row">
                    <div class="col-12 col-xl-3 order-2 order-xl-1 mxd-hero-04__left mxd-grid-item no-margin">
                        <div class="mxd-hero-04__imageblock loading__item">
                            <div class="hero-04-imageblock__btn">
                                <a class="btn btn-round btn-round-medium btn-base slide-right-up anim-no-delay"
                                    href="https://docs.google.com/document/d/1EYAETVr18J0m0I1FbW2EVdvKeLY2f-4x/edit?usp=sharing&ouid=106065304015807484478&rtpof=true&sd=true">
                                    <i class="ph-bold ph-arrow-up-right"></i>
                                </a>
                            </div>

                            <p>Baixar CV</p>
                        </div>
                        <div class="mxd-hero-04__aboutblock loading__item">
                            <p>Minha dedicação e organização são a base para um aprendizado eficiente. Busco uma vaga
                                onde possa desenvolver minhas habilidades e auxiliar a equipe.</p>
                        </div>
                    </div>
                    <div class="col-12 col-xl-9 order-1 order-xl-2 mxd-hero-04__right mxd-grid-item no-margin">
                        <div class="mxd-hero-04__headline">
                            <!-- title text -->
                            <h1 class="hero-04-title">
                                <span class="hero-04-title__row loading__item">
                                    <em class="hero-04-title__item">Foco, Ação e o</em>
                                </span>
                                <span class="hero-04-title__row loading__item">
                                    <em class="hero-04-title__item title-item-image">
                                        <svg class="mxd-pulse" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M19.6,9.6h-3.9c-.4,0-1.8-.2-1.8-.2-.6,0-1.1-.2-1.6-.6-.5-.3-.9-.8-1.2-1.2-.3-.4-.4-.9-.5-1.4,0,0,0-1.1-.2-1.5V.4c0-.2-.2-.4-.4-.4s-.4.2-.4.4v4.4c0,.4-.2,1.5-.2,1.5,0,.5-.2,1-.5,1.4-.3.5-.7.9-1.2,1.2s-1,.5-1.6.6c0,0-1.2,0-1.7.2H.4c-.2,0-.4.2-.4.4s.2.4.4.4h4.1c.4,0,1.7.2,1.7.2.6,0,1.1.2,1.6.6.4.3.8.7,1.1,1.1.3.5.5,1,.6,1.6,0,0,0,1.3.2,1.7v4.1c0,.2.2.4.4.4s.4-.2.4-.4v-4.1c0-.4.2-1.7.2-1.7,0-.6.2-1.1.6-1.6.3-.4.7-.8,1.1-1.1.5-.3,1-.5,1.6-.6,0,0,1.3,0,1.8-.2h3.9c.2,0,.4-.2.4-.4s-.2-.4-.4-.4h0Z" />
                                        </svg>
                                    </em>
                                    <em class="hero-04-title__item">Próximo Nível</em>
                                </span>
                            </h1>
                        </div>
                        <div class="mxd-hero-04__descr">
                            <div class="mxd-paragraph__lists">
                                <div class="container-fluid p-0">
                                    <div class="row g-0">
                                        <div class="col-6 col-xl-5 loading__item">
                                            <ul>
                                                <li>
                                                    <p class="t-small">Habilidades Técnicas</p>
                                                </li>
                                                <li>
                                                    <p class="t-small">Pacote Office</p>
                                                </li>
                                                <li>
                                                    <p class="t-small">Programação</p>
                                                </li>
                                                <li>
                                                    <p class="t-small">Inteligencia Articial</p>
                                                </li>
                                                <li>
                                                    <p class="t-small">Gestão de tempo</p>
                                                </li>
                                                <li>
                                                    <p class="t-small">Organização</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 col-xl-5 loading__item">
                                            <ul>
                                                <li>
                                                    <p class="t-small">Qualidades Pessoais</p>
                                                </li>
                                                <li>
                                                    <p class="t-small">Proatividade</p>
                                                </li>
                                                <li>
                                                    <p class="t-small">Comunicação</p>
                                                </li>
                                                <li>
                                                    <p class="t-small">Aprendizado Rápido</p>
                                                </li>
                                                <li>
                                                    <p class="t-small">Trabalho em Equipe</p>
                                                </li>
                                                <li>
                                                    <p class="t-small">Disciplina</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $habilidades = [
                            'Comunicação',
                            'Dedicação',
                            'Disciplina',
                            'Proatividade',
                            'Organização',
                            'Gestão De Tempo',
                            'Aprendizado Rápido',
                            'Trabalho em Equipe',
                            'Pacote Office',
                            'Programação',
                            'Inteligencia Artificial',
                        ];
                    @endphp
                    <div class="col-12 order-3 mxd-hero-04__marquee mxd-grid-item">
                        <div class="hero-04-marquee">
                            <div class="marquee marquee-right--gsap">
                                <div class="marquee__toright marquee-flex">
                                    @foreach ($habilidades as $habilidade)
                                        <div class="marquee__item item-regular text">
                                            {{-- O nome da habilidade é injetado aqui --}}
                                            <p>{{ $habilidade }}</p>

                                            {{-- O SVG permanece, pois ele é o mesmo para todos os itens --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 20 20">
                                                <path
                                                    d="M19.6,9.6h-3.9c-.4,0-1.8-.2-1.8-.2-.6,0-1.1-.2-1.6-.6-.5-.3-.9-.8-1.2-1.2-.3-.4-.4-.9-.5-1.4,0,0,0-1.1-.2-1.5V.4c0-.2-.2-.4-.4-.4s-.4.2-.4.4v4.4c0,.4-.2,1.5-.2,1.5,0,.5-.2,1-.5,1.4-.3.5-.7.9-1.2,1.2s-1,.5-1.6.6c0,0-1.2,0-1.7.2H.4c-.2,0-.4.2-.4.4s.2.4.4.4h4.1c.4,0,1.7.2,1.7.2.6,0,1.1.2,1.6.6.4.3.8.7,1.1,1.1.3.5.5,1,.6,1.6,0,0,0,1.3.2,1.7v4.1c0,.2.2.4.4.4s.4-.2.4-.4v-4.1c0-.4.2-1.7.2-1.7,0-.6.2-1.1.6-1.6.3-.4.7-.8,1.1-1.1.5-.3,1-.5,1.6-.6,0,0,1.3,0,1.8-.2h3.9c.2,0,.4-.2.4-.4s-.2-.4-.4-.4h0Z" />
                                            </svg>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
