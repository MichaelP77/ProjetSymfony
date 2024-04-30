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

/* home/index.html.twig */
class __TwigTemplate_632dc3f98cb357af81ff8b741069491d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        yield "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<main>

  
  
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
  
    <div class=\"container marketing\">
  
      <!-- Three columns of text below the carousel -->
      <div class=\"row mt-5\">
        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"320\" height=\"180\" src=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/connexion.png"), "html", null, true);
        yield "\"/>
          <h2 class=\"fw-bold mt-4\">Connexion, Inscription et déconnexion</h2>
          <p class=\"text-start\">Sur ce site, vous pouvez vous connecter, déconnecter et vous inscrire !</p>
          
        </div><!-- /.col-lg-4 -->

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"320\" height=\"180\" src=\"";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/article.png"), "html", null, true);
        yield "\"/>
          <h2 class=\"fw-bold mt-4\">Création d'articles</h2>
          <p class=\"text-start\">En vous rendant sur le Tableau de bord en haut à gauche, vous pourrez créer, modifier ou supprimer un article !</p>
          
        </div><!-- /.col-lg-4 -->

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"320\" height=\"180\" src=\"";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/dashboard.png"), "html", null, true);
        yield "\"/>
          <h2 class=\"fw-bold mt-4\">Tableau de bord</h2>
          <p class=\"text-start\">Une fois dans le tableau de bord, vous pouvez cliquer sur \"ajouter\" à gauche pour créer votre article.</p>
          
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
  
      <div id=\"articles-list\">
        ";
        // line 41
        yield from         $this->loadTemplate("article/list.html.twig", "home/index.html.twig", 41)->unwrap()->yield(CoreExtension::arrayMerge($context, ["articles" => (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 41, $this->source); })()), "leftCol" => 5, "rightCol" => 7]));
        // line 42
        yield "    </div>
  
      <hr class=\"featurette-divider\">
  
      <div class=\"col-xl-4\">
        <div class=\"position-sticky\" style=\"top: 2rem;\">
            ";
        // line 48
        yield from         $this->loadTemplate("widget/categories.html.twig", "home/index.html.twig", 48)->unwrap()->yield($context);
        // line 49
        yield "        </div>

  
  
    <!-- FOOTER -->
    <footer class=\"container\">
      <p class=\"float-end\"><a href=\"#\">Retour en haut</a></p>
      <p>&copy; Michael PICOU</p>
    </footer>
  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        yield "            ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("home");
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  180 => 62,  170 => 61,  149 => 49,  147 => 48,  139 => 42,  137 => 41,  126 => 33,  116 => 26,  106 => 19,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<main>

  
  
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
  
    <div class=\"container marketing\">
  
      <!-- Three columns of text below the carousel -->
      <div class=\"row mt-5\">
        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"320\" height=\"180\" src=\"{{asset('images/connexion.png')}}\"/>
          <h2 class=\"fw-bold mt-4\">Connexion, Inscription et déconnexion</h2>
          <p class=\"text-start\">Sur ce site, vous pouvez vous connecter, déconnecter et vous inscrire !</p>
          
        </div><!-- /.col-lg-4 -->

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"320\" height=\"180\" src=\"{{asset('images/article.png')}}\"/>
          <h2 class=\"fw-bold mt-4\">Création d'articles</h2>
          <p class=\"text-start\">En vous rendant sur le Tableau de bord en haut à gauche, vous pourrez créer, modifier ou supprimer un article !</p>
          
        </div><!-- /.col-lg-4 -->

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"320\" height=\"180\" src=\"{{asset('images/dashboard.png')}}\"/>
          <h2 class=\"fw-bold mt-4\">Tableau de bord</h2>
          <p class=\"text-start\">Une fois dans le tableau de bord, vous pouvez cliquer sur \"ajouter\" à gauche pour créer votre article.</p>
          
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
  
      <div id=\"articles-list\">
        {% include 'article/list.html.twig' with { articles: articles, leftCol: 5, rightCol: 7 } %}
    </div>
  
      <hr class=\"featurette-divider\">
  
      <div class=\"col-xl-4\">
        <div class=\"position-sticky\" style=\"top: 2rem;\">
            {% include 'widget/categories.html.twig' %}
        </div>

  
  
    <!-- FOOTER -->
    <footer class=\"container\">
      <p class=\"float-end\"><a href=\"#\">Retour en haut</a></p>
      <p>&copy; Michael PICOU</p>
    </footer>
  </main>
{% endblock %}

{% block javascripts %}
            {{ encore_entry_script_tags('home') }}
        {% endblock %}
", "home/index.html.twig", "C:\\xampp2\\htdocs\\symfony\\Projet\\templates\\home\\index.html.twig");
    }
}
