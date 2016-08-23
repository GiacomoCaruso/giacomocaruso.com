@extends('layout.main')

@section('styles')

<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/app.css">

@stop

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>

@stop

@section('content')
    <!--
    TODO:
    - make responsive for small devices;
    - write texts;
    - ScrollFire and fadeInUp for mobiles;
    - tidy code;
    -->
    <main>
      <div class="section header">
        <h1 class="center-align"><a id="title" href="/">Giacomo Caruso</a></h1>
      </div>
      <div class="section about">
        <div class="container">
          <div class="row">
            <div class="col s12 m6">
              <div class="card hoverable" id="personal">
                <div class="card-image">
                  <img src="https://s31.postimg.org/48y0yl17v/groningen_snow.jpg" alt="groningen-landscape">
                  <span class="card-title black-text">About me</span>
                </div>
                <div class="card-content">
                  <h5>Front-end web developer</h5>
                  <ul class="fa-ul">
                    <li><i class="material-icons tiny">place</i><a href="https://goo.gl/HP7yGM" target="_blank"> Groningen, the Netherlands</a></li>
                    <li><i class="material-icons tiny">language</i> English, Italian, Dutch</li>
                    <li><i class="material-icons tiny">code</i> HTML, CSS, JavaScript</li>
                  </ul>
                  <p>I'm a young developer with a passion for quality and an endless stream of crazy ideas. In my spare time I love taking pictures, listening to music, dreaming up and working on new projects. I am currently in the first year of my Computer
                    Science study.
                  </p>
                </div>
                <div class="card-action center-align">
                  <a class="social-color" href="https://github.com/GiacomoCaruso" target="_blank"><i aria-hidden="true" class="fa fa-github fa-2x"></i></a>
                  <a href="https://www.linkedin.com/in/giacomo-caruso" target="_blank"><i aria-hidden="true" class="fa fa-linkedin-square fa-2x"></i></a>
                  <a href="http://codepen.io/giacomo_caruso/" target="_blank"><i aria-hidden="true" class="fa fa-codepen fa-2x"></i></a>
                  <a href="#"><i aria-hidden="true" class="fa fa-envelope-o fa-2x" id="p-contact"></i></a>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#code"><i class="material-icons tabs-icons">code</i></a></li>
                <li class="tab col s3"><a href="#user"><i class="material-icons tabs-icons">fingerprint</i></a></li>
                <li class="tab col s3"><a href="#design"><i class="material-icons tabs-icons">edit</i></a></li>
                <li class="tab col s3"><a href="#responsive"><i class="material-icons tabs-icons">devices</i></a></li>
                <li class="tab col s3"><a href="#seo"><i class="material-icons tabs-icons">trending_up</i></a></li>
              </ul>
            </div>

            <div id="code" class="col s12 m6">
              <div class="icon-block">
                <h2 class="center"><i class="material-icons large">code</i></h2>
                <h5 class="center">Code</h5>
                <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
              </div>
            </div>
            <div id="user" class="col s12 m6">
              <div class="icon-block">
                <h2 class="center"><i class="material-icons large">fingerprint</i></h2>
                <h5 class="center">User Experience</h5>
                <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
              </div>
            </div>
            <div id="design" class="col s12 m6">
              <div class="icon-block">
                <h2 class="center"><i class="material-icons large">edit</i></h2>
                <h5 class="center">Design</h5>
                <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
              </div>
            </div>
            <div id="responsive" class="col s12 m6">
              <div class="icon-block">
                <h2 class="center"><i class="material-icons large">devices</i></h2>
                <h5 class="center">Responsive</h5>
                <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
              </div>
            </div>
            <div id="seo" class="col s12 m6">
              <div class="icon-block">
                <h2 class="center"><i class="material-icons large">trending_up</i></h2>
                <h5 class="center">SEO</h5>
                <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      <div class="section projects">
        <div class="container">
          <h2 class="center-align" id="work">Projects</h2>
          <div class="row">
            <div class="col s12 m6">
              <div class="p-left">
                <div class="card hoverable work">
                  <div class="card-image">
                    <a href="http://www.pianolessen-groningen.nl/" target="_blank"><img src="https://s32.postimg.org/a68v0ovv9/pianoles_groningen.jpg"></a>
                  </div>
                  <div class="card-content">
                    <h5>Pianoles Groningen</h5>
                    <p>The website I made to promote my activity as piano teacher.</p>
                  </div>
                  <div class="card-action center-align">
                    <a href="http://www.pianolessen-groningen.nl/" target="_blank"><i aria-hidden="true" class="fa fa-external-link fa-2x"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <div class="p-right">
                <div class="card hoverable work">
                  <div class="card-image">
                    <a href="https://codepen.io/giacomo_caruso/full/yJpymq/" target="_blank"><img src="https://s32.postimg.org/wb503yn11/kikuchi_tribute.jpg"></a>
                  </div>
                  <div class="card-content">
                    <h5>Masabumi Kikuchi - Out of Bounds</h5>
                    <p>A simple tribute page to pianist Masabumi Kikuchi.</p>
                  </div>
                  <div class="card-action center-align">
                    <a href="https://codepen.io/giacomo_caruso/full/yJpymq/" target="_blank"><i aria-hidden="true" class="fa fa-codepen fa-2x"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section form">
        <div class="container cont-form">
          <h2 class="center-align" id="contact">Contact me</h2>
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="name" type="text" class="validate">
                  <label for="name">Name</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">email</i>
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">message</i>
                  <textarea id="message" class="materialize-textarea"></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="row center-btn">
                <button class="btn-large waves-effect waves-light" id="btn-send" type="submit" name="action">Send
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!--NAV-->
      <div class="fixed-action-btn" id="nav">
        <a class="btn-floating btn-large">
          <i class="material-icons">menu</i>
        </a>
        <ul>
          <li><a class="btn-floating" id="navpersonal"><i class="material-icons">perm_identity</i></a></li>
          <li><a class="btn-floating" id="navwork"><i class="material-icons">view_module</i></a></li>
          <li><a class="btn-floating" id="navcontact"><i class="material-icons">email</i></a></li>
        </ul>
      </div>
    </main>
@stop
