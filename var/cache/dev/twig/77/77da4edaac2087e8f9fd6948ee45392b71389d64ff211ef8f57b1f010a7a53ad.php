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

/* listeCoursPro.php */
class __TwigTemplate_f5c4c993eec71960aea599192f7034c1bedf9db8cd5c2986cabe9b9f7a0303eb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listeCoursPro.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listeCoursPro.php"));

        // line 1
        echo "<!-- templates/list.php -->
<?php \$title = 'liste de Cours' ?>

<?php ob_start() ?>
    <h1>Liste de cours</h1>
    <ul>
        <?php foreach (\$posts as \$post): ?>
        <li>
            <a href=\"/detailCours?id_cours=<?= \$post['id_cours'] ?>\">
                <?= \$post['titre'] ?>
            </a>
            &nbsp&nbsp&nbsp&nbsp&nbspTentatives: <?= \$post['nbTentative'] ?>
            &nbsp&nbsp&nbsp&nbsp&nbspSucces:
            <?php if (\$post['nbSucces'] == 0){
              print(\"0%\");
            }else{
              print(((\$post['nbSucces']/\$post['nbTentative'])*100).\"%\");
            }
            ?>
        </li>
        <?php endforeach ?>
        <?php
        if(isset(\$_SESSION['username']) && isset(\$_SESSION['role'])  &&  \$_SESSION['role']==1 ){
          print(\"<p><a href='/creerCours'>Creer un cours</a></p>\");
        }
        ?>
    </ul>

<?php \$content = ob_get_clean() ?>

<?php include 'layout.php' ?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "listeCoursPro.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- templates/list.php -->
<?php \$title = 'liste de Cours' ?>

<?php ob_start() ?>
    <h1>Liste de cours</h1>
    <ul>
        <?php foreach (\$posts as \$post): ?>
        <li>
            <a href=\"/detailCours?id_cours=<?= \$post['id_cours'] ?>\">
                <?= \$post['titre'] ?>
            </a>
            &nbsp&nbsp&nbsp&nbsp&nbspTentatives: <?= \$post['nbTentative'] ?>
            &nbsp&nbsp&nbsp&nbsp&nbspSucces:
            <?php if (\$post['nbSucces'] == 0){
              print(\"0%\");
            }else{
              print(((\$post['nbSucces']/\$post['nbTentative'])*100).\"%\");
            }
            ?>
        </li>
        <?php endforeach ?>
        <?php
        if(isset(\$_SESSION['username']) && isset(\$_SESSION['role'])  &&  \$_SESSION['role']==1 ){
          print(\"<p><a href='/creerCours'>Creer un cours</a></p>\");
        }
        ?>
    </ul>

<?php \$content = ob_get_clean() ?>

<?php include 'layout.php' ?>
", "listeCoursPro.php", "/home/joel/Bureau/l3-projet-web-c927aba01fb79c78b3ec4323d18a3fd7213a7b7d/templates/listeCoursPro.php");
    }
}
