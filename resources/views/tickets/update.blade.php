@extends('dashboard')
@section('contenu')
    <form method="POST" action="{{ route('tickets.update', $tickets->id) }}" class="sign-up-form">
        @csrf
        @method('PUT')
        <fieldset>
            <!-- Form Name -->
            <legend>Modification du ticket</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Titre</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                        <input name="Titre" value="{{ old('Titre', $tickets->Titre) }}" placeholder="Titre"
                            class="form-control" type="text">
                    </div>
                </div>
            </div>
            <!-- Text area -->

            <div class="form-group">
                <label class="col-md-4 control-label">Description</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control" name="Description" value=" "placeholder="Description">{{ old('Description', $tickets->Description) }}</textarea>
                    </div>
                </div>
            </div>
            <!-- Ecrire une classe permatant au id 2 de modifier le statut-->
            @if (Auth::user()->role_id == 2)
                <div class="form-group">
                    <label class="col-md-4 control-label">Statut</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <select name="Statut" class="form-control">
                                <option value="En cours">En cours</option>
                                <option value="Fermé">Fermé</option>
                            </select>
                        </div>
                    </div>
            @endif
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-warning">Modifier<span
                            class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>
            <div>
                <a href="{{ route('tickets.index') }}" class="btn-primary">Chat</a>
            </div>
        </fieldset>
        </div>
    </form>
@endsection
