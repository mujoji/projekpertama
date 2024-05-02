1. Dari index.php di views/product 
<?php foreach ($products as $item): ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['stock'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['category'] ?></td>
                <td>
                    <a href="/product/<?= $item['id'] ?>/edit">Edit</a>
                    <form action="/product/<?= $item['id'] ?>" method="post" onsubmit="return confirm(`Are you sure?`)">
                        <input type="hidden" name="_method" value="delete" />
                        <button type="submit">Delete</button>
                    </form>
                    
                </td>
            </tr>

        <?php endforeach ?>

Harusnya ini, Jadi:
        
        <td>
                    <a href="/product/<?= $item['id'] ?>/edit">Edit</a>
                    <form action="/product/<?= $item['id'] ?>" method="post" onsubmit="return confirm(`Are you sure?`)">
                        <input type="hidden" name="_method" value="delete" />
                        <button type="submit">Delete</button>
                    </form>
                    
                </td>