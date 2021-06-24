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

/* macros.php */
class __TwigTemplate_7a6bc5693ca0c4f6952f4f3ceff285bb2078fd2ef9b2e0e9c43b87ae60c5fd39 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros.php"));

        // line 1
        echo "<?php
  // =================================================================== //
  \$debug = false; // Modifier pour afficher les balises html <...>
  // =================================================================== //
  \$website_title = 'Parson Learning';
  \$description = 'Bienvenue sur Parson Learning ! <br><br>Ici, vous pourrez apprendre les bases de la programmation en résolvant des problèmes de Parson.'.\"<br><br>\".'Inscrivez-vous, et apprenez !';
  \$home_title = 'Accueil';
  \$inscription_title = 'Inscription';
  \$connexion_title = 'Connexion';
  \$deconnexion_title = 'Déconnexion';
  \$inscription_title = 'Inscription';
  \$profile_title = 'Profil';
  \$username = 'Login';
  \$password = 'Mot de passe';
  \$teacher = 'Professeur';
  \$student = 'Élève';
  \$role = 'Type de profil';
  \$mdp_msg = 'Veuillez choisir un mot de passe d\\'au moins 6 caractères';
  \$valider = 'Valider';
  \$confirm = 'L\\'inscription a été validée !';
  \$msg_deja = '017839'; // Ce nom est deja pris.
  \$msg_confirm = '487949'; // l'inscription est confirmée
  \$msg_incorrect = '563247'; // le nom ou mot de passe est incorrect
  \$not_found = 'Cette page n\\'existe pas. Veuillez vérifier l\\'URL.';
  \$forbidden = 'Vous n\\'êtes pas autorisé à accéder à cette page.';
  \$creerCours = 'Créer un cours';
  \$lst_cours = 'Liste des cours';
  \$msg_cours_deja = '256281'; // Vous êtes déjà inscrit à ce cours

?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "macros.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
  // =================================================================== //
  \$debug = false; // Modifier pour afficher les balises html <...>
  // =================================================================== //
  \$website_title = 'Parson Learning';
  \$description = 'Bienvenue sur Parson Learning ! <br><br>Ici, vous pourrez apprendre les bases de la programmation en résolvant des problèmes de Parson.'.\"<br><br>\".'Inscrivez-vous, et apprenez !';
  \$home_title = 'Accueil';
  \$inscription_title = 'Inscription';
  \$connexion_title = 'Connexion';
  \$deconnexion_title = 'Déconnexion';
  \$inscription_title = 'Inscription';
  \$profile_title = 'Profil';
  \$username = 'Login';
  \$password = 'Mot de passe';
  \$teacher = 'Professeur';
  \$student = 'Élève';
  \$role = 'Type de profil';
  \$mdp_msg = 'Veuillez choisir un mot de passe d\\'au moins 6 caractères';
  \$valider = 'Valider';
  \$confirm = 'L\\'inscription a été validée !';
  \$msg_deja = '017839'; // Ce nom est deja pris.
  \$msg_confirm = '487949'; // l'inscription est confirmée
  \$msg_incorrect = '563247'; // le nom ou mot de passe est incorrect
  \$not_found = 'Cette page n\\'existe pas. Veuillez vérifier l\\'URL.';
  \$forbidden = 'Vous n\\'êtes pas autorisé à accéder à cette page.';
  \$creerCours = 'Créer un cours';
  \$lst_cours = 'Liste des cours';
  \$msg_cours_deja = '256281'; // Vous êtes déjà inscrit à ce cours

?>
", "macros.php", "/home/joel/Bureau/l3-projet-web-c927aba01fb79c78b3ec4323d18a3fd7213a7b7d/templates/macros.php");
    }
}
