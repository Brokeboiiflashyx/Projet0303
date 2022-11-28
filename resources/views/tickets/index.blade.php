@extends('dashboard')
@section('contenu')
    <div class="creer">
        <a href="{{ route('tickets.create') }}"class="btn-creer">
            Créer un ticket
        </a>
    </div>
    @csrf
    <div class="small-header anim" style="--delay: .3s">Vos Tickets</div>
    <table class="table table-striped">
        <thead>
            <th></th>
            <th id="titre"><b>Titre</b></th>
            <th id="titre">Description</th>
            <th id="titre">Statut</th>
            <th id="titre">Date de creation </th>
        </thead>
        <tbody>



            @foreach ($tickets as $ticket)
                <!--  Faire que seul l'utilisateur et le gestionnaire puisse voir ses tickets-->
                {{ dd($ticket->pivot) }}
                @foreach ($ticket->user() as $t)
                    {{ dd($t) }}
                @endforeach
                {{-- @if (Auth::id() == $ticket->users()->id || Auth::user()->role_id == 2) --}}
                <tr ng-repeat="data in information | filter:search">
                    <td></td>
                    <td>{{ $ticket->Titre }}</td>
                    <td>
                        @if (strlen($ticket->Description) > 20)
                            {{ substr($ticket->Description, 0, 20) }}...
                        @else
                            {{ $ticket->Description }}
                        @endif
                    </td>
                    <td>{{ $ticket->Statut }}</td>
                    <td>{{ $ticket->created_at }}</td>
                    <td>
                        <a href="{{ route('tickets.edit', $ticket->id) }}">
                            <span class="fa fa-edit" aria-hidden="true"
                                ng-click="editInfo(data)"><br><small>Modifier</small></span></a>
                    </td>
                    <td>
                        <a onclick="return confirm('Voulez-vous supprimer votre ticket ?')"
                            href="{{ route('destroy', $ticket->id) }}">
                            <span class="fa fa-trash" aria-hidden="true"
                                ng-click="deleteInfo(data)"><br><small>Supprimer</small></span></a>

                    </td>
                </tr>
                {{-- @endif --}}
            @endforeach

        </tbody>
    </table>
    </div>
@endsection
