<?php

namespace App\Traits;

trait Filter
{
    private $params;

    public function __construct()
    {
        $this->params = $this->getParams();
    }

    public function scopeFilter($query, $data)
    {
        $attribute = 'filter';
        if ($this->is_data($data, $attribute)) {
            foreach ($data[$attribute] as $keys => $values) {
                $key = $this->getKeyIsArray($values);
                $value = $this->getValueIsArray($values);
                if ($this->is_key_value($key, $value)) {
                        $query->where($key, $value);
                }
            }
            return $query;
        }
        else {
            return $query;
        }
    }

    public function scopeSearch($query, $data)
    {
        $attribute = 'query';
        if ($this->is_data($data, $attribute)) {
            $text = $data[$attribute];
            return $query->where(function ($query) use ($text) {
                foreach ($this->getParams() as $key => $param) {
                    $query->orwhere($param, 'like', "%$text%");
                }
            });
        }
        return $query;
    }

    public function scopeSort($query, $data)
    {
        $attribute = 'sort';
        $sort = 'created_at';
        $order = 'desc';

        if ($this->is_data($data, $attribute)) {
            foreach ($data[$attribute] as $keys => $values) {
                $key = $this->getKeyIsArray($values);
                $value = $this->getValueIsArray($values);
                if (isset($key)) {
                    if (in_array($key, $this->params, true)) {
                        $sort = $key;
                        if (isset($value)) {
                            $order = $value;
                        }
                        $query->orderBy($sort, $order);
                    }
                }
            }
            return $query;
        }
    }

    public function is_data($data, $attribute)
    {
        if ($data) {
            if (isset($data[$attribute])) {
                return true;
            }
        }
        return false;
    }

    public function is_key_value($key, $value)
    {
        if (isset($key) && isset($value)) {
            if (in_array($key, $this->params, true)) {
                return true;
            }
        }
        return false;
    }

    public function getKeyIsArray($values)
    {
        return implode(array_keys($values));
    }

    public function getValueIsArray($values)
    {
        return implode(array_values($values));
    }

    abstract public function getParams();
}
