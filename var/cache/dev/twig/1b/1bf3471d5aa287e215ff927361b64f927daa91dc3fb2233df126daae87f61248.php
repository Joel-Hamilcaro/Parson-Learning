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

/* connexion.php */
class __TwigTemplate_16dc921108f86041047c3cf02e14c84f5e446397fa3171eca3c44dbcbe7af26b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion.php"));

        // line 1
        echo "<?php include_once 'macros.php'; ?>
<?php ob_start() ?>
<div class=\"box\">
<?php if (\$debug) '[div class=\"box\"]'; ?>
<h1><?=\$connexion_title?></h1>
<?php if (\$msg != null) echo '<p>'.(\$msg).'</p>' ; ?>
<form class=\"login\" action=\"/connexion\" method=\"POST\">
  <?php if (\$debug) echo '[form class=\"login\"]'; ?>
  <p><?=\$username?> :</p>
  <p><input type=\"text\" name=\"username\" required></p>
  <p><?=\$password?> :</p>
  <p><input type=\"password\" name=\"pwd\" required></p>
  <p><input type=\"submit\" value=<?=\$connexion_title?>></p>
  <?php if (\$debug) echo '[/form class=\"login\"]'; ?>
</form>
<?php if (\$debug) '[/div class=\"box\"]'; ?>
</div>
<?php \$content = ob_get_clean() ?>
<?php include 'layout.php' ?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "connexion.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php include_once 'macros.php'; ?>
<?php ob_start() ?>
<div class=\"box\">
<?php if (\$debug) '[div class=\"box\"]'; ?>
<h1><?=\$connexion_title?></h1>
<?php if (\$msg != null) echo '<p>'.(\$msg).'</p>' ; ?>
<form class=\"login\" action=\"/connexion\" method=\"POST\">
  <?php if (\$debug) echo '[form class=\"login\"]'; ?>
  <p><?=\$username?> :</p>
  <p><input type=\"text\" name=\"username\" required></p>
  <p><?=\$password?> :</p>
  <p><input type=\"password\" name=\"pwd\" required></p>
  <p><input type=\"submit\" value=<?=\$connexion_title?>></p>
  <?php if (\$debug) echo '[/form class=\"login\"]'; ?>
</form>
<?php if (\$debug) '[/div class=\"box\"]'; ?>
</div>
<?php \$content = ob_get_clean() ?>
<?php include 'layout.php' ?>
", "connexion.php", "/home/joel/Bureau/l3-projet-web-c927aba01fb79c78b3ec4323d18a3fd7213a7b7d/templates/connexion.php");
    }
}
