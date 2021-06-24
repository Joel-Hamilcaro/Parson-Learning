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

/* login.php */
class __TwigTemplate_4aa434670dda366f9750d105137652db8b61abe8624d2bbfc29dd6f72fdb2961 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.php"));

        // line 1
        echo "<?php
if (!isset(\$_SESSION['username'])){
  echo 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';
  echo '<meta http-equiv=\"refresh\" content=\"1.0;url=/forbidden\"/>';
  exit();
}
?>
<?php include_once 'macros.php'; ?>
<?php \$title = 'Login' ?>

<?php ob_start() ?>

<h1><?=\$profile_title?></h1>
  <?php echo '<p>'.(\$msg).'</p>' ; ?>
  <div class=\"username\">
    Nom d'utilisateur : <?= \$_SESSION['username']?> 
  </div>
  <?php if (\$debug) echo \"<div>ID: \".post['id'].\"</div>\" ?>
  <?php
  if(isset(\$_SESSION['username']) && isset(\$_SESSION['role'])  &&  \$_SESSION['role']==1 ){
    print (\"<div class='role'>\".\$role.\" : \".\$teacher.\"</div>\");
    //print(\"<p><a href='/creerCours'>Créer un nouveau cours</a></p>\");
    //print(\"  <p><a href='/afficherCours'>Afficher les cours</a></p>\");
  } elseif (isset(\$_SESSION['username']) && isset(\$_SESSION['role'])  &&  \$_SESSION['role']==0){
    print (\"<div class='role'>\".\$role.\" : \".\$student.\"</div>\");
    //print (\"<p><a href='/chercherCours'>S'inscrire à un cours</a></p>\");
    //print (\"  <p><a href='/afficherCours'>Afficher les cours</a></p>\");
  }
  ?>


<?php \$content = ob_get_clean() ?>

<?php include 'layout.php' ?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "login.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
if (!isset(\$_SESSION['username'])){
  echo 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';
  echo '<meta http-equiv=\"refresh\" content=\"1.0;url=/forbidden\"/>';
  exit();
}
?>
<?php include_once 'macros.php'; ?>
<?php \$title = 'Login' ?>

<?php ob_start() ?>

<h1><?=\$profile_title?></h1>
  <?php echo '<p>'.(\$msg).'</p>' ; ?>
  <div class=\"username\">
    Nom d'utilisateur : <?= \$_SESSION['username']?> 
  </div>
  <?php if (\$debug) echo \"<div>ID: \".post['id'].\"</div>\" ?>
  <?php
  if(isset(\$_SESSION['username']) && isset(\$_SESSION['role'])  &&  \$_SESSION['role']==1 ){
    print (\"<div class='role'>\".\$role.\" : \".\$teacher.\"</div>\");
    //print(\"<p><a href='/creerCours'>Créer un nouveau cours</a></p>\");
    //print(\"  <p><a href='/afficherCours'>Afficher les cours</a></p>\");
  } elseif (isset(\$_SESSION['username']) && isset(\$_SESSION['role'])  &&  \$_SESSION['role']==0){
    print (\"<div class='role'>\".\$role.\" : \".\$student.\"</div>\");
    //print (\"<p><a href='/chercherCours'>S'inscrire à un cours</a></p>\");
    //print (\"  <p><a href='/afficherCours'>Afficher les cours</a></p>\");
  }
  ?>


<?php \$content = ob_get_clean() ?>

<?php include 'layout.php' ?>
", "login.php", "/home/joel/Bureau/l3-projet-web-c927aba01fb79c78b3ec4323d18a3fd7213a7b7d/templates/login.php");
    }
}
