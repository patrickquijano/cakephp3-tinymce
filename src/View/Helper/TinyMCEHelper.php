<?php

namespace TinyMCE\View\Helper;

use Cake\Core\Configure;
use Cake\View\Helper;

/**
 * @property \Cake\View\Helper\HtmlHelper $Html
 */
class TinyMCEHelper extends Helper {

    /**
     * @var array
     */
    protected $_defaultConfig = [
        'script' => [
            'url' => 'https://cdn.jsdelivr.net/npm/tinymce@5.2.2/tinymce.min.js',
            'integrity' => 'sha256-MYEJOVodtWOmhHp5ueLNwfCwBBGKWJWUucfLvXzdles=',
        ],
    ];

    /**
     * @var array
     */
    public $helpers = ['Html'];

    /**
     * @param array $options
     * @return string|null
     */
    public function script(array $options = []) {
        if (!isset($options['block'])) {
            $options['block'] = false;
        }
        $options['once'] = true;
        if (Configure::read('debug')) {
            return $this->Html->script('TinyMCE.tinymce.min', $options);
        } else {
            $options['integrity'] = $this->getConfig('script.integrity');
            $options['crossorigin'] = 'anonymous';
            return $this->Html->script($this->getConfig('script.url'), $options);
        }
    }

}
