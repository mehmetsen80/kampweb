<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3102d19626b123d4f11a457810b7c336dccd99b65fb890d178cfdf782cc429b7 extends Twig_Template
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
        $__internal_68f8591162cb6396fd11366d1a9f1a8dd46c3d48fff9c0fc5b9696390c1afa13 = $this->env->getExtension("native_profiler");
        $__internal_68f8591162cb6396fd11366d1a9f1a8dd46c3d48fff9c0fc5b9696390c1afa13->enter($__internal_68f8591162cb6396fd11366d1a9f1a8dd46c3d48fff9c0fc5b9696390c1afa13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_68f8591162cb6396fd11366d1a9f1a8dd46c3d48fff9c0fc5b9696390c1afa13->leave($__internal_68f8591162cb6396fd11366d1a9f1a8dd46c3d48fff9c0fc5b9696390c1afa13_prof);

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
