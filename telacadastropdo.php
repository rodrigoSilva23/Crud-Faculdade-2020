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

         <h2>cadastrar vaga</h2>
         <form method="POST" action="salvarpdo.php" >
          

            <div class="form-group">

                <label>CPF:</label>
                <input type="int" name="CPF" id="CPF" class="form-control" maxlength="11" placeholder="Por favor Informe Seu CPF" >
            
            
            </div>
            <div class="form-group  ">
                <label>Nome Completo:</label>
                <input type="text" name="Nome_Completo" id="Nome_Completo" class="form-control" placeholder="Por favor informe Seu Nome Completo">

            
            
            </div>
            <div class="form-group">

                <label>RG:</label>
                <input type="int" name="RG" id="RG" class="form-control"maxlength="10" placeholder="Por favor Informe seu RG">
            
            
            </div>           
            <div class="form-group">

                <label>Data Nascimento:</label>
                <input type="date" name="Data_Nascimento" id="Data_Nascimento" class="form-control">
            
            
            </div>
           

               

            <div class="form-group">

                <label>CEP:</label>
                <input type="int" name="CEP" id="CEP" class="form-control"maxlength="8" placeholder="Por favor Informe Seu CEP">
                
            
            </div>
            
            <div class="form-group">

                <label>Telefone:</label>
                <input type="int" name="Telefone" id="Telefone"class="form-control"maxlength="11" placeholder="por favor informe seu numero de telefone">
            
            
            </div>
            <div class="form-group">

                <label>Email:</label>
                <input type="text" name="Email" id="Email"class="form-control" placeholder="Por favor Informe Seu Email">
            
            
            </div>
            <div class="form-group">

                <label>Cartao Sus:</label>
                <input type="int" name="Cartao_Sus" id="Cartao_Sus"class="form-control"maxlength="11" placeholder="Por favor Informe Seu Cartão Sus">
            
            
            </div>
            <div class="form-group">
                <label>Numero Prontuario:</label>
                <input type="int" name="Numero_Prontuario" id="Numero_Prontuario"class="form-control" maxlength="11" placeholder="Por favor Informe Seu Numero de prontuario">
            
            
            </div>
            <div class="form-group">
                <label>Alergias:</label>
                <input type="text" name="Alergias" id="Alergias"class="form-control"class="form-control" placeholder="caso tenha alergias informe aqui">
                
            
            </div>
            <div class="form-group">

                <a href="telacadastropdo.php">
                     <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" class="btn btn-primary">

                </a>
            
            
            </div>
         
         
         
         </form>


    </main>
    </div>
  
    



</body>
</html>