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

/* front/home.html.twig */
class __TwigTemplate_6775ac5be3c3e5246e8e58563b15e1e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/home.html.twig", 1);
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

        echo "Bienvenue";
        
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
/* -- Carrousel slide -- */
.homeCarrousel .swiper-slide {
    position: relative;
    display: flex;
    align-items: center;
    height: 100vh;
}

/* -- About -- */
#about img {
    max-height: 700px;
    object-fit: cover; 
    object-position: top;
    border: 15px solid #fff;
    z-index: var(--z-tooltip);
}

/* -- Services -- */
.service__icon {
    padding: .5em;
    font-size: 30px;
    display: inline-block;
    margin-bottom: 1rem;
    background-color: var(--seconde-color-light);
}
.service__icon svg {
    width: 1em;
    height: 1em;
    fill: var(--primary-color);
}
i.ri-checkbox-circle-fill {
    color: var(--seconde-color);
    font-size: 20px;
}

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
#blog .swiper-button-next:hover, #blog .swiper-button-prev:hover {
    color: var(--seconde-color) !important;
}

/* -- Contact -- */
#contact > .row {
    box-shadow: 0px 5px 65px 0px rgba(36, 42.000000000000014, 76, 0.1);
}
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

    // line 85
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 86
        echo "<!-- Begin:: Carrousel -->
<section class=\"swiper homeCarrousel h-100\">
    <div class=\"swiper-wrapper text-white\">
        <div class=\"swiper-slide\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.5) 100%, rgb(255, 255, 255)), url(";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/home-cover-1.jpg"), "html", null, true);
        echo "); background-size: cover;\">
            <div class=\"container\">
                <div class=\"w-100 w-sm-50\">
                    <span class=\"text-uppercase\">Mission</span>
                    <h1 class=\"ff-title fw-bold fs-biggest text-white\">Votre confiance, notre expertise, votre satisfaction</h1>
                </div>
            </div>
        </div>
        <div class=\"swiper-slide\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.5) 100%, rgb(255, 255, 255)), url(";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/home-cover-2.jpeg"), "html", null, true);
        echo "); background-size: cover;\">
            <div class=\"container\">
                <div class=\"w-100 w-sm-50\">
                    <span class=\"text-uppercase\">Expertise</span>
                    <h1 class=\"ff-title fw-bold fs-biggest text-white\">Gestion immobilière pour tous vos besoins</h1>
                </div>
            </div>
        </div>
        ";
        // line 113
        echo "    </div>

    <div class=\"swiper-button-next rounded-circle text-white\" style=\"padding: 35px; background: rgba(0,0,0,0.5);\">
        <i class=\"ri-arrow-right-s-line fs-3\"></i>
    </div>
    <div class=\"swiper-button-prev rounded-circle text-white\" style=\"padding: 35px; background: rgba(0,0,0,0.5);\">
        <i class=\"ri-arrow-left-s-line fs-3\"></i>
    </div>
</section>
<!-- End:: Carrousel -->

<!-- Begin:: About section -->
<section id=\"about\" class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6 d-flex align-items-center\">
            <div class=\"py-5 py-sm-6 pe-0 pe-sm-5\">
                <h2 class=\"section__title\">Conseil I-mmobilier</h2>
                ";
        // line 133
        echo "                <p>Votre projet immobilier partout en France et en Côte d'Ivoire.
                Achat, vente, location, location saisonnière, projet de construction, Conseil I-mmobilier s'occupe de tout Contactez-nous et découvrez nos solutions d'accompagnement sur mesure... <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\" class=\"btn btn-link text-muted\">En savoir plus</a></p>
                <p class=\"ff-title d-flex flex-column m-0\">
                    <strong>Mme Barry Indira</strong>
                    <span>Conseil Immobilier</span>
                </p>
            </div>
        </div>
        <div class=\"col-sm-6 position-relative\">
            <img alt=\"Mme Indira Barry\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/indira.jpeg"), "html", null, true);
        echo "\" class=\"position-relative position-sm-absolute bottom-0 end-0\">
        </div>
    </div>
</section>
<!-- End:: About section -->

