@extends('layouts.app_admin')

@section('content')

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">Accueil</a>
    </li>
    <li class="breadcrumb-item active">Ajouter un point</li>
    </ol>

<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}
<div class="row">
        <div class="col-md-12 text-center ">
                <nav class="nav-justified ">
                  <div class="nav nav-tabs " id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true">Identification</a>
                    <a class="nav-item nav-link" id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false">Fréquence</a>
                    <a class="nav-item nav-link" id="pop3-tab" data-toggle="tab" href="#pop3" role="tab" aria-controls="pop3" aria-selected="false">Paramètres</a>

                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                        <div class="pt-4">
                            <form>
                                    <div class="form-row">
                                        <div class="col">
                                            <label>Nom de échantillonneur 1</label>
                                            <input type="text" class="form-control" placeholder="Échantillonneur 1">
                                        </div>
                                        <div class="col">
                                            <label>Nom de échantillonneur 2</label>
                                            <input type="text" class="form-control" placeholder="Échantillonneur 2">
                                        </div>
                                        <div class="col">
                                            <label>Nom de échantillonneur 3</label>
                                            <input type="text" class="form-control" placeholder="Échantillonneur 3">
                                        </div>
                                    </div>
                                    <div class="form-row mt-3">
                                        <div class="col">
                                            <label>Date de prélèvement</label>
                                            <input type="date" class="form-control" >
                                        </div>
                                        <div class="col">
                                                <label>Code d'échantillonnage</label>
                                            <input type="text" class="form-control" placeholder="Code d'échantillonnage">
                                        </div>
                                        <div class="col">
                                                <label>Type de milieu</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Choisir...</option>
                                                <option value="">Les Oueds</option>
                                                <option value="">Les Grands Ensembles Portuaires</option>
                                                <option value="">Baies du Littoral</option>
                                                <option value="">Lacs et Chotts</option>
                                            </select>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
                       <div class="pt-3"></div>
                        <p>2. There's another way to do this for layouts that doesn't have to put the navbar inside the container, and which doesn't require any CSS or Bootstrap overrides.

                            Simply place a div with the Bootstrap container class around the navbar. This will center the links inside the navbar:

                  </div>
                  <div class="tab-pane fade" id="pop3" role="tabpanel" aria-labelledby="pop3-tab">
                       <div class="pt-3"></div>
                        <p>3. There's another way to do this for layouts that doesn't have to put the navbar inside the container, and which doesn't require any CSS or Bootstrap overrides.

                            Simply place a div with the Bootstrap container class around the navbar. This will center the links inside the navbar:

                  </div>

                </div>
            </div>
</div>

</div>
@endsection
