<?php
namespace Pattern\Builder;

class Director
{
    /** @var Builder **/
    private $builder;

    /**
     * Constructor
     *
     * @param Builder $builder
     * @access public
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * construct
     *
     * @access public
     * @return void
     */
    public function construct()
    {
        $this->builder->makeTitle('Greeting');
        $this->builder->makeString('朝から昼にかけて');
        $this->builder->makeItems([
            'おはようございます',
            'こんにちは',
        ]);
        $this->builder->makeString('夜に');
        $this->builder->makeItems([
            'こんばんわ',
            'おやすみなさい',
            'さようなら',
        ]);
        $this->builder->close();
    } // End function construct
}
