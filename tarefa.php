<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio</title>
    </head>
    <body>
        <h2 style="text-align: center;">Calculo de media</h2>
        <form method="POST">
            
            <label for="avp1">Avp1</label>
            <input type="text" name="avp1"><br>
            <label for="avp2">Avp2</label>
            <input type="text" name="avp2"><br>
            <label for="tde1">TDE1</label>
            <input type="text" name="tde1"><br>
            <label for="tde2">TDE2</label>
            <input type="text" name="tde2"><br>
            <label for="tde3">TDE3</label>
            <input type="text" name="tde3"><br>
            <label for="tde4">TDE4</label>
            <input type="text" name="tde4"><br>
            <input type="submit" value="calcular">
        </form>

        <?php
        $avp1 = $_POST['avp1'];
        $avp2 = $_POST['avp2'];
        $tde1 = $_POST['tde1'];
        $tde2 = $_POST['tde2'];
        $tde3 = $_POST['tde3'];
        $tde4 = $_POST['tde4'];

        $resultado = (0.4 * $avp1) + (0.4 * $avp2) +(0.05 * ($tde1 + $tde2 + $tde3 + $tde4));
        if($resultado >= 7 || $resultado == 10){
            echo "Aprovado";
        }
        elseif($resultado >= 4 && $resultado < 7){
            echo "AVF";
        }
        else{
            echo "Reprovado";
        }
        ?>

    </body>
    </html>