<!-- Begin:: Services section -->
<section id=\"services\" class=\"container section\">
    <div class=\"row\">
        <div class=\"col-lg-6 row d-none d-lg-flex\">
            <div class=\"col-6\">
                <div class=\"rounded shadow mb-4 p-4\">
                    <span class=\"service__icon rounded\">
                        <svg id=\"Capa_1\" enable-background=\"new 0 0 512 512\" height=\"512\" viewBox=\"0 0 512 512\" width=\"512\" xmlns=\"http://www.w3.org/2000/svg\"><g><path d=\"m256.396 204.495c-25.57 0-50.014 11.003-67.063 30.189l22.425 19.928c11.361-12.785 27.631-20.117 44.638-20.117s33.277 7.333 44.638 20.117l22.425-19.928c-17.05-19.185-41.493-30.189-67.063-30.189z\"></path><path d=\"m343.285 217.108 22.425-19.928c-27.785-31.267-67.629-49.2-109.314-49.2-41.686 0-81.529 17.933-109.314 49.2l22.425 19.928c22.097-24.866 53.768-39.127 86.89-39.127s64.791 14.261 86.888 39.127z\"></path><path d=\"m467.66 254.318 23.151 23.151 21.19-21.19-61.091-61.091v-155.518h-104.63v50.887l-90.558-90.557-255.488 255.488 21.19 21.19 22.359-22.359v227.714h-43.783v29.967h511.443v-29.967h-43.783zm-91.414-184.68h44.695v95.583l-44.695-44.696zm-302.495 154.713 181.971-181.97 181.971 181.97v257.682h-166.693v-43.486c30.489-6.858 53.341-34.133 53.341-66.662v-48.745h-23.339v-38.079h-30v38.079h-30.004v-38.079h-30v38.079h-23.339v48.745c0 32.529 22.852 59.804 53.341 66.662v43.486h-167.249zm143.908 128.789h76.682v18.745c0 21.141-17.2 38.341-38.341 38.341s-38.341-17.2-38.341-38.341z\"></path></g></svg>
                    </span>
                    <h4 class=\"ff-title\">Compréhension de votre projet</h4>
                    <p>Nous prenons le temps de comprendre votre projet et de vous proposer la meilleure offre.</p>
                </div>
                <div class=\"rounded shadow p-4\">
                    <span class=\"service__icon rounded\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512.746 512.746\"><path d=\"M507.819 182.697l-59.008-59.009a7.5 7.5 0 0 0-10.607 10.607l59.009 59.009c.44.44.533.943.533 1.287s-.093.847-.534 1.287l-24.446 24.446c-.44.441-.943.534-1.287.534s-.847-.093-1.287-.534l-96.733-96.731a1.823 1.823 0 0 1 0-2.575l24.447-24.447a1.82 1.82 0 0 1 2.574 0l12.852 12.852a7.5 7.5 0 0 0 10.607-10.607l-12.853-12.852c-6.56-6.56-17.23-6.556-23.788 0l-24.447 24.447c-5.117 5.117-6.222 12.732-3.353 18.951-17.26 13.206-42.859 11.164-65.525 9.352-2.126-.17-30.966-2.428-36.537-2.825-10.515-.752-22.923-1.517-35.475-1.517l-.631.001c-4.31.009-8.589.879-12.621 2.497-10.422.544-20.559 1.526-30.572 3.772-7.191 1.612-14.549-.48-19.671-5.604l-5.363-5.363c3.053-6.274 1.995-14.061-3.208-19.264l-24.447-24.447c-6.559-6.557-17.229-6.557-23.789 0L4.928 182.697A16.708 16.708 0 0 0 0 194.592c0 4.492 1.75 8.717 4.927 11.895l24.446 24.446a16.715 16.715 0 0 0 11.895 4.927c2.676 0 5.249-.634 7.569-1.806 0 0 21.693 21.115 24.428 23.857 3.734 3.743 4.374 9.713 5.114 16.625.392 3.65.796 7.425 1.712 11.178 2.935 12.038 8.16 23.573 15.53 34.287a7.5 7.5 0 0 0 12.358-8.502c-6.333-9.207-10.813-19.077-13.315-29.339-.68-2.787-1.015-5.913-1.369-9.223-.911-8.501-1.944-18.135-9.409-25.62-2.827-2.834-23.832-23.276-23.832-23.276l83.102-83.102 4.705 4.705c8.777 8.776 21.319 12.377 33.562 9.634a122.474 122.474 0 0 1 8.462-1.571c-3.28 6.009-4.852 12.783-4.413 19.508 1.223 18.705 17.084 33.69 36.112 34.117l13.509.298.239.002 16.17-.16c11.891 11.98 106.839 107.732 112.49 112.996 5.138 4.787 10.943 10.318 11.168 17.843.192 6.422-4.76 12.999-10.797 15.001-5.924 1.964-12.648.48-17.079-3.946l-91.745-91.745a7.5 7.5 0 0 0-10.607 10.607l111.169 111.168c4.716 6.721 3.772 15.909-2.285 21.567-6.432 6.008-16.893 5.665-23.328-.77L221.689 291.469a7.5 7.5 0 0 0-10.607 10.607l86.5 86.501c6.361 6.454 6.337 16.876-.082 23.294-6.445 6.447-16.938 6.448-23.389-.003l-86.396-86.425a7.5 7.5 0 0 0-10.607 10.607l40.624 40.719c3.124 3.123 4.844 7.275 4.844 11.692s-1.72 8.569-4.844 11.692c-6.447 6.449-16.938 6.447-23.384.002-.396-.396-39.823-39.845-63.716-63.986a7.5 7.5 0 0 0-10.662 10.55c23.919 24.169 63.373 63.644 63.77 64.041 12.297 12.295 32.303 12.295 44.6 0a31.356 31.356 0 0 0 8.38-15.033l26.788 26.75c6.148 6.147 14.224 9.222 22.3 9.222s16.151-3.074 22.3-9.222a31.357 31.357 0 0 0 8.385-15.055l3.394 3.384c12.08 12.082 31.894 12.584 44.168 1.117 11.773-10.997 13.397-29.01 3.777-41.899-.216-.289-1.567-1.677-1.567-1.677 3.979-.309 10.025-3.636 15.012-8.375.314-.298 31.688-31.861 32.165-32.439 14.008-17.122 22.213-37.178 23.731-57.998.387-5.297 2.617-10.193 6.241-13.752l21.822-21.126a16.8 16.8 0 0 0 6.244 1.202c4.492 0 8.717-1.75 11.895-4.927l24.446-24.446a16.715 16.715 0 0 0 4.927-11.895 16.721 16.721 0 0 0-4.929-11.894zm-368.531-59.104l-96.733 96.733c-.44.44-.943.533-1.287.533s-.847-.093-1.287-.534l-24.446-24.446c-.441-.44-.534-.943-.534-1.287s.093-.847.534-1.287l96.731-96.733a1.82 1.82 0 0 1 2.575 0l24.447 24.447c.71.709.71 1.865 0 2.574zm293.654 121.451c-6.267 6.151-10.078 14.462-10.731 23.4-1.289 17.694-8.315 34.815-20.296 49.489-.487.532-2.799 2.938-12.762 13.01a31.669 31.669 0 0 0-2.714-6.834c-2.464-4.606-6.123-8.159-9.757-11.82L272.087 206.842c9.862-.362 20.323-.916 27.667-2.152.323.211.679.51.843.724 3.578 7.601 15.092 23.582 33.521 30.484a7.502 7.502 0 0 0 2.63.479 7.5 7.5 0 0 0 2.631-14.525c-12.874-4.822-22.313-16.596-25.238-22.885-2.475-5.317-9.638-10.422-15.966-9.229-24.813 4.675-51.283 3.151-76.261 2.601-11.323-.254-20.757-9.083-21.477-20.1-.374-5.71 1.814-11.555 6.003-16.034 4.047-4.329 9.484-6.818 14.919-6.829 12.295.011 24.588.732 35.007 1.477 5.521.395 11.038.834 16.556 1.272 4.555.362 9.109.724 13.665 1.062 2.027.15 4.093.315 6.19.483 24.417 1.949 54.688 4.357 76.566-12.974l84.305 84.303z\"></path></svg>
                    </span>
                    <h4 class=\"ff-title\">Organisation des visites</h4>
                    <p>Nous organisons pour vous les visites et visitons ave vous le cas éch@ant afin de vous apporter les meilleurs conseils.</p>
                </div>
            </div>
            <div class=\"col-6 d-flex align-items-center\">
                <div class=\"rounded shadow p-4\">
                    <span class=\"service__icon rounded\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"Layer_1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512.004 512.004\" style=\"enable-background:new 0 0 512.004 512.004;\" xml:space=\"preserve\"><g><g><g><path d=\"M469.336,341.337c-4.719,0-8.533,3.823-8.533,8.533v145.067h-59.733c-4.719,0-8.533,3.823-8.533,8.533     s3.814,8.533,8.533,8.533h68.267c4.719,0,8.533-3.823,8.533-8.533v-153.6C477.869,345.16,474.054,341.337,469.336,341.337z\"></path><path d=\"M443.735,418.137V349.87c0-4.71-3.814-8.533-8.533-8.533h-51.2c-4.719,0-8.533,3.823-8.533,8.533v68.267     c0,4.71,3.814,8.533,8.533,8.533h51.2C439.921,426.67,443.735,422.847,443.735,418.137z M426.669,409.603h-34.133v-51.2h34.133     V409.603z\"></path><path d=\"M332.802,145.07c4.719,0,8.533-3.823,8.533-8.533V93.87c0-4.71-3.814-8.533-8.533-8.533h-256     c-4.719,0-8.533,3.823-8.533,8.533v298.667c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533V375.47h8.533     c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533h-8.533v-51.2h34.133v34.133c0,4.71,3.814,8.533,8.533,8.533     s8.533-3.823,8.533-8.533v-34.133h34.133c4.719,0,8.533-3.823,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533v-51.2h34.133     c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533v-51.2     h34.133v17.067c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533V170.67h17.067c4.719,0,8.533-3.823,8.533-8.533     c0-4.71-3.814-8.533-8.533-8.533h-17.067v-51.2h34.133v34.133C324.269,141.247,328.083,145.07,332.802,145.07z M119.469,290.137     H85.335v-51.2h34.133V290.137z M119.469,221.87H85.335v-51.2h34.133V221.87z M119.469,153.603H85.335v-51.2h34.133V153.603z      M170.669,290.137h-34.133v-51.2h34.133V290.137z M170.669,221.87h-34.133v-51.2h34.133V221.87z M170.669,153.603h-34.133v-51.2     h34.133V153.603z M221.869,221.87h-34.133v-51.2h34.133V221.87z M221.869,153.603h-34.133v-51.2h34.133V153.603z      M273.069,153.603h-34.133v-51.2h34.133V153.603z\"></path><path d=\"M42.669,435.203c4.719,0,8.533-3.823,8.533-8.533V68.27h59.733c4.719,0,8.533-3.823,8.533-8.533v-25.6h59.733     c4.719,0,8.533-3.823,8.533-8.533V17.07h34.133v8.533c0,4.71,3.814,8.533,8.533,8.533h59.733v17.067H145.069     c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h213.333v34.133c0,4.71,3.814,8.533,8.533,8.533     s8.533-3.823,8.533-8.533V59.737c0-4.71-3.814-8.533-8.533-8.533h-59.733v-25.6c0-4.71-3.814-8.533-8.533-8.533h-59.733V8.537     c0-4.71-3.814-8.533-8.533-8.533h-51.2c-4.719,0-8.533,3.823-8.533,8.533v8.533h-59.733c-4.719,0-8.533,3.823-8.533,8.533v25.6     H42.669c-4.719,0-8.533,3.823-8.533,8.533V426.67C34.135,431.38,37.95,435.203,42.669,435.203z\"></path><path d=\"M503.469,187.737h-59.733v-8.533c0-4.71-3.814-8.533-8.533-8.533h-34.133c-4.719,0-8.533,3.823-8.533,8.533v17.067     c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533v-8.533h17.067v8.533c0,4.71,3.814,8.533,8.533,8.533h59.733     v115.934l-130.5-130.5c-3.337-3.336-8.73-3.336-12.066,0c-3.337,3.337-3.337,8.73,0,12.066L497.436,347.37     c1.63,1.63,3.814,2.5,6.033,2.5c1.101,0,2.21-0.213,3.268-0.649c3.192-1.323,5.265-4.437,5.265-7.885V196.27     C512.002,191.559,508.188,187.737,503.469,187.737z\"></path><path d=\"M366.935,477.87h-85.333c-4.719,0-8.533,3.823-8.533,8.533v8.533h-85.333V375.47c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533v128c0,4.71,3.814,8.533,8.533,8.533h102.4c4.719,0,8.533-3.823,8.533-8.533v-8.533h68.267v8.533     c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-17.067C375.469,481.693,371.654,477.87,366.935,477.87z\"></path><path d=\"M509.502,2.503c-3.336-3.336-8.73-3.336-12.066,0L2.502,497.437c-3.336,3.337-3.336,8.73,0,12.066     c1.664,1.664,3.849,2.5,6.033,2.5c2.185,0,4.369-0.836,6.033-2.5L509.502,14.57C512.838,11.233,512.838,5.84,509.502,2.503z\"></path><path d=\"M349.869,460.803c4.719,0,8.533-3.823,8.533-8.533v-102.4c0-4.71-3.814-8.533-8.533-8.533h-51.2     c-4.719,0-8.533,3.823-8.533,8.533v102.4c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-93.867h34.133v34.133h-8.533     c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h8.533v42.667C341.336,456.98,345.15,460.803,349.869,460.803z\"></path><path d=\"M213.336,341.337c-4.719,0-8.533,3.823-8.533,8.533v68.267c0,4.71,3.814,8.533,8.533,8.533h51.2     c4.719,0,8.533-3.823,8.533-8.533V349.87c0-4.71-3.814-8.533-8.533-8.533H213.336z M256.002,409.603h-34.133v-51.2h34.133     V409.603z\"></path></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                    </span>
                    <h4 class=\"ff-title\">Accompagnement dans la recherche de financement</h4>
                    <p>Nous travailions ave des partenaires financier pouvant vous apporter une solution de financement.</p>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6 d-flex align-items-center mb-4 mb-lg-0\">
            <div class=\"text-center text-lg-end\">
                <h2 class=\"section__title\">Offres et Services</h2>
                <p>Découvrez l'excellence du conseil immobilier pour concrétiser votre projet, où que vous soyez en France et en Côte d'Ivoire. 
                Que vous souhaitiez acheter, vendre ou investir, bénéficiez d'un accompagnement sur mesure, basé sur une connaissance approfondie des marchés locaux, pour assurer le succès de votre démarche immobilière :</p>
                <div class=\"mb-4 d-flex justify-content-end\">
                    <div>
                        <span class=\"d-inline-block\">Investissement Locatif <i class=\"ri-checkbox-circle-fill align-middle\"></i></span>
                        <span class=\"d-inline-block\">Résidence secondaire <i class=\"ri-checkbox-circle-fill align-middle\"></i></span>
                        <span class=\"d-inline-block\">Location saisonnière <i class=\"ri-checkbox-circle-fill align-middle\"></i></span>
                    </div>
                    <div>
                        <span class=\"d-inline-block\">Logement étudiant <i class=\"ri-checkbox-circle-fill align-middle\"></i></span>
                        <span class=\"d-inline-block\">Achat de terrain <i class=\"ri-checkbox-circle-fill align-middle\"></i></span>
                        <span class=\"d-inline-block\">Projet de construction <i class=\"ri-checkbox-circle-fill align-middle\"></i></span>
                    </div>
                </div>
                <a href=\"";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        echo "\" class=\"btn btn-secondary\">Consulter nos services</a>
            </div>
        </div>
        <div class=\"col-lg-6 row d-flex d-lg-none\">
            <div class=\"col-sm-4\">
                <div class=\"rounded shadow mb-4 p-4\">
                    <span class=\"service__icon rounded\">
                        <svg id=\"Capa_1\" enable-background=\"new 0 0 512 512\" height=\"512\" viewBox=\"0 0 512 512\" width=\"512\" xmlns=\"http://www.w3.org/2000/svg\"><g><path d=\"m256.396 204.495c-25.57 0-50.014 11.003-67.063 30.189l22.425 19.928c11.361-12.785 27.631-20.117 44.638-20.117s33.277 7.333 44.638 20.117l22.425-19.928c-17.05-19.185-41.493-30.189-67.063-30.189z\"></path><path d=\"m343.285 217.108 22.425-19.928c-27.785-31.267-67.629-49.2-109.314-49.2-41.686 0-81.529 17.933-109.314 49.2l22.425 19.928c22.097-24.866 53.768-39.127 86.89-39.127s64.791 14.261 86.888 39.127z\"></path><path d=\"m467.66 254.318 23.151 23.151 21.19-21.19-61.091-61.091v-155.518h-104.63v50.887l-90.558-90.557-255.488 255.488 21.19 21.19 22.359-22.359v227.714h-43.783v29.967h511.443v-29.967h-43.783zm-91.414-184.68h44.695v95.583l-44.695-44.696zm-302.495 154.713 181.971-181.97 181.971 181.97v257.682h-166.693v-43.486c30.489-6.858 53.341-34.133 53.341-66.662v-48.745h-23.339v-38.079h-30v38.079h-30.004v-38.079h-30v38.079h-23.339v48.745c0 32.529 22.852 59.804 53.341 66.662v43.486h-167.249zm143.908 128.789h76.682v18.745c0 21.141-17.2 38.341-38.341 38.341s-38.341-17.2-38.341-38.341z\"></path></g></svg>
                    </span>
                    <h4 class=\"ff-title\">Compréhension de votre projet</h4>
                    <p>Nous prenons le temps de comprendre votre projet et de vous proposer la meilleure offre.</p>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"rounded shadow mb-4 p-4\">
                    <span class=\"service__icon rounded\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512.746 512.746\"><path d=\"M507.819 182.697l-59.008-59.009a7.5 7.5 0 0 0-10.607 10.607l59.009 59.009c.44.44.533.943.533 1.287s-.093.847-.534 1.287l-24.446 24.446c-.44.441-.943.534-1.287.534s-.847-.093-1.287-.534l-96.733-96.731a1.823 1.823 0 0 1 0-2.575l24.447-24.447a1.82 1.82 0 0 1 2.574 0l12.852 12.852a7.5 7.5 0 0 0 10.607-10.607l-12.853-12.852c-6.56-6.56-17.23-6.556-23.788 0l-24.447 24.447c-5.117 5.117-6.222 12.732-3.353 18.951-17.26 13.206-42.859 11.164-65.525 9.352-2.126-.17-30.966-2.428-36.537-2.825-10.515-.752-22.923-1.517-35.475-1.517l-.631.001c-4.31.009-8.589.879-12.621 2.497-10.422.544-20.559 1.526-30.572 3.772-7.191 1.612-14.549-.48-19.671-5.604l-5.363-5.363c3.053-6.274 1.995-14.061-3.208-19.264l-24.447-24.447c-6.559-6.557-17.229-6.557-23.789 0L4.928 182.697A16.708 16.708 0 0 0 0 194.592c0 4.492 1.75 8.717 4.927 11.895l24.446 24.446a16.715 16.715 0 0 0 11.895 4.927c2.676 0 5.249-.634 7.569-1.806 0 0 21.693 21.115 24.428 23.857 3.734 3.743 4.374 9.713 5.114 16.625.392 3.65.796 7.425 1.712 11.178 2.935 12.038 8.16 23.573 15.53 34.287a7.5 7.5 0 0 0 12.358-8.502c-6.333-9.207-10.813-19.077-13.315-29.339-.68-2.787-1.015-5.913-1.369-9.223-.911-8.501-1.944-18.135-9.409-25.62-2.827-2.834-23.832-23.276-23.832-23.276l83.102-83.102 4.705 4.705c8.777 8.776 21.319 12.377 33.562 9.634a122.474 122.474 0 0 1 8.462-1.571c-3.28 6.009-4.852 12.783-4.413 19.508 1.223 18.705 17.084 33.69 36.112 34.117l13.509.298.239.002 16.17-.16c11.891 11.98 106.839 107.732 112.49 112.996 5.138 4.787 10.943 10.318 11.168 17.843.192 6.422-4.76 12.999-10.797 15.001-5.924 1.964-12.648.48-17.079-3.946l-91.745-91.745a7.5 7.5 0 0 0-10.607 10.607l111.169 111.168c4.716 6.721 3.772 15.909-2.285 21.567-6.432 6.008-16.893 5.665-23.328-.77L221.689 291.469a7.5 7.5 0 0 0-10.607 10.607l86.5 86.501c6.361 6.454 6.337 16.876-.082 23.294-6.445 6.447-16.938 6.448-23.389-.003l-86.396-86.425a7.5 7.5 0 0 0-10.607 10.607l40.624 40.719c3.124 3.123 4.844 7.275 4.844 11.692s-1.72 8.569-4.844 11.692c-6.447 6.449-16.938 6.447-23.384.002-.396-.396-39.823-39.845-63.716-63.986a7.5 7.5 0 0 0-10.662 10.55c23.919 24.169 63.373 63.644 63.77 64.041 12.297 12.295 32.303 12.295 44.6 0a31.356 31.356 0 0 0 8.38-15.033l26.788 26.75c6.148 6.147 14.224 9.222 22.3 9.222s16.151-3.074 22.3-9.222a31.357 31.357 0 0 0 8.385-15.055l3.394 3.384c12.08 12.082 31.894 12.584 44.168 1.117 11.773-10.997 13.397-29.01 3.777-41.899-.216-.289-1.567-1.677-1.567-1.677 3.979-.309 10.025-3.636 15.012-8.375.314-.298 31.688-31.861 32.165-32.439 14.008-17.122 22.213-37.178 23.731-57.998.387-5.297 2.617-10.193 6.241-13.752l21.822-21.126a16.8 16.8 0 0 0 6.244 1.202c4.492 0 8.717-1.75 11.895-4.927l24.446-24.446a16.715 16.715 0 0 0 4.927-11.895 16.721 16.721 0 0 0-4.929-11.894zm-368.531-59.104l-96.733 96.733c-.44.44-.943.533-1.287.533s-.847-.093-1.287-.534l-24.446-24.446c-.441-.44-.534-.943-.534-1.287s.093-.847.534-1.287l96.731-96.733a1.82 1.82 0 0 1 2.575 0l24.447 24.447c.71.709.71 1.865 0 2.574zm293.654 121.451c-6.267 6.151-10.078 14.462-10.731 23.4-1.289 17.694-8.315 34.815-20.296 49.489-.487.532-2.799 2.938-12.762 13.01a31.669 31.669 0 0 0-2.714-6.834c-2.464-4.606-6.123-8.159-9.757-11.82L272.087 206.842c9.862-.362 20.323-.916 27.667-2.152.323.211.679.51.843.724 3.578 7.601 15.092 23.582 33.521 30.484a7.502 7.502 0 0 0 2.63.479 7.5 7.5 0 0 0 2.631-14.525c-12.874-4.822-22.313-16.596-25.238-22.885-2.475-5.317-9.638-10.422-15.966-9.229-24.813 4.675-51.283 3.151-76.261 2.601-11.323-.254-20.757-9.083-21.477-20.1-.374-5.71 1.814-11.555 6.003-16.034 4.047-4.329 9.484-6.818 14.919-6.829 12.295.011 24.588.732 35.007 1.477 5.521.395 11.038.834 16.556 1.272 4.555.362 9.109.724 13.665 1.062 2.027.15 4.093.315 6.19.483 24.417 1.949 54.688 4.357 76.566-12.974l84.305 84.303z\"></path></svg>
                    </span>
                    <h4 class=\"ff-title\">Organisation des visites</h4>
                    <p>Nous organisons pour vous les visites et visitons ave vous le cas éch@ant afin de vous apporter les meilleurs conseils.</p>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"rounded shadow p-4\">
                    <span class=\"service__icon rounded\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"Layer_1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512.004 512.004\" style=\"enable-background:new 0 0 512.004 512.004;\" xml:space=\"preserve\"><g><g><g><path d=\"M469.336,341.337c-4.719,0-8.533,3.823-8.533,8.533v145.067h-59.733c-4.719,0-8.533,3.823-8.533,8.533     s3.814,8.533,8.533,8.533h68.267c4.719,0,8.533-3.823,8.533-8.533v-153.6C477.869,345.16,474.054,341.337,469.336,341.337z\"></path><path d=\"M443.735,418.137V349.87c0-4.71-3.814-8.533-8.533-8.533h-51.2c-4.719,0-8.533,3.823-8.533,8.533v68.267     c0,4.71,3.814,8.533,8.533,8.533h51.2C439.921,426.67,443.735,422.847,443.735,418.137z M426.669,409.603h-34.133v-51.2h34.133     V409.603z\"></path><path d=\"M332.802,145.07c4.719,0,8.533-3.823,8.533-8.533V93.87c0-4.71-3.814-8.533-8.533-8.533h-256     c-4.719,0-8.533,3.823-8.533,8.533v298.667c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533V375.47h8.533     c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533h-8.533v-51.2h34.133v34.133c0,4.71,3.814,8.533,8.533,8.533     s8.533-3.823,8.533-8.533v-34.133h34.133c4.719,0,8.533-3.823,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533v-51.2h34.133     c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533v-51.2     h34.133v17.067c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533V170.67h17.067c4.719,0,8.533-3.823,8.533-8.533     c0-4.71-3.814-8.533-8.533-8.533h-17.067v-51.2h34.133v34.133C324.269,141.247,328.083,145.07,332.802,145.07z M119.469,290.137     H85.335v-51.2h34.133V290.137z M119.469,221.87H85.335v-51.2h34.133V221.87z M119.469,153.603H85.335v-51.2h34.133V153.603z      M170.669,290.137h-34.133v-51.2h34.133V290.137z M170.669,221.87h-34.133v-51.2h34.133V221.87z M170.669,153.603h-34.133v-51.2     h34.133V153.603z M221.869,221.87h-34.133v-51.2h34.133V221.87z M221.869,153.603h-34.133v-51.2h34.133V153.603z      M273.069,153.603h-34.133v-51.2h34.133V153.603z\"></path><path d=\"M42.669,435.203c4.719,0,8.533-3.823,8.533-8.533V68.27h59.733c4.719,0,8.533-3.823,8.533-8.533v-25.6h59.733     c4.719,0,8.533-3.823,8.533-8.533V17.07h34.133v8.533c0,4.71,3.814,8.533,8.533,8.533h59.733v17.067H145.069     c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h213.333v34.133c0,4.71,3.814,8.533,8.533,8.533     s8.533-3.823,8.533-8.533V59.737c0-4.71-3.814-8.533-8.533-8.533h-59.733v-25.6c0-4.71-3.814-8.533-8.533-8.533h-59.733V8.537     c0-4.71-3.814-8.533-8.533-8.533h-51.2c-4.719,0-8.533,3.823-8.533,8.533v8.533h-59.733c-4.719,0-8.533,3.823-8.533,8.533v25.6     H42.669c-4.719,0-8.533,3.823-8.533,8.533V426.67C34.135,431.38,37.95,435.203,42.669,435.203z\"></path><path d=\"M503.469,187.737h-59.733v-8.533c0-4.71-3.814-8.533-8.533-8.533h-34.133c-4.719,0-8.533,3.823-8.533,8.533v17.067     c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533v-8.533h17.067v8.533c0,4.71,3.814,8.533,8.533,8.533h59.733     v115.934l-130.5-130.5c-3.337-3.336-8.73-3.336-12.066,0c-3.337,3.337-3.337,8.73,0,12.066L497.436,347.37     c1.63,1.63,3.814,2.5,6.033,2.5c1.101,0,2.21-0.213,3.268-0.649c3.192-1.323,5.265-4.437,5.265-7.885V196.27     C512.002,191.559,508.188,187.737,503.469,187.737z\"></path><path d=\"M366.935,477.87h-85.333c-4.719,0-8.533,3.823-8.533,8.533v8.533h-85.333V375.47c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533v128c0,4.71,3.814,8.533,8.533,8.533h102.4c4.719,0,8.533-3.823,8.533-8.533v-8.533h68.267v8.533     c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-17.067C375.469,481.693,371.654,477.87,366.935,477.87z\"></path><path d=\"M509.502,2.503c-3.336-3.336-8.73-3.336-12.066,0L2.502,497.437c-3.336,3.337-3.336,8.73,0,12.066     c1.664,1.664,3.849,2.5,6.033,2.5c2.185,0,4.369-0.836,6.033-2.5L509.502,14.57C512.838,11.233,512.838,5.84,509.502,2.503z\"></path><path d=\"M349.869,460.803c4.719,0,8.533-3.823,8.533-8.533v-102.4c0-4.71-3.814-8.533-8.533-8.533h-51.2     c-4.719,0-8.533,3.823-8.533,8.533v102.4c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-93.867h34.133v34.133h-8.533     c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h8.533v42.667C341.336,456.98,345.15,460.803,349.869,460.803z\"></path><path d=\"M213.336,341.337c-4.719,0-8.533,3.823-8.533,8.533v68.267c0,4.71,3.814,8.533,8.533,8.533h51.2     c4.719,0,8.533-3.823,8.533-8.533V349.87c0-4.71-3.814-8.533-8.533-8.533H213.336z M256.002,409.603h-34.133v-51.2h34.133     V409.603z\"></path></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                    </span>
                    <h4 class=\"ff-title\">Accompagnement dans la recherche de financement</h4>
                    <p>Nous travailions ave des partenaires financier pouvant vous apporter une solution de financement.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Services section -->

