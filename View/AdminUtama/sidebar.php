<div class="sidebar box">
    <ul class="primary">
        <li><a class="atas has-more" href="">Admin</a>
            <ul class="ul-secondary">
                <li><a href="tambahAdminMasjid.php">Tambah admin masjid</a></li>
                <li><a href="ubahAdminMasjid.php">Ubah admin masjid</a></li>
            </ul>
        </li>
        <li><a class="has-more" href="">Masjid</a>
            <ul class="ul-secondary">
                <li><a href="konfirmasiMasjid.php">Konfirmasi masjid</a></li>
                <li><a href="aturDataMasjid.php">Atur data masjid</a></li>
            </ul>
        </li>
        <li><a class="has-more" href="">Berita masjid</a>
            <ul class="ul-secondary">
                <li><a href="tambahBeritaMasjid.php">Tambah berita masjid</a></li>
                <li><a href="aturBeritaMasjid.php">Atur berita masjid</a></li>
            </ul>
        </li>
        <li><a class="has-more" href="">Berita umum</a>
            <ul class="ul-secondary">
                <li><a href="tambahBeritaUmum.php">Tambah berita umum</a></li>
                <li><a href="aturBeritaUmum.php">Atur berita umum</a></li>
            </ul>
        </li>
        <li><a class="has-more" href="">Video</a>
            <ul class="ul-secondary">
                <li><a href="tambahVideo.php">Tambah video</a></li>
                <li><a href="aturVideoInformasiMasjid.php">Atur video</a></li>
            </ul>
        </li>
    </ul>
</div>

<script>
    $(document).ready(function() {
        $('.sidebar').find('.has-more').on('click', function(e) {
            $(this).parent().find('.ul-secondary').slideToggle();
            $(this).parent().siblings().find('.ul-secondary').slideUp();
            e.preventDefault();
        });
    });
</script>