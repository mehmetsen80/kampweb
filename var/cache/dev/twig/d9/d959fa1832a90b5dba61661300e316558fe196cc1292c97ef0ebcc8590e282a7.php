<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_32ee04ee4592e6f8f81a6be861a87916545d7a8c092327cf068fee87a7a1c615 extends Twig_Template
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
        $__internal_ead287e4c44f350ad7ddbe24b3451f0e0102cf5fb18274ea9407af2fac4f8b46 = $this->env->getExtension("native_profiler");
        $__internal_ead287e4c44f350ad7ddbe24b3451f0e0102cf5fb18274ea9407af2fac4f8b46->enter($__internal_ead287e4c44f350ad7ddbe24b3451f0e0102cf5fb18274ea9407af2fac4f8b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ead287e4c44f350ad7ddbe24b3451f0e0102cf5fb18274ea9407af2fac4f8b46->leave($__internal_ead287e4c44f350ad7ddbe24b3451f0e0102cf5fb18274ea9407af2fac4f8b46_prof);

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
