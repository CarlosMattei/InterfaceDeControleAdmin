<nav class="uk-navbar-container uk-navbar-primary" style="background-color: #007bff; border-color: #007bff;" uk-dropnav="dropbar: true">
    <div class="uk-container uk-light">
        <div uk-navbar>
            <ul class="uk-navbar-nav">
                <li>
                    <a class="uk-navbar-item uk-logo" href="#" aria-label="Back to Home">Logo</a>
                </li>
            </ul>
            <div class="uk-navbar-center uk-hidden@s">
                <!-- Botão dropdown para dispositivos mobile -->
                <a class="uk-navbar-toggle" uk-toggle="target: #navbar-dropdown">
                    <span uk-icon="icon: menu"></span>
                </a>
                <div id="navbar-dropdown" uk-dropdown="mode: click; boundary: !nav;">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active">
                            <a href="?p=home">
                                <span class="uk-icon uk-margin-small-right" uk-icon="icon: home"></span>
                                Inicio
                            </a>
                        </li>
                        <li>
                            <a href="?p=clientes">
                                <span class="uk-icon uk-margin-small-right" uk-icon="icon: users"></span>
                                Clientes
                            </a>
                        </li>
                        <li>
                            <a href="?p=produtos">
                                <span class="uk-icon uk-margin-small-right" uk-icon="icon: bag"></span>
                                Produtos
                            </a>
                        </li>
                        <li>
                            <a href="?p=produtos">
                                <span class="uk-icon uk-margin-small-right" uk-icon="icon: arrow-up"></span>
                                Vendas
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="uk-icon uk-margin-small-right" uk-icon="icon: arrow-down"></span>
                                Compras
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="uk-navbar-center uk-visible@s">
                <!-- Navbar itens para telas maiores -->
                <ul class="uk-navbar-nav">
                    <li class="uk-active">
                        <a href="?p=admin/home">
                            <span class="uk-icon uk-margin-small-right" uk-icon="icon: home"></span>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="?p=admin/clientes">
                            <span class="uk-icon uk-margin-small-right" uk-icon="icon: users"></span>
                            Clientes
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="uk-icon uk-margin-small-right" uk-icon="icon: bag"></span>
                            Produtos
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="uk-icon uk-margin-small-right" uk-icon="icon: arrow-up"></span>
                            Vendas
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="uk-icon uk-margin-small-right" uk-icon="icon: arrow-down"></span>
                            Compras
                        </a>
                    </li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="#">
                            <span class="uk-icon uk-margin-small-right" uk-icon="icon: sign-out"></span>
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>