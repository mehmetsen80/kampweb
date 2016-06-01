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
        $__internal_1cc89f1e032ae857ad35b22005766bf6e70b93ebbd8fabeae0e16f2c382ebb46 = $this->env->getExtension("native_profiler");
        $__internal_1cc89f1e032ae857ad35b22005766bf6e70b93ebbd8fabeae0e16f2c382ebb46->enter($__internal_1cc89f1e032ae857ad35b22005766bf6e70b93ebbd8fabeae0e16f2c382ebb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1cc89f1e032ae857ad35b22005766bf6e70b93ebbd8fabeae0e16f2c382ebb46->leave($__internal_1cc89f1e032ae857ad35b22005766bf6e70b93ebbd8fabeae0e16f2c382ebb46_prof);

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
