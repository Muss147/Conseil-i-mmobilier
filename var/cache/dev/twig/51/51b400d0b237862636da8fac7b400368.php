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

/* front/services.html.twig */
class __TwigTemplate_3ca2aed2e26af5e576f4a7aecea80eec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/services.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/services.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/services.html.twig", 1);
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

        echo "Services";
        
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

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "<!-- Begin:: Carrousel -->
<section class=\"section\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.5) 100%, rgb(255, 255, 255)), url(";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/carrousel_img.jpeg"), "html", null, true);
        echo "); background-attachment: fixed; background-position: bottom; height: 500px;\">
    <div class=\"container h-100 d-flex align-items-center justify-content-center\">
        <div class=\"text-center text-white\">
            <h1 class=\"section__title text-white\">Services</h1>
            <p>Nous aidons nos clients à vendre, acheter ou louer <br>des biens immobiliers en toute tranquillité.</p>
        </div>
    </div>
</section>
<!-- End:: Carrousel -->

<!-- Begin:: Breadcrumbs -->
<section id=\"breadcrumbs\" class=\"container d-flex gap-2 pt-3\">
    <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"text-link\">Accueil</a>
    <i class=\"ri-arrow-right-s-line align-middle\"></i>
    <span class=\"text-secondary\">Services</span>
</section>
<!-- End:: Breadcrumbs -->

