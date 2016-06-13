<?php

/* :user:show.html.twig */
class __TwigTemplate_dbb9f1fd941df028bf6f4eacad6f5eb617cbf942a099c3deedcfdd68ea3b8768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default.html.twig", ":user:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b8ff8e258ab577b8f8722e3a17dfaf7e2e84df0cec1076bdcddadd2c483655e = $this->env->getExtension("native_profiler");
        $__internal_2b8ff8e258ab577b8f8722e3a17dfaf7e2e84df0cec1076bdcddadd2c483655e->enter($__internal_2b8ff8e258ab577b8f8722e3a17dfaf7e2e84df0cec1076bdcddadd2c483655e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b8ff8e258ab577b8f8722e3a17dfaf7e2e84df0cec1076bdcddadd2c483655e->leave($__internal_2b8ff8e258ab577b8f8722e3a17dfaf7e2e84df0cec1076bdcddadd2c483655e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0137e2326953b76073b5e31d6792d75382f33c0833b502a759408501a4a9f0ed = $this->env->getExtension("native_profiler");
        $__internal_0137e2326953b76073b5e31d6792d75382f33c0833b502a759408501a4a9f0ed->enter($__internal_0137e2326953b76073b5e31d6792d75382f33c0833b502a759408501a4a9f0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <body class=\"profile-page\">
    <!-- Start: Content-Wrapper -->
    <section id=\"content_wrapper\">

        <!-- Start: Topbar -->
        <header id=\"topbar\">
            <div class=\"topbar-left\">
                <ol class=\"breadcrumb\">
                    <li class=\"crumb-active\">
                        <a href=\"dashboard.html\">Dashboard</a>
                    </li>
                    <li class=\"crumb-icon\">
                        <a href=\"dashboard.html\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                        </a>
                    </li>
                    <li class=\"crumb-link\">
                        <a href=\"dashboard.html\">Home</a>
                    </li>
                    <li class=\"crumb-trail\">Dashboard</li>
                </ol>
            </div>
        </header>
        <!-- End: Topbar -->

        <!-- Begin: Content -->
        <section id=\"content\" class=\"animated fadeIn\">

            <!-- Begin .page-heading -->
            <div class=\"page-heading\">
                <div class=\"media clearfix\">
                    <div class=\"media-body va-m\">
                        <h2 class=\"media-heading\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullname", array()), "html", null, true);
        echo "
                        </h2>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-12\">

                    <div class=\"tab-block\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\">
                                <a href=\"#tab1\" data-toggle=\"tab\">Events</a>
                            </li>
                            <li>
                                <a href=\"#tab2\" data-toggle=\"tab\">About</a>
                            </li>
                        </ul>
                        <div class=\"tab-content p30\">
                            <div id=\"tab1\" class=\"tab-pane active\"></div>
                            <div id=\"tab2\" class=\"tab-pane\">
                                <div class=\"panel\">
                                    <div class=\"panel-body pn\">

                                            <table class=\"table mbn tc-icon-1 tc-med-2 tc-bold-last\">
                                                <thead>
                                                <tr class=\"hidden\">
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Gender</th>
                                                    <th>Birthday</th>
                                                    <th>Celphone</th>
                                                    <th>Active</th>
                                                    <th>Registered</th>
                                                    <th>Modified</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <span class=\"fa fa-user text-warning\"></span>
                                                    </td>
                                                    <td>Name</td>
                                                    <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullname", array()), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class=\"fa fa-reply text-primary\"></span>
                                                    </td>
                                                    <td>Email</td>
                                                    <td><a href=\"mailto:";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "\" target=\"_top\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class=\"fa fa-calendar text-info\"></span>
                                                    </td>
                                                    <td>Birthday</td>
                                                    <td>";
        // line 93
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "birthday", array()), "m/d/Y"), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class=\"fa fa-phone text-success\"></span>
                                                    </td>
                                                    <td>Cellphone</td>
                                                    <td><a class=\"phone\" href=\"tel:";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ccode", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cellphone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ccode", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cellphone", array()), "html", null, true);
        echo "</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class=\"fa fa-question text-danger\"></span>
                                                    </td>
                                                    <td>Is Active?</td>
                                                    <td>
                                                        ";
        // line 108
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isactive", array()) == 1)) {
            // line 109
            echo "                                                            Yes
                                                        ";
        } else {
            // line 111
            echo "                                                            No
                                                        ";
        }
        // line 113
        echo "                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class=\"fa fa-database text-primary-lighter\"></span>
                                                    </td>
                                                    <td>Register Date</td>
                                                    <td>";
        // line 120
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdat", array()), "Y-m-d"), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class=\"fa fa-edit text-info-lighter\"></span>
                                                    </td>
                                                    <td>Last Modifed Date</td>
                                                    <td>";
        // line 127
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "modifiedat", array()), "Y-m-d"), "html", null, true);
        echo "</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- End: Content -->

    </section>
    </body>
