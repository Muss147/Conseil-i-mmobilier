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

/* front/about.html.twig */
class __TwigTemplate_6a0d619f0ef0711126546266c8887f96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "À propos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo "";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<style type=\"text/css\">

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<!-- Begin:: Carrousel -->
<section class=\"section\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.5) 100%, rgb(255, 255, 255)), url(";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/carrousel_img.jpeg"), "html", null, true);
        echo "); background-attachment: fixed; background-position: bottom; height: 500px;\">
    <div class=\"container h-100 d-flex align-items-center justify-content-center\">
        <div class=\"text-center text-white\">
            <h1 class=\"section__title text-white\">À propos</h1>
            <p>Les meilleurs services immobiliers</p>
        </div>
    </div>
</section>
<!-- End:: Carrousel -->

<!-- Begin:: Breadcrumbs -->
<section id=\"breadcrumbs\" class=\"container d-flex gap-2 pt-3\">
    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"text-link\">Accueil</a>
    <i class=\"ri-arrow-right-s-line align-middle\"></i>
    <span class=\"text-secondary\">À propos</span>
</section>
<!-- End:: Breadcrumbs -->

<!-- Begin:: About section -->
<section id=\"about\" class=\"container section\">
    <div class=\"row\">
        <div class=\"col-md-6 d-flex align-items-center justify-content-start justify-content-lg-center\">
            <div class=\"text-center text-md-start w-100 w-lg-75\">
                <h2 class=\"section__title\">Qui sommes-nous ?</h2>
                <p class=\"m-0\">Conseil Immobilier est une société de conseil spécialisée dans l'immobilier; qui vise à accompagner.
                Les clients résidants Afrique, intéressés par l'acquisition ou la location d'un bien en France et Europe. 
                Egalement, nous accompagnons la diaspora ou les amoureux de l'Afrique désirant louer ou acquérir un bien en Côte d'Ivoire.</p>
            </div>
        </div>
        <div class=\"col-md-6 p-3 p-md-0\">
            <img alt=\"about1\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/about1.jpeg"), "html", null, true);
        echo "\" class=\"w-100 h-100 rounded\" style=\"max-height: 300px; object-fit: cover\">
        </div>
        <div class=\"col-md-6 p-3 p-md-0 d-none d-md-block\">
            <img alt=\"about2\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/about2.jpeg"), "html", null, true);
        echo "\" class=\"w-100 h-100 rounded\" style=\"max-height: 300px; object-fit: cover\">
        </div>
        <div class=\"col-md-6 d-flex align-items-center justify-content-start justify-content-lg-center\">
            <div class=\"text-center text-md-start w-100 w-lg-75\">
                <h2 class=\"section__title\">Notre rôle</h2>
                <p>Notre rôle est de vous faciliter la recherche et les formalités en vous apportant une solution clé en main et de vous garantir la sécurisation de votre projet.</p>
                <p class=\"m-0\">Pour ce faire, Conseil Immobilier vous accompagne tout au long de votre projet: de la recherche du bien au financement ainsi que l'accompagnement juridique nécessaire pour le concrétiser.</p>
            </div>
        </div>
        <div class=\"col-md-6 p-3 d-block d-md-none\">
            <img alt=\"about2\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/about2.jpeg"), "html", null, true);
        echo "\" class=\"w-100 h-100 rounded\" style=\"max-height: 300px; object-fit: cover\">
        </div>
    </div>
</section>
<!-- End:: About section -->

<!-- Begin:: Chiffres section -->
<section id=\"chiffres\" class=\"container section\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-3\">
            <h2 class=\"section__title fs-biggest\">137 K</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quis nostrud exercitation</p>
        </div>
        <div class=\"col-sm-6 col-md-3\">
            <h2 class=\"section__title fs-biggest\">50 K</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quis nostrud exercitation</p>
        </div>
        <div class=\"col-sm-6\">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>
    </div>
