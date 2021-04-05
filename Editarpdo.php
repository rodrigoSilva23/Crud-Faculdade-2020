<html>
<head>
<title> Cadastro de Paciente </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="bg-light text-dark">

    <div class="container">

    <header class="jumbotron bg-info">

        <div >
            <h1>Bem Vindo!</h1>
            <p>sistema de cadastro</p>
            
        </div>
        <nav class="navbar navbar-expand-sm bg-light rounded-lg">

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="telacadastropdo.php">Cadastro</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="telaConsulta.php">consultar Pacientes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="telaConsulta.php">Editar paciente</a>
                </li>
   

        </nav>
        
    
    </header>
    <main>
    
        <table class="table bg-secondary text-white">

        <?php
                $ID=    $_POST['ID'];
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


                                    

               

                try {
                    $pdo = new PDO('mysql:host=localhost;port=8080;dbname=Cadastros_Paciente','root', '');
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  
                    $stmt = $pdo->prepare('UPDATE paciente SET CPF =:cpf,Nome_Completo=:nome,RG=:rg,Data_Nascimento=:data_n,CEP=:cep,Telefone=:telefone,Email=:email,Cartao_Sus=:sus,Numero_Prontuario=:prontuario,Alergias=:alergias
                                            where ID=:id');
                                           
                                          
                  
                  
                  
                    $stmt->execute(array(
                        ':id'      =>$ID,

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

                    header('location: telaConsulta.php?status=sucess');
                  
                   
                    echo $stmt->rowCount();
                  } catch(PDOException $e) {
                    echo 'Error: ' . $e->getMessage();
                  }
                  
                  
                  ?>


                
                        
                    


                        




                    


                  
                        


                       

                 

                   
                   
                    
                
        ?>     
        
        </table>
       
        
       

    </main>
    </div>
  
    



</body>
</html>