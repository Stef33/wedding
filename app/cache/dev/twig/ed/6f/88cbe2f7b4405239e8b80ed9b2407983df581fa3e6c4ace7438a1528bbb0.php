<?php

/* WeddingProjectBundle:Default:index.html.twig */
class __TwigTemplate_ed6f88cbe2f7b4405239e8b80ed9b2407983df581fa3e6c4ace7438a1528bbb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WeddingProjectBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'image' => array($this, 'block_image'),
            'text' => array($this, 'block_text'),
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
        echo "    ";
        $this->displayBlock('image', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('text', $context, $blocks);
        // line 19
        echo "
";
    }

    // line 4
    public function block_image($context, array $blocks = array())
    {
        // line 5
        echo "        <div id=image>
            <ul>
                <li>
                    <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("wedding_project_announcement");
        echo "\" id=\"alliances\">alliances</a>
                </li>
            </ul>
        </div>
    ";
    }

    // line 14
    public function block_text($context, array $blocks = array())
    {
        // line 15
        echo "        <div id=\"presentation\">
            <p>Un jour spécial dans votre vie</p>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "WeddingProjectBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  63 => 14,  54 => 8,  49 => 5,  46 => 4,  41 => 19,  39 => 14,  36 => 13,  33 => 4,  30 => 3,);
    }
}
