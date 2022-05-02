<?php

namespace Drupal\article\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 *
 * Provides a 'article' block.
 *
 * @Block(
 *  id="article_block",
 *  admin_label = @Translation("Article Block"),
 *  category = @Translation("Custom article block")
 * )
 */

class ArticleBlock extends BlockBase
{
    protected $loaddata;

    public function __construct()
    {
        $this->loaddata = \Drupal::service('article.data_handler');
    }

    public function build()
    {
        $result =  $this->loaddata->getData();
        print_r($result);
        return [
            '#theme' => 'article',
            '#data' => $result,
        ];
    }
}
