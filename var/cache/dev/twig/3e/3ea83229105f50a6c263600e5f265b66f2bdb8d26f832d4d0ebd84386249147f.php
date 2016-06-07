<?php

/* /user/show.html.twig */
class __TwigTemplate_dbb9f1fd941df028bf6f4eacad6f5eb617cbf942a099c3deedcfdd68ea3b8768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default.html.twig", "/user/show.html.twig", 1);
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
        $__internal_e0a154ebf998b314fcd5ed62c1ab50349f19ee438ba3ccb54bb8a9dfbb9ee4a2 = $this->env->getExtension("native_profiler");
        $__internal_e0a154ebf998b314fcd5ed62c1ab50349f19ee438ba3ccb54bb8a9dfbb9ee4a2->enter($__internal_e0a154ebf998b314fcd5ed62c1ab50349f19ee438ba3ccb54bb8a9dfbb9ee4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0a154ebf998b314fcd5ed62c1ab50349f19ee438ba3ccb54bb8a9dfbb9ee4a2->leave($__internal_e0a154ebf998b314fcd5ed62c1ab50349f19ee438ba3ccb54bb8a9dfbb9ee4a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7afe6aa36a4acf83671d02949b68d8bcd1f4df19afc9a15084a5c18e8a6c6a4f = $this->env->getExtension("native_profiler");
        $__internal_7afe6aa36a4acf83671d02949b68d8bcd1f4df19afc9a15084a5c18e8a6c6a4f->enter($__internal_7afe6aa36a4acf83671d02949b68d8bcd1f4df19afc9a15084a5c18e8a6c6a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <small> - Profile</small>
                        </h2>
                        <p class=\"lead\">North American University - Computer Science</p>
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
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullname", array()), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class=\"fa fa-reply text-primary\"></span>
                                                    </td>
                                                    <td>Email</td>
                                                    <td><a href=\"mailto:";
        // line 88
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
        // line 95
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "birthday", array()), "m/d/Y"), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class=\"fa fa-phone text-success\"></span>
                                                    </td>
                                                    <td>Cellphone</td>
                                                    <td><a class=\"phone\" href=\"tel:";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cellphone", array()), "html", null, true);
        echo "\">";
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
        // line 110
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isactive", array()) == 1)) {
            // line 111
            echo "                                                            Yes
                                                        ";
        } else {
            // line 113
            echo "                                                            No
                                                        ";
        }
        // line 115
        echo "                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class=\"fa fa-database text-primary-lighter\"></span>
                                                    </td>
                                                    <td>Register Date</td>
                                                    <td>";
        // line 122
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdat", array()), "Y-m-d"), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class=\"fa fa-edit text-info-lighter\"></span>
                                                    </td>
                                                    <td>Last Modifed Date</td>
                                                    <td>";
        // line 129
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
        
        $__internal_7afe6aa36a4acf83671d02949b68d8bcd1f4df19afc9a15084a5c18e8a6c6a4f->leave($__internal_7afe6aa36a4acf83671d02949b68d8bcd1f4df19afc9a15084a5c18e8a6c6a4f_prof);

    }

    public function getTemplateName()
    {
        return "/user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 129,  186 => 122,  177 => 115,  173 => 113,  169 => 111,  167 => 110,  154 => 102,  144 => 95,  132 => 88,  122 => 81,  74 => 36,  40 => 4,  34 => 3,  11 => 1,);
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
/*                             <small> - Profile</small>*/
/*                         </h2>*/
/*                         <p class="lead">North American University - Computer Science</p>*/
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
/*                                                     <td><a class="phone" href="tel:{{ user.cellphone }}">{{ user.cellphone }}</a></td>*/
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
