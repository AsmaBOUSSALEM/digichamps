<?php

namespace Degi\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pointage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Pointage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_arr", type="time")
     */
    private $heureArr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_dep", type="time")
     */
    private $heureDep;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set heureArr
     *
     * @param \DateTime $heureArr
     * @return Pointage
     */
    public function setHeureArr($heureArr)
    {
        $this->heureArr = $heureArr;

        return $this;
    }

    /**
     * Get heureArr
     *
     * @return \DateTime 
     */
    public function getHeureArr()
    {
        return $this->heureArr;
    }

    /**
     * Set heureDep
     *
     * @param \DateTime $heureDep
     * @return Pointage
     */
    public function setHeureDep($heureDep)
    {
        $this->heureDep = $heureDep;

        return $this;
    }

    /**
     * Get heureDep
     *
     * @return \DateTime 
     */
    public function getHeureDep()
    {
        return $this->heureDep;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Pointage
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
