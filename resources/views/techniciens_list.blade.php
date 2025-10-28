@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
        <div class="card-header bg-primary text-white py-3 text-center">
            <h4 class="mb-0 text-uppercase fw-semibold">Liste des Techniciens</h4>
        </div>

        <div class="card-body bg-light p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle mb-0">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Spécialité</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @foreach ($techniciens as $tech)
                            <tr>
                                <td class="fw-semibold text-primary">{{ $tech->id }}</td>
                                <td>{{ $tech->nom }}</td>
                                <td>{{ $tech->prenom }}</td>
                                <td>{{ $tech->specialite }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('modifier', ['id' => $tech->id]) }}" class="btn btn-outline-primary btn-sm px-3">
                                            <i class="bi bi-pencil-square"></i> Modifier
                                        </a>
                                        <form action="{{ route('supprimer', $tech->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce techniciens ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm px-3">
                                                {{ $tech->trashed()? 'Restaurer' : 'Supprimer' }}

                                            </button>
                                        </form>
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

{{-- Style léger intégré pour embellir l'affichage --}}
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
