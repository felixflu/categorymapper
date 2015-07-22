<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * Oxcategories
 */
class Oxcategories
{

    /**
     * @var string
     */
    private $oxid;

    /**
     * @var string
     */
    private $oxparentid;

    /**
     * @var integer
     */
    private $oxleft;

    /**
     * @var integer
     */
    private $oxright;

    /**
     * @var string
     */
    private $oxrootid;

    /**
     * @var integer
     */
    private $oxsort;

    /**
     * @var boolean
     */
    private $oxactive;

    /**
     * @var boolean
     */
    private $oxhidden;

    /**
     * @var string
     */
    private $oxshopid;

    /**
     * @var string
     */
    private $oxtitle;

    /**
     * @var string
     */
    private $oxdesc;

    /**
     * @var string
     */
    private $oxlongdesc;

    /**
     * @var string
     */
    private $oxthumb;

    /**
     * @var string
     */
    private $oxthumb1;

    /**
     * @var string
     */
    private $oxthumb2;

    /**
     * @var string
     */
    private $oxthumb3;

    /**
     * @var string
     */
    private $oxextlink;

    /**
     * @var string
     */
    private $oxtemplate;

    /**
     * @var string
     */
    private $oxdefsort;

    /**
     * @var boolean
     */
    private $oxdefsortmode;

    /**
     * @var float
     */
    private $oxpricefrom;

    /**
     * @var float
     */
    private $oxpriceto;

    /**
     * @var boolean
     */
    private $oxactive1;

    /**
     * @var string
     */
    private $oxtitle1;

    /**
     * @var string
     */
    private $oxdesc1;

    /**
     * @var string
     */
    private $oxlongdesc1;

    /**
     * @var boolean
     */
    private $oxactive2;

    /**
     * @var string
     */
    private $oxtitle2;

    /**
     * @var string
     */
    private $oxdesc2;

    /**
     * @var string
     */
    private $oxlongdesc2;

    /**
     * @var boolean
     */
    private $oxactive3;

    /**
     * @var string
     */
    private $oxtitle3;

    /**
     * @var string
     */
    private $oxdesc3;

    /**
     * @var string
     */
    private $oxlongdesc3;

    /**
     * @var string
     */
    private $oxicon;

    /**
     * @var string
     */
    private $oxpromoicon;

    /**
     * @var float
     */
    private $oxvat;

    /**
     * @var boolean
     */
    private $oxskipdiscounts;

    /**
     * @var boolean
     */
    private $oxshowsuffix;

    /**
     * @var \DateTime
     */
    private $oxtimestamp;

    /**
     * Get oxid
     *
     * @return string
     */
    public function getOxid()
    {
        return $this->oxid;
    }

    /**
     * Set oxid
     *
     * @param string $oxId The id.
     *
     * @return Oxcategories
     */
    public function setOxid($oxId)
    {
        $this->oxid = $oxId;

        return $this;
    }

    /**
     * Set oxparentid
     *
     * @param string $oxparentid
     *
     * @return Oxcategories
     */
    public function setOxparentid($oxparentid)
    {
        $this->oxparentid = $oxparentid;

        return $this;
    }

    /**
     * Get oxparentid
     *
     * @return string
     */
    public function getOxparentid()
    {
        return $this->oxparentid;
    }

    /**
     * Set oxleft
     *
     * @param integer $oxleft
     *
     * @return Oxcategories
     */
    public function setOxleft($oxleft)
    {
        $this->oxleft = $oxleft;

        return $this;
    }

    /**
     * Get oxleft
     *
     * @return integer
     */
    public function getOxleft()
    {
        return $this->oxleft;
    }

    /**
     * Set oxright
     *
     * @param integer $oxright
     *
     * @return Oxcategories
     */
    public function setOxright($oxright)
    {
        $this->oxright = $oxright;

        return $this;
    }

    /**
     * Get oxright
     *
     * @return integer
     */
    public function getOxright()
    {
        return $this->oxright;
    }

    /**
     * Set oxrootid
     *
     * @param string $oxrootid
     *
     * @return Oxcategories
     */
    public function setOxrootid($oxrootid)
    {
        $this->oxrootid = $oxrootid;

        return $this;
    }

    /**
     * Get oxrootid
     *
     * @return string
     */
    public function getOxrootid()
    {
        return $this->oxrootid;
    }

    /**
     * Set oxsort
     *
     * @param integer $oxsort
     *
     * @return Oxcategories
     */
    public function setOxsort($oxsort)
    {
        $this->oxsort = $oxsort;

        return $this;
    }

