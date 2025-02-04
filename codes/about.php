<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Kavinda Kiridena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
        }

        .section-padding {
            padding: 80px 0;
        }

        .tech-stack img {
            width: 50px;
            height: 50px;
            margin: 10px;
        }

        .certificate-card {
            transition: transform 0.3s;
        }

        .certificate-card:hover {
            transform: translateY(-5px);
        }

        .testimonial-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <!-- Navigation (same as index.html) -->
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
                        <a class="nav-link active" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.html">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <section class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5">About Me</h2>
            <div class="row">
                <div class="col-md-6">
                    <h3>Background</h3>
                    <p class="lead">Software Engineering undergraduate with a passion for backend development and
                        creating efficient, scalable solutions.</p>
                    <!-- <p>Experienced in various programming languages and frameworks, with a focus on backend technologies
                        and database management.</p> -->

                    <h3 class="mt-4">Education</h3>
                    <div class="mb-3">
                        <h5>BSc(Hones) Software Engineering</h5>
                        <p>
                            University of Plymouth, UK <br> <!--i want to add a line break here-->
                            Mar 2022 - Mar 2025
                        </p>

                    </div>

                    <h3 class="mt-4">Work Experience</h3>
                    <div class="mb-3">
                        <h5>Software Engineering Intern</h5>
                        <p>Sri Lanka Telecom PLC, Head Office, Colombo 01 <br>
                            Worked on developing and maintaining backend systems using ASP.NET mvc and MYSQL.<br>
                            May 2024 - Nov 2024</p>
                    </div>

                    <a href="cv.pdf" class="btn btn-primary mt-3" download>
                        <i class="fas fa-download me-2"></i>Download CV
                    </a><br>&nbsp;
                </div>
                <div class="col-md-6">
                    <h3>Skills & Expertise</h3>
                    <div class="mb-4">
                        <h5>Languages</h5>
                        <p>C#, PHP, C++, HTML, CSS,
                            JavaScript, SQL, Python, Java </p>

                        <h5>Frameworks</h5>
                        <p>ASP.NET MVC, .NET,
                            Laravel, Node.js, Bootstrap, Arduino
                        </p>

                        <h5>UI/UX Tools</h5>
                        <p>Figma, Canva, WordPress
                        </p>

                        <h5>IDEs & Tools</h5>
                        <p>VS Code, Visual Studio,
                            PlatformIO, Postman, Docker,
                            NetBeans
                        </p>
                        <h5>Version Control</h5>
                        <p>GitHub, Bitbucket
                        </p>
                        <h5>Databases</h5>
                        <p>Microsoft SQL Server, XAMPP
                            (MariaDB), MySQL Workbench,
                            Firebase, MongoDB
                        </p>
                    </div>

                    <!-- <div class="tech-stack">
                        <h5>Tech Stack</h5>
                        <img src="/api/placeholder/50/50" alt="HTML5">
                        <img src="/api/placeholder/50/50" alt="CSS3">
                        <img src="/api/placeholder/50/50" alt="JavaScript">
                        <img src="/api/placeholder/50/50" alt="PHP">
                        <img src="/api/placeholder/50/50" alt="MySQL">
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Certifications & Achievements</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card certificate-card">
                        <div class="card-body">
                            <h5 class="card-title">English Learning</h5>
                            <p class="card-text">British Council</p>
                            <a href="pdf/english.pdf" class="btn btn-outline-primary" download>
                                <i class="fas fa-download me-2"></i>Download Certificate
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card certificate-card">
                        <div class="card-body">
                            <h5 class="card-title">Web Design for Beginners</h5>
                            <p class="card-text">University of Moratuwa</p>
                            <a href="pdf/web.pdf" class="btn btn-outline-primary" download>
                                <i class="fas fa-download me-2"></i>Download Certificate
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card certificate-card">
                        <div class="card-body">
                            <h5 class="card-title">Python for Beginners</h5>
                            <p class="card-text">University of Moratuwa</p>
                            <a href="pdf/python.pdf" class="btn btn-outline-primary" download>
                                <i class="fas fa-download me-2"></i>Download Certificate
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card certificate-card">
                        <div class="card-body">
                            <h5 class="card-title">Financial Accounting</h5>
                            <p class="card-text">Open University of Sri Lanka</p>
                            <!-- <a href="#" class="btn btn-outline-primary" download>
                                <i class="fas fa-download me-2"></i>Download Certificate
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card certificate-card">
                        <div class="card-body">
                            <h5 class="card-title">Diploma Level Computerized Accounting</h5>
                            <p class="card-text">ICET Computer Institute</p>
                            <!-- <a href="cv.pdf" class="btn btn-outline-primary" download>
                                <i class="fas fa-download me-2"></i>Download Certificate
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card certificate-card">
                        <div class="card-body">
                            <h5 class="card-title">Diploma Level Human Resource
                                Management</h5>
                            <p class="card-text">ICET Computer Institute</p>
                            <!-- <a href="#" class="btn btn-outline-primary" download>
                                <i class="fas fa-download me-2"></i>Download Certificate
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card certificate-card">
                        <div class="card-body">
                            <h5 class="card-title">Diploma Level Microsoft Office</h5>
                            <p class="card-text">ICET Computer Institute</p>
                            <!-- <a href="#" class="btn btn-outline-primary" download>
                                <i class="fas fa-download me-2"></i>Download Certificate
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h3 class="text-center mb-4">Awards & Competitions</h3>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Douthan 3.0 Builathon</h5>
                        <p class="card-text">10th Place - IEEE of NSBM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- References Section -->
    <section class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5">References</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="testimonial-card">
                        <h5>Professional Reference</h5>
                        <p><strong>Mr. Janaka Harambearachchi</strong></p>
                        <p>MBA (Col), MSc, C.Eng, B.Sc.Eng (Hons), MIE (SL) <br>
                            General Manager - Digital Platforms, Sri Lanka Telecom PLC</p>
                        <p>Phone: +94 714 007 983 ,+94 112 027 310 <br>Email: jana@slt.com.lk <br> www.sltmobitel.lk</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="testimonial-card">
                        <h5>Academic Reference</h5>
                        <p><strong>Ms. Hirushi Dilpriya</strong></p>
                        <p>Lecturer at NSBM - Department of Computer and Data Science</p>
                        <p>Phone: +94 71 564 0820 <br>Email: hirushi.d@nsbm.ac.lk </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>