<?php

/* :user:list.html.twig */
class __TwigTemplate_0c74798673afb42ccf725004d7aa5139ca890b8455f953f6d478e9b419eaff28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default.html.twig", ":user:list.html.twig", 1);
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
        $__internal_d871f818ef08afaf52d679254038827230576312aef07fec92fdc6d57df6e08d = $this->env->getExtension("native_profiler");
        $__internal_d871f818ef08afaf52d679254038827230576312aef07fec92fdc6d57df6e08d->enter($__internal_d871f818ef08afaf52d679254038827230576312aef07fec92fdc6d57df6e08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d871f818ef08afaf52d679254038827230576312aef07fec92fdc6d57df6e08d->leave($__internal_d871f818ef08afaf52d679254038827230576312aef07fec92fdc6d57df6e08d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55147b09dfb24f87010f8d413f4ab97efb4dae370999f08ac738bfcdf1519bf6 = $this->env->getExtension("native_profiler");
        $__internal_55147b09dfb24f87010f8d413f4ab97efb4dae370999f08ac738bfcdf1519bf6->enter($__internal_55147b09dfb24f87010f8d413f4ab97efb4dae370999f08ac738bfcdf1519bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_55147b09dfb24f87010f8d413f4ab97efb4dae370999f08ac738bfcdf1519bf6->leave($__internal_55147b09dfb24f87010f8d413f4ab97efb4dae370999f08ac738bfcdf1519bf6_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7235e599a37d7e1885ebedb3c36d82dcd1615a5cb662804c0a51cce7626089b = $this->env->getExtension("native_profiler");
        $__internal_a7235e599a37d7e1885ebedb3c36d82dcd1615a5cb662804c0a51cce7626089b->enter($__internal_a7235e599a37d7e1885ebedb3c36d82dcd1615a5cb662804c0a51cce7626089b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                </ol>
            </div>
        </header>
        <!-- End: TOPBAR -->

        <!-- Begin: CONTENT -->
        <section id=\"content\" >
            <div class=\"col-md-12\">
                <div class=\"panel panel-visible\" id=\"spy2\">
                    <div class=\"panel-heading\">
                        <div class=\"panel-title hidden-xs\">
                            <span class=\"glyphicon glyphicon-tasks\"></span>Users</div>
                    </div>
                    <div class=\"panel-body pn\">
                        <table class=\"table table-striped table-hover\" id=\"datatable2\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>User</th>
                                <th>Email</th>
                                <th>Modified Date</th>
                                <th>Active</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 54
            echo "                                <tr>
                                    <td> <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showusers", array("userid" => $this->getAttribute(            // line 56
$context["user"], "id", array()))), "html", null, true);
            // line 57
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "fullname", array()), "html", null, true);
            echo "</a>
                                    </td>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "modifiedat", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "isactive", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
   </section>
</body>
";
        
        $__internal_a7235e599a37d7e1885ebedb3c36d82dcd1615a5cb662804c0a51cce7626089b->leave($__internal_a7235e599a37d7e1885ebedb3c36d82dcd1615a5cb662804c0a51cce7626089b_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32d89c39f2b95ddb06cbeba9f12fb44929850930a27aa44d3b3d13262b4b6fa9 = $this->env->getExtension("native_profiler");
        $__internal_32d89c39f2b95ddb06cbeba9f12fb44929850930a27aa44d3b3d13262b4b6fa9->enter($__internal_32d89c39f2b95ddb06cbeba9f12fb44929850930a27aa44d3b3d13262b4b6fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables -->
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables Tabletools addon -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables ColReorder addon -->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables Bootstrap Modifications  -->
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Theme Javascript -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
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

            \$('#datatable2').dataTable({
                \"aoColumnDefs\": [{
                    'bSortable': true,
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
                \"sDom\": '<\"dt-panelmenu clearfix\"lfr>t<\"dt-panelfooter clearfix\"ip>',
                \"oTableTools\": {
                    \"sSwfPath\": \"vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf\"
                }
            });

        });
    </script>
    <!-- END: PAGE SCRIPTS -->
";
        
        $__internal_32d89c39f2b95ddb06cbeba9f12fb44929850930a27aa44d3b3d13262b4b6fa9->leave($__internal_32d89c39f2b95ddb06cbeba9f12fb44929850930a27aa44d3b3d13262b4b6fa9_prof);

    }

    public function getTemplateName()
    {
        return ":user:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 93,  218 => 92,  214 => 91,  208 => 88,  202 => 85,  196 => 82,  190 => 79,  184 => 76,  180 => 75,  177 => 74,  171 => 73,  156 => 64,  147 => 61,  143 => 60,  139 => 59,  133 => 57,  131 => 56,  130 => 55,  127 => 54,  123 => 53,  92 => 25,  86 => 22,  77 => 15,  71 => 14,  62 => 12,  57 => 10,  52 => 8,  47 => 6,  42 => 3,  36 => 2,  11 => 1,);
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
/*                 </ol>*/
/*             </div>*/
/*         </header>*/
/*         <!-- End: TOPBAR -->*/
/* */
/*         <!-- Begin: CONTENT -->*/
/*         <section id="content" >*/
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-visible" id="spy2">*/
/*                     <div class="panel-heading">*/
/*                         <div class="panel-title hidden-xs">*/
/*                             <span class="glyphicon glyphicon-tasks"></span>Users</div>*/
/*                     </div>*/
/*                     <div class="panel-body pn">*/
/*                         <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>User</th>*/
/*                                 <th>Email</th>*/
/*                                 <th>Modified Date</th>*/
/*                                 <th>Active</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {%  for user in users %}*/
/*                                 <tr>*/
/*                                     <td> <a href="{{ path('showusers', {*/
/*                                             'userid': user.id*/
/*                                                 }) }}">{{ user.fullname }}</a>*/
/*                                     </td>*/
/*                                     <td>{{ user.username }}</td>*/
/*                                     <td>{{ user.modifiedat|date('Y-m-d') }}</td>*/
/*                                     <td>{{ user.isactive }}</td>*/
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
/*             $('#datatable2').dataTable({*/
/*                 "aoColumnDefs": [{*/
/*                     'bSortable': true,*/
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
/*                 "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',*/
/*                 "oTableTools": {*/
/*                     "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"*/
/*                 }*/
/*             });*/
/* */
/*         });*/
/*     </script>*/
/*     <!-- END: PAGE SCRIPTS -->*/
/* {% endblock %}*/
