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
        $__internal_962b3a4954c6c79a481d148152e65f77e31f6893e4ea37ce544bf6568eb4d9e5 = $this->env->getExtension("native_profiler");
        $__internal_962b3a4954c6c79a481d148152e65f77e31f6893e4ea37ce544bf6568eb4d9e5->enter($__internal_962b3a4954c6c79a481d148152e65f77e31f6893e4ea37ce544bf6568eb4d9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_962b3a4954c6c79a481d148152e65f77e31f6893e4ea37ce544bf6568eb4d9e5->leave($__internal_962b3a4954c6c79a481d148152e65f77e31f6893e4ea37ce544bf6568eb4d9e5_prof);

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
