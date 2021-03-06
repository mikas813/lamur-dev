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

class Google_Service_HangoutsChat_SlashCommandMetadata extends Google_Model
{
  protected $botType = 'Google_Service_HangoutsChat_User';
  protected $botDataType = '';
  public $commandId;
  public $commandName;
  public $triggersDialog;
  public $type;

  /**
   * @param Google_Service_HangoutsChat_User
   */
  public function setBot(Google_Service_HangoutsChat_User $bot)
  {
    $this->bot = $bot;
  }
  /**
   * @return Google_Service_HangoutsChat_User
   */
  public function getBot()
  {
    return $this->bot;
  }
  public function setCommandId($commandId)
  {
    $this->commandId = $commandId;
  }
  public function getCommandId()
  {
    return $this->commandId;
  }
  public function setCommandName($commandName)
  {
    $this->commandName = $commandName;
  }
  public function getCommandName()
  {
    return $this->commandName;
  }
  public function setTriggersDialog($triggersDialog)
  {
    $this->triggersDialog = $triggersDialog;
  }
  public function getTriggersDialog()
  {
    return $this->triggersDialog;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}
