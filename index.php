<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WakeUP</title>
</head>
<body>
    <div id="container">
        <header>
            <h1>Wake Up On Lan</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section id="itensCadastrados">
                <h2>Itens cadastrados</h2>
                <ul>
                    <strong>Computador1</strong>
                    <li>Item 1</li>
                    <button>Ligar</button>
                    <button>Desligar</button>
                </ul>
                <ul>
                    <strong>Computador1</strong>
                    <li>Item 1</li>
                    <button>Ligar</button>
                    <button>Desligar</button>
                </ul>
            </section>
            <section>
                <h2>WakeUPOnLan</h2>
                <form action="wake.php" method="post">
                    <label for="mac">Nome do Dispositivo</label>
                    <input type="text" name="mac" id="mac" required><br>
                    <label for="mac">MAC Address</label>
                    <input type="text" name="mac" id="mac" required>
                    <button type="submit">Cadastrar</button>
            </section>
        </main>
    </div>
</body>
</html>