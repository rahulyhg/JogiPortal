<p>Dear <?php echo $User['username']; ?>,</p>

<p>You may change your password using the link below.</p>
<?php $url = 'https://' . env('SERVER_NAME') . '/users/reset_password_token/' . $User['reset_password_token']; ?>
<p><?php echo $this->html->link($url, $url); ?></p>

<p>Your password won't change until you access the link above and create a new one.</p>
<p>Thanks and have a nice day!</p>