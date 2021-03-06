<?php

namespace PonderSource\EBMS;

use JMS\Serializer\Annotation\{Type,SerializedName,XmlNamespace,XmlRoot,XmlElement};
use PonderSource\EBMS\{PartInfo,Namespaces};

/**
 * @XmlNamespace(uri="http://docs.oasis-open.org/ebxml-msg/ebms/v3.0/core/ebms-header-3_0-200704.xsd", prefix="eb")
 */
class PayloadInfo {
    /**
     * @XmlElement(cdata=false, namespace=Namespaces::EB)
     * @SerializedName("PartInfo");
     * @Type("PonderSource\EBMS\PartInfo")
     */
    private $partInfo;

    public function __construct($partInfo){
        $this->partInfo = $partInfo;
        return $this;
    }

    public function setPartInfo($partInfo){
        $this->partInfo = $partInfo;
        return $this;
    }

    public function getPartInfo(){
        return $this->partInfo;
    }
}