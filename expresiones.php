<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Expresiones Regulares</title>

    <!--Estilos de Boopstrap y CSS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!--Se agrega Boostrap a traves de el CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body style="background-color: #fbf304">
<!--Alerts-->
<script src="{{asset('js/app.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--CSS-->
<style>

    .respuesta{
        font-family:"Castellar";
        font-size: 12px;
        font-weight: bold;
        border-color: #D4D9CC;
        border-width: 1px;
    }

    h6{
        font-family: 'Bahnschrift';

    }

    .lenguaje{
        font-weight: bold;
        border-color: transparent;
    }

    button{
        font-family: 'Bahnschrift';
        border-radius: 3px;
        width: 6rem
    }

    .btn_close{
        border-color:  #7ac9ec;
        background: linear-gradient(180deg, #e8f1f5 10%, #98d9fc 90%); }
    }

    .cards{
        border-color: #9faac2;
    }

</style>

<script>
    alert("Requisitos para el formulario son: " +
        "-" +
        "Direccion Hexadicimal " +
        "-" +
        "Agrupados en Grupos de 2 " +
        "-" +
        "Separado solo por guienes " +
        "-" +
        "Direccion de la UMG "
    );
</script>

<?php


$regex = "/^[1][C][-][6][F][-][6][5][-][3][8][-][B][5][-][2][0]$/";

if (isset($_POST['btnEnviar'])) {

    if (preg_match($regex, $_POST['texto'])) {
        $resultado = "UNIVERSIDAD MARIANO GÁLVEZ DE GUATEMALA";

    } else {
        $error =
        "<script>
            Swal.fire({
                icon: 'error',
                title: 'Compruebe que los textos ingresados cumplen con las indicaciones sugeridas',
        })
        </script>";
    }
}
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-center mt-5">
            <div class="card" style="width: 30rem; height:13rem; background-color: #edefee; border-color: #9faac2;border-width: 2px;">
                <form method="POST">

                    <div style="margin-left: 2rem">

                        <h6 class="mt-3">MAC address</h6>                                                 <!--Formato Hexadecimal-->
                        <input style="width: 17rem;" placeholder="Ejem: 1C-6F-65-38-B5-20" pattern="([0-9a-fA-F]{2}[-]){5}([0-9a-fA-F]{2})"
                               maxlength="17" type="text" name="texto" class="lenguaje" autofocus/>
                        <button style="margin-left: 3rem; border-color: #c0c0c0; background: linear-gradient(180deg, #efefef 10%, #d1d1d1 90%);"
                                class="lokup" type="submit" name="btnEnviar">Lookup</button>


                        <h6 class="mt-3">Manufacturer</h6>
                        <input style="width: 26rem; background-color: #edefee" type="text" name="mensaje" class="respuesta"
                               value="<?php if(isset($resultado)) {echo '&nbsp;'.$resultado.'';}?>" autofocus/>

                            <?php if(isset($error)) {echo '&nbsp;'.$error.'';} ?> <!--Para mostrar si es incorrecto-->

                        <div class="mt-3">
                            <button style="margin-left: 20rem" class="btn_close" type="submit">Close</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
