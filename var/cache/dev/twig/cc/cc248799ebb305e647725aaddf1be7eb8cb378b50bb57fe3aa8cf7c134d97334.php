<?php

/* :Security:changepassword.html.twig */
class __TwigTemplate_1a83e76016b0a133aeede3e051fa797e67f7fb189f896f3d90733f2f9d884429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default.html.twig", ":Security:changepassword.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b30f577ff3f7f3ac43ce36029c3701603b23a0899adf5e93f240591da64521d1 = $this->env->getExtension("native_profiler");
        $__internal_b30f577ff3f7f3ac43ce36029c3701603b23a0899adf5e93f240591da64521d1->enter($__internal_b30f577ff3f7f3ac43ce36029c3701603b23a0899adf5e93f240591da64521d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Security:changepassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b30f577ff3f7f3ac43ce36029c3701603b23a0899adf5e93f240591da64521d1->leave($__internal_b30f577ff3f7f3ac43ce36029c3701603b23a0899adf5e93f240591da64521d1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_13ee50241029e86ec04582a1b49b3b4b9599d3be0a365bfe07cda9e3394c2f63 = $this->env->getExtension("native_profiler");
        $__internal_13ee50241029e86ec04582a1b49b3b4b9599d3be0a365bfe07cda9e3394c2f63->enter($__internal_13ee50241029e86ec04582a1b49b3b4b9599d3be0a365bfe07cda9e3394c2f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link rel='stylesheet' type='text/css' href='";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/fonts/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "'>
    <!-- Theme CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/skin/default_skin/css/theme.css"), "html", null, true);
        echo "\">

    <!-- Admin Forms CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin-tools/admin-forms/css/admin-forms.css"), "html", null, true);
        echo "\">
";
        
        $__internal_13ee50241029e86ec04582a1b49b3b4b9599d3be0a365bfe07cda9e3394c2f63->leave($__internal_13ee50241029e86ec04582a1b49b3b4b9599d3be0a365bfe07cda9e3394c2f63_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b911fdcacbc82ed2b712d09511c45152b2a868bf13eca822582aff683169ec3 = $this->env->getExtension("native_profiler");
        $__internal_2b911fdcacbc82ed2b712d09511c45152b2a868bf13eca822582aff683169ec3->enter($__internal_2b911fdcacbc82ed2b712d09511c45152b2a868bf13eca822582aff683169ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "updatesuccess"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 14
            echo "        <div class=\"ui-pnotify stack_top_right\" style=\"width: 290px; opacity: 1; display: block; overflow: visible; right: 8px; top: 70px;\"><div class=\"alert ui-pnotify-container alert-success ui-pnotify-shadow\" style=\"min-height: 16px; overflow: hidden;\"><div class=\"ui-pnotify-closer\" style=\"cursor: pointer; visibility: hidden;\"><span class=\"glyphicon glyphicon-remove\" title=\"Close\"></span></div><div class=\"ui-pnotify-sticker\" style=\"cursor: pointer; visibility: hidden;\"><span class=\"glyphicon glyphicon-play\" title=\"Stick\"></span></div><div class=\"ui-pnotify-icon\"><span class=\"glyphicon glyphicon-ok-sign\"></span></div><h4 class=\"ui-pnotify-title\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</h4><div class=\"ui-pnotify-text\"></div><div style=\"margin-top: 5px; clear: both; text-align: right; display: none;\"></div></div></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "updateerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 17
            echo "        <div class=\"ui-pnotify stack_top_right\" style=\"width: 290px; opacity: 1; display: block; overflow: visible; right: 8px; top: 70px;\"><div class=\"alert ui-pnotify-container alert-warning ui-pnotify-shadow\" style=\"min-height: 16px; overflow: hidden;\"><div class=\"ui-pnotify-closer\" style=\"cursor: pointer; visibility: hidden;\"><span class=\"glyphicon glyphicon-remove\" title=\"Close\"></span></div><div class=\"ui-pnotify-sticker\" style=\"cursor: pointer; visibility: hidden;\"><span class=\"glyphicon glyphicon-play\" title=\"Stick\"></span></div><div class=\"ui-pnotify-icon\"><span class=\"glyphicon glyphicon-ok-sign\"></span></div><h4 class=\"ui-pnotify-title\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</h4><div class=\"ui-pnotify-text\"></div><div style=\"margin-top: 5px; clear: both; text-align: right; display: none;\"></div></div></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <!-- Start: Content-Wrapper -->
    <section id=\"content_wrapper\">
        <!-- Start: TOPBAR -->
        <header id=\"topbar\">
            <div class=\"topbar-left\">
                <ol class=\"breadcrumb\">
                    <li class=\"crumb-active\">
                        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">Dashboard</a>
                    </li>
                    <li class=\"crumb-icon\">
                        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                        </a>
                    </li>
                    <li class=\"crumb-link\">
                        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("changepassword");
        echo "\">Change Password</a>
                    </li>
                </ol>
            </div>
        </header>
        <!-- End: TOPBAR -->
        <!-- Begin: Content -->
        <section id=\"content\" class=\"table-layout animated fadeIn\">
            <!-- begin: .tray-center -->
            <div class=\"tray tray-center\">

                <!-- Begin: Content Header -->
                <div class=\"content-header\">
                    <h2>Fill in the fields, then press the update button!</h2>
                </div>

                <!-- Validation Example -->
                <div class=\"admin-form theme-primary mw1000 center-block\" style=\"padding-bottom: 175px;\">

                    <div class=\"panel heading-border\">

                        <form method=\"post\" action=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("changepassword");
        echo "\" id=\"admin-form\">

                            <div class=\"panel-body bg-light\">

                                <div class=\"section-divider mt20 mb40\">
                                    <span> Update Your Password </span>
                                </div>
                                ";
        // line 63
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["passwordform"]) ? $context["passwordform"] : $this->getContext($context, "passwordform")), "oldPassword", array()), "vars", array()), "valid", array())) {
            // line 64
            echo "                                    <div class=\"alert alert-danger alert-dismissable\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                        <i class=\"fa fa-remove pr10\"></i>
                                        <strong> ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["passwordform"]) ? $context["passwordform"] : $this->getContext($context, "passwordform")), "oldPassword", array()), 'errors');
            echo "</strong>
                                    </div>
                                ";
        }
        // line 70
        echo "                                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["passwordform"]) ? $context["passwordform"] : $this->getContext($context, "passwordform")), "newpassword", array()), "vars", array()), "valid", array())) {
            // line 71
            echo "                                    <div class=\"alert alert-danger alert-dismissable\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                        <i class=\"fa fa-remove pr10\"></i>
                                        <strong> ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["passwordform"]) ? $context["passwordform"] : $this->getContext($context, "passwordform")), "newpassword", array()), 'errors');
            echo "</strong>
                                    </div>
                                ";
        }
        // line 77
        echo "
                                <div class=\"section\">
                                    <label for=\"password\" class=\"field prepend-icon\">
                                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["passwordform"]) ? $context["passwordform"] : $this->getContext($context, "passwordform")), "oldPassword", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Current password", "type" => "password", "id" => "password")));
        echo "
                                        <label for=\"password\" class=\"field-icon\">
                                            <i class=\"fa fa-lock\"></i>
                                        </label>
                                    </label>
                                </div>

                                <div class=\"section\">
                                    <label for=\"password\" class=\"field prepend-icon\">
                                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["passwordform"]) ? $context["passwordform"] : $this->getContext($context, "passwordform")), "newpassword", array()), "first", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "New password", "type" => "password", "id" => "password")));
        echo "
                                        <label for=\"password\" class=\"field-icon\">
                                            <i class=\"fa fa-lock\"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class=\"section\">
                                    <label for=\"repeatPassword\" class=\"field prepend-icon\">
                                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["passwordform"]) ? $context["passwordform"] : $this->getContext($context, "passwordform")), "newpassword", array()), "second", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Repeat new password", "type" => "password", "id" => "repeatPassword")));
        echo "
                                        <label for=\"repeatPassword\" class=\"field-icon\">
                                            <i class=\"fa fa-unlock-alt\"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->
                            </div>
                            <!-- end .form-body section -->
                            <div class=\"panel-footer text-right\">
                                <button type=\"submit\" class=\"button btn-primary\"> Update </button>
                                <button type=\"reset\" class=\"button\"> Cancel </button>
                            </div>
                            <!-- end .form-footer section -->
                            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["passwordform"]) ? $context["passwordform"] : $this->getContext($context, "passwordform")), "_token", array()), 'row');
        echo "
                        </form>

                    </div>

                </div>
                <!-- end: .admin-form -->

            </div>
            <!-- end: .tray-center -->

        </section>
        <!-- End: Content -->

    </section>


    <style>
        /* demo page styles */
        body { min-height: 2300px; }

        .content-header b,
        .admin-form .panel.heading-border:before,
        .admin-form .panel .heading-border:before {
            transition: all 0.7s ease;
        }
        /* responsive demo styles */
        @media (max-width: 800px) {
            .admin-form .panel-body { padding: 18px 12px; }
        }
    </style>

