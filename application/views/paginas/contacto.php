<div class="my-5">
    
    <div class="text-center mt-4 mb-5">
        <h1 class="fw-bold text-white display-5">Contacto y Comunidad</h1>
        <p class="text-secondary lead">¿Tienes dudas, sugerencias o quieres formar parte de la comunidad de Padel Pro? Escríbenos.</p>
    </div>

    <!-- ALERTA DE CONFIRMACIÓN AL ENVIAR CONSULTA -->
    <?php if (!empty($mensaje_contacto)): ?>
        <div class="alert alert-info alert-dismissible fade show shadow-sm border-info mb-4" role="alert" style="background-color: #152536; color: #e0f7fa;">
            <i class="fa-solid fa-paper-plane me-2 text-info"></i>
            <?= $mensaje_contacto; ?>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
    <?php endif; ?>

    <div class="row g-4 mb-5">
        
        <!-- TARJETA FORMULARIO -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0 p-4" style="background-color: #1b2430; color: #fff;">
                <div class="card-body">
                    <h3 class="fw-bold text-info mb-4">Envíanos un mensaje</h3>
                    
                    <form action="<?= base_url('index.php/paginas/contacto'); ?>" method="POST">
                        <input type="hidden" name="enviar_contacto" value="1">

                        <div class="mb-3">
                            <label for="nombre" class="form-label text-light fw-semibold">Nombre</label>
                            <input type="text" class="form-control border-secondary text-white" id="nombre" name="nombre" placeholder="Tu nombre completo" style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label text-light fw-semibold">Correo Electrónico</label>
                            <input type="email" class="form-control border-secondary text-white" id="email" name="email" placeholder="nombre@ejemplo.com" style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="mensaje" class="form-label text-light fw-semibold">Mensaje</label>
                            <textarea class="form-control border-secondary text-white" id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu consulta o comentario aquí..." style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-cta-comprar px-4 py-2">
                            Enviar Mensaje
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- TARJETA COMUNIDAD, REDES Y UBICACIÓN -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0 p-4 d-flex flex-column justify-content-between" style="background-color: #1b2430; color: #fff;">
                <div class="card-body">
                    <h3 class="fw-bold text-info mb-4">Únete a la Comunidad</h3>
                    <p class="text-secondary mb-4">
                        Mantente al tanto de las últimas novedades, actualizaciones del desarrollo y torneos exclusivos de la comunidad.
                    </p>
                    
                    <ul class="list-unstyled text-secondary fs-6 mb-4">
                        <li class="mb-3 d-flex align-items-center gap-2">
                            <a href="https://discord.com" target="_blank" class="text-info fs-5"><i class="fa-brands fa-discord"></i></a>
                            <div><strong class="text-light">Discord oficial:</strong> Comunidad activa de jugadores y betas.</div>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-2">
                            <a href="https://x.com/?lang=es" target="_blank" class="text-info fs-5"><i class="fa-brands fa-twitter"></i></a>
                            <div><strong class="text-light">X (Twitter):</strong> Anuncios oficiales y notas de parche.</div>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-2">
                            <a href="https://www.youtube.com" target="_blank" class="text-info fs-5"><i class="fa-brands fa-youtube"></i></a>
                            <div><strong class="text-light">YouTube:</strong> Trailers, gameplay y dev diaries.</div>
                        </li>
                    </ul>

                    <!-- PLATAFORMAS STEAM/EPIC -->
                    <div class="mb-4">
                        <span class="d-block text-secondary small fw-bold mb-2">CONSEGUILO EN:</span>
                        <div class="d-flex gap-2">      
                            <a href="https://store.steampowered.com/?l=spanish" target="_blank" class="btn btn-sm text-white fw-semibold flex-fill d-flex align-items-center justify-content-center gap-2 py-2" style="background-color: #171a21; border: 1px solid rgba(255,255,255,0.15);">
                                <i class="fa-brands fa-steam fs-5"></i> Steam
                            </a>
                            <a href="https://store.epicgames.com/?lang=es-ES" target="_blank" class="btn btn-sm text-white fw-semibold flex-fill d-flex align-items-center justify-content-center gap-2 py-2" style="background-color: #2a2a2a; border: 1px solid rgba(255,255,255,0.15);">
                                <i class="fa-solid fa-gamepad fs-5 text-info"></i> Epic Games
                            </a>
                        </div>
                    </div>

                    <!-- UBICACIÓN CON GOOGLE MAPS Y DOCUMENTACIÓN -->
                    <div class="p-3 rounded border border-secondary border-opacity-25" style="background-color: #151b22;">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-2">
                            <small class="text-secondary fw-semibold">
                                <i class="fa-solid fa-location-dot text-info me-1"></i> Estudio Point Break • San Luis, Argentina
                            </small>
                            <a href="<?= base_url('assets/docs/documentacion_padel_pro.pdf'); ?>" 
                               download="Documentacion_Padel_Pro.pdf" 
                               class="btn btn-sm btn-outline-info fw-semibold py-1 px-2">
                                <i class="fa-solid fa-book me-1"></i> Documentación PDF
                            </a>
                        </div>
                        <div class="ratio ratio-21x9 rounded overflow-hidden border border-secondary border-opacity-25">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53363.26625377581!2d-66.3653533!3d-33.29501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95d43954196ca6cd%3A0x7fc2e3b4d49ecc83!2sSan%20Luis!5e0!3m2!1ses-419!2sar!4v1700000000000!5m2!1ses-419!2sar" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                                title="Ubicación Estudio Point Break - San Luis">
                            </iframe>
                        </div>
                    </div>
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