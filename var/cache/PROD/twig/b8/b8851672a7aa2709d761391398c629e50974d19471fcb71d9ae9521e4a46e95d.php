<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_eb489a70fbce827e650df20066d2b2e0ffe42647451286a3f1ca07e4fc4b34c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15bb637a3940232168475994e3a2916e842d8a2d8be2cbdb0c3ccb0eb2d604ff = $this->env->getExtension("native_profiler");
        $__internal_15bb637a3940232168475994e3a2916e842d8a2d8be2cbdb0c3ccb0eb2d604ff->enter($__internal_15bb637a3940232168475994e3a2916e842d8a2d8be2cbdb0c3ccb0eb2d604ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_15bb637a3940232168475994e3a2916e842d8a2d8be2cbdb0c3ccb0eb2d604ff->leave($__internal_15bb637a3940232168475994e3a2916e842d8a2d8be2cbdb0c3ccb0eb2d604ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
