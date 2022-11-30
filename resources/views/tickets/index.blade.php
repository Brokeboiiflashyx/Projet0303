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
                @if ($ticket->user_id == Auth::id())
                    @foreach ($ticket->tickets()->get() as $t)
                        <tr ng-repeat="data in information | filter:search">
                            <td></td>
                            <td>{{ $t->Titre }}</td>
                            <td>
                                @if (strlen($t->Description) > 20)
                                    {{ substr($t->Description, 0, 20) }}...
                                @else
                                    {{ $t->Description }}
                                @endif
                            </td>
                            <td>{{ $t->Statut }}</td>

                            <td>{{ $t->created_at }}</td>
                            <td>
                                <a href="{{ route('tickets.edit', $t->id) }}">
                                    <span class="fa fa-edit" aria-hidden="true"
                                        ng-click="editInfo(data)"><br><small>Modifier</small></span></a>
                            </td>
                            <td>
                                <a onclick="return confirm('Voulez-vous supprimer votre ticket ?')"
                                    href="{{ route('destroy', $t->id) }}">
                                    <span class="fa fa-trash" aria-hidden="true"
                                        ng-click="deleteInfo(data)"><br><small>Supprimer</small></span></a>

                            </td>
                        </tr>
                    @endforeach
                @endif
            @endforeach

        </tbody>
    </table>
    </div>
@endsection
