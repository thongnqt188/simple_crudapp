<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - MyApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            padding-top: 56px;
        }
        .content {
            min-height: calc(100vh - 132px); /* Adjust based on header and footer height */
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
            <h1 class="mb-4">Contact Us</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-primary text-white">
                            <h4>Get in Touch</h4>
                        </div>
                        <div class="card-body">
                            <form id="contactForm" action="{{ route('user.contact') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="message" class="form-label">Message:</label>
                                    <textarea name="message" id="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="form-group mb-3 text-center">
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-send"></i> Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-secondary text-white">
                            <h4>Contact Information</h4>
                        </div>
                        <div class="card-body">
                            <p>If you have any questions or need support, you can reach us through the following channels:</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-telephone"></i> Phone: +84 373 288-407</li>
                                <li><i class="bi bi-envelope"></i> Email: thongnqt188@gmail.com</li>
                                <li><i class="bi bi-house-door"></i> Address: 3 Dnh Thi Hoa, An Hai, Son Tra, Da Nang</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your message has been sent successfully!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-3 mt-4">
        <div class="container">
            <p class="mb-0">© 2024 MyApp. All Rights Reserved. nqt188</p>
            <small class="text-muted">Powered by Laravel & Bootstrap</small>
        </div>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var form = this;
            
            // Simulate form submission success
            setTimeout(function() {
                var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
            }, 500);
        });
    </script>
</body>
</html>
