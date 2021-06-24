
<?php
//namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

$hostname = $_SERVER['HTTP_HOST'];
$prot = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
$currentUrl = $prot . '://' . $hostname ;
$scr_name = $_SERVER['SCRIPT_NAME'];
$par_name = $_SERVER['QUERY_STRING'];

function forbidden_action(){
  $html = render_template(dirname(getcwd()).'/templates/forbidden.php',[]);
  return new Response($html);
}

function notFound_action(){
  $html = render_template(dirname(getcwd()).'/templates/notFound.php',[]);
  return new Response($html, Response::HTTP_NOT_FOUND);
}

function home_action(){
  if (isset($_SESSION['role']) && $_SESSION['username']){
    if ($_SESSION['role']==1){
      $posts = selectCours();
      $html = render_template(dirname(getcwd()).'/templates/home.php', ['posts' => $posts]);
    } else {
      $posts = selectCoursParUser();
      $html = render_template(dirname(getcwd()).'/templates/home.php', ['posts' => $posts]);
    }
  }
  else {
    $html = render_template(dirname(getcwd()).'/templates/home.php', []);
  }
  return new Response($html);
}

function inscription($msg) // Charge le template d'inscription
{
  $html = render_template(dirname(getcwd()).'/templates/inscription.php', ['msg' => $msg]);
  return new Response($html);
}

function connexion($msg)
{
  $html = render_template(dirname(getcwd()).'/templates/connexion.php', ['msg' => $msg]);
  return new Response($html);
}

function deconnexion()
{
  if(isset($_SESSION['username'])){unset($_SESSION['username']);}
  if(isset($_SESSION['role'])){unset($_SESSION['role']);}
  echo '<meta http-equiv="refresh" content="0.0;url=/accueil"/>';
  exit();
}

function profile($msg)
{
  if (!isset($_SESSION['username'])) {
    echo '<meta http-equiv="refresh" content="0.0;url=/forbidden"/>';
    exit();
  }
  $post = selectUserParUsername($_SESSION['username']);
  $html = render_template(dirname(getcwd()).'/templates/login.php', ['msg' => $msg, 'post' => $post]);
  return new Response($html);
}

function register($username,$pwd,$role) // Inscrire un user
{
  $pass = md5($pwd);
  $post = insertUser($username,$pass,$role); // Voir model
  if ($post==null)
  {
    //echo '<meta http-equiv="refresh" content="0.0;url='.$currentUrl.'/confirmation"/>';
    //exit();
    return login($username,$pwd,true);
  }
  else {
    echo '<meta http-equiv="refresh" content="0.0;url=/inscription?msg=017839"/>';
    exit();
  }
}

function login($username,$pwd,$inscription)
{
  $pass = md5($pwd);
  $post = selectUser($username,$pass);
  if ($post==null)
  {
    echo '<meta http-equiv="refresh" content="0.0;url=/connexion?msg=563247"/>' ;
    exit();
  }
  else if ($inscription) {
    echo '<meta http-equiv="refresh" content="0.0;url=/profile?msg=487949"/>';
    exit();
  }
  else {
    echo '<meta http-equiv="refresh" content="0.0;url=/accueil"/>';
    exit();
  }
}

function creerCours()
{
  $html = render_template(dirname(getcwd()).'/templates/creerCours.php', []);
  return new Response($html);
}

function cours($titre)
{
  insertCours($titre);
  $posts = selectCours();
  echo '<meta http-equiv="refresh" content="0.0;url=/accueil"/>';
  exit();
}

function chercherCours($msg)
{
  if (isset($_SESSION['role']) && isset($_SESSION['username']) && $_SESSION['role']==0){
    $posts = selectAllCours();
    $html = render_template(dirname(getcwd()).'/templates/chercherCours.php', ['posts' => $posts , 'msg' => $msg]);
  } else {
    return forbidden_action();
  }
  return new Response($html);
}

function inscrireCours($id_cours)
{
  if (isset($_SESSION['role']) && isset($_SESSION['username']) && $_SESSION['role']==0){
    $row = insertUser_cours($id_cours);
    if ($row!=null){
      echo '<meta http-equiv="refresh" content="0.0;url=/chercherCours?msg=256281"/>';
      exit();
    }

  } else {
    return forbidden_action();
  }
  echo '<meta http-equiv="refresh" content="0.0;url=/accueil"/>';
  exit();
}

