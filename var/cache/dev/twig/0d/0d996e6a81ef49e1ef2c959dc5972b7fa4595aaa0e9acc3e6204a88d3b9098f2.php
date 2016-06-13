<?php

/* user/list.html.twig */
class __TwigTemplate_0c74798673afb42ccf725004d7aa5139ca890b8455f953f6d478e9b419eaff28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default.html.twig", "user/list.html.twig", 1);
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
        $__internal_7c607236508486afc8fce516028c7f987d61c821ecbde1a7bf107f7c890d379c = $this->env->getExtension("native_profiler");
        $__internal_7c607236508486afc8fce516028c7f987d61c821ecbde1a7bf107f7c890d379c->enter($__internal_7c607236508486afc8fce516028c7f987d61c821ecbde1a7bf107f7c890d379c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c607236508486afc8fce516028c7f987d61c821ecbde1a7bf107f7c890d379c->leave($__internal_7c607236508486afc8fce516028c7f987d61c821ecbde1a7bf107f7c890d379c_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96ac515b13ccd0cd2b1aead264ce5749559a47bfbfd6e72a0d4cc646222b325a = $this->env->getExtension("native_profiler");
        $__internal_96ac515b13ccd0cd2b1aead264ce5749559a47bfbfd6e72a0d4cc646222b325a->enter($__internal_96ac515b13ccd0cd2b1aead264ce5749559a47bfbfd6e72a0d4cc646222b325a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <!-- Font CSS -->
    <link rel='stylesheet' type='text/css' href='";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/fonts/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "'>
    <!-- Theme CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/skin/default_skin/css/theme.css"), "html", null, true);
        echo "\">
    <!-- Datatables ColReorder Addon CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"), "html", null, true);
        echo "\">
    <!-- Datatables CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/media/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
";
        
        $__internal_96ac515b13ccd0cd2b1aead264ce5749559a47bfbfd6e72a0d4cc646222b325a->leave($__internal_96ac515b13ccd0cd2b1aead264ce5749559a47bfbfd6e72a0d4cc646222b325a_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dd01e1eb57206ef216c98373bd6edf2df2ff1f5a62924ee98b026fdf2185d47 = $this->env->getExtension("native_profiler");
        $__internal_4dd01e1eb57206ef216c98373bd6edf2df2ff1f5a62924ee98b026fdf2185d47->enter($__internal_4dd01e1eb57206ef216c98373bd6edf2df2ff1f5a62924ee98b026fdf2185d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "<body class=\"datatables-page\" data-spy=\"scroll\" data-target=\"#nav-spy\" data-offset=\"300\">
   <section id=\"content_wrapper\">
       <!-- Start: TOPBAR -->
       <header id=\"topbar\">
           <div class=\"topbar-left\">
               <ol class=\"breadcrumb\">
                   <li class=\"crumb-active\">
                       <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">Dashboard</a>
                   </li>
                   <li class=\"crumb-icon\">
                       <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
                           <span class=\"glyphicon glyphicon-home\"></span>
                       </a>
                   </li>
                   <li class=\"crumb-link\">
                       <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("users");
        echo "\">Users</a>
                   </li>
               </ol>
           </div>
       </header>
       <!-- End: TOPBAR -->

        <!-- Begin: CONTENT -->
        <section id=\"content\" >
            <div class=\"col-md-12\">
                <div class=\"text-right\" style=\"margin-bottom: 1em;\">
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("adduser");
        echo "\">
                        <button type=\"button\" class=\"btn btn-info\"> New User
                            <i class=\"fa fa-plus\"></i>
                        </button>
                    </a>
                </div>
                <div class=\"panel panel-visible\" id=\"spy3\">
                    <div class=\"panel-heading\">
                        <div class=\"panel-title hidden-xs\">
                            <span class=\"glyphicon glyphicon-tasks\"></span>Users</div>
                    </div>
                    <div class=\"panel-body pn\">

                        <table class=\"table table-striped table-hover\" id=\"datatable1\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr><th colspan=\"9\"><h4></h4></th></tr>
                            <tr>
                                <th>User</th>
                                <th>Email</th>
                                <th>Modified Date</th>
                                <th>Active</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>User</th>
                                <th>Email</th>
                                <th>Modified Date</th>
                                <th>Active</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 74
            echo "                                <tr>
                                    <td> <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showusers", array("userid" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "fullname", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "modifiedat", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 79
            if (($this->getAttribute($context["user"], "isactive", array()) == 1)) {
                // line 80
                echo "                                        Yes
                                        ";
            } else {
                // line 82
                echo "                                        No
                                        ";
            }
            // line 84
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>
   </section>
</body>
";
        
        $__internal_4dd01e1eb57206ef216c98373bd6edf2df2ff1f5a62924ee98b026fdf2185d47->leave($__internal_4dd01e1eb57206ef216c98373bd6edf2df2ff1f5a62924ee98b026fdf2185d47_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9621bf7033583208077147db565b4dc1862f65bc271a9d5de40e85639902e243 = $this->env->getExtension("native_profiler");
        $__internal_9621bf7033583208077147db565b4dc1862f65bc271a9d5de40e85639902e243->enter($__internal_9621bf7033583208077147db565b4dc1862f65bc271a9d5de40e85639902e243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables -->
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables Tabletools addon -->
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables ColReorder addon -->
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables Bootstrap Modifications  -->
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Theme Javascript -->
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            \$('#datatable1').dataTable({
                \"paging\":   true,
                \"ordering\": true,
                \"info\":     true,
                \"iDisplayLength\": 10,
                \"aLengthMenu\": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, \"All\"]
                ],
                \"sDom\": '<\"dt-panelmenu clearfix\"lfr>t<\"dt-panelmenu clearfix\"T>Rt<\"dt-panelfooter clearfix\"ip>',
                \"oTableTools\": {
                    \"sSwfPath\": \"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"), "html", null, true);
        echo "\"
                }
            });
        });
    </script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {

            \"use strict\";

            // Init Demo JS
            Demo.init();


            // Init Theme Core
            Core.init();


            // Init Widget Demo JS
            // demoHighCharts.init();

            // Because we are using Admin Panels we use the OnFinish
            // callback to activate the demoWidgets. It's smoother if
            // we let the panels be moved and organized before
            // filling them with content from various plugins

            // Init plugins used on this page
            // HighCharts, JvectorMap, Admin Panels

            // Init Admin Panels on widgets inside the \".admin-panels\" container
            \$('.admin-panels').adminpanel({
                grid: '.admin-grid',
                draggable: true,
                preserveGrid: true,
                // mobile: true,
                onStart: function() {
                    // Do something before AdminPanels runs
                },
                onSave: function() {
                    \$(window).trigger('resize');
                }
            });
        });
    </script>
    <!-- END: PAGE SCRIPTS -->

    <!-- END: PAGE SCRIPTS -->
