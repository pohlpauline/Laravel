@extends('layouts.master')

@section('title','Über uns')

@section('content')


<div class="container">



<div class="row justify-content-md-center hundeteam">

  <div class="col-md-4">
  <img src="{{asset('images/hundeteam.jpg')}}" alt="hundeteam" id="hundeteam">
  </div>

  
  <div class="col-md-8">
    <h2 class="abouttitel">Wer wir sind...</h2>
    
            @foreach($about as $aboutitem)
          
               @if(empty ($aboutitem->text ))
               <p>Kein Text enthalten.</p>
               @else
                <p class="abouttext pos"> {{ $aboutitem->text }} </p>
           
            @endif
            @endforeach
   </div> 

  </div>
  </div>
  


@endsection

