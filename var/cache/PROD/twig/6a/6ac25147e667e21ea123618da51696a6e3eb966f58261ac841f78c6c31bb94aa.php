<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_63b5528feb0eb4d22f2edbac2f72f8972401689ed5a3aa4da02838e4bd0b31b1 extends Twig_Template
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
        $__internal_6c57fa2082158988073947085e65c5311b45edbdf49af418474246d86041a83f = $this->env->getExtension("native_profiler");
        $__internal_6c57fa2082158988073947085e65c5311b45edbdf49af418474246d86041a83f->enter($__internal_6c57fa2082158988073947085e65c5311b45edbdf49af418474246d86041a83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6c57fa2082158988073947085e65c5311b45edbdf49af418474246d86041a83f->leave($__internal_6c57fa2082158988073947085e65c5311b45edbdf49af418474246d86041a83f_prof);

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
