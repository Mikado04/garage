@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
        <div class="card-header bg-success text-white py-3 text-center">
            <h4 class="mb-0 text-uppercase fw-semibold">Liste des Réparations</h4>
        </div>

        <div class="card-body bg-light p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle mb-0">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col">IM Véhicule</th>
                            <th scope="col">ID Technicien</th>
                            <th scope="col">Date</th>
                            <th scope="col">Durée</th>
                            <th scope="col">Motif</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @foreach ($reparation as $repare)
                            <tr>
                                <td class="fw-semibold text-success">{{ $repare->vehicule_id }}</td>
                                <td>{{ $repare->technicien_id }}</td>
                                <td>{{ $repare->date }}</td>
                                <td>{{ $repare->duree_main_oeuvre }}</td>
                                <td class="text-start">{{ $repare->objet_reparation }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('modifier_reparation', ['id' => $repare->id]) }}" class="btn btn-outline-primary btn-sm px-3">
                                            <i class="bi bi-pencil-square"></i> Modifier
                                        </a>
                                        <form action="{{ route('supprimer_reparation', $repare->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cette réparation ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm px-3">
                                                {{ $repare->trashed()? 'Restaurer' : 'Supprimer' }}

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

{{-- Style léger intégré pour un rendu soigné --}}
<style>
    .card {
        border-radius: 1rem;
    }

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

    td.text-start {
        max-width: 250px;
        white-space: normal;
        word-wrap: break-word;
    }
</style>
@endsection
