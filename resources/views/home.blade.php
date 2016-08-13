@extends('layout.main')

@section('styles')

<link rel="stylesheet" href="/css/home.css">

@stop

@section('scripts')

<script type="text/javascript" src="{!! asset('js/home.js') !!}"></script>

@stop

@section ('content')

<main>
<div class="header">
<h1 class="center-align" id="">Giacomo Caruso</h1>
<h4 class="center-align"><a id="subtitle-link" href="musician">Musician</a> - <a id="subtitle-link" href="web-developer">Web Developer</a></h4>
</div>

<div class="slider fullscreen">
<ul class="slides">
  <li>
    <img src="https://s9.postimg.org/tdjf263f3/wire_birds_4.jpg" alt="background picture with birds on wires">
  </li>
  <li>
    <img src="https://s25.postimg.org/ud1usyn9r/web_birds_flipped_2.jpg" alt="background picture with birds on wires">
    <div class="caption center-align">
      <div class="row">
        <div class="col s12 m8 offset-m2">
          <div class="card-panel">
            <h3>I make music.</h3>
            <h5 class="white-text">Impro | Jazz | Electronics | Piano | Drums</h5>
            <a class="waves-effect waves-light btn-large" id="btn-home" href="musician">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </li>
  <li>
    <img src="https://s25.postimg.org/ktwrd8p5b/wires_web_new.jpg" alt="background picture with birds on wires">
    <div class="caption center-align">
      <div class="row">
        <div class="col s12 m8 offset-m2">
          <div class="card-panel">
            <h3>I build websites.</h3>
            <h5 class="white-text">HTML | CSS | JS | Laravel | Angular | Node</h5>
            <a class="waves-effect waves-light btn-large" id="btn-home" href="web-developer">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </li>
</ul>
</div>
<div class="fixed-action-btn" id="nav">
<a class="btn-floating btn-large">
  <i class="material-icons">menu</i>
</a>
<ul>
  <li><a class="btn-floating tooltipped" id="navdev" href="web-developer" data-position="left" data-delay="50" data-tooltip="Web Developer"><i class="material-icons">code</i></a></li>
  <li><a class="btn-floating tooltipped" id="navmusician" href="musician" data-position="left" data-delay="50" data-tooltip="Musician"><i class="material-icons">music_note</i></a></li>
</ul>
</div>
</main>

@stop
