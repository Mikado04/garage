@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="col-lg-8 mx-auto">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header bg-primary text-white text-center py-3">
                <h4 class="mb-0 text-uppercase fw-semibold">
                    <i class="bi bi-car-front-fill"></i> Informations sur le Véhicule
                </h4>
            </div>

            <div class="card-body bg-light p-4">
                <form action="{{ route('vehicules_enregistrement') }}" method="GET">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="immatriculation" class="form-label fw-semibold">Immatriculation</label>
                            <input name="immatriculation" id="immatriculation" class="form-control form-control-lg" type="text" placeholder="Ex: AA-123-BB" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="marque" class="form-label fw-semibold">Marque</label>
                            <input name="marque" id="marque" class="form-control form-control-lg" type="text" placeholder="Ex: Toyota" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="modele" class="form-label fw-semibold">Modèle</label>
                            <input name="modele" id="modele" class="form-control form-control-lg" type="text" placeholder="Ex: Corolla" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="couleur" class="form-label fw-semibold">Couleur</label>
                            <input name="couleur" id="couleur" class="form-control form-control-lg" type="text" placeholder="Ex: Rouge" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="annee" class="form-label fw-semibold">Année</label>
                            <input name="annee" id="annee" class="form-control form-control-lg" type="number" placeholder="Ex: 2020" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="kilometrage" class="form-label fw-semibold">Kilométrage</label>
                            <input name="kilometrage" id="kilometrage" class="form-control form-control-lg" type="number" placeholder="Ex: 150000" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="carrosserie" class="form-label fw-semibold">Carrosserie</label>
                            <input name="carrosserie" id="carrosserie" class="form-control form-control-lg" type="text" placeholder="Ex: Berline" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="energie" class="form-label fw-semibold">Énergie</label>
                            <input name="energie" id="energie" class="form-control form-control-lg" type="text" placeholder="Ex: Diesel" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="boite" class="form-label fw-semibold">Boîte</label>
                            <input name="boite" id="boite" class="form-control form-control-lg" type="text" placeholder="Ex: Automatique" required>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg px-5 me-2">
                            <i class="bi bi-check-circle"></i> Enregistrer
                        </button>
                        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-lg px-4">
                            <i class="bi bi-arrow-left"></i> Retour
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Style visuel personnalisé --}}
<style>
    body {
        background: linear-gradient(to right, #e3f2fd, #bbdefb);
    }

    .card {
        border-radius: 1rem;
    }

    .form-control-lg {
        border-radius: 0.75rem;
        font-size: 1rem;
    }

    label {
        color: #0d47a1;
    }

    .btn {
        border-radius: 30px !important;
        transition: all 0.2s ease-in-out;
    }

    .btn:hover {
        transform: scale(1.05);
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
@endsection
