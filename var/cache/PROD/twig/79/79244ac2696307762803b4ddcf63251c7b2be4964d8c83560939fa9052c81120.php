<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_37b88b0a3e9cc95269c1938b46c49e93cbb1e5f640a18c5ebbdfb89b8f5d8d26 extends Twig_Template
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
        $__internal_d7600356a782dc0d54f40969cba641a2112ca8d30b5bca5dcf5b352ee2ab0a44 = $this->env->getExtension("native_profiler");
        $__internal_d7600356a782dc0d54f40969cba641a2112ca8d30b5bca5dcf5b352ee2ab0a44->enter($__internal_d7600356a782dc0d54f40969cba641a2112ca8d30b5bca5dcf5b352ee2ab0a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d7600356a782dc0d54f40969cba641a2112ca8d30b5bca5dcf5b352ee2ab0a44->leave($__internal_d7600356a782dc0d54f40969cba641a2112ca8d30b5bca5dcf5b352ee2ab0a44_prof);

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
