<?php

class Shape
{
    /**
     * @var array
     */
    private array $shapeNames;

    /**
     * @throws Exception
     */
    public function __construct(string...$shapeNames)
    {
        $this->setShapeNames(...$shapeNames);
    }

    /**
     * @return array
     */
    public function getShapeNames(): array
    {
        return $this->shapeNames;
    }

    /**
     * @param string ...$shapeNames
     * @throws Exception
     */
    private function setShapeNames(string ...$shapeNames)
    {
        foreach ($shapeNames as $shapeName) {
            if (!is_string($shapeName)) {
                throw new Exception('The shape should be of a string type, please write it correctly! You have used a ' . gettype($shapeName) . ' type');
            }
            $this->shapeNames[] = strtolower($shapeName);
        }
    }

    /**
     * @return void
     */
    public function getCornersCount(): void
    {
        foreach ($this->getShapeNames() as $shapeName) {
            $corners = $this->getNumberOfCorners($shapeName);
            if ($corners !== null) {
                echo "{$shapeName} - $corners\n";
            } else {
                echo "{$shapeName} - not defined\n";
            }
        }
    }

    /**
     * @param string $shapeName
     * @return int|null
     */
    private function getNumberofCorners(string $shapeName): ?int
    {
        switch ($shapeName) {
            case ('rectangle'):
            case('square'):
                return 4;
            case('circle'):
                return 0;
            case('triangle'):
                return 3;
            default:
                return null;
        }
    }
}

try {
    $shape = new Shape('circle', 'square', 'oval');
    $shape->getCornersCount();
} catch (Exception $exception) {
    echo $exception->getMessage();
}

?>