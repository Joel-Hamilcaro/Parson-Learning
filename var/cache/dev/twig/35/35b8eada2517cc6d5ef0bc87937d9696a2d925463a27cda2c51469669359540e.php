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

/* inscription.php */
class __TwigTemplate_f9d63bf3b990366e4e81ffd9b0ed55e5f7563403c707a566259c01876cfc69a0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription.php"));

        // line 1
        echo "<?php include_once 'macros.php'; ?>

<?php ob_start() ?>
  <div class=\"box\">
  <?php if (\$debug) '[div class=\"box\"]'; ?>
<h1><?=\$inscription_title?></h1>
<?php echo '<p>'.(\$msg).'</p>' ; ?>
<form class=\"login\" action=\"/inscription\" method=\"POST\">
  <?php if (\$debug) echo '[form class=\"login\"]'; ?>
  <p><?=\$username?> :</p> <p><input type=\"text\" name=\"username\" required></p>
  <p><?=\$password?> : <span id=\"mdp\">(?)<br></span>
  <span id=\"mdp_msg\"> <?=\$mdp_msg?> </span></p>
  <p><input type=\"password\" name=\"pwd\" required pattern=\".{6,}\"></p>
  
  <script>
  \$(document).ready(function(){
    var mdp = \$(\"#mdp\");
    var mdp_msg = \$(\"#mdp_msg\");
    mdp.hover(
      function(){ mdp_msg.fadeTo(120,1); },
      function(){ mdp_msg.fadeTo(120,0.0); }
    );
    mdp_msg.fadeTo(0,0.0);
  });

  </script>

  <p> <?=\$role?> : </p>
  <p>
    <?=\$teacher?> <input type=\"radio\" name=\"role\" value=\"1\" required>
    <?=\$student?> <input type=\"radio\" name=\"role\" value=\"0\">
  <p>
  <input type=\"submit\" value=\"<?=\$valider?>\">
  </p>
  <?php if (\$debug) echo '[/form class=\"login\"]'; ?>
</form>

<?php if (\$debug) '[/div class=\"box\"]'; ?>
</div>
<?php \$content = ob_get_clean() ?>
<?php include_once 'layout.php' ?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inscription.php";
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
<h1><?=\$inscription_title?></h1>
<?php echo '<p>'.(\$msg).'</p>' ; ?>
<form class=\"login\" action=\"/inscription\" method=\"POST\">
  <?php if (\$debug) echo '[form class=\"login\"]'; ?>
  <p><?=\$username?> :</p> <p><input type=\"text\" name=\"username\" required></p>
  <p><?=\$password?> : <span id=\"mdp\">(?)<br></span>
  <span id=\"mdp_msg\"> <?=\$mdp_msg?> </span></p>
  <p><input type=\"password\" name=\"pwd\" required pattern=\".{6,}\"></p>
  
  <script>
  \$(document).ready(function(){
    var mdp = \$(\"#mdp\");
    var mdp_msg = \$(\"#mdp_msg\");
    mdp.hover(
      function(){ mdp_msg.fadeTo(120,1); },
      function(){ mdp_msg.fadeTo(120,0.0); }
    );
    mdp_msg.fadeTo(0,0.0);
  });

  </script>

  <p> <?=\$role?> : </p>
  <p>
    <?=\$teacher?> <input type=\"radio\" name=\"role\" value=\"1\" required>
    <?=\$student?> <input type=\"radio\" name=\"role\" value=\"0\">
  <p>
  <input type=\"submit\" value=\"<?=\$valider?>\">
  </p>
  <?php if (\$debug) echo '[/form class=\"login\"]'; ?>
</form>

<?php if (\$debug) '[/div class=\"box\"]'; ?>
</div>
<?php \$content = ob_get_clean() ?>
<?php include_once 'layout.php' ?>
", "inscription.php", "/home/joel/Bureau/l3-projet-web-c927aba01fb79c78b3ec4323d18a3fd7213a7b7d/templates/inscription.php");
    }
}
