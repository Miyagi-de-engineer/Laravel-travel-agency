<nav class="navbar navbar-expand navbar-dark blue-gradient">
    <a href="/" class="navbar-brand">
        <i class="fas fa-globe-asia"></i>
        Awsome Travel
    </a>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
           <a href="" class="nav-link">ユーザー登録</a>
        </li>
        <li class="nav-item">
           <a href="" class="nav-link">ログイン</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link"><i class="fas fa-flag-checkered"></i>登録する</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="undefined">
                <i class="fas fa-user-circle"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-primary"
            aria-labelledby="navbarDropdownMenuLink">
                <button class="dropdown-item" type="button" onclick="location.href">
                    マイページ
                </button>
                <div class="dropdown-driver"></div>
                <button form="logout-button" class="dropdown-item" type="submit">
                    ログアウト
                </button>
            </div>
        </li>
        <form action="" method="POST" id="logout-button">
        </form>
        <!-- Dropdown -->
    </ul>
</nav>
