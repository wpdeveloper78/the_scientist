<?php
/**
 * Created by PhpStorm.
 * User: davideentratici
 * Date: 29/11/18
 * Time: 15:17
 */

namespace LaravelDay\Article\Artcle;


final class Artcle
{
    /** @var int  */
    private $id;

    /** @var string  */
    private $title;
    /**
     * @var string
     */
    private $body;
    /**
     * @var \DateTime
     */
    private $creationDate;

    public function __construct(int $id, string $title, string $body, \DateTime $creationDate){

        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->creationDate = $creationDate;

    }

    public function getTitle():string{

    }

}