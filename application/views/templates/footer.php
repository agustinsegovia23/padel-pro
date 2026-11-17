</div> <!-- /container principal -->

    <footer class="bg-dark text-white text-center py-4 mt-auto w-100">
        <div class="container">
            <div class="mb-3">
                <a class="navbar-brand fw-bold text-info" href="<?= base_url(); ?>">
                    <img src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo Padel Pro" height="45">
                </a>
            </div>

            <p class="mb-1">&copy; 2026 Padel Pro: Camino a la gloria. Estudio Point Break.</p>
            <p class="small text-secondary mb-3">Tecnicatura en Diseño Digital y Videojuegos - ULP</p>

            <!-- BOTÓN DESCARGA DE DOCUMENTACIÓN -->
            <div>
                <a href="<?= base_url('assets/docs/documentacion-padel-pro.pdf'); ?>" 
                   download="Documentacion_Padel_Pro.pdf" 
                   class="btn btn-outline-info btn-sm fw-semibold px-3 py-2">
                    <i class="fa-solid fa-file-arrow-down me-2"></i>Descargar Documentación del Proyecto (PDF)
                </a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>