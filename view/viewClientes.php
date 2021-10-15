<?php

function viewClientes($ruta, $data)
{
    if(count($data) > 0)
    {
    ?>
        <table>
        <?php
        foreach($data as $row)
        {
        ?>
            <tr>
            <?php
            foreach($row as $dato)
            {
            ?>
                <td><?php echo $dato; ?></td>
            <?php
            }
            ?>
            </tr>
        <?php
        }

    }
?>
    </table>
    <form action=<?php echo "\"{$ruta}clientes/registrar\"";?> method="post">
    Nombres: <input type="text" name="nombres"><br>
    Apellidos: <input type="text" name="apellidos"><br>
    Correo: <input type="text" name="correo"><br>
    <input type="submit" value="Enviar">
    </form>
<?php
}
?>
