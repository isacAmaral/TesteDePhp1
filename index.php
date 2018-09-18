<!<!DOCTYPE html>

<html>
    <head>
    <title>Cadastro de Clientes</title>
    </head>
<body>
    <div align = "center">
    <center>
    <table border="1" cellpadding = "0" cellspacing="0" width ="85%"
    bordercolor ="#008000" height = "348">
    
    <tr>
        <td width="33%" bgcolor = "#000080" height="19">
        <p align="center"><font color ="#ffffff" face="Arial" size ="3"><b>Incluir Cliente</b></font></p>
         </td>
    
         <td width="33%" bgcolor = "#000080" height="19">
         <p align="center"><font color ="#ffffff" face="Arial" size ="3"><b>Excluir Cliente</b></font></p>
         </td>
    </tr>
    <tr>
     <td width="33%" rowspan="3" valign ="top" heigth="325">
      <<form method= "POST" action="administra.php">
      <input type="hidden" name="operacao" value="incluir">
      <p align ="center"> </br>    
      Nome do Cliente: <input type="text" name="nome_cliente" size="40"> </p>
      <p align ="center">CPF: <input type="text" name="cpf" size="11"></p>
      <p align="center">Sexo: <input type="radio" name="sexo" value="masculino" checked>masculino
                              <input type="radio" name="sexo" value="feminino" >feminino
      </p>   

      <p align="center">E-mail: <input type="text" name ="email" size="40"></p>
      <p align="center">Endereço: <input type="text" name ="endereco" size="40"></p>
      <p align="center">Número: <input type="text" name ="numero" size="5"></p>
      <p align="center">Bairro: <input type="text" name ="bairro" size="30"></p>
      <p align="center">Cidade: <input type="text" name ="cidade" size="30"> Estado: <input type="text" name="estado" size="2"></p>
      <p align="center"> <input type="checkbox" name="novidade" value="nao">Quero receber notificações de promoções po email</p>
      <p align="center"><input type="submit" value="Incluir Cliente" name="enviar"></p>
      </form>>
     
     </td>
     <td width="33%" heigth="175">
     <p align="center"><br>
     Codigo do Cliente a ser excluido:</p>
     <form method="POST" action="administra.php">
     <input type="hidden" name="operacao" value="excluir">
      <p align="center"><input type="text" name="codigo" size="5"></p>
      <p align="center"><input type="submit" value="Excluir Cliente" name="enviar"></p>
     </form>

     <p align="center"<br></p>
       </td>
     </tr>
     <tr>
     
      <td width="33%" heigth="124">
      
      <p align="center"><br>
      Clique no botão abaixo para exibir todos os clientes:
      </p>

      <form method="POST" action="administra.php">
      <input type="hidden" name="operacao" value="mostrar">
      <p align="center"><input type="submit" value="Mostrar clientes"></p>
      </form>
      </td>
     </tr>
     </table>
    </center>
    </div>
</body>
</html>>
