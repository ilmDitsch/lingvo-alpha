<?= $this->Form->create('Users', ['class' => 'form-register']) ?>
    <div class="form-group">
        <?= $this->Form->input('email', ['label' => 'Email address', 'type' => 'email', 'class' => 'form-control', 'aria-describedby' => 'emailHelp', 'placeholder' => 'Enter email']) ?>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <?= $this->Form->input('password', ['label' => 'Password', 'class' => 'form-control', 'placeholder' => 'Enter password']) ?>

        <?= $this->Form->input('password-repeat', ['type' => 'password', 'label' => 'Password repeat', 'class' => 'form-control', 'placeholder' => 'Re-enter password']) ?>
    </div>


<?= $this->Form->button('Register', ['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>





