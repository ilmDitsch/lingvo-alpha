<div class="container">

    <?= $this->Form->create('Users', ['class' => 'form-signin']) ?>
        <h2 class="form-signin-heading">Please sign in</h2>

        <?= $this->Form->input('email', ['label' => false, 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Enter email', 'required', 'autofocus']) ?>


        <?= $this->Form->input('password', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Enter password', 'required']) ?>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <?= $this->Form->button('Sign in', ['class' => 'btn btn-lg btn-primary btn-block']) ?>
    <?= $this->Form->end() ?>


</div> <!-- /container -->