<?php

/* user/update.html.twig */
class __TwigTemplate_772f798eccc18dc6b7df7f761bfbf5274595da2ff241d81e4965c9d2c6d814da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default.html.twig", "user/update.html.twig", 1);
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
        $__internal_e819bd8c851ce4e29dd012ba9bd9393b5da4f32205e71f70230c139c2995bc36 = $this->env->getExtension("native_profiler");
        $__internal_e819bd8c851ce4e29dd012ba9bd9393b5da4f32205e71f70230c139c2995bc36->enter($__internal_e819bd8c851ce4e29dd012ba9bd9393b5da4f32205e71f70230c139c2995bc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e819bd8c851ce4e29dd012ba9bd9393b5da4f32205e71f70230c139c2995bc36->leave($__internal_e819bd8c851ce4e29dd012ba9bd9393b5da4f32205e71f70230c139c2995bc36_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00f267773a36e719a1c9b7f0123c6cdc4da109958f739054401cd0c385e96704 = $this->env->getExtension("native_profiler");
        $__internal_00f267773a36e719a1c9b7f0123c6cdc4da109958f739054401cd0c385e96704->enter($__internal_00f267773a36e719a1c9b7f0123c6cdc4da109958f739054401cd0c385e96704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

    <!-- Required Plugin CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/tagmanager/tagmanager.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/daterange/daterangepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datepicker/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/colorpicker/css/bootstrap-colorpicker.min.css"), "html", null, true);
        echo "\">

    <!-- Select2 Plugin CSS  -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/select2/css/core.css"), "html", null, true);
        echo "\">

    <!-- Theme CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/skin/default_skin/css/theme.css"), "html", null, true);
        echo "\">
";
        
        $__internal_00f267773a36e719a1c9b7f0123c6cdc4da109958f739054401cd0c385e96704->leave($__internal_00f267773a36e719a1c9b7f0123c6cdc4da109958f739054401cd0c385e96704_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a0755e7562331c3c47b7a30355b2c47e3a71ea0eb454ed829644d9e0192acc5 = $this->env->getExtension("native_profiler");
        $__internal_0a0755e7562331c3c47b7a30355b2c47e3a71ea0eb454ed829644d9e0192acc5->enter($__internal_0a0755e7562331c3c47b7a30355b2c47e3a71ea0eb454ed829644d9e0192acc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
    <!-- Start: Content-Wrapper -->
    <section id=\"content_wrapper\">
        <!-- Start: TOPBAR -->
        <header id=\"topbar\">
            <div class=\"topbar-left\">
                <ol class=\"breadcrumb\">
                    <li class=\"crumb-active\">
                        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">Dashboard</a>
                    </li>
                    <li class=\"crumb-icon\">
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                        </a>
                    </li>
                    <li class=\"crumb-link\">
                        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("update");
        echo "\">Edit Profile</a>
                    </li>
                </ol>
            </div>
        </header>
        <!-- End: TOPBAR -->
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 48
            echo "            <div class=\"alert alert-success alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <i class=\"fa fa-check pr10\"></i>
                <strong>Well done!</strong> You successfully signed up.
                <a href=\"#\" class=\"alert-link\">";
            // line 52
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "updatesuccess"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 56
            echo "            <div class=\"alert alert-primary alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <i class=\"fa fa-trophy pr10\"></i>
                ";
            // line 59
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "updateerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 63
            echo "            <div class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <i class=\"fa fa-remove pr10\"></i>
                <strong>";
            // line 66
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</strong>

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        <!-- Begin: Content -->
        <section id=\"content\" class=\"table-layout animated fadeIn\">
            <!-- begin: .tray-center -->
            <div class=\"tray tray-center\">

                <!-- Begin: Content Header -->
                <div class=\"content-header\">
                    <h2> Fill in the fields that you'd like to change then press update buton.</h2>
                </div>

                <!-- Validation Example -->
                <div class=\"admin-form theme-primary mw1000 center-block\" style=\"padding-bottom: 175px;\">

                    <div class=\"panel heading-border\">

                        <form method=\"post\" action=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("update");
        echo "\" id=\"admin-form\">

                            <div class=\"panel-body bg-light\">

                                <div class=\"section-divider mt20 mb40\">
                                    <span> Update Your Information - You must fill out all your information </span>
                                </div>
                                <!-- .section-divider -->
                                ";
        // line 94
        echo "                                    ";
        // line 95
        echo "                                        ";
        // line 96
        echo "                                        ";
        // line 97
        echo "
                                        ";
        // line 99
        echo "                                    ";
        // line 100
        echo "                                ";
        // line 101
        echo "                                ";
        // line 102
        echo "                                    ";
        // line 103
        echo "                                        ";
        // line 104
        echo "                                        ";
        // line 105
        echo "                                        ";
        // line 106
        echo "                                    ";
        // line 107
        echo "                                ";
        // line 108
        echo "                                    ";
        // line 109
        echo "                                        ";
        // line 110
        echo "                                        ";
        // line 111
        echo "                                        ";
        // line 112
        echo "                                    ";
        // line 113
        echo "                                ";
        // line 114
        echo "                                <div class=\"section\">
                                    <label for=\"firstname\" class=\"field prepend-icon\">
                                        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "fullname", array()), 'widget', array("attr" => array("class" => "gui-input", "type" => "text", "id" => "firstname")));
        echo "
                                        <label for=\"firstname\" class=\"field-icon\">
                                            <i class=\"fa fa-user\"></i>
                                        </label>
                                    </label>
                                </div>


                                <!-- end .section row section -->

                                <div class=\"section\">
                                    <label for=\"useremail\" class=\"field prepend-icon\">
                                        ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "username", array()), 'widget', array("attr" => array("class" => "gui-input", "type" => "email", "id" => "useremail")));
        echo "
                                        <label for=\"useremail\" class=\"field-icon\">
                                            <i class=\"fa fa-envelope\"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class=\"section row\">
                                    <div class=\"col-md-6\">
                                        <label for=\"maskedPhone\" class=\"field prepend-icon\">

                                            ";
        // line 140
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) {
            // line 141
            echo "                                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "cellphone", array()), 'widget', array("id" => "", "attr" => array("class" => "gui-input form-control phone", "autocomplete" => "off", "type" => "text")));
            echo "
                                            ";
        } else {
            // line 143
            echo "                                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "cellphone", array()), 'widget', array("id" => "", "attr" => array("class" => "gui-input form-control phone", "autocomplete" => "off", "type" => "text")));
            echo "
                                            ";
        }
        // line 145
        echo "                                            <label for=\"mobile_phone\" class=\"field-icon\">
                                                <i class=\"fa fa-mobile-phone\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class=\"col-md-6\">
                                        <label class=\"field select\">
                                            ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "gender", array()), 'widget');
        echo "
                                            <i class=\"arrow double\"></i>
                                        </label>
                                    </div>
                                    <!-- end section -->
                                </div>
                                <div class=\"section\">
                                    <label for=\"datepicker1\" class=\"field prepend-icon\">
                                        ";
        // line 162
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array()))) {
            // line 163
            echo "                                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "birthday", array()), 'widget', array("id" => "datepicker1", "attr" => array("class" => "gui-input", "type" => "text", "placeholder" => "Your birthdate in M-D-Y format")));
            echo "
                                        ";
        } else {
            // line 165
            echo "                                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "birthday", array()), 'widget', array("id" => "datepicker1", "attr" => array("class" => "gui-input", "type" => "text")));
            echo "
                                        ";
        }
        // line 167
        echo "                                        <label class=\"field-icon\">
                                            <i class=\"fa fa-calendar-o\"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                            <!-- end .form-body section -->
                            <div class=\"panel-footer text-right\">
                                <button type=\"submit\" class=\"button btn-primary\" > Update </button>
                            </div>
                            <!-- end .form-footer section -->
                            ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "_token", array()), 'row');
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
        
        $__internal_0a0755e7562331c3c47b7a30355b2c47e3a71ea0eb454ed829644d9e0192acc5->leave($__internal_0a0755e7562331c3c47b7a30355b2c47e3a71ea0eb454ed829644d9e0192acc5_prof);

    }

    // line 211
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf70a670a4a81162f7771e3c5ab29a521180205c410f25d6e68427f712730df0 = $this->env->getExtension("native_profiler");
        $__internal_bf70a670a4a81162f7771e3c5ab29a521180205c410f25d6e68427f712730df0->enter($__internal_bf70a670a4a81162f7771e3c5ab29a521180205c410f25d6e68427f712730df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 212
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Theme Javascript -->
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Validate Plugin-->
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin-tools/admin-forms/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery Validate Addon -->
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin-tools/admin-forms/js/additional-methods.min.js"), "html", null, true);
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
                        required: false,
                        minlength: 1

                    },
                    lastname: {
                        required: false,
                        minlength: 1
                    },
                    useremail: {
                        required: false,
                        email: true,
                        minlength: 1
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
    <!-- MaskedInput Plugin -->
    <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/jquerymask/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            // jQuery Time Spinner settings
            \$.widget(\"ui.timespinner\", \$.ui.spinner, {
                options: {
                    // seconds
                    step: 60 * 1000,
                    // hours
                    page: 60
                },
                _parse: function(value) {
                    if (typeof value === \"string\") {
                        // already a timestamp
                        if (Number(value) == value) {
                            return Number(value);
                        }
                        return +Globalize.parseDate(value);
                    }
                    return value;
                },

                _format: function(value) {
                    return Globalize.format(new Date(value), \"t\");
                }
            });

            // Init jQuery Time Spinner
            \$(\"#spinner4\").timespinner();

            \$('.phone').mask('+(99) (999) 999-9999');


        });
    </script>

    <!-- END: PAGE SCRIPTS -->
