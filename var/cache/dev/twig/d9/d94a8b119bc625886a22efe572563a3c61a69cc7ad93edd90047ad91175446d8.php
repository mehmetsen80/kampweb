<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9d0a2c1e8fdea2de55fb8b458699c13d0ace48d47ac57f3703585ad70bf2255e extends Twig_Template
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
        $__internal_3ca89ce6c6994c5ab5b6d6f74392a480bd66d8d3a87a9636a4b470ef881a09b7 = $this->env->getExtension("native_profiler");
        $__internal_3ca89ce6c6994c5ab5b6d6f74392a480bd66d8d3a87a9636a4b470ef881a09b7->enter($__internal_3ca89ce6c6994c5ab5b6d6f74392a480bd66d8d3a87a9636a4b470ef881a09b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3ca89ce6c6994c5ab5b6d6f74392a480bd66d8d3a87a9636a4b470ef881a09b7->leave($__internal_3ca89ce6c6994c5ab5b6d6f74392a480bd66d8d3a87a9636a4b470ef881a09b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
