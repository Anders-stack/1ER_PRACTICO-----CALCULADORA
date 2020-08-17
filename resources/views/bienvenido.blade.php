<?php
if(isset($_POST["submit"]))
{
    switch ($_POST["operador"])
     {
        case "suma":
            $resultado = $_POST["operando 1"] + $_POST["operando 2"];
            break;
        case "resta":
            $resultado = $_POST["operando 1"] + $_POST["operando 2"];
            break;
        case "multiplicación":
            $resultado = $_POST["operando 1"] + $_POST["operando 2"];
            break;
        case "división":
            $resultado = $_POST["operando 1"] + $_POST["operando 2"];
            break;
        case "potencia":
            $resultado = $_POST["operando 1"] + $_POST["operando 2"];
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
</head>
<body>
    <h1>CALCULADORA BÁSICA</h1>
<form action="bienvenido.blade.php" method="post" >
    <table border="3">
    <tr><td>Numero 1</td><td></td><td>Numero 2</td><td></td></tr>
    <tr><td><input type="text" name="operando 1"/></td>
    <td>
        <select name="operador">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="multiplicación">*</option>
            <option value="división">/</option>
            <option value="potencia">^</option>
        </select>
    </td>
    <td><input type="text" name="operando 2"/></td>
    <td><input type="submit" name="submit" value="calcular"/></td>
    </tr>
    </table>
</form>
</body>
</html>
