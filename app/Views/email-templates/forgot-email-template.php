<p>Dear <?= $mail_data['user']->name ?></p>
<p>
    We are received a request to reset password for CI4Blog account associated with <i><?= $mail_data['user']->email ?></i>
    You can reset your password by clicking the botton below:
    <br>
    <br>
    <a href="<?= $mail_data['actionLink'] ?>" style="font-weight: bold;">Reset Password</a>
    <br><br>
    If you did not request for password reset, please ignore this email
</p>