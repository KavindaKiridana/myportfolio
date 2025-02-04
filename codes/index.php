<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kavinda Kiridena - Software Engineer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/api/placeholder/1920/1080');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
        }

        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: none;
        }

        .hero-content {
            text-align: center;
        }

        .social-links a {
            color: white;
            margin: 0 10px;
            font-size: 24px;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #007bff;
        }

        .cta-button {
            padding: 12px 30px;
            font-size: 18px;
            margin: 10px;
            border-radius: 30px;
            transition: transform 0.3s;
        }

        .cta-button:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Kavinda Kiridana</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.html">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content"><br><br><br>
                <img src="img/dp.jpg" alt="Kavinda Kiridena" class="profile-img mb-4">
                <h1 class="display-4 mb-3">Kavinda Kiridena</h1>
                <h2 class="h3 mb-4">SE Undergraduate | Backend Developer</h2>
                <p class="lead mb-4">To secure a Trainee Backend
                    Developer role, utilizing my ASP.NET
                    MVC internship experience, strong
                    software engineering foundation, and
                    expertise in backend technologies to
                    contribute and</p>
                <div class="social-links mb-4">
                    <a href="https://github.com/KavindaKiridana" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://linkedin.com/in/kavinda-kiridana-8a330521a" target="_blank"><i
                            class="fab fa-linkedin"></i></a>
                </div>
                <div>
                    <a href="about.html" class="btn btn-primary cta-button">Who I Am</a>
                    <a href="contact.html" class="btn btn-outline-light cta-button">Hire Me</a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>