<!-- Begin:: Blog section -->
<section id=\"blog\" class=\"section\">
    <div class=\"container-fluid bg-light\">
        <div class=\"blog__container container swiper py-4 py-md-5 py-lg-6\">
            <h2 class=\"section__title\">Notre Blog</h2>
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide blog__card bg-white rounded p-2\">
                    <div class=\"blog__img rounded\">
                        <img alt=\"\" src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/blank-img.jpg"), "html", null, true);
        echo "\" class=\"rounded w-100\">
                    </div>
                    <div class=\"p-2\">
                        <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                        <span class=\"\"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p>
                        <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                            Lire la suite 
                            <i class=\"ri-arrow-right-s-line align-middle\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide blog__card bg-white rounded p-2\">
                    <div class=\"blog__img rounded\">
                        <img alt=\"\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/blank-img.jpg"), "html", null, true);
        echo "\" class=\"rounded w-100\">
                    </div>
                    <div class=\"p-2\">
                        <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                        <span class=\"\"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p>
                        <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                            Lire la suite 
                            <i class=\"ri-arrow-right-s-line align-middle\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide blog__card bg-white rounded p-2\">
                    <div class=\"blog__img rounded\">
                        <img alt=\"\" src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/blank-img.jpg"), "html", null, true);
        echo "\" class=\"rounded w-100\">
                    </div>
                    <div class=\"p-2\">
                        <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                        <span class=\"\"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p>
                        <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                            Lire la suite 
                            <i class=\"ri-arrow-right-s-line align-middle\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide blog__card bg-white rounded p-2\">
                    <div class=\"blog__img rounded\">
                        <img alt=\"\" src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/blank-img.jpg"), "html", null, true);
        echo "\" class=\"rounded w-100\">
                    </div>
                    <div class=\"p-2\">
                        <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                        <span class=\"\"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p>
                        <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                            Lire la suite 
                            <i class=\"ri-arrow-right-s-line align-middle\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide blog__card bg-white rounded p-2\">
                    <div class=\"blog__img rounded\">
                        <img alt=\"\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/blank-img.jpg"), "html", null, true);
        echo "\" class=\"rounded w-100\">
                    </div>
                    <div class=\"p-2\">
                        <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                        <span class=\"\"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p>
                        <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                            Lire la suite 
                            <i class=\"ri-arrow-right-s-line align-middle\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide blog__card bg-white rounded p-2\">
                    <div class=\"blog__img rounded\">
                        <img alt=\"\" src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/blank-img.jpg"), "html", null, true);
        echo "\" class=\"rounded w-100\">
                    </div>
                    <div class=\"p-2\">
                        <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                        <span class=\"\"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p>
                        <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                            Lire la suite 
                            <i class=\"ri-arrow-right-s-line align-middle\"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"swiper-button-next bg-white rounded text-muted\" style=\"width: 40px; height: 40px;\">
                <i class=\"ri-arrow-right-line fw-bold\"></i>
            </div>
            <div class=\"swiper-button-prev bg-white rounded text-muted\" style=\"width: 40px; height: 40px;\">
                <i class=\"ri-arrow-left-line fw-bold\"></i>
            </div>
        </div>
    </div>
