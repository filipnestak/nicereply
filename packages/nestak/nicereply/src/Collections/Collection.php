<?php

namespace Nestak\NiceReply\Collections;

use Nestak\NiceReply\Models\Model;

/**
 *
 */
abstract class Collection implements \Countable
{
    /**
     * @var string
     */
    protected string $collectionName = '_results';
    /**
     * @var array
     */
    protected array $items = [];
    /**
     * @var string
     */
    protected string $mainModel;

    /**
     * @param Model $item
     */
    public function setItem(Model $item)
    {
        $this->items[] = $item;
    }

    /**
     * @return array
     */
    public function get(): array
    {
        return $this->items;
    }

    /**
     * @return mixed
     */
    public function first()
    {
        return $this->items[0];
    }

    /**
     * @return string
     */
    public function getCollectionName()
    {
        return $this->collectionName;
    }

    /**
     * @return string
     */
    public function getMainModel()
    {
        return $this->mainModel;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->items);
    }

    /**
     * @param $data
     * @return $this
     */
    public function map($data): Collection
    {
        if (isset($data->{$this->getCollectionName()})) {
            $items = $data->{$this->getCollectionName()};
            $modelName = $this->getMainModel();
            if (isset($items) && is_array($items)) {
                foreach ($items as $item) {
                    $model = new $modelName();
                    $this->setItem($model->map($item));
                }
            } else {
                $model = new $modelName();
                $this->setItem($model->map($items));
            }
        }
        return $this;
    }
}
