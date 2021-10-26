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

/* patika.html.twig */
class __TwigTemplate_5e532f07170c361d5b27a0d822d13e67d85c64d59b96f8ec66e1a13d7e5b05d1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patika.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    
        <title>Patika Uygulaması</title>
    </head>
    <body>
    
   <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/lucky/images/logo.png"), "html", null, true);
        echo "\">
   <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lucky/styles/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
   
        <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " Patika Uygulamasına Hoşgeldiniz</h1>
        <p>Bu bir patika uygulamasıdır</p>
        
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lucky/scripts/script.js"), "html", null, true);
        echo "\"></script>
    </body>
   
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "patika.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  59 => 12,  54 => 10,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
    
        <title>Patika Uygulaması</title>
    </head>
    <body>
    
   <img src=\"{{asset('/lucky/images/logo.png') }}\">
   <link href=\"{{ asset('lucky/styles/styles.css') }}\" rel=\"stylesheet\"/>
   
        <h1>{{param}} Patika Uygulamasına Hoşgeldiniz</h1>
        <p>Bu bir patika uygulamasıdır</p>
        
        <script src=\"{{ asset('lucky/scripts/script.js') }}\"></script>
    </body>
   
</html>", "patika.html.twig", "C:\\Users\\gorke\\symfonyPrject\\templates\\patika.html.twig");
    }
}