</section>
<!-- End:: Blog section -->

<!-- Begin:: Contact section -->
";
        // line 334
        $this->loadTemplate("front/_contact.html.twig", "front/home.html.twig", 334)->display(twig_array_merge($context, ["contactTitle" => "Et si on gardait le contact"]));
        // line 335
        echo "<!-- End:: Contact section -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 339
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 340
        echo "<script type=\"text/javascript\">
    var swiper = new Swiper(\".homeCarrousel\", {
        loop: true,
        cssMode: true,
        autoplay: {
            delay: 7000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: \".swiper-button-next\",
            prevEl: \".swiper-button-prev\",
        },
        pagination: {
            el: \".swiper-pagination\",
        }
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
        return "front/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 340,  496 => 339,  484 => 335,  482 => 334,  454 => 309,  437 => 295,  420 => 281,  403 => 267,  386 => 253,  369 => 239,  322 => 195,  266 => 142,  255 => 134,  252 => 133,  233 => 113,  222 => 97,  211 => 89,  206 => 86,  196 => 85,  110 => 7,  100 => 6,  81 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title \"Bienvenue\" %}
{% block description \"\" %}

{% block stylesheets %}
<style type=\"text/css\">
/* -- Carrousel slide -- */
.homeCarrousel .swiper-slide {
    position: relative;
    display: flex;
    align-items: center;
    height: 100vh;
}

/* -- About -- */
#about img {
    max-height: 700px;
    object-fit: cover; 
    object-position: top;
    border: 15px solid #fff;
    z-index: var(--z-tooltip);
}

/* -- Services -- */
.service__icon {
    padding: .5em;
    font-size: 30px;
    display: inline-block;
    margin-bottom: 1rem;
    background-color: var(--seconde-color-light);
}
.service__icon svg {
    width: 1em;
    height: 1em;
    fill: var(--primary-color);
}
i.ri-checkbox-circle-fill {
    color: var(--seconde-color);
    font-size: 20px;
}

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
#blog .swiper-button-next:hover, #blog .swiper-button-prev:hover {
    color: var(--seconde-color) !important;
}

