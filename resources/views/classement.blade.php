@extends('layout')
@section('content')

<div class="container mt-5">
    <h2 class="text-center my-5 text-primary">Mon Classement</h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Consulter Mes Notes</h5>
                    <a href="#" class="btn btn-primary">Consulter</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Voir Mon classement dans la classe</h5>
                    <a href="#" class="btn btn-primary">Consulter</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><strong>Demande:</strong> Note eliminatoire</h5>
                    <a href="#" class="btn btn-primary">Consulter</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Quitter la classe</h5>
                    <a href="#" class="btn btn-primary">Consulter</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection