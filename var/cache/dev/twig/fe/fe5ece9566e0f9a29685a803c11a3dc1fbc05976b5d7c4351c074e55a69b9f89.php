<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* cours.php */
class __TwigTemplate_b956f659664c1aca5b7bc7ef51e956d0ba0cabd33dcc5b9b673cd6bf1d22997b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours.php"));

        // line 1
        echo "
<?php \$title = \"le cours\" ?>

<?php ob_start() ?>
    <h2> <?= \$post['titre'] ?></h2>

    <div class=\"createur\">Créateur : <?= \$post['username'] ?></div>
    <p><a href='/afficherExo?id_cours=<?= \$post['id_cours'] ?>'>
      Afficher les exercices
    </a></p>
    <?php
      if (isset(\$_SESSION['username']) && isset(\$_SESSION['role'])  &&  \$_SESSION['role']==1 ){
        print(\"<p><a href='/creerExo?id_cours=\".\$post['id_cours'].\"'> Creer un exercice  </a><p>\");
        print(\"Liste des inscrits au cours :\");
        print(\"<ul>\");
        foreach (\$etudiants as \$etudiant){
          print(\"<li>
              <a href='/detailUser?id=\".\$etudiant['id_user'].\"'>
                  \".\$etudiant['username'].\"
              </a>
          </li>\");
        }
        print(\"</ul>\");
        /*
        print(\"Nombre total de tentatives :\".\$post['nbTentative'].\"&nbsp&nbsp&nbsp&nbsp&nbsp\");
        if (\$post['nbSucces'] == 0){
          print(\"Succes :0%\");
        }else{
          print(\"Succes :\".((\$post['nbSucces']/\$post['nbTentative'])*100).\"%\");
        }*/

      }
     ?>
    <!-- <a href=\"/creerExo?id_cours=<?= \$post['id_cours'] ?>\">
        Creer un exercice
    </a> -->


    <?php if (isset(\$_SESSION['username']) && isset(\$_SESSION['role'])  &&  \$_SESSION['role']==0 ){ ?>
    <p><a href='/desinscrireCours?id_cours=<?= \$post['id_cours'] ?>'>
      Se desinscire
    </a></p>
    <?php } ?>
<?php \$content = ob_get_clean() ?>

<?php include 'layout.php' ?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cours.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<?php \$title = \"le cours\" ?>

<?php ob_start() ?>
    <h2> <?= \$post['titre'] ?></h2>

    <div class=\"createur\">Créateur : <?= \$post['username'] ?></div>
    <p><a href='/afficherExo?id_cours=<?= \$post['id_cours'] ?>'>
      Afficher les exercices
    </a></p>
    <?php
      if (isset(\$_SESSION['username']) && isset(\$_SESSION['role'])  &&  \$_SESSION['role']==1 ){
        print(\"<p><a href='/creerExo?id_cours=\".\$post['id_cours'].\"'> Creer un exercice  </a><p>\");
        print(\"Liste des inscrits au cours :\");
        print(\"<ul>\");
        foreach (\$etudiants as \$etudiant){
          print(\"<li>
              <a href='/detailUser?id=\".\$etudiant['id_user'].\"'>
                  \".\$etudiant['username'].\"
              </a>
          </li>\");
        }
        print(\"</ul>\");
        /*
        print(\"Nombre total de tentatives :\".\$post['nbTentative'].\"&nbsp&nbsp&nbsp&nbsp&nbsp\");
        if (\$post['nbSucces'] == 0){
          print(\"Succes :0%\");
        }else{
          print(\"Succes :\".((\$post['nbSucces']/\$post['nbTentative'])*100).\"%\");
        }*/

      }
     ?>
    <!-- <a href=\"/creerExo?id_cours=<?= \$post['id_cours'] ?>\">
        Creer un exercice
    </a> -->


    <?php if (isset(\$_SESSION['username']) && isset(\$_SESSION['role'])  &&  \$_SESSION['role']==0 ){ ?>
    <p><a href='/desinscrireCours?id_cours=<?= \$post['id_cours'] ?>'>
      Se desinscire
    </a></p>
    <?php } ?>
<?php \$content = ob_get_clean() ?>

<?php include 'layout.php' ?>
", "cours.php", "/home/joel/Bureau/l3-projet-web-c927aba01fb79c78b3ec4323d18a3fd7213a7b7d/templates/cours.php");
    }
}
