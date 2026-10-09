// ===== Portfolio - JavaScript =====

// ===== 1. Efecto typing en el hero =====
const roles = [
    "Backend Developer",
    "Data Analyst",
    "Python & PHP Developer",
    "API Builder"
];
const typingEl = document.getElementById('typing');
let roleIndex = 0, charIndex = 0, deleting = false;

function typeEffect() {
    if (!typingEl) return;
    const current = roles[roleIndex];
    typingEl.textContent = current.substring(0, charIndex);

    if (!deleting && charIndex < current.length) {
        charIndex++;
        setTimeout(typeEffect, 90);
    } else if (deleting && charIndex > 0) {
        charIndex--;
        setTimeout(typeEffect, 45);
    } else {
        if (!deleting) {
            deleting = true;
            setTimeout(typeEffect, 1600); // pausa antes de borrar
        } else {
            deleting = false;
            roleIndex = (roleIndex + 1) % roles.length;
            setTimeout(typeEffect, 400);
        }
    }
}
typeEffect();

// ===== 2. Contadores animados (Sobre mí) =====
const counters = document.querySelectorAll('.counter');
const observerOptions = { threshold: 0.5 };

const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const el = entry.target;
            const target = +el.dataset.target;
            let current = 0;
            const step = Math.max(1, Math.ceil(target / 50));
            const timer = setInterval(() => {
                current += step;
                if (current >= target) { current = target; clearInterval(timer); }
                el.textContent = current;
            }, 30);
            counterObserver.unobserve(el);
        }
    });
}, observerOptions);
counters.forEach(c => counterObserver.observe(c));

// ===== 3. Proyectos renderizados dinámicamente =====
const proyectos = [
    {
        icon: "bi-graph-up-arrow",
        titulo: "Dashboard de Análisis de Ventas",
        descripcion: "API en FastAPI + PostgreSQL que procesa datos de ventas y genera reportes con KPIs en tiempo real.",
        tags: ["FastAPI", "PostgreSQL", "Pandas", "Docker"],
        repo: "#",
        demo: "#"
    },
    {
        icon: "bi-shop",
        titulo: "E-commerce Backend",
        descripcion: "Backend completo con Django REST Framework: autenticación JWT, carrito, pagos y panel de administración.",
        tags: ["Django", "Django REST", "MySQL", "JWT"],
        repo: "#",
        demo: "#"
    },
    {
        icon: "bi-cloud-upload",
        titulo: "API de Gestión Documental",
        descripcion: "Microservicio en FastAPI con Docker para subir, clasificar y buscar documentos con metadatos.",
        tags: ["FastAPI", "Docker", "Linux", "PostgreSQL"],
        repo: "#",
        demo: "#"
    },
    {
        icon: "bi-filetype-php",
        titulo: "Sistema de Inventario (PHP)",
        descripcion: "Sistema web de inventario con PHP nativo y MySQL: CRUD completo, reportes en PDF y roles de usuario.",
        tags: ["PHP", "MySQL", "Bootstrap", "JavaScript"],
        repo: "#",
        demo: "#"
    },
    {
        icon: "bi-clipboard-data",
        titulo: "ETL de Datos Climáticos",
        descripcion: "Pipeline ETL en Python que extrae datos de APIs públicas, los limpia y los carga en PostgreSQL para análisis.",
        tags: ["Python", "ETL", "PostgreSQL", "APIs"],
        repo: "#",
        demo: "#"
    },
    {
        icon: "bi bi-shield-check".split(" ")[1],
        titulo: "Landing Page Corporativa",
        descripcion: "Sitio corporativo responsive con Bootstrap, formulario de contacto dinámico y optimización básica SEO.",
        tags: ["HTML", "CSS", "Bootstrap", "JavaScript"],
        repo: "#",
        demo: "#"
    }
];

const grid = document.getElementById('projects-grid');
if (grid) {
    grid.innerHTML = proyectos.map(p => `
        <div class="col-md-6 col-lg-4">
            <div class="project-card">
                <div class="project-icon"><i class="bi ${p.icon}"></i></div>
                <div class="card-body">
                    <h5>${p.titulo}</h5>
                    <div class="project-tags">${p.tags.map(t => `<span>${t}</span>`).join('')}</div>
                    <p>${p.descripcion}</p>
                    <div class="project-links">
                        <a href="${p.repo}" target="_blank"><i class="bi bi-github"></i> Código</a>
                        <a href="${p.demo}" target="_blank"><i class="bi bi-box-arrow-up-right"></i> Demo</a>
                    </div>
                </div>
            </div>
        </div>
    `).join('');
}

// ===== 4. Validación del formulario de contacto (Bootstrap) =====
const form = document.getElementById('contactForm');
if (form) {
    form.addEventListener('submit', (e) => {
        if (!form.checkValidity()) {
            e.preventDefault();
            e.stopPropagation();
        }
        form.classList.add('was-validated');
    });
}

// ===== 5. Navbar: cerrar menú móvil al hacer click =====
const navLinks = document.querySelectorAll('.navbar .nav-link');
const navCollapse = document.getElementById('navMenu');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        if (navCollapse.classList.contains('show')) {
            bootstrap.Collapse.getInstance(navCollapse).hide();
        }
    });
});

// ===== 6. Sombra en navbar al hacer scroll =====
window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    navbar.style.boxShadow = window.scrollY > 50
        ? '0 4px 20px rgba(0,0,0,.4)'
        : 'none';
});