";
        
        $__internal_2b911fdcacbc82ed2b712d09511c45152b2a868bf13eca822582aff683169ec3->leave($__internal_2b911fdcacbc82ed2b712d09511c45152b2a868bf13eca822582aff683169ec3_prof);

    }

    // line 146
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ac186fb0b7d561d92f06eabc70f0aa847c973b260e02825a917a0cfdd63a0f8 = $this->env->getExtension("native_profiler");
        $__internal_5ac186fb0b7d561d92f06eabc70f0aa847c973b260e02825a917a0cfdd63a0f8->enter($__internal_5ac186fb0b7d561d92f06eabc70f0aa847c973b260e02825a917a0cfdd63a0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 147
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Theme Javascript -->
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Validate Plugin-->
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin-tools/admin-forms/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery Validate Addon -->
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin-tools/admin-forms/js/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
    <!-- PNotify -->
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/pnotify/pnotify.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            \"use strict\";

            // Init Demo JS
            Demo.init();


            // Init Theme Core
            Core.init();
            /* @custom validation method (smartCaptcha)
             ------------------------------------------------------------------ */

            \$.validator.methods.smartCaptcha = function(value, element, param) {
                return value == param;
            };

            \$(\"#admin-form\").validate({

                /* @validation states + elements
                 ------------------------------------------- */

                errorClass: \"state-error\",
                validClass: \"state-success\",
                errorElement: \"em\",

                /* @validation rules
                 ------------------------------------------ */

                rules: {
                    firstname: {
                        required: false
                    },
                    lastname: {
                        required: false
                    },
                    useremail: {
                        required: false,
                        email: true
                    },
                    mobile_phone: {
                        require_from_group: [1, \".phone-group\"]
                    },
                    password: {
                        required: false,
                        minlength: 6,
                        maxlength: 16
                    },
                    repeatPassword: {
                        required: false,
                        minlength: 6,
                        maxlength: 16,
                        equalTo: '#password'
                    },

                },

                /* @validation error messages
                 ---------------------------------------------- */

                messages: {
                    firstname: {
                        required: 'Enter first name'
                    },
                    lastname: {
                        required: 'Enter last name'
                    },
                    useremail: {
                        required: 'Enter email address',
                        email: 'Enter a VALID email address'
                    },
                    website: {
                        required: 'Enter your website URL',
                        url: 'URL should start with - http://www'
                    },
                    language: {
                        required: 'Choose a language'
                    },
                    upload1: {
                        required: 'Please browse a file',
                        extension: 'File format not supported'
                    },
                    mobileos: {
                        required: 'Please select a mobile platform'
                    },
                    comment: {
                        required: 'Oops you forgot to comment',
                        minlength: 'Enter at least 30 characters or more'
                    },
                    mobile_phone: {
                        require_from_group: 'Fill at least a mobile contact'
                    },
                    home_phone: {
                        require_from_group: 'Fill at least a home contact'
                    },
                    password: {
                        required: 'Please enter a password'
                    },
                    repeatPassword: {
                        required: 'Please repeat the above password',
                        equalTo: 'Password mismatch detected'
                    },
                    gender: {
                        required: 'Please choose specie'
                    },
                    languages: {
                        required: 'Select laguages spoken'
                    },
                    verification: {
                        required: 'Please enter verification code',
                        smartCaptcha: 'Oops - enter a correct verification code'
                    },
                    applicant_age: {
                        required: 'Enter applicant age',
                        min: 'Must be 16 years and above'
                    },
                    licence_no: {
                        required: 'Enter licence number'
                    },
                    child_name: {
                        required: 'Please enter your childs name'
                    }

                },

                /* @validation highlighting + error placement
                 ---------------------------------------------------- */

                highlight: function(element, errorClass, validClass) {
                    \$(element).closest('.field').addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function(element, errorClass, validClass) {
                    \$(element).closest('.field').removeClass(errorClass).addClass(validClass);
                },
                errorPlacement: function(error, element) {
                    if (element.is(\":radio\") || element.is(\":checkbox\")) {
                        element.closest('.option-group').after(error);
                    } else {
                        error.insertAfter(element.parent());
                    }
                }

            });


            // Cache several DOM elements
            var pageHeader = \$('.content-header').find('b');
            var adminForm = \$('.admin-form');
            var options = adminForm.find('.option');
            var switches = adminForm.find('.switch');
            var buttons = adminForm.find('.button');
            var Panel = adminForm.find('.panel');


            setTimeout(function() {
                adminForm.addClass('theme-primary');
                Panel.addClass('panel-primary');
                pageHeader.addClass('text-primary');

                \$(options).each(function(i, e) {
                    if (\$(e).hasClass('block')) {
                        \$(e).removeClass().addClass('block mt15 option option-primary');
                    } else {
                        \$(e).removeClass().addClass('option option-primary');
                    }
                });

                // var sliders = \$('.ui-timepicker-div', adminForm).find('.ui-slider');
                \$('body').find('.ui-slider').each(function(i, e) {
                    \$(e).addClass('slider-primary');
                });

                \$(switches).each(function(i, ele) {
                    if (\$(ele).hasClass('switch-round')) {
                        if (\$(ele).hasClass('block')) {
                            \$(ele).removeClass().addClass('block mt15 switch switch-round switch-primary');
                        } else {
                            \$(ele).removeClass().addClass('switch switch-round switch-primary');
                        }
                    } else {
                        if (\$(ele).hasClass('block')) {
                            \$(ele).removeClass().addClass('block mt15 switch switch-primary');
                        } else {
                            \$(ele).removeClass().addClass('switch switch-primary');
                        }
                    }
                });
                buttons.removeClass().addClass('button btn-primary');
            }, 800);

            \$(\"#datepicker1\").datepicker({
                prevText: '<i class=\"fa fa-chevron-left\"></i>',
                nextText: '<i class=\"fa fa-chevron-right\"></i>',
                showButtonPanel: false,
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = \$(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class=\"' + themeClass + '\"></div>');
                    }
                }
            });

        });
    </script>
    <!-- END: PAGE SCRIPTS -->
