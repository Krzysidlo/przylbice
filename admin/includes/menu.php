<?php

use classes\User;
use classes\Functions as fs;

$user = new User;
$avatarUrl = $user->getAvatar();
$avatar    = "<img src='{$avatarUrl}' class='img-responsive img-circle img-menu' alt='avatar'>&nbsp;&nbsp;";
?>

<nav class="navbar navbar-expand-xl fixed-top navbar-dark deep-purple accent-4">
    <a class="navbar-brand" href="/admin/settings"><img src="/media/img/favicon.png" class="img-nav" alt=""></a>
    <a class="navbar-brand" href="/admin/settings"><?= PAGE_NAME; ?> - ADMIN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="animated-icon"><span></span><span></span><span></span></div>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item<?= $this->menu === "settings" ? " active" : ""; ?>">
                <a class="nav-link preload" href="/admin/settings">
                    Ustawienia
                </a>
            </li>
            <li class="nav-item<?= $this->menu === "events" ? " active" : ""; ?>">
                <a class="nav-link preload" href="/admin/index">
                    Mecze
                </a>
            </li>
            <li class="nav-item<?= $this->menu === "privileges" ? " active" : ""; ?>">
                <a class="nav-link preload" href="/admin/privileges">
                    Uprawnienia
                </a>
            </li>
            <li class="nav-item<?= $this->menu === "competitions" ? " active" : ""; ?>">
                <a class="nav-link preload" href="/admin/competitions">
                    Turnieje
                </a>
            </li>
            <li class="nav-item<?= $this->menu === "points" ? " active" : ""; ?>">
                <a class="nav-link preload" href="/admin/points">
                    Punkty
                </a>
            </li>
        </ul>
        <ul class="navbar-nav mr-right">
            <li class="nav-item">
                <a class="nav-link preload" href="/">
                    <?= $avatar . " " . USER_NAME; ?>
                </a>
            </li>
        </ul>
    </div>
</nav>