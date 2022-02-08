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

/* dashboard/index.html.twig */
class __TwigTemplate_c053649531f0e7bb94a7c30f7b2fdeefedf31f2af16848b2773884c948d2ea81 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                        <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
                        <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                                class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                Earnings (Monthly)</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-success shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                Earnings (Annual)</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-info shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks
                                            </div>
                                            <div class=\"row no-gutters align-items-center\">
                                                <div class=\"col-auto\">
                                                    <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"progress progress-sm mr-2\">
                                                        <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                                            style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\"
                                                            aria-valuemax=\"100\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-warning shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                                Pending Requests</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class=\"row\">

                        <!-- Area Chart -->
                        <div class=\"col-xl-8 col-lg-7\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                            aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-area\">
                                        <canvas id=\"myAreaChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class=\"col-xl-4 col-lg-5\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                            aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-pie pt-4 pb-2\">
                                        <canvas id=\"myPieChart\"></canvas>
                                    </div>
                                    <div class=\"mt-4 text-center small\">
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-primary\"></i> Direct
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-success\"></i> Social
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-info\"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                       

                           

                <!-- /.container-fluid -->
        </div>
            </div>
            <!-- End of Main Content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}

{% block body %}
    <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                        <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
                        <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                                class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                Earnings (Monthly)</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-success shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                Earnings (Annual)</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-info shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks
                                            </div>
                                            <div class=\"row no-gutters align-items-center\">
                                                <div class=\"col-auto\">
                                                    <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"progress progress-sm mr-2\">
                                                        <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                                            style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\"
                                                            aria-valuemax=\"100\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-warning shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                                Pending Requests</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class=\"row\">

                        <!-- Area Chart -->
                        <div class=\"col-xl-8 col-lg-7\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                            aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-area\">
                                        <canvas id=\"myAreaChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class=\"col-xl-4 col-lg-5\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                            aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-pie pt-4 pb-2\">
                                        <canvas id=\"myPieChart\"></canvas>
                                    </div>
                                    <div class=\"mt-4 text-center small\">
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-primary\"></i> Direct
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-success\"></i> Social
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-info\"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                       

                           

                <!-- /.container-fluid -->
        </div>
            </div>
            <!-- End of Main Content -->
{% endblock %}", "dashboard/index.html.twig", "C:\\symfony_projects\\projectOrbite\\OrbitTest\\templates\\dashboard\\index.html.twig");
    }
}
