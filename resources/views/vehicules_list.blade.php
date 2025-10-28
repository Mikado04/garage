@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
        <div class="card-header bg-primary text-white py-3">
            <h4 class="mb-0 text-center text-uppercase fw-semibold">
                Liste des Véhicules
            </h4>
        </div>

        <div class="card-body bg-light p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle mb-0">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Immatriculation</th>
                            <th>Marque</th>
                            <th>Modèle</th>
                            <th>Couleur</th>
                            <th>Année</th>
                            <th>Kilométrage</th>
                            <th>Carrosserie</th>
                            <th>Énergie</th>
                            <th>Boîte</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @foreach ($vehicules as $veh)
                            <tr>
                                <td class="fw-semibold text-primary">{{ $veh->immatriculation }}</td>
                                <td>{{ $veh->marque }}</td>
                                <td>{{ $veh->modele }}</td>
                                <td>{{ $veh->couleur }}</td>
                                <td>{{ $veh->annee }}</td>
                                <td>{{ $veh->kilometrage }}</td>
                                <td>{{ $veh->carrosserie }}</td>
                                <td>{{ $veh->energie }}</td>
                                <td>{{ $veh->boite }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('modifier_vehicules',['id'=>$veh->id]) }}" class="btn btn-outline-primary btn-sm px-3">
                                            <i class="bi bi-pencil-square"></i> Modifier
                                        </a>
                                        <form action="{{ route('supprimer_vehicules', $veh->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce véhicule ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm px-3">
                                                {{ $veh->trashed()? 'Restaurer' : 'Supprimer' }}

                                            </button>
                                        </form>
                                        <a href="{{ route('reparation',['id'=> $veh->id]) }}" class="btn btn-outline-success btn-sm px-3">
                                            <i class="bi bi-tools"></i> Réparer
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Style léger intégré pour harmoniser l’affichage --}}
<style>
    .table thead th {
        vertical-align: middle;
        font-weight: 600;
        letter-spacing: .5px;
    }

    .table tbody tr:hover {
        background-color: #f0f8ff !important;
        transition: background-color .2s ease-in-out;
    }

    .btn {
        border-radius: 20px;
        transition: 0.2s;
    }

    .btn:hover {
        transform: scale(1.05);
    }

    .card {
        border-radius: 1rem;
    }
</style>
@endsection
