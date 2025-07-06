<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - StockManager Pro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
        
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease;
        }

        .login-container:hover {
            transform: translateY(-5px);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            position: relative;
            overflow: hidden;
        }

        .logo-icon::before {
            content: '📦';
            font-size: 24px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .logo h1 {
            color: #333;
            font-size: 24px;
            font-weight: 700;
        }

        .logo p {
            color: #666;
            font-size: 14px;
            margin-top: 5px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
        }

        .form-group input:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-group input::placeholder {
            color: #999;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #666;
            font-size: 18px;
            padding: 5px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .password-toggle:hover {
            background-color: rgba(102, 126, 234, 0.1);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .remember-me input[type="checkbox"] {
            width: auto;
        }

        .remember-me label {
            margin: 0;
            font-size: 14px;
            color: #666;
            cursor: pointer;
        }

        .forgot-password {
            color: #667eea;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #5a6fd8;
            text-decoration: underline;
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .login-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .login-btn:hover::before {
            left: 100%;
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .loading {
            pointer-events: none;
            opacity: 0.7;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            border: 2px solid transparent;
            border-top: 2px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            transform: translate(-50%, -50%);
        }

        @keyframes spin {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        .divider {
            text-align: center;
            margin: 25px 0;
            position: relative;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e1e5e9;
        }

        .divider span {
            background: rgba(255, 255, 255, 0.95);
            padding: 0 15px;
            color: #666;
            font-size: 14px;
        }

        .demo-info {
            background: rgba(102, 126, 234, 0.1);
            border: 1px solid rgba(102, 126, 234, 0.2);
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
            text-align: center;
        }

        .demo-info h4 {
            color: #667eea;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .demo-info p {
            font-size: 12px;
            color: #666;
            margin: 3px 0;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 20px;
        }

        .feature {
            text-align: center;
            padding: 15px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-3px);
        }

        .feature-icon {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .feature-text {
            font-size: 12px;
            color: #666;
            font-weight: 500;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }
            
            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<a href="/deconnection" class="text-white text-sm opacity-85 hover:text-[#54D12B] hover:opacity-100 transition-colors">Deconnection</a>

    <div class="login-container">
        <div class="logo">
            <div class="logo-icon"></div>
            <h1>StockManager Pro</h1>
            <p>Gestion intelligente de vos stocks</p>
        </div>

        <form id="loginForm" method="POST" action="key_login">
            <div class="form-group">
                <label for="email">Email ou nom d'utilisateur</label>
                <input type="text" id="email" name="email" placeholder="Entrez votre email">
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" >
                <button type="button" class="password-toggle" onclick="togglePassword()">👁️</button>
            </div>

            <div class="form-options">
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Se souvenir de moi</label>
                </div>
                <a href="#" class="forgot-password">Mot de passe oublié ?</a>
            </div>

            <button type="submit" class="login-btn" id="loginBtn">
                Se connecter
            </button>
            
            <!-- <button type="submit"></button> -->
        </form>

        <div class="divider">
            <span>Fonctionnalités</span>
        </div>
    </div>
</body>
</html>