<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_54799df535f72cc8f929ddc2e02d83f304e7cd3dd79302d3d6ff4c44decd4aaf extends Twig_Template
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
        $__internal_870fe6d7c49481a5ca26982a13d15921085e1aac9cb3bec3eec5df7b5ec6e638 = $this->env->getExtension("native_profiler");
        $__internal_870fe6d7c49481a5ca26982a13d15921085e1aac9cb3bec3eec5df7b5ec6e638->enter($__internal_870fe6d7c49481a5ca26982a13d15921085e1aac9cb3bec3eec5df7b5ec6e638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_870fe6d7c49481a5ca26982a13d15921085e1aac9cb3bec3eec5df7b5ec6e638->leave($__internal_870fe6d7c49481a5ca26982a13d15921085e1aac9cb3bec3eec5df7b5ec6e638_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
