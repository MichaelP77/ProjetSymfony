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
class __TwigTemplate_6dcc17f752bf69315458909856430900 extends Template
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
      <div class=\"row\">
        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"320\" height=\"180\" src=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration-1.png"), "html", null, true);
        yield "\"/>
          <h2 class=\"fw-bold\">Heading</h2>
          <p class=\"text-start\">Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
          
        </div><!-- /.col-lg-4 -->

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"320\" height=\"180\" src=\"";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration-2.png"), "html", null, true);
        yield "\"/>
          <h2 class=\"fw-bold\">Heading</h2>
          <p class=\"text-start\">Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
          
        </div><!-- /.col-lg-4 -->

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"320\" height=\"180\" src=\"";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration-3.png"), "html", null, true);
        yield "\"/>
          <h2 class=\"fw-bold\">Heading</h2>
          <p class=\"text-start\">And lastly this, the third column of representative placeholder content.</p>
          
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
  
  
  
      <hr class=\"featurette-divider\">
  


      <section class=\"col col-lg-10 mx-auto mb-5\">
<div class=\"card\">
<div class=\"card-body bg-light\">
  <form id=\"shortenForm\">
    <div class=\"col\">
      <div class=\"input-group\">
    <input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Votre adresse à réduire\" autocomplete=\"off\">
    <button type=\"submit\" class=\"btn btn-lg btn-success\">Réduire l'URL</button>
      </div>
    </div>
      </form>
</div>
</div>
      </section>
  
  
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
        return array (  125 => 33,  115 => 26,  105 => 19,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
      <div class=\"row\">
        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"320\" height=\"180\" src=\"{{asset('images/illustration-1.png')}}\"/>
          <h2 class=\"fw-bold\">Heading</h2>
          <p class=\"text-start\">Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
          
        </div><!-- /.col-lg-4 -->

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"320\" height=\"180\" src=\"{{asset('images/illustration-2.png')}}\"/>
          <h2 class=\"fw-bold\">Heading</h2>
          <p class=\"text-start\">Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
          
        </div><!-- /.col-lg-4 -->

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"320\" height=\"180\" src=\"{{asset('images/illustration-3.png')}}\"/>
          <h2 class=\"fw-bold\">Heading</h2>
          <p class=\"text-start\">And lastly this, the third column of representative placeholder content.</p>
          
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
  
  
  
      <hr class=\"featurette-divider\">
  


      <section class=\"col col-lg-10 mx-auto mb-5\">
<div class=\"card\">
<div class=\"card-body bg-light\">
  <form id=\"shortenForm\">
    <div class=\"col\">
      <div class=\"input-group\">
    <input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Votre adresse à réduire\" autocomplete=\"off\">
    <button type=\"submit\" class=\"btn btn-lg btn-success\">Réduire l'URL</button>
      </div>
    </div>
      </form>
</div>
</div>
      </section>
  
  
    <!-- FOOTER -->
    <footer class=\"container\">
      <p class=\"float-end\"><a href=\"#\">Retour en haut</a></p>
      <p>&copy; Michael PICOU</p>
    </footer>
  </main>
{% endblock %}
", "home/index.html.twig", "C:\\xampp2\\htdocs\\symfony\\Projet\\templates\\home\\index.html.twig");
    }
}
