<?php
// model.php
function open_database_connection() // Se connecter à la BDD
{
    $connection = new PDO("mysql:host=localhost;dbname=pw6db", 'pw6', 'pw6',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    return $connection;
}

function close_database_connection(&$connection) // Se déco de la BDD
{
    $connection = null;
}

function get_all_posts() // Return le res de : SELECT id, username FROM user
{
    $connection = open_database_connection(); // Ouvrir connexion sql
    $result = $connection->query('SELECT id, username FROM user');
    $posts = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
    }
    close_database_connection($connection);
    return $posts;
}

function get_post_by_id($id)
{
    $connection = open_database_connection();
    $query = 'SELECT id, username, password FROM user WHERE id=:id';
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    close_database_connection($connection);
    return $row;
}
function insertUser ($username,$pwd,$role) // Inserer un user dans la BDD
{
  $connection = open_database_connection();
  $query ='SELECT * FROM user WHERE username = :username';
  $statement = $connection->prepare($query);
  $statement->bindValue(':username', $username, PDO::PARAM_STR);
  $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  close_database_connection($connection);
  //print_r($row);
  //print(count($row));
  //print_r("user existe");
  if ($row==null)
  {
    $conn = open_database_connection();
    $query1 = 'INSERT INTO user(username,password,nbSucces,nbTentative,teacher) VALUES(:username,:pwd,0,0,:role)';
    //print("insert");
    $statement1 = $conn->prepare($query1);
    $statement1->bindValue(':username', $username, PDO::PARAM_STR);
    $statement1->bindValue(':pwd', $pwd, PDO::PARAM_STR);
    $statement1->bindValue(':role', $role, PDO::PARAM_INT);
    $statement1->execute();
    close_database_connection($conn);
    //print ('<a href="connexion">Connexion</a>');
  }else{
    //print ("User existe deja");
  }
  return $row;
 }

 function selectUser ($username,$pwd)
 {
   //session_start();
   $connection = open_database_connection();
   $query = 'SELECT * FROM user WHERE username = :username and password =:pwd';
   $statement = $connection->prepare($query);
   $statement->bindValue(':username', $username, PDO::PARAM_STR);
   $statement->bindValue(':pwd', $pwd, PDO::PARAM_STR);
   $statement->execute();
   $row = $statement->fetch(PDO::FETCH_ASSOC);
   //print_r ($row);
   if ($row==null)
   {
     //print("row = null");
   }
   else {
     $_SESSION['username']=$username;
     $_SESSION['role']=$row['teacher'];
   }
   close_database_connection($connection);
   return $row;
 }

 function insertCours($titre)
 {
   $user = selectUserParUsername($_SESSION['username']);
   $connection = open_database_connection();
   $query = 'INSERT INTO cours (titre,id_user,nbSucces,nbTentative) VALUES (:titre,:id_user,0,0) ';
   $statement = $connection->prepare($query);
   $statement->bindValue(':titre', $titre, PDO::PARAM_STR);
   $statement->bindValue(':id_user', $user['id'], PDO::PARAM_STR);
   $statement->execute();
   close_database_connection($connection);

   $connection1 = open_database_connection();
   $query1 = ' SELECT * FROM cours order by id_cours DESC limit 1';
   $statement1 = $connection1->prepare($query1);
   $statement1->execute();
   $row1 = $statement1->fetch(PDO::FETCH_ASSOC);
   close_database_connection($connection1);
   return $row1;
 }

 function selectCours()
 {
   $connection = open_database_connection();
   $user= selectUserParUsername($_SESSION['username']);
   $result = $connection->query("SELECT * FROM cours WHERE id_user={$user['id']}");
   $posts = [];
   while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
       $posts[] = $row;
   }
   close_database_connection($connection);
   return $posts;
 }

 function selectAllCours()
 {
   $connection = open_database_connection();
   $result = $connection->query("SELECT * FROM cours");
   $posts = [];
   while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
       $posts[] = $row;
   }
   close_database_connection($connection);
   return $posts;
 }


 function selectCoursParId($id_cours)
 {
   $connection = open_database_connection();
   $query = 'SELECT username,id_cours,titre,id_user,cours.nbSucces,cours.nbTentative FROM user,cours WHERE id_cours = :id_cours and cours.id_user = user.id;';
   $statement = $connection->prepare($query);
   $statement->bindValue(':id_cours', $id_cours, PDO::PARAM_INT);
   $statement->execute();
   $row = $statement->fetch(PDO::FETCH_ASSOC);
   close_database_connection($connection);
   return $row;
 }

  function selectUserCours($id_user,$id_cours)
  {
    $connection = open_database_connection();
    $user= selectUserParUsername($_SESSION['username']);
    $result = $connection->query("SELECT * FROM user_cours WHERE id_user={$user['id']} AND id_cours = ".$id_cours);
    $posts = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
        //print($row);
    }
    close_database_connection($connection);
    return $posts;
  }

