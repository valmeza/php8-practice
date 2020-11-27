<?php

class User {
    public function profile()
    {
        return null;
    }
}

class Profile {
    public function employment()
    {
        return 'Web Developer';
    }
}

$user = new User;

// old way of checking if user has profile or null
//$profile = $user->profile();
//if($profile) {
//    echo $profile->employment();
//}

// php8
// will check if user has a profile or null
echo $user->profile()?->employment() ?? 'Not provided';