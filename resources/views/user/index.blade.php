@extends('layouts.master')

@section('title','Erfahrungsberichte von Hundehalter')

@section('content')
<div class="container p-3">
@if(session()->has('meldung'))
    <div class="alert alert-danger">
        {!! session()->get('meldung') !!}
    </div>
@endif



<div class="container">
    <div class="row justify-content-center">
      @foreach($user as $useritem)
            <div class="col-md-10">
                <div class="card mb-3">
                    <div class="card-body">
                        <p class="card-text">{{ $useritem->name }}</p>
            
                      @if(Auth::check() && Auth::id())
                     <a href="/user/{{$useritem ->id }}" class="btn btn-primary">Details anzeigen</a><!-- <a href="{{ route('user.show', ['id' => $useritem->id]) }}" class="btn btn-primary">Details anzeigen</a>  -->                    
                    @endif
                    </div>
                </div>
            </div>
      @endforeach
    </div>
</div>
@endsection