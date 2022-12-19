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

/* main/index.html.twig */
class __TwigTemplate_3ecf3801ba553d3bc1a2a3b908fbf0bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/select2.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello MainController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper2 { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .submitStyle {
        text-align:center;
        padding: 50px 0;
    }
</style>

    <div class=\"example-wrapper2\">

        <select class=\"js-data-example-ajax\" style=\"width: 100%;\" multiple=\"\" data-select2-id=\"select2-data-3-zzyn\" tabindex=\"-1\" aria-hidden=\"true\">
        </select>
        
        <div class=\"submitStyle\">
            <input id=\"mydump\" type=\"submit\">
        </div>
        
        <ul id=\"lista\"></ul>
        
<script>
        \$(document).ready(function () {
\$('.js-data-example-ajax').select2({
    maximumSelectionLength: 3,
    minimumInputLength: 3,
    maximumInputLength: 20,
    delay: 250,
    ajax: {
        url: \"http://127.0.0.1:8000/api/localidad/all\", //For testing don't do this.  
        dataType: 'json',
        data: function(params) {
            return {
                filter: params.term // search term
            };
        }
    }
});

\$('#mydump2').click(function() {
    let clickedButton = \$(this).attr('id');
    data = \$('.js-data-example-ajax').select2('data');
    // console.log(data);
});

\$(function() {
    \$(\"#mydump\").click(function() {
        
        \$('#lista').empty();
        
        data = \$('.js-data-example-ajax').select2('data');

        const copyData = [];
        
        data.forEach((item) => {
            copyData.push(item.text);
        });
        
        var dataString = copyData.join(',');
        
        var n = dataString.length;
        if(n) {
            \$.ajax({
                type: \"POST\",
                url: \"http://127.0.0.1:8000/api/localidad\",
                data: {filter: dataString},
                success:function(data) {
                    jQuery.each(data.results, function(index, item) {
                        \$(\"#lista\").append('<li>' + item.text + '</li>');
                    });
                 }
            });
        }
        return false;
    });
})

});

</script>
        
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 17,  107 => 16,  94 => 13,  84 => 8,  77 => 7,  67 => 3,  62 => 2,  55 => 1,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/select2.min.js') }}\"></script>

{% endblock %}

{% block stylesheets %}
        <link href=\"{{ asset('css/select2.min.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}

{% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}


{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper2 { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .submitStyle {
        text-align:center;
        padding: 50px 0;
    }
</style>

    <div class=\"example-wrapper2\">

        <select class=\"js-data-example-ajax\" style=\"width: 100%;\" multiple=\"\" data-select2-id=\"select2-data-3-zzyn\" tabindex=\"-1\" aria-hidden=\"true\">
        </select>
        
        <div class=\"submitStyle\">
            <input id=\"mydump\" type=\"submit\">
        </div>
        
        <ul id=\"lista\"></ul>
        
<script>
        \$(document).ready(function () {
\$('.js-data-example-ajax').select2({
    maximumSelectionLength: 3,
    minimumInputLength: 3,
    maximumInputLength: 20,
    delay: 250,
    ajax: {
        url: \"http://127.0.0.1:8000/api/localidad/all\", //For testing don't do this.  
        dataType: 'json',
        data: function(params) {
            return {
                filter: params.term // search term
            };
        }
    }
});

\$('#mydump2').click(function() {
    let clickedButton = \$(this).attr('id');
    data = \$('.js-data-example-ajax').select2('data');
    // console.log(data);
});

\$(function() {
    \$(\"#mydump\").click(function() {
        
        \$('#lista').empty();
        
        data = \$('.js-data-example-ajax').select2('data');

        const copyData = [];
        
        data.forEach((item) => {
            copyData.push(item.text);
        });
        
        var dataString = copyData.join(',');
        
        var n = dataString.length;
        if(n) {
            \$.ajax({
                type: \"POST\",
                url: \"http://127.0.0.1:8000/api/localidad\",
                data: {filter: dataString},
                success:function(data) {
                    jQuery.each(data.results, function(index, item) {
                        \$(\"#lista\").append('<li>' + item.text + '</li>');
                    });
                 }
            });
        }
        return false;
    });
})

});

</script>
        
    </div>

{% endblock %}", "main/index.html.twig", "/Users/t10barba/Projects/my_project_directory/templates/main/index.html.twig");
    }
}
