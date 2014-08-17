<?php

/* WeddingProjectBundle:Default:message.html.twig */
class __TwigTemplate_669406dcecdbe9c0246e8e13bd6723988e57184165a56dd1129b89efac6e5b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE>
<html>
    <head>
        <title>Formulaire mariage</title>
    </head>
    <body>
        <p>De : ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</p>
        <p>Bonjour ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["Nom"]) ? $context["Nom"] : $this->getContext($context, "Nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["Prenom"]) ? $context["Prenom"] : $this->getContext($context, "Prenom")), "html", null, true);
        echo " sera présent: ";
        echo twig_escape_filter($this->env, (isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), "html", null, true);
        echo " le 14/06/2014.</p>
        <p>Il y aura ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nbAdult"]) ? $context["nbAdult"] : $this->getContext($context, "nbAdult")), "html", null, true);
        echo " adultes et ";
        echo twig_escape_filter($this->env, (isset($context["nbChildren"]) ? $context["nbChildren"] : $this->getContext($context, "nbChildren")), "html", null, true);
        echo " enfants.</p>
        <p>Les adultes sont ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["nameAdult"]) ? $context["nameAdult"] : $this->getContext($context, "nameAdult")), "html", null, true);
        echo " et les enfants sont ";
        echo twig_escape_filter($this->env, (isset($context["nameChildren"]) ? $context["nameChildren"] : $this->getContext($context, "nameChildren")), "html", null, true);
        echo ".</p>
        <p>Message : ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo ".</p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "WeddingProjectBundle:Default:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  45 => 10,  39 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
