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

class Google_Service_CloudDomains_Contact extends Google_Model
{
  public $email;
  public $faxNumber;
  public $phoneNumber;
  protected $postalAddressType = 'Google_Service_CloudDomains_PostalAddress';
  protected $postalAddressDataType = '';

  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setFaxNumber($faxNumber)
  {
    $this->faxNumber = $faxNumber;
  }
  public function getFaxNumber()
  {
    return $this->faxNumber;
  }
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /**
   * @param Google_Service_CloudDomains_PostalAddress
   */
  public function setPostalAddress(Google_Service_CloudDomains_PostalAddress $postalAddress)
  {
    $this->postalAddress = $postalAddress;
  }
  /**
   * @return Google_Service_CloudDomains_PostalAddress
   */
  public function getPostalAddress()
  {
    return $this->postalAddress;
  }
}
