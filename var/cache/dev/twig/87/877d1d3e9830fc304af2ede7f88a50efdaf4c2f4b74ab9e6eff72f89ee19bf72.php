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

/* proposerSolution.php */
class __TwigTemplate_576c8c19486fde06093a6caa562c72208b53fe5b41a6abf1a06906c6020e8df3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposerSolution.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposerSolution.php"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Proposer la solution pour creer l'exercice</title>
\t<meta charset=\"utf-8\" />
\t<link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"style.css\" />
\t<style type=\"text/css\">
\tbody {  padding:20px; width:820px; margin:20px auto; border:solid 1px black; }
\th1 { font-size:16pt; }
\th2 { font-size:13pt; }
\tul { margin:0px; padding:0px; margin-left:20px; }
\t#list1, #list2{ float:left; width:80%; height:auto; margin:10px;padding:20px;border:1px solid #aaaaaa; }
\t.area { float:left; width:40%; height:auto;padding:20px; }
\t#list1 li, #list2 li {list-style-type: none;float:left; padding:5px; width:200px; height:20px;}
\t#list1  div, #list2  div { width:180px; height:auto; border:solid 1px black; background-color:#E0E0E0; text-align:center; padding-top:0px; }
\t#list2 { float:right; }
\t</style>

</head>
<body>
  <h1>Proposer la solution pour creer l'exercice</h1>
\t<h2>enonce :<?= \$enonce ?></h2>
  <h2>id cours :<?= \$id_cours ?></h2>
