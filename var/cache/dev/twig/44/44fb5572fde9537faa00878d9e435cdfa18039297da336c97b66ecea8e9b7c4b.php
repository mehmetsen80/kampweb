<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9a551da1da06873b60e34d8ab391a796bbc8881c2a3d102075ab6a4981f4cf0f extends Twig_Template
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
        $__internal_9f11491cb32500f4cf23c569b0346a469cd61d7998a0b13c2ccb85a41c440899 = $this->env->getExtension("native_profiler");
        $__internal_9f11491cb32500f4cf23c569b0346a469cd61d7998a0b13c2ccb85a41c440899->enter($__internal_9f11491cb32500f4cf23c569b0346a469cd61d7998a0b13c2ccb85a41c440899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9f11491cb32500f4cf23c569b0346a469cd61d7998a0b13c2ccb85a41c440899->leave($__internal_9f11491cb32500f4cf23c569b0346a469cd61d7998a0b13c2ccb85a41c440899_prof);

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
