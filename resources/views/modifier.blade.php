<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Technicien</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="col-md-8 mx-auto">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4 class="mb-0 text-uppercase fw-semibold">
                        <i class="bi bi-tools"></i> Modifier un Technicien
                    </h4>
                </div>

                <div class="card-body bg-white">
                    <form action="{{ route('enregistrement', ['id'=>$techniciens->id]) }}" method="POST" class="px-3">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="nom" class="form-label fw-semibold">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control form-control-lg" 
                                   value="{{ $techniciens->nom }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="prenom" class="form-label fw-semibold">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control form-control-lg" 
                                   value="{{ $techniciens->prenom }}" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="specialite" class="form-label fw-semibold">Spécialité</label>
                            <input type="text" name="specialite" id="specialite" class="form-control form-control-lg" 
                                   value="{{ $techniciens->specialite }}" required>
                        </div>

                        <div class="d-flex justify-content-center gap-3">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                <i class="bi bi-save2"></i> Modifier
                            </button>
                            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-lg px-4">
                                <i class="bi bi-arrow-left"></i> Annuler
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
            background: linear-gradient(to right, #e3f2fd, #bbdefb);
        }

        .card {
            border-radius: 1rem;
        }

        .form-control-lg {
            border-radius: 0.75rem;
        }

        button {
            border-radius: 30px !important;
            transition: all .2s ease-in-out;
        }

        button:hover {
            transform: scale(1.05);
        }
    </style>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
