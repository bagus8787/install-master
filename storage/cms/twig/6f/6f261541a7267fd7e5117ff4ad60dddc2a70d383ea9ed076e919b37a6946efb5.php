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

/* C:\xampp\htdocs\install-master/themes/coba_theme/pages/home.htm */
class __TwigTemplate_bf99e4bdabb4a9b4966f23f6fd99e05bfbde45299c4c1bbbc74f83d474f26f24 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("content" => 3, "for" => 19);
        $filters = array("page" => 16, "escape" => 20, "media" => 27);
        $functions = array("dump" => 9, "url" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['content', 'for'],
                ['page', 'escape', 'media'],
                ['dump', 'url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "    </div>
</div>

<div class=\"container\">
    
    ";
        // line 9
        echo $this->extensions['Cms\Twig\DebugExtension']->runDump($this->env, $context, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["frontend"] ?? null), "toArray", [], "method", false, false, true, 9), 9, $this->source));
        echo "
    

    <div class=\"page-header\">
        <h2>Overview <small>Basic concepts</small></h2>
    </div>
    <div class=\"text-center\">
        <p><a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\" class=\"btn btn-lg btn-default\">Continue to AJAX framework</a></p>
    </div>
    <div class=\"row\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["frontend"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 20
            echo "        <h2> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo " </h2>
        <div class=\"col-md-4\">
            <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "content_image", [], "any", false, false, true, 22), "path", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\" alt style=\"width: 100px; height: 100px;\"/>
        </div>
        
        <p>Subcontent</p>
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "subcontent", [], "any", false, false, true, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 27
                echo "        ";
                echo twig_escape_filter($this->env, (url("/") . $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub"], "image", [], "any", false, false, true, 27), 27, $this->source))), "html", null, true);
                echo " <br>
        <img src=\"";
                // line 28
                echo twig_escape_filter($this->env, (url("/") . $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub"], "image", [], "any", false, false, true, 28), 28, $this->source))), "html", null, true);
                echo "\" alt=\"\"> <br>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/coba_theme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 31,  127 => 30,  119 => 28,  114 => 27,  110 => 26,  103 => 22,  97 => 20,  93 => 19,  87 => 16,  77 => 9,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron\">
    <div class=\"container\">
        {% content \"welcome.htm\" %}
    </div>
</div>

<div class=\"container\">
    
    {{ dump(frontend.toArray()) }}
    

    <div class=\"page-header\">
        <h2>Overview <small>Basic concepts</small></h2>
    </div>
    <div class=\"text-center\">
        <p><a href=\"{{ 'ajax'|page }}\" class=\"btn btn-lg btn-default\">Continue to AJAX framework</a></p>
    </div>
    <div class=\"row\">
        {% for data in frontend %}
        <h2> {{ data.title }} </h2>
        <div class=\"col-md-4\">
            <img src=\"{{ data.content_image.path }}\" alt style=\"width: 100px; height: 100px;\"/>
        </div>
        
        <p>Subcontent</p>
        {% for sub in data.subcontent %}
        {{ url('/')~sub.image | media }} <br>
        <img src=\"{{ url('/')~sub.image | media }}\" alt=\"\"> <br>
        {% endfor %}
        {% endfor %}
    </div>

</div>", "C:\\xampp\\htdocs\\install-master/themes/coba_theme/pages/home.htm", "");
    }
}