    /**
     * Get oxsort
     *
     * @return integer
     */
    public function getOxsort()
    {
        return $this->oxsort;
    }

    /**
     * Set oxactive
     *
     * @param boolean $oxactive
     *
     * @return Oxcategories
     */
    public function setOxactive($oxactive)
    {
        $this->oxactive = $oxactive;

        return $this;
    }

    /**
     * Get oxactive
     *
     * @return boolean
     */
    public function getOxactive()
    {
        return $this->oxactive;
    }

    /**
     * Set oxhidden
     *
     * @param boolean $oxhidden
     *
     * @return Oxcategories
     */
    public function setOxhidden($oxhidden)
    {
        $this->oxhidden = $oxhidden;

        return $this;
    }

    /**
     * Get oxhidden
     *
     * @return boolean
     */
    public function getOxhidden()
    {
        return $this->oxhidden;
    }

    /**
     * Set oxshopid
     *
     * @param string $oxshopid
     *
     * @return Oxcategories
     */
    public function setOxshopid($oxshopid)
    {
        $this->oxshopid = $oxshopid;

        return $this;
    }

    /**
     * Get oxshopid
     *
     * @return string
     */
    public function getOxshopid()
    {
        return $this->oxshopid;
    }

    /**
     * Set oxtitle
     *
     * @param string $oxtitle
     *
     * @return Oxcategories
     */
    public function setOxtitle($oxtitle)
    {
        $this->oxtitle = $oxtitle;

        return $this;
    }

    /**
     * Get oxtitle
     *
     * @return string
     */
    public function getOxtitle()
    {
        return $this->oxtitle;
    }

    /**
     * Set oxdesc
     *
     * @param string $oxdesc
     *
     * @return Oxcategories
     */
    public function setOxdesc($oxdesc)
    {
        $this->oxdesc = $oxdesc;

        return $this;
    }

    /**
     * Get oxdesc
     *
     * @return string
     */
    public function getOxdesc()
    {
        return $this->oxdesc;
    }

    /**
     * Set oxlongdesc
     *
     * @param string $oxlongdesc
     *
     * @return Oxcategories
     */
    public function setOxlongdesc($oxlongdesc)
    {
        $this->oxlongdesc = $oxlongdesc;

        return $this;
    }

    /**
     * Get oxlongdesc
     *
     * @return string
     */
    public function getOxlongdesc()
    {
        return $this->oxlongdesc;
    }

    /**
     * Set oxthumb
     *
     * @param string $oxthumb
     *
     * @return Oxcategories
     */
    public function setOxthumb($oxthumb)
    {
        $this->oxthumb = $oxthumb;

        return $this;
    }

    /**
     * Get oxthumb
     *
     * @return string
     */
    public function getOxthumb()
    {
        return $this->oxthumb;
    }

    /**
     * Set oxthumb1
     *
     * @param string $oxthumb1
     *
     * @return Oxcategories
     */
    public function setOxthumb1($oxthumb1)
    {
        $this->oxthumb1 = $oxthumb1;

        return $this;
    }

    /**
     * Get oxthumb1
     *
     * @return string
     */
    public function getOxthumb1()
    {
        return $this->oxthumb1;
    }

    /**
     * Set oxthumb2
     *
     * @param string $oxthumb2
     *
     * @return Oxcategories
     */
    public function setOxthumb2($oxthumb2)
    {
        $this->oxthumb2 = $oxthumb2;

        return $this;
    }

    /**
     * Get oxthumb2
     *
     * @return string
     */
    public function getOxthumb2()
    {
        return $this->oxthumb2;
    }

    /**
     * Set oxthumb3
     *
     * @param string $oxthumb3
     *
     * @return Oxcategories
     */
    public function setOxthumb3($oxthumb3)
    {
        $this->oxthumb3 = $oxthumb3;

        return $this;
    }

    /**
     * Get oxthumb3
     *
     * @return string
     */
    public function getOxthumb3()
    {
        return $this->oxthumb3;
    }

    /**
     * Set oxextlink
     *
     * @param string $oxextlink
     *
     * @return Oxcategories
     */
    public function setOxextlink($oxextlink)
    {
        $this->oxextlink = $oxextlink;

        return $this;
    }

    /**
     * Get oxextlink
     *
     * @return string
     */
    public function getOxextlink()
    {
        return $this->oxextlink;
    }

    /**
     * Set oxtemplate
     *
     * @param string $oxtemplate
     *
     * @return Oxcategories
     */
    public function setOxtemplate($oxtemplate)
    {
        $this->oxtemplate = $oxtemplate;

        return $this;
    }

