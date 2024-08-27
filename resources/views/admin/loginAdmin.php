<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kino | Logar na Dash</title>

    <style>
        body {
            background-color: #343a40;
            /* Background dark */
        }

        .form-control {
            transition: background-color 0.3s, border 0.3s;
        }

        .form-control:focus {
            background-color: #495057;
            /* Darker background on focus */
            border: 1px solid #ffc107;
            /* Yellow border on focus */
            box-shadow: 0 0 5px rgba(255, 193, 7, 0.5);
            /* Glow effect */
        }

        .btn-warning {
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-warning:hover {
            background-color: #ffc107;
            transform: scale(1.05);
            /* Slightly larger on hover */
        }

        .animated-btn {
            animation: bounce 1s infinite;
            /* Bounce animation */
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }

            60% {
                transform: translateY(-5px);
            }
        }

        .text-warning {
            transition: color 0.3s;
        }

        .text-warning:hover {
            color: #ffcc00;
            /* Brighten on hover */
        }
    </style>
</head>

<body>

    <main class="container mt-5 px-5 sign_container bg-dark text-white">
        <h1 class="text-center">Entrar</h1>
        <form class="mt-4">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control bg-secondary text-white border-0" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control bg-secondary text-white border-0" id="password" required>
            </div>
            <button type="submit" class="btn btn-warning btn-block animated-btn">Entrar</button>
            <p class="text-center mt-3">Não tem uma conta? <a href="/kino/cadastrar" class="text-warning">Cadastrar</a></p>
        </form>
    </main>
</body>

</html>