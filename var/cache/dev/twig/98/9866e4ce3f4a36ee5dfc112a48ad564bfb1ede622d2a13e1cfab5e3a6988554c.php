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

/* chercherCours.php */
class __TwigTemplate_59da7dc7f8c62a073fff625232374a489947dec86a36958a71b6523185991f6b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chercherCours.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chercherCours.php"));

        // line 1
        echo "<!-- templates/list.php -->
<?php include_once 'macros.php'; ?>

<?php ob_start() ?>
    <h2><?=\$lst_cours ?></h2>
    <?php echo '<p>'.(\$msg).'</p>' ; ?>
    <ul id=\"list\">
        <?php foreach (\$posts as \$post): ?>
        <li>
          <div id = \"top\">
            <h3><?= \$post['titre'] ?></h3>
          </div>


            <a href=\"/inscrireCours?id_cours=<?= \$post['id_cours'] ?>\">
                S'inscrire
            </a>
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
        return "chercherCours.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- templates/list.php -->
<?php include_once 'macros.php'; ?>

<?php ob_start() ?>
    <h2><?=\$lst_cours ?></h2>
    <?php echo '<p>'.(\$msg).'</p>' ; ?>
    <ul id=\"list\">
        <?php foreach (\$posts as \$post): ?>
        <li>
          <div id = \"top\">
            <h3><?= \$post['titre'] ?></h3>
          </div>


            <a href=\"/inscrireCours?id_cours=<?= \$post['id_cours'] ?>\">
                S'inscrire
            </a>
        </li>
        <?php endforeach ?>
    </ul>

<?php \$content = ob_get_clean() ?>

<?php include 'layout.php' ?>
", "chercherCours.php", "/home/joel/Bureau/l3-projet-web-c927aba01fb79c78b3ec4323d18a3fd7213a7b7d/templates/chercherCours.php");
    }
}
