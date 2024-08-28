<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    {{-- <div class="container">
        <h1>Home <a href="{{route('user.add')}}" 
            class="btn btn-primary float-end">Add User</a>
            <a href="{{route('user.all')}}" 
            class="btn btn-primary float-end">List User</a></h1>
        <div class="row">
            @foreach($users as $user)
            <div class="col-md-2">
                <div class="card mb-4">
                    <img src="{{ asset('uploads/users/'.$user->image) }}" class="card-img-top" alt="{{ $user->name }}" style="height: 200px">
                    <div class="card-body text-center">
                        <h3 class="card-title">{{ $user->name }}</h3>
                        <p class="card-text">{{ $user->email }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> --}}

    <div class="d-flex flex-column min-vh-100">
        <!-- Header -->
        <header class="mb-4">
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('user.show') }}">MyApp</a>
                    <a class="navbar-brand" href="{{ route('user.about') }}">About</a>
                    <a class="navbar-brand" href="{{ route('user.contact') }}">Contact</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.all') }}">All User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.add') }}">Add User</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    
        <!-- Main Content -->
        <main class="flex-grow-1">
            <div class="container mt-4">
                <div class="row g-3">
                    @foreach($users as $user)
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0 h-100">
                            <img src="{{ asset('uploads/users/'.$user->image) }}" class="card-img-top rounded-top" alt="{{ $user->name }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $user->name }}</h5>
                                <p class="card-text">{{ $user->email }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </main>
    
        <!-- Footer -->
        <footer class="bg-light text-center py-3">
            <div class="container">
                <p class="mb-0">© 2024 MyApp. All Rights Reserved. nqt188</p>
                <small class="text-muted">Powered by Laravel & Bootstrap</small>
            </div>
        </footer>
    </div>
    
    
    

</body>
</html>