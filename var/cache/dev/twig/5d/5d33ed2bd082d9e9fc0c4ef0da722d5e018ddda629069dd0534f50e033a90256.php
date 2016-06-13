<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8176f369cea21cf2a21cf70c9bb4f8601a8b73f15052c9a0fc98015c6f4c118c extends Twig_Template
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
        $__internal_1a05660ed618681058fbf0dcade29cafc81c6aee1f59a9d0c53d3ecab63a2726 = $this->env->getExtension("native_profiler");
        $__internal_1a05660ed618681058fbf0dcade29cafc81c6aee1f59a9d0c53d3ecab63a2726->enter($__internal_1a05660ed618681058fbf0dcade29cafc81c6aee1f59a9d0c53d3ecab63a2726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_1a05660ed618681058fbf0dcade29cafc81c6aee1f59a9d0c53d3ecab63a2726->leave($__internal_1a05660ed618681058fbf0dcade29cafc81c6aee1f59a9d0c53d3ecab63a2726_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
