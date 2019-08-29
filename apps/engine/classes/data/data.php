<?php

namespace engine\data;

class data
{
    protected $data;

    public function set(string $key, $val)
    {
        $this->data[$key] = $val;
    }

    public function setArray(array $data)
    {
        foreach ($data as $k => $v) {
            $this->set($k, $v);
        }
    }

    /**
     * @param string $key
     *
     * @return mixed|null
     */
    public function get(string $key)
    {
        return $this->data[$key] ?? null;
    }

    public function getAll()
    {
        return $this->data;
    }
}