";
        
        $__internal_0137e2326953b76073b5e31d6792d75382f33c0833b502a759408501a4a9f0ed->leave($__internal_0137e2326953b76073b5e31d6792d75382f33c0833b502a759408501a4a9f0ed_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 127,  186 => 120,  177 => 113,  173 => 111,  169 => 109,  167 => 108,  152 => 100,  142 => 93,  130 => 86,  120 => 79,  74 => 36,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::default.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <body class="profile-page">*/
/*     <!-- Start: Content-Wrapper -->*/
/*     <section id="content_wrapper">*/
/* */
/*         <!-- Start: Topbar -->*/
/*         <header id="topbar">*/
/*             <div class="topbar-left">*/
/*                 <ol class="breadcrumb">*/
/*                     <li class="crumb-active">*/
/*                         <a href="dashboard.html">Dashboard</a>*/
/*                     </li>*/
/*                     <li class="crumb-icon">*/
/*                         <a href="dashboard.html">*/
/*                             <span class="glyphicon glyphicon-home"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="crumb-link">*/
/*                         <a href="dashboard.html">Home</a>*/
/*                     </li>*/
/*                     <li class="crumb-trail">Dashboard</li>*/
/*                 </ol>*/
/*             </div>*/
/*         </header>*/
/*         <!-- End: Topbar -->*/
/* */
/*         <!-- Begin: Content -->*/
/*         <section id="content" class="animated fadeIn">*/
/* */
/*             <!-- Begin .page-heading -->*/
/*             <div class="page-heading">*/
/*                 <div class="media clearfix">*/
/*                     <div class="media-body va-m">*/
/*                         <h2 class="media-heading">{{ user.fullname }}*/
/*                         </h2>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/* */
/*                     <div class="tab-block">*/
/*                         <ul class="nav nav-tabs">*/
/*                             <li class="active">*/
/*                                 <a href="#tab1" data-toggle="tab">Events</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#tab2" data-toggle="tab">About</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <div class="tab-content p30">*/
/*                             <div id="tab1" class="tab-pane active"></div>*/
/*                             <div id="tab2" class="tab-pane">*/
/*                                 <div class="panel">*/
/*                                     <div class="panel-body pn">*/
/* */
/*                                             <table class="table mbn tc-icon-1 tc-med-2 tc-bold-last">*/
/*                                                 <thead>*/
/*                                                 <tr class="hidden">*/
/*                                                     <th>Name</th>*/
/*                                                     <th>Email</th>*/
/*                                                     <th>Gender</th>*/
/*                                                     <th>Birthday</th>*/
/*                                                     <th>Celphone</th>*/
/*                                                     <th>Active</th>*/
/*                                                     <th>Registered</th>*/
/*                                                     <th>Modified</th>*/
/*                                                 </tr>*/
/*                                                 </thead>*/
/*                                                 <tbody>*/
/*                                                 <tr>*/
/*                                                     <td>*/
/*                                                         <span class="fa fa-user text-warning"></span>*/
/*                                                     </td>*/
/*                                                     <td>Name</td>*/
/*                                                     <td>{{ user.fullname }}</td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <td>*/
/*                                                         <span class="fa fa-reply text-primary"></span>*/
/*                                                     </td>*/
/*                                                     <td>Email</td>*/
/*                                                     <td><a href="mailto:{{ user.username }}" target="_top"> {{ user.username }}</a></td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <td>*/
/*                                                         <span class="fa fa-calendar text-info"></span>*/
/*                                                     </td>*/
/*                                                     <td>Birthday</td>*/
/*                                                     <td>{{ user.birthday|date("m/d/Y") }}</td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <td>*/
/*                                                         <span class="fa fa-phone text-success"></span>*/
/*                                                     </td>*/
/*                                                     <td>Cellphone</td>*/
/*                                                     <td><a class="phone" href="tel:{{ user.ccode }}{{ user.cellphone }}">{{ user.ccode }}{{ user.cellphone }}</a></td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <td>*/
/*                                                         <span class="fa fa-question text-danger"></span>*/
/*                                                     </td>*/
/*                                                     <td>Is Active?</td>*/
/*                                                     <td>*/
/*                                                         {% if user.isactive == 1 %}*/
/*                                                             Yes*/
/*                                                         {% else %}*/
/*                                                             No*/
/*                                                         {% endif %}*/
/*                                                     </td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <td>*/
/*                                                         <span class="fa fa-database text-primary-lighter"></span>*/
/*                                                     </td>*/
/*                                                     <td>Register Date</td>*/
/*                                                     <td>{{ user.createdat|date('Y-m-d') }}</td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <td>*/
/*                                                         <span class="fa fa-edit text-info-lighter"></span>*/
/*                                                     </td>*/
/*                                                     <td>Last Modifed Date</td>*/
/*                                                     <td>{{ user.modifiedat|date('Y-m-d') }}</td>*/
/*                                                 </tr>*/
/*                                                 </tbody>*/
/*                                             </table>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </section>*/
/*         <!-- End: Content -->*/
/* */
/*     </section>*/
/*     </body>*/
/* {% endblock %}*/
