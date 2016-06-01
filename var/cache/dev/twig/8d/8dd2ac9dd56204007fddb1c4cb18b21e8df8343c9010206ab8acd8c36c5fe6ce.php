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
        $__internal_989c413d99de842c9d31ac88ccd89fe549f040cfeb7a3fed91d7390e7f48644d = $this->env->getExtension("native_profiler");
        $__internal_989c413d99de842c9d31ac88ccd89fe549f040cfeb7a3fed91d7390e7f48644d->enter($__internal_989c413d99de842c9d31ac88ccd89fe549f040cfeb7a3fed91d7390e7f48644d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_989c413d99de842c9d31ac88ccd89fe549f040cfeb7a3fed91d7390e7f48644d->leave($__internal_989c413d99de842c9d31ac88ccd89fe549f040cfeb7a3fed91d7390e7f48644d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ef4b324e47b5197ac4ce3e0a8fe7b8f63a3e174a4ecc6d8296034662f66a06a = $this->env->getExtension("native_profiler");
        $__internal_4ef4b324e47b5197ac4ce3e0a8fe7b8f63a3e174a4ecc6d8296034662f66a06a->enter($__internal_4ef4b324e47b5197ac4ce3e0a8fe7b8f63a3e174a4ecc6d8296034662f66a06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4ef4b324e47b5197ac4ce3e0a8fe7b8f63a3e174a4ecc6d8296034662f66a06a->leave($__internal_4ef4b324e47b5197ac4ce3e0a8fe7b8f63a3e174a4ecc6d8296034662f66a06a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b9dd74b47d48b27e6f53f07faa58e4ddbb5c0f1c745f4500c04d40612596cd8 = $this->env->getExtension("native_profiler");
        $__internal_0b9dd74b47d48b27e6f53f07faa58e4ddbb5c0f1c745f4500c04d40612596cd8->enter($__internal_0b9dd74b47d48b27e6f53f07faa58e4ddbb5c0f1c745f4500c04d40612596cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("update");
        echo "\">Edit Profile</a>
                    </li>
                </ol>
            </div>
        </header>
        <!-- End: TOPBAR -->
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 42
            echo "            <div class=\"alert alert-success alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <i class=\"fa fa-check pr10\"></i>
                <strong>Well done!</strong> You successfully signed up.
                <a href=\"#\" class=\"alert-link\">";
            // line 46
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
        <!-- Begin: Content -->
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
        // line 65
        echo $this->env->getExtension('routing')->getPath("update");
        echo "\" id=\"admin-form\">

                            <div class=\"panel-body bg-light\">

                                <div class=\"section-divider mt20 mb40\">
                                    <span> Update Your Information - You must fill out all your information </span>
                                </div>
                                <!-- .section-divider -->
                                ";
        // line 73
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "newusername", array()), "vars", array()), "valid", array())) {
            // line 74
            echo "                                    <div class=\"alert alert-danger alert-dismissable\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                        <i class=\"fa fa-remove pr10\"></i>

                                        <strong>";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "newusername", array()), 'errors');
            echo "</strong>
                                    </div>
                                ";
        }
        // line 81
        echo "                                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "newfullname", array()), "vars", array()), "valid", array())) {
            // line 82
            echo "                                    <div class=\"alert alert-danger alert-dismissable\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                        <i class=\"fa fa-remove pr10\"></i>
                                        <strong> ";
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "newfullname", array()), 'errors');
            echo "</strong>
                                    </div>
                                ";
        }
        // line 87
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "newpassword", array()), "vars", array()), "valid", array())) {
            // line 88
            echo "                                    <div class=\"alert alert-danger alert-dismissable\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                        <i class=\"fa fa-remove pr10\"></i>
                                        <strong> ";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "newpassword", array()), 'errors');
            echo "</strong>
                                    </div>
                                ";
        }
        // line 94
        echo "                                <div class=\"section\">
                                    <label for=\"firstname\" class=\"field prepend-icon\">
                                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "newfullname", array()), 'widget', array("attr" => array("class" => "gui-input", "type" => "text", "id" => "firstname")));
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
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "newusername", array()), 'widget', array("attr" => array("class" => "gui-input", "type" => "email", "id" => "useremail")));
        echo "
                                        <label for=\"useremail\" class=\"field-icon\">
                                            <i class=\"fa fa-envelope\"></i>
                                        </label>
                                    </label>

                                </div>
                                <!-- end section -->

                                <div class=\"section row\">

                                    <div class=\"col-md-6\">
                                        <label for=\"mobile_phone\" class=\"field prepend-icon\">
                                            ";
        // line 121
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) {
            // line 122
            echo "                                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "cellphone", array()), 'widget', array("attr" => array("class" => "gui-input phone-group", "placeholder" => "Please enter your cellphone number", "type" => "tel", "id" => "mobile_phone", "name" => "mobile_phone")));
            echo "
                                            ";
        } else {
            // line 124
            echo "                                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "cellphone", array()), 'widget', array("attr" => array("class" => "gui-input phone-group", "type" => "tel", "id" => "mobile_phone", "name" => "mobile_phone")));
            echo "
                                            ";
        }
        // line 126
        echo "                                            <label for=\"mobile_phone\" class=\"field-icon\">
                                                <i class=\"fa fa-mobile-phone\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class=\"col-md-6\">
                                        <label class=\"field select\">
                                            ";
        // line 135
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
        // line 143
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array()))) {
            // line 144
            echo "                                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "birthday", array()), 'widget', array("id" => "datepicker1", "attr" => array("class" => "gui-input", "type" => "text", "placeholder" => "Your birthdate in M-D-Y format")));
            echo "
                                        ";
        } else {
            // line 146
            echo "                                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "birthday", array()), 'widget', array("id" => "datepicker1", "attr" => array("class" => "gui-input", "type" => "text")));
            echo "
                                        ";
        }
        // line 148
        echo "                                        <label class=\"field-icon\">
                                            <i class=\"fa fa-calendar-o\"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                            <!-- end .form-body section -->
                            <div class=\"panel-footer text-right\">
                                <button type=\"submit\" class=\"button btn-primary\"> Update </button>
                                <button type=\"reset\" class=\"button\"> Cancel </button>
                            </div>
                            <!-- end .form-footer section -->
                            ";
        // line 160
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
        
        $__internal_0b9dd74b47d48b27e6f53f07faa58e4ddbb5c0f1c745f4500c04d40612596cd8->leave($__internal_0b9dd74b47d48b27e6f53f07faa58e4ddbb5c0f1c745f4500c04d40612596cd8_prof);

    }

    // line 193
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_846ae29d1db13c072d26e906711709b4d5b850220e30d312ee86e82e1d361041 = $this->env->getExtension("native_profiler");
        $__internal_846ae29d1db13c072d26e906711709b4d5b850220e30d312ee86e82e1d361041->enter($__internal_846ae29d1db13c072d26e906711709b4d5b850220e30d312ee86e82e1d361041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 194
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Theme Javascript -->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Validate Plugin-->
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin-tools/admin-forms/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery Validate Addon -->
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin-tools/admin-forms/js/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
    <!-- PNotify -->
    <script src=\"";
        // line 207
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
        
        $__internal_846ae29d1db13c072d26e906711709b4d5b850220e30d312ee86e82e1d361041->leave($__internal_846ae29d1db13c072d26e906711709b4d5b850220e30d312ee86e82e1d361041_prof);

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
        return array (  403 => 207,  398 => 205,  392 => 202,  387 => 200,  383 => 199,  379 => 198,  374 => 196,  370 => 195,  367 => 194,  361 => 193,  321 => 160,  307 => 148,  301 => 146,  295 => 144,  293 => 143,  282 => 135,  271 => 126,  265 => 124,  259 => 122,  257 => 121,  241 => 108,  226 => 96,  222 => 94,  216 => 91,  211 => 88,  209 => 87,  203 => 85,  198 => 82,  195 => 81,  189 => 78,  183 => 74,  181 => 73,  170 => 65,  152 => 49,  143 => 46,  137 => 42,  133 => 41,  124 => 35,  116 => 30,  110 => 27,  100 => 19,  91 => 17,  86 => 16,  77 => 14,  72 => 13,  66 => 12,  57 => 10,  51 => 7,  46 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
/* */
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
/*                                 {% if not form1.newusername.vars.valid %}*/
/*                                     <div class="alert alert-danger alert-dismissable">*/
/*                                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                                         <i class="fa fa-remove pr10"></i>*/
/* */
/*                                         <strong>{{ form_errors(form1.newusername) }}</strong>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 {% if not form1.newfullname.vars.valid %}*/
/*                                     <div class="alert alert-danger alert-dismissable">*/
/*                                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                                         <i class="fa fa-remove pr10"></i>*/
/*                                         <strong> {{ form_errors(form1.newfullname) }}</strong>*/
/*                                     </div>*/
/*                                 {% endif %}{% if not form1.newpassword.vars.valid %}*/
/*                                     <div class="alert alert-danger alert-dismissable">*/
/*                                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                                         <i class="fa fa-remove pr10"></i>*/
/*                                         <strong> {{ form_errors(form1.newpassword) }}</strong>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 <div class="section">*/
/*                                     <label for="firstname" class="field prepend-icon">*/
/*                                         {{ form_widget(form1.newfullname, {'attr': {'class': 'gui-input', 'type':'text', 'id':"firstname" }}) }}*/
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
/*                                         {{ form_widget(form1.newusername, {'attr': {'class': 'gui-input', 'type':'email', 'id':"useremail" }}) }}*/
/*                                         <label for="useremail" class="field-icon">*/
/*                                             <i class="fa fa-envelope"></i>*/
/*                                         </label>*/
/*                                     </label>*/
/* */
/*                                 </div>*/
/*                                 <!-- end section -->*/
/* */
/*                                 <div class="section row">*/
/* */
/*                                     <div class="col-md-6">*/
/*                                         <label for="mobile_phone" class="field prepend-icon">*/
/*                                             {% if app.user.cellphone is empty %}*/
/*                                             {{ form_widget(form1.cellphone, {'attr': {'class': 'gui-input phone-group', 'placeholder':'Please enter your cellphone number', 'type':'tel', 'id':"mobile_phone", 'name':'mobile_phone' }}) }}*/
/*                                             {% else %}*/
/*                                             {{ form_widget(form1.cellphone, {'attr': {'class': 'gui-input phone-group', 'type':'tel', 'id':"mobile_phone", 'name':'mobile_phone' }}) }}*/
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
/*                                 <button type="submit" class="button btn-primary"> Update </button>*/
/*                                 <button type="reset" class="button"> Cancel </button>*/
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
