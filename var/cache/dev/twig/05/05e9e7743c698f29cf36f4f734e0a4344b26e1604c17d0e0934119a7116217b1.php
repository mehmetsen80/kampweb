<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9fd1185e5de6fa52eb7d1df9cec589d4ef4768cb11ffda3226c4b8aa7918a225 extends Twig_Template
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
        $__internal_a864654853e934850a86db797941da5cea24cfe04aaa42a563eaa23587ed334b = $this->env->getExtension("native_profiler");
        $__internal_a864654853e934850a86db797941da5cea24cfe04aaa42a563eaa23587ed334b->enter($__internal_a864654853e934850a86db797941da5cea24cfe04aaa42a563eaa23587ed334b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a864654853e934850a86db797941da5cea24cfe04aaa42a563eaa23587ed334b->leave($__internal_a864654853e934850a86db797941da5cea24cfe04aaa42a563eaa23587ed334b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