";
        
        $__internal_bf70a670a4a81162f7771e3c5ab29a521180205c410f25d6e68427f712730df0->leave($__internal_bf70a670a4a81162f7771e3c5ab29a521180205c410f25d6e68427f712730df0_prof);

    }

    public function getTemplateName()
    {
        return "user/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 368,  434 => 223,  428 => 220,  423 => 218,  419 => 217,  415 => 216,  410 => 214,  406 => 213,  403 => 212,  397 => 211,  357 => 178,  344 => 167,  338 => 165,  332 => 163,  330 => 162,  319 => 154,  308 => 145,  302 => 143,  296 => 141,  294 => 140,  279 => 128,  264 => 116,  260 => 114,  258 => 113,  256 => 112,  254 => 111,  252 => 110,  250 => 109,  248 => 108,  246 => 107,  244 => 106,  242 => 105,  240 => 104,  238 => 103,  236 => 102,  234 => 101,  232 => 100,  230 => 99,  227 => 97,  225 => 96,  223 => 95,  221 => 94,  210 => 85,  193 => 70,  183 => 66,  178 => 63,  173 => 62,  164 => 59,  159 => 56,  154 => 55,  145 => 52,  139 => 48,  135 => 47,  126 => 41,  118 => 36,  112 => 33,  102 => 25,  96 => 24,  87 => 22,  81 => 19,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  57 => 10,  51 => 7,  46 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
/* */
/*     <!-- Required Plugin CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/plugins/tagmanager/tagmanager.css') }}">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/plugins/daterange/daterangepicker.css') }}">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/plugins/datepicker/css/bootstrap-datetimepicker.css') }}">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/plugins/colorpicker/css/bootstrap-colorpicker.min.css') }}">*/
/* */
/*     <!-- Select2 Plugin CSS  -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/plugins/select2/css/core.css') }}">*/
/* */
/*     <!-- Theme CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css') }}">*/
/* {% endblock %}*/
/* {% block body %}*/
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
/*                         <a href="{{ path('update') }}">Edit Profile</a>*/
/*                     </li>*/
/*                 </ol>*/
/*             </div>*/
/*         </header>*/
/*         <!-- End: TOPBAR -->*/
/*         {% for flash_message in app.session.flashBag.get('success') %}*/
/*             <div class="alert alert-success alert-dismissable">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                 <i class="fa fa-check pr10"></i>*/
/*                 <strong>Well done!</strong> You successfully signed up.*/
/*                 <a href="#" class="alert-link">{{ flash_message }}</a>*/
/*             </div>*/
/*         {% endfor %}*/
/*         {% for flash_message in app.session.flashBag.get('updatesuccess') %}*/
/*             <div class="alert alert-primary alert-dismissable">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                 <i class="fa fa-trophy pr10"></i>*/
/*                 {{ flash_message }}*/
/*             </div>*/
/*         {% endfor %}*/
/*         {% for flash_message in app.session.flashBag.get('updateerror') %}*/
/*             <div class="alert alert-danger alert-dismissable">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                 <i class="fa fa-remove pr10"></i>*/
/*                 <strong>{{ flash_message }}</strong>*/
/* */
/*             </div>*/
/*         {% endfor %}*/
/*         <!-- Begin: Content -->*/
/*         <section id="content" class="table-layout animated fadeIn">*/
/*             <!-- begin: .tray-center -->*/
/*             <div class="tray tray-center">*/
/* */
/*                 <!-- Begin: Content Header -->*/
/*                 <div class="content-header">*/
/*                     <h2> Fill in the fields that you'd like to change then press update buton.</h2>*/
/*                 </div>*/
/* */
/*                 <!-- Validation Example -->*/
/*                 <div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">*/
/* */
/*                     <div class="panel heading-border">*/
/* */
/*                         <form method="post" action="{{ path('update') }}" id="admin-form">*/
/* */
/*                             <div class="panel-body bg-light">*/
/* */
/*                                 <div class="section-divider mt20 mb40">*/
/*                                     <span> Update Your Information - You must fill out all your information </span>*/
/*                                 </div>*/
/*                                 <!-- .section-divider -->*/
/*                                 {#{% if not form1.newusername.vars.valid %}#}*/
/*                                     {#<div class="alert alert-danger alert-dismissable">#}*/
/*                                         {#<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>#}*/
/*                                         {#<i class="fa fa-remove pr10"></i>#}*/
/* */
/*                                         {#<strong>{{ form_errors(form1.newusername) }}</strong>#}*/
/*                                     {#</div>#}*/
/*                                 {#{% endif %}#}*/
/*                                 {#{% if not form1.newfullname.vars.valid %}#}*/
/*                                     {#<div class="alert alert-danger alert-dismissable">#}*/
/*                                         {#<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>#}*/
/*                                         {#<i class="fa fa-remove pr10"></i>#}*/
/*                                         {#<strong> {{ form_errors(form1.newfullname) }}</strong>#}*/
/*                                     {#</div>#}*/
/*                                 {#{% endif %}{% if not form1.newpassword.vars.valid %}#}*/
/*                                     {#<div class="alert alert-danger alert-dismissable">#}*/
/*                                         {#<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>#}*/
/*                                         {#<i class="fa fa-remove pr10"></i>#}*/
/*                                         {#<strong> {{ form_errors(form1.newpassword) }}</strong>#}*/
/*                                     {#</div>#}*/
/*                                 {#{% endif %}#}*/
/*                                 <div class="section">*/
/*                                     <label for="firstname" class="field prepend-icon">*/
/*                                         {{ form_widget(form1.fullname, {'attr': {'class': 'gui-input', 'type':'text', 'id':"firstname" }}) }}*/
/*                                         <label for="firstname" class="field-icon">*/
/*                                             <i class="fa fa-user"></i>*/
/*                                         </label>*/
/*                                     </label>*/
/*                                 </div>*/
/* */
/* */
/*                                 <!-- end .section row section -->*/
/* */
/*                                 <div class="section">*/
/*                                     <label for="useremail" class="field prepend-icon">*/
/*                                         {{ form_widget(form1.username, {'attr': {'class': 'gui-input', 'type':'email', 'id':"useremail" }}) }}*/
/*                                         <label for="useremail" class="field-icon">*/
/*                                             <i class="fa fa-envelope"></i>*/
/*                                         </label>*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <!-- end section -->*/
/* */
/*                                 <div class="section row">*/
/*                                     <div class="col-md-6">*/
/*                                         <label for="maskedPhone" class="field prepend-icon">*/
/* */
/*                                             {% if app.user.cellphone is empty %}*/
/*                                             {{ form_widget(form1.cellphone, {'id':'', 'attr': {'class': 'gui-input form-control phone',  'autocomplete':"off",  'type':'text' }}) }}*/
/*                                             {% else %}*/
/*                                             {{ form_widget(form1.cellphone, {'id':'', 'attr': {'class': 'gui-input form-control phone',  'autocomplete':"off", 'type':'text' }}) }}*/
/*                                             {% endif %}*/
/*                                             <label for="mobile_phone" class="field-icon">*/
/*                                                 <i class="fa fa-mobile-phone"></i>*/
/*                                             </label>*/
/*                                         </label>*/
/*                                     </div>*/
/*                                     <!-- end section -->*/
/* */
/*                                     <div class="col-md-6">*/
/*                                         <label class="field select">*/
/*                                             {{ form_widget(form1.gender) }}*/
/*                                             <i class="arrow double"></i>*/
/*                                         </label>*/
/*                                     </div>*/
/*                                     <!-- end section -->*/
/*                                 </div>*/
/*                                 <div class="section">*/
/*                                     <label for="datepicker1" class="field prepend-icon">*/
/*                                         {% if app.user.birthday is empty %}*/
/*                                         {{ form_widget(form1.birthday, {'id':'datepicker1', 'attr': {'class': 'gui-input', 'type':'text','placeholder':'Your birthdate in M-D-Y format'}})}}*/
/*                                         {% else %}*/
/*                                         {{ form_widget(form1.birthday, {'id':'datepicker1', 'attr': {'class': 'gui-input', 'type':'text'}})}}*/
/*                                         {% endif %}*/
/*                                         <label class="field-icon">*/
/*                                             <i class="fa fa-calendar-o"></i>*/
/*                                         </label>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- end .form-body section -->*/
/*                             <div class="panel-footer text-right">*/
/*                                 <button type="submit" class="button btn-primary" > Update </button>*/
/*                             </div>*/
/*                             <!-- end .form-footer section -->*/
/*                             {{ form_row(form1._token) }}*/
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
/* <style>*/
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
/*                         required: false,*/
/*                         minlength: 1*/
/* */
/*                     },*/
/*                     lastname: {*/
/*                         required: false,*/
/*                         minlength: 1*/
/*                     },*/
/*                     useremail: {*/
/*                         required: false,*/
/*                         email: true,*/
/*                         minlength: 1*/
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
/*     <!-- MaskedInput Plugin -->*/
/*     <script src="{{ asset('assets/vendor/plugins/jquerymask/jquery.maskedinput.min.js') }}"></script>*/
/* */
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function() {*/
/*             // jQuery Time Spinner settings*/
/*             $.widget("ui.timespinner", $.ui.spinner, {*/
/*                 options: {*/
/*                     // seconds*/
/*                     step: 60 * 1000,*/
/*                     // hours*/
/*                     page: 60*/
/*                 },*/
/*                 _parse: function(value) {*/
/*                     if (typeof value === "string") {*/
/*                         // already a timestamp*/
/*                         if (Number(value) == value) {*/
/*                             return Number(value);*/
/*                         }*/
/*                         return +Globalize.parseDate(value);*/
/*                     }*/
/*                     return value;*/
/*                 },*/
/* */
/*                 _format: function(value) {*/
/*                     return Globalize.format(new Date(value), "t");*/
/*                 }*/
/*             });*/
/* */
/*             // Init jQuery Time Spinner*/
/*             $("#spinner4").timespinner();*/
/* */
/*             $('.phone').mask('+(99) (999) 999-9999');*/
/* */
/* */
/*         });*/
/*     </script>*/
/* */
/*     <!-- END: PAGE SCRIPTS -->*/
/* {% endblock %}*/
