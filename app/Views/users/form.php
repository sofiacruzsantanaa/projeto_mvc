<h1><?= e($title) ?></h1>

<form method="post" action="<?= url('user/store') ?>" data-validate>

    <input type="hidden" name="csrf" value="<?= e($csrf) ?>">

    <label>
        Nome
        <input name="name" value="<?= e($old['name'] ?? '') ?>">
    </label>

    <?php if (isset($errors['name'])): ?>
        <p class="erro"><?= e($errors['name']) ?></p>
    <?php endif; ?>

    <label>
        Sobrenome
        <input name="last_name" value="<?= e($old['last_name'] ?? '') ?>">
    </label>

    <?php if (isset($errors['last_name'])): ?>
        <p class="erro"><?= e($errors['last_name']) ?></p>
    <?php endif; ?>

    <label>
        E-mail
        <input name="email" value="<?= e($old['email'] ?? '') ?>">
    </label>

    <?php if (isset($errors['email'])): ?>
        <p class="erro"><?= e($errors['email']) ?></p>
    <?php endif; ?>

    <label>
        CPF
        <input name="cpf" value="<?= e($old['cpf'] ?? '') ?>">
    </label>

    <?php if (isset($errors['cpf'])): ?>
        <p class="erro"><?= e($errors['cpf']) ?></p>
    <?php endif; ?>

    <label>
        Data de nascimento
        <input type="date" name="birth_date" value="<?= e($old['birth_date'] ?? '') ?>">
    </label>

    <?php if (isset($errors['birth_date'])): ?>
        <p class="erro"><?= e($errors['birth_date']) ?></p>
    <?php endif; ?>

    <button type="submit">Salvar</button>

</form>