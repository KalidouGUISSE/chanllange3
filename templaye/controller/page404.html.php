<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page non trouvée</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .container {
            text-align: center;
            color: white;
            padding: 2rem;
            max-width: 600px;
            position: relative;
            z-index: 2;
        }

        .error-number {
            font-size: 8rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
            }
            to {
                text-shadow: 0 0 30px rgba(255, 255, 255, 0.8), 0 0 40px rgba(255, 255, 255, 0.6);
            }
        }

        .error-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease-out;
        }

        .error-message {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            line-height: 1.6;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        .btn-container {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        .btn {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .btn:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn:active {
            transform: translateY(0);
        }

        .btn-primary {
            background: rgba(255, 255, 255, 0.9);
            color: #667eea;
            border-color: rgba(255, 255, 255, 0.9);
        }

        .btn-primary:hover {
            background: white;
            color: #5a67d8;
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 70%;
            right: 10%;
            animation-delay: 1s;
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 10%;
            left: 20%;
            animation-delay: 2s;
        }

        .shape:nth-child(4) {
            width: 100px;
            height: 100px;
            top: 20%;
            right: 20%;
            animation-delay: 3s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .search-container {
            margin-top: 2rem;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .search-box {
            display: flex;
            max-width: 400px;
            margin: 0 auto;
            border-radius: 50px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .search-input {
            flex: 1;
            padding: 1rem 1.5rem;
            border: none;
            background: transparent;
            color: white;
            font-size: 1rem;
            outline: none;
        }

        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .search-btn {
            background: rgba(255, 255, 255, 0.3);
            border: none;
            color: white;
            padding: 1rem 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            background: rgba(255, 255, 255, 0.4);
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            
            .error-number {
                font-size: 6rem;
            }
            
            .error-title {
                font-size: 2rem;
            }
            
            .error-message {
                font-size: 1rem;
            }
            
            .btn-container {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="container">
        <div class="error-number">404</div>
        <h1 class="error-title">Oups ! Page non trouvée</h1>
        <p class="error-message">
            Désolé, la page que vous recherchez semble avoir disparu dans le cyberespace. 
            Elle a peut-être été déplacée, supprimée ou n'a jamais existé.
        </p>
        
        <div class="btn-container">
            <a href="/" class="btn btn-primary">Retour à l'accueil</a>
            <a href="javascript:history.back()" class="btn">Page précédente</a>
        </div>

        <div class="search-container">
            <div class="search-box">
                <input type="text" class="search-input" placeholder="Rechercher sur le site..." id="searchInput">
                <button class="search-btn" onclick="performSearch()">🔍</button>
            </div>
        </div>
    </div>

    <script>
        // Animation d'entrée
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.querySelector('.container');
            container.style.opacity = '0';
            container.style.transform = 'translateY(50px)';
            
            setTimeout(() => {
                container.style.transition = 'all 1s ease-out';
                container.style.opacity = '1';
                container.style.transform = 'translateY(0)';
            }, 100);
        });

        // Fonction de recherche
        function performSearch() {
            const searchTerm = document.getElementById('searchInput').value.trim();
            if (searchTerm) {
                // Remplacez cette URL par votre page de recherche
                window.location.href = `/search?q=${encodeURIComponent(searchTerm)}`;
            }
        }

        // Recherche avec la touche Entrée
        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performSearch();
            }
        });

        // Effet de parallaxe sur les formes flottantes
        document.addEventListener('mousemove', function(e) {
            const shapes = document.querySelectorAll('.shape');
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            shapes.forEach((shape, index) => {
                const speed = (index + 1) * 0.5;
                const x = (mouseX - 0.5) * speed * 50;
                const y = (mouseY - 0.5) * speed * 50;
                shape.style.transform = `translate(${x}px, ${y}px)`;
            });
        });
    </script>
</body>
</html>