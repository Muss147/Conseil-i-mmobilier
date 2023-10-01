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

/* front/contact.html.twig */
class __TwigTemplate_379280e991aca4f90bb3ac2d8d8441e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/contact.html.twig", 1);
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

        echo "Contact";
        
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
header:not(.scroll) nav {
    color: var(--first-color) !important;
}
header.scroll {
    z-index: 7001;
}
#map {
    height: 450px;
}
/* -- Contact -- */
.form-control {
    border: 0;
    background-color: #F8F9FA;
    border: 1px solid #FFFFFF;
    border-radius: 5px;
    padding: 9px 0px 9px 9px;
}
.form-control:focus {
    box-shadow: inset 0 0 0 1px rgba(0,0,0,.1);
    border: 1px solid transparent;
    background-color: #F8F9FA;
}
.form-control::placeholder {
    font-size: var(--smaller-font-size);
    color: #a1a2a2;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "<!-- Begin:: Carrousel -->
<section class=\"mt-6\">
    <div id=\"map\" class=\"position-relative\">
        <div class=\"position-absolute top-0 left-0 w-100 h-100 py-4\">
            <div class=\"container\">
                <div class=\"bg-white rounded shadow w-md-50 w-lg-25 p-3 p-sm-5\">
                    <h4 class=\"fw-bold text-primary\">Comment nous trouver</h4>
                    <ul class=\"list mb-4\">
                        <li class=\"mb-2\">
                            <i class=\"ri-community-fill align-middle\"></i> 
                            Abidjan, Cocody 2 plateaux Valon
                        </li>
                        <li class=\"mb-2\"><a href=\"tel:0033615202035\" class=\"text-link\">
                            <i class=\"ri-phone-fill align-middle\"></i>
                            +33 6 15 20 20 35
                        </a></li>
                        <li class=\"mb-2\"><a href=\"tel:002250788024985\" class=\"text-link\">
                            <i class=\"ri-phone-fill align-middle\"></i>
                            +225 07 880 249 85
                        </a></li>
                        <li class=\"mb-2\"><a href=\"mailto:contact@conseil-i-mmobilier.com\" class=\"text-link\">
                            <i class=\"ri-mail-open-fill align-middle\"></i>
                            contact@conseil-i-mmobilier.com
                        </a></li>
                    </ul>
                    <h4 class=\"fw-bold text-primary\">Heures d'ouverture</h4>
                    <table class=\"w-100 border-0\">
                        <tr>
                            <td class=\"pb-2\">Lundi - Vendredi</td>
                            <td class=\"text-end\">10:00 - 18:00</td>
                        </tr>
                        <tr>
                            <td class=\"pb-2\">Samedi</td>
                            <td class=\"text-end\">10:00 - 14:00</td>
                        </tr>
                        <tr>
                            <td class=\"pb-2\">Dimanche</td>
                            <td class=\"text-end\">Fermé</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Carrousel -->

<!-- Begin:: Breadcrumbs -->
<section id=\"breadcrumbs\" class=\"container d-flex gap-2 pt-3\">
    <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"text-link\">Accueil</a>
    <i class=\"ri-arrow-right-s-line align-middle\"></i>
    <span class=\"text-secondary\">Contact</span>
</section>
<!-- End:: Breadcrumbs -->

<!-- Begin:: Contact section -->
";
        // line 94
        $this->loadTemplate("front/_contact.html.twig", "front/contact.html.twig", 94)->display(twig_array_merge($context, ["contactTitle" => "Écrivez-nous"]));
        // line 95
        echo "<!-- End:: Contact section -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "<script type=\"text/javascript\">
    var map = L.map('map', {
        center: [51.505, -0.09],
        zoom: 13,
        scrollWheelZoom: false
    });
    var popup = L.popup()
    .setLatLng([51.513, -0.09])
    .setContent(\"Nous somme ici.\")
    .openOn(map);

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 100,  233 => 99,  221 => 95,  219 => 94,  209 => 87,  158 => 38,  148 => 37,  110 => 7,  100 => 6,  81 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title \"Contact\" %}
{% block description \"\" %}

{% block stylesheets %}
<style type=\"text/css\">
header:not(.scroll) nav {
    color: var(--first-color) !important;
}
header.scroll {
    z-index: 7001;
}
#map {
    height: 450px;
}
/* -- Contact -- */
.form-control {
    border: 0;
    background-color: #F8F9FA;
    border: 1px solid #FFFFFF;
    border-radius: 5px;
    padding: 9px 0px 9px 9px;
}
.form-control:focus {
    box-shadow: inset 0 0 0 1px rgba(0,0,0,.1);
    border: 1px solid transparent;
    background-color: #F8F9FA;
}
.form-control::placeholder {
    font-size: var(--smaller-font-size);
    color: #a1a2a2;
}
</style>
{% endblock %}

{% block body %}
<!-- Begin:: Carrousel -->
<section class=\"mt-6\">
    <div id=\"map\" class=\"position-relative\">
        <div class=\"position-absolute top-0 left-0 w-100 h-100 py-4\">
            <div class=\"container\">
                <div class=\"bg-white rounded shadow w-md-50 w-lg-25 p-3 p-sm-5\">
                    <h4 class=\"fw-bold text-primary\">Comment nous trouver</h4>
                    <ul class=\"list mb-4\">
                        <li class=\"mb-2\">
                            <i class=\"ri-community-fill align-middle\"></i> 
                            Abidjan, Cocody 2 plateaux Valon
                        </li>
                        <li class=\"mb-2\"><a href=\"tel:0033615202035\" class=\"text-link\">
                            <i class=\"ri-phone-fill align-middle\"></i>
                            +33 6 15 20 20 35
                        </a></li>
                        <li class=\"mb-2\"><a href=\"tel:002250788024985\" class=\"text-link\">
                            <i class=\"ri-phone-fill align-middle\"></i>
                            +225 07 880 249 85
                        </a></li>
                        <li class=\"mb-2\"><a href=\"mailto:contact@conseil-i-mmobilier.com\" class=\"text-link\">
                            <i class=\"ri-mail-open-fill align-middle\"></i>
                            contact@conseil-i-mmobilier.com
                        </a></li>
                    </ul>
                    <h4 class=\"fw-bold text-primary\">Heures d'ouverture</h4>
                    <table class=\"w-100 border-0\">
                        <tr>
                            <td class=\"pb-2\">Lundi - Vendredi</td>
                            <td class=\"text-end\">10:00 - 18:00</td>
                        </tr>
                        <tr>
                            <td class=\"pb-2\">Samedi</td>
                            <td class=\"text-end\">10:00 - 14:00</td>
                        </tr>
                        <tr>
                            <td class=\"pb-2\">Dimanche</td>
                            <td class=\"text-end\">Fermé</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Carrousel -->

<!-- Begin:: Breadcrumbs -->
<section id=\"breadcrumbs\" class=\"container d-flex gap-2 pt-3\">
    <a href=\"{{path('app_home')}}\" class=\"text-link\">Accueil</a>
    <i class=\"ri-arrow-right-s-line align-middle\"></i>
    <span class=\"text-secondary\">Contact</span>
</section>
<!-- End:: Breadcrumbs -->

<!-- Begin:: Contact section -->
{% include 'front/_contact.html.twig' with {'contactTitle': 'Écrivez-nous'} %}
<!-- End:: Contact section -->

{% endblock %}

{% block javascripts %}
<script type=\"text/javascript\">
    var map = L.map('map', {
        center: [51.505, -0.09],
        zoom: 13,
        scrollWheelZoom: false
    });
    var popup = L.popup()
    .setLatLng([51.513, -0.09])
    .setContent(\"Nous somme ici.\")
    .openOn(map);

</script>
{% endblock %}
", "front/contact.html.twig", "/Users/mfofana/Desktop/WORKS/MyGITHUB/conseil-i-mmobilier/templates/front/contact.html.twig");
    }
}
