<H1>Login</H1>
<p>A continuación, introduzca su nombre de usuario seguido de su contraseña.</p>
<?= $this->Form->Create(); ?>
<?= $this->Form->input('nickname');?>
<?= $this->Form->input('password');?>
<?= $this->Form->button('Login');?>
<?= $this->Form->end(); ?>