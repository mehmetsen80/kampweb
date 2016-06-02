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
        $__internal_a50384a45b64a40c9197cf98294868db6f5ba837721fc1f7c0194a7d8d8ad35b = $this->env->getExtension("native_profiler");
        $__internal_a50384a45b64a40c9197cf98294868db6f5ba837721fc1f7c0194a7d8d8ad35b->enter($__internal_a50384a45b64a40c9197cf98294868db6f5ba837721fc1f7c0194a7d8d8ad35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a50384a45b64a40c9197cf98294868db6f5ba837721fc1f7c0194a7d8d8ad35b->leave($__internal_a50384a45b64a40c9197cf98294868db6f5ba837721fc1f7c0194a7d8d8ad35b_prof);

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
