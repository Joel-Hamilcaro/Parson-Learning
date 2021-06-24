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

/* creerExo.php */
class __TwigTemplate_91ca6a110506ace0bd6b1f995f44a0748b19d4d99cf7e409fec1f9a5d671e0b0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creerExo.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creerExo.php"));

        // line 1
        echo "<?php \$title = 'Creer un exercice' ?>

<?php ob_start() ?>
<h1><?=\$titre_cours?></h1>
<h2>Creer un exercice</h2>
<style>
  textarea {
     resize: vertical; // none, horizontal
  }
</style>
<form action=\"/exo\" method=\"post\">
<p>Énoncé : </p>
<br><textarea cols=\"100\" rows=\"5\" name=\"enonce\"></textarea><br>
<p>Lignes de code :</p>
<br><textarea cols=\"100\" rows=\"5\" name=\"indice\"></textarea><br>
<input type=\"text\" name=\"id_cours\" value=\"<?= \$post['id_cours'] ?>\" hidden><br>
<input type=\"submit\" value=\"Créer la solution de l'exercice\">
</form>
<?php \$content = ob_get_clean() ?>

<?php include 'layout.php' ?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "creerExo.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php \$title = 'Creer un exercice' ?>

<?php ob_start() ?>
<h1><?=\$titre_cours?></h1>
<h2>Creer un exercice</h2>
<style>
  textarea {
     resize: vertical; // none, horizontal
  }
</style>
<form action=\"/exo\" method=\"post\">
<p>Énoncé : </p>
<br><textarea cols=\"100\" rows=\"5\" name=\"enonce\"></textarea><br>
<p>Lignes de code :</p>
<br><textarea cols=\"100\" rows=\"5\" name=\"indice\"></textarea><br>
<input type=\"text\" name=\"id_cours\" value=\"<?= \$post['id_cours'] ?>\" hidden><br>
<input type=\"submit\" value=\"Créer la solution de l'exercice\">
</form>
<?php \$content = ob_get_clean() ?>

<?php include 'layout.php' ?>
", "creerExo.php", "/home/joel/Bureau/l3-projet-web-c927aba01fb79c78b3ec4323d18a3fd7213a7b7d/templates/creerExo.php");
    }
}
