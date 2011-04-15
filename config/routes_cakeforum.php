<?php
Router::connect('/forum', array(
        'controller' => 'forum',
        'action' => 'index',
	'plugin' => 'cakeforum'
        )
);

Router::connect('/forum/unanswered', array(
        'controller' => 'forum',
        'action' => 'unanswered',
	'plugin' => 'cakeforum'
        )
);
Router::connect('/forum/view/*', array(
        'controller' => 'forum',
        'action' => 'view',
	'plugin' => 'cakeforum'
        )
);

Router::connect('/forum/topic/*', array(
        'controller' => 'forum',
        'action' => 'topic',
	'plugin' => 'cakeforum'
        )
);

Router::connect('/forum/newtopic/*', array(
        'controller' => 'forum',
        'action' => 'newtopic',
	'plugin' => 'cakeforum',
        )
);

Router::connect('/forum/reply/*', array(
        'controller' => 'forum',
        'action' => 'reply',
	'plugin' => 'cakeforum',
        )
);


Router::connect('/forum/account', array(
        'controller' => 'users',
        'action' => 'account',
	'plugin' => 'cakeforum'
        )
);

Router::connect('/forum/login', array(
        'controller' => 'users',
        'action' => 'login',
	'plugin' => 'cakeforum'
        )
);

Router::connect('/forum/logout', array(
        'controller' => 'users',
        'action' => 'logout',
	'plugin' => 'cakeforum'
        )
);

Router::connect('/forum/profile/*', array(
        'controller' => 'users',
        'action' => 'profile',
	'plugin' => 'cakeforum'
        )
);

Router::connect('/forum/lostpassword', array(
        'controller' => 'users',
        'action' => 'lostpassword',
	'plugin' => 'cakeforum'
        )
);


Router::connect('/forum/register', array(
        'controller' => 'users',
        'action' => 'register',
	'plugin' => 'cakeforum'
        )
);

?>
