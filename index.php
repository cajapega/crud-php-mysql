<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device width, initial-scale=1.0">
        <title>Usuarios CRUD</title>
    </head>
    <body>
        <div>
            <form action="">
                <h1>Crear Usuario</h1>
                <input type="text" name="name" placeholder="Nombre">
                <input type="text" name="lastname" placeholder="Apellido">
                <input type="text" name="username" placeholder="Usuario">
                <input type="text" name="password" placeholder="Contraseña">
                <input type="text" name="email" placeholder="Correo Electrónico">

                <input type="submit" value="Agregar usuario">
            </form>
        </div>
        <div>
            <h2>Usuarios Registrados</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Email</th>
    
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <body>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
    
                        <th> <a href="">Editar</a> </th>
                        <th> <a href="">Eliminar</a> </th>
                    </tr>
                </body>
            </table>
        </div>
    </body>
</html>