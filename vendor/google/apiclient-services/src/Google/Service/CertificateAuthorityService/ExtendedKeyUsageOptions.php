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

class Google_Service_CertificateAuthorityService_ExtendedKeyUsageOptions extends Google_Model
{
  public $clientAuth;
  public $codeSigning;
  public $emailProtection;
  public $ocspSigning;
  public $serverAuth;
  public $timeStamping;

  public function setClientAuth($clientAuth)
  {
    $this->clientAuth = $clientAuth;
  }
  public function getClientAuth()
  {
    return $this->clientAuth;
  }
  public function setCodeSigning($codeSigning)
  {
    $this->codeSigning = $codeSigning;
  }
  public function getCodeSigning()
  {
    return $this->codeSigning;
  }
  public function setEmailProtection($emailProtection)
  {
    $this->emailProtection = $emailProtection;
  }
  public function getEmailProtection()
  {
    return $this->emailProtection;
  }
  public function setOcspSigning($ocspSigning)
  {
    $this->ocspSigning = $ocspSigning;
  }
  public function getOcspSigning()
  {
    return $this->ocspSigning;
  }
  public function setServerAuth($serverAuth)
  {
    $this->serverAuth = $serverAuth;
  }
  public function getServerAuth()
  {
    return $this->serverAuth;
  }
  public function setTimeStamping($timeStamping)
  {
    $this->timeStamping = $timeStamping;
  }
  public function getTimeStamping()
  {
    return $this->timeStamping;
  }
}
