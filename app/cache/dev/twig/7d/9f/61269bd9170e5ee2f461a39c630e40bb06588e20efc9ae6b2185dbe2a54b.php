<?php

/* WeddingProjectBundle:Default:contact.html.twig */
class __TwigTemplate_7d9f61269bd9170e5ee2f461a39c630e40bb06588e20efc9ae6b2185dbe2a54b extends Twig_Template
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
        // line 69
        echo "
";
    }

    // line 5
    public function block_contact_body($context, array $blocks = array())
    {
        // line 6
        echo "            <form id=\"contact\" method=\"get\" action=\"sendMail\">
                <div id=\"formulaire\">
                    <table>
                        <tr>
                            <td>
                                <label for=\"lastName\">Nom :</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name=\"lastName\" id=\"lastName\" placeholder=\"Nom\" required=\"required\"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for=\"firstName\">Prénom :</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name=\"firstName\" id=\"firstName\" placeholder=\"Prénom\" required=\"required\"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for=\"email\">e-mail :</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Ex: exemple@mariage.fr\" required=\"required\"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for=\"weddingDate\">Date du mariage :</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name=\"weddingDate\" id=\"weddingDate\" placeholder=\"Date du mariage\" required=\"required\"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for=\"message\">Message :</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea id=\"message\" name=\"message\" placeholder=\"Message\" rows=\"5\" cols=\"21\"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input id=\"spam\" name=\"spam\" hidden=\"hidden\"/>
                            </td>
                        </tr>
                    </table>
                </div>
                <input type=\"submit\" value=\"valider\"/>
            </form>
        ";
    }

    public function getTemplateName()
    {
        return "WeddingProjectBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  42 => 5,  37 => 69,  35 => 5,  32 => 4,  29 => 3,);
    }
}
