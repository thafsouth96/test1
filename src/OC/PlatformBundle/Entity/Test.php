<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Repository\TestRepository")
 */
class Test
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="test1", type="integer")
     */
    private $test1;

    /**
     * @ORM\Column(name="published", type="boolean")
     */
    private $published = true ; 


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set test1
     *
     * @param integer $test1
     *
     * @return Test
     */
    public function setTest1($test1)
    {
        $this->test1 = $test1;

        return $this;
    }

    /**
     * Get test1
     *
     * @return int
     */
    public function getTest1()
    {
        return $this->test1;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Test
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }
}
