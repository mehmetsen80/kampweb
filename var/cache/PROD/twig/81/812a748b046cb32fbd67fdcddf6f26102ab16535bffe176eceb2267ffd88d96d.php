<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d763ec282c84bf2cd87e1ab3a1c6e9c386e24188ec5a1a0c6c36c48bd7dc3eeb extends Twig_Template
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
        $__internal_cac5c1c0b2277ed9f4025eab6f5d6201e17690d1dd178573807e339a7a60becb = $this->env->getExtension("native_profiler");
        $__internal_cac5c1c0b2277ed9f4025eab6f5d6201e17690d1dd178573807e339a7a60becb->enter($__internal_cac5c1c0b2277ed9f4025eab6f5d6201e17690d1dd178573807e339a7a60becb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cac5c1c0b2277ed9f4025eab6f5d6201e17690d1dd178573807e339a7a60becb->leave($__internal_cac5c1c0b2277ed9f4025eab6f5d6201e17690d1dd178573807e339a7a60becb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
