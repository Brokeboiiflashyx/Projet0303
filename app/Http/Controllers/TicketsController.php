<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Tickets;



class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Stocker dans une variable les données de la table tickets

        $tickets = Tickets::with("user_id")->get();

        return view('tickets.index',['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       if (Auth::check()) {
            return view('tickets.create');
        }
        return redirect('/')->with('error', 'Vous devez etre connecté pour creer un ticket.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //stocker les données du formulaire dans la base de données
        $ticket = new Tickets();
        $ticket->Titre = $request->Titre;
        $ticket->Description = $request->Description;
        $ticket->Statut ='En cours';
        $ticket->save();
        // dans ma table ticket_user ajouter les clef etrangeres ticket_id et user_id
        $ticket->users()->attach(Auth::user()->id);

        return redirect()->route('tickets.show', ['ticket' => $ticket]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Tickets $tickets ,$id)
    {
        $ticket = Tickets::find($id);
        return view('tickets.consult', ['ticket' => $ticket]);
    }

/**,['ticket' => $ticket] */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        return view('tickets.update', ['tickets' => Tickets::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ticket = Tickets::findOrFail($id);
        $ticket->Titre = $request->Titre;
        $ticket->Description = $request->Description;
        $ticket->Statut = $request->Statut??'En cours';
        $ticket->save();

        return redirect()->route('tickets.show', ['ticket' => $ticket]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Tickets::where('id', $id)->delete();
        return redirect()->back();
    }


}
