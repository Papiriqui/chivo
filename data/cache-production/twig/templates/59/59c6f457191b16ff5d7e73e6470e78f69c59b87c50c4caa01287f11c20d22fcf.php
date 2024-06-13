<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base/components/popover-menu/newsroom-menu/layout.js.twig */
class __TwigTemplate_2a5aa1c395ba4e0bedf40b4944b9bbb5c2052af02cdfb8a1700f7fcf412f432d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "\$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        echo "').newsroom_menu(";
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetParamsAsJson", [], "method", false, false, false, 1);
        echo ");";
    }

    public function getTemplateName()
    {
        return "base/components/popover-menu/newsroom-menu/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/popover-menu/newsroom-menu/layout.js.twig", "C:\\xampp\\htdocs\\itop\\web\\templates\\base\\components\\popover-menu\\newsroom-menu\\layout.js.twig");
    }
}
