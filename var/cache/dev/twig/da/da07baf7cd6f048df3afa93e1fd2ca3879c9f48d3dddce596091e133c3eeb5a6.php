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

/* profile/index.html.twig */
class __TwigTemplate_ca281f81c4822498025b99bbc308e833c461fd5ba53ecd490d491c0a1bff817c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "profile/index.html.twig", 1);
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
<div class=\"container\">
    <div class=\"main-body\">
    
          <div class=\"row gutters-sm\">
            <div class=\"col-md-4 mb-3\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <div class=\"d-flex flex-column align-items-center text-center\">
                    <img src=\"https://bootdey.com/img/Content/avatar/avatar7.png\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
                    <div class=\"mt-3\">
                      <h4>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</h4>
                     
                        <div>
                          
                       <button class=\"btn btn-sm btn-primary\" type=\"button\"><i class=\"fas fa-camera\"></i>   change profile picture</button>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
           
            </div>
            <div class=\"col-md-8\">
              <div class=\"card mb-3\">
                <div class=\"card-body\">
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Full Name</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "lastname", [], "any", false, false, false, 38), "html", null, true);
        echo "
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Email</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                     ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "email", [], "any", false, false, false, 47), "html", null, true);
        echo " 
                    </div>
                  </div>
                  <hr>
                <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Email</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                     ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "firstName", [], "any", false, false, false, 56), "html", null, true);
        echo " 
                    </div>
                  </div>
                  </div>
                 
                  
                  <hr>
                 
                  <div class=\"row\">
                    <div class=\"col-sm-12\">
                      <a class=\"btn btn-info \"  href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile");
        echo "\">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

             
               
              </div>



            </div>
          </div>

        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 66,  147 => 56,  135 => 47,  123 => 38,  100 => 18,  87 => 7,  77 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}{% endblock %}


{% block body %}

<div class=\"container\">
    <div class=\"main-body\">
    
          <div class=\"row gutters-sm\">
            <div class=\"col-md-4 mb-3\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <div class=\"d-flex flex-column align-items-center text-center\">
                    <img src=\"https://bootdey.com/img/Content/avatar/avatar7.png\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
                    <div class=\"mt-3\">
                      <h4>{{app.user.name}}</h4>
                     
                        <div>
                          
                       <button class=\"btn btn-sm btn-primary\" type=\"button\"><i class=\"fas fa-camera\"></i>   change profile picture</button>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
           
            </div>
            <div class=\"col-md-8\">
              <div class=\"card mb-3\">
                <div class=\"card-body\">
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Full Name</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      {{app.user.lastname}}
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Email</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                     {{app.user.email}} 
                    </div>
                  </div>
                  <hr>
                <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Email</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                     {{app.user.firstName}} 
                    </div>
                  </div>
                  </div>
                 
                  
                  <hr>
                 
                  <div class=\"row\">
                    <div class=\"col-sm-12\">
                      <a class=\"btn btn-info \"  href=\"{{ path('edit_profile') }}\">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

             
               
              </div>



            </div>
          </div>

        </div>
    </div>
</div>
{% endblock %}
", "profile/index.html.twig", "C:\\symfony_projects\\projectOrbite\\OrbitTest\\templates\\profile\\index.html.twig");
    }
}
