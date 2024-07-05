<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>ADMINA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        @font-face {
            font-family: "AmpleSoft";
            src: url("font/AmpleSoft.otf") format('opentype');
        }
        
        body,
        div,
        h1,
        h2,
        h3,
        h4,
        h5,
        p {
            font-family: "Open Sans", sans-serif;
        }
        
        .subsiv p span {
            color: #ff2544 !important;
        }
    </style>
</head>

<body style="margin: 0; padding: 0;">
    <div align="center">
        <table cellpadding="0" cellspacing="0" class="table-general" style="width: 700px;max-width: 700px; margin: 30px auto;border: 2px solid #f3f3f3; background-color: #fff;">

            <tr>
                <td style="padding-bottom: 55px;">
                    <div class="div-img-fondo" style="background-image: url('https://admina.com.co/html/admin.png');background-size: 30%;background-repeat: no-repeat;padding: 124px 15px 35px;background-position: center;">

                    </div>
                    <div style="padding: 0 40px;">
                        <p style="color: #5e55b3;font-size: 40px;padding: 0px 45px;text-align: left;font-weight: bold;margin: 0;line-height: 1;">
                            <b>¡ENHORABUENA!</b>
                        </p>
                        <p style="color: #5e55b3;font-size: 30px;padding: 0px 45px;text-align: left;font-weight: bold;margin: 0;line-height: 1;">
                            <b> Se ha registrado como propietario satisfactoriamente</b>
                        </p>


                    </div>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; padding-bottom: 50px;">
                    <a style="    background-color: #5e55b3;
                    color: #fff;
                    padding: 9px 16px;
                    border-radius: 8px;
                    text-decoration: none;
                    font-weight: bold; " href="http://admina.com.co/?propietario={{ $dataEmail->id }}" target="_blank">activar</a>

                </td>
            </tr>

            <tr>
                <td class="tr-footer" style="background-color: #5e55b3;">
                    <p style="color:#000;-size: 16px;text-align: center;font-weight: bold;">
                        <img style="padding-top: 20px; " src="https://admina.com.co/html/admin.png" alt="">
                    </p>

                    <p style="text-align: center;">
                        <a style="color: transparent;">
                            <img style="width:35px;height:30px;object-fit:contain;margin-right:5px" src="https://admina.com.co/html/fb.png">
                        </a>
                        <a style="color: transparent;">
                            <img style="width:35px;height:30px;object-fit:contain;margin-right:5px" src="https://admina.com.co/html/instagram.png">
                        </a>
                        <a style="color: transparent;">
                            <img style="width:35px;height:30px;object-fit:contain;margin-right:5px" src="https://admina.com.co/html/youtube.png">
                        </a>
                        <a style="color: transparent;">
                            <img style="width:35px;height:30px;object-fit:contain;margin-right:5px" src="https://admina.com.co/html/ln.png">
                        </a>
                    </p>

                    <p class="div-red3 herenciadea " style="color: #fff; text-align: center;font-size: 10px;margin: 0 0 32px; ">
                        Todos los derechos reservados por Admina © {{ $dataEmail->yerd }}
                    </p>

                </td>
            </tr>
        </table>
    </div>
    <!-- Gmail hack -->
    <table class="gmail-app-fix">
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                    <tr>
                        <td cellpadding="0" cellspacing="0" border="0" height="1" ; style="line-height: 1px; min-width: 200px;">
                            <img src="https://nasbi.peers2win.com/imagenes/transparent.gif" width="200" height="1" style="display: block; max-height: 1px; min-height: 1px; min-width: 200px; width: 200px;" />
                        </td>
                        <td cellpadding="0" cellspacing="0" border="0" height="1" ; style="line-height: 1px; min-width: 200px;">
                            <img src="https://nasbi.peers2win.com/imagenes/transparent.gif" width="200" height="1" style="display: block; max-height: 1px; min-height: 1px; min-width: 200px; width: 200px;" />
                        </td>
                        <td cellpadding="0" cellspacing="0" border="0" height="1" ; style="line-height: 1px; min-width: 200px;">
                            <img src="https://nasbi.peers2win.com/imagenes/transparent.gif" width="200" height="1" style="display: block; max-height: 1px; min-height: 1px; min-width: 200px; width: 200px;" />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- /Gmail hack -->
</body>

</html>