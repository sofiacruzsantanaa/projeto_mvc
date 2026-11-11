<h1><?= e($title) ?></h1>

<form method="POST" action="<?= url('user/update/' . (int) $user['id']) ?>">

    <input type="hidden" name="csrf" value="<?= e($csrf) ?>">

    <label>Nome:</label>
    <input type="text" name="name"
        value="<?= e($user['name']) ?>" required>

    <label>Sobrenome:</label>
    <input type="text" name="last_name"
        value="<?= e($user['last_name']) ?>" required>

    <label>E-mail:</label>
    <input type="email" name="email"
        value="<?= e($user['email']) ?>" required>

    <label>CPF:</label>
    <input type="text" name="cpf"
        value="<?= e($user['cpf']) ?>" required>

    <label>Data de nascimento:</label>
    <input type="date" name="birth_date"
        value="<?= e($user['birth_date']) ?>" required>

    <button type="submit">Atualizar usuário</button>

</form>