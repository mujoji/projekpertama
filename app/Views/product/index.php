<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Jenis Produk</td>
                <td>Stok Tersedia</td>
                <td>Harga</td>
                <td>Kategori</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
        <a href="/product/new">Add new product</a>
        <br />
        <br />
        <?php $no = 0; ?>
        <?php foreach ($products as $item): ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['stock'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['category'] ?></td>
                <td>
                    <a href="/product/<?= $item['id'] ?>/edit">Edit</a>
                    <a href="/product/<?= $item['id'] ?>/delete">Delete</a>
                </td>
            </tr>

        <?php endforeach ?>
        </tbody>
    </table>
<?= $this->endSection() ?>