<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à Jour du Véhicule</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4 class="mb-0 text-uppercase fw-semibold">
                        <i class="bi bi-car-front-fill"></i> Mise à Jour du Véhicule
                    </h4>
                </div>

                <div class="card-body p-4 bg-white">
                    <form action="{{ route('enregistrement', ['id'=>$vehicules->id]) }}" method="GET">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="immatriculation" class="form-label fw-semibold">Immatriculation</label>
                                <input value="{{ $vehicules->immatriculation }}" name="immatriculation" id="immatriculation"
                                       class="form-control form-control-lg" type="text" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="marque" class="form-label fw-semibold">Marque</label>
                                <input value="{{ $vehicules->marque }}" name="marque" id="marque"
                                       class="form-control form-control-lg" type="text" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="modele" class="form-label fw-semibold">Modèle</label>
                                <input value="{{ $vehicules->modele }}" name="modele" id="modele"
                                       class="form-control form-control-lg" type="text" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="couleur" class="form-label fw-semibold">Couleur</label>
                                <input value="{{ $vehicules->couleur }}" name="couleur" id="couleur"
                                       class="form-control form-control-lg" type="text" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="annee" class="form-label fw-semibold">Année</label>
                                <input value="{{ $vehicules->annee }}" name="annee" id="annee"
                                       class="form-control form-control-lg" type="number" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="kilometrage" class="form-label fw-semibold">Kilométrage</label>
                                <input value="{{ $vehicules->kilometrage }}" name="kilometrage" id="kilometrage"
                                       class="form-control form-control-lg" type="number" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="carrosserie" class="form-label fw-semibold">Carrosserie</label>
                                <input value="{{ $vehicules->carrosserie }}" name="carrosserie" id="carrosserie"
                                       class="form-control form-control-lg" type="text" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="energie" class="form-label fw-semibold">Énergie</label>
                                <input value="{{ $vehicules->energie }}" name="energie" id="energie"
                                       class="form-control form-control-lg" type="text" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="boite" class="form-label fw-semibold">Boîte</label>
                                <input value="{{ $vehicules->boite }}" name="boite" id="boite"
                                       class="form-control form-control-lg" type="text" required>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-success btn-lg px-5">
                                <i class="bi bi-save2"></i> Enregistrer
                            </button>
                            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-lg px-4 ms-2">
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
            background: linear-gradient(to right, #e3f2fd, #bbdefb);
        }

        .card {
            border-radius: 1rem;
        }

        .form-control-lg {
            border-radius: 0.75rem;
        }

        .btn {
            border-radius: 30px !important;
            transition: all 0.2s ease-in-out;
        }

        .btn:hover {
            transform: scale(1.05);
        }
    </style>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
