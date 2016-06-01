<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7b9d46ae1cdc3d7ae606693eecc8ab7e8282f45751184a9d33608e9fbef9058c extends Twig_Template
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
        $__internal_70cce29667b5f5d6c236230fc16375a43182cf4d5dc8adce4f5416578e679624 = $this->env->getExtension("native_profiler");
        $__internal_70cce29667b5f5d6c236230fc16375a43182cf4d5dc8adce4f5416578e679624->enter($__internal_70cce29667b5f5d6c236230fc16375a43182cf4d5dc8adce4f5416578e679624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_70cce29667b5f5d6c236230fc16375a43182cf4d5dc8adce4f5416578e679624->leave($__internal_70cce29667b5f5d6c236230fc16375a43182cf4d5dc8adce4f5416578e679624_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
