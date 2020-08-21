<?php
/*class CalculadoraSimple{
    private $numero1, $numero2;
    public function __construct($n1, $n2){
        $this->numero1 = $n1;
        $this->numero2 = $n2;
    }

    public function Sum(){
        return $this->numero1 + $this->numero2;

    }
    public function Rest(){
        return $this->numero1 - $this->numero2;

    }
    public function Mult(){
        return $this->numero1 * $this->numero2;

    }
    public function Div(){
        return $this->numero1 / $this->numero2;

    }
    public function Pot(){
        return $this->numero1 ^ $this->numero2;

    }

}*/

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>CALCULADORA SIMPLE</title>
    
  </head>
<body>
<br>
<div class="container">
      <h2>CALCULADORA SIMPLE</h2>
      <br>
<form action="{{ route('calculadora.solucion') }}" method="post" >
    @csrf
    <table border="3">
    <tr class="info"><td><b><label for="a">NUMERO 1</label></b></td><td></td><td><b><label for="b">NUMERO 2</label></b></td></tr>
    <tr><td><input class="form-control" type="number" name="a" id="a" placeholder="1er_Num"></td>
    <td>
        <select name="op" id="op">
            <option value="0"><b>+</b></option>
            <option value="1"><b>-</b></option>
            <option value="2"><b>*</b></option>
            <option value="3"><b>/</b></option>
            <option value="4"><b>^</b></option>
        </select>
    </td>
    <td><input class="form-control" type="number" name="b" id="b" placeholder="2do_Num"></td>
    </tr>
    </table>

    <button class="btn btn-primary">Calcular</button>  
</form>
</div>
</body>
</html>