</section>
<!-- End:: Chiffres section -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "<script type=\"text/javascript\">
    
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 87,  229 => 86,  191 => 57,  178 => 47,  172 => 44,  151 => 26,  136 => 14,  133 => 13,  123 => 12,  110 => 7,  100 => 6,  81 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title \"À propos\" %}
{% block description \"\" %}

{% block stylesheets %}
<style type=\"text/css\">

</style>
{% endblock %}

{% block body %}
<!-- Begin:: Carrousel -->
<section class=\"section\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.5) 100%, rgb(255, 255, 255)), url({{asset('assets/media/illustrations/carrousel_img.jpeg')}}); background-attachment: fixed; background-position: bottom; height: 500px;\">
    <div class=\"container h-100 d-flex align-items-center justify-content-center\">
        <div class=\"text-center text-white\">
            <h1 class=\"section__title text-white\">À propos</h1>
            <p>Les meilleurs services immobiliers</p>
        </div>
    </div>
</section>
<!-- End:: Carrousel -->

<!-- Begin:: Breadcrumbs -->
<section id=\"breadcrumbs\" class=\"container d-flex gap-2 pt-3\">
    <a href=\"{{path('app_home')}}\" class=\"text-link\">Accueil</a>
    <i class=\"ri-arrow-right-s-line align-middle\"></i>
    <span class=\"text-secondary\">À propos</span>
</section>
<!-- End:: Breadcrumbs -->

<!-- Begin:: About section -->
<section id=\"about\" class=\"container section\">
    <div class=\"row\">
        <div class=\"col-md-6 d-flex align-items-center justify-content-start justify-content-lg-center\">
            <div class=\"text-center text-md-start w-100 w-lg-75\">
                <h2 class=\"section__title\">Qui sommes-nous ?</h2>
                <p class=\"m-0\">Conseil Immobilier est une société de conseil spécialisée dans l'immobilier; qui vise à accompagner.
                Les clients résidants Afrique, intéressés par l'acquisition ou la location d'un bien en France et Europe. 
                Egalement, nous accompagnons la diaspora ou les amoureux de l'Afrique désirant louer ou acquérir un bien en Côte d'Ivoire.</p>
            </div>
        </div>
        <div class=\"col-md-6 p-3 p-md-0\">
            <img alt=\"about1\" src=\"{{asset('assets/media/illustrations/about1.jpeg')}}\" class=\"w-100 h-100 rounded\" style=\"max-height: 300px; object-fit: cover\">
        </div>
        <div class=\"col-md-6 p-3 p-md-0 d-none d-md-block\">
            <img alt=\"about2\" src=\"{{asset('assets/media/illustrations/about2.jpeg')}}\" class=\"w-100 h-100 rounded\" style=\"max-height: 300px; object-fit: cover\">
        </div>
        <div class=\"col-md-6 d-flex align-items-center justify-content-start justify-content-lg-center\">
            <div class=\"text-center text-md-start w-100 w-lg-75\">
                <h2 class=\"section__title\">Notre rôle</h2>
                <p>Notre rôle est de vous faciliter la recherche et les formalités en vous apportant une solution clé en main et de vous garantir la sécurisation de votre projet.</p>
                <p class=\"m-0\">Pour ce faire, Conseil Immobilier vous accompagne tout au long de votre projet: de la recherche du bien au financement ainsi que l'accompagnement juridique nécessaire pour le concrétiser.</p>
            </div>
        </div>
        <div class=\"col-md-6 p-3 d-block d-md-none\">
            <img alt=\"about2\" src=\"{{asset('assets/media/illustrations/about2.jpeg')}}\" class=\"w-100 h-100 rounded\" style=\"max-height: 300px; object-fit: cover\">
        </div>
    </div>
</section>
<!-- End:: About section -->

<!-- Begin:: Chiffres section -->
<section id=\"chiffres\" class=\"container section\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-3\">
            <h2 class=\"section__title fs-biggest\">137 K</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quis nostrud exercitation</p>
        </div>
        <div class=\"col-sm-6 col-md-3\">
            <h2 class=\"section__title fs-biggest\">50 K</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quis nostrud exercitation</p>
        </div>
        <div class=\"col-sm-6\">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>
    </div>
</section>
<!-- End:: Chiffres section -->

{% endblock %}

{% block javascripts %}
<script type=\"text/javascript\">
    
</script>
{% endblock %}
", "front/about.html.twig", "/Users/mfofana/Desktop/WORKS/MyGITHUB/conseil-i-mmobilier/templates/front/about.html.twig");
    }
}