    /**
     * Get oxtemplate
     *
     * @return string
     */
    public function getOxtemplate()
    {
        return $this->oxtemplate;
    }

    /**
     * Set oxdefsort
     *
     * @param string $oxdefsort
     *
     * @return Oxcategories
     */
    public function setOxdefsort($oxdefsort)
    {
        $this->oxdefsort = $oxdefsort;

        return $this;
    }

    /**
     * Get oxdefsort
     *
     * @return string
     */
    public function getOxdefsort()
    {
        return $this->oxdefsort;
    }

    /**
     * Set oxdefsortmode
     *
     * @param boolean $oxdefsortmode
     *
     * @return Oxcategories
     */
    public function setOxdefsortmode($oxdefsortmode)
    {
        $this->oxdefsortmode = $oxdefsortmode;

        return $this;
    }

    /**
     * Get oxdefsortmode
     *
     * @return boolean
     */
    public function getOxdefsortmode()
    {
        return $this->oxdefsortmode;
    }

    /**
     * Set oxpricefrom
     *
     * @param float $oxpricefrom
     *
     * @return Oxcategories
     */
    public function setOxpricefrom($oxpricefrom)
    {
        $this->oxpricefrom = $oxpricefrom;

        return $this;
    }

    /**
     * Get oxpricefrom
     *
     * @return float
     */
    public function getOxpricefrom()
    {
        return $this->oxpricefrom;
    }

    /**
     * Set oxpriceto
     *
     * @param float $oxpriceto
     *
     * @return Oxcategories
     */
    public function setOxpriceto($oxpriceto)
    {
        $this->oxpriceto = $oxpriceto;

        return $this;
    }

    /**
     * Get oxpriceto
     *
     * @return float
     */
    public function getOxpriceto()
    {
        return $this->oxpriceto;
    }

    /**
     * Set oxactive1
     *
     * @param boolean $oxactive1
     *
     * @return Oxcategories
     */
    public function setOxactive1($oxactive1)
    {
        $this->oxactive1 = $oxactive1;

        return $this;
    }

    /**
     * Get oxactive1
     *
     * @return boolean
     */
    public function getOxactive1()
    {
        return $this->oxactive1;
    }

    /**
     * Set oxtitle1
     *
     * @param string $oxtitle1
     *
     * @return Oxcategories
     */
    public function setOxtitle1($oxtitle1)
    {
        $this->oxtitle1 = $oxtitle1;

        return $this;
    }

    /**
     * Get oxtitle1
     *
     * @return string
     */
    public function getOxtitle1()
    {
        return $this->oxtitle1;
    }

    /**
     * Set oxdesc1
     *
     * @param string $oxdesc1
     *
     * @return Oxcategories
     */
    public function setOxdesc1($oxdesc1)
    {
        $this->oxdesc1 = $oxdesc1;

        return $this;
    }

    /**
     * Get oxdesc1
     *
     * @return string
     */
    public function getOxdesc1()
    {
        return $this->oxdesc1;
    }

    /**
     * Set oxlongdesc1
     *
     * @param string $oxlongdesc1
     *
     * @return Oxcategories
     */
    public function setOxlongdesc1($oxlongdesc1)
    {
        $this->oxlongdesc1 = $oxlongdesc1;

        return $this;
    }

    /**
     * Get oxlongdesc1
     *
     * @return string
     */
    public function getOxlongdesc1()
    {
        return $this->oxlongdesc1;
    }

    /**
     * Set oxactive2
     *
     * @param boolean $oxactive2
     *
     * @return Oxcategories
     */
    public function setOxactive2($oxactive2)
    {
        $this->oxactive2 = $oxactive2;

        return $this;
    }

    /**
     * Get oxactive2
     *
     * @return boolean
     */
    public function getOxactive2()
    {
        return $this->oxactive2;
    }

    /**
     * Set oxtitle2
     *
     * @param string $oxtitle2
     *
     * @return Oxcategories
     */
    public function setOxtitle2($oxtitle2)
    {
        $this->oxtitle2 = $oxtitle2;

        return $this;
    }

    /**
     * Get oxtitle2
     *
     * @return string
     */
    public function getOxtitle2()
    {
        return $this->oxtitle2;
    }

    /**
     * Set oxdesc2
     *
     * @param string $oxdesc2
     *
     * @return Oxcategories
     */
    public function setOxdesc2($oxdesc2)
    {
        $this->oxdesc2 = $oxdesc2;

        return $this;
    }

    /**
     * Get oxdesc2
     *
     * @return string
     */
    public function getOxdesc2()
    {
        return $this->oxdesc2;
    }

