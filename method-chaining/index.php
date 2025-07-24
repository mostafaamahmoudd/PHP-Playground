<?php
class Signup
{
    private $filename;
    private $data;

    /**
     * @param $filename
     * @param $data
     */
    public function __construct(string $filename, array $data)
    {
        $this->filename = $filename;
        $this->data = $data;
    }


    public function sanitize(array $data): Signup
    {
        foreach ($this->data as $key => $value) {
            $this->data[$key] = addslashes($value);
        }

        return $this;
    }

    public function create(): Signup
    {
        if (! file_exists($this->filename)) {
            file_put_contents($this->filename, "");
        }

        return $this;
    }

    public function save(): void
    {
        $oldData = file_get_contents($this->filename);
        $old = json_decode($oldData);

        $old[] = $this->data;

        $str = json_encode($old);
        file_put_contents($this->filename, $str);
    }

    public function read()
    {
        return file_get_contents($this->filename);
    }
}

if (count($_POST) > 0) {
    $signup = new Signup('file.json', $_POST);
    $signup->sanitize($_POST)->create()->save();

    $result = $signup->read();
    print_r($result);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Signup</title>
</head>
<body>
<form method="post">
    <input name="name" placeholder="name" type="text"><br>
    <input name="password" placeholder="password" type="text"><br>
    <input type="submit" value="signup"><br>
</form>
</body>
</html>