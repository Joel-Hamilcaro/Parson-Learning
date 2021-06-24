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

/* user.php */
class __TwigTemplate_12d88784a54072ae0225dce56e2f5063c40b8070947b909a041591ef5e58658b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user.php"));

        // line 1
        echo "<?php \$title = 'User' ?>

<?php ob_start() ?>
<h1>Etudiant</h1>
  <div >Nom : <?= \$post['username'] ?></div>

  <?php
  if(\$post['teacher'] ==1){
    print (\"<div class='role'> Rôle: Professeur </div>\");

  }elseif (\$post['teacher']==0){
    print (\"<div class='role'> Rôle: Etudiant </div>\");
    print(\"Tentatives : \".\$post['nbTentative'].\"&nbsp&nbsp&nbsp&nbsp&nbsp\");
    if (\$post['nbSucces'] == 0){
      print(\"Succes :0%\");
    }else{
      print(\"Succes :\".((\$post['nbSucces']/\$post['nbTentative'])*100).\"%\");
    }
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
        return "user.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php \$title = 'User' ?>

<?php ob_start() ?>
<h1>Etudiant</h1>
  <div >Nom : <?= \$post['username'] ?></div>

  <?php
  if(\$post['teacher'] ==1){
    print (\"<div class='role'> Rôle: Professeur </div>\");

  }elseif (\$post['teacher']==0){
    print (\"<div class='role'> Rôle: Etudiant </div>\");
    print(\"Tentatives : \".\$post['nbTentative'].\"&nbsp&nbsp&nbsp&nbsp&nbsp\");
    if (\$post['nbSucces'] == 0){
      print(\"Succes :0%\");
    }else{
      print(\"Succes :\".((\$post['nbSucces']/\$post['nbTentative'])*100).\"%\");
    }
  }
  ?>


<?php \$content = ob_get_clean() ?>

<?php include 'layout.php' ?>
", "user.php", "/home/joel/Bureau/l3-projet-web-c927aba01fb79c78b3ec4323d18a3fd7213a7b7d/templates/user.php");
    }
}
