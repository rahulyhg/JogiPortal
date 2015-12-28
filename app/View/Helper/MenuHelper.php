<?php

/**
 * Menu Helper class file.
 *
 * Use regular ereg expressions in the pattern matching to be highlight a list item based on path.
 */
App::uses('Helper', 'View');

class MenuHelper extends Helper {

    var $helpers = array('Html');

    /**
     * Creates a formatted LI element.
     *
     * ### Usage
     *
     * `echo $menu->item($html->link('Example Link', array('controller' => 'Examples', 'action' => 'view', 3)), '/examples/*', array('class' => 'myListClass'));`
     *
     * @param string $link Formatted link, if $link is not an anchor, parsed with the HtmlHelper::link() method.
     * @param string $regex Regular ereg expression.
     * @param array $attributes The options to use.
     * @return string An `<li><a /></li>` element.
     */
    function item($link, $regex = null, $attributes = array()) {
        // Highlight class to be returned, default selected
        $activeClass = 'active';

        if (!ereg('^<a', $link)) {
            $link = $this->Html->link($link);
        }

        if (!isset($regex)) {
            $regex = '^/$';
        }

        $currentPath = substr($this->Html->here, strlen($this->Html->base));

        if (ereg($regex, $currentPath)) {
//            echo "<pre>";print_r($attributes);exit;
            $attributes = array_merge_recursive($attributes, array('class' => $activeClass));
            if (is_array($attributes)) {
//                echo "<pre>";print_r($attributes);exit;
                $attributes = implode(' ', $attributes['class']);
                $attributes = 'class="' . $attributes . '"';
//                echo $link;                exit;
                
            }
        }
        return $this->Html->tag('li', $link, $attributes);
    }

}

?>