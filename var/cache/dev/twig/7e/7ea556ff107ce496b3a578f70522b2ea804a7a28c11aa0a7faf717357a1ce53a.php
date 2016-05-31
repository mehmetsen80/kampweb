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
        $__internal_f01bb66a2baebf0d6ed35b33a3a16f7766e3c012a84a91d1bdc09c57ff34bc02 = $this->env->getExtension("native_profiler");
        $__internal_f01bb66a2baebf0d6ed35b33a3a16f7766e3c012a84a91d1bdc09c57ff34bc02->enter($__internal_f01bb66a2baebf0d6ed35b33a3a16f7766e3c012a84a91d1bdc09c57ff34bc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f01bb66a2baebf0d6ed35b33a3a16f7766e3c012a84a91d1bdc09c57ff34bc02->leave($__internal_f01bb66a2baebf0d6ed35b33a3a16f7766e3c012a84a91d1bdc09c57ff34bc02_prof);

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
