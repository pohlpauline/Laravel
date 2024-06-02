<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //FÜRS SELECT
        $comment = Comment::all(); 
        $comment= Comment::paginate(2);
        return view('comment.index', ['comment' => $comment]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        //FÜRS INSERT

        $request->validate([  //die Felder im Formular werden ausgewertet, links NamevomFeld rechts die Regeln
            'betreff' =>'required',
            'hundename' =>'required|max:20',
            'kommentar' =>'required|min:10'
        ]);
        #return 'ich bin store';
        $comment = new Comment([
                //'nameDerSpalteInDB' => $request['nameDesFeldesInFormular']
                'betreff' =>$request['betreff'],  //kommt Inhalt rein
                'hundename' =>$request['hundename'],
                'kommentar' =>$request['kommentar'],
                'user_id' =>auth()->id()  // die Id vom angemeldeten user
        ]); #ende von Instanziierung Comment

            session()->flash('msg_success','Kommentar <b>'. $comment->hundename. '</b> wurde eingefügt'); // Flashmessages erzeugt

            $comment->save(); // ist wie execute()
            return redirect('/comment');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
        return view('comment.show')->with('comment',$comment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //für die Form
        
        return view('comment.edit')->with('comment',$comment);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //FÜRS UPDATE (AKTUALISIEREN)

        $request->validate([ //Feldervalidierung von meinem Formular
            'betreff'=>'required', //cannot be empty
            'kommentar'=> 'required',
        ],
            [
                'betreff.required'=>'Bitte <b>Betreff </b> eingeben',  # steht Fehlermeldung für die Betreffzeile
                'kommentar.required'=>'Bitte <b>Textarea </b> ausfüllen',
                
            ]
          
        );// Ende Feldvalidierung
        $comment->update([ 'betreff'=>$request->betreff, #links spaltenname in der DB,# rechts die Felder von meinem Formular
                        'kommentar' =>$request->kommentar,
                       

    ]);
    session()->flash('nachricht','Der Eintrag wurde aktualisiert.');
    $comment->save();
    return redirect('/comment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
