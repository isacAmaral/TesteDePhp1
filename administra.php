<?php

$operacao=$_POST['operacao'];
$con= mysqli_connect("localhost", "root" , "");
mysqli_select_db($con , "vendas");
if ($operacao=="incluir"){
   $nome_clente =$_POST["nome_cliente"];
   $cpf=$_POST["cpf"];
   $sexo=$_POST["sexo"];
   $email=$_POST["email"];
   $endereco=$_POST["endereco"];
   $numero=$_POST["numero"];
   $bairro=$_POST["bairro"];
   $cidade=$_POST["cidade"];
   $estados=$_POST["estado"];
   $novidade=$_POST["novidade"];

$executa= "INSERT INTO Clientes (NOME_CLIENTE, CPF, SEXO, EMAIL, ENDERECO,NUMERO, BAIRRO,CIDADE, ESTADO, RECEBER_NOVIDADE) VALUE('$nome_clente', '$cpf', '$sexo', '$email', '$endereco', '$numero', '$bairro', '$cidade', '$estados', '$novidade')";
$resultado=mysqli_query($con, $executa);
    if($resultado){
        echo "<p align=\"center\">Inclusão feita com sucesso!</p>";
        echo "<p align=\"center\"><a href=\"cadastroclientes.html\">Voltar</a></p>";
        
    }else{
        echo mysqli_error($con);
        echo "<p align=\"center\"><a href=\"cadastroclientes.html\">Voltar</a></p>";
    }
}elseif($operacao=="excluir"){
$codigo =$_POST["codigo"];
$executa="DELETE FROM Clientes WHERE $codigo_cliente=$codigo";
$resultado=mysqli_query($executa);
$linhas=mysqli_affected_rows();//retorna numero de linha afetadas pela operacao
    if($linhas==1){
        echo "<p align=\"center\">Cliente excluido com sucesso!</p>";
        echo "<p align=\"center\"><a href=\"cadastroclientes.html\">Voltar</a></p>";
    }
    else{
        echo "<p align=\"center\">Cliente não encontrado!</p>";
        echo "<p align=\"center\"><a href=\"cadastroclientes.html\">Voltar</a></p>";
    }


}elseif($operacao="mostrar"){
 $resultado=mysqli_query("SELECT * FROM Clientes");
 $linhas=mysqli_num_rows($resultado);//retorna o numero linhas da consulta
    echo "<p><b>Lista dos clientes</b></p>";
    for($i=0; $i<$linhas; $i++){
       $reg=mysqli_fetch_row($resultado);//guarda a linha atual do resultado em array
       echo "Código: $reg[0] <br>Nome:$reg[1]CPF: $reg[2]<br> Sexo:$reg[3]<br>";
       echo "E-mail: $reg[4] <br>Endereço:$reg[5], $reg[6] Bairro:$reg[7]<br>";
       echo "Cidade: $reg[8] - $reg[9]<br>Receber promoções por email: $reg[10]<br><br>";
       echo "<p align=\"center\"><a href=\"cadastroclientes.html\">Voltar</a></p>";
    }

}
mysqli_close($con);

?>