<!-- Begin:: services section -->
<section id=\"services\" class=\"container section\">
    <div class=\"row\">
        <div class=\"col-lg-6 d-flex align-items-center\">
            <div class=\"\">
                <h2 class=\"section__title\">Nos Services</h2>
                <p>Où que vous soyez en France et en Côte d'Ivoire, 
                notre équipe dédiée met à votre disposition une gamme complète de services, allant de l'évaluation précise de biens à des conseils stratégiques personnalisés. 
                Que vous souhaitiez acheter, vendre ou investir, notre expertise s'étend à travers les régions françaises et ivoiriennes. 
                Bénéficiez d'un accompagnement sur mesure, basé sur une connaissance approfondie des marchés locaux, pour assurer le succès de votre démarche immobilière.</p>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-3 mb-4\">
            <div class=\"rounded shadow h-100 mb-4 p-4\">
                <span class=\"service__icon rounded\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"Layer_1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\"><g><g><path d=\"M488.399,492h-21.933V173.536c0-14.823-12.06-26.882-26.882-26.882H390.56c-14.823,0-26.882,12.06-26.882,26.882V492    h-55.692V317.825c0-14.823-12.059-26.882-26.882-26.882H232.08c-14.823,0-26.882,12.06-26.882,26.882V492h-55.692v-90.204    c0-14.823-12.06-26.882-26.882-26.882H73.599c-14.823,0-26.882,12.06-26.882,26.882V492H23.601c-5.523,0-10,4.477-10,10    s4.477,10,10,10h464.798c5.523,0,10-4.477,10-10S493.922,492,488.399,492z M129.504,492H66.716v-90.204    c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z M287.985,492h-62.788V317.825    c0-3.795,3.087-6.882,6.882-6.882h49.024c3.794,0,6.882,3.087,6.882,6.882V492z M446.466,492h-62.788V173.536    c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z\"></path></g></g><g><g><path d=\"M466.442,10.516c0.14-2.729-0.82-5.504-2.904-7.588c-2.084-2.084-4.859-3.045-7.588-2.904    C455.789,0.017,455.63,0,455.466,0h-60.5c-5.523,0-10,4.477-10,10s4.477,10,10,10h37.357l-98.857,98.858l-37.28-37.28    c-1.875-1.875-4.419-2.929-7.071-2.929c-2.652,0-5.196,1.054-7.071,2.929l-179.769,179.77c-3.905,3.905-3.905,10.237,0,14.143    c1.953,1.951,4.512,2.927,7.071,2.927s5.119-0.976,7.071-2.929L289.115,102.79l37.28,37.28c3.905,3.905,10.237,3.905,14.143,0    L446.466,34.143v33.81c0,5.523,4.477,10,10,10s10-4.477,10-10V11C466.466,10.837,466.449,10.678,466.442,10.516z\"></path></g></g><g><g><circle cx=\"75.64\" cy=\"303.31\" r=\"10\"></circle></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                </span>
                <h4 class=\"ff-title\">Compréhension de votre projet</h4>
                <p>Nous prenons le temps de comprendre votre projet et de vous proposer la meilleure offre.</p>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-3 mb-4\">
            <div class=\"rounded shadow h-100 mb-4 p-4\">
                <span class=\"service__icon rounded\">
                    <svg id=\"Capa_1\" enable-background=\"new 0 0 512 512\" height=\"512\" viewBox=\"0 0 512 512\" width=\"512\" xmlns=\"http://www.w3.org/2000/svg\"><g><path d=\"m256.396 204.495c-25.57 0-50.014 11.003-67.063 30.189l22.425 19.928c11.361-12.785 27.631-20.117 44.638-20.117s33.277 7.333 44.638 20.117l22.425-19.928c-17.05-19.185-41.493-30.189-67.063-30.189z\"></path><path d=\"m343.285 217.108 22.425-19.928c-27.785-31.267-67.629-49.2-109.314-49.2-41.686 0-81.529 17.933-109.314 49.2l22.425 19.928c22.097-24.866 53.768-39.127 86.89-39.127s64.791 14.261 86.888 39.127z\"></path><path d=\"m467.66 254.318 23.151 23.151 21.19-21.19-61.091-61.091v-155.518h-104.63v50.887l-90.558-90.557-255.488 255.488 21.19 21.19 22.359-22.359v227.714h-43.783v29.967h511.443v-29.967h-43.783zm-91.414-184.68h44.695v95.583l-44.695-44.696zm-302.495 154.713 181.971-181.97 181.971 181.97v257.682h-166.693v-43.486c30.489-6.858 53.341-34.133 53.341-66.662v-48.745h-23.339v-38.079h-30v38.079h-30.004v-38.079h-30v38.079h-23.339v48.745c0 32.529 22.852 59.804 53.341 66.662v43.486h-167.249zm143.908 128.789h76.682v18.745c0 21.141-17.2 38.341-38.341 38.341s-38.341-17.2-38.341-38.341z\"></path></g></svg>
                </span>
                <h4 class=\"ff-title\">Organisation des visites</h4>
                <p>Nous organisons pour vous les visites et visitons ave vous le cas éch@ant afin de vous apporter les meilleurs conseils.</p>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-3 mb-4\">
            <div class=\"rounded shadow h-100 mb-4 p-4\">
                <span class=\"service__icon rounded\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"Layer_1\" data-name=\"Layer 1\" viewBox=\"0 0 512 512\"><title>evaluating 2</title><path d=\"M86.485,143.253H344.646a6,6,0,0,0,0-12H86.485a6,6,0,0,0,0,12Z\"></path><path d=\"M344.646,192.86H168.627a6,6,0,0,0,0,12H344.646a6,6,0,1,0,0-12Z\"></path><path d=\"M255.463,254.467H168.627a6,6,0,0,0,0,12h86.836a6,6,0,1,0,0-12Z\"></path><path d=\"M213.219,316.073H86.485a6,6,0,0,0,0,12H213.219a6,6,0,0,0,0-12Z\"></path><path d=\"M212.045,377.68H86.485a6,6,0,0,0,0,12h125.56a6,6,0,1,0,0-12Z\"></path><path d=\"M108.428,268.507c-.052,0-.1-.008-.155-.008s-.1.006-.154.008a15.8,15.8,0,0,1-15.634-15.78,6,6,0,0,0-12,0,27.831,27.831,0,0,0,21.788,27.128v7.623a6,6,0,0,0,12,0v-7.623a27.786,27.786,0,0,0-6-54.917,15.788,15.788,0,1,1,15.789-15.788,6,6,0,1,0,12,0,27.831,27.831,0,0,0-21.789-27.128v-6.631a6,6,0,0,0-12,0v6.631a27.786,27.786,0,0,0,6,54.916,15.785,15.785,0,0,1,.155,31.569Z\"></path><path d=\"M397.584,262.847V68.806a29.5,29.5,0,0,0-29.469-29.47H291.453A35.387,35.387,0,0,0,256.637,10H174.5a35.317,35.317,0,0,0-34.821,29.336H63.016a29.5,29.5,0,0,0-29.469,29.47V452.128A29.5,29.5,0,0,0,63.016,481.6H285.973v-.843A123.329,123.329,0,1,0,397.584,262.847ZM157.991,28.833A23.178,23.178,0,0,1,174.5,22h82.142a23.337,23.337,0,0,1,0,46.673H174.5a23.339,23.339,0,0,1-16.5-39.84ZM63.016,469.6a17.489,17.489,0,0,1-17.469-17.469V68.806a17.49,17.49,0,0,1,17.469-17.47h76.662A35.387,35.387,0,0,0,174.5,80.673h82.142a35.349,35.349,0,0,0,34.821-29.337h76.657a17.489,17.489,0,0,1,17.469,17.47V259.122A123.3,123.3,0,0,0,271.87,469.6ZM355.107,490A111.346,111.346,0,1,1,466.453,378.654,111.472,111.472,0,0,1,355.107,490Z\"></path><path d=\"M397.8,343.12l-58.342,58.341-27.049-27.049a6,6,0,0,0-8.486,8.484l31.292,31.292a6,6,0,0,0,8.486,0L406.288,351.6a6,6,0,1,0-8.485-8.484Z\"></path></svg>
                </span>
                <h4 class=\"ff-title\">Accompagnement dans la recherche de financement</h4>
                <p>Nous travailions ave des partenaires financier pouvant vous apporter une solution de financement.</p>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-3 mb-4\">
            <div class=\"rounded shadow h-100 mb-4 p-4\">
                <span class=\"service__icon rounded\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"472pt\" viewBox=\"-72 0 472 472\" width=\"472pt\"><path d=\"m211.425781 0h-94.617187c-12.789063.015625-23.148438 10.375-23.164063 23.160156v8.273438h-47.796875c-25.308594.027344-45.8203122 20.539062-45.847656 45.847656v348.871094c.0273438 25.308594 20.539062 45.820312 45.847656 45.847656h236.539063c25.308593-.027344 45.820312-20.539062 45.847656-45.847656v-348.871094c-.027344-25.308594-20.539063-45.820312-45.847656-45.847656h-47.800781v-8.273438c-.015626-12.785156-10.375-23.144531-23.160157-23.160156zm-105.78125 23.160156c.007813-6.160156 5-11.152344 11.164063-11.160156h94.617187c6.164063.007812 11.15625 5 11.164063 11.160156v26.855469c-.007813 6.160156-5 11.152344-11.164063 11.160156h-94.617187c-6.164063-.007812-11.15625-5-11.164063-11.160156zm176.742188 20.273438c18.683593.019531 33.828125 15.160156 33.847656 33.847656v348.871094c-.019531 18.683594-15.164063 33.824218-33.847656 33.847656h-236.539063c-18.683594-.023438-33.828125-15.164062-33.847656-33.847656v-348.871094c.019531-18.6875 15.164062-33.828125 33.847656-33.847656h47.800782v6.582031c.015624 12.785156 10.375 23.144531 23.160156 23.160156h94.617187c12.785157-.015625 23.148438-10.375 23.164063-23.160156v-6.582031zm0 0\"></path><path d=\"m160.585938 138.367188-110 80.085937c-2.097657 1.527344-2.972657 4.234375-2.171876 6.703125.804688 2.46875 3.105469 4.140625 5.703126 4.144531h26.21875v99.480469c0 3.3125 2.6875 6 6 6h155.5625c3.3125 0 6-2.6875 6-6v-99.480469h26.21875c2.597656 0 4.898437-1.671875 5.703124-4.144531.804688-2.46875-.074218-5.175781-2.171874-6.707031l-110-80.082031c-2.105469-1.53125-4.957032-1.53125-7.0625 0zm81.3125 78.933593c-3.3125 0-6 2.683594-6 6v99.480469h-143.5625v-99.480469c0-3.316406-2.6875-6-6-6h-13.78125l91.5625-66.660156 91.5625 66.660156zm0 0\"></path><path d=\"m138.378906 249.242188c-2.335937-2.328126-6.113281-2.332032-8.457031-.011719-2.34375 2.320312-2.375 6.097656-.066406 8.457031l21.546875 21.757812c1.125 1.136719 2.652344 1.777344 4.25 1.78125h.011718c1.59375 0 3.121094-.632812 4.246094-1.757812l38.449219-38.453125c2.34375-2.34375 2.34375-6.140625 0-8.484375s-6.140625-2.34375-8.484375 0l-34.1875 34.1875zm0 0\"></path></svg>
                </span>
                <h4 class=\"ff-title\">Recherche du bien idéal selon vos critères</h4>
                <p>Nous recherchons pour vous le meilleur bien selon vos criteres.
                Grâce à nos partenaire locaux, nous vous envoyons une selection de bien pouvant vous correspondre.</p>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-3 mb-4\">
            <div class=\"rounded shadow h-100 mb-4 p-4\">
                <span class=\"service__icon rounded\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"Capa_1\" height=\"512\" viewBox=\"0 0 512.746 512.746\" width=\"512\"><g><path d=\"m507.819 182.697-59.008-59.009c-2.929-2.927-7.677-2.929-10.607 0-2.929 2.93-2.929 7.678 0 10.607l59.009 59.009c.44.44.533.943.533 1.287s-.093.847-.534 1.287l-24.446 24.446c-.44.441-.943.534-1.287.534s-.847-.093-1.287-.534l-96.733-96.731c-.71-.71-.71-1.866 0-2.575l24.447-24.447c.708-.71 1.864-.712 2.574 0l12.852 12.852c2.93 2.928 7.678 2.928 10.607 0 2.929-2.93 2.929-7.678 0-10.607l-12.853-12.852c-6.56-6.56-17.23-6.556-23.788 0l-24.447 24.447c-5.117 5.117-6.222 12.732-3.353 18.951-17.26 13.206-42.859 11.164-65.525 9.352-2.126-.17-30.966-2.428-36.537-2.825-10.515-.752-22.923-1.517-35.475-1.517-.21 0-.422.001-.631.001-4.31.009-8.589.879-12.621 2.497-10.422.544-20.559 1.526-30.572 3.772-7.191 1.612-14.549-.48-19.671-5.604l-5.363-5.363c3.053-6.274 1.995-14.061-3.208-19.264l-24.447-24.447c-6.559-6.557-17.229-6.557-23.789 0l-96.731 96.733c-3.178 3.177-4.928 7.401-4.928 11.895 0 4.492 1.75 8.717 4.927 11.895l24.446 24.446c3.178 3.177 7.402 4.927 11.895 4.927 2.676 0 5.249-.634 7.569-1.806 0 0 21.693 21.115 24.428 23.857 3.734 3.743 4.374 9.713 5.114 16.625.392 3.65.796 7.425 1.712 11.178 2.935 12.038 8.16 23.573 15.53 34.287 2.347 3.412 7.015 4.275 10.43 1.928 3.412-2.348 4.275-7.017 1.928-10.43-6.333-9.207-10.813-19.077-13.315-29.339-.68-2.787-1.015-5.913-1.369-9.223-.911-8.501-1.944-18.135-9.409-25.62-2.827-2.834-23.832-23.276-23.832-23.276l83.102-83.102 4.705 4.705c8.777 8.776 21.319 12.377 33.562 9.634 2.782-.624 5.604-1.138 8.462-1.571-3.28 6.009-4.852 12.783-4.413 19.508 1.223 18.705 17.084 33.69 36.112 34.117l13.509.298c.08.001.159.002.239.002l16.17-.16c11.891 11.98 106.839 107.732 112.49 112.996 5.138 4.787 10.943 10.318 11.168 17.843.192 6.422-4.76 12.999-10.797 15.001-5.924 1.964-12.648.48-17.079-3.946l-91.745-91.745c-2.93-2.928-7.678-2.928-10.607 0-2.929 2.93-2.929 7.678 0 10.607l111.169 111.168c4.716 6.721 3.772 15.909-2.285 21.567-6.432 6.008-16.893 5.665-23.328-.77l-108.799-108.724c-2.93-2.927-7.678-2.929-10.607 0-2.929 2.93-2.929 7.678 0 10.607l86.5 86.501c6.361 6.454 6.337 16.876-.082 23.294-6.445 6.447-16.938 6.448-23.389-.003l-86.396-86.425c-2.93-2.928-7.678-2.928-10.607 0-2.929 2.93-2.929 7.678 0 10.607 0 0 40.396 40.49 40.624 40.719 3.124 3.123 4.844 7.275 4.844 11.692s-1.72 8.569-4.844 11.692c-6.447 6.449-16.938 6.447-23.384.002-.396-.396-39.823-39.845-63.716-63.986-2.913-2.944-7.662-2.968-10.606-.056-2.944 2.914-2.969 7.663-.056 10.606 23.919 24.169 63.373 63.644 63.77 64.041 12.297 12.295 32.303 12.295 44.6 0 4.29-4.291 7.084-9.521 8.38-15.033l26.788 26.75c6.148 6.147 14.224 9.222 22.3 9.222s16.151-3.074 22.3-9.222c4.295-4.296 7.091-9.534 8.385-15.055l3.394 3.384c12.08 12.082 31.894 12.584 44.168 1.117 11.773-10.997 13.397-29.01 3.777-41.899-.216-.289-1.567-1.677-1.567-1.677 3.979-.309 10.025-3.636 15.012-8.375.314-.298 31.688-31.861 32.165-32.439 14.008-17.122 22.213-37.178 23.731-57.998.387-5.297 2.617-10.193 6.241-13.752l21.822-21.126c1.96.783 4.069 1.202 6.244 1.202 4.492 0 8.717-1.75 11.895-4.927l24.446-24.446c3.177-3.178 4.927-7.402 4.927-11.895-.002-4.493-1.752-8.717-4.929-11.894zm-368.531-59.104-96.733 96.733c-.44.44-.943.533-1.287.533s-.847-.093-1.287-.534l-24.446-24.446c-.441-.44-.534-.943-.534-1.287s.093-.847.534-1.287l96.731-96.733c.355-.354.822-.532 1.288-.532.467 0 .933.177 1.287.532l24.447 24.447c.71.709.71 1.865 0 2.574zm293.654 121.451c-6.267 6.151-10.078 14.462-10.731 23.4-1.289 17.694-8.315 34.815-20.296 49.489-.487.532-2.799 2.938-12.762 13.01-.619-2.343-1.537-4.633-2.714-6.834-2.464-4.606-6.123-8.159-9.757-11.82l-104.595-105.447c9.862-.362 20.323-.916 27.667-2.152.323.211.679.51.843.724 3.578 7.601 15.092 23.582 33.521 30.484.867.324 1.756.479 2.63.479 3.037 0 5.896-1.859 7.024-4.871 1.453-3.879-.514-8.201-4.393-9.654-12.874-4.822-22.313-16.596-25.238-22.885-2.475-5.317-9.638-10.422-15.966-9.229-24.813 4.675-51.283 3.151-76.261 2.601-11.323-.254-20.757-9.083-21.477-20.1-.374-5.71 1.814-11.555 6.003-16.034 4.047-4.329 9.484-6.818 14.919-6.829 12.295.011 24.588.732 35.007 1.477 5.521.395 11.038.834 16.556 1.272 4.555.362 9.109.724 13.665 1.062 2.027.15 4.093.315 6.19.483 24.417 1.949 54.688 4.357 76.566-12.974l84.305 84.303z\"></path></g></svg>
                </span>
                <h4 class=\"ff-title\">Négociations</h4>
                <p>Nous nous assurons de negocier pour vous le meilleur prix en adequation ave la realite du marche.</p>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-3 mb-4\">
            <div class=\"rounded shadow h-100 mb-4 p-4\">
                <span class=\"service__icon rounded\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"Layer_1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512.004 512.004\" style=\"enable-background:new 0 0 512.004 512.004;\" xml:space=\"preserve\"><g><g><g><path d=\"M469.336,341.337c-4.719,0-8.533,3.823-8.533,8.533v145.067h-59.733c-4.719,0-8.533,3.823-8.533,8.533     s3.814,8.533,8.533,8.533h68.267c4.719,0,8.533-3.823,8.533-8.533v-153.6C477.869,345.16,474.054,341.337,469.336,341.337z\"></path><path d=\"M443.735,418.137V349.87c0-4.71-3.814-8.533-8.533-8.533h-51.2c-4.719,0-8.533,3.823-8.533,8.533v68.267     c0,4.71,3.814,8.533,8.533,8.533h51.2C439.921,426.67,443.735,422.847,443.735,418.137z M426.669,409.603h-34.133v-51.2h34.133     V409.603z\"></path><path d=\"M332.802,145.07c4.719,0,8.533-3.823,8.533-8.533V93.87c0-4.71-3.814-8.533-8.533-8.533h-256     c-4.719,0-8.533,3.823-8.533,8.533v298.667c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533V375.47h8.533     c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533h-8.533v-51.2h34.133v34.133c0,4.71,3.814,8.533,8.533,8.533     s8.533-3.823,8.533-8.533v-34.133h34.133c4.719,0,8.533-3.823,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533v-51.2h34.133     c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533v-51.2     h34.133v17.067c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533V170.67h17.067c4.719,0,8.533-3.823,8.533-8.533     c0-4.71-3.814-8.533-8.533-8.533h-17.067v-51.2h34.133v34.133C324.269,141.247,328.083,145.07,332.802,145.07z M119.469,290.137     H85.335v-51.2h34.133V290.137z M119.469,221.87H85.335v-51.2h34.133V221.87z M119.469,153.603H85.335v-51.2h34.133V153.603z      M170.669,290.137h-34.133v-51.2h34.133V290.137z M170.669,221.87h-34.133v-51.2h34.133V221.87z M170.669,153.603h-34.133v-51.2     h34.133V153.603z M221.869,221.87h-34.133v-51.2h34.133V221.87z M221.869,153.603h-34.133v-51.2h34.133V153.603z      M273.069,153.603h-34.133v-51.2h34.133V153.603z\"></path><path d=\"M42.669,435.203c4.719,0,8.533-3.823,8.533-8.533V68.27h59.733c4.719,0,8.533-3.823,8.533-8.533v-25.6h59.733     c4.719,0,8.533-3.823,8.533-8.533V17.07h34.133v8.533c0,4.71,3.814,8.533,8.533,8.533h59.733v17.067H145.069     c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h213.333v34.133c0,4.71,3.814,8.533,8.533,8.533     s8.533-3.823,8.533-8.533V59.737c0-4.71-3.814-8.533-8.533-8.533h-59.733v-25.6c0-4.71-3.814-8.533-8.533-8.533h-59.733V8.537     c0-4.71-3.814-8.533-8.533-8.533h-51.2c-4.719,0-8.533,3.823-8.533,8.533v8.533h-59.733c-4.719,0-8.533,3.823-8.533,8.533v25.6     H42.669c-4.719,0-8.533,3.823-8.533,8.533V426.67C34.135,431.38,37.95,435.203,42.669,435.203z\"></path><path d=\"M503.469,187.737h-59.733v-8.533c0-4.71-3.814-8.533-8.533-8.533h-34.133c-4.719,0-8.533,3.823-8.533,8.533v17.067     c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533v-8.533h17.067v8.533c0,4.71,3.814,8.533,8.533,8.533h59.733     v115.934l-130.5-130.5c-3.337-3.336-8.73-3.336-12.066,0c-3.337,3.337-3.337,8.73,0,12.066L497.436,347.37     c1.63,1.63,3.814,2.5,6.033,2.5c1.101,0,2.21-0.213,3.268-0.649c3.192-1.323,5.265-4.437,5.265-7.885V196.27     C512.002,191.559,508.188,187.737,503.469,187.737z\"></path><path d=\"M366.935,477.87h-85.333c-4.719,0-8.533,3.823-8.533,8.533v8.533h-85.333V375.47c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533v128c0,4.71,3.814,8.533,8.533,8.533h102.4c4.719,0,8.533-3.823,8.533-8.533v-8.533h68.267v8.533     c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-17.067C375.469,481.693,371.654,477.87,366.935,477.87z\"></path><path d=\"M509.502,2.503c-3.336-3.336-8.73-3.336-12.066,0L2.502,497.437c-3.336,3.337-3.336,8.73,0,12.066     c1.664,1.664,3.849,2.5,6.033,2.5c2.185,0,4.369-0.836,6.033-2.5L509.502,14.57C512.838,11.233,512.838,5.84,509.502,2.503z\"></path><path d=\"M349.869,460.803c4.719,0,8.533-3.823,8.533-8.533v-102.4c0-4.71-3.814-8.533-8.533-8.533h-51.2     c-4.719,0-8.533,3.823-8.533,8.533v102.4c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-93.867h34.133v34.133h-8.533     c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h8.533v42.667C341.336,456.98,345.15,460.803,349.869,460.803z\"></path><path d=\"M213.336,341.337c-4.719,0-8.533,3.823-8.533,8.533v68.267c0,4.71,3.814,8.533,8.533,8.533h51.2     c4.719,0,8.533-3.823,8.533-8.533V349.87c0-4.71-3.814-8.533-8.533-8.533H213.336z M256.002,409.603h-34.133v-51.2h34.133     V409.603z\"></path></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                </span>
                <h4 class=\"ff-title\">Accompagnement juridique</h4>
                <p>Nous vous accompagnons dans les demarches notariales et administratives le cas echeant.</p>
            </div>
        </div>
    </div>
