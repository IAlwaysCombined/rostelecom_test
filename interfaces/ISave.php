<?php

namespace app\interfaces;

use app\request\QueueStatusesRequest;

interface ISave
{
    public function save(QueueStatusesRequest $request);
}