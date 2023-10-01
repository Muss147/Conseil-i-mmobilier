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

/* front/_footer.html.twig */
class __TwigTemplate_f2164ff772087f10360552528023d652 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/_footer.html.twig"));

        // line 1
        echo "<footer id=\"footer\" class=\"section bg-light\">
    <div class=\"border-top border-lightgrey\">
        <div class=\"container pt-6\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <h4 class=\"fw-bold\">Conseil I-mmobilier</h4>
                    <p class=\"text-justify\">Nous nous engageons à fournir les services immobiliers les plus personnalisés, de l'inscription à la clôture. Nous avons des résultats exceptionnels qui sont confirmés par le nombre de clients que nous servons.</p>
                </div>
                <div class=\"col-sm-6 col-lg-3 mb-4 ps-3 ps-lg-6\">
                    <h4 class=\"fw-bold\">Le Site</h4>
                    <ul class=\"list\">
                        <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\" class=\"text-link\">À propos</a></li>
                        <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        echo "\" class=\"text-link\">Services</a></li>
                        <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\" class=\"text-link\">Blog</a></li>
                        <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class=\"text-link\">Contact</a></li>
                    </ul>
                </div>
                <div class=\"col-sm-6 col-lg-3 mb-4\">
                    <h4 class=\"fw-bold\">Administratif</h4>
                    <ul class=\"list\">
                        <li><a href=\"\" class=\"text-link\">Conditions générales d'utilisation</a></li>
                        <li><a href=\"\" class=\"text-link\">Mentions Légales</a></li>
                    </ul>
                </div>
                <div class=\"col-sm-6 col-lg-3 mb-4\">
                    <h4 class=\"fw-bold\">Contact</h4>
                    <ul class=\"list\">
                        <li>
                            <i class=\"ri-community-fill align-middle\"></i> 
                            Abidjan, Cocody 2 plateaux Valon
                        </li>
                        <li><a href=\"tel:0033615202035\" class=\"text-link\">
                            <i class=\"ri-phone-fill align-middle\"></i>
                            +33 6 15 20 20 35
                        </a></li>
                        <li><a href=\"tel:002250788024985\" class=\"text-link\">
                            <i class=\"ri-phone-fill align-middle\"></i>
                            +225 07 880 249 85
                        </a></li>
                        <li><a href=\"mailto:contact@conseil-i-mmobilier.com\" class=\"text-link\">
                            <i class=\"ri-mail-open-fill align-middle\"></i>
                            contact@conseil-i-mmobilier.com
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  64 => 14,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer\" class=\"section bg-light\">
    <div class=\"border-top border-lightgrey\">
        <div class=\"container pt-6\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <h4 class=\"fw-bold\">Conseil I-mmobilier</h4>
                    <p class=\"text-justify\">Nous nous engageons à fournir les services immobiliers les plus personnalisés, de l'inscription à la clôture. Nous avons des résultats exceptionnels qui sont confirmés par le nombre de clients que nous servons.</p>
                </div>
                <div class=\"col-sm-6 col-lg-3 mb-4 ps-3 ps-lg-6\">
                    <h4 class=\"fw-bold\">Le Site</h4>
                    <ul class=\"list\">
                        <li><a href=\"{{path('app_about')}}\" class=\"text-link\">À propos</a></li>
                        <li><a href=\"{{path('app_services')}}\" class=\"text-link\">Services</a></li>
                        <li><a href=\"{{path('app_blog')}}\" class=\"text-link\">Blog</a></li>
                        <li><a href=\"{{path('app_contact')}}\" class=\"text-link\">Contact</a></li>
                    </ul>
                </div>
                <div class=\"col-sm-6 col-lg-3 mb-4\">
                    <h4 class=\"fw-bold\">Administratif</h4>
                    <ul class=\"list\">
                        <li><a href=\"\" class=\"text-link\">Conditions générales d'utilisation</a></li>
                        <li><a href=\"\" class=\"text-link\">Mentions Légales</a></li>
                    </ul>
                </div>
                <div class=\"col-sm-6 col-lg-3 mb-4\">
                    <h4 class=\"fw-bold\">Contact</h4>
                    <ul class=\"list\">
                        <li>
                            <i class=\"ri-community-fill align-middle\"></i> 
                            Abidjan, Cocody 2 plateaux Valon
                        </li>
                        <li><a href=\"tel:0033615202035\" class=\"text-link\">
                            <i class=\"ri-phone-fill align-middle\"></i>
                            +33 6 15 20 20 35
                        </a></li>
                        <li><a href=\"tel:002250788024985\" class=\"text-link\">
                            <i class=\"ri-phone-fill align-middle\"></i>
                            +225 07 880 249 85
                        </a></li>
                        <li><a href=\"mailto:contact@conseil-i-mmobilier.com\" class=\"text-link\">
                            <i class=\"ri-mail-open-fill align-middle\"></i>
                            contact@conseil-i-mmobilier.com
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>", "front/_footer.html.twig", "/Users/mfofana/Desktop/WORKS/MyGITHUB/conseil-i-mmobilier/templates/front/_footer.html.twig");
    }
}
