<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_cf1a14c51a75538c6c96af5c1211fb1291e08a5d707153fa4d5cf2970789ccd0 extends Twig_Template
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
        $__internal_6da6dcf84269c3cda49e3a226cbc28dcc243ed33cd1d4edc8f556731b95ee595 = $this->env->getExtension("native_profiler");
        $__internal_6da6dcf84269c3cda49e3a226cbc28dcc243ed33cd1d4edc8f556731b95ee595->enter($__internal_6da6dcf84269c3cda49e3a226cbc28dcc243ed33cd1d4edc8f556731b95ee595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6da6dcf84269c3cda49e3a226cbc28dcc243ed33cd1d4edc8f556731b95ee595->leave($__internal_6da6dcf84269c3cda49e3a226cbc28dcc243ed33cd1d4edc8f556731b95ee595_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
