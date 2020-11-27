<?php

class ConversationExample {}

$obj = new ConversationExample();


// same as get_class($obj)
switch ($obj::class) {
    case 'ConversationExample':
        $type = 'started_conversation';
        break;
    case 'Reply':
        $type = 'replied_to_conversation';
        break;
    case 'Comment';
        $type = 'commented_on_lesson';
        break;
}

var_dump($type);