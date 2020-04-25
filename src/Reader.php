<?php

class Reader {

    public function read($path)
    {
        if (is_dir($path))
        {
            return $this->readPath($path);
        } elseif (is_file($path)) {
            $this->readFile($path);
        } else {
            echo "Not File or Path";
        }
    }

    protected function readPath($path)
    {
        $list = dir($path);
        return $list;
    }
}