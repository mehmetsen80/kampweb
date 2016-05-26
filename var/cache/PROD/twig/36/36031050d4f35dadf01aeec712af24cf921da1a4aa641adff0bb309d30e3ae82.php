<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f9f3f659a8e256116b452c0844988caf3c2a6fb9588d5fe264f733270bfdeb59 extends Twig_Template
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
        $__internal_6c99129b1c79c984f191d7cce0cbaeb8395fcec210b13c20e89cfb5ffd070e60 = $this->env->getExtension("native_profiler");
        $__internal_6c99129b1c79c984f191d7cce0cbaeb8395fcec210b13c20e89cfb5ffd070e60->enter($__internal_6c99129b1c79c984f191d7cce0cbaeb8395fcec210b13c20e89cfb5ffd070e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6c99129b1c79c984f191d7cce0cbaeb8395fcec210b13c20e89cfb5ffd070e60->leave($__internal_6c99129b1c79c984f191d7cce0cbaeb8395fcec210b13c20e89cfb5ffd070e60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
