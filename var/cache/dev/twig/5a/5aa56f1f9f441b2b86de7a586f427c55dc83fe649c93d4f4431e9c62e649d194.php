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

/* client/index.html.twig */
class __TwigTemplate_eb6ce9f646ea7775dd331d99ea3c626987e432f2e778b67b9c5e56550de6bf0c extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "client/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ClientController!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t

\t\t\t\t<!-- Begin Page Content -->
\t\t\t\t<div
\t\t\t\t\tclass=\"container-fluid\">

";
        // line 15
        echo "

\t\t\t\t\t<!-- DataTales Example -->
\t\t\t\t\t<div class=\"card shadow mb-4\">
\t\t\t\t\t\t<div class=\"card-header py-3\"></div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Position</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Office</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Age</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Start date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Salary</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Position</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Office</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Age</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Start date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Salary</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Tiger Nixon</td>
\t\t\t\t\t\t\t\t\t\t\t<td>System Architect</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Edinburgh</td>
\t\t\t\t\t\t\t\t\t\t\t<td>61</td>
\t\t\t\t\t\t\t\t\t\t\t<td>2011/04/25</td>
\t\t\t\t\t\t\t\t\t\t\t<td>\$320,800</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Garrett Winters</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Accountant</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Tokyo</td>
\t\t\t\t\t\t\t\t\t\t\t<td>63</td>
\t\t\t\t\t\t\t\t\t\t\t<td>2011/07/25</td>
\t\t\t\t\t\t\t\t\t\t\t<td>\$170,750</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Ashton Cox</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Junior Technical Author</td>
\t\t\t\t\t\t\t\t\t\t\t<td>San Francisco</td>
\t\t\t\t\t\t\t\t\t\t\t<td>66</td>
\t\t\t\t\t\t\t\t\t\t\t<td>2009/01/12</td>
\t\t\t\t\t\t\t\t\t\t\t<td>\$86,000</td>
\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.container-fluid -->

\t\t
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 15,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Hello ClientController!
{% endblock %}

{% block body %}

\t

\t\t\t\t<!-- Begin Page Content -->
\t\t\t\t<div
\t\t\t\t\tclass=\"container-fluid\">

{# kamall ekhdem el arry ta3 el client wel button zidek kamal Generate prices w orbite area omoure routs  #}


\t\t\t\t\t<!-- DataTales Example -->
\t\t\t\t\t<div class=\"card shadow mb-4\">
\t\t\t\t\t\t<div class=\"card-header py-3\"></div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Position</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Office</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Age</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Start date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Salary</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Position</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Office</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Age</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Start date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Salary</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Tiger Nixon</td>
\t\t\t\t\t\t\t\t\t\t\t<td>System Architect</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Edinburgh</td>
\t\t\t\t\t\t\t\t\t\t\t<td>61</td>
\t\t\t\t\t\t\t\t\t\t\t<td>2011/04/25</td>
\t\t\t\t\t\t\t\t\t\t\t<td>\$320,800</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Garrett Winters</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Accountant</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Tokyo</td>
\t\t\t\t\t\t\t\t\t\t\t<td>63</td>
\t\t\t\t\t\t\t\t\t\t\t<td>2011/07/25</td>
\t\t\t\t\t\t\t\t\t\t\t<td>\$170,750</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Ashton Cox</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Junior Technical Author</td>
\t\t\t\t\t\t\t\t\t\t\t<td>San Francisco</td>
\t\t\t\t\t\t\t\t\t\t\t<td>66</td>
\t\t\t\t\t\t\t\t\t\t\t<td>2009/01/12</td>
\t\t\t\t\t\t\t\t\t\t\t<td>\$86,000</td>
\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.container-fluid -->

\t\t
\t\t{% endblock %}
", "client/index.html.twig", "C:\\symfony_projects\\projectOrbite\\OrbitTest\\templates\\client\\index.html.twig");
    }
}
