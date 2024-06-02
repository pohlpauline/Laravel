@extends('layouts.master')

@section('title','Neuen Kommentar erstellen')

@section('content')
<div class="container bg-dark">
<div class="row">


<div class="card m-1">
  <div class="card-header h2">
    <i class="fa-solid fa-comment me-2 text-secondary"></i> 
    Neuen Beitrag anlegen
    
  </div>
  <div class="card-body">
  <form action="{{ url('besitzer') }}" method="post"> <!--für store  -->
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
 
    <a href="{{ url('besitzer') }}" class="btn btn-primary mt-2 float-end">
      <i class="fa-solid fa-circle-left fs-4"></i>
      zurück
    </a>
  </div>
</div>

</div>
</div>

@endsection