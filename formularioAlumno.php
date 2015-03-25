<?php include './clases/Coneccion.php';?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario de Captura de datos</title>
    </head>
    <body>
        <form action="manejadorAlumno.php?accion=save" method="post">
             <table>
            <tr>
                <td>
                    Carnet:
                </td>
                <td>
                    <input type="text" name="carnet">
                </td>
            </tr>
            <tr>
                <td>
                    Nombre:
                </td>
                <td>
                    <input type="text" name="nombre">
                </td>
            </tr>
            <tr>
                <td>
                    Apellido:
                </td>
                <td>
                    <input type="text" name="apellido">
                </td>
            </tr>
            <tr>
                <td>
                    Fecha de Nacimiento:
                </td>
                <td>
                    <input type="text" name="fecha_nac">
                </td>
            </tr>
            <tr>
                <td>
                    Dirección:
                </td>
                <td>
                    <input type="text" name="dir">
                </td>
            </tr>
            <tr>
                <td>
                    Sección:
                </td>
                <td>
                    <select name='seccion'>
                        <option value=""></option>
                        <?php 
                        $sql="SELECT id,nombre FROM seccion;";
                        $datos=consultarD($con,$sql);
                        foreach ($datos as $value){
                            print "<option value='";
                            print $value['id'];
                            print "'>'";
                            print $value['nombre'];
                            print "</option>";
                        }
                        ?>
                    </select>
                </td>
                </tr>
                        <option value="sistema">Sistemas</option>
                        <option value="manto">Mantenimiento</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name='bot' value='Enviar'>
                </td>
            </tr>
        </table>
        </form>
       
    </body>
</html>
