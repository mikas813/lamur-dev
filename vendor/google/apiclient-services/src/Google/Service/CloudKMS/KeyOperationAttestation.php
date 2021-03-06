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

class Google_Service_CloudKMS_KeyOperationAttestation extends Google_Model
{
  protected $certChainsType = 'Google_Service_CloudKMS_CertificateChains';
  protected $certChainsDataType = '';
  public $content;
  public $format;

  /**
   * @param Google_Service_CloudKMS_CertificateChains
   */
  public function setCertChains(Google_Service_CloudKMS_CertificateChains $certChains)
  {
    $this->certChains = $certChains;
  }
  /**
   * @return Google_Service_CloudKMS_CertificateChains
   */
  public function getCertChains()
  {
    return $this->certChains;
  }
  public function setContent($content)
  {
    $this->content = $content;
  }
  public function getContent()
  {
    return $this->content;
  }
  public function setFormat($format)
  {
    $this->format = $format;
  }
  public function getFormat()
  {
    return $this->format;
  }
}
