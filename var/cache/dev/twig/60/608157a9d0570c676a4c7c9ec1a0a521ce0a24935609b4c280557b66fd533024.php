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

/* creerCours.php */
class __TwigTemplate_fd6830b67cfecbf0e6b850a7f37a8a6df8acd0e81e05a1cf25f36a83195d3746 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creerCours.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creerCours.php"));

        // line 1
        echo "<?php
\$title = 'Creer un cours';
if (!isset(\$_SESSION['username']) || !isset(\$_SESSION['role']) || (\$_SESSION['role']!=1) ){
  echo '<meta http-equiv=\"refresh\" content=\"0.0;url=/forbidden\"/>';
  exit();
}
?>

<?php ob_start() ?>
<h1>Creer un cours</h1>
<form action=\"/creerCours\" method=\"post\">
Titre du cours : <p><input type=\"text\" name=\"titre\" required></p>
<input type=\"submit\" value=\"Creer un cours\">
</form>
<?php \$content = ob_get_clean() ?>

<?php include 'layout.php' ?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "creerCours.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
\$title = 'Creer un cours';
if (!isset(\$_SESSION['username']) || !isset(\$_SESSION['role']) || (\$_SESSION['role']!=1) ){
  echo '<meta http-equiv=\"refresh\" content=\"0.0;url=/forbidden\"/>';
  exit();
}
?>

<?php ob_start() ?>
<h1>Creer un cours</h1>
<form action=\"/creerCours\" method=\"post\">
Titre du cours : <p><input type=\"text\" name=\"titre\" required></p>
<input type=\"submit\" value=\"Creer un cours\">
</form>
<?php \$content = ob_get_clean() ?>

<?php include 'layout.php' ?>
", "creerCours.php", "/home/joel/Bureau/l3-projet-web-c927aba01fb79c78b3ec4323d18a3fd7213a7b7d/templates/creerCours.php");
    }
}
