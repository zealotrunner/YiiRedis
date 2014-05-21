<?php

class ARedisString extends ARedisEntity {

    public function get() {
        if ($this->name === null) {
            throw new CException("No name specified for ".get_class($this));
        }

        return $this->getConnection()->getClient()->get($this->name);
    }

    public function set($value) {
        if ($this->name === null) {
            throw new CException("No name specified for ".get_class($this));
        }

        return $this->getConnection()->getClient()->set($this->name, $value);
    }

    public function delete() {
        if ($this->name === null) {
            throw new CException(get_class($this)." requires a name!");
        }

        return $this->getConnection()->getClient()->delete($this->name);
    }

}