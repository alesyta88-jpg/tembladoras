<?php include 'header.php'; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <span class="badge rounded-pill bg-white px-3 py-2 border shadow-sm mb-3" style="color: var(--rose-dark) !important; border-color: rgba(224,122,149,0.3) !important;">
                🌸 Estamos para Atenderte
            </span>
            <h1 class="display-4 fw-bold mb-3" style="color: var(--rose-dark);">Contáctanos</h1>
            <p class="lead text-muted mb-5">¿Tienes alguna duda o quieres cotizar una gelatina 3D especial? Escríbenos directamente.</p>
            
            <div class="card card-custom p-4 p-md-5 mb-5 text-start">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start mb-4">
                            <div class="rounded-circle p-3 me-3 text-white" style="background-color: var(--rose-accent);">
                                <i class="bi bi-geo-alt-fill fs-4"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1 text-muted fw-semibold">Ubicación de la Tienda</h4>
                                <p class="fw-bold mb-0" style="color: var(--text-dark);">Plaza Sebastián Pagador, calle Ustáriz</p>
                                <small class="text-muted">Oruro, Bolivia</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="rounded-circle p-3 me-3 text-white" style="background-color: #25D366;">
                                <i class="bi bi-whatsapp fs-4"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1 text-muted fw-semibold">WhatsApp / Celular</h4>
                                <p class="fw-bold mb-0" style="color: var(--text-dark);">+591 69567690</p>
                                <small class="text-muted">Atención personalizada</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center border-start-md ps-md-4">
                        <h3 class="h5 fw-bold mb-3" style="color: var(--rose-dark);">¿Prefieres escribirnos ahora?</h3>
                        <p class="text-muted small mb-4">Envíanos un mensaje rápido por WhatsApp y te responderemos al instante.</p>
                        <a href="https://api.whatsapp.com/send?phone=59169567690&text=Hola,%20quisiera%20más%20información%20sobre%20sus%20gelatinas%203D%20artesanales." class="btn btn-rose w-100 py-3 shadow-sm" target="_blank">
                            <i class="bi bi-whatsapp me-2"></i> Abrir Chat de WhatsApp
                        </a>
                    </div>
                </div>
            </div>

            <!-- Formulario de Consulta Rápida Personalizado -->
            <div class="card card-custom p-4 p-md-5 text-start">
                <h3 class="h4 fw-bold mb-3 text-center" style="color: var(--rose-dark);">Envíanos una consulta directa</h3>
                <p class="text-muted text-center small mb-4">Completa el formulario y se abrirá tu WhatsApp con el mensaje listo.</p>
                
                <form id="consultaForm">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tu Nombre:</label>
                        <input type="text" id="nombreConsulta" class="form-control rounded-3 py-2" placeholder="Ej: Alejandra Luna" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Motivo o Consulta:</label>
                        <textarea id="mensajeConsulta" class="form-control rounded-3" rows="3" placeholder="Escribe tu duda, consulta de precios o diseño personalizado..." required></textarea>
                    </div>
                    <button type="button" onclick="enviarConsultaWhatsApp()" class="btn btn-rose w-100 py-3 fs-6">
                        <i class="bi bi-whatsapp me-2"></i> Enviar Consulta por WhatsApp
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function enviarConsultaWhatsApp() {
    let nombre = document.getElementById('nombreConsulta').value;
    let mensaje = document.getElementById('mensajeConsulta').value;
    
    if(!nombre || !mensaje) {
        alert("Por favor completa tu nombre y tu mensaje.");
        return;
    }
    
    let telefono = "59169567690";
    let textoFinal = `Hola *Las Tembladoras*, mi nombre es *${nombre}*.\n\nConsulta: ${mensaje}`;
    
    let url = `https://api.whatsapp.com/send?phone=${telefono}&text=${encodeURIComponent(textoFinal)}`;
    window.open(url, '_blank');
}
</script>

<?php include 'footer.php'; ?>