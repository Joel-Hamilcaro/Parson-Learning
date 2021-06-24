<?php include_once 'macros.php'; ?>

<?php ob_start() ?>

<?php
  if(isset($_SESSION['username']) && isset($_SESSION['role'])){
    print("<hr><h1>Mes cours</h1>");
  }
  else {
    print("<p class='desc'>".$description."</p>");
  }
?>
<?php
if(isset($_SESSION['username']) && isset($_SESSION['role'])  &&  $_SESSION['role']==1 ){
  print("<nav id='nav' class='center'><p><a href='/creerCours'>Creer un cours</a></p></nav>");
}
if(isset($_SESSION['username']) && isset($_SESSION['role'])  &&  $_SESSION['role']==0 ){
  print("<nav id='nav' class='center'><p><a href='/chercherCours'>Chercher un cours</a></p></nav>");
}
?>
    <ul id="list">
        <?php if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role']==1 ) foreach ($posts as $post): ?>
        <li>
          <div >
            <a href="/detailCours?id_cours=<?= $post['id_cours'] ?>">

                <?= $post['titre'] ?>
            </a>
          </div>

            <div >
              &nbsp&nbsp&nbsp&nbsp&nbspTentatives: <?= $post['nbTentative'] ?><br>
              &nbsp&nbsp&nbsp&nbsp&nbspSucces:
              <?php if ($post['nbSucces'] == 0){
                print("0%");
              }else{
                print((($post['nbSucces']/$post['nbTentative'])*100)."%");
              }
              ?>
            </div>

        </li>
        <?php endforeach ?>
        <?php if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role']==0 ) foreach ($posts as $post): ?>
        <li>

            <a href="/detailCours?id_cours=<?= $post['id_cours'] ?>">
                <?= $post['titre'] ?>
            </a>

        </li>
        <?php endforeach ?>
    </ul>


<?php $content = ob_get_clean() ?>
<?php include_once 'layout.php' ?>
