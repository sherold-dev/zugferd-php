<?php namespace Easybill\ZUGFeRD\Model\Trade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlValue;

/**
 * Class GlobalId
 *
 * @package Easybill\ZUGFeRD\Model\Trade
 */
class GlobalId {

	/**
	 * @var string
	 * @Type("string")
	 * @XmlValue(cdata = false)
	 */
	private $value;

	/**
	 * @var string
	 * @Type("string")
	 * @XmlAttribute
	 * @SerializedName("schemeID")
	 */
	private $schemeID;

	/**
	 * Amount constructor.
	 *
	 * @param double $value
	 * @param string $schemeID
	 */
	public function __construct ( $value, $schemeID = "0149" ) {

		$this->setValue($value);
		$this->schemeID = $schemeID;
	}

	/**
	 * @return string
	 */
	public function getValue () {

		return $this->value;
	}

	/**
	 * @param string $value
	 *
	 * @return self
	 */
	public function setValue ( $value ) {

		$this->value = $value;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSchemeID () {

		return $this->schemeID;
	}

	/**
	 * @param string $schemeID
	 *
	 * @return self
	 */
	public function setSchemeID ( $schemeID = "0149" ) {

		$this->schemeID = $schemeID;

		return $this;
	}

}