function deleteUserCours($id_user,$id_cours)
{
  $connection = open_database_connection();
  $user = selectUserParUsername($id_user);
  $result = $connection->query("DELETE FROM user_cours WHERE id_user={$user['id']} AND id_cours = ".$id_cours);
  close_database_connection($connection);
}

 function insertExo($enonce,$indice,$reponse,$id_cours)
 {
   $connection = open_database_connection();
   $query = 'INSERT INTO exo (enonce,indice,reponse,nbSucces,nbTentative,id_cours) VALUES (:enonce,:indice,:reponse,0,0,:id_cours) ';
   $statement = $connection->prepare($query);
   $statement->bindValue(':enonce', $enonce, PDO::PARAM_STR);
   $statement->bindValue(':indice', $indice, PDO::PARAM_STR);
   $statement->bindValue(':reponse', $reponse, PDO::PARAM_STR);
   $statement->bindValue(':id_cours', $id_cours, PDO::PARAM_INT);
   $statement->execute();
   close_database_connection($connection);
   $connection1 = open_database_connection();
   $query1 = ' SELECT * FROM exo order by id_exo DESC limit 1';
   $statement1 = $connection1->prepare($query1);
   $statement1->execute();
   $row1 = $statement1->fetch(PDO::FETCH_ASSOC);
   close_database_connection($connection1);
   updateUser_exoPourExo($id_cours,$row1['id_exo']);
   return $row1;
 }

 function selectExo($id_cours)
 {
   $connection = open_database_connection();
   $result = $connection->query("SELECT * FROM exo WHERE id_cours = {$id_cours}");
   $posts = [];
   while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
       $posts[] = $row;
   }
   close_database_connection($connection);
   return $posts;
 }

 function selectExoReussi($id_cours)
 {
   $connection = open_database_connection();
   $user = selectUserParUsername($_SESSION['username']);
   $result = $connection->query("SELECT DISTINCT exo.id_exo, exo.enonce FROM exo, user_exo
     WHERE exo.id_cours = {$id_cours} and user_exo.id_exo = exo.id_exo
     and user_exo.id_user = {$user['id']} and user_exo.status = 1");
   $posts = [];
   while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
       $posts[] = $row;
   }
   close_database_connection($connection);
   return $posts;
 }

 function selectExoPasReussi($id_cours)
 {
   $connection = open_database_connection();
   $user = selectUserParUsername($_SESSION['username']);
   $result = $connection->query("SELECT DISTINCT exo.id_exo, exo.enonce FROM exo, user_exo
     WHERE exo.id_cours = {$id_cours} and user_exo.id_exo = exo.id_exo
     and user_exo.id_user = {$user['id']} and user_exo.status = 0");
   $posts = [];
   while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
       $posts[] = $row;
   }
   close_database_connection($connection);
   return $posts;
 }

 function selectExoParId($id_exo)
 {
   $connection = open_database_connection();
   $query = 'SELECT * FROM exo WHERE id_exo = :id_exo';
   $statement = $connection->prepare($query);
   $statement->bindValue(':id_exo', $id_exo, PDO::PARAM_INT);
   $statement->execute();
   $row = $statement->fetch(PDO::FETCH_ASSOC);
   close_database_connection($connection);
   return $row;
 }

 function insertUser_cours($id_cours)
 {
   $user = selectUserParUsername($_SESSION['username']);
   $connection1 = open_database_connection();
   $query1 ='SELECT * FROM user_cours WHERE id_user = :id_user and id_cours =:id_cours';
   $statement1 = $connection1->prepare($query1);
   $statement1->bindValue(':id_user', $user['id'], PDO::PARAM_INT);
   $statement1->bindValue(':id_cours', $id_cours, PDO::PARAM_INT);
   $statement1->execute();
   $row1 = $statement1->fetch(PDO::FETCH_ASSOC);
   close_database_connection($connection1);
   if ($row1==null)
   {
   $connection = open_database_connection();
   $query = 'INSERT INTO user_cours (id_user,id_cours) VALUES (:id_user,:id_cours) ';
   $statement = $connection->prepare($query);

   $statement->bindValue(':id_user', $user['id'], PDO::PARAM_INT);
   $statement->bindValue(':id_cours', $id_cours, PDO::PARAM_INT);
   $statement->execute();
   close_database_connection($connection);
   insertUser_exoInitial ($id_cours);
  }
   return $row1;
 }

 function selectCoursParUser()
 {
   $user = selectUserParUsername($_SESSION['username']);
   $connection = open_database_connection();
   $result = $connection->query("SELECT * FROM cours, user_cours  WHERE cours.id_cours = user_cours.id_cours and user_cours.id_user = {$user['id']}");
   $posts = [];
   while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
       $posts[] = $row;
   }
   close_database_connection($connection);
   return $posts;

 }

 function insertUser_exo($id_exo,$status)
 {
   /*
   $connection1 = open_database_connection();
   $query1 ='SELECT * FROM user_exo WHERE id_user = :id_user and id_exo =:id_exo';
   $statement1 = $connection1->prepare($query1);
   $statement1->bindValue(':id_user', $user['id'], PDO::PARAM_INT);
   $statement1->bindValue(':id_exo', $id_exo, PDO::PARAM_INT);
   $statement1->execute();
   $row1 = $statement1->fetch(PDO::FETCH_ASSOC);
   close_database_connection($connection1);
   */
   $user = selectUserParUsername ($_SESSION ['username']);
   $row1 =selectUser_exo($id_exo);
   if (count($row1)==1)
   {

     $connection = open_database_connection();
     $query = 'INSERT INTO user_exo (id_user, id_exo,status) VALUES (:id_user, :id_exo,:status)';
     $statement = $connection->prepare($query);

     $statement->bindValue(':id_user', $user[id], PDO::PARAM_INT);
     $statement->bindValue(':id_exo', $id_exo, PDO::PARAM_INT);
     $statement->bindValue(':status', $status, PDO::PARAM_INT);
     $statement->execute();
     close_database_connection($connection);
  }else if (count($row1)==3){
   //update user_exo
   if ($row1['status'] != 1){
     $connection = open_database_connection();
     $query = 'UPDATE user_exo SET status=1 WHERE id_user= :id_user AND id_exo = :id_exo';
     $statement = $connection->prepare($query);

     $statement->bindValue(':id_user', $user[id], PDO::PARAM_INT);
     $statement->bindValue(':id_exo', $id_exo, PDO::PARAM_INT);
     $statement->execute();
     close_database_connection($connection);
   }

 }
   return ;
 }

 function selectUser_exo($id_exo)
 {
   $user = selectUserParUsername ($_SESSION ['username']);

   $connection1 = open_database_connection();
   $query1 ='SELECT * FROM user_exo WHERE id_user = :id_user and id_exo =:id_exo';
   $statement1 = $connection1->prepare($query1);
   $statement1->bindValue(':id_user', $user['id'], PDO::PARAM_INT);
   $statement1->bindValue(':id_exo', $id_exo, PDO::PARAM_INT);
   $statement1->execute();
   $row1 = $statement1->fetch(PDO::FETCH_ASSOC);
   close_database_connection($connection1);
   return $row1;
 }


 function insertUser_exoInitial ($id_cours)
 {
   $exos= selectExo($id_cours);
   foreach ($exos as $exo){
     insertUser_exo($exo['id_exo'],"0");
   }
   return ;
 }

