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
                


                                    

               

                try {
                    $pdo = new PDO('mysql:host=localhost;port=8080;dbname=Cadastros_Paciente','root', '');
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $pdo->prepare('DELETE FROM paciente WHERE ID = :ID');
                    $stmt->bindParam(':ID', $ID);
                    $stmt->execute();


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