</section>
<!-- End:: services section -->

<!-- Begin:: Contact section -->
";
        // line 141
        $this->loadTemplate("front/_contact.html.twig", "front/services.html.twig", 141)->display(twig_array_merge($context, ["contactTitle" => "En savoir plus"]));
        // line 142
        echo "<!-- End:: Contact section -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 146
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 147
        echo "<script type=\"text/javascript\">
    
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 147,  283 => 146,  271 => 142,  269 => 141,  188 => 63,  173 => 51,  170 => 50,  160 => 49,  110 => 7,  100 => 6,  81 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title \"Services\" %}
{% block description \"\" %}

{% block stylesheets %}
<style type=\"text/css\">
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
<section class=\"section\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.5) 100%, rgb(255, 255, 255)), url({{asset('assets/media/illustrations/carrousel_img.jpeg')}}); background-attachment: fixed; background-position: bottom; height: 500px;\">
    <div class=\"container h-100 d-flex align-items-center justify-content-center\">
        <div class=\"text-center text-white\">
            <h1 class=\"section__title text-white\">Services</h1>
            <p>Nous aidons nos clients à vendre, acheter ou louer <br>des biens immobiliers en toute tranquillité.</p>
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

<!-- Begin:: services section -->
<section id=\"services\" class=\"container section\">
    <div class=\"row\">
        <div class=\"col-lg-6 d-flex align-items-center\">
            <div class=\"\">
                <h2 class=\"section__title\">Nos Services</h2>
                <p>Où que vous soyez en France et en Côte d'Ivoire, 
                notre équipe dédiée met à votre disposition une gamme complète de services, allant de l'évaluation précise de biens à des conseils stratégiques personnalisés. 
                Que vous souhaitiez acheter, vendre ou investir, notre expertise s'étend à travers les régions françaises et ivoiriennes. 
                Bénéficiez d'un accompagnement sur mesure, basé sur une connaissance approfondie des marchés locaux, pour assurer le succès de votre démarche immobilière.</p>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-3 mb-4\">
            <div class=\"rounded shadow h-100 mb-4 p-4\">
                <span class=\"service__icon rounded\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"Layer_1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\"><g><g><path d=\"M488.399,492h-21.933V173.536c0-14.823-12.06-26.882-26.882-26.882H390.56c-14.823,0-26.882,12.06-26.882,26.882V492    h-55.692V317.825c0-14.823-12.059-26.882-26.882-26.882H232.08c-14.823,0-26.882,12.06-26.882,26.882V492h-55.692v-90.204    c0-14.823-12.06-26.882-26.882-26.882H73.599c-14.823,0-26.882,12.06-26.882,26.882V492H23.601c-5.523,0-10,4.477-10,10    s4.477,10,10,10h464.798c5.523,0,10-4.477,10-10S493.922,492,488.399,492z M129.504,492H66.716v-90.204    c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z M287.985,492h-62.788V317.825    c0-3.795,3.087-6.882,6.882-6.882h49.024c3.794,0,6.882,3.087,6.882,6.882V492z M446.466,492h-62.788V173.536    c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z\"></path></g></g><g><g><path d=\"M466.442,10.516c0.14-2.729-0.82-5.504-2.904-7.588c-2.084-2.084-4.859-3.045-7.588-2.904    C455.789,0.017,455.63,0,455.466,0h-60.5c-5.523,0-10,4.477-10,10s4.477,10,10,10h37.357l-98.857,98.858l-37.28-37.28    c-1.875-1.875-4.419-2.929-7.071-2.929c-2.652,0-5.196,1.054-7.071,2.929l-179.769,179.77c-3.905,3.905-3.905,10.237,0,14.143    c1.953,1.951,4.512,2.927,7.071,2.927s5.119-0.976,7.071-2.929L289.115,102.79l37.28,37.28c3.905,3.905,10.237,3.905,14.143,0    L446.466,34.143v33.81c0,5.523,4.477,10,10,10s10-4.477,10-10V11C466.466,10.837,466.449,10.678,466.442,10.516z\"></path></g></g><g><g><circle cx=\"75.64\" cy=\"303.31\" r=\"10\"></circle></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                </span>
                <h4 class=\"ff-title\">Compréhension de votre projet</h4>
                <p>Nous prenons le temps de comprendre votre projet et de vous proposer la meilleure offre.</p>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-3 mb-4\">
            <div class=\"rounded shadow h-100 mb-4 p-4\">
                <span class=\"service__icon rounded\">
                    <svg id=\"Capa_1\" enable-background=\"new 0 0 512 512\" height=\"512\" viewBox=\"0 0 512 512\" width=\"512\" xmlns=\"http://www.w3.org/2000/svg\"><g><path d=\"m256.396 204.495c-25.57 0-50.014 11.003-67.063 30.189l22.425 19.928c11.361-12.785 27.631-20.117 44.638-20.117s33.277 7.333 44.638 20.117l22.425-19.928c-17.05-19.185-41.493-30.189-67.063-30.189z\"></path><path d=\"m343.285 217.108 22.425-19.928c-27.785-31.267-67.629-49.2-109.314-49.2-41.686 0-81.529 17.933-109.314 49.2l22.425 19.928c22.097-24.866 53.768-39.127 86.89-39.127s64.791 14.261 86.888 39.127z\"></path><path d=\"m467.66 254.318 23.151 23.151 21.19-21.19-61.091-61.091v-155.518h-104.63v50.887l-90.558-90.557-255.488 255.488 21.19 21.19 22.359-22.359v227.714h-43.783v29.967h511.443v-29.967h-43.783zm-91.414-184.68h44.695v95.583l-44.695-44.696zm-302.495 154.713 181.971-181.97 181.971 181.97v257.682h-166.693v-43.486c30.489-6.858 53.341-34.133 53.341-66.662v-48.745h-23.339v-38.079h-30v38.079h-30.004v-38.079h-30v38.079h-23.339v48.745c0 32.529 22.852 59.804 53.341 66.662v43.486h-167.249zm143.908 128.789h76.682v18.745c0 21.141-17.2 38.341-38.341 38.341s-38.341-17.2-38.341-38.341z\"></path></g></svg>
                </span>
                <h4 class=\"ff-title\">Organisation des visites</h4>
                <p>Nous organisons pour vous les visites et visitons ave vous le cas éch@ant afin de vous apporter les meilleurs conseils.</p>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-3 mb-4\">
            <div class=\"rounded shadow h-100 mb-4 p-4\">
                <span class=\"service__icon rounded\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"Layer_1\" data-name=\"Layer 1\" viewBox=\"0 0 512 512\"><title>evaluating 2</title><path d=\"M86.485,143.253H344.646a6,6,0,0,0,0-12H86.485a6,6,0,0,0,0,12Z\"></path><path d=\"M344.646,192.86H168.627a6,6,0,0,0,0,12H344.646a6,6,0,1,0,0-12Z\"></path><path d=\"M255.463,254.467H168.627a6,6,0,0,0,0,12h86.836a6,6,0,1,0,0-12Z\"></path><path d=\"M213.219,316.073H86.485a6,6,0,0,0,0,12H213.219a6,6,0,0,0,0-12Z\"></path><path d=\"M212.045,377.68H86.485a6,6,0,0,0,0,12h125.56a6,6,0,1,0,0-12Z\"></path><path d=\"M108.428,268.507c-.052,0-.1-.008-.155-.008s-.1.006-.154.008a15.8,15.8,0,0,1-15.634-15.78,6,6,0,0,0-12,0,27.831,27.831,0,0,0,21.788,27.128v7.623a6,6,0,0,0,12,0v-7.623a27.786,27.786,0,0,0-6-54.917,15.788,15.788,0,1,1,15.789-15.788,6,6,0,1,0,12,0,27.831,27.831,0,0,0-21.789-27.128v-6.631a6,6,0,0,0-12,0v6.631a27.786,27.786,0,0,0,6,54.916,15.785,15.785,0,0,1,.155,31.569Z\"></path><path d=\"M397.584,262.847V68.806a29.5,29.5,0,0,0-29.469-29.47H291.453A35.387,35.387,0,0,0,256.637,10H174.5a35.317,35.317,0,0,0-34.821,29.336H63.016a29.5,29.5,0,0,0-29.469,29.47V452.128A29.5,29.5,0,0,0,63.016,481.6H285.973v-.843A123.329,123.329,0,1,0,397.584,262.847ZM157.991,28.833A23.178,23.178,0,0,1,174.5,22h82.142a23.337,23.337,0,0,1,0,46.673H174.5a23.339,23.339,0,0,1-16.5-39.84ZM63.016,469.6a17.489,17.489,0,0,1-17.469-17.469V68.806a17.49,17.49,0,0,1,17.469-17.47h76.662A35.387,35.387,0,0,0,174.5,80.673h82.142a35.349,35.349,0,0,0,34.821-29.337h76.657a17.489,17.489,0,0,1,17.469,17.47V259.122A123.3,123.3,0,0,0,271.87,469.6ZM355.107,490A111.346,111.346,0,1,1,466.453,378.654,111.472,111.472,0,0,1,355.107,490Z\"></path><path d=\"M397.8,343.12l-58.342,58.341-27.049-27.049a6,6,0,0,0-8.486,8.484l31.292,31.292a6,6,0,0,0,8.486,0L406.288,351.6a6,6,0,1,0-8.485-8.484Z\"></path></svg>
                </span>
                <h4 class=\"ff-title\">Accompagnement dans la recherche de financement</h4>
                <p>Nous travailions ave des partenaires financier pouvant vous apporter une solution de financement.</p>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-3 mb-4\">
            <div class=\"rounded shadow h-100 mb-4 p-4\">
                <span class=\"service__icon rounded\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"472pt\" viewBox=\"-72 0 472 472\" width=\"472pt\"><path d=\"m211.425781 0h-94.617187c-12.789063.015625-23.148438 10.375-23.164063 23.160156v8.273438h-47.796875c-25.308594.027344-45.8203122 20.539062-45.847656 45.847656v348.871094c.0273438 25.308594 20.539062 45.820312 45.847656 45.847656h236.539063c25.308593-.027344 45.820312-20.539062 45.847656-45.847656v-348.871094c-.027344-25.308594-20.539063-45.820312-45.847656-45.847656h-47.800781v-8.273438c-.015626-12.785156-10.375-23.144531-23.160157-23.160156zm-105.78125 23.160156c.007813-6.160156 5-11.152344 11.164063-11.160156h94.617187c6.164063.007812 11.15625 5 11.164063 11.160156v26.855469c-.007813 6.160156-5 11.152344-11.164063 11.160156h-94.617187c-6.164063-.007812-11.15625-5-11.164063-11.160156zm176.742188 20.273438c18.683593.019531 33.828125 15.160156 33.847656 33.847656v348.871094c-.019531 18.683594-15.164063 33.824218-33.847656 33.847656h-236.539063c-18.683594-.023438-33.828125-15.164062-33.847656-33.847656v-348.871094c.019531-18.6875 15.164062-33.828125 33.847656-33.847656h47.800782v6.582031c.015624 12.785156 10.375 23.144531 23.160156 23.160156h94.617187c12.785157-.015625 23.148438-10.375 23.164063-23.160156v-6.582031zm0 0\"></path><path d=\"m160.585938 138.367188-110 80.085937c-2.097657 1.527344-2.972657 4.234375-2.171876 6.703125.804688 2.46875 3.105469 4.140625 5.703126 4.144531h26.21875v99.480469c0 3.3125 2.6875 6 6 6h155.5625c3.3125 0 6-2.6875 6-6v-99.480469h26.21875c2.597656 0 4.898437-1.671875 5.703124-4.144531.804688-2.46875-.074218-5.175781-2.171874-6.707031l-110-80.082031c-2.105469-1.53125-4.957032-1.53125-7.0625 0zm81.3125 78.933593c-3.3125 0-6 2.683594-6 6v99.480469h-143.5625v-99.480469c0-3.316406-2.6875-6-6-6h-13.78125l91.5625-66.660156 91.5625 66.660156zm0 0\"></path><path d=\"m138.378906 249.242188c-2.335937-2.328126-6.113281-2.332032-8.457031-.011719-2.34375 2.320312-2.375 6.097656-.066406 8.457031l21.546875 21.757812c1.125 1.136719 2.652344 1.777344 4.25 1.78125h.011718c1.59375 0 3.121094-.632812 4.246094-1.757812l38.449219-38.453125c2.34375-2.34375 2.34375-6.140625 0-8.484375s-6.140625-2.34375-8.484375 0l-34.1875 34.1875zm0 0\"></path></svg>
                </span>
                <h4 class=\"ff-title\">Recherche du bien idéal selon vos critères</h4>
                <p>Nous recherchons pour vous le meilleur bien selon vos criteres.
                Grâce à nos partenaire locaux, nous vous envoyons une selection de bien pouvant vous correspondre.</p>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-3 mb-4\">
            <div class=\"rounded shadow h-100 mb-4 p-4\">
                <span class=\"service__icon rounded\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"Capa_1\" height=\"512\" viewBox=\"0 0 512.746 512.746\" width=\"512\"><g><path d=\"m507.819 182.697-59.008-59.009c-2.929-2.927-7.677-2.929-10.607 0-2.929 2.93-2.929 7.678 0 10.607l59.009 59.009c.44.44.533.943.533 1.287s-.093.847-.534 1.287l-24.446 24.446c-.44.441-.943.534-1.287.534s-.847-.093-1.287-.534l-96.733-96.731c-.71-.71-.71-1.866 0-2.575l24.447-24.447c.708-.71 1.864-.712 2.574 0l12.852 12.852c2.93 2.928 7.678 2.928 10.607 0 2.929-2.93 2.929-7.678 0-10.607l-12.853-12.852c-6.56-6.56-17.23-6.556-23.788 0l-24.447 24.447c-5.117 5.117-6.222 12.732-3.353 18.951-17.26 13.206-42.859 11.164-65.525 9.352-2.126-.17-30.966-2.428-36.537-2.825-10.515-.752-22.923-1.517-35.475-1.517-.21 0-.422.001-.631.001-4.31.009-8.589.879-12.621 2.497-10.422.544-20.559 1.526-30.572 3.772-7.191 1.612-14.549-.48-19.671-5.604l-5.363-5.363c3.053-6.274 1.995-14.061-3.208-19.264l-24.447-24.447c-6.559-6.557-17.229-6.557-23.789 0l-96.731 96.733c-3.178 3.177-4.928 7.401-4.928 11.895 0 4.492 1.75 8.717 4.927 11.895l24.446 24.446c3.178 3.177 7.402 4.927 11.895 4.927 2.676 0 5.249-.634 7.569-1.806 0 0 21.693 21.115 24.428 23.857 3.734 3.743 4.374 9.713 5.114 16.625.392 3.65.796 7.425 1.712 11.178 2.935 12.038 8.16 23.573 15.53 34.287 2.347 3.412 7.015 4.275 10.43 1.928 3.412-2.348 4.275-7.017 1.928-10.43-6.333-9.207-10.813-19.077-13.315-29.339-.68-2.787-1.015-5.913-1.369-9.223-.911-8.501-1.944-18.135-9.409-25.62-2.827-2.834-23.832-23.276-23.832-23.276l83.102-83.102 4.705 4.705c8.777 8.776 21.319 12.377 33.562 9.634 2.782-.624 5.604-1.138 8.462-1.571-3.28 6.009-4.852 12.783-4.413 19.508 1.223 18.705 17.084 33.69 36.112 34.117l13.509.298c.08.001.159.002.239.002l16.17-.16c11.891 11.98 106.839 107.732 112.49 112.996 5.138 4.787 10.943 10.318 11.168 17.843.192 6.422-4.76 12.999-10.797 15.001-5.924 1.964-12.648.48-17.079-3.946l-91.745-91.745c-2.93-2.928-7.678-2.928-10.607 0-2.929 2.93-2.929 7.678 0 10.607l111.169 111.168c4.716 6.721 3.772 15.909-2.285 21.567-6.432 6.008-16.893 5.665-23.328-.77l-108.799-108.724c-2.93-2.927-7.678-2.929-10.607 0-2.929 2.93-2.929 7.678 0 10.607l86.5 86.501c6.361 6.454 6.337 16.876-.082 23.294-6.445 6.447-16.938 6.448-23.389-.003l-86.396-86.425c-2.93-2.928-7.678-2.928-10.607 0-2.929 2.93-2.929 7.678 0 10.607 0 0 40.396 40.49 40.624 40.719 3.124 3.123 4.844 7.275 4.844 11.692s-1.72 8.569-4.844 11.692c-6.447 6.449-16.938 6.447-23.384.002-.396-.396-39.823-39.845-63.716-63.986-2.913-2.944-7.662-2.968-10.606-.056-2.944 2.914-2.969 7.663-.056 10.606 23.919 24.169 63.373 63.644 63.77 64.041 12.297 12.295 32.303 12.295 44.6 0 4.29-4.291 7.084-9.521 8.38-15.033l26.788 26.75c6.148 6.147 14.224 9.222 22.3 9.222s16.151-3.074 22.3-9.222c4.295-4.296 7.091-9.534 8.385-15.055l3.394 3.384c12.08 12.082 31.894 12.584 44.168 1.117 11.773-10.997 13.397-29.01 3.777-41.899-.216-.289-1.567-1.677-1.567-1.677 3.979-.309 10.025-3.636 15.012-8.375.314-.298 31.688-31.861 32.165-32.439 14.008-17.122 22.213-37.178 23.731-57.998.387-5.297 2.617-10.193 6.241-13.752l21.822-21.126c1.96.783 4.069 1.202 6.244 1.202 4.492 0 8.717-1.75 11.895-4.927l24.446-24.446c3.177-3.178 4.927-7.402 4.927-11.895-.002-4.493-1.752-8.717-4.929-11.894zm-368.531-59.104-96.733 96.733c-.44.44-.943.533-1.287.533s-.847-.093-1.287-.534l-24.446-24.446c-.441-.44-.534-.943-.534-1.287s.093-.847.534-1.287l96.731-96.733c.355-.354.822-.532 1.288-.532.467 0 .933.177 1.287.532l24.447 24.447c.71.709.71 1.865 0 2.574zm293.654 121.451c-6.267 6.151-10.078 14.462-10.731 23.4-1.289 17.694-8.315 34.815-20.296 49.489-.487.532-2.799 2.938-12.762 13.01-.619-2.343-1.537-4.633-2.714-6.834-2.464-4.606-6.123-8.159-9.757-11.82l-104.595-105.447c9.862-.362 20.323-.916 27.667-2.152.323.211.679.51.843.724 3.578 7.601 15.092 23.582 33.521 30.484.867.324 1.756.479 2.63.479 3.037 0 5.896-1.859 7.024-4.871 1.453-3.879-.514-8.201-4.393-9.654-12.874-4.822-22.313-16.596-25.238-22.885-2.475-5.317-9.638-10.422-15.966-9.229-24.813 4.675-51.283 3.151-76.261 2.601-11.323-.254-20.757-9.083-21.477-20.1-.374-5.71 1.814-11.555 6.003-16.034 4.047-4.329 9.484-6.818 14.919-6.829 12.295.011 24.588.732 35.007 1.477 5.521.395 11.038.834 16.556 1.272 4.555.362 9.109.724 13.665 1.062 2.027.15 4.093.315 6.19.483 24.417 1.949 54.688 4.357 76.566-12.974l84.305 84.303z\"></path></g></svg>
                </span>
                <h4 class=\"ff-title\">Négociations</h4>
                <p>Nous nous assurons de negocier pour vous le meilleur prix en adequation ave la realite du marche.</p>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-3 mb-4\">
            <div class=\"rounded shadow h-100 mb-4 p-4\">
                <span class=\"service__icon rounded\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"Layer_1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512.004 512.004\" style=\"enable-background:new 0 0 512.004 512.004;\" xml:space=\"preserve\"><g><g><g><path d=\"M469.336,341.337c-4.719,0-8.533,3.823-8.533,8.533v145.067h-59.733c-4.719,0-8.533,3.823-8.533,8.533     s3.814,8.533,8.533,8.533h68.267c4.719,0,8.533-3.823,8.533-8.533v-153.6C477.869,345.16,474.054,341.337,469.336,341.337z\"></path><path d=\"M443.735,418.137V349.87c0-4.71-3.814-8.533-8.533-8.533h-51.2c-4.719,0-8.533,3.823-8.533,8.533v68.267     c0,4.71,3.814,8.533,8.533,8.533h51.2C439.921,426.67,443.735,422.847,443.735,418.137z M426.669,409.603h-34.133v-51.2h34.133     V409.603z\"></path><path d=\"M332.802,145.07c4.719,0,8.533-3.823,8.533-8.533V93.87c0-4.71-3.814-8.533-8.533-8.533h-256     c-4.719,0-8.533,3.823-8.533,8.533v298.667c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533V375.47h8.533     c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533h-8.533v-51.2h34.133v34.133c0,4.71,3.814,8.533,8.533,8.533     s8.533-3.823,8.533-8.533v-34.133h34.133c4.719,0,8.533-3.823,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533v-51.2h34.133     c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533v-51.2     h34.133v17.067c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533V170.67h17.067c4.719,0,8.533-3.823,8.533-8.533     c0-4.71-3.814-8.533-8.533-8.533h-17.067v-51.2h34.133v34.133C324.269,141.247,328.083,145.07,332.802,145.07z M119.469,290.137     H85.335v-51.2h34.133V290.137z M119.469,221.87H85.335v-51.2h34.133V221.87z M119.469,153.603H85.335v-51.2h34.133V153.603z      M170.669,290.137h-34.133v-51.2h34.133V290.137z M170.669,221.87h-34.133v-51.2h34.133V221.87z M170.669,153.603h-34.133v-51.2     h34.133V153.603z M221.869,221.87h-34.133v-51.2h34.133V221.87z M221.869,153.603h-34.133v-51.2h34.133V153.603z      M273.069,153.603h-34.133v-51.2h34.133V153.603z\"></path><path d=\"M42.669,435.203c4.719,0,8.533-3.823,8.533-8.533V68.27h59.733c4.719,0,8.533-3.823,8.533-8.533v-25.6h59.733     c4.719,0,8.533-3.823,8.533-8.533V17.07h34.133v8.533c0,4.71,3.814,8.533,8.533,8.533h59.733v17.067H145.069     c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h213.333v34.133c0,4.71,3.814,8.533,8.533,8.533     s8.533-3.823,8.533-8.533V59.737c0-4.71-3.814-8.533-8.533-8.533h-59.733v-25.6c0-4.71-3.814-8.533-8.533-8.533h-59.733V8.537     c0-4.71-3.814-8.533-8.533-8.533h-51.2c-4.719,0-8.533,3.823-8.533,8.533v8.533h-59.733c-4.719,0-8.533,3.823-8.533,8.533v25.6     H42.669c-4.719,0-8.533,3.823-8.533,8.533V426.67C34.135,431.38,37.95,435.203,42.669,435.203z\"></path><path d=\"M503.469,187.737h-59.733v-8.533c0-4.71-3.814-8.533-8.533-8.533h-34.133c-4.719,0-8.533,3.823-8.533,8.533v17.067     c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533v-8.533h17.067v8.533c0,4.71,3.814,8.533,8.533,8.533h59.733     v115.934l-130.5-130.5c-3.337-3.336-8.73-3.336-12.066,0c-3.337,3.337-3.337,8.73,0,12.066L497.436,347.37     c1.63,1.63,3.814,2.5,6.033,2.5c1.101,0,2.21-0.213,3.268-0.649c3.192-1.323,5.265-4.437,5.265-7.885V196.27     C512.002,191.559,508.188,187.737,503.469,187.737z\"></path><path d=\"M366.935,477.87h-85.333c-4.719,0-8.533,3.823-8.533,8.533v8.533h-85.333V375.47c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533v128c0,4.71,3.814,8.533,8.533,8.533h102.4c4.719,0,8.533-3.823,8.533-8.533v-8.533h68.267v8.533     c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-17.067C375.469,481.693,371.654,477.87,366.935,477.87z\"></path><path d=\"M509.502,2.503c-3.336-3.336-8.73-3.336-12.066,0L2.502,497.437c-3.336,3.337-3.336,8.73,0,12.066     c1.664,1.664,3.849,2.5,6.033,2.5c2.185,0,4.369-0.836,6.033-2.5L509.502,14.57C512.838,11.233,512.838,5.84,509.502,2.503z\"></path><path d=\"M349.869,460.803c4.719,0,8.533-3.823,8.533-8.533v-102.4c0-4.71-3.814-8.533-8.533-8.533h-51.2     c-4.719,0-8.533,3.823-8.533,8.533v102.4c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-93.867h34.133v34.133h-8.533     c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h8.533v42.667C341.336,456.98,345.15,460.803,349.869,460.803z\"></path><path d=\"M213.336,341.337c-4.719,0-8.533,3.823-8.533,8.533v68.267c0,4.71,3.814,8.533,8.533,8.533h51.2     c4.719,0,8.533-3.823,8.533-8.533V349.87c0-4.71-3.814-8.533-8.533-8.533H213.336z M256.002,409.603h-34.133v-51.2h34.133     V409.603z\"></path></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                </span>
                <h4 class=\"ff-title\">Accompagnement juridique</h4>
                <p>Nous vous accompagnons dans les demarches notariales et administratives le cas echeant.</p>
            </div>
        </div>
    </div>
</section>
<!-- End:: services section -->

<!-- Begin:: Contact section -->
{% include 'front/_contact.html.twig' with {'contactTitle': 'En savoir plus'} %}
<!-- End:: Contact section -->

{% endblock %}

{% block javascripts %}
<script type=\"text/javascript\">
    
</script>
{% endblock %}
", "front/services.html.twig", "/Users/mfofana/Desktop/WORKS/MyGITHUB/conseil-i-mmobilier/templates/front/services.html.twig");
    }
}
