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
        $__internal_057332ecdafd5a1907482174358425fd0022584c1dffd84218756e9fbb09fd85 = $this->env->getExtension("native_profiler");
        $__internal_057332ecdafd5a1907482174358425fd0022584c1dffd84218756e9fbb09fd85->enter($__internal_057332ecdafd5a1907482174358425fd0022584c1dffd84218756e9fbb09fd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_057332ecdafd5a1907482174358425fd0022584c1dffd84218756e9fbb09fd85->leave($__internal_057332ecdafd5a1907482174358425fd0022584c1dffd84218756e9fbb09fd85_prof);

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
