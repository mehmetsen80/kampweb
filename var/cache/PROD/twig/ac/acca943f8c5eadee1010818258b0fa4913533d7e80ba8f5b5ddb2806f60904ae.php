<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_eae158ef7e25cba45dd4100fbb1327553d67e50c4e06fe9288e54b6f9d1f0feb extends Twig_Template
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
        $__internal_7f1f5ef62a061c7d3f90fe3d3fd84c59f273c95e4cccb3b4d674cfebb761d75f = $this->env->getExtension("native_profiler");
        $__internal_7f1f5ef62a061c7d3f90fe3d3fd84c59f273c95e4cccb3b4d674cfebb761d75f->enter($__internal_7f1f5ef62a061c7d3f90fe3d3fd84c59f273c95e4cccb3b4d674cfebb761d75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_7f1f5ef62a061c7d3f90fe3d3fd84c59f273c95e4cccb3b4d674cfebb761d75f->leave($__internal_7f1f5ef62a061c7d3f90fe3d3fd84c59f273c95e4cccb3b4d674cfebb761d75f_prof);

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
