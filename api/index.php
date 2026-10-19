<?php
// Set page encoding and title headers
header('Content-Type: text/html; charset=utf-8');

$studentName = "WADIE";
$academicYear = "2025/2026";
$specialization = "Développement Digital - Option Web / Full-Stack";

// Atelier portfolio entries for 2nd Year OFPPT Digital Development
$modules = [
    ['code' => 'M201', 'title' => 'Préparation d’un projet web', 'description' => 'Analyser le besoin et préparer les étapes de réalisation d’un projet web.', 'topic' => 'Cadrage web'],
    ['code' => 'M202', 'title' => 'Approche agile', 'description' => 'Organiser le travail d’équipe et suivre un projet avec une approche agile.', 'topic' => 'Agile'],
    ['code' => 'M203', 'title' => 'Gestion des données', 'description' => 'Concevoir et gérer les données d’une application.', 'topic' => 'Base de données'],
    ['code' => 'M204', 'title' => 'Développement front-end', 'description' => 'Créer les interfaces et les interactions visibles d’une application web.', 'topic' => 'Front-end'],
    ['code' => 'M205', 'title' => 'Développement back-end', 'description' => 'Développer la logique serveur et les fonctionnalités d’une application.', 'topic' => 'Back-end'],
    ['code' => 'M206', 'title' => 'Création d’une application Cloud native', 'description' => 'Concevoir une application pensée pour les environnements cloud.', 'topic' => 'Cloud'],
    ['code' => 'M207', 'title' => 'Projet de synthèse', 'description' => 'Mettre en pratique les compétences de la formation dans un projet complet.', 'topic' => 'Projet'],
    ['code' => 'M208', 'title' => 'Intégration du milieu professionnel', 'description' => 'Préparer et réaliser l’intégration en milieu professionnel.', 'topic' => 'Stage'],
];

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFPPT ISTA 2nd Year Portfolio | <?php echo htmlspecialchars($studentName); ?></title>
    <!-- FontAwesome for rich icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            /* Theme 1: Dark Emerald & Bronze Luxury */
            --bg-dark: #0a1a14; 
            --deep-green: #1b4d3e;
            --luxury-brown: #a67c52;
            --luxury-brown-hover: #c49567;
            --accent-green: #2ecc71;
            --text-light: #f0f4f2;
            --text-muted: #a0b3aa;
            --glass-bg: rgba(27, 77, 62, 0.15);
            --card-bg: rgba(13, 30, 24, 0.75);
            --border-color: rgba(166, 124, 82, 0.25);
            --shadow: 0 15px 35px rgba(0,0,0,0.6);
            --font-code: 'Fira Code', 'Consolas', monospace;
            --font-sans: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        /* Theme 2: Royal Purple & Gold Mode */
        body.purple-mode {
            --bg-dark: #120a1a; 
            --deep-green: #2d1b4d;
            --luxury-brown: #d4a373; 
            --luxury-brown-hover: #e8bd93;
            --accent-green: #9b59b6;
            --text-light: #f3edfc;
            --text-muted: #bfa8d8;
            --glass-bg: rgba(45, 27, 77, 0.2);
            --card-bg: rgba(22, 13, 32, 0.8);
            --border-color: rgba(212, 163, 115, 0.3);
            --shadow: 0 15px 35px rgba(155, 89, 182, 0.25);
        }

        * {
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--bg-dark); 
            color: var(--text-light);
            margin: 0;
            overflow-x: hidden;
            transition: background-color 0.5s ease, color 0.5s ease;
            min-height: 100vh;
        }

        /* --- Floating Particles Background --- */
        #float-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        }

        .gold-leaf {
            position: absolute;
            background: linear-gradient(135deg, var(--luxury-brown), #ffe4b5);
            width: 8px;
            height: 10px;
            opacity: 0.3;
            border-radius: 2px;
            animation: luxuryFloat linear infinite;
        }

        @keyframes luxuryFloat {
            0% { transform: translateY(105vh) rotate(0deg); opacity: 0; }
            20% { opacity: 0.5; }
            80% { opacity: 0.5; }
            100% { transform: translateY(-10vh) rotate(720deg); opacity: 0; }
        }

        header {
            background: rgba(10, 26, 20, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 0 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border-color);
            position: sticky; 
            top: 0; 
            z-index: 1000;
            height: 75px;
            transition: background 0.5s ease;
        }

        body.purple-mode header {
            background: rgba(18, 10, 26, 0.85);
        }

        .logo {
            font-family: var(--font-code);
            font-weight: 800;
            color: var(--luxury-brown);
            letter-spacing: -0.5px;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .logo span.badge {
            font-size: 0.65rem;
            background: rgba(166, 124, 82, 0.15);
            border: 1px solid var(--luxury-brown);
            color: var(--luxury-brown);
            padding: 2px 8px;
            border-radius: 12px;
            letter-spacing: 0.5px;
        }

        nav { display: flex; align-items: center; gap: 12px; }

        nav a, .dropdown-btn {
            text-decoration: none;
            color: var(--text-light);
            padding: 8px 14px;
            font-weight: 500;
            font-size: 0.88rem;
            transition: 0.3s;
            cursor: pointer;
            border: none;
            background: none;
            border-radius: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        nav a:hover, .dropdown-btn:hover { 
            color: var(--luxury-brown); 
            background: rgba(255,255,255,0.03);
        }

        .theme-toggle-btn {
            background: linear-gradient(135deg, var(--luxury-brown), #7d5a37);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 0.75rem;
            font-weight: 700;
            transition: 0.3s;
            display: flex;
            align-items: center;
            gap: 6px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .theme-toggle-btn:hover {
            transform: translateY(-2px);
            filter: brightness(1.1);
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 50px; 
            right: 0;
            background: var(--card-bg);
            backdrop-filter: blur(15px);
            min-width: 280px;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: var(--shadow);
            animation: slideUp 0.3s ease;
            max-height: 420px;
            overflow-y: auto;
            z-index: 1001;
            padding: 6px 0;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .dropdown-content a {
            padding: 10px 18px;
            border-bottom: 1px solid rgba(255,255,255,0.03);
            font-family: var(--font-code);
            font-size: 0.8rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--text-light);
            text-decoration: none;
        }

        .dropdown-content a:hover { 
            background: rgba(166, 124, 82, 0.15); 
            color: var(--accent-green); 
        }

        .dropdown-content.show { display: block; }

        .hero {
            min-height: 65vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle at center, var(--deep-green) 0%, var(--bg-dark) 75%);
            padding: 60px 20px 40px;
            text-align: center;
            position: relative;
            transition: background 0.5s ease;
        }

        .hero-badge {
            background: rgba(166, 124, 82, 0.15);
            border: 1px solid var(--luxury-brown);
            color: var(--luxury-brown);
            padding: 6px 16px;
            border-radius: 20px;
            font-family: var(--font-code);
            font-size: 0.8rem;
            margin-bottom: 20px;
            letter-spacing: 1px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .hero h1 { 
            font-size: 3.5rem; 
            margin: 0; 
            font-weight: 900;
            letter-spacing: -1.5px;
            line-height: 1.1;
        }
        .hero h1 span { color: var(--luxury-brown); }
        
        .hero p { 
            font-family: var(--font-code);
            color: var(--accent-green); 
            font-size: 1rem;
            margin: 20px 0 35px; 
            max-width: 650px;
            line-height: 1.6;
        }

        .hero-actions {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn-main {
            background: linear-gradient(135deg, var(--luxury-brown), #7d5a37);
            color: white;
            padding: 14px 32px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 700;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
            transition: 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border: none;
            cursor: pointer;
        }

        .btn-main:hover { 
            transform: translateY(-3px) scale(1.02); 
            filter: brightness(1.2); 
        }

        .btn-secondary {
            background: rgba(255,255,255,0.05);
            color: var(--text-light);
            border: 1px solid var(--border-color);
            padding: 14px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.1);
            color: var(--luxury-brown);
        }

        .atelier-gallery[hidden] { display: none; }

        .modules-section {
            padding: 40px 5% 80px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 2.2rem;
            color: var(--text-light);
            margin: 0 0 10px;
        }

        .section-title p {
            color: var(--luxury-brown);
            font-family: var(--font-code);
            margin: 0;
            font-size: 0.9rem;
        }

        .modules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 30px;
        }

        @media (max-width: 480px) {
            .modules-grid {
                grid-template-columns: 1fr;
            }
        }

        .module-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        .module-card:hover {
            transform: translateY(-8px);
            border-color: var(--luxury-brown);
            box-shadow: var(--shadow);
        }

        .module-header {
            padding: 22px 25px 15px;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            position: relative;
        }

        .module-code {
            font-family: var(--font-code);
            font-size: 0.75rem;
            color: var(--accent-green);
            background: rgba(46, 204, 113, 0.1);
            padding: 3px 10px;
            border-radius: 12px;
            display: inline-block;
            margin-bottom: 8px;
            border: 1px solid rgba(46, 204, 113, 0.2);
        }

        .module-title {
            font-size: 1.25rem;
            margin: 0 0 10px;
            color: var(--text-light);
            font-weight: 700;
        }

        .module-desc {
            font-size: 0.85rem;
            color: var(--text-muted);
            line-height: 1.5;
            margin: 0;
        }

        .module-tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-top: 12px;
        }

        .tech-tag {
            font-size: 0.7rem;
            background: rgba(166, 124, 82, 0.12);
            color: var(--luxury-brown);
            padding: 2px 8px;
            border-radius: 4px;
            font-family: var(--font-code);
        }

        .exercise-upload-area {
            padding: 20px 25px;
            background: rgba(0,0,0,0.15);
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .area-title {
            font-size: 0.85rem;
            font-family: var(--font-code);
            color: var(--luxury-brown);
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .drop-zone {
            border: 2px dashed var(--border-color);
            border-radius: 12px;
            padding: 16px;
            text-align: center;
            background: rgba(255,255,255,0.01);
            color: var(--text-light);
            font: inherit;
            width: 100%;
            cursor: pointer;
            transition: 0.3s;
            margin-bottom: 15px;
        }

        .drop-zone:hover, .drop-zone.dragover {
            border-color: var(--luxury-brown);
            background: rgba(166, 124, 82, 0.08);
        }

        .drop-zone i {
            font-size: 1.5rem;
            color: var(--luxury-brown);
            margin-bottom: 6px;
        }

        .drop-zone p {
            margin: 0;
            font-size: 0.78rem;
            color: var(--text-muted);
        }

        .drop-zone span {
            color: var(--luxury-brown);
            font-weight: 600;
        }

        .file-input-hidden { display: none; }

        /* Thumbnails Gallery */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(75px, 1fr));
            gap: 10px;
            margin-top: 5px;
        }

        .gallery-item {
            position: relative;
            aspect-ratio: 1;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid var(--border-color);
            cursor: pointer;
            background: #000;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
            opacity: 0.8;
        }

        .gallery-item-actions {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            opacity: 0;
            transition: 0.2s opacity;
        }

        .gallery-item:hover .gallery-item-actions { opacity: 1; }

        .action-btn {
            background: rgba(255,255,255,0.2);
            color: white;
            border: none;
            width: 26px;
            height: 26px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 0.75rem;
            transition: 0.2s;
        }

        .action-btn:hover {
            background: var(--luxury-brown);
            transform: scale(1.1);
        }

        .action-btn.delete-btn:hover { background: #e74c3c; }

        .no-exercises {
            font-size: 0.78rem;
            color: var(--text-muted);
            font-style: italic;
            text-align: center;
            padding: 10px 0;
        }

        .module-footer {
            padding: 15px 25px;
            border-top: 1px solid rgba(255,255,255,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-atelier {
            color: var(--luxury-brown);
            background: none;
            border: 1px solid var(--border-color);
            padding: 6px 14px;
            border-radius: 6px;
            font-family: var(--font-code);
            font-size: 0.78rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-atelier:hover {
            background: var(--luxury-brown);
            color: white;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0; top: 0; 
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.88);
            backdrop-filter: blur(12px);
            align-items: center; justify-content: center;
            padding: 20px;
        }

        .modal-box {
            background: var(--card-bg);
            padding: 40px;
            border-radius: 24px;
            border: 1px solid var(--luxury-brown);
            max-width: 520px; width: 100%;
            text-align: center;
            box-shadow: var(--shadow);
            position: relative;
            animation: modalFadeIn 0.3s ease;
        }

        @keyframes modalFadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        .modal-footer {
            margin-top: 25px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .btn-res {
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 700;
            display: block;
            transition: 0.3s;
            font-family: var(--font-code);
            text-transform: uppercase;
            font-size: 0.8rem;
            text-align: center;
        }

        .btn-ennonce { background: rgba(255,255,255,0.05); color: var(--text-light); }
        .btn-rapport { background: var(--luxury-brown); color: white; }
        .btn-github { background: var(--accent-green); color: #0a1a14; }

        .btn-ennonce:hover { background: rgba(255,255,255,0.12); }
        .btn-rapport:hover { filter: brightness(1.15); }
        .btn-github:hover { filter: brightness(1.15); }

        .lightbox-modal {
            display: none;
            position: fixed;
            z-index: 3000;
            top: 0; left: 0;
            width: 100vw; height: 100vh;
            background: rgba(0,0,0,0.92);
            backdrop-filter: blur(10px);
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .lightbox-img {
            max-width: 90%;
            max-height: 80vh;
            border-radius: 12px;
            border: 1px solid var(--luxury-brown);
            box-shadow: 0 20px 50px rgba(0,0,0,0.8);
            object-fit: contain;
        }

        .lightbox-caption {
            margin-top: 15px;
            color: var(--text-light);
            font-family: var(--font-code);
            font-size: 0.9rem;
        }

        .lightbox-close {
            position: absolute;
            top: 25px; right: 35px;
            color: var(--text-light);
            font-size: 2rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .lightbox-close:hover { color: var(--luxury-brown); }

        footer { 
            text-align: center; 
            padding: 50px 20px; 
            border-top: 1px solid var(--border-color);
            background: var(--bg-dark);
            font-family: var(--font-code); 
            font-size: 0.75rem; 
            color: var(--text-muted);
        }

        footer span { color: var(--luxury-brown); }
    </style>
</head>
<body>

    <div id="float-container"></div>

    <header>
        <a href="index.php" class="logo">
            <i class="fa-solid fa-code"></i> <?php echo htmlspecialchars($studentName); ?>.DEV 
            <span class="badge">OFPPT DD 2ND YEAR</span>
        </a>
        <nav>
            <a href="#modules"><i class="fa-solid fa-cubes"></i> Modules</a>
            <a href="https://github.com/Wadiebogos1/Portfolio.git" target="_blank" rel="noopener"><i class="fa-brands fa-github"></i> GitHub</a>
            <button class="theme-toggle-btn" onclick="toggleTheme()">
                <i class="fa-solid fa-circle-half-stroke"></i> <span id="themeText">ROYAL MODE</span>
            </button>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-badge">
            <i class="fa-solid fa-graduation-cap"></i> OFPPT ISTA <?php echo $academicYear; ?> - <?php echo htmlspecialchars($specialization); ?>
        </div>
        <h1 id="heroTitle">Digital <span>Prestige</span></h1>
        <p>> system.init("2nd Year Digital Development Portfolio - Specialization Projects & Exercises Showcase");</p>
        
        <div class="hero-actions">
            <a href="#modules" class="btn-main">
                <i class="fa-solid fa-play"></i> Explorer les modules
            </a>
            <a href="https://github.com/Wadiebogos1/Portfolio.git" target="_blank" class="btn-secondary">
                <i class="fa-brands fa-github"></i> GitHub Profile
            </a>
        </div>
    </section>

    <section class="modules-section" id="modules">
        <div class="section-title">
            <h2>Modules de Développement Digital</h2>
            <p>// OFPPT · Option Web Full-Stack · 2e année</p>
        </div>
        <div class="modules-grid">
            <?php foreach ($modules as $module): ?>
                <?php
                    $imageDirectory = __DIR__ . '/../public/images/ateliers/' . $module['code'];
                    $imageFiles = [];
                    if (is_dir($imageDirectory)) {
                        $imageIterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($imageDirectory, FilesystemIterator::SKIP_DOTS));
                        foreach ($imageIterator as $imageEntry) {
                            if ($imageEntry->isFile() && in_array(strtolower($imageEntry->getExtension()), ['jpg', 'jpeg', 'png', 'webp', 'gif'], true)) {
                                $imageFiles[] = $imageEntry->getPathname();
                            }
                        }
                        sort($imageFiles, SORT_NATURAL | SORT_FLAG_CASE);
                    }
                    ?>
                <article class="module-card">
                    <div class="module-header">
                        <span class="module-code"><i class="fa-solid fa-bookmark"></i> <?php echo htmlspecialchars($module['code']); ?></span>
                        <h3 class="module-title"><?php echo htmlspecialchars($module['title']); ?></h3>
                        <p class="module-desc"><?php echo htmlspecialchars($module['description']); ?></p>
                        <div class="module-tech-stack"><span class="tech-tag"><?php echo htmlspecialchars($module['topic']); ?></span><span class="tech-tag">OFPPT · 2e année</span></div>
                    </div>
                    <div class="exercise-upload-area">
                        <button type="button" class="btn-atelier" id="ateliers-button-<?php echo $module['code']; ?>" aria-expanded="false" aria-controls="ateliers-<?php echo $module['code']; ?>" onclick="toggleAteliers('<?php echo $module['code']; ?>')">
                            <i class="fa-solid fa-folder-open"></i> Ateliers (<?php echo count($imageFiles); ?>)
                        </button>
                        <div class="atelier-gallery" id="ateliers-<?php echo $module['code']; ?>" hidden>
                            <?php if ($imageFiles): ?>
                                <div class="gallery-grid">
                                    <?php foreach ($imageFiles as $imageFile): ?>
                                        <?php $relativeImagePath = str_replace(DIRECTORY_SEPARATOR, '/', substr($imageFile, strlen($imageDirectory) + 1)); $encodedImagePath = implode('/', array_map('rawurlencode', explode('/', $relativeImagePath))); $imageUrl = '/images/ateliers/' . rawurlencode($module['code']) . '/' . $encodedImagePath; ?>
                                        <a class="gallery-item" href="<?php echo htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                                            <img src="<?php echo htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8'); ?>" alt="Image pour <?php echo htmlspecialchars($module['code'] . ' ' . $module['title'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy">
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <p class="no-exercises">Pas encore d’images. Ajoutez-les dans <code>public/images/ateliers/<?php echo htmlspecialchars($module['code']); ?>/</code>, puis faites git add, commit et push.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> // COMPILED BY <span><?php echo htmlspecialchars($studentName); ?></span> // OFPPT ISTA DIGITAL DEVELOPMENT PORTFOLIO</p>
    </footer>

    <script>
        function toggleAteliers(moduleCode) {
            const gallery = document.getElementById('ateliers-' + moduleCode);
            const button = document.getElementById('ateliers-button-' + moduleCode);
            gallery.hidden = !gallery.hidden;
            button.setAttribute('aria-expanded', String(!gallery.hidden));
        }
        function toggleTheme() {
            document.body.classList.toggle('purple-mode');
            const purple = document.body.classList.contains('purple-mode');
            document.getElementById('heroTitle').innerHTML = purple ? 'Royal <span>Excellence</span>' : 'Digital <span>Prestige</span>';
            document.getElementById('themeText').textContent = purple ? 'EMERALD MODE' : 'ROYAL MODE';
        }

        function createLeaf() {
            const container = document.getElementById('float-container');
            if (!container) return;
            const leaf = document.createElement('div');
            leaf.className = 'gold-leaf';
            leaf.style.left = Math.random() * 100 + 'vw';
            leaf.style.animationDuration = (Math.random() * 5 + 7) + 's';
            leaf.style.width = (Math.random() * 6 + 4) + 'px';
            container.appendChild(leaf);
            setTimeout(() => leaf.remove(), 10000);
        }
        setInterval(createLeaf, 750);
    </script>
</body>
</html>