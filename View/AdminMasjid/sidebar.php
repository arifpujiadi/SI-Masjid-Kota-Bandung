<div class="sidebar box">
    <ul class="primary">
        <li><a class="atas has-more" href="">Masjid</a>
            <ul class="ul-secondary">
                <li><a href="ubahDataMasjid.php">Ubah data masjid</a></li>
            </ul>
        </li>
        <li><a class="has-more" href="">Berita masjid</a>
            <ul class="ul-secondary">
                <li><a href="tambahBeritaMasjid.php">Tambah berita masjid</a></li>
                <li><a href="aturBeritaMasjid.php">Atur berita masjid</a></li>
            </ul>
        </li>
        <li><a class="has-more" href="">Video masjid</a>
            <ul class="ul-secondary">
                <li><a href="tambahVideoMasjid.php">Tambah video masjid</a></li>
                <li><a href="aturVideoMasjid.php">Atur video masjid</a></li>
            </ul>
        </li>
        <li><a href="galeri.php">Galeri</a>
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