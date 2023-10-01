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

/* front/blog.html.twig */
class __TwigTemplate_0dd9b164bdfd985813c5a4ee6a66aa46 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/blog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/blog.html.twig", 1);
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

/* -- Blog -- */
#blog .blog__img {
    overflow: hidden;
}
#blog .blog__card img {
    transition: .4s;
}
#blog .blog__card:hover img {
    opacity: 0.8;
    transform: scale(1.1);
    -moz-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -o-transform: scale(1.1);
    -ms-transform: scale(1.1);
}

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "<!-- Begin:: Carrousel -->
<section class=\"section\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.5) 100%, rgb(255, 255, 255)), url(";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/carrousel_img.jpeg"), "html", null, true);
        echo "); background-attachment: fixed; background-position: bottom; height: 500px;\">
    <div class=\"container h-100 d-flex align-items-center justify-content-center\">
        <div class=\"text-center text-white\">
            <h1 class=\"section__title text-white\">Blog</h1>
            <p>Lire les dernières nouvelles de l'immobilier</p>
        </div>
    </div>
</section>
<!-- End:: Carrousel -->

<!-- Begin:: Breadcrumbs -->
<section id=\"breadcrumbs\" class=\"container d-flex gap-2 pt-3\">
    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"text-link\">Accueil</a>
    <i class=\"ri-arrow-right-s-line align-middle\"></i>
    <span class=\"text-secondary\">Services</span>
</section>
<!-- End:: Breadcrumbs -->

<!-- Begin:: Liste Blog section -->
<section id=\"blog\" class=\"container section\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4 col-lg-3 mb-4 blog__card bg-white rounded p-2\">
            <div class=\"blog__img rounded\">
                <img alt=\"\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/blog__interior.jpg"), "html", null, true);
        echo "\" class=\"rounded w-100\">
            </div>
            <div class=\"p-2\">
                <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                <span class=\"\"></span>
                <p>New York County as a whole covers a total area of 33.77 square miles (87.5 km2), of which 22.96 square miles (59.5)...</p>
                <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                    Lire la suite 
                    <i class=\"ri-arrow-right-s-line align-middle\"></i>
                </a>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4 col-lg-3 mb-4 blog__card bg-white rounded p-2\">
            <div class=\"blog__img rounded\">
                <img alt=\"\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/blog__interior.jpg"), "html", null, true);
        echo "\" class=\"rounded w-100\">
            </div>
            <div class=\"p-2\">
                <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                <span class=\"\"></span>
                <p>New York County as a whole covers a total area of 33.77 square miles (87.5 km2), of which 22.96 square miles (59.5)...</p>
                <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                    Lire la suite 
                    <i class=\"ri-arrow-right-s-line align-middle\"></i>
                </a>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4 col-lg-3 mb-4 blog__card bg-white rounded p-2\">
            <div class=\"blog__img rounded\">
                <img alt=\"\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/blog__interior.jpg"), "html", null, true);
        echo "\" class=\"rounded w-100\">
            </div>
            <div class=\"p-2\">
                <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                <span class=\"\"></span>
                <p>New York County as a whole covers a total area of 33.77 square miles (87.5 km2), of which 22.96 square miles (59.5)...</p>
                <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                    Lire la suite 
                    <i class=\"ri-arrow-right-s-line align-middle\"></i>
                </a>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4 col-lg-3 mb-4 blog__card bg-white rounded p-2\">
            <div class=\"blog__img rounded\">
                <img alt=\"\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/blog__interior.jpg"), "html", null, true);
        echo "\" class=\"rounded w-100\">
            </div>
            <div class=\"p-2\">
                <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                <span class=\"\"></span>
                <p>New York County as a whole covers a total area of 33.77 square miles (87.5 km2), of which 22.96 square miles (59.5)...</p>
                <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                    Lire la suite 
                    <i class=\"ri-arrow-right-s-line align-middle\"></i>
                </a>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4 col-lg-3 mb-4 blog__card bg-white rounded p-2\">
            <div class=\"blog__img rounded\">
                <img alt=\"\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/blog__interior.jpg"), "html", null, true);
        echo "\" class=\"rounded w-100\">
            </div>
            <div class=\"p-2\">
                <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                <span class=\"\"></span>
                <p>New York County as a whole covers a total area of 33.77 square miles (87.5 km2), of which 22.96 square miles (59.5)...</p>
                <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                    Lire la suite 
                    <i class=\"ri-arrow-right-s-line align-middle\"></i>
                </a>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4 col-lg-3 mb-4 blog__card bg-white rounded p-2\">
            <div class=\"blog__img rounded\">
                <img alt=\"\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/blog__interior.jpg"), "html", null, true);
        echo "\" class=\"rounded w-100\">
            </div>
            <div class=\"p-2\">
                <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                <span class=\"\"></span>
                <p>New York County as a whole covers a total area of 33.77 square miles (87.5 km2), of which 22.96 square miles (59.5)...</p>
                <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                    Lire la suite 
                    <i class=\"ri-arrow-right-s-line align-middle\"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End:: Blog section -->

