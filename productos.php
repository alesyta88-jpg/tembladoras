<?php include 'header.php'; ?>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold" style="color: var(--rose-dark);">Catálogo de Productos</h1>
        <p class="lead text-muted">Descubre la variedad de gelatinas artísticas creadas para ti</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card card-custom h-100 p-3">
                <img src="img/2.png" class="card-img-top rounded-3" alt="Gelatina Floral 3D" style="height: 250px; object-fit: cover;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h3 class="h4 card-title fw-bold">Gelatina Floral 3D</h3>
                        <p class="card-text text-muted">Hermoso diseño floral tridimensional encapsulado en gelatina transparente con base cremosa.</p>
                    </div>
                    <div class="mt-3">
                        <a href="pedido.php?producto=Gelatina Floral 3D" class="btn btn-rose w-100">Pedir este Diseño</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom h-100 p-3">
                <img src="img/4.jpeg" class="card-img-top rounded-3" alt="Gelatina Temática" style="height: 250px; object-fit: cover;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h3 class="h4 card-title fw-bold">Gelatina Temática</h3>
                        <p class="card-text text-muted">Especial para cumpleaños, bodas o aniversarios. Personalizamos colores y formas.</p>
                    </div>
                    <div class="mt-3">
                        <a href="pedido.php?producto=Gelatina Tematica" class="btn btn-rose w-100">Pedir este Diseño</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom h-100 p-3">
                <img src="img/3.jpeg" class="card-img-top rounded-3" alt="Gelatina Personalizada" style="height: 250px; object-fit: cover;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h3 class="h4 card-title fw-bold">Gelatina Personalizada</h3>
                        <p class="card-text text-muted">Combina tus sabores favoritos, dedicatoria especial e imágenes comestibles.</p>
                    </div>
                    <div class="mt-3">
                        <a href="pedido.php?producto=Gelatina Personalizada" class="btn btn-rose w-100">Pedir este Diseño</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>