function updateExo($id_exo,$succes)
{
  $connection = open_database_connection();
  if ($succes ==1 ){
    $query = 'UPDATE exo  SET nbSucces = nbSucces+1  , nbTentative = nbTentative+1 WHERE id_exo =:id_exo ';
  }else{
    //$connection = open_database_connection();
    $query = 'UPDATE exo  SET nbTentative = nbTentative +1 WHERE id_exo =:id_exo ';
  }
    $statement = $connection->prepare($query);
    $statement->bindValue(':id_exo', $id_exo, PDO::PARAM_INT);
    $statement->execute();
    close_database_connection($connection);



  return;
}

function updateUser_exo($id_exo)
{
  $user = selectUserParUsername ($_SESSION ['username']);
  $row1 =selectUser_exo($id_exo);
  if (count($row1)==3){
   //update user_exo
   if ($row1['status'] != 1){
     $connection = open_database_connection();
     $query = 'UPDATE user_exo SET status=1 WHERE id_user= :id_user AND id_exo = :id_exo';
     $statement = $connection->prepare($query);

     $statement->bindValue(':id_user', $user['id'], PDO::PARAM_INT);
     $statement->bindValue(':id_exo', $id_exo, PDO::PARAM_INT);
     $statement->execute();
     close_database_connection($connection);
   }

 }
 return ;
}

