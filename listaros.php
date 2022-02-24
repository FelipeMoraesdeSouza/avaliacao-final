<?php
 include('conexao.php');

 try{
  $sql = "select * from tblos";
  $qry= $con->query($sql);
  
  $ordens = $qry->fetchAll(PDO::FETCH_OBJ);

 } catch(PDOException $e){
   echo $e-> getMessage();
 }
 
?>
<html>
  
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>

  <body>

    <div class="container">
    
<!--
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="listarclientes.php">Clientes</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="listarfuncionario.php">Funcionario</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="listardepart.php">Departamento</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="listarestoque.php">Estoque</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="listarvendas.php">Vendas</a>
              </li>        
            </ul>
          </div>
        </div>
      </nav>
      <hr>
      -->
    <a href="frmos.php"  class="btn btn-outline-dark">Cadastar Clientes</a> <br><br>
    
    
        <!-- Inicio da tabela -->
        <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">idos</th>
            <th scope="col">nomecliente</th>
            <th scope="col">nos</th>
            <th scope="col">datareq</th>
            <th scope="col">datater</th>
            <th scope="col">nomefun</th>
            <th scope="col">nomestatus</th>
            <th scope="col">preco</th>
            <th colspan=2>Açôes</th>
          </tr>
        </thead>

          <!-- fim da tabela -->
          <tbody>
            
            <?php foreach($ordens as $orden){ ?>
              <tr>
                <td><?php echo $orden->idos?> </td>
                <td><?php echo $orden->nomecliente?>   </td>
                <td><?php echo $orden->nos?>       </td>
                <td><?php echo $orden->datareq?>  </td>
                <td><?php echo $orden->datater?>     </td>
                <td><?php echo $orden->nomefun?>     </td>
                <td><?php echo $orden->nomestatus?>     </td>
                <td><?php echo $orden->preco?>     </td>
                <td><a href="frmos.php?idos=<?php echo $orden->idos?>" class="btn btn-warning">Editar</a></td>
                <td><a href="frmos.php?op=del&idos=<?php echo $orden->idos ?>" class="btn btn-danger">Excluir</a></td>
              </tr>
            <?php }?> 
          </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>