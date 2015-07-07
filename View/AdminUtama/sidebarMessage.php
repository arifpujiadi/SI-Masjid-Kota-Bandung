<div class="sidebar box">
    <ul class="primary">
        <li>
            <a class="atas" href="tulis.php">Tulis</a>
        </li>
        <li>
            <a class="" href="inbox.php">Inbox</a>
        </li>
        <li>
            <a class="" href="sent.php">Sent</a>
        </li>
    </ul>
</div>

<script>
    $(document).ready(function () {
        $('.sidebar').find('.has-more').on('click', function (e) {
            $(this).parent().find('.ul-secondary').slideToggle();
            $(this).parent().siblings().find('.ul-secondary').slideUp();
            e.preventDefault();
        });
    });
</script>