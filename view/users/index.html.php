
    <h1>Usuarios</h1>
    <table>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?php echo $user->id;?></td>
                    <td><?php echo $user->name; ?></td>
                    <td>
                        <a href="/show.php?id=<?php echo $user->id ?>">Ver</a>
                    </td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>


