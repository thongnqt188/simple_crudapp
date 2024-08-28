<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us - MyApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            padding-top: 56px;
        }
        .content {
            min-height: calc(90vh - 132px);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
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
    <main class="content mt-4">
        <div class="container">
            <h1 class="mb-4">About Us</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-sm border-0">   
                            <div class="card-header bg-secondary text-white">
                                <h3>Welcome to MyApp</h3>
                            </div>
                            <p>MyApp is a comprehensive user management application designed to make it easy for you to handle user information efficiently. With MyApp, you can create, read, update, and delete user records with ease.</p>
                            <p>Our application is built using Laravel and Bootstrap, ensuring a smooth and responsive user experience. Whether you're managing a small set of users or a large database, MyApp provides the tools you need to keep your data organized and accessible.</p>
                            <h4>Features:</h4>
                            <ul>
                                <li>Easy User Management: Add, edit, and delete user records.</li>
                                <li>Responsive Design: Access your user management system from any device.</li>
                                <li>Secure Authentication: Manage user credentials securely.</li>
                                <li>Customizable: Adapt the application to meet your specific needs.</li>
                            </ul>
                            <h4>Question:</h4>
                            <ul>
                                <li>If you have any question hit the Contact!</li>
                            </ul>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
