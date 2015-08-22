<?php

/* site/login.twig */
class __TwigTemplate_03a3a8ed3d049c18f9e857108ec7b3765dcdfb65f4a12437e0a4c474267e1123 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("/layouts/content.twig", "site/login.twig", 2);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/layouts/content.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        if ( !$this->getAttribute($this->getAttribute((isset($context["CApp"]) ? $context["CApp"] : null), "app", array(), "method"), "isGuest", array())) {
        }
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        // line 4
        echo "Авторизация";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <form method=\"POST\">
        ";
        // line 11
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "getAttributeLabel", array(0 => "login"), "method");
        echo ": ";
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "inputText", array(0 => array("name" => "login[username]")), "method");
        echo "
        ";
        // line 12
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "getAttributeLabel", array(0 => "paswword"), "method");
        echo ": ";
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "inputPassword", array(0 => array("name" => "login[password]")), "method");
        echo "
        ";
        // line 13
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "inputSubmit", array(0 => "Войти"), "method");
        echo "
        ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["CApp"]) ? $context["CApp"] : null), "app", array(), "method"), "hasFlash", array(0 => "login"), "method")) {
            // line 15
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["CApp"]) ? $context["CApp"] : null), "app", array(), "method"), "getFlash", array(0 => "login"), "method"), "html", null, true);
            echo "
        ";
        }
        // line 17
        echo "    </form>
";
    }

    public function getTemplateName()
    {
        return "site/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  64 => 15,  62 => 14,  58 => 13,  52 => 12,  46 => 11,  43 => 10,  40 => 9,  36 => 4,  33 => 3,  29 => 2,  26 => 7,  11 => 2,);
    }
}
