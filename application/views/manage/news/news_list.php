<h3 class="page-header">
    Daftar Berita
</h3>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="controls" align="center">Judul</th>
                <th class="controls" align="center">Tanggal</th>
            </tr>
        </thead>
        <?php
        if (!empty($news)) {
            foreach ($news as $row) {
                ?>
                <tbody>
                    <tr>
                        <td ><b><a style="float: left;" href="<?php echo site_url('manage/news/edit/' . $row['news_id']); ?>" ><?php echo $row['news_title']; ?></a></b></td>
                        <td ><?php echo pretty_date($row['news_post_date'], 'l, d/m/Y', FALSE); ?></td>
                    </tr>
                </tbody>
                <?php
            }
        } else {
            ?>
            <tbody>
                <tr id="row">
                    <td colspan="5" align="center">Data Kosong</td>
                </tr>
            </tbody>
            <?php
        }
        ?>   
    </table>
</div>
<div >
    <?php echo $this->pagination->create_links(); ?>
</div>