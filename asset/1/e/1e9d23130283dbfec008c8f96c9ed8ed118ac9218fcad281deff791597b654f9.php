<?php

/* user/profile.twig */
class __TwigTemplate_1e9d23130283dbfec008c8f96c9ed8ed118ac9218fcad281deff791597b654f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layouts/content.twig", "user/profile.twig", 2);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/content.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_headTitle($context, array $blocks = array())
    {
        // line 5
        echo "    Профиль
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["CApp"]) ? $context["CApp"] : null), "app", array(), "method"), "isGuest", array())) {
            // line 10
            echo "<p>Войдите</p>
";
        } else {
            // line 12
            echo "
<table border=\"1\" cellspacing=\"4\" cellpadding=\"4\">
    <tr>
        <th>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAttributeLabel", array(0 => "nickname"), "method"), "html", null, true);
            echo "</th>
        <th>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAttributeLabel", array(0 => "email"), "method"), "html", null, true);
            echo "</th>
        <th>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAttributeLabel", array(0 => "phone"), "method"), "html", null, true);
            echo "</th>
    </tr>
    <tr>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
            echo "</td>
    </tr>
</table>
";
        }
    }

    public function getTemplateName()
    {
        return "user/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  69 => 21,  65 => 20,  59 => 17,  55 => 16,  51 => 15,  46 => 12,  42 => 10,  40 => 9,  37 => 8,  32 => 5,  29 => 4,  11 => 2,);
    }
}
