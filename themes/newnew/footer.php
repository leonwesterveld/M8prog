<?php wp_footer() ?>
<footer class="footer mt-auto py-3 bg-body-tertiary">
    <div class="container">
        <span class="text-body-secondary">Place footer content here.</span>
    </div>
    <?php if ( is_active_sidebar( 'module8' ) ) : ?>
    <?php dynamic_sidebar( 'module8' ); ?>
    <?php endif; ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>