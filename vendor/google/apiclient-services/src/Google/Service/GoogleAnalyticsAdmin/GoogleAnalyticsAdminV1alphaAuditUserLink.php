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

class Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAuditUserLink extends Google_Collection
{
  protected $collection_key = 'effectiveRoles';
  public $directRoles;
  public $effectiveRoles;
  public $emailAddress;
  public $name;

  public function setDirectRoles($directRoles)
  {
    $this->directRoles = $directRoles;
  }
  public function getDirectRoles()
  {
    return $this->directRoles;
  }
  public function setEffectiveRoles($effectiveRoles)
  {
    $this->effectiveRoles = $effectiveRoles;
  }
  public function getEffectiveRoles()
  {
    return $this->effectiveRoles;
  }
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}
