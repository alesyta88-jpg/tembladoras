<?php include 'header.php'; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card card-custom p-4 p-md-5">
                <div class="text-center mb-4">
                    <h2 class="display-5 fw-bold" style="color: var(--rose-dark);">Realiza tu Pedido</h2>
                    <p class="text-muted">Completa los datos y tu pedido se enviará directamente a nuestro WhatsApp</p>
                </div>

                <form id="pedidoForm">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tu Nombre completo:</label>
                        <input type="text" id="nombre" class="form-control rounded-3 py-2" placeholder="Ej: Alejandra Luna" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tipo de Gelatina:</label>
                        <select id="producto" class="form-select rounded-3 py-2">
                            <option value="Gelatina Floral 3D">Gelatina Floral 3D</option>
                            <option value="Gelatina Temática">Gelatina Temática</option>
                            <option value="Gelatina Personalizada">Gelatina Personalizada</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Detalles, fecha de entrega o dedicatoria:</label>
                        <textarea id="detalles" class="form-control rounded-3" rows="4" placeholder="Ej: Para el sábado a las 3 PM con dedicatoria de feliz cumpleaños..."></textarea>
                    </div>
                    <button type="button" onclick="enviarWhatsApp()" class="btn btn-rose w-100 py-3 mt-2 fs-5">
                        <i class="bi bi-whatsapp me-2"></i> Enviar Pedido a WhatsApp
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function enviarWhatsApp() {
    let nombre = document.getElementById('nombre').value;
    let producto = document.getElementById('producto').value;
    let detalles = document.getElementById('detalles').value;
    
    if(!nombre) {
        alert("Por favor escribe tu nombre.");
        return;
    }
    
    let telefono = "59162971150";
    let mensaje = `Hola *Las Tembladoras*, mi nombre es *${nombre}*.\n\nQuiero realizar un pedido de: *${producto}*.\nDetalles / Fecha: ${detalles}`;
    
    let url = `https://api.whatsapp.com/send?phone=${telefono}&text=${encodeURIComponent(mensaje)}`;
    window.open(url, '_blank');
}
</script>

<?php include 'footer.php'; ?>