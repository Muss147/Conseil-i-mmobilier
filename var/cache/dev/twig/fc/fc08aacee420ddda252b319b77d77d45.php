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

/* front/_contact.html.twig */
class __TwigTemplate_833715d7574fe08f905597118087afb7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/_contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/_contact.html.twig"));

        // line 1
        echo "<section id=\"contact\" class=\"container section\">
    <div class=\"row\">
        <div class=\"col-md-6 p-5\">
            <h2 class=\"section__title\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["contactTitle"]) || array_key_exists("contactTitle", $context) ? $context["contactTitle"] : (function () { throw new RuntimeError('Variable "contactTitle" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</h2>
            <p>Vous avez un projet Immobilier en France ou en Côte d'Ivolre? Vous recherchez un Interlocuteur flable et efficace? N'hésitez pas à nous contacter afin de nous confier votre projet. Vous aussi découvrez nos solutions d'accompagnement sur mesure et concrétiser votre projet.</p>
            
            <form class=\"form row\" action=\"\" method=\"POST\">
                <div class=\"col-sm-6 mb-3\">
                    <label for=\"nom\">Nom<sup>*</sup></label>
                    <input type=\"text\" id=\"nom\" class=\"form-control\" name=\"nom\" placeholder=\"Nom\" required>
                </div>
                <div class=\"col-sm-6 mb-3\">
                    <label for=\"prenom\">Prénom<sup>*</sup></label>
                    <input type=\"text\" id=\"prenom\" class=\"form-control\" name=\"prenom\" placeholder=\"Prénom\" required>
                </div>
                <div class=\"col-sm-6 mb-3\">
                    <label for=\"email\">Email<sup>*</sup></label>
                    <input type=\"email\" id=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\" required>
                </div>
                <div class=\"col-sm-6 mb-3\">
                    <label for=\"telephone\">Téléphone</label>
                    <input type=\"tel\" id=\"telephone\" class=\"form-control\" name=\"telephone\" placeholder=\"Téléphone\">
                </div>
                <div class=\"col-12 mb-3\">
                    <label for=\"message\">Message</label>
                    <textarea rows=\"5\" id=\"message\" class=\"form-control\" name=\"message\" placeholder=\"Dites-nous tout...\"></textarea>
                </div>
                <div class=\"col-12 d-grid\">
                    <button type=\"submit\" class=\"btn btn-secondary btn-block\">Envoyer le message</button>
                </div>
            </form>
        </div>
        <div class=\"col-md-6 p-3 p-sm-0\">
            <img alt=\"indira2\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/indira2.jpeg"), "html", null, true);
        echo "\" class=\"w-100 h-100\" style=\"max-height: 625px; object-fit: cover\">
        </div>
    </div>
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"contact\" class=\"container section\">
    <div class=\"row\">
        <div class=\"col-md-6 p-5\">
            <h2 class=\"section__title\">{{contactTitle}}</h2>
            <p>Vous avez un projet Immobilier en France ou en Côte d'Ivolre? Vous recherchez un Interlocuteur flable et efficace? N'hésitez pas à nous contacter afin de nous confier votre projet. Vous aussi découvrez nos solutions d'accompagnement sur mesure et concrétiser votre projet.</p>
            
            <form class=\"form row\" action=\"\" method=\"POST\">
                <div class=\"col-sm-6 mb-3\">
                    <label for=\"nom\">Nom<sup>*</sup></label>
                    <input type=\"text\" id=\"nom\" class=\"form-control\" name=\"nom\" placeholder=\"Nom\" required>
                </div>
                <div class=\"col-sm-6 mb-3\">
                    <label for=\"prenom\">Prénom<sup>*</sup></label>
                    <input type=\"text\" id=\"prenom\" class=\"form-control\" name=\"prenom\" placeholder=\"Prénom\" required>
                </div>
                <div class=\"col-sm-6 mb-3\">
                    <label for=\"email\">Email<sup>*</sup></label>
                    <input type=\"email\" id=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\" required>
                </div>
                <div class=\"col-sm-6 mb-3\">
                    <label for=\"telephone\">Téléphone</label>
                    <input type=\"tel\" id=\"telephone\" class=\"form-control\" name=\"telephone\" placeholder=\"Téléphone\">
                </div>
                <div class=\"col-12 mb-3\">
                    <label for=\"message\">Message</label>
                    <textarea rows=\"5\" id=\"message\" class=\"form-control\" name=\"message\" placeholder=\"Dites-nous tout...\"></textarea>
                </div>
                <div class=\"col-12 d-grid\">
                    <button type=\"submit\" class=\"btn btn-secondary btn-block\">Envoyer le message</button>
                </div>
            </form>
        </div>
        <div class=\"col-md-6 p-3 p-sm-0\">
            <img alt=\"indira2\" src=\"{{asset('assets/media/illustrations/indira2.jpeg')}}\" class=\"w-100 h-100\" style=\"max-height: 625px; object-fit: cover\">
        </div>
    </div>
</section>", "front/_contact.html.twig", "/Users/mfofana/Desktop/WORKS/MyGITHUB/conseil-i-mmobilier/templates/front/_contact.html.twig");
    }
}
