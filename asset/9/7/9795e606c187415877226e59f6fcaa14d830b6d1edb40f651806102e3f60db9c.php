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
        ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["CApp"]) ? $context["CApp"] : null), "app", array(), "method"), "isGuest", array())) {
            // line 6
            echo "            <li>
                ";
            // line 7
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Аккаунт", 1 => "#"), "method");
            echo "
                <ul>
                    <li>";
            // line 9
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Войти", 1 => "site/login"), "method");
            echo "</li>
                    <li>";
            // line 10
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Регистрация", 1 => "site/registration"), "method");
            echo "</li>
                </ul>
            </li>
        ";
        } else {
            // line 14
            echo "            <li>";
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Выйти", 1 => "user/logout"), "method");
            echo "</li>
            <li>";
            // line 15
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Админ", 1 => "admin/index"), "method");
            echo "</li>
            <li>";
            // line 16
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Профиль", 1 => "user/profile"), "method");
            echo "
                <ul>
                    <li>";
            // line 18
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Редактировать", 1 => "user/"), "method");
            echo "</li>
                    <li><a href=\"#\">Мои события</a></li>
                    <li>";
            // line 20
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Мои друзья", 1 => "user/"), "method");
            echo "</li>
                </ul>
            </li>
        ";
        }
        // line 24
        echo "        <li><a href=\"#\">Новости</a></li>
        <li><a href=\"#\">События</a>
            <ul>
                <li><a href=\"#\">Ближайшие</a></li>
                <li><a href=\"#\">Прошедшие</a></li>
            </ul>
        </li>
        <li>";
        // line 31
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Главная", 1 => "site/index"), "method");
        echo "</li>
    </ul><!-- menu -->
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
        return array (  79 => 31,  70 => 24,  63 => 20,  58 => 18,  53 => 16,  49 => 15,  44 => 14,  37 => 10,  33 => 9,  28 => 7,  25 => 6,  23 => 5,  19 => 3,);
    }
}
