<h1><?= e($title) ?></h1>

<p>
    <a href="<?= url('user/create') ?>">Novo usuário</a>
</p>

<table class="tabela">
    <thead>
        <tr>
            <th>Nome completo</th>
            <th>E-mail</th>
            <th>CPF</th>
            <th>Data de nascimento</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($users as $u): ?>
            <tr>
                <td>
                    <?= e($u['name'] . ' ' . $u['last_name']) ?>
                </td>

                <td><?= e($u['email']) ?></td>

                <td><?= e(format_cpf($u['cpf'])) ?></td>

                <td><?= e(format_date($u['birth_date'])) ?></td>

                <td>
                    <a href="<?= url('user/show/' . (int) $u['id']) ?>">
                        Ver
                    </a>

                    |

                    <a href="<?= url('user/edit/' . (int) $u['id']) ?>">
                        Editar
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>