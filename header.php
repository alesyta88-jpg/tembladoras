<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Las Tembladoras - Gelatinas 3D Artesanales</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --blush-bg: #fff5f7;
            --rose-accent: #e07a95;
            --rose-dark: #8c2a45;
            --cream-gold: #d4af37;
            --soft-card: #ffffff;
            --text-dark: #2c1820;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--blush-bg);
            color: var(--text-dark);
        }

        h1, h2, h3, .brand-font {
            font-family: 'Cormorant Garamond', serif;
        }

        .navbar-tembladoras {
            background-color: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(224, 122, 149, 0.2);
        }

        .navbar-brand {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--rose-dark) !important;
        }

        .nav-link {
            font-weight: 500;
            color: var(--text-dark) !important;
            margin: 0 5px;
            transition: color 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--rose-accent) !important;
        }

        .btn-rose {
            background-color: var(--rose-accent);
            color: white;
            font-weight: 600;
            border-radius: 30px;
            padding: 10px 24px;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(224, 122, 149, 0.3);
        }

        .btn-rose:hover {
            background-color: var(--rose-dark);
            color: white;
            box-shadow: 0 6px 20px rgba(140, 42, 69, 0.4);
            transform: translateY(-2px);
        }

        .btn-outline-rose {
            border: 2px solid var(--rose-accent);
            color: var(--rose-dark);
            font-weight: 600;
            border-radius: 30px;
            padding: 8px 22px;
            background: transparent;
            transition: all 0.3s ease;
        }

        .btn-outline-rose:hover {
            background-color: var(--rose-accent);
            color: white;
        }

        .card-custom {
            background: var(--soft-card);
            border: 1px solid rgba(224, 122, 149, 0.15);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(140, 42, 69, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(140, 42, 69, 0.12);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light sticky-top navbar-tembladoras py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <i class="bi bi-flower1 me-2" style="color: var(--rose-accent);"></i> Las Tembladoras
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="productos.php">Catálogo</a></li>
                <li class="nav-item"><a class="nav-link" href="pedido.php">Hacer Pedido</a></li>
                <li class="nav-item"><a class="nav-link" href="empresa.php">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a class="btn btn-rose text-decoration-none" href="pedido.php">Pedir por WhatsApp</a>
                </li>
            </ul>
        </div>
    </div>
</nav>