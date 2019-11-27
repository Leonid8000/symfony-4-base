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

/* admin/layouts/sidebar.html.twig */
class __TwigTemplate_0a736777991a71eac4ca7d8451a730d4b0bd0b6709d76d698d889047d76d48ff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/sidebar.html.twig"));

        // line 1
        echo "<div class=\"sidebar \">
    <!--Accordion wrapper-->
    <div class=\"accordion md-accordion accordion-4\" id=\"accordionEx2\" role=\"tablist\" aria-multiselectable=\"true\">
        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header z-depth-1 teal lighten-3\" role=\"tab\" id=\"heading11\">
                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx2\" href=\"#collapse11\"
                   aria-expanded=\"false\" aria-controls=\"collapse11\">
                    <p class=\"mb-0 text-center font-weight-bold text-uppercase\">
                        Something
                    </p>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapse11\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading11\"
                 data-parent=\"#accordionEx2\">
                <div class=\"card-body rgba-teal-strong white-text\">
                    <a href=\"#\" class=\"text-center\"><p>Show</p></a>
                    <a href=\"#\" class=\"text-center\"><p>Create</p></a>
                </div>
            </div>
        </div>
        <!-- Accordion card -->
        </div>
        <!-- Accordion card -->
    </div>
    <!--/.Accordion wrapper-->
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/layouts/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar \">
    <!--Accordion wrapper-->
    <div class=\"accordion md-accordion accordion-4\" id=\"accordionEx2\" role=\"tablist\" aria-multiselectable=\"true\">
        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header z-depth-1 teal lighten-3\" role=\"tab\" id=\"heading11\">
                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx2\" href=\"#collapse11\"
                   aria-expanded=\"false\" aria-controls=\"collapse11\">
                    <p class=\"mb-0 text-center font-weight-bold text-uppercase\">
                        Something
                    </p>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapse11\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading11\"
                 data-parent=\"#accordionEx2\">
                <div class=\"card-body rgba-teal-strong white-text\">
                    <a href=\"#\" class=\"text-center\"><p>Show</p></a>
                    <a href=\"#\" class=\"text-center\"><p>Create</p></a>
                </div>
            </div>
        </div>
        <!-- Accordion card -->
        </div>
        <!-- Accordion card -->
    </div>
    <!--/.Accordion wrapper-->
</div>
", "admin/layouts/sidebar.html.twig", "/var/www/harvesting/templates/admin/layouts/sidebar.html.twig");
    }
}
