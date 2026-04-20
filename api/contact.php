<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Elite Dev Portfolio</title>
    <style>
        :root {
            /* ستايل الأخضر الغامق الفخم والبني */
            --bg-dark: #0a1a14; 
            --deep-green: #1b4d3e;
            --luxury-brown: #a67c52;
            --accent-green: #2ecc71;
            --text-light: #e0e0e0;
            --glass-bg: rgba(255, 255, 255, 0.03);
            --form-bg: #0d1e18;
            --font-code: 'Fira Code', monospace;
        }

        /* الوضع البنفسجي الفخم */
        body.purple-mode {
            --bg-dark: #120a1a; 
            --deep-green: #2d1b4d;
            --accent-green: #9b59b6;
            --luxury-brown: #d4a373; 
            --form-bg: #1a0f26;
            --text-light: #e0e0e0;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-light);
            margin: 0;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            /* تم تعديل التدرج ليعتمد على المتغيرات */
            background: radial-gradient(circle at top right, var(--deep-green), var(--bg-dark));
            min-height: 100vh;
            transition: 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* --- تأثير الرقائق المتطايرة --- */
        .gold-leaf {
            position: fixed;
            background: linear-gradient(135deg, var(--luxury-brown), #ffe4b5);
            width: 8px;
            height: 8px;
            opacity: 0.3;
            z-index: -1;
            pointer-events: none;
            animation: luxuryFloat linear infinite;
        }

        @keyframes luxuryFloat {
            0% { transform: translateY(110vh) rotate(0deg); opacity: 0; }
            20% { opacity: 0.4; }
            100% { transform: translateY(-10vh) rotate(720deg); opacity: 0; }
        }

        header {
            padding: 1rem 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(166, 124, 82, 0.2);
            background: rgba(10, 26, 20, 0.8);
            position: sticky; top: 0; z-index: 1000;
        }

        .logo { font-family: var(--font-code); font-weight: bold; color: var(--luxury-brown); font-size: 1.4rem; }

        nav { display: flex; align-items: center; }
        nav a { text-decoration: none; color: var(--text-light); margin-left: 20px; font-weight: 500; transition: 0.3s; }
        nav a:hover { color: var(--accent-green); }

        /* زر تغيير الثيم */
        .theme-toggle-btn {
            background: var(--luxury-brown);
            color: white;
            border: none;
            padding: 5px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.7rem;
            font-weight: bold;
            margin-left: 20px;
            transition: 0.3s;
        }

        /* --- Contact Layout --- */
        .contact-section {
            max-width: 1000px;
            margin: 60px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 50px;
        }

        .contact-header { text-align: center; margin-top: 50px; }
        .contact-header h1 { font-size: 3rem; margin: 0; color: var(--text-light); }
        .contact-header h1 span { color: var(--luxury-brown); }
        .contact-header p { color: var(--accent-green); font-family: var(--font-code); font-size: 0.9rem; transition: 0.3s; }

        /* --- Info Cards --- */
        .info-card {
            background: var(--glass-bg);
            border: 1px solid rgba(166, 124, 82, 0.2);
            padding: 25px;
            border-radius: 20px;
            margin-bottom: 20px;
            transition: 0.4s;
            cursor: pointer;
        }
        .info-card:hover { 
            transform: translateX(10px); 
            border-color: var(--luxury-brown);
            background: rgba(166, 124, 82, 0.05);
        }
        .info-card:active { transform: scale(0.95) skewX(-3deg); }
        .info-card h3 { color: var(--luxury-brown); margin: 0 0 10px 0; font-size: 1rem; }
        .info-card p { margin: 0; font-size: 0.9rem; opacity: 0.8; }

        /* --- Luxury Form --- */
        .contact-form {
            background: var(--form-bg);
            padding: 40px;
            border-radius: 30px;
            border: 1px solid rgba(166, 124, 82, 0.3);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            transition: background 0.5s ease;
        }

        .form-group { margin-bottom: 25px; }
        .form-group label { 
            display: block; 
            margin-bottom: 10px; 
            font-family: var(--font-code); 
            font-size: 0.8rem; 
            color: var(--luxury-brown);
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 15px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(166, 124, 82, 0.2);
            border-radius: 12px;
            color: white;
            font-family: inherit;
            box-sizing: border-box;
            transition: 0.3s;
        }

        .form-group input:focus, .form-group textarea:focus {
            outline: none;
            border-color: var(--accent-green);
            background: rgba(46, 204, 113, 0.05);
        }

        .submit-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, var(--luxury-brown), #7d5a37);
            border: none;
            border-radius: 12px;
            color: white;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .submit-btn:hover {
            filter: brightness(1.2);
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(166, 124, 82, 0.3);
        }

        footer { text-align: center; padding: 50px; opacity: 0.4; font-family: var(--font-code); font-size: 0.8rem; }

        @media (max-width: 850px) {
            .contact-section { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <div id="particles"></div>

    <header>
        <div class="logo">< WADIE.DEV /></div>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="#" style="color: var(--luxury-brown);">Contact</a>
            <button class="theme-toggle-btn" onclick="toggleTheme()">🌓 MODE</button>
        </nav>
    </header>

    <div class="contact-header">
        <p id="systemStatus">// system.connect()</p>
        <h1>Get In <span>Touch</span></h1>
    </div>

    <section class="contact-section">
        <div class="contact-left">
            <div class="info-card">
                <h3>📍 LOCATION</h3>
                <p>Paris, France / Remote World</p>
            </div>
            <div class="info-card">
                <h3>📧 EMAIL</h3>
                <p>dev@wadie-tituz.com</p>
            </div>
            <div class="info-card">
                <h3>📱 TERMINAL</h3>
                <p>+33 1 23 45 67 89</p>
            </div>
        </div>

        <form class="contact-form">
            <div class="form-group">
                <label>USER_NAME</label>
                <input type="text" placeholder="Entrez votre nom..." required>
            </div>
            <div class="form-group">
                <label>USER_EMAIL</label>
                <input type="email" placeholder="votre@email.com" required>
            </div>
            <div class="form-group">
                <label>MESSAGE_BODY</label>
                <textarea rows="5" placeholder="Écrivez votre message ici..."></textarea>
            </div>
            <button type="submit" class="submit-btn">Execute_Send()</button>
        </form>
    </section>

    <footer>
        -- NOOB OR PRO, EVERY MESSAGE MATTERS --
    </footer>

    <script>
        // تغيير الثيم
        function toggleTheme() {
            const body = document.body;
            const status = document.getElementById('systemStatus');
            body.classList.toggle('purple-mode');

            if (body.classList.contains('purple-mode')) {
                status.innerText = '// system.secure_connection(purple)';
            } else {
                status.innerText = '// system.connect()';
            }
        }

        // توليد الرقائق المتطايرة
        const container = document.getElementById('particles');
        function createLeaf() {
            const leaf = document.createElement('div');
            leaf.className = 'gold-leaf';
            leaf.style.left = Math.random() * 100 + 'vw';
            leaf.style.animationDuration = (Math.random() * 5 + 7) + 's';
            leaf.style.width = (Math.random() * 6 + 4) + 'px';
            leaf.style.height = leaf.style.width;
            container.appendChild(leaf);
            setTimeout(() => leaf.remove(), 10000);
        }
        setInterval(createLeaf, 600);
    </script>

</body>
</html>