";
        
        $__internal_9621bf7033583208077147db565b4dc1862f65bc271a9d5de40e85639902e243->leave($__internal_9621bf7033583208077147db565b4dc1862f65bc271a9d5de40e85639902e243_prof);

    }

    public function getTemplateName()
    {
        return "user/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 131,  256 => 117,  252 => 116,  248 => 115,  242 => 112,  236 => 109,  230 => 106,  224 => 103,  218 => 100,  214 => 99,  211 => 98,  205 => 97,  189 => 87,  181 => 84,  177 => 82,  173 => 80,  171 => 79,  166 => 77,  162 => 76,  156 => 75,  153 => 74,  149 => 73,  114 => 41,  100 => 30,  92 => 25,  86 => 22,  77 => 15,  71 => 14,  62 => 12,  57 => 10,  52 => 8,  47 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::default.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <!-- Font CSS (Via CDN) -->*/
/*     <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>*/
/*     <!-- Font CSS -->*/
/*     <link rel='stylesheet' type='text/css' href='{{ asset('assets/fonts/font-awesome/css/font-awesome.css') }}'>*/
/*     <!-- Theme CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css') }}">*/
/*     <!-- Datatables ColReorder Addon CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css') }}">*/
/*     <!-- Datatables CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/plugins/datatables/media/css/dataTables.bootstrap.css') }}">*/
/* {% endblock %}*/
/* {% block body %}*/
/* <body class="datatables-page" data-spy="scroll" data-target="#nav-spy" data-offset="300">*/
/*    <section id="content_wrapper">*/
/*        <!-- Start: TOPBAR -->*/
/*        <header id="topbar">*/
/*            <div class="topbar-left">*/
/*                <ol class="breadcrumb">*/
/*                    <li class="crumb-active">*/
/*                        <a href="{{ path('dashboard') }}">Dashboard</a>*/
/*                    </li>*/
/*                    <li class="crumb-icon">*/
/*                        <a href="{{ path('dashboard') }}">*/
/*                            <span class="glyphicon glyphicon-home"></span>*/
/*                        </a>*/
/*                    </li>*/
/*                    <li class="crumb-link">*/
/*                        <a href="{{ path('users') }}">Users</a>*/
/*                    </li>*/
/*                </ol>*/
/*            </div>*/
/*        </header>*/
/*        <!-- End: TOPBAR -->*/
/* */
/*         <!-- Begin: CONTENT -->*/
/*         <section id="content" >*/
/*             <div class="col-md-12">*/
/*                 <div class="text-right" style="margin-bottom: 1em;">*/
/*                     <a href="{{ path('adduser') }}">*/
/*                         <button type="button" class="btn btn-info"> New User*/
/*                             <i class="fa fa-plus"></i>*/
/*                         </button>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="panel panel-visible" id="spy3">*/
/*                     <div class="panel-heading">*/
/*                         <div class="panel-title hidden-xs">*/
/*                             <span class="glyphicon glyphicon-tasks"></span>Users</div>*/
/*                     </div>*/
/*                     <div class="panel-body pn">*/
/* */
/*                         <table class="table table-striped table-hover" id="datatable1" cellspacing="0" width="100%">*/
/*                             <thead>*/
/*                             <tr><th colspan="9"><h4></h4></th></tr>*/
/*                             <tr>*/
/*                                 <th>User</th>*/
/*                                 <th>Email</th>*/
/*                                 <th>Modified Date</th>*/
/*                                 <th>Active</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tfoot>*/
/*                             <tr>*/
/*                                 <th>User</th>*/
/*                                 <th>Email</th>*/
/*                                 <th>Modified Date</th>*/
/*                                 <th>Active</th>*/
/*                             </tr>*/
/*                             </tfoot>*/
/*                             <tbody>*/
/*                             {%  for user in users %}*/
/*                                 <tr>*/
/*                                     <td> <a href="{{ path('showusers', {'userid': user.id}) }}">{{ user.fullname }}</a></td>*/
/*                                     <td>{{ user.username }}</td>*/
/*                                     <td>{{ user.modifiedat|date('Y-m-d') }}</td>*/
/*                                     <td>*/
/*                                         {% if user.isactive == 1 %}*/
/*                                         Yes*/
/*                                         {% else %}*/
/*                                         No*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*    </section>*/
/* </body>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <!-- jQuery -->*/
/*     <script src="{{ asset('assets/vendor/jquery/jquery-1.11.1.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>*/
/* */
/*     <!-- Datatables -->*/
/*     <script src="{{ asset('assets/vendor/plugins/datatables/media/js/jquery.dataTables.js') }}"></script>*/
/* */
/*     <!-- Datatables Tabletools addon -->*/
/*     <script src="{{ asset('assets/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.js') }}"></script>*/
/* */
/*     <!-- Datatables ColReorder addon -->*/
/*     <script src="{{ asset('assets/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}"></script>*/
/* */
/*     <!-- Datatables Bootstrap Modifications  -->*/
/*     <script src="{{ asset('assets/vendor/plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>*/
/* */
/*     <!-- Theme Javascript -->*/
/*     <script src="{{ asset('assets/js/utility/utility.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/demo/demo.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/main.js') }}"></script>*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function() {*/
/*             $('#datatable1').dataTable({*/
/*                 "paging":   true,*/
/*                 "ordering": true,*/
/*                 "info":     true,*/
/*                 "iDisplayLength": 10,*/
/*                 "aLengthMenu": [*/
/*                     [5, 10, 25, 50, -1],*/
/*                     [5, 10, 25, 50, "All"]*/
/*                 ],*/
/*                 "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelmenu clearfix"T>Rt<"dt-panelfooter clearfix"ip>',*/
/*                 "oTableTools": {*/
/*                     "sSwfPath": "{{ asset('assets/vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf') }}"*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function() {*/
/* */
/*             "use strict";*/
/* */
/*             // Init Demo JS*/
/*             Demo.init();*/
/* */
/* */
/*             // Init Theme Core*/
/*             Core.init();*/
/* */
/* */
/*             // Init Widget Demo JS*/
/*             // demoHighCharts.init();*/
/* */
/*             // Because we are using Admin Panels we use the OnFinish*/
/*             // callback to activate the demoWidgets. It's smoother if*/
/*             // we let the panels be moved and organized before*/
/*             // filling them with content from various plugins*/
/* */
/*             // Init plugins used on this page*/
/*             // HighCharts, JvectorMap, Admin Panels*/
/* */
/*             // Init Admin Panels on widgets inside the ".admin-panels" container*/
/*             $('.admin-panels').adminpanel({*/
/*                 grid: '.admin-grid',*/
/*                 draggable: true,*/
/*                 preserveGrid: true,*/
/*                 // mobile: true,*/
/*                 onStart: function() {*/
/*                     // Do something before AdminPanels runs*/
/*                 },*/
/*                 onSave: function() {*/
/*                     $(window).trigger('resize');*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/*     <!-- END: PAGE SCRIPTS -->*/
/* */
/*     <!-- END: PAGE SCRIPTS -->*/
/* {% endblock %}*/
