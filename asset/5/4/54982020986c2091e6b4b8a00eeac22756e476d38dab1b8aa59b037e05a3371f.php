<?php

/* admin/layouts/main.twig */
class __TwigTemplate_54982020986c2091e6b4b8a00eeac22756e476d38dab1b8aa59b037e05a3371f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'headTitle' => array($this, 'block_headTitle'),
            'headMeta' => array($this, 'block_headMeta'),
            'headLink' => array($this, 'block_headLink'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "</head>
    <body>
        <div id=\"page\">
            <header id=\"header\">
                ";
        // line 21
        $this->loadTemplate("admin/layouts/header.twig", "admin/layouts/main.twig", 21)->display($context);
        // line 22
        echo "</header>
            <section id=\"content\">
                <div id=\"main-content\">";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "</div><!-- end main-content -->
            </section><!-- end content -->
            <footer id=\"footer\">
                ";
        // line 31
        $this->loadTemplate("admin/layouts/footer.twig", "admin/layouts/main.twig", 31)->display($context);
        // line 32
        echo "            </footer><!-- footer -->
        </div><!-- page -->
    </body>
</html>";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "<title>";
        $this->displayBlock('headTitle', $context, $blocks);
        echo "| Let&rsquo;s Join</title>
        ";
        // line 7
        $this->displayBlock('headMeta', $context, $blocks);
        // line 8
        $this->displayBlock('headLink', $context, $blocks);
        // line 9
        echo "        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["CApp"]) ? $context["CApp"] : null), "app", array(), "method"), "dirApp", array());
        echo "/css/admin-styles.css\">
";
        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["CApp"]) ? $context["CApp"] : null), "app", array(), "method"), "dirApp", array());
        echo "/css/corrects.css\">
        <!--[if lt IE 9]> 
        <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script> 
        <![endif]-->
    ";
    }

    // line 6
    public function block_headTitle($context, array $blocks = array())
    {
    }

    // line 7
    public function block_headMeta($context, array $blocks = array())
    {
    }

    // line 8
    public function block_headLink($context, array $blocks = array())
    {
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin/layouts/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  98 => 8,  93 => 7,  88 => 6,  78 => 12,  74 => 10,  71 => 9,  69 => 8,  67 => 7,  62 => 6,  59 => 5,  52 => 32,  50 => 31,  45 => 28,  43 => 25,  39 => 22,  37 => 21,  31 => 17,  29 => 5,  24 => 2,);
    }
}
