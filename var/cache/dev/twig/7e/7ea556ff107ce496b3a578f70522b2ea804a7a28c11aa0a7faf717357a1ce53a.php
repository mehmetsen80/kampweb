<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a3ebbf2c8a4b49094a01a7c5ba41e9ebe77ee4056353c5cc2aebc9144e1a390d extends Twig_Template
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
        $__internal_50c56490494c479500783859c1f8743b00dc9c69d264465e470cc8e5adca7012 = $this->env->getExtension("native_profiler");
        $__internal_50c56490494c479500783859c1f8743b00dc9c69d264465e470cc8e5adca7012->enter($__internal_50c56490494c479500783859c1f8743b00dc9c69d264465e470cc8e5adca7012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_50c56490494c479500783859c1f8743b00dc9c69d264465e470cc8e5adca7012->leave($__internal_50c56490494c479500783859c1f8743b00dc9c69d264465e470cc8e5adca7012_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
