<?php
session_start(); // Démarre une nouvelle session ou reprend une session existante

use App\Kernel;
use Symfony\Component\ErrorHandler\Debug;
//use Symfony\Component\HttpFoundation\Request;
/*
require dirname(__DIR__).'/config/bootstrap.php';

if ($_SERVER['APP_DEBUG']) {
    umask(0000);

    Debug::enable();
}

if ($trustedProxies = $_SERVER['TRUSTED_PROXIES'] ?? $_ENV['TRUSTED_PROXIES'] ?? false) {
    Request::setTrustedProxies(explode(',', $trustedProxies), Request::HEADER_X_FORWARDED_ALL ^ Request::HEADER_X_FORWARDED_HOST);
}

if ($trustedHosts = $_SERVER['TRUSTED_HOSTS'] ?? $_ENV['TRUSTED_HOSTS'] ?? false) {
    Request::setTrustedHosts([$trustedHosts]);
}

$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
*/


    // index.php

    // load and initialize any global libraries
    require_once '../vendor/autoload.php';

    //require_once 'model.php';
    //require_once '../src/Controller/Controller.php';

    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

    $request = Request::createFromGlobals(); // Variable où sont stockés les infos de la requête
    $uri = $request->getPathInfo(); // Ex : Si "https://127.0.0.1:8000/connexion" alors uri == "/connexion"
    // URL courant
    $hostname = $_SERVER['HTTP_HOST'];
    $prot = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
    $currentUrl = $prot . '://' . $hostname ;
    $scr_name = $_SERVER['SCRIPT_NAME'];
    $par_name = $_SERVER['QUERY_STRING'];
    $msg_deja = '017839'; // Ce nom est deja pris.
    $msg_confirm = '487949'; // l'inscription est confirmée
    $msg_incorrect = '563247'; // le nom ou mot de passe est incorrect
    $msg_cours_deja = '256281'; // Vous êtes déjà inscrit à ce cours

    //echo $msg_incorrect;
    if ('/' === $uri) { // Redirection
      echo '<meta http-equiv="refresh" content="0.0;url='.$currentUrl.'/accueil"/>';
      exit();
    }
    elseif ('/accueil' === $uri) {
      $response = home_action(); // Voir controller (affiche la page d'accueil)
    } elseif('/inscription' === $uri && isset($_GET['msg']) && $_GET['msg']===$msg_deja){
      $response=inscription("Ce nom est déjà pris."); // Voir controller (affiche la page d'inscription)
    } elseif ('/inscription' === $uri
              && $request->request->has('username')
              && $request->request->has('pwd')
             && $request->request->has('role')) {
      $response = register($request->request->get('username'),$request->request->get('pwd'),$request->request->get('role')); // Voir controller (enregistre un user)
    } elseif('/inscription' === $uri){
      $response=inscription(""); // Voir controller (affiche la page d'inscription)
    } elseif ('/connexion' === $uri
            && $request->request->has('username')
            && $request->request->has('pwd')) {
      $response = login($request->request->get('username'),$request->request->get('pwd'),false);
    } elseif('/connexion' === $uri && isset($_GET['msg']) && $_GET['msg']==$msg_incorrect){
      $response=connexion("Le nom ou le mot de passe est incorrect."); // Voir controller (affiche la page de connexion)
    } elseif('/connexion' === $uri){
        $response=connexion("");
    } elseif('/profile' === $uri && isset($_GET['msg']) && $_GET['msg']==$msg_confirm){
      $response=profile("L'inscription a été bien été effectuée."); // Voir controller (affiche la page profil)
    } elseif('/profile' === $uri){
        $response=profile("");
    }elseif('/deconnexion' === $uri){
        $response=deconnexion();
    } elseif ('/show' === $uri && $request->query->has('id')) {
      $response = show_action($request->query->get('id'));
    }elseif ('/creerCours' === $uri && $request->request->has('titre')){
      $response = cours($request->request->get('titre'));
    }elseif ('/creerCours' === $uri ){
      $response = creerCours();
    /*} elseif ('/afficherCours' === $uri){
      $response=afficherCours();
    */
    } elseif('/chercherCours' === $uri && isset($_GET['msg']) && $_GET['msg']==$msg_cours_deja){
      $response=chercherCours("Vous êtes déjà inscrit à ce cours !"); // Voir controller (affiche la page profil)
    } elseif ('/chercherCours' === $uri){
      $response=chercherCours("");
    } elseif ('/inscrireCours' === $uri && isset($_GET['id_cours']) ){
      $response=inscrireCours($_GET['id_cours']);
    } elseif ('/inscrire' === $uri && $request->request->has('id_cours') ){
      $response=inscrire($request->request->get('id_cours'));
    } elseif ('/detailCours' === $uri && isset($_GET['id_cours']) && $request->query->has('id_cours')){
        $response = detailCours($request->query->get('id_cours'));
    } elseif ('/desinscrireCours' === $uri && $request->query->has('id_cours')){
        $response = desinscrireCours($request->query->get('id_cours'));
    } elseif ('/creerExo' === $uri && $request->query->has('id_cours')){
        $response = creerExo($request->query->get('id_cours'));
    } elseif ('/saveExo' === $uri && $request->request->has('enonce')
                            && $request->request->has('indice')
                            && $request->request->has('id_cours')){
        $response = saveExo($request->request->get('enonce'),$request->request->get('indice'),$request->request->get('id_cours'));
    } elseif ('/exo' === $uri && $request->request->has('enonce')
                            && $request->request->has('indice')
                            && $request->request->has('id_cours')){
        $response = exo($request->request->get('enonce'),$request->request->get('indice'),$request->request->get('id_cours'));
    }elseif ('/afficherExo' === $uri && $request->query->has('id_cours')){
      $response=afficherExo($request->query->get('id_cours'));
    }elseif('/saveSolution' === $uri && $request->request->has('enonce') && $request->request->has('indice')&& $request->request->has('t')&&$request->request->has('id_cours')){
      $reponse = implode (" \n",array_values($request->request->get('t')));
      $response = exoPro($request->request->get('enonce'),$request->request->get('indice'),$reponse,$request->request->get('id_cours'));
    // ================================================================= //
    }elseif ('/detailExo' === $uri && $request->query->has('id_exo')){
        $response = detailExo($request->query->get('id_exo'));
    }elseif ('/ds' === $uri){
        $response = ds();
    }elseif ('/getExo' === $uri && $request->request->has('t') && $request->request->has('id_exo')){
        //print_r($request->request->get('t'));
        $response = reponse($request->request->get('t'),$request->request->get('id_exo'));
    }elseif('/detailUser' === $uri && $request->query->has('id')){
      $response = detailUser($request->query->get('id'));

    // ================================================================= //
    } elseif('/debug01' === $uri) {
      $response = list_action(); // Voir controller (affiche la liste des user);
    } elseif('/forbidden' === $uri) {
      $response = forbidden_action(); // Voir controller (page non accessible par l'user);
    } else {
      $response = notFound_action(); // Voir controller (page inexistante)
    }

    // echo the headers and send the response
    $response->send();

    ?>
