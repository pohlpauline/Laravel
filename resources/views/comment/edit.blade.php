@extends('layouts.master')

@section('title','Kommentar aktualisieren')

@section('content')


<div class="container">
<div class="row">



<div class="card">
  <div class="card-header h4">
    
      Kommentar bearbeiten
  </div>
  <div class="card-body">
  <form action="{{ url('comment') }}/{{$comment->id}}" method="post"> <!--für edit brauche ich die id deswegen {{$comment->id}} -->
  @csrf
  @method('PUT')
                        
                                                
                        <div class="form-group">
                                <label for="betreff">Betreff</label>
                                <input type="text" id="betreff" name="betreff"  
                                 class="form-control {{$errors->has('betreff') ? 'border-danger': ''}} "
                               value= " <?php echo isset($errors) && $errors->has('betreff') ? old('betreff') : $comment->betreff;?>"  ></input>
                               <small class="form-text text-danger">{!! $errors->first('betreff')!!}</small> <!--steht bitte betreff eingeben-->   
                        </div>
                        
                      
                        <div class="form-group">
                                <label for="kommentar">Kommentar über den Hund</label>
                                <textarea id="kommentar" name="kommentar"  
                                 class="form-control  {{$errors->has('kommentar') ? 'border-danger': ''}} "
                                 ><?php echo isset($errors) && $errors->has('kommentar') ? old('kommentar') : $comment->kommentar;?></textarea>
                                 <small class="form-text text-danger">{!! $errors->first('kommentar')!!}</small>  
                        </div>
                                                
                        <button type="submit" class="btn btn-success mt-2">
                                
                                 Kommentar aktualisieren
                        </button>
                </form>
 
    <a href="{{ url() ->previous() }}" class="btn btn-primary mt-2 float-end">
      <i class="fa-solid fa-circle-left fs-4"></i>
      zurück
    </a>
  </div>
</div>

</div>
</div>

@endsection