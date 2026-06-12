<?php

if (!function_exists('build_pagination_links')) {

    function build_pagination_links(array $config = [])
    {
        $basePath     = $config['basePath'] ?? '';
        $currentPage  = (int) ($config['currentPage'] ?? 1);
        $totalPages   = (int) ($config['totalPages'] ?? 1);
        $queryParams  = $config['queryParams'] ?? [];
        $range        = $config['range'] ?? 2;
        $segmentParam = $config['segmentParam'] ?? ''; // e.g., 'category/271' or 'tag/17'

        if ($totalPages <= 1) {
            return '';
        }

        // Build query string for search (only search uses query params now)
        $queryString = '';
        if (!empty($queryParams['search'])) {
            $queryString = '?search=' . urlencode($queryParams['search']);
        }

        // Helper function to build page URL
        // Supports clean URLs: basePath/segmentParam/page/{num}
        function buildPageUrl($basePath, $page, $queryString, $segmentParam = '')
        {
            $url = $basePath;

            // Add segment param (e.g., 'category/271') if present
            if ($segmentParam) {
                $url .= '/' . $segmentParam;
            }

            // Add page number (skip for page 1)
            if ($page > 1) {
                $url .= '/page/' . $page;
            }

            return base_url($url . $queryString);
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
                        href="<?= buildPageUrl($basePath, $currentPage - 1, $queryString, $segmentParam) ?>">
                        &laquo;
                    </a>
                </li>

                <?php if ($start > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?= buildPageUrl($basePath, 1, $queryString, $segmentParam) ?>">1</a>
                    </li>
                    <?php if ($start > 2): ?>
                        <li class="page-item disabled"><span class="page-link">…</span></li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php for ($i = $start; $i <= $end; $i++): ?>
                    <li class="page-item <?= $i === $currentPage ? 'active' : '' ?>">
                        <a class="page-link"
                            href="<?= buildPageUrl($basePath, $i, $queryString, $segmentParam) ?>">
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
                            href="<?= buildPageUrl($basePath, $totalPages, $queryString, $segmentParam) ?>">
                            <?= $totalPages ?>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- Next -->
                <li class="page-item <?= $currentPage >= $totalPages ? 'disabled' : '' ?>">
                    <a class="page-link"
                        href="<?= buildPageUrl($basePath, $currentPage + 1, $queryString, $segmentParam) ?>">
                        &raquo;
                    </a>
                </li>

            </ul>
        </nav>

<?php
        return ob_get_clean();
    }
}
