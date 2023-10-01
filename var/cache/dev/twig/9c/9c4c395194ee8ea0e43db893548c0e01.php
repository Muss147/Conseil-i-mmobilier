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

/* front/_header.html.twig */
class __TwigTemplate_156206f05a5c9ed41c7ea486617dd54e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/_header.html.twig"));

        // line 1
        echo "<header id=\"header\" class=\"fixed-top w-100\">
    <nav class=\"container d-flex align-items-center justify-content-between\">
        <div class=\"nav__logo\">
            <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                <img alt=\"Conseil I mmobilier\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/logos/conseil-immobilier-white.png"), "html", null, true);
        echo "\" class=\"logo-white\">
                <img alt=\"Conseil I mmobilier\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/logos/conseil-immobilier-blue.png"), "html", null, true);
        echo "\" class=\"logo-blue d-none\">
            </a>
        </div>
        <div id=\"nav__menu\" class=\"nav__menu flex-fill\">
            <ul class=\"list d-flex flex-column flex-lg-row gap-5 align-items-center justify-content-center\">
                <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\" class=\"nav__link\">À propos</a></li>
                <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        echo "\" class=\"nav__link\">Services</a></li>
                <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\" class=\"nav__link\">Blog</a></li>
                <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class=\"nav__link\">Contact</a></li>
            </ul>
            <!-- Close button -->
            <div class=\"nav__close\" id=\"nav-close\">
                <i class=\"ri-close-line\"></i>
            </div>
        </div>
        <div class=\"d-none d-lg-block\">
            <a href=\"tel:0033615202035\" class=\"nav__link\">
                <i class=\"ri-phone-fill align-middle\"></i>
                +33 6 15 20 20 35
            </a>
        </div>

        <div class=\"nav__button\">
            <!-- Toggle buttons -->
            <div class=\"nav__toggle\" id=\"nav-toggle\">
                <i class=\"ri-menu-line\"></i>
            </div>
        </div>
    </nav>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  72 => 13,  68 => 12,  64 => 11,  56 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"fixed-top w-100\">
    <nav class=\"container d-flex align-items-center justify-content-between\">
        <div class=\"nav__logo\">
            <a href=\"{{path('app_home')}}\">
                <img alt=\"Conseil I mmobilier\" src=\"{{asset('assets/media/logos/conseil-immobilier-white.png')}}\" class=\"logo-white\">
                <img alt=\"Conseil I mmobilier\" src=\"{{asset('assets/media/logos/conseil-immobilier-blue.png')}}\" class=\"logo-blue d-none\">
            </a>
        </div>
        <div id=\"nav__menu\" class=\"nav__menu flex-fill\">
            <ul class=\"list d-flex flex-column flex-lg-row gap-5 align-items-center justify-content-center\">
                <li><a href=\"{{path('app_about')}}\" class=\"nav__link\">À propos</a></li>
                <li><a href=\"{{path('app_services')}}\" class=\"nav__link\">Services</a></li>
                <li><a href=\"{{path('app_blog')}}\" class=\"nav__link\">Blog</a></li>
                <li><a href=\"{{path('app_contact')}}\" class=\"nav__link\">Contact</a></li>
            </ul>
            <!-- Close button -->
            <div class=\"nav__close\" id=\"nav-close\">
                <i class=\"ri-close-line\"></i>
            </div>
        </div>
        <div class=\"d-none d-lg-block\">
            <a href=\"tel:0033615202035\" class=\"nav__link\">
                <i class=\"ri-phone-fill align-middle\"></i>
                +33 6 15 20 20 35
            </a>
        </div>

        <div class=\"nav__button\">
            <!-- Toggle buttons -->
            <div class=\"nav__toggle\" id=\"nav-toggle\">
                <i class=\"ri-menu-line\"></i>
            </div>
        </div>
    </nav>
</header>", "front/_header.html.twig", "/Users/mfofana/Desktop/WORKS/MyGITHUB/conseil-i-mmobilier/templates/front/_header.html.twig");
    }
}