<div class=\"area\">Indice <br>
\t<ul id=\"list1\" class=\"draglist\" data-groupid=\"gid-1\">
\t\t<?php
\t\t\$indice =\$indice;
\t\t\$tab =explode(\"\\n\",\$indice);
\t\t\$len =count (\$tab);
\t\tfor (\$i=0;\$i<\$len;\$i++){
\t\t\tprint('<li data-id='.\$i.' data-groupid=\"gid-1\"><input type =\"hidden\"  name= t['.\$i.'] value='.\$tab[\$i].'><div>'.\$tab[\$i].'</div></li>');
\t\t}
\t\t ?>
\t</ul>
\t\t</div>

\t\t<div class=\"area\">Propsez votre solution ici <br>
\t\t\t<form class=\"\" action=\"/saveSolution\" method=\"POST\">
\t\t\t<ul id=\"list2\" class=\"draglist\"  data-groupid=\"gid-2\">
\t\t\t</ul>
      <input type=\"hidden\" name=\"enonce\" value=\"<?= \$enonce ?>\" >
      <input type=\"hidden\" name=\"indice\" value=\"<?= \$indice ?>\" >
      <input type=\"hidden\" name=\"id_cours\" value=\"<?= \$id_cours ?>\" >
\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t</form>
\t\t</div>


\t<script src=\"Sortable.min.js\"></script>
\t<script>

\tnew Sortable(document.getElementById('list1'), {
\tgroup: {
\t name:\"words\",
\t pull: true,
\t put: true
\t },
\tanimation: 150,
\tonAdd: function (evt){
\t console.log('onAdd.list1:', [evt.item, evt.from]);
\t},
\tonUpdate: function (evt){
\t console.log('onUpdate.list1:', [evt.item, evt.from]);
\t},
\tonRemove: function (evt){
\t console.log('onRemove.list1:', [evt.item, evt.from]);
\t},
\tonStart:function(evt){
\t console.log('onStart.list1:', [evt.item, evt.from]);
\t document.getElementById(\"list1\").style.backgroundColor=\"rgb(236,219,201)\";
\t document.getElementById(\"list2\").style.backgroundColor=\"rgb(252,243,180)\";
\t document.getElementById(\"list2\").style.border=\"1px dashed #aaaaaa\";
\t document.getElementById(\"list1\").style.border=\"1px dashed #aaaaaa\";
\t},
\tonSort:function(evt){
\t console.log('onSort.list1:', [evt.item, evt.from]);
\t},
\tonEnd: function(evt){
\t console.log('onEnd.list1:', [evt.item, evt.from]);
\t document.getElementById(\"list2\").style.backgroundColor=\"#FFFFFF\";
\t document.getElementById(\"list1\").style.backgroundColor=\"#FFFFFF\";
\t document.getElementById(\"list1\").style.border=\"1px solid #aaaaaa\";
\t document.getElementById(\"list2\").style.border=\"1px solid #aaaaaa\";
\t}
\t});


\tnew Sortable(document.getElementById('list2'), {
\t group: {
\t name:\"words\",
\t pull: true,
\t put: true
\t },
\tanimation: 150,
\tonAdd: function (evt){
\t console.log('onAdd.list2:', [evt.item, evt.from]);
\t},
\tonUpdate: function (evt){
\t console.log('onUpdate.list2:', [evt.item, evt.from]);
\t},
\tonRemove: function (evt){
\t console.log('onRemove.list2:', [evt.item, evt.from]);
\t},
\tonStart:function(evt){
\t console.log('onStart.list1:', [evt.item, evt.from]);
\t document.getElementById(\"list2\").style.backgroundColor=\"rgb(236,219,201)\";
\t document.getElementById(\"list1\").style.backgroundColor=\"rgb(252,243,180)\";
\t document.getElementById(\"list1\").style.border=\"1px dashed #aaaaaa\";
\t document.getElementById(\"list2\").style.border=\"1px dashed #aaaaaa\";
\t},
\tonSort:function(evt){
\t console.log('onSort.list1:', [evt.item, evt.from]);
\t},
\tonEnd: function(evt){
\t console.log('onEnd.list1:', [evt.item, evt.from]);
\t document.getElementById(\"list1\").style.backgroundColor=\"#FFFFFF\";
\t document.getElementById(\"list1\").style.backgroundColor=\"#FFFFFF\";
\t document.getElementById(\"list2\").style.border=\"1px solid #aaaaaa\";
\t document.getElementById(\"list1\").style.border=\"1px solid #aaaaaa\";
\t}
\t});
\t</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "proposerSolution.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<title>Proposer la solution pour creer l'exercice</title>
\t<meta charset=\"utf-8\" />
\t<link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"style.css\" />
\t<style type=\"text/css\">
\tbody {  padding:20px; width:820px; margin:20px auto; border:solid 1px black; }
\th1 { font-size:16pt; }
\th2 { font-size:13pt; }
\tul { margin:0px; padding:0px; margin-left:20px; }
\t#list1, #list2{ float:left; width:80%; height:auto; margin:10px;padding:20px;border:1px solid #aaaaaa; }
\t.area { float:left; width:40%; height:auto;padding:20px; }
\t#list1 li, #list2 li {list-style-type: none;float:left; padding:5px; width:200px; height:20px;}
\t#list1  div, #list2  div { width:180px; height:auto; border:solid 1px black; background-color:#E0E0E0; text-align:center; padding-top:0px; }
\t#list2 { float:right; }
\t</style>

</head>
<body>
  <h1>Proposer la solution pour creer l'exercice</h1>
\t<h2>enonce :<?= \$enonce ?></h2>
  <h2>id cours :<?= \$id_cours ?></h2>
<div class=\"area\">Indice <br>
\t<ul id=\"list1\" class=\"draglist\" data-groupid=\"gid-1\">
\t\t<?php
\t\t\$indice =\$indice;
\t\t\$tab =explode(\"\\n\",\$indice);
\t\t\$len =count (\$tab);
\t\tfor (\$i=0;\$i<\$len;\$i++){
\t\t\tprint('<li data-id='.\$i.' data-groupid=\"gid-1\"><input type =\"hidden\"  name= t['.\$i.'] value='.\$tab[\$i].'><div>'.\$tab[\$i].'</div></li>');
\t\t}
\t\t ?>
\t</ul>
\t\t</div>

\t\t<div class=\"area\">Propsez votre solution ici <br>
\t\t\t<form class=\"\" action=\"/saveSolution\" method=\"POST\">
\t\t\t<ul id=\"list2\" class=\"draglist\"  data-groupid=\"gid-2\">
\t\t\t</ul>
      <input type=\"hidden\" name=\"enonce\" value=\"<?= \$enonce ?>\" >
      <input type=\"hidden\" name=\"indice\" value=\"<?= \$indice ?>\" >
      <input type=\"hidden\" name=\"id_cours\" value=\"<?= \$id_cours ?>\" >
\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t</form>
\t\t</div>


\t<script src=\"Sortable.min.js\"></script>
\t<script>

\tnew Sortable(document.getElementById('list1'), {
\tgroup: {
\t name:\"words\",
\t pull: true,
\t put: true
\t },
\tanimation: 150,
\tonAdd: function (evt){
\t console.log('onAdd.list1:', [evt.item, evt.from]);
\t},
\tonUpdate: function (evt){
\t console.log('onUpdate.list1:', [evt.item, evt.from]);
\t},
\tonRemove: function (evt){
\t console.log('onRemove.list1:', [evt.item, evt.from]);
\t},
\tonStart:function(evt){
\t console.log('onStart.list1:', [evt.item, evt.from]);
\t document.getElementById(\"list1\").style.backgroundColor=\"rgb(236,219,201)\";
\t document.getElementById(\"list2\").style.backgroundColor=\"rgb(252,243,180)\";
\t document.getElementById(\"list2\").style.border=\"1px dashed #aaaaaa\";
\t document.getElementById(\"list1\").style.border=\"1px dashed #aaaaaa\";
\t},
\tonSort:function(evt){
\t console.log('onSort.list1:', [evt.item, evt.from]);
\t},
\tonEnd: function(evt){
\t console.log('onEnd.list1:', [evt.item, evt.from]);
\t document.getElementById(\"list2\").style.backgroundColor=\"#FFFFFF\";
\t document.getElementById(\"list1\").style.backgroundColor=\"#FFFFFF\";
\t document.getElementById(\"list1\").style.border=\"1px solid #aaaaaa\";
\t document.getElementById(\"list2\").style.border=\"1px solid #aaaaaa\";
\t}
\t});


\tnew Sortable(document.getElementById('list2'), {
\t group: {
\t name:\"words\",
\t pull: true,
\t put: true
\t },
\tanimation: 150,
\tonAdd: function (evt){
\t console.log('onAdd.list2:', [evt.item, evt.from]);
\t},
\tonUpdate: function (evt){
\t console.log('onUpdate.list2:', [evt.item, evt.from]);
\t},
\tonRemove: function (evt){
\t console.log('onRemove.list2:', [evt.item, evt.from]);
\t},
\tonStart:function(evt){
\t console.log('onStart.list1:', [evt.item, evt.from]);
\t document.getElementById(\"list2\").style.backgroundColor=\"rgb(236,219,201)\";
\t document.getElementById(\"list1\").style.backgroundColor=\"rgb(252,243,180)\";
\t document.getElementById(\"list1\").style.border=\"1px dashed #aaaaaa\";
\t document.getElementById(\"list2\").style.border=\"1px dashed #aaaaaa\";
\t},
\tonSort:function(evt){
\t console.log('onSort.list1:', [evt.item, evt.from]);
\t},
\tonEnd: function(evt){
\t console.log('onEnd.list1:', [evt.item, evt.from]);
\t document.getElementById(\"list1\").style.backgroundColor=\"#FFFFFF\";
\t document.getElementById(\"list1\").style.backgroundColor=\"#FFFFFF\";
\t document.getElementById(\"list2\").style.border=\"1px solid #aaaaaa\";
\t document.getElementById(\"list1\").style.border=\"1px solid #aaaaaa\";
\t}
\t});
\t</script>
</body>
</html>
", "proposerSolution.php", "/home/joel/Bureau/AAAncien/templates/proposerSolution.php");
    }
}
