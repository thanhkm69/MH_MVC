<table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php $dem = 1; ?>
            <?php foreach ($users as $item): ?>
                <tr>
                    <td><?= $dem++; ?></td>
                    <td><?= htmlspecialchars($item["name"]) ?></td>
                    <td><?= htmlspecialchars($item["email"]) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
