<html>
<head>
<title> Editar Paciente </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="bg-light text-dark">

    <div class="container">

    <header class="jumbotron bg-info">

        <div >
            <h1>Bem Vindo!</h1>
            <p>area de edição</p>
            
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
                            <?php

                        $CPF2 = $_POST['Pesquisa'];

                        

                                            

                        $pdo = new PDO('mysql:host=localhost;port=8080;dbname=Cadastros_Paciente','root', '');
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $consulta = $pdo->query("SELECT * FROM paciente where CPF = '{$CPF2}'");


                        $linha = $consulta->fetch(PDO::FETCH_ASSOC);
                        if($CPF2 == 0 || !$CPF2 == $linha['CPF']) {
                            header('location: telaConsulta.php?status=Faild');



                        }   ;                       

                        ?>     



         <h2>Editar Paciente</h2>
         <form method="POST" action="Editarpdo.php" >
         <div class="form-group">

                <label >ID:<?php echo $linha['ID'];?>
                    
                      <input type="hidden" name="ID" value="<?php echo $linha['ID']?>">
                  
                
                </label>
                
            
            
            </div>
          

            <div class="form-group">

                <label>CPF:</label>
                <input type="int" name="CPF" id="CPF" class="form-control" maxlength="11" placeholder="Por favor Informe Seu CPF" value="<?php echo $linha['CPF'];?>" >
            
            
            </div>
            <div class="form-group  ">
                <label>Nome Completo:</label>
                <input type="text" name="Nome_Completo" id="Nome_Completo" class="form-control" placeholder="Por favor informe Seu Nome Completo" value="<?php echo $linha['Nome_Completo'];?>">

            
            
            </div>
            <div class="form-group">

                <label>RG:</label>
                <input type="int" name="RG" id="RG" class="form-control"maxlength="10" placeholder="Por favor Informe seu RG" value="<?php echo $linha['RG'];?>">
            
            
            </div>           
            <div class="form-group">

                <label>Data Nascimento:</label>
                <input type="date" name="Data_Nascimento" id="Data_Nascimento" class="form-control"value="<?php echo $linha['Data_Nascimento'];?>">
            
            
            </div>
           

               

            <div class="form-group">

                <label>CEP:</label>
                <input type="int" name="CEP" id="CEP" class="form-control"maxlength="8" placeholder="Por favor Informe Seu CEP"value="<?php echo $linha['CEP'];?>">
                
            
            </div>
            
            <div class="form-group">

                <label>Telefone:</label>
                <input type="int" name="Telefone" id="Telefone"class="form-control"maxlength="11" placeholder="por favor informe seu numero de telefone"value="<?php echo $linha['Telefone'];?>">
            
            
            </div>
            <div class="form-group">

                <label>Email:</label>
                <input type="text" name="Email" id="Email"class="form-control" placeholder="Por favor Informe Seu Email"value="<?php echo $linha['Email'];?>">
            
            
            </div>
            <div class="form-group">

                <label>Cartao Sus:</label>
                <input type="int" name="Cartao_Sus" id="Cartao_Sus"class="form-control"maxlength="11" placeholder="Por favor Informe Seu Cartão Sus"value="<?php echo $linha['Cartao_Sus'];?>">
            
            
            </div>
            <div class="form-group">
                <label>Numero Prontuario:</label>
                <input type="int" name="Numero_Prontuario" id="Numero_Prontuario"class="form-control" maxlength="11" placeholder="Por favor Informe Seu Numero de prontuario"value="<?php echo $linha['Numero_Prontuario'];?>">
            
            
            </div>
            <div class="form-group">
                <label>Alergias:</label>
                <input type="text" name="Alergias" id="Alergias"class="form-control"class="form-control" placeholder="caso tenha alergias informe aqui"value="<?php echo $linha['Alergias'];?>">
                
            
            </div>
            <div class="form-group">

              
                     <input type="submit" value="Editar" id="cadastrar" name="cadastrar" class="btn btn-success">
                     

                
            
            
            </div>
         
         
         
         </form>
         <a href="telaConsulta.php">
                        <button class="btn btn-primary"> Cancelar</button>
                     
                     
                     </a>



    </main>
    </div>
  
    



</body>
</html>