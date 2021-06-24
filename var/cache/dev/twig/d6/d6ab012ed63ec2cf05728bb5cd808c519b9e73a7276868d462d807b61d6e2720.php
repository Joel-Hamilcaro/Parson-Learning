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

/* ds.php */
class __TwigTemplate_4d804265a9f5f02cde879766c1dc8706b12fc78a08aacb6c093a6b7c0ce34a43 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ds.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ds.php"));

        // line 1
        echo "﻿<!DOCTYPE html>
<html>
<head>
\t<title>Exercice</title>
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
\t<h1>enonce :<?= \$post['enonce'] ?></h1>
\t<div class=\"id_exo\">id exo :<?= \$post['id_exo'] ?></div>
\t<div class=\"id_cours\">id cours :<?= \$post['id_cours'] ?></div>

\t<?php
\t\tif (isset(\$_SESSION['username']) && isset(\$_SESSION['role'])  &&  \$_SESSION['role']==1 ){
\t\t\tprint(\"<div class='reponse'> reponse :\".\$post['reponse'].\"</div>\");
\t\t\tforeach (\$etudiants as \$etudiant) {
\t\t\t\tif (\$etudiant['status']==1){
\t\t\t\t\tprint(\"<li>
\t\t\t\t\t\t\t<a href='/detailUser?id=\".\$etudiant['id_user'].\"'>
\t\t\t\t\t\t\t\t\t\".\$etudiant['username'].\"
\t\t\t\t\t\t\t</a> a reussi
\t\t\t\t\t</li>\");
\t\t\t\t}else{
\t\t\t\t\tprint(\"<li>
\t\t\t\t\t\t\t<a href='/detailUser?id=\".\$etudiant['id_user'].\"'>
\t\t\t\t\t\t\t\t\t\".\$etudiant['username'].\"
\t\t\t\t\t\t\t</a>
\t\t\t\t\t</li>\");
\t\t\t\t}
\t\t\t}
\t\t}
\t ?>

<h2>Deposer gauche a droit</h2>
<div class=\"area\">Indice <br>
\t<ul id=\"list1\" class=\"draglist\" data-groupid=\"gid-1\">
\t\t<?php
\t\t\$indice =\$post['indice'];
\t\t\$tab =explode(\"\\n\",\$indice);
\t\t\$len =count (\$tab);
\t\tfor (\$i=0;\$i<\$len;\$i++){
\t\t\tprint('<li data-id='.\$i.' data-groupid=\"gid-1\"><input type =\"hidden\"  name= t['.\$i.'] value='.\$tab[\$i].'><div>'.\$tab[\$i].'</div></li>');
\t\t}
\t\t ?>
\t</ul>
</div>

\t\t<div class=\"area\">Propsez votre solution ici <br>
\t\t\t<form class=\"\" action=\"/getExo\" method=\"POST\">
\t\t\t<ul id=\"list2\" class=\"draglist\"  data-groupid=\"gid-2\">
\t\t\t</ul>
\t\t\t<input type=\"hidden\" name=\"id_exo\" value=\"<?= \$post['id_exo'] ?>\" >
\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t</form>
\t\t</div>

<script src=\"Sortable.min.js\"></script>
<script>

new Sortable(document.getElementById('list1'), {
group: {
 name:\"words\",
 pull: true,
 put: true
 },
animation: 150,
onAdd: function (evt){
 console.log('onAdd.list1:', [evt.item, evt.from]);
},
onUpdate: function (evt){
 console.log('onUpdate.list1:', [evt.item, evt.from]);
},
onRemove: function (evt){
 console.log('onRemove.list1:', [evt.item, evt.from]);
},
onStart:function(evt){
 console.log('onStart.list1:', [evt.item, evt.from]);
 document.getElementById(\"list1\").style.backgroundColor=\"rgb(236,219,201)\";
 document.getElementById(\"list2\").style.backgroundColor=\"rgb(252,243,180)\";
 document.getElementById(\"list2\").style.border=\"1px dashed #aaaaaa\";
 document.getElementById(\"list1\").style.border=\"1px dashed #aaaaaa\";
},
onSort:function(evt){
 console.log('onSort.list1:', [evt.item, evt.from]);
},
onEnd: function(evt){
 console.log('onEnd.list1:', [evt.item, evt.from]);
 document.getElementById(\"list2\").style.backgroundColor=\"#FFFFFF\";
 document.getElementById(\"list1\").style.backgroundColor=\"#FFFFFF\";
 document.getElementById(\"list1\").style.border=\"1px solid #aaaaaa\";
 document.getElementById(\"list2\").style.border=\"1px solid #aaaaaa\";
}
});


new Sortable(document.getElementById('list2'), {
 group: {
 name:\"words\",
 pull: true,
 put: true
 },
animation: 150,
onAdd: function (evt){
 console.log('onAdd.list2:', [evt.item, evt.from]);
},
onUpdate: function (evt){
 console.log('onUpdate.list2:', [evt.item, evt.from]);
},
onRemove: function (evt){
 console.log('onRemove.list2:', [evt.item, evt.from]);
},
onStart:function(evt){
 console.log('onStart.list1:', [evt.item, evt.from]);
 document.getElementById(\"list2\").style.backgroundColor=\"rgb(236,219,201)\";
 document.getElementById(\"list1\").style.backgroundColor=\"rgb(252,243,180)\";
 document.getElementById(\"list1\").style.border=\"1px dashed #aaaaaa\";
 document.getElementById(\"list2\").style.border=\"1px dashed #aaaaaa\";
},
onSort:function(evt){
 console.log('onSort.list1:', [evt.item, evt.from]);
},
onEnd: function(evt){
 console.log('onEnd.list1:', [evt.item, evt.from]);
 document.getElementById(\"list1\").style.backgroundColor=\"#FFFFFF\";
 document.getElementById(\"list1\").style.backgroundColor=\"#FFFFFF\";
 document.getElementById(\"list2\").style.border=\"1px solid #aaaaaa\";
 document.getElementById(\"list1\").style.border=\"1px solid #aaaaaa\";
}
});
</script>
</body>
<footer> <p><a href='/'>Accueil</a></p></footer>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ds.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿<!DOCTYPE html>
<html>
<head>
\t<title>Exercice</title>
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
\t<h1>enonce :<?= \$post['enonce'] ?></h1>
\t<div class=\"id_exo\">id exo :<?= \$post['id_exo'] ?></div>
\t<div class=\"id_cours\">id cours :<?= \$post['id_cours'] ?></div>

\t<?php
\t\tif (isset(\$_SESSION['username']) && isset(\$_SESSION['role'])  &&  \$_SESSION['role']==1 ){
\t\t\tprint(\"<div class='reponse'> reponse :\".\$post['reponse'].\"</div>\");
\t\t\tforeach (\$etudiants as \$etudiant) {
\t\t\t\tif (\$etudiant['status']==1){
\t\t\t\t\tprint(\"<li>
\t\t\t\t\t\t\t<a href='/detailUser?id=\".\$etudiant['id_user'].\"'>
\t\t\t\t\t\t\t\t\t\".\$etudiant['username'].\"
\t\t\t\t\t\t\t</a> a reussi
\t\t\t\t\t</li>\");
\t\t\t\t}else{
\t\t\t\t\tprint(\"<li>
\t\t\t\t\t\t\t<a href='/detailUser?id=\".\$etudiant['id_user'].\"'>
\t\t\t\t\t\t\t\t\t\".\$etudiant['username'].\"
\t\t\t\t\t\t\t</a>
\t\t\t\t\t</li>\");
\t\t\t\t}
\t\t\t}
\t\t}
\t ?>

<h2>Deposer gauche a droit</h2>
<div class=\"area\">Indice <br>
\t<ul id=\"list1\" class=\"draglist\" data-groupid=\"gid-1\">
\t\t<?php
\t\t\$indice =\$post['indice'];
\t\t\$tab =explode(\"\\n\",\$indice);
\t\t\$len =count (\$tab);
\t\tfor (\$i=0;\$i<\$len;\$i++){
\t\t\tprint('<li data-id='.\$i.' data-groupid=\"gid-1\"><input type =\"hidden\"  name= t['.\$i.'] value='.\$tab[\$i].'><div>'.\$tab[\$i].'</div></li>');
\t\t}
\t\t ?>
\t</ul>
</div>

\t\t<div class=\"area\">Propsez votre solution ici <br>
\t\t\t<form class=\"\" action=\"/getExo\" method=\"POST\">
\t\t\t<ul id=\"list2\" class=\"draglist\"  data-groupid=\"gid-2\">
\t\t\t</ul>
\t\t\t<input type=\"hidden\" name=\"id_exo\" value=\"<?= \$post['id_exo'] ?>\" >
\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t</form>
\t\t</div>

<script src=\"Sortable.min.js\"></script>
<script>

new Sortable(document.getElementById('list1'), {
group: {
 name:\"words\",
 pull: true,
 put: true
 },
animation: 150,
onAdd: function (evt){
 console.log('onAdd.list1:', [evt.item, evt.from]);
},
onUpdate: function (evt){
 console.log('onUpdate.list1:', [evt.item, evt.from]);
},
onRemove: function (evt){
 console.log('onRemove.list1:', [evt.item, evt.from]);
},
onStart:function(evt){
 console.log('onStart.list1:', [evt.item, evt.from]);
 document.getElementById(\"list1\").style.backgroundColor=\"rgb(236,219,201)\";
 document.getElementById(\"list2\").style.backgroundColor=\"rgb(252,243,180)\";
 document.getElementById(\"list2\").style.border=\"1px dashed #aaaaaa\";
 document.getElementById(\"list1\").style.border=\"1px dashed #aaaaaa\";
},
onSort:function(evt){
 console.log('onSort.list1:', [evt.item, evt.from]);
},
onEnd: function(evt){
 console.log('onEnd.list1:', [evt.item, evt.from]);
 document.getElementById(\"list2\").style.backgroundColor=\"#FFFFFF\";
 document.getElementById(\"list1\").style.backgroundColor=\"#FFFFFF\";
 document.getElementById(\"list1\").style.border=\"1px solid #aaaaaa\";
 document.getElementById(\"list2\").style.border=\"1px solid #aaaaaa\";
}
});


new Sortable(document.getElementById('list2'), {
 group: {
 name:\"words\",
 pull: true,
 put: true
 },
animation: 150,
onAdd: function (evt){
 console.log('onAdd.list2:', [evt.item, evt.from]);
},
onUpdate: function (evt){
 console.log('onUpdate.list2:', [evt.item, evt.from]);
},
onRemove: function (evt){
 console.log('onRemove.list2:', [evt.item, evt.from]);
},
onStart:function(evt){
 console.log('onStart.list1:', [evt.item, evt.from]);
 document.getElementById(\"list2\").style.backgroundColor=\"rgb(236,219,201)\";
 document.getElementById(\"list1\").style.backgroundColor=\"rgb(252,243,180)\";
 document.getElementById(\"list1\").style.border=\"1px dashed #aaaaaa\";
 document.getElementById(\"list2\").style.border=\"1px dashed #aaaaaa\";
},
onSort:function(evt){
 console.log('onSort.list1:', [evt.item, evt.from]);
},
onEnd: function(evt){
 console.log('onEnd.list1:', [evt.item, evt.from]);
 document.getElementById(\"list1\").style.backgroundColor=\"#FFFFFF\";
 document.getElementById(\"list1\").style.backgroundColor=\"#FFFFFF\";
 document.getElementById(\"list2\").style.border=\"1px solid #aaaaaa\";
 document.getElementById(\"list1\").style.border=\"1px solid #aaaaaa\";
}
});
</script>
</body>
<footer> <p><a href='/'>Accueil</a></p></footer>
</html>
", "ds.php", "/home/joel/Bureau/AAAncien/templates/ds.php");
    }
}
