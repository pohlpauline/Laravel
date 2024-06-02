@extends('layouts.master')

@section('title','Blog')

@section('content')
<div class="container p-3">
@if(session()->has('msg_success'))
    <div class="alert alert-success">
        {!! session()->get('msg_success') !!}
    </div>
@endif
<div class="container p-3">
@if(session()->has('nachricht'))
    <div class="alert alert-success">
        {!! session()->get('nachricht') !!}
    </div>
@endif


<div class="container p-3 ">
   <div class="row">
    <div class="col-md-12">
        <div class="card text-center m-2 ">
            <div class="card-header h3">Kommentare</div>
            @if($comment->isEmpty())
            <p>Keine Kommentare vorhanden.</p>
            @else
            @foreach($comment as $commentitem)
            <div class="card-body bg-primary text-light">
               @if(empty ($commentitem->hundename ) ||
               empty ($commentitem->betreff) ||
               empty ($commentitem->kommentar) )
               <p>Keine Kommentare gefunden.</p>
               @else
              
                <h3> {{ $commentitem->hundename }}</h3>
                <p> {{ $commentitem->betreff }} </p>
                <p> {{ $commentitem->kommentar }} </p>
                @if(Auth::check() && Auth::id()=== $commentitem->user_id)
                 <!--Bearbeiten-Button-->
               <a href="/comment/{{ $commentitem ->id }}/edit" class="ms-2 btn btn-outline-primary" title="Hundenamen bearbeiten">
            <i class="fa-solid fa-pen-to-square h4 m-0 me-1 text-dark"></i>
           
            @endif
            @endif
              </a>
            </div>
            @endforeach
            @endif
        </div>

    </div>
    <!--pagination-->
    <div class="pagination">{{$comment->links('pagination::bootstrap-4')}}</div>

   </div> 
  

    <!--Formular:neuen Kommentar erstellen-->
    @if(Auth::check() && Auth::id())
    <div class="card m-1">
  <div class="card-header h2">
    Kommentieren
  </div>
  <div class="card-body">
  <form action="{{ url('comment') }}" method="post"> <!--für store  -->
  @csrf
                        <div class="form-group">
                                <label for="betreff">Betreff</label>
                                <input type="text" id="betreff" name="betreff" value="{{old('betreff')}}"
                                 class="form-control" />
                                 <small class="form-text text-danger">{!! $errors->first('betreff')!!}</small>
                        </div>
                        
                        <div class="form-group">
                                <label for="name">Name des Hundes</label>
                                <input type="text" id="name" name="hundename" value="{{old('hundename')}}"
                                 class="form-control" />
                                 <small class="form-text text-danger">{!! $errors->first('hundename')!!}</small>
                        </div>
                                                
                        <div class="form-group">
                                <label for="kommentar">Kommentar</label>
                                <textarea id="kommentar" name="kommentar"  
                                 class="form-control">{{old('kommentar')}}</textarea>
                                 <small class="form-text text-danger">{!! $errors->first('kommentar')!!}</small> <!--Fehlermeldung wird unten angezeigt, die erste Fehlermeldung wird angezeigt-->
                        </div>
         
                                                
                        <button type="submit" class="btn btn-success mt-2">
                                <i class="fa-solid fa-circle-plus fs-1"></i>
                                neuen Beitrag anlegen
                        </button>
                </form>
 
    <a href="{{ url('/') }}" class="btn btn-primary mt-2 float-end">
      <i class="fa-solid fa-circle-left fs-4"></i>
      Home
    </a>
 
  </div>
  @endif
</div>

</div>

@endsection