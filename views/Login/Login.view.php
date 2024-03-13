<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="?c=Login&a=Login" method="post">
        <label>Nombre Usario</label>
        <input name="usuario" id="" type="text" placeholder="ingrese el usuario" required autocomplete="off">
        <label>Contraseña</label>
        <input name="contraseña" id="" type="password" required autocomplete="off">
        <br>
        <input type="submit" class="btn btn-primary" value="Acceder">
    </form>
</body>