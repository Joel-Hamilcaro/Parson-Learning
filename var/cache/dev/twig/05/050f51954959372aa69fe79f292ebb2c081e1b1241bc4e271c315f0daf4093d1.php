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

/* listeExoPro.php */
class __TwigTemplate_1c2abc0194f7a53d28c21d9e301e59fc5074cd39a21aecc90ed3b935de9a991c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listeExoPro.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listeExoPro.php"));

        // line 1
        echo "<!-- templates/list.php -->
<?php \$title = 'liste d\\'exercice' ?>

<?php ob_start() ?>
    <h1>Liste d'exercices</h1>
    
    <ul id=\"list\">
      <?php foreach (\$posts1 as \$post1): ?>
        <li>
          <div >
            <a href=\"/detailExo?id_exo=<?= \$post1['id_exo'] ?>\">
                <?= \$post1['enonce'] ?>
                </a>
          </div>
          <div >
            &nbsp&nbsp&nbsp&nbsp&nbspTentatives: <?= \$post1['nbTentative'] ?>
            &nbsp&nbsp&nbsp&nbsp&nbspSucces:
            <?php if (\$post1['nbSucces'] == 0){
              print(\"0%\");
            }else{
              print(((\$post1['nbSucces']/\$post1['nbTentative'])*100).\"%\");
            }
             ?>
          </div>
        </li>
        <?php endforeach ?>

    </ul>



<?php \$content = ob_get_clean() ?>

<?php include 'layout.php' ?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "listeExoPro.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- templates/list.php -->
<?php \$title = 'liste d\\'exercice' ?>

<?php ob_start() ?>
    <h1>Liste d'exercices</h1>
    
    <ul id=\"list\">
      <?php foreach (\$posts1 as \$post1): ?>
        <li>
          <div >
            <a href=\"/detailExo?id_exo=<?= \$post1['id_exo'] ?>\">
                <?= \$post1['enonce'] ?>
                </a>
          </div>
          <div >
            &nbsp&nbsp&nbsp&nbsp&nbspTentatives: <?= \$post1['nbTentative'] ?>
            &nbsp&nbsp&nbsp&nbsp&nbspSucces:
            <?php if (\$post1['nbSucces'] == 0){
              print(\"0%\");
            }else{
              print(((\$post1['nbSucces']/\$post1['nbTentative'])*100).\"%\");
            }
             ?>
          </div>
        </li>
        <?php endforeach ?>

    </ul>



<?php \$content = ob_get_clean() ?>

<?php include 'layout.php' ?>
", "listeExoPro.php", "/home/joel/Bureau/l3-projet-web-c927aba01fb79c78b3ec4323d18a3fd7213a7b7d/templates/listeExoPro.php");
    }
}
