<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources\css\app.css','resources\js\app.js'])
    <title>Document</title>
</head>
<body class="h-100">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center p-3">
                        <h4>Ajouter un étudiant</h4>
                    </div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form action="{{ route('etudiant.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nom</label>
                                <input type="text" name="nom" value="{{ old('nom') }}" class="form-control @error('nom') is-invalid @enderror">
                                @error('nom')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Prénom</label>
                                <input type="text" name="prenom" value="{{ old('prenom') }}" class="form-control @error('prenom') is-invalid @enderror">
                                @error('prenom')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mot de passe</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirmation</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label d-block">Type de Bac</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type_bac"
                                    value="marocain" {{ old('type_bac') == 'marocain' ? 'checked' : '' }}>
                                    <label class="form-check-label">Marocain</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type_bac"
                                    value="international" {{ old('type_bac') == 'international' ? 'checked' : '' }}>
                                    <label class="form-check-label">International</label>
                                </div>

                                @error('type_bac')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Filière</label>
                                <select name="filiere" class="form-select @error('filiere') is-invalid @enderror">
                                    <option value="">-- Choisir une filière --</option>
                                    @foreach(['SMI','SMA','SEG','PC'] as $filiere)
                                        <option value="{{ $filiere }}" {{ old('filiere') == $filiere ? 'selected' : '' }}>{{ $filiere }}</option>
                                    @endforeach
                                </select>
                                @error('filiere')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary">Ajouter l'étudiant</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>