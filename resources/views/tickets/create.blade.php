@extends('dashboard')
@section('contenu')
    <form method="POST" action="{{ route('tickets.store') }}" class="sign-up-form">
        @csrf

        <form class="well form-horizontal" action=" " method="post" id="contact_form">
            <fieldset>

                <!-- Form Name -->
                <legend>Creation du ticket</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Titre</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                            <input name="Titre" placeholder="Titre" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <!-- Text area -->

                <div class="form-group">
                    <label class="col-md-4 control-label">Description</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="Description" placeholder="Description"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning">Creer<span
                                class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>

            </fieldset>
        </form>
        </div>



    </form>
@endsection
