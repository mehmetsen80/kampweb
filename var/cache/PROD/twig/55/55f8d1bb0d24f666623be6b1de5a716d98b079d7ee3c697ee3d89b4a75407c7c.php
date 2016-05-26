<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d42826edb14f4e1a2bef0a373238be3bcbdd78853950aa2f73824da80be62773 extends Twig_Template
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
        $__internal_5238b93311c2b813a2fdace30ae9f330df1f1ecd53ded2adb95a419a31f6f1a8 = $this->env->getExtension("native_profiler");
        $__internal_5238b93311c2b813a2fdace30ae9f330df1f1ecd53ded2adb95a419a31f6f1a8->enter($__internal_5238b93311c2b813a2fdace30ae9f330df1f1ecd53ded2adb95a419a31f6f1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5238b93311c2b813a2fdace30ae9f330df1f1ecd53ded2adb95a419a31f6f1a8->leave($__internal_5238b93311c2b813a2fdace30ae9f330df1f1ecd53ded2adb95a419a31f6f1a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
