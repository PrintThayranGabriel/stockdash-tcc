<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
?>

<?php
  require 'db_connection.php';
  require 'validatesession.php';
  require 'validaterole.php';


$contador = $conn->query("SELECT COUNT(nome) as numero_registros FROM `usuarios`");
$contador = mysqli_fetch_array($contador);
// echo '<h1 class="title">Quantidade de usuários: ',$contador['numero_registros'];

// função para buscar os dados da base de dados
function get_all_data($conn){
  $get_data = mysqli_query($conn,"SELECT * FROM `usuarios`");
  if(mysqli_num_rows($get_data) > 0){
    echo '<div class="container-dados"><table>
    <tr>
    <th>Nome do usuário</th>
    <th>Email</th>
    <th>Senha</th>
    <th>Cargo</th>
    </tr>';
    while($row = mysqli_fetch_assoc($get_data)){
      
      echo '<tr class="dados">
      <td>'.$row['nome'].'</td>
      <td>'.$row['email'].'</td>
      <td>'.$row['senha'].'</td>
      <td>'.$row['cargo'].'</td>
           </tr>';

       }
       echo '</table>';
     }else{
       echo "<h3>Nenhum registro encontrado. Por favor insira alguns registros.</h3>";
    }
}

function get_all_stocks($conn){
  $get_data = mysqli_query($conn,"SELECT * FROM `interesses`");
  if(mysqli_num_rows($get_data) > 0){
    echo '<div class="container-dados"><table>
    <tr>
    <th>ID</th>
    <th>Código da ação</th>
    <th>Id Usuário</th>
    <th>Ações</th>
    </tr>';
    while($row = mysqli_fetch_assoc($get_data)){
      
      echo '<tr class="dados">
      <td>'.$row['id'].'</td>
      <td>'.$row['symbol'].'</td>
      <td>'.$row['id_usuario'].'</td>
      <td><a href="">Deletar</a></td> 
      </tr>';

       }
       echo '</table>';
     }else{
       echo "<h3>Nenhum registro encontrado. Por favor insira alguns registros.</h3>";
    }
}


?>


<!DOCTYPE html> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <link rel="stylesheet" href="css/admin.css">
</head>

<body>
  <header>
    <div class="logo">
      <a href="#"><strong>Stock</strong>Dash</a>
    </div>

    <div class="perfil">
      <img class="foto" src="/meutcc/images/usuario-de-perfil.png" alt="foto de perfil">
      <p class="username"><?=$_SESSION['nome'].' (Administrador)';?></p>
      <form action="logout.php" method="post">
                <button class="logout" name="logout" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M7 12h14l-3 -3m0 6l3 -3" />
                    </svg>
                </button>
            </form>
    </div>
  </header>

  <div class="dados">
    <?='<h1 class="title">Quantidade de usuários: ',$contador['numero_registros'].'</h1>' ?>
    <?=get_all_data($conn); ?>
  </div>

  <div class="dados">
    <h1 class="title">Ações cadastradas</h1>
    <?=get_all_stocks($conn); ?> 
  </div>


</body>


