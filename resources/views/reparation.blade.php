@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-success text-white py-3 text-center">
            <h4 class="mb-0 text-uppercase fw-semibold">Ajouter une Réparation</h4>
        </div>

        <div class="card-body bg-light">
            <form action="{{ route('reparations_enregistrement') }}" method="">
                @csrf
                <!-- Champs cachés -->
                <input type="hidden" name="technicien_id" id="technicien_id" value="{{ auth()->user()->id }}" required>
                <input type="hidden" name="vehicule_id" id="vehicule_id" value="{{ $id }}" required>

                <!-- Date -->
                <div class="mb-4">
                    <label for="date" class="form-label fw-semibold">Date de Réparation</label>
                    <input 
                        type="date" 
                        name="date" 
                        id="date" 
                        class="form-control form-control-lg rounded-3" 
                        placeholder="Date" 
                        required>
                </div>

                <!-- Durée -->
                <div class="mb-4">
                    <label for="duree_main_oeuvre" class="form-label fw-semibold">Durée d'exécution (heures)</label>
                    <input 
                        type="number" 
                        name="duree_main_oeuvre" 
                        id="duree_main_oeuvre" 
                        class="form-control form-control-lg rounded-3" 
                        placeholder="Durée d'exécution" 
                        required>
                </div>

                <!-- Objet de la réparation -->
                <div class="mb-4">
                    <label for="objet_reparation" class="form-label fw-semibold">Objet de la Réparation</label>
                    <textarea 
                        name="objet_reparation" 
                        id="objet_reparation" 
                        rows="5" 
                        class="form-control rounded-3" 
                        placeholder="Décrivez la réparation effectuée..." 
                        required></textarea>
                </div>

                <!-- Bouton -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg px-5 rounded-pill shadow-sm">
                        <i class="bi bi-check-circle"></i> Terminer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Style léger pour uniformiser le visuel --}}
<style>
    .card {
        border-radius: 1rem;
    }

    .form-label {
        color: #333;
        font-size: 1rem;
    }

    .form-control:focus {
        box-shadow: 0 0 8px rgba(25, 135, 84, 0.4);
        border-color: #198754;
    }

    button.btn:hover {
        transform: scale(1.05);
        transition: 0.2s ease-in-out;
    }
</style>
@endsection
