<?php

/* ::securityview.html.twig */
class __TwigTemplate_b5c664c891bda8099a8d76600dfe1981e44b37d183a6192024856dcb17f353e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b213091fa91e537d1b96a3f78daabeece0a5658638c4178a6d0ac9287d71e865 = $this->env->getExtension("native_profiler");
        $__internal_b213091fa91e537d1b96a3f78daabeece0a5658638c4178a6d0ac9287d71e865->enter($__internal_b213091fa91e537d1b96a3f78daabeece0a5658638c4178a6d0ac9287d71e865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::securityview.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <title>AdminDesigns - A Responsive HTML5 Admin UI Framework</title>
        <meta name=\"keywords\" content=\"HTML5 Bootstrap 3 Admin Template UI Theme\" />
        <meta name=\"description\" content=\"AdminDesigns - A Responsive HTML5 Admin UI Framework\">
        <meta name=\"author\" content=\"AdminDesigns\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    </head>
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "    </body>
</html>
";
        
        $__internal_b213091fa91e537d1b96a3f78daabeece0a5658638c4178a6d0ac9287d71e865->leave($__internal_b213091fa91e537d1b96a3f78daabeece0a5658638c4178a6d0ac9287d71e865_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_16d17098ce1dae13a6b7f00dad6d0f92ef0a3d9cedffc5f1ece869c0503306a5 = $this->env->getExtension("native_profiler");
        $__internal_16d17098ce1dae13a6b7f00dad6d0f92ef0a3d9cedffc5f1ece869c0503306a5->enter($__internal_16d17098ce1dae13a6b7f00dad6d0f92ef0a3d9cedffc5f1ece869c0503306a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "KampWeb!";
        
        $__internal_16d17098ce1dae13a6b7f00dad6d0f92ef0a3d9cedffc5f1ece869c0503306a5->leave($__internal_16d17098ce1dae13a6b7f00dad6d0f92ef0a3d9cedffc5f1ece869c0503306a5_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4380a5e77de83fa9d2b9b48ff77782decd7d3d374974a85e21e9606fb0f64709 = $this->env->getExtension("native_profiler");
        $__internal_4380a5e77de83fa9d2b9b48ff77782decd7d3d374974a85e21e9606fb0f64709->enter($__internal_4380a5e77de83fa9d2b9b48ff77782decd7d3d374974a85e21e9606fb0f64709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <!-- Font CSS -->
            <link rel='stylesheet' type='text/css' href='";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/fonts/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "'>
            <!-- Theme CSS -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/skin/default_skin/css/theme.css"), "html", null, true);
        echo "\">
            <!-- Admin Forms CSS -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin-tools/admin-forms/css/admin-forms.css"), "html", null, true);
        echo "\">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
            <![endif]-->
        ";
        
        $__internal_4380a5e77de83fa9d2b9b48ff77782decd7d3d374974a85e21e9606fb0f64709->leave($__internal_4380a5e77de83fa9d2b9b48ff77782decd7d3d374974a85e21e9606fb0f64709_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef92156f7e6e43cb0b9bc3f182b32bf02e8e2eb16e77b148c6fe950e01466766 = $this->env->getExtension("native_profiler");
        $__internal_ef92156f7e6e43cb0b9bc3f182b32bf02e8e2eb16e77b148c6fe950e01466766->enter($__internal_ef92156f7e6e43cb0b9bc3f182b32bf02e8e2eb16e77b148c6fe950e01466766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef92156f7e6e43cb0b9bc3f182b32bf02e8e2eb16e77b148c6fe950e01466766->leave($__internal_ef92156f7e6e43cb0b9bc3f182b32bf02e8e2eb16e77b148c6fe950e01466766_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c40768973d47e0e305ed3299cd4b7586a035055ca860e9a3ab68ab3e0226e180 = $this->env->getExtension("native_profiler");
        $__internal_c40768973d47e0e305ed3299cd4b7586a035055ca860e9a3ab68ab3e0226e180->enter($__internal_c40768973d47e0e305ed3299cd4b7586a035055ca860e9a3ab68ab3e0226e180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "            <!-- jQuery -->
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
            <!-- CanvasBG Plugin(creates mousehover effect) -->
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/canvasbg/canvasbg.js"), "html", null, true);
        echo "\"></script>

            <!-- Theme Javascript -->
            <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                jQuery(document).ready(function() {

                    \"use strict\";

                    // Init Theme Core
                    Core.init();

                    // Init Demo JS
                    Demo.init();

                    // Init CanvasBG and pass target starting location
                    CanvasBG.init({
                        Loc: {
                            x: window.innerWidth / 2,
                            y: window.innerHeight / 3.3
                        },
                    });

                });
            </script>
        ";
        
        $__internal_c40768973d47e0e305ed3299cd4b7586a035055ca860e9a3ab68ab3e0226e180->leave($__internal_c40768973d47e0e305ed3299cd4b7586a035055ca860e9a3ab68ab3e0226e180_prof);

    }

    public function getTemplateName()
    {
        return "::securityview.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  149 => 37,  145 => 36,  141 => 35,  135 => 32,  130 => 30,  126 => 29,  123 => 28,  117 => 27,  106 => 26,  92 => 18,  87 => 16,  82 => 14,  79 => 13,  73 => 12,  61 => 11,  52 => 60,  49 => 27,  47 => 26,  44 => 25,  42 => 12,  38 => 11,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <!-- Meta, title, CSS, favicons, etc. -->*/
/*         <meta charset="utf-8">*/
/*         <title>AdminDesigns - A Responsive HTML5 Admin UI Framework</title>*/
/*         <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />*/
/*         <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">*/
/*         <meta name="author" content="AdminDesigns">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <title>{% block title %}KampWeb!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <!-- Font CSS -->*/
/*             <link rel='stylesheet' type='text/css' href='{{ asset('assets/fonts/font-awesome/css/font-awesome.css') }}'>*/
/*             <!-- Theme CSS -->*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css') }}">*/
/*             <!-- Admin Forms CSS -->*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin-tools/admin-forms/css/admin-forms.css') }}">*/
/*             <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*             <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*             <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>*/
/*             <![endif]-->*/
/*         {% endblock %}*/
/*     </head>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <!-- jQuery -->*/
/*             <script src="{{ asset('assets/vendor/jquery/jquery-1.11.1.min.js') }}"></script>*/
/*             <script src="{{ asset('assets/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>*/
/*             <!-- CanvasBG Plugin(creates mousehover effect) -->*/
/*             <script src="{{ asset('assets/vendor/plugins/canvasbg/canvasbg.js') }}"></script>*/
/* */
/*             <!-- Theme Javascript -->*/
/*             <script src="{{ asset('assets/js/utility/utility.js') }}"></script>*/
/*             <script src="{{ asset('assets/js/demo/demo.js') }}"></script>*/
/*             <script src="{{ asset('assets/js/main.js') }}"></script>*/
/*             <script type="text/javascript">*/
/*                 jQuery(document).ready(function() {*/
/* */
/*                     "use strict";*/
/* */
/*                     // Init Theme Core*/
/*                     Core.init();*/
/* */
/*                     // Init Demo JS*/
/*                     Demo.init();*/
/* */
/*                     // Init CanvasBG and pass target starting location*/
/*                     CanvasBG.init({*/
/*                         Loc: {*/
/*                             x: window.innerWidth / 2,*/
/*                             y: window.innerHeight / 3.3*/
/*                         },*/
/*                     });*/
/* */
/*                 });*/
/*             </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
