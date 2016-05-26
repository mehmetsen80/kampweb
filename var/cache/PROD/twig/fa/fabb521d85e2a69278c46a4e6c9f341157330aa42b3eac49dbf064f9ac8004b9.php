<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2fcde84a2f5e7f8bb2ee6fb5c502810f0498f792020a3dacf51581559ec07e82 extends Twig_Template
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
        $__internal_d28860713c14fb343ebd8b013abcb34b13452d6f8dcefeb1d9beb271453ce576 = $this->env->getExtension("native_profiler");
        $__internal_d28860713c14fb343ebd8b013abcb34b13452d6f8dcefeb1d9beb271453ce576->enter($__internal_d28860713c14fb343ebd8b013abcb34b13452d6f8dcefeb1d9beb271453ce576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d28860713c14fb343ebd8b013abcb34b13452d6f8dcefeb1d9beb271453ce576->leave($__internal_d28860713c14fb343ebd8b013abcb34b13452d6f8dcefeb1d9beb271453ce576_prof);

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
