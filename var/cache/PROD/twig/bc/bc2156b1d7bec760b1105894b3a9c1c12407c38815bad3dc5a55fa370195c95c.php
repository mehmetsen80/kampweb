<?php

/* :user:update.html.twig */
class __TwigTemplate_d794ae46460771efdc87bb4869fbd980176b4ac2bd678393bdf08a27936b7548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default.html.twig", ":user:update.html.twig", 1);
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
        $__internal_2f928711b112dbe11c5468c41f3a59e696e3ce26001f5c7c75eaba9eeb38e70e = $this->env->getExtension("native_profiler");
        $__internal_2f928711b112dbe11c5468c41f3a59e696e3ce26001f5c7c75eaba9eeb38e70e->enter($__internal_2f928711b112dbe11c5468c41f3a59e696e3ce26001f5c7c75eaba9eeb38e70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f928711b112dbe11c5468c41f3a59e696e3ce26001f5c7c75eaba9eeb38e70e->leave($__internal_2f928711b112dbe11c5468c41f3a59e696e3ce26001f5c7c75eaba9eeb38e70e_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebc547cb72e4bee5aee985ae6ef7aa4412cc1b268204c0075457898435600646 = $this->env->getExtension("native_profiler");
        $__internal_ebc547cb72e4bee5aee985ae6ef7aa4412cc1b268204c0075457898435600646->enter($__internal_ebc547cb72e4bee5aee985ae6ef7aa4412cc1b268204c0075457898435600646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ebc547cb72e4bee5aee985ae6ef7aa4412cc1b268204c0075457898435600646->leave($__internal_ebc547cb72e4bee5aee985ae6ef7aa4412cc1b268204c0075457898435600646_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_89aaadceb7254181fa6fb7bf22579237f99318e0c2242f36c91a1b9ed1d6bad3 = $this->env->getExtension("native_profiler");
        $__internal_89aaadceb7254181fa6fb7bf22579237f99318e0c2242f36c91a1b9ed1d6bad3->enter($__internal_89aaadceb7254181fa6fb7bf22579237f99318e0c2242f36c91a1b9ed1d6bad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "    <section id=\"content\" class=\"table-layout animated fadeIn\">
        <!-- begin: .tray-center -->
        <div class=\"tray tray-center\">
            <!-- Begin: Content Header -->
            <div class=\"content-header\">
                <h2> AdminForms makes <b>Validation</b> is easier than ever</h2>
            </div>
            <div class=\"admin-form theme-primary mw1000 center-block\" style=\"padding-bottom: 175px;\">
                <div class=\"panel heading-border\">
                    <form method=\"post\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("update");
        echo "\" id=\"admin-form\">
                        <div class=\"panel-body bg-light\">
                            <div class=\"section-divider mt20 mb40\">
                                <span> Update User Information </span>
                            </div>
                            ";
        // line 33
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newusername", array()), "vars", array()), "valid", array())) {
            // line 34
            echo "                                <div class=\"alert alert-danger alert-dismissable\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <i class=\"fa fa-remove pr10\"></i>

                                    <strong>";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newusername", array()), 'errors');
            echo "</strong>
                                </div>
                            ";
        }
        // line 41
        echo "                            ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newfullname", array()), "vars", array()), "valid", array())) {
            // line 42
            echo "                                <div class=\"alert alert-danger alert-dismissable\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <i class=\"fa fa-remove pr10\"></i>
                                    <strong> ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newfullname", array()), 'errors');
            echo "</strong>
                                </div>
                            ";
        }
        // line 47
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newpassword", array()), "vars", array()), "valid", array())) {
            // line 48
            echo "                                <div class=\"alert alert-danger alert-dismissable\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <i class=\"fa fa-remove pr10\"></i>
                                    <strong> ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newpassword", array()), 'errors');
            echo "</strong>
                                </div>
                            ";
        }
        // line 54
        echo "                            <div class=\"section\">
                                <label for=\"firstname\" class=\"field prepend-icon\">
                                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newfullname", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Change your fullname...", "type" => "text", "id" => "firstname")));
        echo "
                                    <label for=\"firstname\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                    </label>
                                </label>
                            </div>
                            <div class=\"section\">
                                <label for=\"useremail\" class=\"field prepend-icon\">
                                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newusername", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Change your email address..", "type" => "email", "id" => "useremail")));
        echo "
                                    <label for=\"useremail\" class=\"field-icon\">
                                        <i class=\"fa fa-envelope\"></i>
                                    </label>
                                </label>
                            </div>
                            <div class=\"section\">
                                <label for=\"password\" class=\"field prepend-icon\">
                                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newpassword", array()), "first", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Change your password..", "type" => "password", "id" => "password")));
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
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newpassword", array()), "second", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Repeat password", "type" => "password", "id" => "repeatPassword")));
        echo "
                                    <label for=\"repeatPassword\" class=\"field-icon\">
                                        <i class=\"fa fa-unlock-alt\"></i>
                                    </label>
                                </label>
                            </div>
                        </div>
                        <div class=\"panel-footer text-right\">
                            <button type=\"submit\" class=\"button btn-primary\"> Update </button>
                            <button type=\"reset\" class=\"button\"> Cancel </button>
                        </div>
                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    </form>
                </div>
            </div>
        </div>
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
        
        $__internal_89aaadceb7254181fa6fb7bf22579237f99318e0c2242f36c91a1b9ed1d6bad3->leave($__internal_89aaadceb7254181fa6fb7bf22579237f99318e0c2242f36c91a1b9ed1d6bad3_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aed9b27967af704d0057b1097752c13ea0dd219033c7e17e35fe3fbcfe73854e = $this->env->getExtension("native_profiler");
        $__internal_aed9b27967af704d0057b1097752c13ea0dd219033c7e17e35fe3fbcfe73854e->enter($__internal_aed9b27967af704d0057b1097752c13ea0dd219033c7e17e35fe3fbcfe73854e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Theme Javascript -->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Validate Plugin-->
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin-tools/admin-forms/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery Validate Addon -->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin-tools/admin-forms/js/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
    <!-- PNotify -->
    <script src=\"";
        // line 129
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



        });
    </script>
    <!-- END: PAGE SCRIPTS -->
