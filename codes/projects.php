<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Kavinda Kiridena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
        }

        .section-padding {
            padding: 80px 0;
        }

        .project-card {
            transition: transform 0.3s;
            height: 100%;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .tech-badge {
            margin: 2px;
            padding: 5px 10px;
            border-radius: 15px;
            background-color: #f8f9fa;
            display: inline-block;
            font-size: 0.85rem;
        }

        .project-img {
            height: 200px;
            object-fit: cover;
        }

        .github-link {
            color: #333;
            transition: color 0.3s;
        }

        .github-link:hover {
            color: #0d6efd;
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
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="projects.html">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Projects Section -->
    <section class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5">My Projects</h2>
            <div class="row g-4">
                <!-- SLT Call Tagging Application -->
                <div class="col-md-6 col-lg-4">
                    <div class="card project-card">
                        <img src="img/call.png" class="card-img-top project-img" alt="SLT Call Tagging">
                        <div class="card-body">
                            <h5 class="card-title">SLT Call Tagging Application</h5>
                            <p class="card-text">Group project</p>
                            <p class="card-text">A call tagging web system using ASP.NET Core MVC to help agents log,
                                track, and analyze customer service interactions. </p>
                            <p class="card-text">Currently using at Sri Lanka Telecom Head Office</p>
                            <div class="mb-3">
                                <span class="tech-badge">ASP.NET MVC</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">Bootstrap</span>
                            </div>
                            <a href="https://github.com/KavindaKiridana/5_Customer-care-center-application"
                                class="github-link" target="_blank">
                                <i class="fab fa-github"></i> View on GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Add more project cards with placeholder images -->
                <div class="col-md-6 col-lg-4">
                    <div class="card project-card">
                        <img src="img/library.jpg" class="card-img-top project-img" alt="E-Commerce Platform">
                        <div class="card-body">
                            <h5 class="card-title">Library Management System</h5>
                            <p class="card-text">Group project</p>
                            <p class="card-text">A MERN stack library system enabling book management, user control, and
                                lending operations for efficient library administration.</p>
                            <div class="mb-3">
                                <span class="tech-badge">Node.js</span>
                                <span class="tech-badge">Express.js</span>
                                <span class="tech-badge">MongoDB</span>
                            </div>
                            <a href="https://github.com/ChandeepaKumarasinghe/fullstack1" class="github-link"
                                target="_blank">
                                <i class="fab fa-github"></i> View on GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card project-card">
                        <img src="img/gate.png" class="card-img-top project-img" alt="Task Management System">
                        <div class="card-body">
                            <h5 class="card-title">SLT Gate-pass Application (another industry-level application)</h5>
                            <p class="card-text">Group project</p>
                            <p class="card-text">A secure ASP.NET MVC system for SLT that manages and tracks gate
                                passes, controlling asset movement through verification and approval workflows.</p>
                            <p class="card-text">Another industry-level application</p>
                            <div class="mb-3">
                                <span class="tech-badge">ASP.NET MVC</span>
                                <span class="tech-badge">Bootstrap</span>
                                <span class="tech-badge">MYSQL</span>
                            </div>
                            <a href="https://github.com/KavindaKiridana/9_Gate-pass-Application" class="github-link"
                                target="_blank">
                                <i class="fab fa-github"></i> View on GitHub
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card project-card">
                        <img src="img/park.png" class="card-img-top project-img" alt="Task Management System">
                        <div class="card-body">
                            <h5 class="card-title">Smart Car Parking System</h5>
                            <p class="card-text">Individual project</p>
                            <p class="card-text">An IoT-based smart parking system using ESP8266 and Firebase that
                                detects car presence via ultrasonic sensors, displays real-time slot availability, and
                                allows users to remotely book parking spots through a web interface.</p>
                            <div class="mb-3">
                                <span class="tech-badge">C++</span>
                                <span class="tech-badge">JavaScript</span>
                                <span class="tech-badge">Bootstrap</span>
                                <span class="tech-badge">Arduino</span>
                                <span class="tech-badge">Firebase</span>
                            </div>
                            <a href="https://github.com/KavindaKiridana" class="github-link" target="_blank">
                                <i class="fab fa-github"></i> View on GitHub
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card project-card">
                        <img src="img/finder.png" class="card-img-top project-img" alt="Task Management System">
                        <div class="card-body">
                            <h5 class="card-title">Accommodation Finder</h5>
                            <p class="card-text">Individual project</p>
                            <p class="card-text">A web-based student accommodation finder enabling students to search
                                and book housing, landlords to list properties, and administrators/wardens to manage the
                                platform.</p>
                            <div class="mb-3">
                                <span class="tech-badge">PHP</span>
                                <span class="tech-badge">Bootstrap</span>
                                <span class="tech-badge">JavaScript</span>
                                <span class="tech-badge">MYSQL</span>
                            </div>
                            <a href="https://github.com/KavindaKiridana/4_Accommodation-Finder" class="github-link"
                                target="_blank">
                                <i class="fab fa-github"></i> View on GitHub
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-lg-4">
                    <div class="card project-card">
                        <img src="/api/placeholder/400/200" class="card-img-top project-img"
                            alt="Task Management System">
                        <div class="card-body">
                            <h5 class="card-title">Smart Greenhouse Application</h5>
                            <p class="card-text">Individual project</p>
                            <p class="card-text">A collaborative task management system with real-time updates and team
                                collaboration features.</p>
                            <div class="mb-3">
                                <span class="tech-badge">C++</span>
                                <span class="tech-badge">Arduino</span>
                                <span class="tech-badge">Firebase</span>
                            </div>
                            <a href="https://github.com/KavindaKiridana/3_Smart-Green-House" class="github-link"
                                target="_blank">
                                <i class="fab fa-github"></i> View on GitHub
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>