<!-- Begin:: Contact section -->
<section id=\"contact\" class=\"container section\">
    <div class=\"row\">
        <div class=\"col-md-6 p-5\">
            <h2 class=\"section__title\">Et si on gardait le contact</h2>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
            
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
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/indira2.jpeg"), "html", null, true);
        echo "\" class=\"w-100 h-100\" style=\"max-height: 625px; object-fit: cover\">
        </div>
    </div>
</section>
<!-- End:: Contact section -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 181
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 182
        echo "<script type=\"text/javascript\">
    var swiper = new Swiper(\".homeCarrousel\", {
        cssMode: true,
        navigation: {
            nextEl: \".swiper-button-next\",
            prevEl: \".swiper-button-prev\",
        },
        pagination: {
            el: \".swiper-pagination\",
        },
        mousewheel: true,
        keyboard: true,
    });

    let swiperBlog = new Swiper(\".blog__container\", {
        spaceBetween: 25,
        grapCursor: true,
        navigation: {
            nextEl: \".swiper-button-next\",
            prevEl: \".swiper-button-prev\",
        },
        breakpoints: {
            576: {
                slidesPerView: 2
            },
            780: {
                slidesPerView: 3,
                spaceBetween: 25
            },
            1042: {
                slidesPerView: 4,
                spaceBetween: 25
            }
        },
    });

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 182,  336 => 181,  319 => 173,  266 => 123,  249 => 109,  232 => 95,  215 => 81,  198 => 67,  181 => 53,  167 => 42,  152 => 30,  149 => 29,  139 => 28,  110 => 7,  100 => 6,  81 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title \"À propos\" %}
{% block description \"\" %}

{% block stylesheets %}
<style type=\"text/css\">

/* -- Blog -- */
#blog .blog__img {
    overflow: hidden;
}
#blog .blog__card img {
    transition: .4s;
}
#blog .blog__card:hover img {
    opacity: 0.8;
    transform: scale(1.1);
    -moz-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -o-transform: scale(1.1);
    -ms-transform: scale(1.1);
}

</style>
{% endblock %}

{% block body %}
<!-- Begin:: Carrousel -->
<section class=\"section\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.5) 100%, rgb(255, 255, 255)), url({{asset('assets/media/illustrations/carrousel_img.jpeg')}}); background-attachment: fixed; background-position: bottom; height: 500px;\">
    <div class=\"container h-100 d-flex align-items-center justify-content-center\">
        <div class=\"text-center text-white\">
            <h1 class=\"section__title text-white\">Blog</h1>
            <p>Lire les dernières nouvelles de l'immobilier</p>
        </div>
    </div>
</section>
<!-- End:: Carrousel -->

<!-- Begin:: Breadcrumbs -->
<section id=\"breadcrumbs\" class=\"container d-flex gap-2 pt-3\">
    <a href=\"{{path('app_home')}}\" class=\"text-link\">Accueil</a>
    <i class=\"ri-arrow-right-s-line align-middle\"></i>
    <span class=\"text-secondary\">Services</span>
</section>
<!-- End:: Breadcrumbs -->

