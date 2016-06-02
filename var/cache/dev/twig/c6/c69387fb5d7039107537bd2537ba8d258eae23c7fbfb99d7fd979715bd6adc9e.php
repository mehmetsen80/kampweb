<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dd830645f71324f88b43cf6cabe738ce8f814076abc97ae9190fe72295822a34 extends Twig_Template
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
        $__internal_da02b6bfb05ca9ee8bf9939e646aea5140970f50fe8b9842fa56a0f48ae7b3fa = $this->env->getExtension("native_profiler");
        $__internal_da02b6bfb05ca9ee8bf9939e646aea5140970f50fe8b9842fa56a0f48ae7b3fa->enter($__internal_da02b6bfb05ca9ee8bf9939e646aea5140970f50fe8b9842fa56a0f48ae7b3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_da02b6bfb05ca9ee8bf9939e646aea5140970f50fe8b9842fa56a0f48ae7b3fa->leave($__internal_da02b6bfb05ca9ee8bf9939e646aea5140970f50fe8b9842fa56a0f48ae7b3fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
