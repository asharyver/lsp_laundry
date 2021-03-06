<?php
defined('_IN_APP_') or die('access denied !'); // keep silent
require 'layouts/header.php';
?>
<div class="content">
    <form action="<?php echo SITE_URL; ?>/laundry.php?action=new&idtrans=<?php echo $_GET['idtrans'] ?>" method="post">
        <div class="input-block">
            <label for="nama">Nama Barang</label>
            <input type="text" name="nama" id="nama" placeholder="Type the nama barang..." />
        </div>
        <div class="input-block">
            <label for="harga">Harga per item</label>
            <input type="text" name="harga" id="harga" placeholder="Harga ..." />
        </div>
        <div class="input-block">
            <label for="status">Status Barang</label>
            <select name="status" id="status">
                <option value="">-- Select Status --</option>
                <?php foreach ($statuses as $status) { ?>
                    <option value="<?php echo $status['idstatus'] ?>"><?php echo $status['namastatus'] ?></option>
                <?php } ?>

            </select>
        </div>
        <div class="input-block">
            <label for="type">Jenis Barang</label>
            <select name="type" id="type">
                <option value="">-- Select Jenis --</option>
                <option value="baju">Baju</option>
                <option value="celana">Celana</option>
                <option value="pakaian-dalam">Pakaian dalam</option>
                <option value="lainnya">Lainnya</option>
            </select>
        </div>
        <div class="input-block">
            <label for="total">Total</label>
            <input type="number" name="total" id="total" placeholder="total barang..." />
        </div>
        <div class="input-block">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" id="keterangan" placeholder="Type the keterangan..." />
        </div>
        <div class="input-block">
            <button type="submit" name="new" value="new">Tambahkan</button>
        </div>
    </form>
</div>
<?php
require 'layouts/footer.php';
?>