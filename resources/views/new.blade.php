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

                                        </div>
                                        <div class="form-row mt-3">
                                            <div class="col">
                                                <label>Type de milieu</label>
                                                @include('layouts.milieu')
                                            </div>
                                            <div class="col">
                                                <label>Zone de surveillance</label>
                                                @include('layouts.zone')
                                            </div>
                                        </div>
                                        <div class="form-row mt-3">
                                            <div class="col">
                                                <label>Wilaya</label>
                                                @include('layouts.wilaya')
                                            </div>
                                            <div class="col">
                                                <label>Commune</label>
                                                @include('layouts.commune')
                                            </div>
                                        </div>
                                        <div class="form-row my-3">
                                            <div class="col-2">
                                                <label>Longitude x :</label>
                                                <input type="text" >
                                            </div>
                                            <div class="col-1">
                                                <label>D°</label>
                                                <input type="number" step="0.01"  id="DX" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>M'</label>
                                                <input type="number" step="0.01"  id="MX" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>S"</label>
                                                <input type="number" step="0.01" id="SX" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>Direction</label>
                                                <select  class="form-control" name="direction" id="directionX">
                                                    <option value="E">E</option>
                                                    <option value="O">O</option>
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <label>Latitude y :</label>
                                            </div>
                                            <div class="col-1">
                                                    <label>D°</label>
                                                    <input type="number" step="0.01" id="DY" class="form-control">
                                                </div>
                                                <div class="col-1">
                                                    <label>M'</label>
                                                    <input type="number" step="0.01" id="MY" class="form-control">
                                                </div>
                                                <div class="col-1">
                                                    <label>S"</label>
                                                    <input type="number" step="0.01" id="SY" class="form-control">
                                                </div>
                                                <div class="col-1">
                                                    <label>Direction</label>
                                                    <select  class="form-control" name="directionY" id="directionY">
                                                        <option value="N">N</option>
                                                        <option value="S">S</option>
                                                    </select>
                                                </div>
                                                {{-- <div class="col">

                                                <button class="btn btn-info" id="target">Convert DMS</button>
                                                </div> --}}
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <button class="btn btn-info" id="target">Convert DMS</button>
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
