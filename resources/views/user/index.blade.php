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
        <div class="row">
          <div class="col-md-12">

            @if(session('status'))
            <h5 class="alert alert-success">{{session('status')}}</h5>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Manager Crud User <a href="{{route('user.add')}}" 
                        class="btn btn-primary float-end">Add User</a>
                        <a href="{{route('user.show')}}" 
                        class="btn btn-danger float-end">Home</a></h3>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $user)
                               <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><img src="{{asset('uploads/users/'.$user->image)}}" 
                                        alt="Image" width="85px" height="100px"></td>
                                    <td>
                                        <a href="{{route('user.edit', ['id' => $user->id])}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('user.delete', ['id' => $user->id])}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr> 

                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
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
                                <a class="nav-link" href="{{ route('user.show') }}">Home</a>
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
                <div class="row">
                    <div class="col-md-12">
                        @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
    
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-primary text-white">
                                <h3>Manage Users
                                </h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/users/'.$user->image) }}" 
                                                     alt="{{ $user->name }}" class="img-thumbnail" style="width: 85px; height: 100px; object-fit: cover;">
                                            </td>
                                            <td>
                                                <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-warning btn-sm">
                                                    <i class="bi bi-pencil"></i> Edit
                                                </a>
                                                <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-danger btn-sm" 
                                                    onclick="return confirm('Are you sure you want to delete this user?');">
                                                    <i class="bi bi-trash"></i> Delete
                                                </a>
                                            </td>
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
        <!-- Footer -->
        <footer class="bg-light text-center py-3 mt-4">
            <div class="container">
                <p class="mb-0">© 2024 MyApp. All Rights Reserved. nqt188</p>
                <small class="text-muted">Powered by Laravel & Bootstrap</small>
            </div>
        </footer>
    </div>
    

</div>
</body>
</html>