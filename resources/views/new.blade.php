@extends('layouts.app_admin')

@section('content')

<div id="loading" class="container">
    <div class="row">
        <div class="col-md-12 text-center ">
            <img src="{{ asset('img/loading.gif') }}" alt="">
        </div>
    </div>
</div>

  <!-- Breadcrumbs-->
  <ol class="breadcrumb core" hidden>
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">Accueil</a>
    </li>
    <li class="breadcrumb-item active">Ajouter un point</li>
    </ol>

<form action="{{ url('save') }}" method="post">
        @csrf
        <div class="container core" hidden>
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

                                                @include('layouts.xy')



                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
                                <div class="pt-5">
                                    <label for="">Nombre de fois</label>
                                    <select  class="form-control" name="milieu" id="milieu">
                                        <option selected>Choisir...</option>
                                        <option value="1">01 Fois</option>
                                        <option value="2">02 Fois</option>
                                        <option value="3">03 Fois</option>
                                        <option value="4">04 Fois</option>
                                        <option value="5">05 Fois</option>
                                        <option value="6">06 Fois</option>
                                        <option value="7">07 Fois</option>
                                    </select>
                                </div>

                                </div>

                                <div class="tab-pane fade" id="pop3" role="tabpanel" aria-labelledby="pop3-tab">
                                    <div class="pt-3">
                                        @include('layouts.parametre')
                                    </div>
                                </div>

                            </div>
                        </div>

            </div>
        </div>
</form>
@endsection
