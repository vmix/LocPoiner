@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Просмотр всех пользователей</h1>
        <table class="table table-condensed">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>city</th>
                <th>country</th>
                <th>action</th>
            </tr>

        <?php foreach($users as $user) : ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><a href="/admin/users/<?= $user['id'] ?>"><?= $user['name'] ?></a></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['city'] ?></td>
                <td><?= $user['country'] ?></td>
                <td><a href="/admin/user/edit/<?= $user['id'] ?>">Редактировать</a> | <a href="/admin/user/delete/<?= $user['id'] ?>">Удалить</a></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>
@endsection