function updateUser_exoPourExo($id_cours,$id_exo)
{
  //selectUserparCours
  //foreach user update user_exo
  $connection = open_database_connection();
  $result = $connection->query("SELECT * FROM user_cours  WHERE id_cours ={$id_cours} ");
  $posts = [];
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      $posts[] = $row;
  }

  foreach ($posts as $post){
    //print_r($post);
    // insert user into user_exo
    insertUser_exoPourExo($post['id_user'],$id_exo);
  }
  close_database_connection($connection);
  return $posts;

}

function insertUser_exoPourExo($id_user,$id_exo)
{
  $connection = open_database_connection();
  $query = 'INSERT INTO user_exo (id_user, id_exo,status) VALUES (:id_user, :id_exo,:status)';
  $statement = $connection->prepare($query);
  $statement->bindValue(':id_user', $id_user, PDO::PARAM_INT);
  $statement->bindValue(':id_exo', $id_exo, PDO::PARAM_INT);
  $statement->bindValue(':status', 0, PDO::PARAM_INT);
  $statement->execute();
  close_database_connection($connection);
}

function updateUserTentative($succes)
{
  $connection = open_database_connection();
  if ($succes ==1 ){
    $query = 'UPDATE user  SET nbSucces = nbSucces+1  , nbTentative = nbTentative+1 WHERE username =:username ';
  }else{
    //$connection = open_database_connection();
    $query = 'UPDATE user  SET nbTentative = nbTentative +1 WHERE username =:username ';
  }
    $statement = $connection->prepare($query);
    $statement->bindValue(':username', $_SESSION['username'], PDO::PARAM_STR);
    $statement->execute();
    close_database_connection($connection);
  return;
}

function updateCoursTentative($id_cours,$succes)
{
  $connection = open_database_connection();
  if ($succes ==1 ){
    $query = 'UPDATE cours  SET nbSucces = nbSucces+1  , nbTentative = nbTentative+1 WHERE id_cours =:id_cours ';
  }else{
    //$connection = open_database_connection();
    $query = 'UPDATE cours  SET nbTentative = nbTentative +1 WHERE id_cours =:id_cours ';
  }
    $statement = $connection->prepare($query);
    $statement->bindValue(':id_cours', $id_cours, PDO::PARAM_INT);
    $statement->execute();
    close_database_connection($connection);
  return;
}


function selectUserParCours($id_cours)
{
  $connection = open_database_connection();
  $result = $connection->query("SELECT * FROM user,user_cours  WHERE user_cours.id_cours ={$id_cours} and user.teacher=0 and user_cours.id_user = user.id ");
  $posts = [];
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      $posts[] = $row;
  }
  return $posts;
}


function selectUserParId($id)
{
  $connection = open_database_connection();
  $query = 'SELECT * FROM user WHERE id=:id ';
  $statement = $connection->prepare($query);
  $statement->bindValue(':id', $id, PDO::PARAM_INT);
  $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  close_database_connection($connection);
  return $row;
}


function selectUserParUsername()
{
  if (!isset($_SESSION['username'])) {
    echo '<meta http-equiv="refresh" content="0.0;url=/accueil"/>';
    exit();
  }
  $connection = open_database_connection();
  $query = 'SELECT * FROM user WHERE username=:username ';
  $statement = $connection->prepare($query);
  $statement->bindValue(':username', $_SESSION['username'], PDO::PARAM_STR);
  $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  close_database_connection($connection);
  return $row;
}

function selectExoParEnonce($enonce)
{
  $connection = open_database_connection();
  $query = 'SELECT * FROM exo WHERE enonce=:enonce' ;
  $statement = $connection->prepare($query);
  $statement->bindValue(':enonce', $enonce, PDO::PARAM_STR);
  $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  close_database_connection($connection);
  return $row;
}

function selectUser_exoUser($id_exo)
{
  $connection = open_database_connection();
  $result = $connection->query("SELECT * FROM user, user_exo  WHERE user.id = user_exo.id_user and user_exo.id_exo = {$id_exo}");
  $posts = [];
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      $posts[] = $row;
  }
  close_database_connection($connection);
  return $posts;
}




?>
