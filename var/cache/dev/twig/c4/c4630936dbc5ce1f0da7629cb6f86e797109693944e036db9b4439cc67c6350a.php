<?php

/* :Security:register.html.twig */
class __TwigTemplate_f6ab35034dc33512e92151b4aba89685ecaa63d385779b65dd7cd502b4dc82d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::securityview.html.twig", ":Security:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::securityview.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e130e6185c9164a377cede385ec22e730c353d130f0e856a58157dd9b6a61d0 = $this->env->getExtension("native_profiler");
        $__internal_6e130e6185c9164a377cede385ec22e730c353d130f0e856a58157dd9b6a61d0->enter($__internal_6e130e6185c9164a377cede385ec22e730c353d130f0e856a58157dd9b6a61d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Security:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e130e6185c9164a377cede385ec22e730c353d130f0e856a58157dd9b6a61d0->leave($__internal_6e130e6185c9164a377cede385ec22e730c353d130f0e856a58157dd9b6a61d0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f274579d50449a5ab94163dc2b7bcb618c81fd16a718934cfd0359897eff464 = $this->env->getExtension("native_profiler");
        $__internal_3f274579d50449a5ab94163dc2b7bcb618c81fd16a718934cfd0359897eff464->enter($__internal_3f274579d50449a5ab94163dc2b7bcb618c81fd16a718934cfd0359897eff464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <body class=\"external-page sb-l-c sb-r-c\">
    <!-- Start: Main -->
    <div id=\"main\" class=\"animated fadeIn\">

        <!-- Start: Content-Wrapper -->
        <section id=\"content_wrapper\">

            <!-- begin canvas animation bg -->
            <div id=\"canvas-wrapper\">
                <canvas id=\"demo-canvas\"></canvas>
            </div>

            <!-- Begin: Content -->
            <section id=\"content\" class=\"\">

                <div class=\"admin-form theme-info mw700\" style=\"margin-top: 3%;\" id=\"login1\">

                    <div class=\"row mb15 table-layout\">

                        <div class=\"col-xs-6 va-m pln\">
                            <a href=\"dashboard.html\" title=\"Return to Dashboard\">
                                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/logos/logo_white.png"), "html", null, true);
        echo "\" title=\"AdminDesigns Logo\" class=\"img-responsive w250\">
                            </a>
                        </div>

                        <div class=\"col-xs-6 text-right va-b pr5\">
                            <div class=\"login-links\">
                                <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"\" title=\"Sign In\">Sign In</a>
                                <span class=\"text-white\"> | </span>
                                <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\" class=\"active\" title=\"Register\">Register</a>
                            </div>

                        </div>

                    </div>

                    <div class=\"panel panel-info mt10 br-n\">
                        <form id=\"account2\" role=\"form\" action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\" method=\"post\">
                            <div class=\"panel-body p25 bg-light\">
                                <div class=\"section-divider mt10 mb40\">
                                    <span>Set up your account</span>
                                </div>
                                ";
        // line 45
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "valid", array())) {
            // line 46
            echo "                                    <div class=\"alert alert-danger alert-dismissable\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                        <i class=\"fa fa-remove pr10\"></i>

                                        <strong>";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
            echo "</strong>
                                    </div>
                                ";
        }
        // line 53
        echo "                                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "vars", array()), "valid", array())) {
            // line 54
            echo "                                    <div class=\"alert alert-danger alert-dismissable\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                        <i class=\"fa fa-remove pr10\"></i>
                                        <strong> ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'errors');
            echo "</strong>
                                    </div>
                                ";
        }
        // line 60
        echo "                                <!-- .section-divider -->

                                <div class=\"section row\">
                                    <div class=\"col-md-12\">
                                        <label for=\"firstname\" class=\"field prepend-icon\">
                                            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fullname", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Fullname...", "type" => "text", "id" => "firstname")));
        echo "
                                            <label for=\"firstname\" class=\"field-icon\">
                                                <i class=\"fa fa-user\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->
                                </div>
                                <!-- end .section row section -->

                                <div class=\"section\">
                                    <label for=\"email\" class=\"field prepend-icon\">
                                        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Email address", "type" => "email", "id" => "email", "name" => "_username")));
        echo "
                                        <label for=\"email\" class=\"field-icon\">
                                            <i class=\"fa fa-envelope\"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class=\"section\">
                                    <label for=\"password\" class=\"field prepend-icon\">
                                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Create a password", "type" => "password", "id" => "password")));
        echo "
                                        <label for=\"password\" class=\"field-icon\">
                                            <i class=\"fa fa-unlock-alt\"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class=\"section\">
                                    <label for=\"confirmPassword\" class=\"field prepend-icon\">
                                        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Retype your password", "id" => "confirmPassword", "type" => "password")));
        echo "
                                        <label for=\"confirmPassword\" class=\"field-icon\">
                                            <i class=\"fa fa-lock\"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class=\"section-divider mv40\">
                                    <span>Review the Terms</span>
                                </div>
                                <!-- .section-divider -->
                                <div class=\"section mb15\">
                                    <label class=\"option block mt15\">
                                        <input type=\"checkbox\" name=\"terms\">
                                        <span class=\"checkbox\"></span>I agree to the
                                        <a href=\"#\" class=\"theme-link\"> terms of use. </a>
                                    </label>
                                </div>
                                <!-- end section -->

                            </div>
                            <!-- end .form-body section -->
                            <div class=\"panel-footer clearfix\">
                                <button type=\"submit\" class=\"button btn-primary pull-right\" onclick=\"if(!this.form.terms.checked){alert('You must agree to the terms first.');return false}\"  >Create Account</button>
                            </div>
                            <!-- end .form-footer section -->
                            ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                        </form>
                    </div>
                </div>

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->
    </body>