";
        
        $__internal_5ac186fb0b7d561d92f06eabc70f0aa847c973b260e02825a917a0cfdd63a0f8->leave($__internal_5ac186fb0b7d561d92f06eabc70f0aa847c973b260e02825a917a0cfdd63a0f8_prof);

    }

    public function getTemplateName()
    {
        return ":Security:changepassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 160,  309 => 158,  303 => 155,  298 => 153,  294 => 152,  290 => 151,  285 => 149,  281 => 148,  278 => 147,  272 => 146,  232 => 113,  215 => 99,  202 => 89,  190 => 80,  185 => 77,  179 => 74,  174 => 71,  171 => 70,  165 => 67,  160 => 64,  158 => 63,  148 => 56,  124 => 35,  116 => 30,  110 => 27,  100 => 19,  91 => 17,  86 => 16,  77 => 14,  72 => 13,  66 => 12,  57 => 10,  51 => 7,  46 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::default.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <!-- Font CSS (Via CDN) -->*/
/*     <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>*/
/*     <link rel='stylesheet' type='text/css' href='{{ asset('assets/fonts/font-awesome/css/font-awesome.css') }}'>*/
/*     <!-- Theme CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css') }}">*/
/* */
/*     <!-- Admin Forms CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin-tools/admin-forms/css/admin-forms.css') }}">*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% for flash_message in app.session.flashBag.get('updatesuccess') %}*/
/*         <div class="ui-pnotify stack_top_right" style="width: 290px; opacity: 1; display: block; overflow: visible; right: 8px; top: 70px;"><div class="alert ui-pnotify-container alert-success ui-pnotify-shadow" style="min-height: 16px; overflow: hidden;"><div class="ui-pnotify-closer" style="cursor: pointer; visibility: hidden;"><span class="glyphicon glyphicon-remove" title="Close"></span></div><div class="ui-pnotify-sticker" style="cursor: pointer; visibility: hidden;"><span class="glyphicon glyphicon-play" title="Stick"></span></div><div class="ui-pnotify-icon"><span class="glyphicon glyphicon-ok-sign"></span></div><h4 class="ui-pnotify-title">{{ flash_message }}</h4><div class="ui-pnotify-text"></div><div style="margin-top: 5px; clear: both; text-align: right; display: none;"></div></div></div>*/
/*     {% endfor %}*/
/*     {% for flash_message in app.session.flashBag.get('updateerror') %}*/
/*         <div class="ui-pnotify stack_top_right" style="width: 290px; opacity: 1; display: block; overflow: visible; right: 8px; top: 70px;"><div class="alert ui-pnotify-container alert-warning ui-pnotify-shadow" style="min-height: 16px; overflow: hidden;"><div class="ui-pnotify-closer" style="cursor: pointer; visibility: hidden;"><span class="glyphicon glyphicon-remove" title="Close"></span></div><div class="ui-pnotify-sticker" style="cursor: pointer; visibility: hidden;"><span class="glyphicon glyphicon-play" title="Stick"></span></div><div class="ui-pnotify-icon"><span class="glyphicon glyphicon-ok-sign"></span></div><h4 class="ui-pnotify-title">{{ flash_message }}</h4><div class="ui-pnotify-text"></div><div style="margin-top: 5px; clear: both; text-align: right; display: none;"></div></div></div>*/
/*     {% endfor %}*/
/* */
/*     <!-- Start: Content-Wrapper -->*/
/*     <section id="content_wrapper">*/
/*         <!-- Start: TOPBAR -->*/
/*         <header id="topbar">*/
/*             <div class="topbar-left">*/
/*                 <ol class="breadcrumb">*/
/*                     <li class="crumb-active">*/
/*                         <a href="{{ path('dashboard') }}">Dashboard</a>*/
/*                     </li>*/
/*                     <li class="crumb-icon">*/
/*                         <a href="{{ path('dashboard') }}">*/
/*                             <span class="glyphicon glyphicon-home"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="crumb-link">*/
/*                         <a href="{{ path('changepassword') }}">Change Password</a>*/
/*                     </li>*/
/*                 </ol>*/
/*             </div>*/
/*         </header>*/
/*         <!-- End: TOPBAR -->*/
/*         <!-- Begin: Content -->*/
/*         <section id="content" class="table-layout animated fadeIn">*/
/*             <!-- begin: .tray-center -->*/
/*             <div class="tray tray-center">*/
/* */
/*                 <!-- Begin: Content Header -->*/
/*                 <div class="content-header">*/
/*                     <h2>Fill in the fields, then press the update button!</h2>*/
/*                 </div>*/
/* */
/*                 <!-- Validation Example -->*/
/*                 <div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">*/
/* */
/*                     <div class="panel heading-border">*/
/* */
/*                         <form method="post" action="{{ path('changepassword') }}" id="admin-form">*/
/* */
/*                             <div class="panel-body bg-light">*/
/* */
/*                                 <div class="section-divider mt20 mb40">*/
/*                                     <span> Update Your Password </span>*/
/*                                 </div>*/
/*                                 {% if not passwordform.oldPassword.vars.valid %}*/
/*                                     <div class="alert alert-danger alert-dismissable">*/
/*                                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                                         <i class="fa fa-remove pr10"></i>*/
/*                                         <strong> {{ form_errors(passwordform.oldPassword) }}</strong>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 {% if not passwordform.newpassword.vars.valid %}*/
/*                                     <div class="alert alert-danger alert-dismissable">*/
/*                                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                                         <i class="fa fa-remove pr10"></i>*/
/*                                         <strong> {{ form_errors(passwordform.newpassword) }}</strong>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/* */
/*                                 <div class="section">*/
/*                                     <label for="password" class="field prepend-icon">*/
/*                                         {{ form_widget(passwordform.oldPassword, {'attr': {'class': 'gui-input', 'placeholder':'Current password', 'type':'password', 'id':"password" }}) }}*/
/*                                         <label for="password" class="field-icon">*/
/*                                             <i class="fa fa-lock"></i>*/
/*                                         </label>*/
/*                                     </label>*/
/*                                 </div>*/
/* */
/*                                 <div class="section">*/
/*                                     <label for="password" class="field prepend-icon">*/
/*                                         {{ form_widget(passwordform.newpassword.first, {'attr': {'class': 'gui-input', 'placeholder':'New password', 'type':'password', 'id':"password" }}) }}*/
/*                                         <label for="password" class="field-icon">*/
/*                                             <i class="fa fa-lock"></i>*/
/*                                         </label>*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <!-- end section -->*/
/* */
/*                                 <div class="section">*/
/*                                     <label for="repeatPassword" class="field prepend-icon">*/
/*                                         {{ form_widget(passwordform.newpassword.second, {'attr': {'class': 'gui-input', 'placeholder':'Repeat new password', 'type':'password', 'id':"repeatPassword" }}) }}*/
/*                                         <label for="repeatPassword" class="field-icon">*/
/*                                             <i class="fa fa-unlock-alt"></i>*/
/*                                         </label>*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <!-- end section -->*/
/*                             </div>*/
/*                             <!-- end .form-body section -->*/
/*                             <div class="panel-footer text-right">*/
/*                                 <button type="submit" class="button btn-primary"> Update </button>*/
/*                                 <button type="reset" class="button"> Cancel </button>*/
/*                             </div>*/
/*                             <!-- end .form-footer section -->*/
/*                             {{ form_row(passwordform._token) }}*/
/*                         </form>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!-- end: .admin-form -->*/
/* */
/*             </div>*/
/*             <!-- end: .tray-center -->*/
/* */
/*         </section>*/
/*         <!-- End: Content -->*/
/* */
/*     </section>*/
/* */
/* */
/*     <style>*/
/*         /* demo page styles *//* */
/*         body { min-height: 2300px; }*/
/* */
/*         .content-header b,*/
/*         .admin-form .panel.heading-border:before,*/
/*         .admin-form .panel .heading-border:before {*/
/*             transition: all 0.7s ease;*/
/*         }*/
/*         /* responsive demo styles *//* */
/*         @media (max-width: 800px) {*/
/*             .admin-form .panel-body { padding: 18px 12px; }*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <!-- jQuery -->*/
/*     <script src="{{ asset('assets/vendor/jquery/jquery-1.11.1.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>*/
/*     <!-- Theme Javascript -->*/
/*     <script src="{{ asset('assets/js/utility/utility.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/demo/demo.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/main.js') }}"></script>*/
/*     <!-- jQuery Validate Plugin-->*/
/*     <script src="{{ asset('assets/admin-tools/admin-forms/js/jquery.validate.min.js') }}"></script>*/
/* */
/*     <!-- jQuery Validate Addon -->*/
/*     <script src="{{ asset('assets/admin-tools/admin-forms/js/additional-methods.min.js') }}"></script>*/
/*     <!-- PNotify -->*/
/*     <script src="{{ asset('assets/vendor/plugins/pnotify/pnotify.js') }}"></script>*/
/* */
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function() {*/
/*             "use strict";*/
/* */
/*             // Init Demo JS*/
/*             Demo.init();*/
/* */
/* */
/*             // Init Theme Core*/
/*             Core.init();*/
/*             /* @custom validation method (smartCaptcha)*/
/*              ------------------------------------------------------------------ *//* */
/* */
/*             $.validator.methods.smartCaptcha = function(value, element, param) {*/
/*                 return value == param;*/
/*             };*/
/* */
/*             $("#admin-form").validate({*/
/* */
/*                 /* @validation states + elements*/
/*                  ------------------------------------------- *//* */
/* */
/*                 errorClass: "state-error",*/
/*                 validClass: "state-success",*/
/*                 errorElement: "em",*/
/* */
/*                 /* @validation rules*/
/*                  ------------------------------------------ *//* */
/* */
/*                 rules: {*/
/*                     firstname: {*/
/*                         required: false*/
/*                     },*/
/*                     lastname: {*/
/*                         required: false*/
/*                     },*/
/*                     useremail: {*/
/*                         required: false,*/
/*                         email: true*/
/*                     },*/
/*                     mobile_phone: {*/
/*                         require_from_group: [1, ".phone-group"]*/
/*                     },*/
/*                     password: {*/
/*                         required: false,*/
/*                         minlength: 6,*/
/*                         maxlength: 16*/
/*                     },*/
/*                     repeatPassword: {*/
/*                         required: false,*/
/*                         minlength: 6,*/
/*                         maxlength: 16,*/
/*                         equalTo: '#password'*/
/*                     },*/
/* */
/*                 },*/
/* */
/*                 /* @validation error messages*/
/*                  ---------------------------------------------- *//* */
/* */
/*                 messages: {*/
/*                     firstname: {*/
/*                         required: 'Enter first name'*/
/*                     },*/
/*                     lastname: {*/
/*                         required: 'Enter last name'*/
/*                     },*/
/*                     useremail: {*/
/*                         required: 'Enter email address',*/
/*                         email: 'Enter a VALID email address'*/
/*                     },*/
/*                     website: {*/
/*                         required: 'Enter your website URL',*/
/*                         url: 'URL should start with - http://www'*/
/*                     },*/
/*                     language: {*/
/*                         required: 'Choose a language'*/
/*                     },*/
/*                     upload1: {*/
/*                         required: 'Please browse a file',*/
/*                         extension: 'File format not supported'*/
/*                     },*/
/*                     mobileos: {*/
/*                         required: 'Please select a mobile platform'*/
/*                     },*/
/*                     comment: {*/
/*                         required: 'Oops you forgot to comment',*/
/*                         minlength: 'Enter at least 30 characters or more'*/
/*                     },*/
/*                     mobile_phone: {*/
/*                         require_from_group: 'Fill at least a mobile contact'*/
/*                     },*/
/*                     home_phone: {*/
/*                         require_from_group: 'Fill at least a home contact'*/
/*                     },*/
/*                     password: {*/
/*                         required: 'Please enter a password'*/
/*                     },*/
/*                     repeatPassword: {*/
/*                         required: 'Please repeat the above password',*/
/*                         equalTo: 'Password mismatch detected'*/
/*                     },*/
/*                     gender: {*/
/*                         required: 'Please choose specie'*/
/*                     },*/
/*                     languages: {*/
/*                         required: 'Select laguages spoken'*/
/*                     },*/
/*                     verification: {*/
/*                         required: 'Please enter verification code',*/
/*                         smartCaptcha: 'Oops - enter a correct verification code'*/
/*                     },*/
/*                     applicant_age: {*/
/*                         required: 'Enter applicant age',*/
/*                         min: 'Must be 16 years and above'*/
/*                     },*/
/*                     licence_no: {*/
/*                         required: 'Enter licence number'*/
/*                     },*/
/*                     child_name: {*/
/*                         required: 'Please enter your childs name'*/
/*                     }*/
/* */
/*                 },*/
/* */
/*                 /* @validation highlighting + error placement*/
/*                  ---------------------------------------------------- *//* */
/* */
/*                 highlight: function(element, errorClass, validClass) {*/
/*                     $(element).closest('.field').addClass(errorClass).removeClass(validClass);*/
/*                 },*/
/*                 unhighlight: function(element, errorClass, validClass) {*/
/*                     $(element).closest('.field').removeClass(errorClass).addClass(validClass);*/
/*                 },*/
/*                 errorPlacement: function(error, element) {*/
/*                     if (element.is(":radio") || element.is(":checkbox")) {*/
/*                         element.closest('.option-group').after(error);*/
/*                     } else {*/
/*                         error.insertAfter(element.parent());*/
/*                     }*/
/*                 }*/
/* */
/*             });*/
/* */
/* */
/*             // Cache several DOM elements*/
/*             var pageHeader = $('.content-header').find('b');*/
/*             var adminForm = $('.admin-form');*/
/*             var options = adminForm.find('.option');*/
/*             var switches = adminForm.find('.switch');*/
/*             var buttons = adminForm.find('.button');*/
/*             var Panel = adminForm.find('.panel');*/
/* */
/* */
/*             setTimeout(function() {*/
/*                 adminForm.addClass('theme-primary');*/
/*                 Panel.addClass('panel-primary');*/
/*                 pageHeader.addClass('text-primary');*/
/* */
/*                 $(options).each(function(i, e) {*/
/*                     if ($(e).hasClass('block')) {*/
/*                         $(e).removeClass().addClass('block mt15 option option-primary');*/
/*                     } else {*/
/*                         $(e).removeClass().addClass('option option-primary');*/
/*                     }*/
/*                 });*/
/* */
/*                 // var sliders = $('.ui-timepicker-div', adminForm).find('.ui-slider');*/
/*                 $('body').find('.ui-slider').each(function(i, e) {*/
/*                     $(e).addClass('slider-primary');*/
/*                 });*/
/* */
/*                 $(switches).each(function(i, ele) {*/
/*                     if ($(ele).hasClass('switch-round')) {*/
/*                         if ($(ele).hasClass('block')) {*/
/*                             $(ele).removeClass().addClass('block mt15 switch switch-round switch-primary');*/
/*                         } else {*/
/*                             $(ele).removeClass().addClass('switch switch-round switch-primary');*/
/*                         }*/
/*                     } else {*/
/*                         if ($(ele).hasClass('block')) {*/
/*                             $(ele).removeClass().addClass('block mt15 switch switch-primary');*/
/*                         } else {*/
/*                             $(ele).removeClass().addClass('switch switch-primary');*/
/*                         }*/
/*                     }*/
/*                 });*/
/*                 buttons.removeClass().addClass('button btn-primary');*/
/*             }, 800);*/
/* */
/*             $("#datepicker1").datepicker({*/
/*                 prevText: '<i class="fa fa-chevron-left"></i>',*/
/*                 nextText: '<i class="fa fa-chevron-right"></i>',*/
/*                 showButtonPanel: false,*/
/*                 beforeShow: function(input, inst) {*/
/*                     var newclass = 'admin-form';*/
/*                     var themeClass = $(this).parents('.admin-form').attr('class');*/
/*                     var smartpikr = inst.dpDiv.parent();*/
/*                     if (!smartpikr.hasClass(themeClass)) {*/
/*                         inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');*/
/*                     }*/
/*                 }*/
/*             });*/
/* */
/*         });*/
/*     </script>*/
/*     <!-- END: PAGE SCRIPTS -->*/
/* {% endblock %}*/
