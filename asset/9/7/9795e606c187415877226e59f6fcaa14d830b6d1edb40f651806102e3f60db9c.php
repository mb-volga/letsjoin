<?php

/* layouts/nav.twig */
class __TwigTemplate_9795e606c187415877226e59f6fcaa14d830b6d1edb40f651806102e3f60db9c extends Twig_Template
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
        // line 3
        echo "<nav id=\"nav\">
    <ul id=\"menu\">
        <li>";
        // line 5
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Главная", 1 => "site/index"), "method");
        echo "</li>
        <li>    ";
        // line 6
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Профиль", 1 => "user/profile"), "method");
        echo "
            <ul>
                <li>";
        // line 8
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Редактировать", 1 => "user/"), "method");
        echo "</li>
                <li><a href=\"#\">Мои события</a></li>
                <li>";
        // line 10
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Мои друзья", 1 => "user/"), "method");
        echo "</li>
            </ul>
        </li>
        <li><a href=\"#\">Новости</a></li>
        <li><a href=\"#\">События</a>
            <ul>
                <li><a href=\"#\">Ближайшие</a></li>
                <li><a href=\"#\">Прошедшие</a></li>
            </ul>
        </li>
        ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["CApp"]) ? $context["CApp"] : null), "app", array(), "method"), "isGuest", array())) {
            // line 21
            echo "            <li>";
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Войти", 1 => "site/login"), "method");
            echo "</li>
            <li>";
            // line 22
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Регистрация", 1 => "site/registration"), "method");
            echo "</li>
        ";
        } else {
            // line 24
            echo "            <li>";
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Админ", 1 => "admin/index"), "method");
            echo "</li>
            <li>";
            // line 25
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Выйти", 1 => "user/logout"), "method");
            echo "</li>
        ";
        }
        // line 27
        echo "    </ul><!-- menu -->
</nav><!-- nav -->
            ";
    }

    public function getTemplateName()
    {
        return "layouts/nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  67 => 25,  62 => 24,  57 => 22,  52 => 21,  50 => 20,  37 => 10,  32 => 8,  27 => 6,  23 => 5,  19 => 3,);
    }
}
