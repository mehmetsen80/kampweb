<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_77a7325610f189813b6fc4c6fb51148c5463b120e8efb9a5afdba3773c829f3a extends Twig_Template
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
        $__internal_046231c4f9b401cedeed30849486eb244c7f43a2219560856814f341e3fedd94 = $this->env->getExtension("native_profiler");
        $__internal_046231c4f9b401cedeed30849486eb244c7f43a2219560856814f341e3fedd94->enter($__internal_046231c4f9b401cedeed30849486eb244c7f43a2219560856814f341e3fedd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_046231c4f9b401cedeed30849486eb244c7f43a2219560856814f341e3fedd94->leave($__internal_046231c4f9b401cedeed30849486eb244c7f43a2219560856814f341e3fedd94_prof);

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
