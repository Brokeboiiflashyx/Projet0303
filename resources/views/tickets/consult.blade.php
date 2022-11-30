@extends('dashboard')
@section('contenu')
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

            </tr>

        </tbody>
    @endsection