function detailCours($id_cours)
{
  $row = null;
  $row2 = null;
  if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role']==0 ){
    $row = selectUserCours($_SESSION['username'],$id_cours);
  }
  else if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role']==1 ){
    $row2 = selectCours();
  }
  else {
    echo '<meta http-equiv="refresh" content="0.0;url=/forbidden"/>';
    exit();
  }
  if ($row!=null && isset($_SESSION['role']) && $_SESSION['role']==0 && isset($_SESSION['username'])) {
    $post = selectCoursParId($id_cours);
    $html = render_template(dirname(getcwd()).'/templates/cours.php', ['post' => $post,'etudiants'=>""]);
    //print_r($post);
    return new Response($html);
  }
  else if ($row2!=null && isset($_SESSION['role']) && $_SESSION['role']==1 && isset($_SESSION['username'])) {
    $post = selectCoursParId($id_cours);
    $etudiants = selectUserParCours($id_cours);
    $html = render_template(dirname(getcwd()).'/templates/cours.php', ['post' => $post,'etudiants'=>$etudiants]);
    return new Response($html);
  }
  else {
    echo '<meta http-equiv="refresh" content="0.0;url=/forbidden"/>';
    exit();
  }
}

function desinscrireCours($id_cours)
{
  if (isset($_SESSION['role']) && isset($_SESSION['username']) && $_SESSION['role']==0){
    $row = selectUserCours($_SESSION['username'],$id_cours);
    if ($row!=null){
      deleteUserCours($_SESSION['username'],$id_cours);
      echo '<meta http-equiv="refresh" content="0.0;url=/accueil"/>';
      exit();
    }
    else {
      echo '<meta http-equiv="refresh" content="0.0;url=/forbidden"/>';
      exit();
    }
  } else{
    echo '<meta http-equiv="refresh" content="0.0;url=/forbidden"/>';
    exit();
  }
  echo '<meta http-equiv="refresh" content="0.0;url=/accueil"/>';
  exit();
}

function creerExo($id_cours)
{

  if (isset($_SESSION['role']) && isset($_SESSION['username']) && $_SESSION['role']==1){
    $user = selectUserParUsername($_SESSION['username']);
    $row = selectCoursParId($id_cours);
    if ($user!=null && $row!=null && $user['id']==$row['id_user']){
      $post = Array ("id_cours"=>$id_cours);
      $html = render_template(dirname(getcwd()).'/templates/creerExo.php', ['post' => $post, 'titre_cours' => $row['titre']]);
      return new Response($html);
    }
  }
  echo '<meta http-equiv="refresh" content="0.0;url=/forbidden"/>';
  exit();
}

function saveExo($enonce,$indice,$id_cours)
{
  //
}

function exoPro($enonce,$indice,$reponse,$id_cours)
{
  if (isset($_SESSION['role']) && isset($_SESSION['username']) && $_SESSION['role']==1){
    $user = selectUserParUsername($_SESSION['username']);
    $row = selectCoursParId($id_cours);
    if ($user!=null && $row!=null && $user['id']==$row['id_user']){
      insertExo(trim($enonce),trim($indice),trim($reponse),$id_cours);
      $posts1 = selectExo($id_cours);
      echo '<meta http-equiv="refresh" content="0.0;url=/afficherExo?id_cours='.$id_cours.'"/>';
      exit();
    }
  }
  echo '<meta http-equiv="refresh" content="0.0;url=/forbidden"/>';
  exit();
}

function exo($enonce,$indice,$id_cours)
{
  //insert exo et update user_exo
  //insertExo(trim($enonce),trim($indice),trim($reponse),$id_cours);

  //$posts1 = selectExo($id_cours);
  //print_r($posts);
  $html = render_template(dirname(getcwd()).'/templates/proposerSolution.php', ['id_cours'=>$id_cours, 'enonce'=>$enonce,'indice'=>$indice]);
  return new Response($html);
}