    /**
     * Set oxlongdesc2
     *
     * @param string $oxlongdesc2
     *
     * @return Oxcategories
     */
    public function setOxlongdesc2($oxlongdesc2)
    {
        $this->oxlongdesc2 = $oxlongdesc2;

        return $this;
    }

    /**
     * Get oxlongdesc2
     *
     * @return string
     */
    public function getOxlongdesc2()
    {
        return $this->oxlongdesc2;
    }

    /**
     * Set oxactive3
     *
     * @param boolean $oxactive3
     *
     * @return Oxcategories
     */
    public function setOxactive3($oxactive3)
    {
        $this->oxactive3 = $oxactive3;

        return $this;
    }

    /**
     * Get oxactive3
     *
     * @return boolean
     */
    public function getOxactive3()
    {
        return $this->oxactive3;
    }

    /**
     * Set oxtitle3
     *
     * @param string $oxtitle3
     *
     * @return Oxcategories
     */
    public function setOxtitle3($oxtitle3)
    {
        $this->oxtitle3 = $oxtitle3;

        return $this;
    }

    /**
     * Get oxtitle3
     *
     * @return string
     */
    public function getOxtitle3()
    {
        return $this->oxtitle3;
    }

    /**
     * Set oxdesc3
     *
     * @param string $oxdesc3
     *
     * @return Oxcategories
     */
    public function setOxdesc3($oxdesc3)
    {
        $this->oxdesc3 = $oxdesc3;

        return $this;
    }

    /**
     * Get oxdesc3
     *
     * @return string
     */
    public function getOxdesc3()
    {
        return $this->oxdesc3;
    }

    /**
     * Set oxlongdesc3
     *
     * @param string $oxlongdesc3
     *
     * @return Oxcategories
     */
    public function setOxlongdesc3($oxlongdesc3)
    {
        $this->oxlongdesc3 = $oxlongdesc3;

        return $this;
    }

    /**
     * Get oxlongdesc3
     *
     * @return string
     */
    public function getOxlongdesc3()
    {
        return $this->oxlongdesc3;
    }

    /**
     * Set oxicon
     *
     * @param string $oxicon
     *
     * @return Oxcategories
     */
    public function setOxicon($oxicon)
    {
        $this->oxicon = $oxicon;

        return $this;
    }

    /**
     * Get oxicon
     *
     * @return string
     */
    public function getOxicon()
    {
        return $this->oxicon;
    }

    /**
     * Set oxpromoicon
     *
     * @param string $oxpromoicon
     *
     * @return Oxcategories
     */
    public function setOxpromoicon($oxpromoicon)
    {
        $this->oxpromoicon = $oxpromoicon;

        return $this;
    }

    /**
     * Get oxpromoicon
     *
     * @return string
     */
    public function getOxpromoicon()
    {
        return $this->oxpromoicon;
    }

    /**
     * Set oxvat
     *
     * @param float $oxvat
     *
     * @return Oxcategories
     */
    public function setOxvat($oxvat)
    {
        $this->oxvat = $oxvat;

        return $this;
    }

    /**
     * Get oxvat
     *
     * @return float
     */
    public function getOxvat()
    {
        return $this->oxvat;
    }

    /**
     * Set oxskipdiscounts
     *
     * @param boolean $oxskipdiscounts
     *
     * @return Oxcategories
     */
    public function setOxskipdiscounts($oxskipdiscounts)
    {
        $this->oxskipdiscounts = $oxskipdiscounts;

        return $this;
    }

    /**
     * Get oxskipdiscounts
     *
     * @return boolean
     */
    public function getOxskipdiscounts()
    {
        return $this->oxskipdiscounts;
    }

    /**
     * Set oxshowsuffix
     *
     * @param boolean $oxshowsuffix
     *
     * @return Oxcategories
     */
    public function setOxshowsuffix($oxshowsuffix)
    {
        $this->oxshowsuffix = $oxshowsuffix;

        return $this;
    }

    /**
     * Get oxshowsuffix
     *
     * @return boolean
     */
    public function getOxshowsuffix()
    {
        return $this->oxshowsuffix;
    }

    /**
     * Set oxtimestamp
     *
     * @param \DateTime $oxtimestamp
     *
     * @return Oxcategories
     */
    public function setOxtimestamp($oxtimestamp)
    {
        $this->oxtimestamp = $oxtimestamp;

        return $this;
    }

    /**
     * Get oxtimestamp
     *
     * @return \DateTime
     */
    public function getOxtimestamp()
    {
        return $this->oxtimestamp;
    }
}
