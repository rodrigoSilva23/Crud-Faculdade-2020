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
               
   

        </nav>
        
    
    </header>
    <main>
        <section >
        <form action="telaEditar.php" method="POST">
          <input type="int" name="Pesquisa" id="Numero_Prontuario"class="form-control" maxlength="11" placeholder="informe o CPF da pessoa:"> 
          <input type="submit" value="Editar" id="Pesquisar" name="Pesquisar" class="btn btn-success" >
         

          </form>
          <form action="telaDelete.php" method="POST">
          <input type="int" name="Pesquisa" id="Numero_Prontuario"class="form-control" maxlength="11" placeholder="informe o CPF da pessoa:"> 
        
          <input type="submit" value="Deleta" id="Pesquisar" name="Pesquisar" class="btn btn-danger" >

          </form>
        </section>
        <table class="table bg-secondary text-white">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>CPF</th>
                    <th>NOME</th>
                    <th>RG</th>
                    <th>DATA</th>
                    <th>CEP</th>
                    <th>TELEFONE</th>
                    <th>EMAIL</th>
                    <th>SUS</th>
                    <th>PRONTUARIO</th>
                    <th>ALERGIAS</th>
                
                   
                
                            
                
                </tr>

                                    <?php

                                    

                    $pdo = new PDO('mysql:host=localhost;port=8080;dbname=Cadastros_Paciente','root', '');
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $consulta = $pdo->query("SELECT * FROM paciente;");


                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        $ID         =$linha['ID'];
                        $CPF        =$linha['CPF'];
                        $NOME       =$linha['Nome_Completo'];
                        $RG         =$linha['RG'];
                        $DATA       =$linha['Data_Nascimento'];
                        $CEP        =$linha['CEP'];
                        $TELEFONE   =$linha['Telefone'];
                        $EMAIL      =$linha['Email'];
                        $SUS        =$linha['Cartao_Sus'];
                        $PRONTUARIO =$linha['Numero_Prontuario'];
                        $ALERGIAS   =$linha['Alergias'];
                        echo "<tr>";
                        echo "<td>".$ID."</td>";
                        echo "<td>".$CPF."</td>";
                        echo "<td>".$NOME."</td>";
                        echo "<td>".$RG."</td>";
                        echo "<td>".$DATA."</td>";
                        echo "<td>".$CEP."</td>";
                        echo "<td>".$TELEFONE."</td>";
                        echo "<td>".$EMAIL."</td>";
                        echo "<td>".$SUS."</td>";
                        echo "<td>".$PRONTUARIO."</td>";
                        echo "<td>".$ALERGIAS."</td>";

                        echo "</tr>";
                    }
                    ?>     
                
                      
            </thead>
            
        
        </table>
       
        
       

    </main>
    </div>
  
    



</body>
</html>