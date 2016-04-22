<?php

/*
 * Copyright 2016 Intacct Corporation.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"). You may not
 * use this file except in compliance with the License. You may obtain a copy
 * of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * or in the "LICENSE" file accompanying this file. This file is distributed on
 * an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Intacct\Applications;

use Intacct\IntacctClientInterface;
use Intacct\GeneralLedger\Account;

class GeneralLedger implements GeneralLedgerInterface
{
    
    /**
     *
     * @var IntacctClientInterface
     */
    private $client;
    
    /**
     *
     * @var Account
     */
    private $account;

    /**
     * GeneralLedger constructor.
     * @param IntacctClientInterface $client
     */
    public function __construct(IntacctClientInterface &$client)
    {
        $this->client = $client;
        
        $this->account = new Account($this->client);
    }
    
    /**
     * 
     * @return Account
     */
    public function getAccount()
    {
        return $this->account;
    }
    
}