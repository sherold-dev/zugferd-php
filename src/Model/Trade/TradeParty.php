<?php namespace Easybill\ZUGFeRD\Model\Trade;

use Easybill\ZUGFeRD\Model\Address;
use Easybill\ZUGFeRD\Model\Trade\Tax\TaxRegistration;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;

class TradeParty
{

	/**
	 * @var string
	 * @Type("string")
	 * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
	 * @SerializedName("ID")
	 */
	private $id;

	/**
	 * @var GlobalId
	 * @Type("Easybill\ZUGFeRD\Model\Trade\GlobalId")
	 * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
	 * @SerializedName("GlobalID")
	 */
	private $globalID;

    /**
     * @var string
     * @Type("string")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @SerializedName("Name")
     */
    private $name;
    /**
     * @var Address
     * @Type("Easybill\ZUGFeRD\Model\Address")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @SerializedName("PostalTradeAddress")
     */
    private $address;
    /**
     * @var TaxRegistration[]
     * @Type("array<Easybill\ZUGFeRD\Model\Trade\Tax\TaxRegistration>")
     * @XmlList(inline = true, entry = "SpecifiedTaxRegistration", namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     */
    private $taxRegistrations;

	public function __construct ( $id = '', $name = '', Address $address, $globalID= null, array $taxRegistrations = array() )
	{
		$this->id = $id;
		$this->globalID = ($globalID) ? new GlobalId($globalID) : null;
		$this->name = $name;
		$this->address = $address;
		$this->taxRegistrations = $taxRegistrations;
	}

	/**
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param string $id
	 *
	 * @return self
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Easybill\ZUGFeRD\Model\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \Easybill\ZUGFeRD\Model\Address $address
     *
     * @return self
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return \Easybill\ZUGFeRD\Model\Trade\Tax\TaxRegistration[]
     */
    public function getTaxRegistrations()
    {
        return $this->taxRegistrations;
    }

    /**
     * @param \Easybill\ZUGFeRD\Model\Trade\Tax\TaxRegistration $taxRegistration
     *
     * @return self
     */
    public function addTaxRegistration(TaxRegistration $taxRegistration)
    {
        $this->taxRegistrations[] = $taxRegistration;
        return $this;
    }


}