function detailExo($id_exo)
{
  $row = selectExoParId($id_exo);
  if (isset($_SESSION['username']) && isset($_SESSION['role'])){

    if ($row==null){
      echo '<meta http-equiv="refresh" content="0.0;url=/forbidden"/>';
      exit();
    }

    $id_cours = $row['id_cours'];
    $row1 = selectUserParUsername($_SESSION['username']);
    $id_user = $row1['id'];
    $row2 = selectUserCours($id_user,$id_cours);
    $row3 = selectCoursParId($id_cours);

    if ( ($row2==null && $_SESSION['role']==0) || ($row3['id_user']!=$id_user && $_SESSION['role']==1 ) ){
      echo '<meta http-equiv="refresh" content="0.0;url=/forbidden"/>';
      exit();
    }

  }
  else {
    echo '<meta http-equiv="refresh" content="0.0;url=/forbidden"/>';
    exit();
  }
  $user = selectUserParUsername($_SESSION['username']);
  $post = selectExoParId($id_exo);
  $bool = selectUser_exo($id_exo);
  if ($bool==null){
    $post['bool']=0;
  } else{
    $post['bool']=1;
  }
  $etudiants=selectUser_exoUser($id_exo);
  $html = render_template(dirname(getcwd()).'/templates/ds.php', ['post' => $post,'etudiants'=>$etudiants]);
  return new Response($html);
}



function afficherExo($id_cours)
{
  if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] == 0 ){
    $posts1 = selectExoReussi($id_cours);
    $posts2 = selectExoPasReussi ($id_cours);
    $html = render_template(dirname(getcwd()).'/templates/listeExo.php', ['posts1'=>$posts1, 'posts2'=>$posts2]);
  }elseif (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] == 1 ){
    $posts1 = selectExo($id_cours);
    $html = render_template(dirname(getcwd()).'/templates/listeExoPro.php', ['posts1'=>$posts1]);
  } else {
    echo '<meta http-equiv="refresh" content="0.0;url=/forbidden"/>';
    exit();
  }
  return new Response($html);
}

/*
function inscrire ($id_cours)
{
  insertUser_cours($id_cours);
  $posts = selectCoursParUser();
  //print_r($posts);
  $html = render_template(dirname(getcwd()).'/templates/listeCours.php', ['posts' => $posts]);
  return new Response($html);
}
*/
function ds()
{
  $html = render_template(dirname(getcwd()).'/templates/ds.php', []);
  return new Response($html);
}
function reponse($tab,$id_exo)
{
  $post = selectExoParId($id_exo);
  $reponse = $post ["reponse"];
  //print_r($reponse);
  $rep =explode("\n",$reponse);
  //print_r($rep);
  //print_r($rep);
  //print_r($tab);
  $len =count ($rep);
  $bool = Array ("resultat"=>1);
  if ($len != count($tab)){
    //print("votre solution a pas de bon nombre de ligne");

    $bool["resultat"] =0;
  }else{

    for ($i=0;$i<$len;$i++){
      if (trim(current ($rep)) != trim(current ($tab))){
        //print("Il y a des fautes ici : ");
        //print_r(current ($rep));
          $bool["resultat"] =0;
          break;
      }
      next($rep);
      next ($tab);
    }
  }
  if ( $_SESSION["role"] ==0){
    //print_r($bool["resultat"]);
    if ($bool["resultat"] ==1){
      //insertUser_exo($id_exo,1);
      updateUser_exo($id_exo);
      updateExo($id_exo,1);
      updateUserTentative(1);
      updateCoursTentative($post['id_cours'],1);
    }else{
      updateExo($id_exo,0);
      updateUserTentative(0);
      updateCoursTentative($post['id_cours'],0);
    }



  }
  $html = render_template(dirname(getcwd()).'/templates/resultat.php', ['bool' => $bool]);
  return new Response($html);
}

function detailUser($id)
{
  $post = selectUserParId($id);
  $html = render_template(dirname(getcwd()).'/templates/user.php', ['post' => $post]);
  return new Response($html);
}

function list_action()
{
    $posts = get_all_posts(); // Voir model
    $html = render_template(dirname(getcwd()).'/templates/list.php', ['posts' => $posts]);
    return new Response($html);
}

function show_action($id)
{
    $post = get_post_by_id($id);
    $html = render_template(dirname(getcwd()).'/templates/show.php', ['post' => $post]);
    return new Response($html);
}

function render_template($path, array $args)
{
    extract($args);
    ob_start();
    require $path;
    $html = ob_get_clean();
    return $html;
}

/*
function afficherCours()
{
  if (!isset($_SESSION['role']) || !isset($_SESSION['username'])){
    return forbidden_action();
  }
  if ($_SESSION['role']==1){
    $posts = selectCours();
    $html = render_template(dirname(getcwd()).'/templates/listeCoursPro.php', ['posts' => $posts]);
  } else {
    $posts = selectCoursParUser();
    $html = render_template(dirname(getcwd()).'/templates/listeCours.php', ['posts' => $posts]);
  }
  return new Response($html);
}
*/
?>
