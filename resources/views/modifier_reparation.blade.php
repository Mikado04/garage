@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="col-lg-8 mx-auto">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header bg-success text-white text-center py-3">
                <h4 class="mb-0 text-uppercase fw-semibold">
                    <i class="bi bi-wrench-adjustable-circle"></i> Mise à jour de la Réparation
                </h4>
            </div>

            <div class="card-body bg-light p-4">
                <form action="{{ route('enregistrement_reparation', ['id'=>$reparation->id]) }}" method="">
                    @csrf

                    <div class="mb-4 text-start">
                        <label for="date" class="form-label fw-semibold">Date de réparation</label>
                        <input 
                            name="date" 
                            id="date" 
                            type="date" 
                            class="form-control form-control-lg"
                            value="{{ $reparation->date }}"
                            required>
                    </div>

                    <div class="mb-4 text-start">
                        <label for="duree_main_oeuvre" class="form-label fw-semibold">Durée de main d'œuvre (heures)</label>
                        <input 
                            name="duree_main_oeuvre" 
                            id="duree_main_oeuvre" 
                            type="number" 
                            class="form-control form-control-lg"
                            value="{{ $reparation->duree_main_oeuvre }}"
                            required>
                    </div>

                    <div class="mb-4 text-start">
                        <label for="objet_reparation" class="form-label fw-semibold">Objet de la réparation</label>
                        <textarea 
                            name="objet_reparation" 
                            id="objet_reparation" 
                            class="form-control form-control-lg" 
                            rows="5" 
                            required>{{ $reparation->objet_reparation }}</textarea>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success btn-lg px-5 me-2">
                            <i class="bi bi-check-circle"></i> Terminer
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

{{-- Styles personnalisés --}}
<style>
    body {
        background: linear-gradient(to right, #e8f5e9, #c8e6c9);
    }

    .card {
        border-radius: 1rem;
    }

    .form-control-lg {
        border-radius: 0.75rem;
        font-size: 1rem;
    }

    .btn {
        border-radius: 30px !important;
        transition: all 0.2s ease-in-out;
    }

    .btn:hover {
        transform: scale(1.05);
    }

    label {
        color: #2e7d32;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
@endsection