<!-- Begin:: Liste Blog section -->
<section id=\"blog\" class=\"container section\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4 col-lg-3 mb-4 blog__card bg-white rounded p-2\">
            <div class=\"blog__img rounded\">
                <img alt=\"\" src=\"{{asset('assets/media/illustrations/blog__interior.jpg')}}\" class=\"rounded w-100\">
            </div>
            <div class=\"p-2\">
                <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                <span class=\"\"></span>
                <p>New York County as a whole covers a total area of 33.77 square miles (87.5 km2), of which 22.96 square miles (59.5)...</p>
                <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                    Lire la suite 
                    <i class=\"ri-arrow-right-s-line align-middle\"></i>
                </a>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4 col-lg-3 mb-4 blog__card bg-white rounded p-2\">
            <div class=\"blog__img rounded\">
                <img alt=\"\" src=\"{{asset('assets/media/illustrations/blog__interior.jpg')}}\" class=\"rounded w-100\">
            </div>
            <div class=\"p-2\">
                <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                <span class=\"\"></span>
                <p>New York County as a whole covers a total area of 33.77 square miles (87.5 km2), of which 22.96 square miles (59.5)...</p>
                <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                    Lire la suite 
                    <i class=\"ri-arrow-right-s-line align-middle\"></i>
                </a>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4 col-lg-3 mb-4 blog__card bg-white rounded p-2\">
            <div class=\"blog__img rounded\">
                <img alt=\"\" src=\"{{asset('assets/media/illustrations/blog__interior.jpg')}}\" class=\"rounded w-100\">
            </div>
            <div class=\"p-2\">
                <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                <span class=\"\"></span>
                <p>New York County as a whole covers a total area of 33.77 square miles (87.5 km2), of which 22.96 square miles (59.5)...</p>
                <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                    Lire la suite 
                    <i class=\"ri-arrow-right-s-line align-middle\"></i>
                </a>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4 col-lg-3 mb-4 blog__card bg-white rounded p-2\">
            <div class=\"blog__img rounded\">
                <img alt=\"\" src=\"{{asset('assets/media/illustrations/blog__interior.jpg')}}\" class=\"rounded w-100\">
            </div>
            <div class=\"p-2\">
                <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                <span class=\"\"></span>
                <p>New York County as a whole covers a total area of 33.77 square miles (87.5 km2), of which 22.96 square miles (59.5)...</p>
                <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                    Lire la suite 
                    <i class=\"ri-arrow-right-s-line align-middle\"></i>
                </a>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4 col-lg-3 mb-4 blog__card bg-white rounded p-2\">
            <div class=\"blog__img rounded\">
                <img alt=\"\" src=\"{{asset('assets/media/illustrations/blog__interior.jpg')}}\" class=\"rounded w-100\">
            </div>
            <div class=\"p-2\">
                <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                <span class=\"\"></span>
                <p>New York County as a whole covers a total area of 33.77 square miles (87.5 km2), of which 22.96 square miles (59.5)...</p>
                <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                    Lire la suite 
                    <i class=\"ri-arrow-right-s-line align-middle\"></i>
                </a>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4 col-lg-3 mb-4 blog__card bg-white rounded p-2\">
            <div class=\"blog__img rounded\">
                <img alt=\"\" src=\"{{asset('assets/media/illustrations/blog__interior.jpg')}}\" class=\"rounded w-100\">
            </div>
            <div class=\"p-2\">
                <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                <span class=\"\"></span>
                <p>New York County as a whole covers a total area of 33.77 square miles (87.5 km2), of which 22.96 square miles (59.5)...</p>
                <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                    Lire la suite 
                    <i class=\"ri-arrow-right-s-line align-middle\"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End:: Blog section -->

<!-- Begin:: Contact section -->
<section id=\"contact\" class=\"container section\">
    <div class=\"row\">
        <div class=\"col-md-6 p-5\">
            <h2 class=\"section__title\">Et si on gardait le contact</h2>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
            
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
</section>
<!-- End:: Contact section -->

{% endblock %}

{% block javascripts %}
<script type=\"text/javascript\">
    var swiper = new Swiper(\".homeCarrousel\", {
        cssMode: true,
        navigation: {
            nextEl: \".swiper-button-next\",
            prevEl: \".swiper-button-prev\",
        },
        pagination: {
            el: \".swiper-pagination\",
        },
        mousewheel: true,
        keyboard: true,
    });

    let swiperBlog = new Swiper(\".blog__container\", {
        spaceBetween: 25,
        grapCursor: true,
        navigation: {
            nextEl: \".swiper-button-next\",
            prevEl: \".swiper-button-prev\",
        },
        breakpoints: {
            576: {
                slidesPerView: 2
            },
            780: {
                slidesPerView: 3,
                spaceBetween: 25
            },
            1042: {
                slidesPerView: 4,
                spaceBetween: 25
            }
        },
    });

</script>
{% endblock %}
", "front/blog.html.twig", "/Users/mfofana/Desktop/WORKS/MyGITHUB/conseil-i-mmobilier/templates/front/blog.html.twig");
    }
}
