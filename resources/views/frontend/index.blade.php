@extends('frontend.layouts.app')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" />
@endsection

@section('title', app_name() . ' | ' . __('navs.general.home'))
@section('content')
    <header id="header001">
        <div class="inv"></div>
        <div class="head1">
            <div class="navbar navbar-light bg-white testt">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent15">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="textHeader">Romain Verwaerde</p>
            <p class="textHeader">Dévellopeur web</p>
        </div>
    </header>
    <aside>
        <nav>
            <a class="lienNav te" href="#header001">
                <img class="imgProfil" src="{{ asset ('../img/frontend/profil.jpg')}}" alt="">
            </a>

            <a class="lienNav" href="#presentation">A propos</a>

            <a class="lienNav" href="#site">Mes Projets</a>

            <a class="lienNav" href="#footer001">Contact</a>
            @include('includes.partials.messages')

            <h4>Linkedin :</h4>
            <a class="iconLinkedin lienNav" href="https://www.linkedin.com/in/romain-verwaerde/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
        </nav>
    </aside>

    <div class="containerMainFooter">
        <main>
            <section id="presentation" >
                <h2>Présentation</h2>
                <div class="divItem">
                    <h3>Qui suis je</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, quis voluptatum? Dolore maiores in sequi incidunt dicta magnam quae amet. Quam cumque voluptate mollitia consequuntur aliquid iure vitae laudantium blanditiis rerum excepturi omnis illo, sed ad voluptas, nemo ipsum consequatur eum quod impedit aliquam sequi nulla? Quos, repudiandae. Asperiores, iste!</p>
                </div>
                <div class="divItem">
                    <h3>ce que je cherche</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus maiores laboriosam ab adipisci laborum blanditiis autem error, magni tenetur, dolor voluptatibus accusantium vitae ipsum cupiditate possimus alias neque maxime sint.</p>
                </div>
                <div class="divItem">
                    <h3>Formation</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat voluptatem quo dolor commodi exercitationem illo soluta sit. Excepturi dolorum ullam, laboriosam eligendi fugit illum eos impedit itaque exercitationem nihil autem unde quas saepe ex aliquid quo officia rerum optio placeat sapiente repudiandae quod? Qui expedita culpa ad perferendis excepturi eos doloribus eum vel? Quidem unde, enim a perspiciatis fuga iure dolorem veritatis perferendis commodi laborum?</p>
                </div>
                <div class="divItem">
                    <h3>Emploi</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A ab id maxime placeat expedita eaque neque et dolores porro est!</p>
                </div>
                <div class="divItem">
                    <h3>Mes spécialitées</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veniam ducimus quidem non earum commodi itaque, exercitationem natus neque tenetur architecto porro deleniti cumque error eos? Laborum doloribus animi modi.</p>
                </div>
                <div class="divItem">
                    <h3>Hobby</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil alias provident voluptas laudantium totam soluta!</p>
                </div>
            </section>

            <section class="siteItem" id="site">
                <h2>Sites</h2>
                <div class="divItem">
                    <h3>Zen Et Beauté</h3>
                    <a href="https://zenetbeaute.dauba.net/" target="_blank"><img class="imgSite" src="{{ asset ('../img/frontend/zenetbeaute.jpg')}}" alt=""></a>
                </div>
            </section>
        </main>
        <footer>
            <section class="sectionFooter" id="footer001">
                <h2> Me contacter</h2>
                <div class="divItem">
                    {{ html()->form('POST', route('frontend.contact.send'))->open() }}
                        {{ html()->label(__('validation.attributes.frontend.last_name'))->for('last_name') }}
                        {{ html()->text('last_name', optional(auth()->user())->last_name)
                            ->class('form-control')
                            ->placeholder(__('validation.attributes.frontend.last_name'))
                            ->attribute('maxlength', 191)
                            ->required()
                            }}
                        {{ html()->label(__('validation.attributes.frontend.first_name'))->for('first_name') }}
                        {{ html()->text('first_name', optional(auth()->user())->first_name)
                            ->class('form-control')
                            ->placeholder(__('validation.attributes.frontend.first_name'))
                            ->attribute('maxlength', 191)
                            ->required()
                            }}
                        {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}
                        {{ html()->email('email', optional(auth()->user())->email)
                            ->class('form-control')
                            ->placeholder(__('validation.attributes.frontend.email'))
                            ->attribute('maxlength', 191)
                            ->required() }}
                        {{ html()->label(__('validation.attributes.frontend.subject'))->for('subject') }}
                        {{ html()->text('subject')
                            ->class('form-control')
                            ->placeholder(__('validation.attributes.frontend.subject'))
                            ->attribute('maxlength', 191)
                            ->required() }}
                        {{ html()->label(__('validation.attributes.frontend.message'))->for('message') }}
                        {{ html()->textarea('message')
                            ->class('form-control')
                            ->placeholder(__('validation.attributes.frontend.message'))
                            ->attribute('rows', 3)
                            ->required() }}
                        {{ form_submit(__('labels.frontend.contact.button')) }}
                    {{ html()->form()->close() }}
                    </div>
                    <div class="divItem">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus blanditiis itaque cupiditate doloremque error, fugiat maiores commodi dolores. Repellat voluptas hic harum soluta omnis facilis at incidunt laudantium iure iste!
                    </div>
            <section>
        </footer>
    </div>
@endsection
