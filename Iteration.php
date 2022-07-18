<?php

class Iteration implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    protected string $third = "Third";
    private string $fourth = "Fourth";

    // Otomatis dijalankan
    public function getIterator(): Traversable
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "fourth" => $this->fourth,
        ];

        return new ArrayIterator($array);

        // yield "first" => $this->first;
        // yield "second" => $this->second;
        // yield "third" => $this->third;
        // yield "fourth" => $this->fourth;
    }
}

$data = new Iteration();

foreach ($data as $properties => $value) {
    echo "$properties : $value" . PHP_EOL;
}


// Yield
function getGanjil(int $max): Iterator
{
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

$ganjil = getGanjil(10);
foreach ($ganjil as $value) {
    echo "Ganjil = $value" . PHP_EOL;
}
