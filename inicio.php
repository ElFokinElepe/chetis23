<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Cetis 23</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <header class="bg-dark text-white py-3" style="background-color: #800020 !important;">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                    <img src="https://cetis23.edu.mx/wp-content/uploads/2025/01/logo_certis23_emb.png" alt="Logo" height="50" class="me-3">
                <h1 class="h5 mb-0 fw-light">CETis 23</h1>
            </div>
            
            <a href="cerrarsesion.php" class="btn btn-light">Cerrar sesión</a>
        </div>
    </header>

    <main class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-success text-white">
                        Agregar
                    </div>
                    <div class="card-body">
                        <a href=".." class="text-decoration-none d-block mb-1">Alumnos</a>
                        <a href=".." class="text-decoration-none d-block mb-1">Asistencia</a>
                        <a href=".." class="text-decoration-none d-block mb-1">Docente</a>
                        <a href=".." class="text-decoration-none d-block mb-1">Especialidad</a>
                        <a href=".." class="text-decoration-none d-block mb-1">Grado</a>
                        <a href=".." class="text-decoration-none d-block mb-1">Grupo</a>
                        <a href=".." class="text-decoration-none d-block mb-1">Registro de laboratorios</a>
                        <a href=".." class="text-decoration-none d-block mb-1">Materia</a>
                        <a href=".." class="text-decoration-none d-block">Turno</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-info text-white">
                        Mostrar
                    </div>
                    <div class="card-body">
                        <a href="../vista/asistencia_muestra.php" class="text-decoration-none d-block mb-1">Mostrar asistencias</a>
                        <a href="../vista/boleta.php" class="text-decoration-none d-block mb-1">Generar boletas</a>
                        <a href="../vista/lab_muestra.php" class="text-decoration-none d-block">Ver registros de laboratorio de cómputo</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="fw-bold">Nosotros</h5>
                    <p>ISAXI: Internet, Sistemas y Administración Xinaxtle. Contamos con desarrolladores capacitados para ofrecerte páginas web que cubren tus necesidades.</p>
                </div>
                <div class="col-md-3">
                    <h5 class="fw-bold">Ayuda</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Tu cuenta</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Tus órdenes</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Manejo de cuenta</a></li>
                        <li><a href="ayuda.html" class="text-white text-decoration-none">Centro de ayuda</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="fw-bold">Opciones</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Alumnos</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Docentes</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Materia</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Asistencia</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="fw-bold">Contacto</h5>
                    <p>ISAXI</p>
                    <p>joxcs@gmail.com</p>
                    <p>221 111 7565</p>
                    <p>Toluca, México</p>
                </div>
            </div>
            <hr class="border-top border-light my-4">
            <div class="text-center">
                <p>
                    <a href="terminos.html" class="text-decoration-none">Términos y condiciones</a> &copy; 2013–2025 <strong>ISAXI</strong>. Todos los derechos reservados.
                    <a href="aviso.html" class="text-decoration-none">Aviso de privacidad</a>
                </p>
                <p>
                    <a href="#" class="text-white text-decoration-none me-2">Facebook</a>
                    <a href="#" class="text-white text-decoration-none me-2">YouTube</a>
                    <a href="#" class="text-white text-decoration-none me-2">Twitter</a>
                    <a href="#" class="text-white text-decoration-none me-2">LinkedIn</a>
                    <a href="#" class="text-white text-decoration-none">Google+</a>
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
