<?php 

$CPF = $_POST['CPF'];
$NOME= $_POST['Nome_Completo'];
$RG = $_POST['RG'];
$DATA = $_POST['Data_Nascimento'];
$CEP = $_POST['CEP'];
$TELEFONE = $_POST['Telefone'];
$EMAIL = $_POST['Email'];
$SUS = $_POST['Cartao_Sus'];
$PRONTUARIO = $_POST['Numero_Prontuario'];
$ALERGIAS = $_POST['Alergias'];




$connect = mysqli_connect('localhost:8080','root','');

if (!$connect) {
  echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;


try {
  $pdo = new PDO('mysql:host=localhost;port=8080;dbname=Cadastros_Paciente','root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('INSERT INTO paciente (CPF,Nome_Completo,RG,Data_Nascimento,CEP,Telefone,Email,Cartao_Sus,Numero_Prontuario,Alergias) 
                         VALUES               (:cpf,:nome,:rg,:data_n,:cep,:telefone,:email,:sus,:prontuario,:alergias)           
                         ');
                        



  $stmt->execute(array(
    ':cpf'      =>$CPF,
    ':nome'     =>$NOME,
    ':rg'       =>$RG,
    ':data_n'   =>$DATA,
    ':cep'      =>$CEP, 
    ':telefone' =>$TELEFONE,
    ':email'    =>$EMAIL,
    ':sus'      =>$SUS,
    ':prontuario'=>$PRONTUARIO,
    ':alergias'   =>$ALERGIAS



  ));

  header('location: telacadastropdo.php?status=sucess');
  exit;
  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}


?>