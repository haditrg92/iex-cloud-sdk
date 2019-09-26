<?php

namespace Digitonic\IexCloudSdk\Account;

use Digitonic\IexCloudSdk\Contracts\IEXCloud;
use Digitonic\IexCloudSdk\Requests\BaseGet;

class Usage extends BaseGet
{
    const ENDPOINT = 'account/usage';

    /**
     * Create constructor.
     *
     * @param  IEXCloud  $api
     */
    public function __construct(IEXCloud $api)
    {
        parent::__construct($api);
    }
}
