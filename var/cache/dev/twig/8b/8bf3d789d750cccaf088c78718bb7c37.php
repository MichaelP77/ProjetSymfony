<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* article/item.html.twig */
class __TwigTemplate_4b157662f8617283ed6f569036940bf0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/item.html.twig"));

        // line 1
        yield "<article class=\"mb-5\">
    <div class=\"row\">
        <div class=\"col-md-";
        // line 3
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["leftCol"]) || array_key_exists("leftCol", $context) ? $context["leftCol"] : (function () { throw new RuntimeError('Variable "leftCol" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "\">
            ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 4, $this->source); })()), "featuredImage", [], "any", false, false, false, 4)) {
            // line 5
            yield "                <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 5, $this->source); })()), "slug", [], "any", false, false, false, 5)]), "html", null, true);
            yield "\">
                    <img src=\"/uploads/";
            // line 6
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 6, $this->source); })()), "featuredImage", [], "any", false, false, false, 6), "filename", [], "any", false, false, false, 6), "html", null, true);
            yield "\" alt=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 6, $this->source); })()), "featuredImage", [], "any", false, false, false, 6), "altText", [], "any", false, false, false, 6), "html", null, true);
            yield "\" loading=\"lazy\" width=\"350\" height=\"205\" >
                </a>
            ";
        }
        // line 9
        yield "        </div>

        <div class=\"col-md-";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["rightCol"]) || array_key_exists("rightCol", $context) ? $context["rightCol"] : (function () { throw new RuntimeError('Variable "rightCol" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\">
            <h2 class=\"article-title\">
                <a href=\"";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "slug", [], "any", false, false, false, 13)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        yield "</a>
            </h2>
            <p>
                ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 17
            yield "                    / <a class=\"text-decoration-none\" href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "slug", [], "any", false, false, false, 17)]), "html", null, true);
            yield "#comments\">Laisser un commentaire</a>
                ";
        }
        // line 19
        yield "            </p>
            ";
        // line 20
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "featuredText", [], "any", false, false, false, 20)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "featuredText", [], "any", false, false, false, 20), "html", null, true)) : (yield ""));
        yield "
        </div>
    </div>
</article>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "article/item.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  95 => 20,  92 => 19,  86 => 17,  84 => 16,  76 => 13,  71 => 11,  67 => 9,  59 => 6,  54 => 5,  52 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"mb-5\">
    <div class=\"row\">
        <div class=\"col-md-{{ leftCol }}\">
            {% if article.featuredImage %}
                <a href=\"{{ path('article_show', { 'slug': article.slug }) }}\">
                    <img src=\"/uploads/{{ article.featuredImage.filename }}\" alt=\"{{ article.featuredImage.altText }}\" loading=\"lazy\" width=\"350\" height=\"205\" >
                </a>
            {% endif %}
        </div>

        <div class=\"col-md-{{ rightCol }}\">
            <h2 class=\"article-title\">
                <a href=\"{{ path('article_show', { 'slug': article.slug }) }}\" class=\"text-decoration-none\">{{ article.title }}</a>
            </h2>
            <p>
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    / <a class=\"text-decoration-none\" href=\"{{ path('article_show', { 'slug': article.slug }) }}#comments\">Laisser un commentaire</a>
                {% endif %}
            </p>
            {{ article.featuredText ?: '' }}
        </div>
    </div>
</article>", "article/item.html.twig", "C:\\xampp2\\htdocs\\symfony\\Projet\\templates\\article\\item.html.twig");
    }
}
