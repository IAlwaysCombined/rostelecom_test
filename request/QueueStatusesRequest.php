<?php

namespace app\request;

class QueueStatusesRequest
{
    public string $s_name;
    public string $c_name;
    public string $c_id;
    public string $a_type;
    public string $direction;
    public string $activation;
    public string $c_state;
    public string $control;

    public function __construct(array $params)
    {
        $this->s_name = $params["s_name"];
        $this->c_name = $params["c_name"];
        $this->c_id = $params["c_id"];
        $this->a_type = $params["a_type"];
        $this->direction = $params["direction"];
        $this->activation = $params["activation"];
        $this->c_state = $params["c_state"];
        $this->control = $params["control"];
    }
}