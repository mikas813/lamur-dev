<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_CertificateAuthorityService_Certificate extends Google_Collection
{
  protected $collection_key = 'pemCertificateChain';
  protected $certificateDescriptionType = 'Google_Service_CertificateAuthorityService_CertificateDescription';
  protected $certificateDescriptionDataType = '';
  protected $configType = 'Google_Service_CertificateAuthorityService_CertificateConfig';
  protected $configDataType = '';
  public $createTime;
  public $labels;
  public $lifetime;
  public $name;
  public $pemCertificate;
  public $pemCertificateChain;
  public $pemCsr;
  protected $revocationDetailsType = 'Google_Service_CertificateAuthorityService_RevocationDetails';
  protected $revocationDetailsDataType = '';
  public $updateTime;

  /**
   * @param Google_Service_CertificateAuthorityService_CertificateDescription
   */
  public function setCertificateDescription(Google_Service_CertificateAuthorityService_CertificateDescription $certificateDescription)
  {
    $this->certificateDescription = $certificateDescription;
  }
  /**
   * @return Google_Service_CertificateAuthorityService_CertificateDescription
   */
  public function getCertificateDescription()
  {
    return $this->certificateDescription;
  }
  /**
   * @param Google_Service_CertificateAuthorityService_CertificateConfig
   */
  public function setConfig(Google_Service_CertificateAuthorityService_CertificateConfig $config)
  {
    $this->config = $config;
  }
  /**
   * @return Google_Service_CertificateAuthorityService_CertificateConfig
   */
  public function getConfig()
  {
    return $this->config;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setLifetime($lifetime)
  {
    $this->lifetime = $lifetime;
  }
  public function getLifetime()
  {
    return $this->lifetime;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPemCertificate($pemCertificate)
  {
    $this->pemCertificate = $pemCertificate;
  }
  public function getPemCertificate()
  {
    return $this->pemCertificate;
  }
  public function setPemCertificateChain($pemCertificateChain)
  {
    $this->pemCertificateChain = $pemCertificateChain;
  }
  public function getPemCertificateChain()
  {
    return $this->pemCertificateChain;
  }
  public function setPemCsr($pemCsr)
  {
    $this->pemCsr = $pemCsr;
  }
  public function getPemCsr()
  {
    return $this->pemCsr;
  }
  /**
   * @param Google_Service_CertificateAuthorityService_RevocationDetails
   */
  public function setRevocationDetails(Google_Service_CertificateAuthorityService_RevocationDetails $revocationDetails)
  {
    $this->revocationDetails = $revocationDetails;
  }
  /**
   * @return Google_Service_CertificateAuthorityService_RevocationDetails
   */
  public function getRevocationDetails()
  {
    return $this->revocationDetails;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}
