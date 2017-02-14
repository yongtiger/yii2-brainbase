<?php ///[yii2-brainbase v0.1.0 (i18n)]

return [

	/**
	 * Controllers
	 */
	///\frontend\controllers\SiteController.php
	'Thank you for contacting us. We will respond to you as soon as possible.' => '谢谢您联系我们。我们将尽快回复您。',
	'There was an error sending your message.' => '您发送的消息有错误。',
	'Check your email for further instructions.' => '请查看您的邮件以获知后续的操作。',
	'Sorry, we are unable to reset password for the provided email address.' => '对不起，我们不能根据您提供的邮箱地址重置您的密码。',
	'New password saved.' => '新密码已保存。',


	/**
	 * Models
	 */
	///\frontend\models\ContactForm.php
	'Name' => '姓名',
	'Subject' => '主题',
	'Body' => '内容',

	///\frontend\models\PasswordResetRequestForm.php
	'There is no user with this email address.' => '没有用户使用该邮箱。',

	///\frontend\models\ResetPasswordForm.php
	'Password reset token cannot be blank.' => '重置密码的令牌不能为空。',
	'Wrong password reset token.' => '重置密码的令牌不正确。',

	///\frontend\models\SignupForm.php
	'This username has already been taken.' => '用户名已经被占用。',
	'This email address has already been taken.' => '邮箱已经被占用。',


	/**
	 * Views
	 */

	///\frontend\views\layouts\main.php
	'About' => '关于我们',
	'Contact' => '联系我们',

	///\frontend\views\site\about.php
	'This is the About page. You may modify the following file to customize its content:' => '这里是关于我们页面。您可以修改下面的文件以定制其中的内容：',

	///\frontend\views\site\contact.php
	'If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.' => '如果您有商务咨询或其它问题，请填写下面表格以联系我们。谢谢！',

	///\frontend\views\site\error.php
	'The above error occurred while the Web server was processing your request.' => '网络服务器处理您的请求时发生上述错误。',
	'Please contact us if you think this is a server error. Thank you.' => '如果您认为是服务器错误，请联系我们。谢谢！',

	///\frontend\views\site\index.php
	'My Yii Application' => '我的Yii应用',
	'Congratulations!' => '恭喜您！',
	'You have successfully created your Yii-powered application.' => '您已经成功创建了您的Yii应用。',
	'Get started with Yii' => '开始了解Yii',
	'Heading' => '标题',
	'Yii Documentation' => 'Yii 文档',
	'Yii Forum' => 'Yii 社区',
	'Yii Extensions' => 'Yii 扩展',

	///\frontend\views\site\login.php
	'Please fill out the following fields to login:' => '请填写下列内容：',
	'If you forgot your password you can {0}' => "如果您忘记密码，您可以 {0}。",
	'reset it' => '重置',

	///\frontend\views\site\requestPasswordResetToken.php
	'Request password reset' => '请求密码重置',
	'Please fill out your email. A link to reset password will be sent there.' => '请填写您的邮箱，系统将发送重置密码的邮件到您的邮箱。',

	///\frontend\views\site\resetPassword.php
	'Reset password' => '重置密码',
	'Please choose your new password:' => '请选择您的新密码：',

	///\frontend\views\site\signup.php
	'Please fill out the following fields to signup:' => '请填写下列内容：',

];