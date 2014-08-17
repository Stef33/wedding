<?php

/* WeddingProjectBundle:Default:success.html.twig */
class __TwigTemplate_bbe6d898aa982f6e63e14a0423f596eddaf948c1788b8a698569ad4331322702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WeddingProjectBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'contact_body' => array($this, 'block_contact_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WeddingProjectBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('contact_body', $context, $blocks);
        // line 8
        echo "
";
    }

    // line 5
    public function block_contact_body($context, array $blocks = array())
    {
        // line 6
        echo "        <p id=\"success\">Votre message a bien été envoyé !</p>
    ";
    }

    public function getTemplateName()
    {
        return "WeddingProjectBundle:Default:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  42 => 5,  37 => 8,  35 => 5,  32 => 4,  29 => 3,);
    }
}
