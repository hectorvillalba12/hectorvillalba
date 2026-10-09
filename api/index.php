<?php
// Portfolio - Técnico en Desarrollo de Software (Backend & Data Analysis)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portafolio de Desarrollador de Software especializado en Backend y Análisis de Datos. FastAPI, Django, Python, PHP, MySQL, PostgreSQL, Docker, Linux.">
    <title>Mi Portafolio | Desarrollador Backend & Data Analyst</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="80" tabindex="0">

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#inicio">
                <i class="bi bi-terminal-fill"></i> Villalba<span class="accent"> Hector</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sobre-mi">Sobre mí</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tecnologias">Tecnologías</a></li>
                    <li class="nav-item"><a class="nav-link" href="#proyectos">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ===== HERO / INICIO ===== -->
    <header class="hero d-flex align-items-center" id="inicio">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <p class="text-code mb-2">&lt;hola mundo /&gt;</p>
                    <h1 class="display-4 fw-bold">Soy Desarrollador de Software</h1>
                    <h2 class="h3 text-accent typing" id="typing"></h2>
                    <p class="lead mt-3 text-muted-hero">
                        Especializado en <strong>Backend</strong> y <strong>Análisis de Datos</strong>.
                        Construyo APIs robustas, automatizo procesos y transformo datos en decisiones.
                    </p>
                    <div class="mt-4 d-flex gap-3 flex-wrap">
                        <a href="#proyectos" class="btn btn-accent btn-lg">
                            <i class="bi bi-code-slash"></i> Ver proyectos
                        </a>
                        <a href="#contacto" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-envelope"></i> Contáctame
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-lg-block text-center">
                    <div class="hero-code-card">
                        <pre><code>{
  "backend":  ["FastAPI", "Django", "PHP"],
  "data":     ["Python", "SQL"],
  "devops":   ["Docker", "Linux"],
  "frontend": ["JS", "Bootstrap"]
}</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ===== SOBRE MÍ ===== -->
    <section class="section" id="sobre-mi">
        <div class="container">
            <h2 class="section-title"><span class="text-accent">&lt;/</span> Sobre mí <span class="text-accent">&gt;</span></h2>
            <div class="row mt-5 align-items-center">
                <div class="col-md-4 text-center mb-4">
                    <div class="avatar-badge">
                        <i class="bi bi-person-circle"></i>
                    </div>
                </div>
                <div class="col-md-8">
                    <p class="fs-5">
                        Soy <strong> Desarrollador fullstack</strong> apasionado por el mundo
                        <strong>Backend</strong> y el <strong>Análisis de Datos</strong>. Me gusta diseñar
                        arquitecturas limpias, construir APIs escalables y encontrar patrones en los datos
                        que generen valor real.
                    </p>
                    <p>
                        Trabajo principalmente con <strong>Python</strong> (FastAPI y Django) y <strong>PHP</strong>,
                        gestionando bases de datos <strong>MySQL</strong> y <strong>PostgreSQL</strong>.
                        Domino entornos <strong>Linux</strong> y despliego servicios con <strong>Docker</strong>.
                        Cuando toca tocar el frontend, uso <strong>JavaScript, HTML, CSS y Bootstrap</strong>.
                    </p>
                    <div class="row mt-4 text-center stats">
                        <div class="col-4">
                            <h3 class="counter text-accent" data-target="15">0</h3>
                            <small class="text-muted">Proyectos</small>
                        </div>
                        <div class="col-4">
                            <h3 class="counter text-accent" data-target="12">0</h3>
                            <small class="text-muted">Tecnologías</small>
                        </div>
                        <div class="col-4">
                            <h3 class="counter text-accent" data-target="100">0</h3>
                            <small class="text-muted">% Compromiso</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== TECNOLOGÍAS ===== -->
    <section class="section section-dark" id="tecnologias">
        <div class="container">
            <h2 class="section-title"><span class="text-accent">&lt;/</span> Tecnologías <span class="text-accent">&gt;</span></h2>
            <p class="text-center text-muted mb-5">Mi stack de trabajo</p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="tech-card">
                        <h5><i class="bi bi-server text-accent"></i> Backend</h5>
                        <div class="tech-tags">
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/fastapi/fastapi-original.svg" alt="FastAPI"> FastAPI</span>
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/django/django-plain.svg" alt="Django"> Django</span>
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg" alt="Python"> Python</span>
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" alt="PHP"> PHP</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tech-card">
                        <h5><i class="bi bi-database text-accent"></i> Bases de datos</h5>
                        <div class="tech-tags">
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" alt="MySQL"> MySQL</span>
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-original.svg" alt="PostgreSQL"> PostgreSQL</span>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tech-card">
                        <h5><i class="bi bi-terminal text-accent"></i> DevOps & Sistemas</h5>
                        <div class="tech-tags">
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/linux/linux-original.svg" alt="Linux"> Linux</span>
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/docker/docker-original.svg" alt="Docker"> Docker</span>
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" alt="Git"> Git</span>
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/github/github-original.svg" alt="GitHub"> GitHub</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tech-card">
                        <h5><i class="bi bi-bar-chart text-accent"></i> Análisis de Datos</h5>
                        <div class="tech-tags">
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg" alt="Python"> Python</span>
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/pandas/pandas-original.svg" alt="Pandas"> Pandas</span>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tech-card">
                        <h5><i class="bi bi-layout-wtf text-accent"></i> Frontend</h5>
                        <div class="tech-tags">
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" alt="JavaScript"> JavaScript</span>
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg" alt="HTML5"> HTML5</span>
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg" alt="CSS3"> CSS3</span>
                            <span class="tag"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap"> Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PROYECTOS ===== -->
    <section class="section" id="proyectos">
        <div class="container">
            <h2 class="section-title"><span class="text-accent">&lt;/</span> Proyectos <span class="text-accent">&gt;</span></h2>
            <p class="text-center text-muted mb-5">Una selección de lo que he construido</p>

            <div class="row g-4" id="projects-grid">
                <!-- Los proyectos se cargan con JavaScript desde assets/js/script.js -->
            </div>
        </div>
    </section>

    <!-- ===== CONTACTO ===== -->
    <section class="section section-dark" id="contacto">
        <div class="container">
            <h2 class="section-title"><span class="text-accent">&lt;/</span> Contacto <span class="text-accent">&gt;</span></h2>
            <p class="text-center text-muted mb-5">¿Tienes un proyecto en mente? Hablemos.</p>

            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <?php if (isset($_GET['msg']) && $_GET['msg'] === 'ok'): ?>
                        <div class="alert alert-success">
                            <i class="bi bi-check-circle"></i> ¡Mensaje enviado correctamente! Te responderé pronto.
                        </div>
                    <?php elseif (isset($_GET['msg']) && $_GET['msg'] === 'error'): ?>
                        <div class="alert alert-danger">
                            <i class="bi bi-x-circle"></i> Hubo un error al enviar el mensaje. Inténtalo de nuevo.
                        </div>
                    <?php endif; ?>

                    <form action="/contact" method="POST" class="contact-form" id="contactForm" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Nombre *</label>
                                <input type="text" class="form-control" name="nombre" required>
                                <div class="invalid-feedback">Ingresa tu nombre.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email *</label>
                                <input type="email" class="form-control" name="email" required>
                                <div class="invalid-feedback">Ingresa un email válido.</div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Asunto</label>
                                <input type="text" class="form-control" name="asunto" placeholder="Ej: Desarrollo de una API">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Mensaje *</label>
                                <textarea class="form-control" name="mensaje" rows="5" required></textarea>
                                <div class="invalid-feedback">Escribe tu mensaje.</div>
                            </div>
                            <div class="col-12 d-grid">
                                <button type="submit" class="btn btn-accent btn-lg">
                                    <i class="bi bi-send"></i> Enviar mensaje
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer class="footer text-center py-4">
        <div class="container">
            <div class="mb-3">
                <a href="https://github.com/hectorvillalba12" target="_blank" class="social-link"><i class="bi bi-github"></i></a>
                <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
            </div>
            <p class="mb-0 text-muted">
                &copy; <?php echo date('Y'); ?> — Hecho con <i class="bi bi-heart-fill text-accent"></i>,
                PHP y JavaScript.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/script.js"></script>
</body>
</html>
