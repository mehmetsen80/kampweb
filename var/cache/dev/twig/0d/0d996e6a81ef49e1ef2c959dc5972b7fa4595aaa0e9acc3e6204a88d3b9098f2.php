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
        $__internal_837cb7f62644e0a56b06191ab33adac2af5862acfea0072a02430f34a2bfa450 = $this->env->getExtension("native_profiler");
        $__internal_837cb7f62644e0a56b06191ab33adac2af5862acfea0072a02430f34a2bfa450->enter($__internal_837cb7f62644e0a56b06191ab33adac2af5862acfea0072a02430f34a2bfa450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_837cb7f62644e0a56b06191ab33adac2af5862acfea0072a02430f34a2bfa450->leave($__internal_837cb7f62644e0a56b06191ab33adac2af5862acfea0072a02430f34a2bfa450_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d9a373bc59e10d8778c3c3a152ca95ecd389579c4822cac6883b84f7154d2b0d = $this->env->getExtension("native_profiler");
        $__internal_d9a373bc59e10d8778c3c3a152ca95ecd389579c4822cac6883b84f7154d2b0d->enter($__internal_d9a373bc59e10d8778c3c3a152ca95ecd389579c4822cac6883b84f7154d2b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d9a373bc59e10d8778c3c3a152ca95ecd389579c4822cac6883b84f7154d2b0d->leave($__internal_d9a373bc59e10d8778c3c3a152ca95ecd389579c4822cac6883b84f7154d2b0d_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_17a7324c692a75cab03157cca225605185a1561a1999561cb50cebdee7114e38 = $this->env->getExtension("native_profiler");
        $__internal_17a7324c692a75cab03157cca225605185a1561a1999561cb50cebdee7114e38->enter($__internal_17a7324c692a75cab03157cca225605185a1561a1999561cb50cebdee7114e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <div class=\"panel panel-visible\" id=\"spy3\">
                    <div class=\"panel-heading\">
                        <div class=\"panel-title hidden-xs\">
                            <span class=\"glyphicon glyphicon-tasks\"></span>Users</div>
                    </div>
                    <div class=\"panel-body pn\">
                        <table class=\"table table-striped table-hover\" id=\"datatable3\" cellspacing=\"0\" width=\"100%\">
                            <thead>
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
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 67
            echo "                                <tr>
                                    <td> <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profile", array("userid" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "fullname", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "modifiedat", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 72
            if (($this->getAttribute($context["user"], "isactive", array()) == 1)) {
                // line 73
                echo "                                        Yes
                                        ";
            } else {
                // line 75
                echo "                                        No
                                        ";
            }
            // line 77
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
   </section>
</body>
";
        
        $__internal_17a7324c692a75cab03157cca225605185a1561a1999561cb50cebdee7114e38->leave($__internal_17a7324c692a75cab03157cca225605185a1561a1999561cb50cebdee7114e38_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79664c8a091f335695d0eb4cfb094a551ef9d414cb62c5eb2922905c6b65d977 = $this->env->getExtension("native_profiler");
        $__internal_79664c8a091f335695d0eb4cfb094a551ef9d414cb62c5eb2922905c6b65d977->enter($__internal_79664c8a091f335695d0eb4cfb094a551ef9d414cb62c5eb2922905c6b65d977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables -->
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables Tabletools addon -->
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables ColReorder addon -->
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables Bootstrap Modifications  -->
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Theme Javascript -->
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {

            \"use strict\";

            // Init Theme Core
            Core.init();

            // Init Demo JS
            Demo.init();

            // Init DataTables
            \$('#datatable').dataTable({
                \"sDom\": 't<\"dt-panelfooter clearfix\"ip>',
                \"oTableTools\": {
                    \"sSwfPath\": \"vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf\"
                }
            });

            \$('#datatable3').dataTable({
                \"aoColumnDefs\": [{
                    'bSortable': false,
                    'aTargets': [-1]
                }],
                \"oLanguage\": {
                    \"oPaginate\": {
                        \"sPrevious\": \"\",
                        \"sNext\": \"\"
                    }
                },
                \"iDisplayLength\": 5,
                \"aLengthMenu\": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, \"All\"]
                ],
                \"sDom\": '<\"dt-panelmenu clearfix\"Tfr>t<\"dt-panelfooter clearfix\"ip>',
                \"oTableTools\": {
                    \"sSwfPath\": \"vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf\"
                }

            });

        });
    </script>
    <!-- END: PAGE SCRIPTS -->
";
        
        $__internal_79664c8a091f335695d0eb4cfb094a551ef9d414cb62c5eb2922905c6b65d977->leave($__internal_79664c8a091f335695d0eb4cfb094a551ef9d414cb62c5eb2922905c6b65d977_prof);

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
        return array (  245 => 109,  241 => 108,  237 => 107,  231 => 104,  225 => 101,  219 => 98,  213 => 95,  207 => 92,  203 => 91,  200 => 90,  194 => 89,  179 => 80,  171 => 77,  167 => 75,  163 => 73,  161 => 72,  156 => 70,  152 => 69,  146 => 68,  143 => 67,  139 => 66,  100 => 30,  92 => 25,  86 => 22,  77 => 15,  71 => 14,  62 => 12,  57 => 10,  52 => 8,  47 => 6,  42 => 3,  36 => 2,  11 => 1,);
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
/* */
/* */
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-visible" id="spy3">*/
/*                     <div class="panel-heading">*/
/*                         <div class="panel-title hidden-xs">*/
/*                             <span class="glyphicon glyphicon-tasks"></span>Users</div>*/
/*                     </div>*/
/*                     <div class="panel-body pn">*/
/*                         <table class="table table-striped table-hover" id="datatable3" cellspacing="0" width="100%">*/
/*                             <thead>*/
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
/*                                     <td> <a href="{{ path('profile', {'userid': user.id}) }}">{{ user.fullname }}</a></td>*/
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
/* */
/*             "use strict";*/
/* */
/*             // Init Theme Core*/
/*             Core.init();*/
/* */
/*             // Init Demo JS*/
/*             Demo.init();*/
/* */
/*             // Init DataTables*/
/*             $('#datatable').dataTable({*/
/*                 "sDom": 't<"dt-panelfooter clearfix"ip>',*/
/*                 "oTableTools": {*/
/*                     "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"*/
/*                 }*/
/*             });*/
/* */
/*             $('#datatable3').dataTable({*/
/*                 "aoColumnDefs": [{*/
/*                     'bSortable': false,*/
/*                     'aTargets': [-1]*/
/*                 }],*/
/*                 "oLanguage": {*/
/*                     "oPaginate": {*/
/*                         "sPrevious": "",*/
/*                         "sNext": ""*/
/*                     }*/
/*                 },*/
/*                 "iDisplayLength": 5,*/
/*                 "aLengthMenu": [*/
/*                     [5, 10, 25, 50, -1],*/
/*                     [5, 10, 25, 50, "All"]*/
/*                 ],*/
/*                 "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',*/
/*                 "oTableTools": {*/
/*                     "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"*/
/*                 }*/
/* */
/*             });*/
/* */
/*         });*/
/*     </script>*/
/*     <!-- END: PAGE SCRIPTS -->*/
/* {% endblock %}*/
