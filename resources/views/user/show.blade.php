@extends('layouts.master')

@section('title','Beitrag vom angemeldeten User löschen')

@section('content')




<div class="container">
    <div class="row justify-content-center">
     
            <div class="col-md-10">
          
                <div class="card mb-3">
                    <div class="card-body">
                    @if($user->hundename == null && $user->erfahrungen == null)
                    <p> Keine Details vorhanden.</p>
                    @else
                        <p class="card-text">{{ $user->hundename }}</p>
                        <p class="card-text">{{ $user->erfahrungen }}</p>
                                               
                    </div>
                    @endif
                    @if(Auth::check() && Auth::user()->id === $user->id && isset($user->hundename) && isset($user->erfahrungen))  <!-- zuerst if-Abfrage an falscher Stelle gesetzt-->
                    <form action="/user/{{ $user->id }}" method="POST">
    @csrf 
    @method('DELETE') <!-- Methode für das Zurücksetzen -->

    <button type="submit" class="btn btn-danger">Beitrag zurücksetzen</button>
</form>

                </div>
                @else
                    <!-- Andernfalls zeige den Button nicht -->
                @endif
            </div>
   
    </div>
</div>
@endsection