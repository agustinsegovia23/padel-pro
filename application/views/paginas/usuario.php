<div class="my-5">
    
    <!-- TÍTULO DE LA SECCIÓN -->
    <div class="text-center mt-4 mb-5">
        <h1 class="fw-bold text-white display-5">Área de Usuario</h1>
        <p class="text-secondary lead">Accede a tu cuenta para guardar tu progreso, estadísticas y torneos.</p>
    </div>

    <!-- ALERTA DE CONFIRMACIÓN (Se muestra al enviar cualquier formulario) -->
    <?php if (!empty($mensaje_exito)): ?>
        <div class="alert alert-info alert-dismissible fade show shadow-sm border-info mb-4" role="alert" style="background-color: #152536; color: #e0f7fa;">
            <i class="fa-solid fa-circle-check me-2 text-info"></i>
            <?= $mensaje_exito; ?>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
    <?php endif; ?>

    <div class="row g-4 mb-5">
        
        <!-- TARJETA INICIAR SESIÓN + RECUPERACIÓN DE CUENTA -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0 p-4" style="background-color: #1b2430; color: #fff;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h3 class="fw-bold text-info mb-4">Iniciar Sesión</h3>
                        
                        <form action="<?= base_url('index.php/paginas/usuario'); ?>" method="POST">
                            <input type="hidden" name="accion" value="login">

                            <div class="mb-3">
                                <label for="login-email" class="form-label text-light fw-semibold">Correo Electrónico</label>
                                <input type="email" class="form-control text-white" id="login-email" name="email" placeholder="nombre@ejemplo.com" style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required>
                            </div>
                            
                            <div class="mb-2">
                                <label for="login-password" class="form-label text-light fw-semibold">Contraseña</label>
                                <input type="password" class="form-control text-white" id="login-password" name="password" placeholder="********" style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required>
                            </div>

                            <!-- ENLACE DESPLEGABLE PARA RECUPERACIÓN DE CUENTA -->
                            <div class="text-end mb-4">
                                <a class="small text-info text-decoration-none fw-semibold" data-bs-toggle="collapse" href="#collapseRecuperar" role="button" aria-expanded="false" aria-controls="collapseRecuperar">
                                    <i class="fa-solid fa-key me-1"></i> ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                            
                            <button type="submit" class="btn btn-cta-comprar w-100 py-2">
                                Ingresar
                            </button>
                        </form>
                    </div>

                    <!-- PANEL DESPLEGABLE DE RECUPERACIÓN DE CUENTA -->
                    <div class="collapse mt-4" id="collapseRecuperar">
                        <div class="p-3 rounded border border-info border-opacity-25" style="background-color: #151b22;">
                            <h5 class="fw-bold text-info fs-6 mb-2">
                                <i class="fa-solid fa-envelope-open-text me-1"></i> Recuperar Cuenta
                            </h5>
                            <p class="text-secondary small mb-3">
                                Ingresá el correo electrónico asociado a tu cuenta y te enviaremos las instrucciones para restablecer tu contraseña.
                            </p>
                            <form action="<?= base_url('index.php/paginas/usuario'); ?>" method="POST">
                                <input type="hidden" name="accion" value="recuperar">
                                <div class="input-group">
                                    <input type="email" class="form-control form-control-sm text-white" name="email_recuperar" placeholder="Tu correo registrado" style="background-color: #1b2430; border-color: rgba(255,255,255,0.2) !important;" required>
                                    <button class="btn btn-outline-info btn-sm fw-bold px-3" type="submit">
                                        Enviar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- TARJETA CREAR CUENTA -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0 p-4" style="background-color: #1b2430; color: #fff;">
                <div class="card-body">
                    <h3 class="fw-bold text-info mb-4">Crear Cuenta Nueva</h3>
                    
                    <form action="<?= base_url('index.php/paginas/usuario'); ?>" method="POST">
                        <input type="hidden" name="accion" value="registro">

                        <div class="mb-3">
                            <label for="register-user" class="form-label text-light fw-semibold">Nombre de Usuario</label>
                            <input type="text" class="form-control text-white" id="register-user" name="usuario" placeholder="Tu alias en la cancha" style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required>
                        </div>

                        <div class="mb-3">
                            <label for="register-email" class="form-label text-light fw-semibold">Correo Electrónico</label>
                            <input type="email" class="form-control text-white" id="register-email" name="email" placeholder="nombre@ejemplo.com" style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="register-password" class="form-label text-light fw-semibold">Contraseña</label>
                            <input type="password" class="form-control text-white" id="register-password" name="password" placeholder="Mínimo 8 caracteres" minlength="8" style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required>
                        </div>
                        
                        <button type="submit" class="btn btn-info fw-bold text-dark px-4 py-2 shadow-sm w-100" style="border: none;">
                            Registrarse
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- BOTÓN VOLVER AL INICIO -->
    <div class="text-center mb-4">
        <a href="<?= base_url(); ?>" class="btn btn-outline-info px-4 py-2 fw-semibold text-light shadow-sm">
            ← Volver al Inicio
        </a>
    </div>

</div>