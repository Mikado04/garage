@extends('layouts.app')

@section('content')
<div class="container py-4">

    <!-- Tableau de bord -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tableau de bord</h5>
        </div>
        <div class="card-body">
            <p class="mb-0">Bienvenue, <strong>{{ Auth::user()->name }}</strong> 👋</p>
        </div>
    </div>

    <!-- Formulaire d'ajout de technicien -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-secondary text-white">
            <h5 class="mb-0">Ajouter un technicien</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('technicines_enregistrement') }}" method="GET">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control form-control-lg" placeholder="Nom" required>
                    </div>
                    <div class="col-md-6">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control form-control-lg" placeholder="Prénom" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="specialite" class="form-label">Spécialité</label>
                        <input type="text" name="specialite" id="specialite" class="form-control form-control-lg" placeholder="Spécialité" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Adresse e-mail</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Mot de passe" required>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-save"></i> Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Liens vers autres sections -->
    <div class="row text-center g-3">
        <div class="col-md-4">
            <a href="{{ route('vehicules_list') }}" class="btn btn-warning w-100 py-3">
                <i class="bi bi-car-front"></i> Véhicules disponibles
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('techniciens_list') }}" class="btn btn-primary w-100 py-3">
                <i class="bi bi-people"></i> Techniciens disponibles
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('reparation_list') }}" class="btn btn-success w-100 py-3">
                <i class="bi bi-tools"></i> Réparations disponibles
            </a>
        </div>
    </div>

</div>
@endsection
