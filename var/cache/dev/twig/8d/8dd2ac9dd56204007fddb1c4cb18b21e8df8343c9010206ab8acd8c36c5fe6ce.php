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
        $__internal_adc271ae5aeeace3464cb13a89445aa18fd82e08fd88fce530d56f641ee1e906 = $this->env->getExtension("native_profiler");
        $__internal_adc271ae5aeeace3464cb13a89445aa18fd82e08fd88fce530d56f641ee1e906->enter($__internal_adc271ae5aeeace3464cb13a89445aa18fd82e08fd88fce530d56f641ee1e906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adc271ae5aeeace3464cb13a89445aa18fd82e08fd88fce530d56f641ee1e906->leave($__internal_adc271ae5aeeace3464cb13a89445aa18fd82e08fd88fce530d56f641ee1e906_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd37c63e99c36fe8204692875ec4a743e50de317d341d1186f826ea3de0df532 = $this->env->getExtension("native_profiler");
        $__internal_bd37c63e99c36fe8204692875ec4a743e50de317d341d1186f826ea3de0df532->enter($__internal_bd37c63e99c36fe8204692875ec4a743e50de317d341d1186f826ea3de0df532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/intlTelInput.css"), "html", null, true);
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

";
        
        $__internal_bd37c63e99c36fe8204692875ec4a743e50de317d341d1186f826ea3de0df532->leave($__internal_bd37c63e99c36fe8204692875ec4a743e50de317d341d1186f826ea3de0df532_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_64eabf04600425e5c209d985c06d759b156e7996ff7cba01cfc80be80312b123 = $this->env->getExtension("native_profiler");
        $__internal_64eabf04600425e5c209d985c06d759b156e7996ff7cba01cfc80be80312b123->enter($__internal_64eabf04600425e5c209d985c06d759b156e7996ff7cba01cfc80be80312b123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "
    <!-- Start: Content-Wrapper -->
    <section id=\"content_wrapper\">
        <!-- Start: TOPBAR -->
        <header id=\"topbar\">
            <div class=\"topbar-left\">
                <ol class=\"breadcrumb\">
                    <li class=\"crumb-active\">
                        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">Dashboard</a>
                    </li>
                    <li class=\"crumb-icon\">
                        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                        </a>
                    </li>
                    <li class=\"crumb-link\">
                        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("update");
        echo "\">Edit Profile</a>
                    </li>
                </ol>
            </div>
        </header>
        <!-- End: TOPBAR -->
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 46
            echo "            <div class=\"alert alert-success alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <i class=\"fa fa-check pr10\"></i>
                <strong>Well done!</strong> You successfully signed up.
                <a href=\"#\" class=\"alert-link\">";
            // line 50
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "updatesuccess"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 54
            echo "            <div class=\"alert alert-primary alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <i class=\"fa fa-trophy pr10\"></i>
                ";
            // line 57
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "updateerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 61
            echo "            <div class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <i class=\"fa fa-remove pr10\"></i>
                <strong>";
            // line 64
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</strong>

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
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
        // line 83
        echo $this->env->getExtension('routing')->getPath("update");
        echo "\" id=\"admin-form\">

                            <div class=\"panel-body bg-light\">

                                <div class=\"section-divider mt20 mb40\">
                                    <span> Update Your Information - You must fill out all your information </span>
                                </div>
                                <!-- .section-divider -->
                                ";
        // line 92
        echo "                                ";
        // line 93
        echo "                                ";
        // line 94
        echo "                                ";
        // line 95
        echo "
                                ";
        // line 97
        echo "                                ";
        // line 98
        echo "                                ";
        // line 99
        echo "                                ";
        // line 100
        echo "                                ";
        // line 101
        echo "                                ";
        // line 102
        echo "                                ";
        // line 103
        echo "                                ";
        // line 104
        echo "                                ";
        // line 105
        echo "                                ";
        // line 106
        echo "                                ";
        // line 107
        echo "                                ";
        // line 108
        echo "                                ";
        // line 109
        echo "                                ";
        // line 110
        echo "                                ";
        // line 111
        echo "                                ";
        // line 112
        echo "                                <div class=\"section\">
                                    <label for=\"firstname\" class=\"field prepend-icon\">
                                        ";
        // line 114
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
        // line 126
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
                                        ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "ccode", array()), 'widget', array("id" => "phone"));
        echo "
                                        <label for=\"maskedPhone\" class=\"field prepend-icon\">

                                            ";
        // line 139
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) {
            // line 140
            echo "                                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "cellphone", array()), 'widget', array("id" => "phonetype", "attr" => array("class" => "phonetype gui-input form-control phone ", "autocomplete" => "off", "type" => "tel", "placeholder" => "Cellphone")));
            echo "
                                            ";
        } else {
            // line 142
            echo "                                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "cellphone", array()), 'widget', array("id" => "phonetype", "attr" => array("class" => "phonetype gui-input form-control phone ", "autocomplete" => "off", "type" => "tel", "placeholder" => "Cellphone")));
            echo "
                                            ";
        }
        // line 144
        echo "                                            <label for=\"mobile_phone\" class=\"field-icon\">

                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class=\"col-md-6\">
                                        <label class=\"field select\">
                                            ";
        // line 153
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
        // line 161
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array()))) {
            // line 162
            echo "                                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "birthday", array()), 'widget', array("id" => "datepicker1", "attr" => array("class" => "gui-input", "type" => "text", "placeholder" => "Your birthdate in M-D-Y format")));
            echo "
                                        ";
        } else {
            // line 164
            echo "                                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "birthday", array()), 'widget', array("id" => "datepicker1", "attr" => array("class" => "gui-input", "type" => "text")));
            echo "
                                        ";
        }
        // line 166
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
        // line 177
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
        
        $__internal_64eabf04600425e5c209d985c06d759b156e7996ff7cba01cfc80be80312b123->leave($__internal_64eabf04600425e5c209d985c06d759b156e7996ff7cba01cfc80be80312b123_prof);

    }

    // line 210
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63fe42df0a4abb7a7b9d0f21ab7dff86f128c029fa3640abdfb9c5615aa42cb0 = $this->env->getExtension("native_profiler");
        $__internal_63fe42df0a4abb7a7b9d0f21ab7dff86f128c029fa3640abdfb9c5615aa42cb0->enter($__internal_63fe42df0a4abb7a7b9d0f21ab7dff86f128c029fa3640abdfb9c5615aa42cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 211
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Theme Javascript -->
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Validate Plugin-->
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin-tools/admin-forms/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery Validate Addon -->
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin-tools/admin-forms/js/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/intlTelInput.js"), "html", null, true);
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
        // line 367
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

            \$(\"#spinner4\").timespinner();
            \$(\"#phone\").intlTelInput();

            \$('.phone').mask('(999) 999-9999');


        });
    </script>

    <!-- END: PAGE SCRIPTS -->
";
        
        $__internal_63fe42df0a4abb7a7b9d0f21ab7dff86f128c029fa3640abdfb9c5615aa42cb0->leave($__internal_63fe42df0a4abb7a7b9d0f21ab7dff86f128c029fa3640abdfb9c5615aa42cb0_prof);

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
        return array (  587 => 367,  440 => 223,  436 => 222,  430 => 219,  425 => 217,  421 => 216,  417 => 215,  412 => 213,  408 => 212,  405 => 211,  399 => 210,  359 => 177,  346 => 166,  340 => 164,  334 => 162,  332 => 161,  321 => 153,  310 => 144,  304 => 142,  298 => 140,  296 => 139,  290 => 136,  277 => 126,  262 => 114,  258 => 112,  256 => 111,  254 => 110,  252 => 109,  250 => 108,  248 => 107,  246 => 106,  244 => 105,  242 => 104,  240 => 103,  238 => 102,  236 => 101,  234 => 100,  232 => 99,  230 => 98,  228 => 97,  225 => 95,  223 => 94,  221 => 93,  219 => 92,  208 => 83,  191 => 68,  181 => 64,  176 => 61,  171 => 60,  162 => 57,  157 => 54,  152 => 53,  143 => 50,  137 => 46,  133 => 45,  124 => 39,  116 => 34,  110 => 31,  100 => 23,  94 => 22,  84 => 19,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  60 => 10,  55 => 8,  51 => 7,  46 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::default.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <!-- Font CSS (Via CDN) -->*/
/*     <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>*/
/*     <link rel='stylesheet' type='text/css' href='{{ asset('assets/fonts/font-awesome/css/font-awesome.css') }}'>*/
/*     <!-- Theme CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css') }}">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/intlTelInput.css') }}">*/
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
/*                                 {#<div class="alert alert-danger alert-dismissable">#}*/
/*                                 {#<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>#}*/
/*                                 {#<i class="fa fa-remove pr10"></i>#}*/
/* */
/*                                 {#<strong>{{ form_errors(form1.newusername) }}</strong>#}*/
/*                                 {#</div>#}*/
/*                                 {#{% endif %}#}*/
/*                                 {#{% if not form1.newfullname.vars.valid %}#}*/
/*                                 {#<div class="alert alert-danger alert-dismissable">#}*/
/*                                 {#<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>#}*/
/*                                 {#<i class="fa fa-remove pr10"></i>#}*/
/*                                 {#<strong> {{ form_errors(form1.newfullname) }}</strong>#}*/
/*                                 {#</div>#}*/
/*                                 {#{% endif %}{% if not form1.newpassword.vars.valid %}#}*/
/*                                 {#<div class="alert alert-danger alert-dismissable">#}*/
/*                                 {#<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>#}*/
/*                                 {#<i class="fa fa-remove pr10"></i>#}*/
/*                                 {#<strong> {{ form_errors(form1.newpassword) }}</strong>#}*/
/*                                 {#</div>#}*/
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
/*                                         {{ form_widget(form1.ccode,{'id':'phone'}) }}*/
/*                                         <label for="maskedPhone" class="field prepend-icon">*/
/* */
/*                                             {% if app.user.cellphone is empty %}*/
/*                                                 {{ form_widget(form1.cellphone, {'id':'phonetype', 'attr': {'class': 'phonetype gui-input form-control phone ',  'autocomplete':"off",  'type':'tel', 'placeholder':"Cellphone" }}) }}*/
/*                                             {% else %}*/
/*                                                 {{ form_widget(form1.cellphone, {'id':'phonetype', 'attr': {'class': 'phonetype gui-input form-control phone ',  'autocomplete':"off", 'type':'tel','placeholder':"Cellphone" }}) }}*/
/*                                             {% endif %}*/
/*                                             <label for="mobile_phone" class="field-icon">*/
/* */
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
/*                                             {{ form_widget(form1.birthday, {'id':'datepicker1', 'attr': {'class': 'gui-input', 'type':'text','placeholder':'Your birthdate in M-D-Y format'}})}}*/
/*                                         {% else %}*/
/*                                             {{ form_widget(form1.birthday, {'id':'datepicker1', 'attr': {'class': 'gui-input', 'type':'text'}})}}*/
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
/*     <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>*/
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
/*             $("#spinner4").timespinner();*/
/*             $("#phone").intlTelInput();*/
/* */
/*             $('.phone').mask('(999) 999-9999');*/
/* */
/* */
/*         });*/
/*     </script>*/
/* */
/*     <!-- END: PAGE SCRIPTS -->*/
/* {% endblock %}*/
