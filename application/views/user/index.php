<h2><?= $viewAdminusers->login ?>
    <span>
        <?= \ItForFree\SimpleMVC\User::get()->returnIfAllowed("admin/adminusers/edit", 
            "<a href=" . \ItForFree\SimpleMVC\Url::link("admin/adminusers/edit&id=". $viewAdminusers->id) 
            . ">[Редактировать]</a>");?>
    </span>
</h2> 

<p>Зарегистрирован <?= $viewAdminusers->timestamp ?></p>
<p>E-mail: <?= $viewAdminusers->email ?></p>