/* -- Contact -- */
#contact > .row {
    box-shadow: 0px 5px 65px 0px rgba(36, 42.000000000000014, 76, 0.1);
}
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
<section class=\"swiper homeCarrousel h-100\">
    <div class=\"swiper-wrapper text-white\">
        <div class=\"swiper-slide\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.5) 100%, rgb(255, 255, 255)), url({{asset('assets/media/illustrations/home-cover-1.jpg')}}); background-size: cover;\">
            <div class=\"container\">
                <div class=\"w-100 w-sm-50\">
                    <span class=\"text-uppercase\">Mission</span>
                    <h1 class=\"ff-title fw-bold fs-biggest text-white\">Votre confiance, notre expertise, votre satisfaction</h1>
                </div>
            </div>
        </div>
        <div class=\"swiper-slide\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.5) 100%, rgb(255, 255, 255)), url({{asset('assets/media/illustrations/home-cover-2.jpeg')}}); background-size: cover;\">
            <div class=\"container\">
                <div class=\"w-100 w-sm-50\">
                    <span class=\"text-uppercase\">Expertise</span>
                    <h1 class=\"ff-title fw-bold fs-biggest text-white\">Gestion immobilière pour tous vos besoins</h1>
                </div>
            </div>
        </div>
        {# <div class=\"swiper-slide\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.5) 100%, rgb(255, 255, 255)), url({{asset('assets/media/illustrations/home-cover-3.jpg')}}); background-size: cover;\">
            <div class=\"container\">
                <div class=\"w-100 w-sm-50\">
                    <span class=\"text-uppercase\">Expertise</span>
                    <h1 class=\"ff-title fw-bold fs-biggest text-white\">Votre source pour tous vos besoins immobiliers</h1>
                </div>
            </div>
        </div> #}
    </div>

    <div class=\"swiper-button-next rounded-circle text-white\" style=\"padding: 35px; background: rgba(0,0,0,0.5);\">
        <i class=\"ri-arrow-right-s-line fs-3\"></i>
    </div>
    <div class=\"swiper-button-prev rounded-circle text-white\" style=\"padding: 35px; background: rgba(0,0,0,0.5);\">
        <i class=\"ri-arrow-left-s-line fs-3\"></i>
    </div>
</section>
<!-- End:: Carrousel -->

<!-- Begin:: About section -->
<section id=\"about\" class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6 d-flex align-items-center\">
            <div class=\"py-5 py-sm-6 pe-0 pe-sm-5\">
                <h2 class=\"section__title\">Conseil I-mmobilier</h2>
                {# <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> #}
                <p>Votre projet immobilier partout en France et en Côte d'Ivoire.
                Achat, vente, location, location saisonnière, projet de construction, Conseil I-mmobilier s'occupe de tout Contactez-nous et découvrez nos solutions d'accompagnement sur mesure... <a href=\"{{path('app_about')}}\" class=\"btn btn-link text-muted\">En savoir plus</a></p>
                <p class=\"ff-title d-flex flex-column m-0\">
                    <strong>Mme Barry Indira</strong>
                    <span>Conseil Immobilier</span>
                </p>
            </div>
        </div>
        <div class=\"col-sm-6 position-relative\">
            <img alt=\"Mme Indira Barry\" src=\"{{asset('assets/media/illustrations/indira.jpeg')}}\" class=\"position-relative position-sm-absolute bottom-0 end-0\">
        </div>
    </div>
</section>
<!-- End:: About section -->

<!-- Begin:: Services section -->
<section id=\"services\" class=\"container section\">
    <div class=\"row\">
        <div class=\"col-lg-6 row d-none d-lg-flex\">
            <div class=\"col-6\">
                <div class=\"rounded shadow mb-4 p-4\">
                    <span class=\"service__icon rounded\">
                        <svg id=\"Capa_1\" enable-background=\"new 0 0 512 512\" height=\"512\" viewBox=\"0 0 512 512\" width=\"512\" xmlns=\"http://www.w3.org/2000/svg\"><g><path d=\"m256.396 204.495c-25.57 0-50.014 11.003-67.063 30.189l22.425 19.928c11.361-12.785 27.631-20.117 44.638-20.117s33.277 7.333 44.638 20.117l22.425-19.928c-17.05-19.185-41.493-30.189-67.063-30.189z\"></path><path d=\"m343.285 217.108 22.425-19.928c-27.785-31.267-67.629-49.2-109.314-49.2-41.686 0-81.529 17.933-109.314 49.2l22.425 19.928c22.097-24.866 53.768-39.127 86.89-39.127s64.791 14.261 86.888 39.127z\"></path><path d=\"m467.66 254.318 23.151 23.151 21.19-21.19-61.091-61.091v-155.518h-104.63v50.887l-90.558-90.557-255.488 255.488 21.19 21.19 22.359-22.359v227.714h-43.783v29.967h511.443v-29.967h-43.783zm-91.414-184.68h44.695v95.583l-44.695-44.696zm-302.495 154.713 181.971-181.97 181.971 181.97v257.682h-166.693v-43.486c30.489-6.858 53.341-34.133 53.341-66.662v-48.745h-23.339v-38.079h-30v38.079h-30.004v-38.079h-30v38.079h-23.339v48.745c0 32.529 22.852 59.804 53.341 66.662v43.486h-167.249zm143.908 128.789h76.682v18.745c0 21.141-17.2 38.341-38.341 38.341s-38.341-17.2-38.341-38.341z\"></path></g></svg>
                    </span>
                    <h4 class=\"ff-title\">Compréhension de votre projet</h4>
                    <p>Nous prenons le temps de comprendre votre projet et de vous proposer la meilleure offre.</p>
                </div>
                <div class=\"rounded shadow p-4\">
                    <span class=\"service__icon rounded\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512.746 512.746\"><path d=\"M507.819 182.697l-59.008-59.009a7.5 7.5 0 0 0-10.607 10.607l59.009 59.009c.44.44.533.943.533 1.287s-.093.847-.534 1.287l-24.446 24.446c-.44.441-.943.534-1.287.534s-.847-.093-1.287-.534l-96.733-96.731a1.823 1.823 0 0 1 0-2.575l24.447-24.447a1.82 1.82 0 0 1 2.574 0l12.852 12.852a7.5 7.5 0 0 0 10.607-10.607l-12.853-12.852c-6.56-6.56-17.23-6.556-23.788 0l-24.447 24.447c-5.117 5.117-6.222 12.732-3.353 18.951-17.26 13.206-42.859 11.164-65.525 9.352-2.126-.17-30.966-2.428-36.537-2.825-10.515-.752-22.923-1.517-35.475-1.517l-.631.001c-4.31.009-8.589.879-12.621 2.497-10.422.544-20.559 1.526-30.572 3.772-7.191 1.612-14.549-.48-19.671-5.604l-5.363-5.363c3.053-6.274 1.995-14.061-3.208-19.264l-24.447-24.447c-6.559-6.557-17.229-6.557-23.789 0L4.928 182.697A16.708 16.708 0 0 0 0 194.592c0 4.492 1.75 8.717 4.927 11.895l24.446 24.446a16.715 16.715 0 0 0 11.895 4.927c2.676 0 5.249-.634 7.569-1.806 0 0 21.693 21.115 24.428 23.857 3.734 3.743 4.374 9.713 5.114 16.625.392 3.65.796 7.425 1.712 11.178 2.935 12.038 8.16 23.573 15.53 34.287a7.5 7.5 0 0 0 12.358-8.502c-6.333-9.207-10.813-19.077-13.315-29.339-.68-2.787-1.015-5.913-1.369-9.223-.911-8.501-1.944-18.135-9.409-25.62-2.827-2.834-23.832-23.276-23.832-23.276l83.102-83.102 4.705 4.705c8.777 8.776 21.319 12.377 33.562 9.634a122.474 122.474 0 0 1 8.462-1.571c-3.28 6.009-4.852 12.783-4.413 19.508 1.223 18.705 17.084 33.69 36.112 34.117l13.509.298.239.002 16.17-.16c11.891 11.98 106.839 107.732 112.49 112.996 5.138 4.787 10.943 10.318 11.168 17.843.192 6.422-4.76 12.999-10.797 15.001-5.924 1.964-12.648.48-17.079-3.946l-91.745-91.745a7.5 7.5 0 0 0-10.607 10.607l111.169 111.168c4.716 6.721 3.772 15.909-2.285 21.567-6.432 6.008-16.893 5.665-23.328-.77L221.689 291.469a7.5 7.5 0 0 0-10.607 10.607l86.5 86.501c6.361 6.454 6.337 16.876-.082 23.294-6.445 6.447-16.938 6.448-23.389-.003l-86.396-86.425a7.5 7.5 0 0 0-10.607 10.607l40.624 40.719c3.124 3.123 4.844 7.275 4.844 11.692s-1.72 8.569-4.844 11.692c-6.447 6.449-16.938 6.447-23.384.002-.396-.396-39.823-39.845-63.716-63.986a7.5 7.5 0 0 0-10.662 10.55c23.919 24.169 63.373 63.644 63.77 64.041 12.297 12.295 32.303 12.295 44.6 0a31.356 31.356 0 0 0 8.38-15.033l26.788 26.75c6.148 6.147 14.224 9.222 22.3 9.222s16.151-3.074 22.3-9.222a31.357 31.357 0 0 0 8.385-15.055l3.394 3.384c12.08 12.082 31.894 12.584 44.168 1.117 11.773-10.997 13.397-29.01 3.777-41.899-.216-.289-1.567-1.677-1.567-1.677 3.979-.309 10.025-3.636 15.012-8.375.314-.298 31.688-31.861 32.165-32.439 14.008-17.122 22.213-37.178 23.731-57.998.387-5.297 2.617-10.193 6.241-13.752l21.822-21.126a16.8 16.8 0 0 0 6.244 1.202c4.492 0 8.717-1.75 11.895-4.927l24.446-24.446a16.715 16.715 0 0 0 4.927-11.895 16.721 16.721 0 0 0-4.929-11.894zm-368.531-59.104l-96.733 96.733c-.44.44-.943.533-1.287.533s-.847-.093-1.287-.534l-24.446-24.446c-.441-.44-.534-.943-.534-1.287s.093-.847.534-1.287l96.731-96.733a1.82 1.82 0 0 1 2.575 0l24.447 24.447c.71.709.71 1.865 0 2.574zm293.654 121.451c-6.267 6.151-10.078 14.462-10.731 23.4-1.289 17.694-8.315 34.815-20.296 49.489-.487.532-2.799 2.938-12.762 13.01a31.669 31.669 0 0 0-2.714-6.834c-2.464-4.606-6.123-8.159-9.757-11.82L272.087 206.842c9.862-.362 20.323-.916 27.667-2.152.323.211.679.51.843.724 3.578 7.601 15.092 23.582 33.521 30.484a7.502 7.502 0 0 0 2.63.479 7.5 7.5 0 0 0 2.631-14.525c-12.874-4.822-22.313-16.596-25.238-22.885-2.475-5.317-9.638-10.422-15.966-9.229-24.813 4.675-51.283 3.151-76.261 2.601-11.323-.254-20.757-9.083-21.477-20.1-.374-5.71 1.814-11.555 6.003-16.034 4.047-4.329 9.484-6.818 14.919-6.829 12.295.011 24.588.732 35.007 1.477 5.521.395 11.038.834 16.556 1.272 4.555.362 9.109.724 13.665 1.062 2.027.15 4.093.315 6.19.483 24.417 1.949 54.688 4.357 76.566-12.974l84.305 84.303z\"></path></svg>
                    </span>
                    <h4 class=\"ff-title\">Organisation des visites</h4>
                    <p>Nous organisons pour vous les visites et visitons ave vous le cas éch@ant afin de vous apporter les meilleurs conseils.</p>
                </div>
            </div>
            <div class=\"col-6 d-flex align-items-center\">
                <div class=\"rounded shadow p-4\">
                    <span class=\"service__icon rounded\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"Layer_1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512.004 512.004\" style=\"enable-background:new 0 0 512.004 512.004;\" xml:space=\"preserve\"><g><g><g><path d=\"M469.336,341.337c-4.719,0-8.533,3.823-8.533,8.533v145.067h-59.733c-4.719,0-8.533,3.823-8.533,8.533     s3.814,8.533,8.533,8.533h68.267c4.719,0,8.533-3.823,8.533-8.533v-153.6C477.869,345.16,474.054,341.337,469.336,341.337z\"></path><path d=\"M443.735,418.137V349.87c0-4.71-3.814-8.533-8.533-8.533h-51.2c-4.719,0-8.533,3.823-8.533,8.533v68.267     c0,4.71,3.814,8.533,8.533,8.533h51.2C439.921,426.67,443.735,422.847,443.735,418.137z M426.669,409.603h-34.133v-51.2h34.133     V409.603z\"></path><path d=\"M332.802,145.07c4.719,0,8.533-3.823,8.533-8.533V93.87c0-4.71-3.814-8.533-8.533-8.533h-256     c-4.719,0-8.533,3.823-8.533,8.533v298.667c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533V375.47h8.533     c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533h-8.533v-51.2h34.133v34.133c0,4.71,3.814,8.533,8.533,8.533     s8.533-3.823,8.533-8.533v-34.133h34.133c4.719,0,8.533-3.823,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533v-51.2h34.133     c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533v-51.2     h34.133v17.067c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533V170.67h17.067c4.719,0,8.533-3.823,8.533-8.533     c0-4.71-3.814-8.533-8.533-8.533h-17.067v-51.2h34.133v34.133C324.269,141.247,328.083,145.07,332.802,145.07z M119.469,290.137     H85.335v-51.2h34.133V290.137z M119.469,221.87H85.335v-51.2h34.133V221.87z M119.469,153.603H85.335v-51.2h34.133V153.603z      M170.669,290.137h-34.133v-51.2h34.133V290.137z M170.669,221.87h-34.133v-51.2h34.133V221.87z M170.669,153.603h-34.133v-51.2     h34.133V153.603z M221.869,221.87h-34.133v-51.2h34.133V221.87z M221.869,153.603h-34.133v-51.2h34.133V153.603z      M273.069,153.603h-34.133v-51.2h34.133V153.603z\"></path><path d=\"M42.669,435.203c4.719,0,8.533-3.823,8.533-8.533V68.27h59.733c4.719,0,8.533-3.823,8.533-8.533v-25.6h59.733     c4.719,0,8.533-3.823,8.533-8.533V17.07h34.133v8.533c0,4.71,3.814,8.533,8.533,8.533h59.733v17.067H145.069     c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h213.333v34.133c0,4.71,3.814,8.533,8.533,8.533     s8.533-3.823,8.533-8.533V59.737c0-4.71-3.814-8.533-8.533-8.533h-59.733v-25.6c0-4.71-3.814-8.533-8.533-8.533h-59.733V8.537     c0-4.71-3.814-8.533-8.533-8.533h-51.2c-4.719,0-8.533,3.823-8.533,8.533v8.533h-59.733c-4.719,0-8.533,3.823-8.533,8.533v25.6     H42.669c-4.719,0-8.533,3.823-8.533,8.533V426.67C34.135,431.38,37.95,435.203,42.669,435.203z\"></path><path d=\"M503.469,187.737h-59.733v-8.533c0-4.71-3.814-8.533-8.533-8.533h-34.133c-4.719,0-8.533,3.823-8.533,8.533v17.067     c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533v-8.533h17.067v8.533c0,4.71,3.814,8.533,8.533,8.533h59.733     v115.934l-130.5-130.5c-3.337-3.336-8.73-3.336-12.066,0c-3.337,3.337-3.337,8.73,0,12.066L497.436,347.37     c1.63,1.63,3.814,2.5,6.033,2.5c1.101,0,2.21-0.213,3.268-0.649c3.192-1.323,5.265-4.437,5.265-7.885V196.27     C512.002,191.559,508.188,187.737,503.469,187.737z\"></path><path d=\"M366.935,477.87h-85.333c-4.719,0-8.533,3.823-8.533,8.533v8.533h-85.333V375.47c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533v128c0,4.71,3.814,8.533,8.533,8.533h102.4c4.719,0,8.533-3.823,8.533-8.533v-8.533h68.267v8.533     c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-17.067C375.469,481.693,371.654,477.87,366.935,477.87z\"></path><path d=\"M509.502,2.503c-3.336-3.336-8.73-3.336-12.066,0L2.502,497.437c-3.336,3.337-3.336,8.73,0,12.066     c1.664,1.664,3.849,2.5,6.033,2.5c2.185,0,4.369-0.836,6.033-2.5L509.502,14.57C512.838,11.233,512.838,5.84,509.502,2.503z\"></path><path d=\"M349.869,460.803c4.719,0,8.533-3.823,8.533-8.533v-102.4c0-4.71-3.814-8.533-8.533-8.533h-51.2     c-4.719,0-8.533,3.823-8.533,8.533v102.4c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-93.867h34.133v34.133h-8.533     c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h8.533v42.667C341.336,456.98,345.15,460.803,349.869,460.803z\"></path><path d=\"M213.336,341.337c-4.719,0-8.533,3.823-8.533,8.533v68.267c0,4.71,3.814,8.533,8.533,8.533h51.2     c4.719,0,8.533-3.823,8.533-8.533V349.87c0-4.71-3.814-8.533-8.533-8.533H213.336z M256.002,409.603h-34.133v-51.2h34.133     V409.603z\"></path></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                    </span>
                    <h4 class=\"ff-title\">Accompagnement dans la recherche de financement</h4>
                    <p>Nous travailions ave des partenaires financier pouvant vous apporter une solution de financement.</p>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6 d-flex align-items-center mb-4 mb-lg-0\">
            <div class=\"text-center text-lg-end\">
                <h2 class=\"section__title\">Offres et Services</h2>
                <p>Découvrez l'excellence du conseil immobilier pour concrétiser votre projet, où que vous soyez en France et en Côte d'Ivoire. 
                Que vous souhaitiez acheter, vendre ou investir, bénéficiez d'un accompagnement sur mesure, basé sur une connaissance approfondie des marchés locaux, pour assurer le succès de votre démarche immobilière :</p>
                <div class=\"mb-4 d-flex justify-content-end\">
                    <div>
                        <span class=\"d-inline-block\">Investissement Locatif <i class=\"ri-checkbox-circle-fill align-middle\"></i></span>
                        <span class=\"d-inline-block\">Résidence secondaire <i class=\"ri-checkbox-circle-fill align-middle\"></i></span>
                        <span class=\"d-inline-block\">Location saisonnière <i class=\"ri-checkbox-circle-fill align-middle\"></i></span>
                    </div>
                    <div>
                        <span class=\"d-inline-block\">Logement étudiant <i class=\"ri-checkbox-circle-fill align-middle\"></i></span>
                        <span class=\"d-inline-block\">Achat de terrain <i class=\"ri-checkbox-circle-fill align-middle\"></i></span>
                        <span class=\"d-inline-block\">Projet de construction <i class=\"ri-checkbox-circle-fill align-middle\"></i></span>
                    </div>
                </div>
                <a href=\"{{path('app_services')}}\" class=\"btn btn-secondary\">Consulter nos services</a>
            </div>
        </div>
        <div class=\"col-lg-6 row d-flex d-lg-none\">
            <div class=\"col-sm-4\">
                <div class=\"rounded shadow mb-4 p-4\">
                    <span class=\"service__icon rounded\">
                        <svg id=\"Capa_1\" enable-background=\"new 0 0 512 512\" height=\"512\" viewBox=\"0 0 512 512\" width=\"512\" xmlns=\"http://www.w3.org/2000/svg\"><g><path d=\"m256.396 204.495c-25.57 0-50.014 11.003-67.063 30.189l22.425 19.928c11.361-12.785 27.631-20.117 44.638-20.117s33.277 7.333 44.638 20.117l22.425-19.928c-17.05-19.185-41.493-30.189-67.063-30.189z\"></path><path d=\"m343.285 217.108 22.425-19.928c-27.785-31.267-67.629-49.2-109.314-49.2-41.686 0-81.529 17.933-109.314 49.2l22.425 19.928c22.097-24.866 53.768-39.127 86.89-39.127s64.791 14.261 86.888 39.127z\"></path><path d=\"m467.66 254.318 23.151 23.151 21.19-21.19-61.091-61.091v-155.518h-104.63v50.887l-90.558-90.557-255.488 255.488 21.19 21.19 22.359-22.359v227.714h-43.783v29.967h511.443v-29.967h-43.783zm-91.414-184.68h44.695v95.583l-44.695-44.696zm-302.495 154.713 181.971-181.97 181.971 181.97v257.682h-166.693v-43.486c30.489-6.858 53.341-34.133 53.341-66.662v-48.745h-23.339v-38.079h-30v38.079h-30.004v-38.079h-30v38.079h-23.339v48.745c0 32.529 22.852 59.804 53.341 66.662v43.486h-167.249zm143.908 128.789h76.682v18.745c0 21.141-17.2 38.341-38.341 38.341s-38.341-17.2-38.341-38.341z\"></path></g></svg>
                    </span>
                    <h4 class=\"ff-title\">Compréhension de votre projet</h4>
                    <p>Nous prenons le temps de comprendre votre projet et de vous proposer la meilleure offre.</p>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"rounded shadow mb-4 p-4\">
                    <span class=\"service__icon rounded\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512.746 512.746\"><path d=\"M507.819 182.697l-59.008-59.009a7.5 7.5 0 0 0-10.607 10.607l59.009 59.009c.44.44.533.943.533 1.287s-.093.847-.534 1.287l-24.446 24.446c-.44.441-.943.534-1.287.534s-.847-.093-1.287-.534l-96.733-96.731a1.823 1.823 0 0 1 0-2.575l24.447-24.447a1.82 1.82 0 0 1 2.574 0l12.852 12.852a7.5 7.5 0 0 0 10.607-10.607l-12.853-12.852c-6.56-6.56-17.23-6.556-23.788 0l-24.447 24.447c-5.117 5.117-6.222 12.732-3.353 18.951-17.26 13.206-42.859 11.164-65.525 9.352-2.126-.17-30.966-2.428-36.537-2.825-10.515-.752-22.923-1.517-35.475-1.517l-.631.001c-4.31.009-8.589.879-12.621 2.497-10.422.544-20.559 1.526-30.572 3.772-7.191 1.612-14.549-.48-19.671-5.604l-5.363-5.363c3.053-6.274 1.995-14.061-3.208-19.264l-24.447-24.447c-6.559-6.557-17.229-6.557-23.789 0L4.928 182.697A16.708 16.708 0 0 0 0 194.592c0 4.492 1.75 8.717 4.927 11.895l24.446 24.446a16.715 16.715 0 0 0 11.895 4.927c2.676 0 5.249-.634 7.569-1.806 0 0 21.693 21.115 24.428 23.857 3.734 3.743 4.374 9.713 5.114 16.625.392 3.65.796 7.425 1.712 11.178 2.935 12.038 8.16 23.573 15.53 34.287a7.5 7.5 0 0 0 12.358-8.502c-6.333-9.207-10.813-19.077-13.315-29.339-.68-2.787-1.015-5.913-1.369-9.223-.911-8.501-1.944-18.135-9.409-25.62-2.827-2.834-23.832-23.276-23.832-23.276l83.102-83.102 4.705 4.705c8.777 8.776 21.319 12.377 33.562 9.634a122.474 122.474 0 0 1 8.462-1.571c-3.28 6.009-4.852 12.783-4.413 19.508 1.223 18.705 17.084 33.69 36.112 34.117l13.509.298.239.002 16.17-.16c11.891 11.98 106.839 107.732 112.49 112.996 5.138 4.787 10.943 10.318 11.168 17.843.192 6.422-4.76 12.999-10.797 15.001-5.924 1.964-12.648.48-17.079-3.946l-91.745-91.745a7.5 7.5 0 0 0-10.607 10.607l111.169 111.168c4.716 6.721 3.772 15.909-2.285 21.567-6.432 6.008-16.893 5.665-23.328-.77L221.689 291.469a7.5 7.5 0 0 0-10.607 10.607l86.5 86.501c6.361 6.454 6.337 16.876-.082 23.294-6.445 6.447-16.938 6.448-23.389-.003l-86.396-86.425a7.5 7.5 0 0 0-10.607 10.607l40.624 40.719c3.124 3.123 4.844 7.275 4.844 11.692s-1.72 8.569-4.844 11.692c-6.447 6.449-16.938 6.447-23.384.002-.396-.396-39.823-39.845-63.716-63.986a7.5 7.5 0 0 0-10.662 10.55c23.919 24.169 63.373 63.644 63.77 64.041 12.297 12.295 32.303 12.295 44.6 0a31.356 31.356 0 0 0 8.38-15.033l26.788 26.75c6.148 6.147 14.224 9.222 22.3 9.222s16.151-3.074 22.3-9.222a31.357 31.357 0 0 0 8.385-15.055l3.394 3.384c12.08 12.082 31.894 12.584 44.168 1.117 11.773-10.997 13.397-29.01 3.777-41.899-.216-.289-1.567-1.677-1.567-1.677 3.979-.309 10.025-3.636 15.012-8.375.314-.298 31.688-31.861 32.165-32.439 14.008-17.122 22.213-37.178 23.731-57.998.387-5.297 2.617-10.193 6.241-13.752l21.822-21.126a16.8 16.8 0 0 0 6.244 1.202c4.492 0 8.717-1.75 11.895-4.927l24.446-24.446a16.715 16.715 0 0 0 4.927-11.895 16.721 16.721 0 0 0-4.929-11.894zm-368.531-59.104l-96.733 96.733c-.44.44-.943.533-1.287.533s-.847-.093-1.287-.534l-24.446-24.446c-.441-.44-.534-.943-.534-1.287s.093-.847.534-1.287l96.731-96.733a1.82 1.82 0 0 1 2.575 0l24.447 24.447c.71.709.71 1.865 0 2.574zm293.654 121.451c-6.267 6.151-10.078 14.462-10.731 23.4-1.289 17.694-8.315 34.815-20.296 49.489-.487.532-2.799 2.938-12.762 13.01a31.669 31.669 0 0 0-2.714-6.834c-2.464-4.606-6.123-8.159-9.757-11.82L272.087 206.842c9.862-.362 20.323-.916 27.667-2.152.323.211.679.51.843.724 3.578 7.601 15.092 23.582 33.521 30.484a7.502 7.502 0 0 0 2.63.479 7.5 7.5 0 0 0 2.631-14.525c-12.874-4.822-22.313-16.596-25.238-22.885-2.475-5.317-9.638-10.422-15.966-9.229-24.813 4.675-51.283 3.151-76.261 2.601-11.323-.254-20.757-9.083-21.477-20.1-.374-5.71 1.814-11.555 6.003-16.034 4.047-4.329 9.484-6.818 14.919-6.829 12.295.011 24.588.732 35.007 1.477 5.521.395 11.038.834 16.556 1.272 4.555.362 9.109.724 13.665 1.062 2.027.15 4.093.315 6.19.483 24.417 1.949 54.688 4.357 76.566-12.974l84.305 84.303z\"></path></svg>
                    </span>
                    <h4 class=\"ff-title\">Organisation des visites</h4>
                    <p>Nous organisons pour vous les visites et visitons ave vous le cas éch@ant afin de vous apporter les meilleurs conseils.</p>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"rounded shadow p-4\">
                    <span class=\"service__icon rounded\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"Layer_1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512.004 512.004\" style=\"enable-background:new 0 0 512.004 512.004;\" xml:space=\"preserve\"><g><g><g><path d=\"M469.336,341.337c-4.719,0-8.533,3.823-8.533,8.533v145.067h-59.733c-4.719,0-8.533,3.823-8.533,8.533     s3.814,8.533,8.533,8.533h68.267c4.719,0,8.533-3.823,8.533-8.533v-153.6C477.869,345.16,474.054,341.337,469.336,341.337z\"></path><path d=\"M443.735,418.137V349.87c0-4.71-3.814-8.533-8.533-8.533h-51.2c-4.719,0-8.533,3.823-8.533,8.533v68.267     c0,4.71,3.814,8.533,8.533,8.533h51.2C439.921,426.67,443.735,422.847,443.735,418.137z M426.669,409.603h-34.133v-51.2h34.133     V409.603z\"></path><path d=\"M332.802,145.07c4.719,0,8.533-3.823,8.533-8.533V93.87c0-4.71-3.814-8.533-8.533-8.533h-256     c-4.719,0-8.533,3.823-8.533,8.533v298.667c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533V375.47h8.533     c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533h-8.533v-51.2h34.133v34.133c0,4.71,3.814,8.533,8.533,8.533     s8.533-3.823,8.533-8.533v-34.133h34.133c4.719,0,8.533-3.823,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533v-51.2h34.133     c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533v-51.2     h34.133v17.067c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533V170.67h17.067c4.719,0,8.533-3.823,8.533-8.533     c0-4.71-3.814-8.533-8.533-8.533h-17.067v-51.2h34.133v34.133C324.269,141.247,328.083,145.07,332.802,145.07z M119.469,290.137     H85.335v-51.2h34.133V290.137z M119.469,221.87H85.335v-51.2h34.133V221.87z M119.469,153.603H85.335v-51.2h34.133V153.603z      M170.669,290.137h-34.133v-51.2h34.133V290.137z M170.669,221.87h-34.133v-51.2h34.133V221.87z M170.669,153.603h-34.133v-51.2     h34.133V153.603z M221.869,221.87h-34.133v-51.2h34.133V221.87z M221.869,153.603h-34.133v-51.2h34.133V153.603z      M273.069,153.603h-34.133v-51.2h34.133V153.603z\"></path><path d=\"M42.669,435.203c4.719,0,8.533-3.823,8.533-8.533V68.27h59.733c4.719,0,8.533-3.823,8.533-8.533v-25.6h59.733     c4.719,0,8.533-3.823,8.533-8.533V17.07h34.133v8.533c0,4.71,3.814,8.533,8.533,8.533h59.733v17.067H145.069     c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h213.333v34.133c0,4.71,3.814,8.533,8.533,8.533     s8.533-3.823,8.533-8.533V59.737c0-4.71-3.814-8.533-8.533-8.533h-59.733v-25.6c0-4.71-3.814-8.533-8.533-8.533h-59.733V8.537     c0-4.71-3.814-8.533-8.533-8.533h-51.2c-4.719,0-8.533,3.823-8.533,8.533v8.533h-59.733c-4.719,0-8.533,3.823-8.533,8.533v25.6     H42.669c-4.719,0-8.533,3.823-8.533,8.533V426.67C34.135,431.38,37.95,435.203,42.669,435.203z\"></path><path d=\"M503.469,187.737h-59.733v-8.533c0-4.71-3.814-8.533-8.533-8.533h-34.133c-4.719,0-8.533,3.823-8.533,8.533v17.067     c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533v-8.533h17.067v8.533c0,4.71,3.814,8.533,8.533,8.533h59.733     v115.934l-130.5-130.5c-3.337-3.336-8.73-3.336-12.066,0c-3.337,3.337-3.337,8.73,0,12.066L497.436,347.37     c1.63,1.63,3.814,2.5,6.033,2.5c1.101,0,2.21-0.213,3.268-0.649c3.192-1.323,5.265-4.437,5.265-7.885V196.27     C512.002,191.559,508.188,187.737,503.469,187.737z\"></path><path d=\"M366.935,477.87h-85.333c-4.719,0-8.533,3.823-8.533,8.533v8.533h-85.333V375.47c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533v128c0,4.71,3.814,8.533,8.533,8.533h102.4c4.719,0,8.533-3.823,8.533-8.533v-8.533h68.267v8.533     c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-17.067C375.469,481.693,371.654,477.87,366.935,477.87z\"></path><path d=\"M509.502,2.503c-3.336-3.336-8.73-3.336-12.066,0L2.502,497.437c-3.336,3.337-3.336,8.73,0,12.066     c1.664,1.664,3.849,2.5,6.033,2.5c2.185,0,4.369-0.836,6.033-2.5L509.502,14.57C512.838,11.233,512.838,5.84,509.502,2.503z\"></path><path d=\"M349.869,460.803c4.719,0,8.533-3.823,8.533-8.533v-102.4c0-4.71-3.814-8.533-8.533-8.533h-51.2     c-4.719,0-8.533,3.823-8.533,8.533v102.4c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-93.867h34.133v34.133h-8.533     c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h8.533v42.667C341.336,456.98,345.15,460.803,349.869,460.803z\"></path><path d=\"M213.336,341.337c-4.719,0-8.533,3.823-8.533,8.533v68.267c0,4.71,3.814,8.533,8.533,8.533h51.2     c4.719,0,8.533-3.823,8.533-8.533V349.87c0-4.71-3.814-8.533-8.533-8.533H213.336z M256.002,409.603h-34.133v-51.2h34.133     V409.603z\"></path></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                    </span>
                    <h4 class=\"ff-title\">Accompagnement dans la recherche de financement</h4>
                    <p>Nous travailions ave des partenaires financier pouvant vous apporter une solution de financement.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Services section -->

<!-- Begin:: Blog section -->
<section id=\"blog\" class=\"section\">
    <div class=\"container-fluid bg-light\">
        <div class=\"blog__container container swiper py-4 py-md-5 py-lg-6\">
            <h2 class=\"section__title\">Notre Blog</h2>
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide blog__card bg-white rounded p-2\">
                    <div class=\"blog__img rounded\">
                        <img alt=\"\" src=\"{{asset('assets/media/illustrations/blank-img.jpg')}}\" class=\"rounded w-100\">
                    </div>
                    <div class=\"p-2\">
                        <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                        <span class=\"\"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p>
                        <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                            Lire la suite 
                            <i class=\"ri-arrow-right-s-line align-middle\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide blog__card bg-white rounded p-2\">
                    <div class=\"blog__img rounded\">
                        <img alt=\"\" src=\"{{asset('assets/media/illustrations/blank-img.jpg')}}\" class=\"rounded w-100\">
                    </div>
                    <div class=\"p-2\">
                        <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                        <span class=\"\"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p>
                        <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                            Lire la suite 
                            <i class=\"ri-arrow-right-s-line align-middle\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide blog__card bg-white rounded p-2\">
                    <div class=\"blog__img rounded\">
                        <img alt=\"\" src=\"{{asset('assets/media/illustrations/blank-img.jpg')}}\" class=\"rounded w-100\">
                    </div>
                    <div class=\"p-2\">
                        <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                        <span class=\"\"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p>
                        <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                            Lire la suite 
                            <i class=\"ri-arrow-right-s-line align-middle\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide blog__card bg-white rounded p-2\">
                    <div class=\"blog__img rounded\">
                        <img alt=\"\" src=\"{{asset('assets/media/illustrations/blank-img.jpg')}}\" class=\"rounded w-100\">
                    </div>
                    <div class=\"p-2\">
                        <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                        <span class=\"\"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p>
                        <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                            Lire la suite 
                            <i class=\"ri-arrow-right-s-line align-middle\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide blog__card bg-white rounded p-2\">
                    <div class=\"blog__img rounded\">
                        <img alt=\"\" src=\"{{asset('assets/media/illustrations/blank-img.jpg')}}\" class=\"rounded w-100\">
                    </div>
                    <div class=\"p-2\">
                        <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                        <span class=\"\"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p>
                        <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                            Lire la suite 
                            <i class=\"ri-arrow-right-s-line align-middle\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide blog__card bg-white rounded p-2\">
                    <div class=\"blog__img rounded\">
                        <img alt=\"\" src=\"{{asset('assets/media/illustrations/blank-img.jpg')}}\" class=\"rounded w-100\">
                    </div>
                    <div class=\"p-2\">
                        <h4 class=\"text-primary h5 my-3\">Top 10 best appreci ating</h4>
                        <span class=\"\"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p>
                        <a href=\"\" class=\"btn btn-link btn-alt text-secondary\">
                            Lire la suite 
                            <i class=\"ri-arrow-right-s-line align-middle\"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"swiper-button-next bg-white rounded text-muted\" style=\"width: 40px; height: 40px;\">
                <i class=\"ri-arrow-right-line fw-bold\"></i>
            </div>
            <div class=\"swiper-button-prev bg-white rounded text-muted\" style=\"width: 40px; height: 40px;\">
                <i class=\"ri-arrow-left-line fw-bold\"></i>
            </div>
        </div>
    </div>
</section>
<!-- End:: Blog section -->

<!-- Begin:: Contact section -->
{% include 'front/_contact.html.twig' with {'contactTitle': 'Et si on gardait le contact'} %}
<!-- End:: Contact section -->

{% endblock %}

{% block javascripts %}
<script type=\"text/javascript\">
    var swiper = new Swiper(\".homeCarrousel\", {
        loop: true,
        cssMode: true,
        autoplay: {
            delay: 7000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: \".swiper-button-next\",
            prevEl: \".swiper-button-prev\",
        },
        pagination: {
            el: \".swiper-pagination\",
        }
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
", "front/home.html.twig", "/Users/mfofana/Desktop/WORKS/MyGITHUB/conseil-i-mmobilier/templates/front/home.html.twig");
    }
}
