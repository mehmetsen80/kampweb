<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a02bc2c3a0e5ff721a257f8841b65ee2604e465a519d45b77ebcfb477a31581b extends Twig_Template
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
        $__internal_eaf18e3828c9ab9512d3eeb763ea51f27983dd340a4756abd2857728bb58a76e = $this->env->getExtension("native_profiler");
        $__internal_eaf18e3828c9ab9512d3eeb763ea51f27983dd340a4756abd2857728bb58a76e->enter($__internal_eaf18e3828c9ab9512d3eeb763ea51f27983dd340a4756abd2857728bb58a76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_eaf18e3828c9ab9512d3eeb763ea51f27983dd340a4756abd2857728bb58a76e->leave($__internal_eaf18e3828c9ab9512d3eeb763ea51f27983dd340a4756abd2857728bb58a76e_prof);

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
