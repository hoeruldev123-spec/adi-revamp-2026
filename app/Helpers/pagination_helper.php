<?php

if (!function_exists('build_pagination_links')) {

    function build_pagination_links(array $config = [])
    {
        $basePath     = $config['basePath'] ?? '';
        $currentPage  = (int) ($config['currentPage'] ?? 1);
        $totalPages   = (int) ($config['totalPages'] ?? 1);
        $queryParams  = $config['queryParams'] ?? [];
        $range        = $config['range'] ?? 2;

        if ($totalPages <= 1) {
            return '';
        }

        // Build query string (search, category, tag, dll)
        $queryString = '';
        if (!empty($queryParams)) {
            $queryString = '?' . http_build_query(array_filter($queryParams));
        }

        $start = max(1, $currentPage - $range);
        $end   = min($totalPages, $currentPage + $range);

        ob_start();
?>

        <nav aria-label="Pagination">
            <ul class="pagination justify-content-center">

                <!-- Previous -->
                <li class="page-item <?= $currentPage <= 1 ? 'disabled' : '' ?>">
                    <a class="page-link"
                        href="<?= base_url($basePath . '/' . ($currentPage - 1) . $queryString) ?>">
                        &laquo;
                    </a>
                </li>

                <?php if ($start > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?= base_url($basePath . '/1' . $queryString) ?>">1</a>
                    </li>
                    <?php if ($start > 2): ?>
                        <li class="page-item disabled"><span class="page-link">…</span></li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php for ($i = $start; $i <= $end; $i++): ?>
                    <li class="page-item <?= $i === $currentPage ? 'active' : '' ?>">
                        <a class="page-link"
                            href="<?= base_url($basePath . '/' . $i . $queryString) ?>">
                            <?= $i ?>
                        </a>
                    </li>
                <?php endfor; ?>

                <?php if ($end < $totalPages): ?>
                    <?php if ($end < $totalPages - 1): ?>
                        <li class="page-item disabled"><span class="page-link">…</span></li>
                    <?php endif; ?>
                    <li class="page-item">
                        <a class="page-link"
                            href="<?= base_url($basePath . '/' . $totalPages . $queryString) ?>">
                            <?= $totalPages ?>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- Next -->
                <li class="page-item <?= $currentPage >= $totalPages ? 'disabled' : '' ?>">
                    <a class="page-link"
                        href="<?= base_url($basePath . '/' . ($currentPage + 1) . $queryString) ?>">
                        &raquo;
                    </a>
                </li>

            </ul>
        </nav>

<?php
        return ob_get_clean();
    }
}
