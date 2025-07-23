<?php

class Signup
{
    private $filename;
    private $data;

    /**
     * @param $filename
     * @param $data
     */
    public function __construct($filename, $data)
    {
        $this->filename = $filename;
        $this->data = $data;
    }


    public function sanitize()
    {
        foreach ($this->data as $key => $value) {
            $this->data[$key] = addslashes($value);
        }

        return $this->data;
    }

    public function create()
    {
        if (! file_exists($this->filename)) {
            file_put_contents($this->filename, "");
        }
    }

    public function save()
    {
        $oldData = file_get_contents($this->filename);
        $old = json_decode($oldData);

        $old[] = $this->data;

        $str = json_encode($old);
        file_put_contents($this->filename, $str);
    }

    public function read()
    {

    }
}

if (count($_POST) > 0) {
    $signup = new Signup('file.json', '');
    $signup->sanitize($_POST)->create()->save();
}