<?php
class UserSample
{
    public function __construct(protected $name)
    {
    }
}


class Plan {
    public function __construct(protected string $name = 'monthly')
    {
    }
}

class Signup {
    public function __construct(protected UserSample $user, protected Plan $plan)
    {
    }
}

$user = new UserSample('valeria');
$plan = new Plan();

$signup = new Signup($user, $plan);

var_dump($signup);