<?php

/* ::base.html.twig */
class __TwigTemplate_6a7ca6537a5bc705738cb54e4b6b4200c68be7187a03d9fd3b7324d994fba11d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 13
        echo "</head>
<body>
<div id=\"menu\">
    <ul>
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("wedding_project_homepage");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("wedding_project_announcement");
        echo "\">Faire-part</a></li>
        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("wedding_project_map");
        echo "\">Plan</a></li>
        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("wedding_project_contact");
        echo "\">Contact</a></li>
    </ul>
</div>
";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Votre Mariage";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingproject/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 10
    public function block_javascript($context, array $blocks = array())
    {
        // line 11
        echo "
    ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"container\">
        ";
        // line 25
        echo twig_include($this->env, $context, "WeddingProjectBundle:views:layout.html.twig");
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 25,  98 => 24,  95 => 23,  90 => 11,  87 => 10,  80 => 8,  77 => 7,  71 => 5,  65 => 28,  63 => 23,  57 => 20,  53 => 19,  49 => 18,  39 => 13,  36 => 10,  34 => 7,  23 => 1,  31 => 4,  28 => 3,  45 => 17,  42 => 5,  37 => 8,  35 => 5,  32 => 4,  29 => 5,);
    }
}
