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
                    <h3>Update User <a href="{{route('user.all')}}" 
                        class="btn btn-danger float-end">Add User</a>
                        <a href="{{route('user.show')}}" 
                        class="btn btn-danger float-end">Home</a></h3>
                    
                </div>
                <div class="card-body">
                    <form action="{{route('user.update', ['id'=>$user->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Họ và Tên: </label>
                            <input type="text" name="hoten" id="" value="{{$user->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email: </label>
                            <input type="text" name="email" id="" value="{{$user->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password: </label>
                            <input type="password" name="password" id="" value="{{$user->password}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Image: </label>
                            <input type="file" name="image" id="" class="form-control">
                            <img width="85px" height="100px" alt="image"
                            src="{{asset('uploads/users/'.$user->image)}}"  alt="">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </form>
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
                                <a class="nav-link" href="{{ route('user.all') }}">List Users</a>
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

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
    
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-primary text-white">
                                <h3>Update User
                                </h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="hoten" class="form-label">Họ và Tên:</label>
                                        <input type="text" name="hoten" id="hoten" value="{{ $user->name }}" class="form-control" placeholder="Nhập họ và tên" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="email" class="form-label">Email:</label>
                                        <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control" placeholder="Nhập email" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password" class="form-label">Password:</label>
                                        <input type="password" name="password" id="password" value="{{ $user->password }}" class="form-control" placeholder="Nhập mật khẩu" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="image" class="form-label">Ảnh đại diện:</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        <div class="mt-2">
                                            <img src="{{ asset('uploads/users/'.$user->image) }}" class="img-thumbnail" alt="{{ $user->name }}" style="width: 100px; height: 120px; object-fit: cover;">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 text-center">
                                        <button type="submit" class="btn btn-success w-100">
                                            <i class="bi bi-save"></i> Update User
                                        </button>
                                    </div>
                                </form>
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