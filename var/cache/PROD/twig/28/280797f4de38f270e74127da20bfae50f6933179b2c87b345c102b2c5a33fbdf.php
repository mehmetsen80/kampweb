<?php

/* :Security:login.html.twig */
class __TwigTemplate_39d9dba085bceb3008405c10b54956175098f8b039116538a947d9f1715bb0ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::securityview.html.twig", ":Security:login.html.twig", 1);
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
        $__internal_dfb4637161359378b0bd8b908214f1ad31277bb32ae14941dac4d04f320428a8 = $this->env->getExtension("native_profiler");
        $__internal_dfb4637161359378b0bd8b908214f1ad31277bb32ae14941dac4d04f320428a8->enter($__internal_dfb4637161359378b0bd8b908214f1ad31277bb32ae14941dac4d04f320428a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfb4637161359378b0bd8b908214f1ad31277bb32ae14941dac4d04f320428a8->leave($__internal_dfb4637161359378b0bd8b908214f1ad31277bb32ae14941dac4d04f320428a8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3920b6a1a8dac3f503b9633877eef74ae7dac5a800ade336883338031b488ad6 = $this->env->getExtension("native_profiler");
        $__internal_3920b6a1a8dac3f503b9633877eef74ae7dac5a800ade336883338031b488ad6->enter($__internal_3920b6a1a8dac3f503b9633877eef74ae7dac5a800ade336883338031b488ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<body class=\"external-page sb-l-c sb-r-c\">
<!-- Start: Main -->
<div id=\"main\" class=\"animated fadeIn\">
    <!-- Start: Content-Wrapper -->
    <section id=\"content_wrapper\">
        <!-- begin canvas animation bg -->
        <div id=\"canvas-wrapper\">
            <canvas id=\"demo-canvas\"></canvas>
        </div>
        <!-- Begin: Content -->
        <section id=\"content\">
            <div class=\"admin-form theme-info\" id=\"login1\">
                <div class=\"row mb15 table-layout\">
                    <div class=\"col-xs-6 va-m pln\">
                        <a href=\"dashboard.html\" title=\"Return to Dashboard\">
                            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/logos/logo_white.png"), "html", null, true);
        echo "\" title=\"AdminDesigns Logo\" class=\"img-responsive w250\">
                        </a>
                    </div>

                    <div class=\"col-xs-6 text-right va-b pr5\">
                        <div class=\"login-links\">
                            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"active\" title=\"Sign In\">Sign In</a>
                            <span class=\"text-white\"> | </span>
                            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\" class=\"\" title=\"Register\">Register</a>
                        </div>

                    </div>

                </div>

                <div class=\"panel panel-info mt10 br-n\">
                    <!-- end .form-header section -->
                    <form method=\"post\" action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" id=\"contact\">
                        <div class=\"panel-body bg-light p30\">
                            <div class=\"row\">
                                <div class=\"col-sm-7 pr30\">

                                    ";
        // line 40
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 41
            echo "                                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                                    ";
        }
        // line 43
        echo "                                    <div class=\"section\">
                                        <label for=\"username\" class=\"field-label text-muted fs18 mb10\">Username</label>
                                        <label for=\"username\" class=\"field prepend-icon\">
                                            <input type=\"text\" class=\"gui-input\"  placeholder=\"Enter username\"  id=\"username\" name=\"_username\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                                            <label for=\"username\" class=\"field-icon\">
                                                <i class=\"fa fa-user\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class=\"section\">
                                        <label for=\"username\" class=\"field-label text-muted fs18 mb10\">Password</label>
                                        <label for=\"password\" class=\"field prepend-icon\">
                                            <input class=\"gui-input\" placeholder=\"Enter password\" type=\"password\" id=\"password\" name=\"_password\" />
                                            <label for=\"password\" class=\"field-icon\">
                                                <i class=\"fa fa-lock\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                </div>
                                <div class=\"col-sm-5 br-l br-grey pl30\">
                                    <h3 class=\"mb25\"> You'll Have Access To Your:</h3>
                                    <p class=\"mb15\">
                                        <span class=\"fa fa-check text-success pr5\"></span> Unlimited Storage</p>
                                    <p class=\"mb15\">
                                        <span class=\"fa fa-check text-success pr5\"></span> Unlimited Photo Sharing/Storage</p>
                                    <p class=\"mb15\">
                                        <span class=\"fa fa-check text-success pr5\"></span> Unlimited User Accounts</p>
                                    <p class=\"mb15\">
                                        <span class=\"fa fa-check text-success pr5\"></span> Unlimited Events</p>
                                </div>
                            </div>
                        </div>
                        <!-- end .form-body section -->
                        <div class=\"panel-footer clearfix p10 ph15\">
                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                            <button type=\"submit\" class=\"button btn-primary mr10 pull-right\">Sign In</button>
                            <label class=\"switch ib switch-primary pull-left input-align mt10\">
                                <input type=\"checkbox\" id=\"remember\" name=\"_remember_me\" checked />
                                <label for=\"remember\" data-on=\"YES\" data-off=\"NO\"></label>
                                <span>Remember me</span>
                            </label>
                        </div>
                        <!-- end .form-footer section -->
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
        
        $__internal_3920b6a1a8dac3f503b9633877eef74ae7dac5a800ade336883338031b488ad6->leave($__internal_3920b6a1a8dac3f503b9633877eef74ae7dac5a800ade336883338031b488ad6_prof);

    }

    public function getTemplateName()
    {
        return ":Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 82,  104 => 46,  99 => 43,  93 => 41,  91 => 40,  83 => 35,  71 => 26,  66 => 24,  57 => 18,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::securityview.html.twig' %}*/
/* {% block body %}*/
/* <body class="external-page sb-l-c sb-r-c">*/
/* <!-- Start: Main -->*/
/* <div id="main" class="animated fadeIn">*/
/*     <!-- Start: Content-Wrapper -->*/
/*     <section id="content_wrapper">*/
/*         <!-- begin canvas animation bg -->*/
/*         <div id="canvas-wrapper">*/
/*             <canvas id="demo-canvas"></canvas>*/
/*         </div>*/
/*         <!-- Begin: Content -->*/
/*         <section id="content">*/
/*             <div class="admin-form theme-info" id="login1">*/
/*                 <div class="row mb15 table-layout">*/
/*                     <div class="col-xs-6 va-m pln">*/
/*                         <a href="dashboard.html" title="Return to Dashboard">*/
/*                             <img src="{{ asset('assets/img/logos/logo_white.png') }}" title="AdminDesigns Logo" class="img-responsive w250">*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <div class="col-xs-6 text-right va-b pr5">*/
/*                         <div class="login-links">*/
/*                             <a href="{{ path('login') }}" class="active" title="Sign In">Sign In</a>*/
/*                             <span class="text-white"> | </span>*/
/*                             <a href="{{ path('register') }}" class="" title="Register">Register</a>*/
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="panel panel-info mt10 br-n">*/
/*                     <!-- end .form-header section -->*/
/*                     <form method="post" action="{{ path('login') }}" id="contact">*/
/*                         <div class="panel-body bg-light p30">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-7 pr30">*/
/* */
/*                                     {% if error %}*/
/*                                         <div class="alert alert-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                                     {% endif %}*/
/*                                     <div class="section">*/
/*                                         <label for="username" class="field-label text-muted fs18 mb10">Username</label>*/
/*                                         <label for="username" class="field prepend-icon">*/
/*                                             <input type="text" class="gui-input"  placeholder="Enter username"  id="username" name="_username" value="{{ last_username }}" />*/
/*                                             <label for="username" class="field-icon">*/
/*                                                 <i class="fa fa-user"></i>*/
/*                                             </label>*/
/*                                         </label>*/
/*                                     </div>*/
/*                                     <!-- end section -->*/
/* */
/*                                     <div class="section">*/
/*                                         <label for="username" class="field-label text-muted fs18 mb10">Password</label>*/
/*                                         <label for="password" class="field prepend-icon">*/
/*                                             <input class="gui-input" placeholder="Enter password" type="password" id="password" name="_password" />*/
/*                                             <label for="password" class="field-icon">*/
/*                                                 <i class="fa fa-lock"></i>*/
/*                                             </label>*/
/*                                         </label>*/
/*                                     </div>*/
/*                                     <!-- end section -->*/
/* */
/*                                 </div>*/
/*                                 <div class="col-sm-5 br-l br-grey pl30">*/
/*                                     <h3 class="mb25"> You'll Have Access To Your:</h3>*/
/*                                     <p class="mb15">*/
/*                                         <span class="fa fa-check text-success pr5"></span> Unlimited Storage</p>*/
/*                                     <p class="mb15">*/
/*                                         <span class="fa fa-check text-success pr5"></span> Unlimited Photo Sharing/Storage</p>*/
/*                                     <p class="mb15">*/
/*                                         <span class="fa fa-check text-success pr5"></span> Unlimited User Accounts</p>*/
/*                                     <p class="mb15">*/
/*                                         <span class="fa fa-check text-success pr5"></span> Unlimited Events</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- end .form-body section -->*/
/*                         <div class="panel-footer clearfix p10 ph15">*/
/*                             <input type="hidden" name="_csrf_token"*/
/*                                    value="{{ csrf_token('authenticate') }}">*/
/*                             <button type="submit" class="button btn-primary mr10 pull-right">Sign In</button>*/
/*                             <label class="switch ib switch-primary pull-left input-align mt10">*/
/*                                 <input type="checkbox" id="remember" name="_remember_me" checked />*/
/*                                 <label for="remember" data-on="YES" data-off="NO"></label>*/
/*                                 <span>Remember me</span>*/
/*                             </label>*/
/*                         </div>*/
/*                         <!-- end .form-footer section -->*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!-- End: Content -->*/
/*     </section>*/
/*     <!-- End: Content-Wrapper -->*/
/* </div>*/
/* <!-- End: Main -->*/
/* </body>*/
/* {% endblock %}*/
/* */
/* */