";
        
        $__internal_aed9b27967af704d0057b1097752c13ea0dd219033c7e17e35fe3fbcfe73854e->leave($__internal_aed9b27967af704d0057b1097752c13ea0dd219033c7e17e35fe3fbcfe73854e_prof);

    }

    public function getTemplateName()
    {
        return ":user:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 129,  279 => 127,  273 => 124,  268 => 122,  264 => 121,  260 => 120,  255 => 118,  251 => 117,  248 => 116,  242 => 115,  213 => 93,  199 => 82,  186 => 72,  175 => 64,  164 => 56,  160 => 54,  154 => 51,  149 => 48,  147 => 47,  141 => 45,  136 => 42,  133 => 41,  127 => 38,  121 => 34,  119 => 33,  111 => 28,  100 => 19,  91 => 17,  86 => 16,  77 => 14,  72 => 13,  66 => 12,  57 => 10,  51 => 7,  46 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
/*     <section id="content" class="table-layout animated fadeIn">*/
/*         <!-- begin: .tray-center -->*/
/*         <div class="tray tray-center">*/
/*             <!-- Begin: Content Header -->*/
/*             <div class="content-header">*/
/*                 <h2> AdminForms makes <b>Validation</b> is easier than ever</h2>*/
/*             </div>*/
/*             <div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">*/
/*                 <div class="panel heading-border">*/
/*                     <form method="post" action="{{ path('update') }}" id="admin-form">*/
/*                         <div class="panel-body bg-light">*/
/*                             <div class="section-divider mt20 mb40">*/
/*                                 <span> Update User Information </span>*/
/*                             </div>*/
/*                             {% if not form.newusername.vars.valid %}*/
/*                                 <div class="alert alert-danger alert-dismissable">*/
/*                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                                     <i class="fa fa-remove pr10"></i>*/
/* */
/*                                     <strong>{{ form_errors(form.newusername) }}</strong>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if not form.newfullname.vars.valid %}*/
/*                                 <div class="alert alert-danger alert-dismissable">*/
/*                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                                     <i class="fa fa-remove pr10"></i>*/
/*                                     <strong> {{ form_errors(form.newfullname) }}</strong>*/
/*                                 </div>*/
/*                             {% endif %}{% if not form.newpassword.vars.valid %}*/
/*                                 <div class="alert alert-danger alert-dismissable">*/
/*                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                                     <i class="fa fa-remove pr10"></i>*/
/*                                     <strong> {{ form_errors(form.newpassword) }}</strong>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             <div class="section">*/
/*                                 <label for="firstname" class="field prepend-icon">*/
/*                                     {{ form_widget(form.newfullname, {'attr': {'class': 'gui-input', 'placeholder':'Change your fullname...', 'type':'text', 'id':"firstname" }}) }}*/
/*                                     <label for="firstname" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                     </label>*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="section">*/
/*                                 <label for="useremail" class="field prepend-icon">*/
/*                                     {{ form_widget(form.newusername, {'attr': {'class': 'gui-input', 'placeholder':'Change your email address..', 'type':'email', 'id':"useremail" }}) }}*/
/*                                     <label for="useremail" class="field-icon">*/
/*                                         <i class="fa fa-envelope"></i>*/
/*                                     </label>*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="section">*/
/*                                 <label for="password" class="field prepend-icon">*/
/*                                     {{ form_widget(form.newpassword.first, {'attr': {'class': 'gui-input', 'placeholder':'Change your password..', 'type':'password', 'id':"password" }}) }}*/
/*                                     <label for="password" class="field-icon">*/
/*                                         <i class="fa fa-lock"></i>*/
/*                                     </label>*/
/*                                 </label>*/
/*                             </div>*/
/*                             <!-- end section -->*/
/* */
/*                             <div class="section">*/
/*                                 <label for="repeatPassword" class="field prepend-icon">*/
/*                                     {{ form_widget(form.newpassword.second, {'attr': {'class': 'gui-input', 'placeholder':'Repeat password', 'type':'password', 'id':"repeatPassword" }}) }}*/
/*                                     <label for="repeatPassword" class="field-icon">*/
/*                                         <i class="fa fa-unlock-alt"></i>*/
/*                                     </label>*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="panel-footer text-right">*/
/*                             <button type="submit" class="button btn-primary"> Update </button>*/
/*                             <button type="reset" class="button"> Cancel </button>*/
/*                         </div>*/
/*                         {{ form_row(form._token) }}*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
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
/* */
/* */
/*         });*/
/*     </script>*/
/*     <!-- END: PAGE SCRIPTS -->*/
/* {% endblock %}*/