";
        
        $__internal_3f274579d50449a5ab94163dc2b7bcb618c81fd16a718934cfd0359897eff464->leave($__internal_3f274579d50449a5ab94163dc2b7bcb618c81fd16a718934cfd0359897eff464_prof);

    }

    public function getTemplateName()
    {
        return ":Security:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 124,  172 => 97,  159 => 87,  146 => 77,  131 => 65,  124 => 60,  118 => 57,  113 => 54,  110 => 53,  104 => 50,  98 => 46,  96 => 45,  88 => 40,  77 => 32,  72 => 30,  63 => 24,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::securityview.html.twig' %}*/
/* {% block body %}*/
/*     <body class="external-page sb-l-c sb-r-c">*/
/*     <!-- Start: Main -->*/
/*     <div id="main" class="animated fadeIn">*/
/* */
/*         <!-- Start: Content-Wrapper -->*/
/*         <section id="content_wrapper">*/
/* */
/*             <!-- begin canvas animation bg -->*/
/*             <div id="canvas-wrapper">*/
/*                 <canvas id="demo-canvas"></canvas>*/
/*             </div>*/
/* */
/*             <!-- Begin: Content -->*/
/*             <section id="content" class="">*/
/* */
/*                 <div class="admin-form theme-info mw700" style="margin-top: 3%;" id="login1">*/
/* */
/*                     <div class="row mb15 table-layout">*/
/* */
/*                         <div class="col-xs-6 va-m pln">*/
/*                             <a href="dashboard.html" title="Return to Dashboard">*/
/*                                 <img src="{{ asset('assets/img/logos/logo_white.png') }}" title="AdminDesigns Logo" class="img-responsive w250">*/
/*                             </a>*/
/*                         </div>*/
/* */
/*                         <div class="col-xs-6 text-right va-b pr5">*/
/*                             <div class="login-links">*/
/*                                 <a href="{{ path('login') }}" class="" title="Sign In">Sign In</a>*/
/*                                 <span class="text-white"> | </span>*/
/*                                 <a href="{{ path('register') }}" class="active" title="Register">Register</a>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="panel panel-info mt10 br-n">*/
/*                         <form id="account2" role="form" action="{{ path('register') }}" method="post">*/
/*                             <div class="panel-body p25 bg-light">*/
/*                                 <div class="section-divider mt10 mb40">*/
/*                                     <span>Set up your account</span>*/
/*                                 </div>*/
/*                                 {% if not form.username.vars.valid %}*/
/*                                     <div class="alert alert-danger alert-dismissable">*/
/*                                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                                         <i class="fa fa-remove pr10"></i>*/
/* */
/*                                         <strong>{{ form_errors(form.username) }}</strong>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 {% if not form.plainPassword.vars.valid %}*/
/*                                     <div class="alert alert-danger alert-dismissable">*/
/*                                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                                         <i class="fa fa-remove pr10"></i>*/
/*                                         <strong> {{ form_errors(form.plainPassword) }}</strong>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 <!-- .section-divider -->*/
/* */
/*                                 <div class="section row">*/
/*                                     <div class="col-md-12">*/
/*                                         <label for="firstname" class="field prepend-icon">*/
/*                                             {{ form_widget(form.fullname, {'attr': {'class': 'gui-input', 'placeholder':'Fullname...', 'type':'text', 'id':"firstname" }}) }}*/
/*                                             <label for="firstname" class="field-icon">*/
/*                                                 <i class="fa fa-user"></i>*/
/*                                             </label>*/
/*                                         </label>*/
/*                                     </div>*/
/*                                     <!-- end section -->*/
/*                                 </div>*/
/*                                 <!-- end .section row section -->*/
/* */
/*                                 <div class="section">*/
/*                                     <label for="email" class="field prepend-icon">*/
/*                                         {{ form_widget(form.username, {'attr': {'class': 'gui-input', 'placeholder':'Email address', 'type':'email', 'id':'email', 'name':'_username'}}) }}*/
/*                                         <label for="email" class="field-icon">*/
/*                                             <i class="fa fa-envelope"></i>*/
/*                                         </label>*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <!-- end section -->*/
/* */
/*                                 <div class="section">*/
/*                                     <label for="password" class="field prepend-icon">*/
/*                                         {{ form_widget(form.plainPassword.first, {'attr': {'class': 'gui-input', 'placeholder':'Create a password', 'type':'password', 'id':'password'}}) }}*/
/*                                         <label for="password" class="field-icon">*/
/*                                             <i class="fa fa-unlock-alt"></i>*/
/*                                         </label>*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <!-- end section -->*/
/* */
/*                                 <div class="section">*/
/*                                     <label for="confirmPassword" class="field prepend-icon">*/
/*                                         {{ form_widget(form.plainPassword.second, {'attr': {'class': 'gui-input', 'placeholder':'Retype your password', 'id':'confirmPassword', 'type':'password'}}) }}*/
/*                                         <label for="confirmPassword" class="field-icon">*/
/*                                             <i class="fa fa-lock"></i>*/
/*                                         </label>*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <!-- end section -->*/
/* */
/*                                 <div class="section-divider mv40">*/
/*                                     <span>Review the Terms</span>*/
/*                                 </div>*/
/*                                 <!-- .section-divider -->*/
/*                                 <div class="section mb15">*/
/*                                     <label class="option block mt15">*/
/*                                         <input type="checkbox" name="terms">*/
/*                                         <span class="checkbox"></span>I agree to the*/
/*                                         <a href="#" class="theme-link"> terms of use. </a>*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <!-- end section -->*/
/* */
/*                             </div>*/
/*                             <!-- end .form-body section -->*/
/*                             <div class="panel-footer clearfix">*/
/*                                 <button type="submit" class="button btn-primary pull-right" onclick="if(!this.form.terms.checked){alert('You must agree to the terms first.');return false}"  >Create Account</button>*/
/*                             </div>*/
/*                             <!-- end .form-footer section -->*/
/*                             {{ form_row(form._token) }}*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </section>*/
/*             <!-- End: Content -->*/
/* */
/*         </section>*/
/*         <!-- End: Content-Wrapper -->*/
/* */
/*     </div>*/
/*     <!-- End: Main -->*/
/*     </body>*/
/* {% endblock %}*/
