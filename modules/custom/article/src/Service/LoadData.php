<?php

/**
 * Class LoadData
 * @package Drupal\article\Service
 */

namespace Drupal\article\Service;
use Drupal\Core\Database\Connection;

class LoadData
{

    protected $database;

    /**
     * Constructs a new LoadData object.
     * @param \Drupal\Core\Database\Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->database = $connection;
    }

    public function getData()
    {
        // $entity =\Drupal::entityTypeManager()->getStorage('node');
        // $query = $entity ->getQuery();
        // $ids =$query->condition('type', 'article')
        // ->condition('status', '1')
        // // ->sort('title', 'ASC')
        // ->sort('created', 'DESC')
        // ->execute();

        $query = $this->database->select('node_field_data', 'n')
            ->fields('n', ['nid', 'title', 'created'])
            ->range(0, 5)
            ->condition('n.type', 'article')
            ->condition('status', 1) //Published.
            ->orderBy('title', 'ASC')
            ->orderBy('created', 'DESC'); //Most recent first.
        $result = $query->execute()->fetchAll();
        // $articles = $entity -> loadMultiple($ids);
        return $result;
        
    }
}
