<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template Correo Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316); padding-top: 10px; padding-bottom: 10px;">
        <img style="display: block; margin-left: auto; margin-right: auto;" src="http://conecte.co/assets/img/brand/logoc.png" width="350" height="55" />
    </div>
    <div class="container-fluid">
        <h3 style="text-align: center;">Hola,&nbsp;{{$data['nombre_usuario']}}</h3>
        <p>{{$data['nombre_usuario']}} Conecte ha decidido cambiar tu contraseña, tu nueva contraseña es la siguiente.</p>
        <p>Clave: {{$data['password']}}</p>
        <table style="width: 100%; border: none; margin-left: auto; margin-right: auto;">
            <tbody>
                <tr>
                    <td style="width: 6%;">&nbsp;</td>
                    <td style="width: 24%;">&nbsp;</td>
                    <td style="width: 10%;">&nbsp;<img src="https://facebookbrand.com/wp-content/themes/fb-branding/assets/images/fb-logo.png?v2" alt="" width="40" height="40" /></td>
                    <td style="width: 10%;">&nbsp;<img src="https://banplusonline.files.wordpress.com/2018/05/twitter-icon-logo-pajarito.png" alt="" width="40" height="40" /></td>
                    <td style="width: 10%;">&nbsp;<img src="https://www.saladeestudio.org/wp-content/uploads/2018/01/instagram-png-instagram-png-logo-1455.png" alt="" width="40" height="40" /></td>
                    <td style="width: 30%;">&nbsp;</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>