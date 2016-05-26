<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_de3762a9184a6f8e3d4ce271c3b120bb608960d5b0edc9ea73d7d11346001ad4 extends Twig_Template
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
        $__internal_6d703b50beb108cf71c74609fa0d59fb087091f69f9218bbaaa46849259d4c47 = $this->env->getExtension("native_profiler");
        $__internal_6d703b50beb108cf71c74609fa0d59fb087091f69f9218bbaaa46849259d4c47->enter($__internal_6d703b50beb108cf71c74609fa0d59fb087091f69f9218bbaaa46849259d4c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6d703b50beb108cf71c74609fa0d59fb087091f69f9218bbaaa46849259d4c47->leave($__internal_6d703b50beb108cf71c74609fa0d59fb087091f69f9218bbaaa46849259d4c47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
