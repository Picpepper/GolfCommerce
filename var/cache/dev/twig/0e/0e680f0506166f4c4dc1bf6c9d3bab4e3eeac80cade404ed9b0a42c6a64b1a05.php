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

/* registration/register.html.twig */
class __TwigTemplate_179385d82dcfc8b21421ac32b363073e92cddf2131b765531103ce0d9db4a76f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "S'inscrire
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 8
            echo "\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
\t<div class=\"container-fluid\">
\t\t<h1 class=\"text-center mt-4 pt-4 display-1 fw-bold\">
\t\t\tINSCRIVEZ-VOUS</h1>

\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-6 bg-white p-4 m-0 text-primary\">

\t\t\t\t<label for=\"inputEmail\" class=\"fw-bold\">Email</label>
\t\t\t\t<input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
\t\t\t\t<label for=\"inputPassword\" class=\"fw-bold\">Mot de passe</label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

\t\t\t\t<div class=\"checkbox mb-3\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\">
\t\t\t\t\t\tConfirmer son inscription
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<button class=\"btn bg-primary text-white m-4\" type=\"submit\">
\t\t\t\t\t\tS'INSCRIRE
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<input
\ttype=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

";
        // line 51
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 51,  119 => 39,  88 => 10,  79 => 8,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}S'inscrire
{% endblock %}

{% block body %}
\t{% for flashError in app.flashes('verify_email_error') %}
\t\t<div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
\t{% endfor %}

\t<div class=\"container-fluid\">
\t\t<h1 class=\"text-center mt-4 pt-4 display-1 fw-bold\">
\t\t\tINSCRIVEZ-VOUS</h1>

\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-6 bg-white p-4 m-0 text-primary\">

\t\t\t\t<label for=\"inputEmail\" class=\"fw-bold\">Email</label>
\t\t\t\t<input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
\t\t\t\t<label for=\"inputPassword\" class=\"fw-bold\">Mot de passe</label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

\t\t\t\t<div class=\"checkbox mb-3\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\">
\t\t\t\t\t\tConfirmer son inscription
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<button class=\"btn bg-primary text-white m-4\" type=\"submit\">
\t\t\t\t\t\tS'INSCRIRE
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<input
\ttype=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

{#
\t\t\t\t\t\t\t\t\t\t        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
\t\t\t\t\t\t\t\t\t\t        See https://symfony.com/doc/current/security/remember_me.html
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t        <div class=\"checkbox mb-3\">
\t\t\t\t\t\t\t\t\t\t            <label>
\t\t\t\t\t\t\t\t\t\t                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
\t\t\t\t\t\t\t\t\t\t            </label>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t\t    #}

{% endblock %}

", "registration/register.html.twig", "/var/www/html/P_SiteGolf/templates/registration/register.html.twig");
    }
}
