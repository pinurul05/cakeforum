<?php
//configure field for table users
Configure::write('username', 'username');
#id, username, email, created
Configure::write('fieldUser', 'User.id, User.username, User.email, User.created');
#id, username
Configure::write('searchUser', 'User.id, User.username');
Configure::write('namefieldUserId', 'id');

#configure user slug, value true or false
Configure::write('userSlug', true);

?>

