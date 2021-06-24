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

/* layout.php */
class __TwigTemplate_f0e6cb390906faef3d60e99dbd85260994e5c95d30f3a578efb477c4c14d46ce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.php"));

        // line 1
        echo "<?php include_once 'macros.php'; ?>

<!doctype html>
<html lang=\"fr\">
  <head>
    <title><?=\$website_title?></title>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" />
    <meta name=\"author\" content=\"Jie Tu & Joël Hamilcaro\" />
    <meta name=\"description\" content=\"Site d'exercices en ligne\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes\" />
    <link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"style.css\" />
    <script type=\"text/javascript\" src=\"jquery.js\"></script>

  </head>

<body>

  <header>
    <?php if (\$debug) echo '[header]'; ?>
    <h4><?=\$website_title?></h4>
    <nav id=\"nav\">
      <?php if (\$debug) echo '[nav]'; ?>
      <?php
        if(isset(\$_SESSION['username'])){
          print(\"<p><a href='/profile'>\".\$_SESSION['username'].\"</a></p>\");
          print(\"<p><a href='/deconnexion'>\".\$deconnexion_title.\"</a></p>\");
        } else {
          print (\"<p><a href='/connexion'>\".\$connexion_title.\"</a></p><p><a href='/inscription'>\".\$inscription_title.\"</a></p>\");
        }
      ?>
      <p><a href='/accueil'><?=\$home_title?></a></p>
      <?php if (\$debug) echo '[/nav]'; ?>
    </nav>
    <?php if (\$debug) echo '[/header]'; ?>
  </header>

  <div id=\"content\">
    <?php if (\$debug) echo '[div id=\"content\"]'; ?>
    <?= \$content ?>
    <?php if (\$debug) echo '[/div id=\"content\"]'; ?>
  </div>

  <footer>
    <?php if (\$debug) echo '[footer]'; ?>
    <hr>
    <p class=\"center\">Site d'exercices en ligne : Problèmes de Parson</p>
    <p class=\"center\">Jie Tu & Joël Hamilcaro - PW6 Groupe B</p>
    <p class=\"contact\"> Contacts : jie.tu@etu.univ-paris-diderot.fr & joel.hamilcaro@etu.univ-paris-diderot.fr</p>
    <?php if (\$debug) echo '[/footer]'; ?>
  </footer>
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php include_once 'macros.php'; ?>

<!doctype html>
<html lang=\"fr\">
  <head>
    <title><?=\$website_title?></title>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" />
    <meta name=\"author\" content=\"Jie Tu & Joël Hamilcaro\" />
    <meta name=\"description\" content=\"Site d'exercices en ligne\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes\" />
    <link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"style.css\" />
    <script type=\"text/javascript\" src=\"jquery.js\"></script>

  </head>

<body>

  <header>
    <?php if (\$debug) echo '[header]'; ?>
    <h4><?=\$website_title?></h4>
    <nav id=\"nav\">
      <?php if (\$debug) echo '[nav]'; ?>
      <?php
        if(isset(\$_SESSION['username'])){
          print(\"<p><a href='/profile'>\".\$_SESSION['username'].\"</a></p>\");
          print(\"<p><a href='/deconnexion'>\".\$deconnexion_title.\"</a></p>\");
        } else {
          print (\"<p><a href='/connexion'>\".\$connexion_title.\"</a></p><p><a href='/inscription'>\".\$inscription_title.\"</a></p>\");
        }
      ?>
      <p><a href='/accueil'><?=\$home_title?></a></p>
      <?php if (\$debug) echo '[/nav]'; ?>
    </nav>
    <?php if (\$debug) echo '[/header]'; ?>
  </header>

  <div id=\"content\">
    <?php if (\$debug) echo '[div id=\"content\"]'; ?>
    <?= \$content ?>
    <?php if (\$debug) echo '[/div id=\"content\"]'; ?>
  </div>

  <footer>
    <?php if (\$debug) echo '[footer]'; ?>
    <hr>
    <p class=\"center\">Site d'exercices en ligne : Problèmes de Parson</p>
    <p class=\"center\">Jie Tu & Joël Hamilcaro - PW6 Groupe B</p>
    <p class=\"contact\"> Contacts : jie.tu@etu.univ-paris-diderot.fr & joel.hamilcaro@etu.univ-paris-diderot.fr</p>
    <?php if (\$debug) echo '[/footer]'; ?>
  </footer>
  </body>
</html>
", "layout.php", "/home/joel/Bureau/l3-projet-web-c927aba01fb79c78b3ec4323d18a3fd7213a7b7d/templates/layout.php");
    }
}
