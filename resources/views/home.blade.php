@extends('layouts.master')

@section('title','Home')

@section('content')


<div class="container p-4">



<div class="row justify-content-md-center bilder">
 
  <div class="col-md-4">
  <img src="{{asset('images/hund1.jpg')}}" alt="bild_welpe1"  >
  
  
 
 
  
  
  </div>
  


  <div class="col-md-4">
  <img src="{{asset('images/hund5.jpg')}}" alt="bild_welpe5"  >
  
  </div>

  <div class="col-md-4">
  <img src="{{asset('images/hund2.jpg')}}" alt="bild_welpe2"  >
  

  
  
  
  </div>
 
      
  <div class="text">
  <div class="col-md-12 justify-content-md-center ">
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
  </div>
  <div class="col-md-12  ">
    <Lorem>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
  </div>
  <a href="{{  route('comment.index')  }}" class="btn btn-primary" id="button" title="Infos">weiter </a>
  </div>

  @guest 
  <div class="text" id="guest">
    <p> Registrierte User können mehr über den Welpenblog erfahren.</p>
  </div>
  @endguest

  @if(Auth::check())
  
    <p>Angemeldeter Benutzer: {{Auth::user()->name}}</p>
 @else
    <p>Kein Benutzer angemeldet</p>
  @endif


  </div>
</div>

@endsection