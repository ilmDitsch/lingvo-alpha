<div class="site-wrapper">

    <div class="site-wrapper-inner">
        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">Lingvo Alpha</h3>
                    <nav class="nav nav-masthead">
                        <a class="nav-link active" href="#">Home</a>

                        <?= $this->Html->link('Register', ['controller' => 'Users', 'action' => 'register'], ['class' => 'nav-link']) ?>
                        <?= $this->Html->link('Login', ['controller' => 'Users', 'action' => 'login'], ['class' => 'nav-link']) ?>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading">Welcome to Lingvo Alpha.</h1>
                <p class="lead">Lingvo Alpha is a web based i18n platform for developing multi-language software.</p>
                <p class="lead">
                    <?= $this->Html->link('Login', ['controller' => 'Users', 'action' => 'login'], ['class' => 'btn btn-lg btn-primary']) ?>
                    <?= $this->Html->link('Register', ['controller' => 'Users', 'action' => 'register'], ['class' => 'btn btn-lg btn-outline-primary']) ?>
                </p>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>Developed by <a href="https://github.com/ilmDitsch">ilmDitsch</a>, twitter <a href="https://twitter.com/ilmditsch">@ilmDitsch</a>.</p>
                </div>
            </div>

        </div>

    </div>

</div>