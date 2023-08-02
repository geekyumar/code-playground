<?php

class miniDatabase
{
    public function __construct()
    {
        echo "Object has been initialized";
    }

    public function get($key)
    {
        if (isset($this->$key)) {
            return $this->$key."\n";
        } else {
            return "No values found with key `$key`\n";
        }
    }

    public function set($key, $value)
    {
        if ($this->$key = $value) {
            return "Value `$value` has been set for key `$key`\n";
        } else {
            return "Error setting key-value pairs\n";
        }
    }

    public function delete($key)
    {
        if (isset($this->$key)) {
            unset($this->$key);
            return "Key value `$key` has been deleted\n";
        } else {
            return "No keys named `$key`\n";
        }
    }
}