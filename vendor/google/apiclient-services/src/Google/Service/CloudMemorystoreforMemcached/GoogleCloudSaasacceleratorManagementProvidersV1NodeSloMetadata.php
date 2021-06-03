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

class Google_Service_CloudMemorystoreforMemcached_GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata extends Google_Collection
{
  protected $collection_key = 'exclusions';
  protected $exclusionsType = 'Google_Service_CloudMemorystoreforMemcached_GoogleCloudSaasacceleratorManagementProvidersV1SloExclusion';
  protected $exclusionsDataType = 'array';
  public $location;
  public $nodeId;

  /**
   * @param Google_Service_CloudMemorystoreforMemcached_GoogleCloudSaasacceleratorManagementProvidersV1SloExclusion[]
   */
  public function setExclusions($exclusions)
  {
    $this->exclusions = $exclusions;
  }
  /**
   * @return Google_Service_CloudMemorystoreforMemcached_GoogleCloudSaasacceleratorManagementProvidersV1SloExclusion[]
   */
  public function getExclusions()
  {
    return $this->exclusions;
  }
  public function setLocation($location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setNodeId($nodeId)
  {
    $this->nodeId = $nodeId;
  }
  public function getNodeId()
  {
    return $this->nodeId;
  }
}
