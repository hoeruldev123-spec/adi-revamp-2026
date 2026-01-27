<style>
    /* Principal Cards Styling */

    #principal-section {
        background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 100%);
        position: relative;
        overflow: hidden;
    }

    /* Ganti CSS animasi yang lama dengan ini */
    .principal-page {
        display: none;
        opacity: 0;
        transform: translateX(30px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .principal-page.active {
        display: block;
        opacity: 1;
        transform: translateX(0);
    }

    /* Optional: Animasi untuk card saat muncul */
    .principal-page.active .principal-card {
        animation: cardSlideIn 0.6s ease forwards;
        opacity: 0;
        transform: translateX(20px);
    }

    .principal-page.active .principal-card:nth-child(1) {
        animation-delay: 0.1s;
    }

    .principal-page.active .principal-card:nth-child(2) {
        animation-delay: 0.15s;
    }

    .principal-page.active .principal-card:nth-child(3) {
        animation-delay: 0.2s;
    }

    .principal-page.active .principal-card:nth-child(4) {
        animation-delay: 0.25s;
    }

    .principal-page.active .principal-card:nth-child(5) {
        animation-delay: 0.3s;
    }

    .principal-page.active .principal-card:nth-child(6) {
        animation-delay: 0.35s;
    }

    @keyframes cardSlideIn {
        from {
            opacity: 0;
            transform: translateX(20px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .principal-card {
        background: white;
        border: none;
        border-radius: 8px;
        padding: 30px 25px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .principal-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(135deg, #0d6efd, #6610f2);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .principal-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(13, 110, 253, 0.15);
    }

    .principal-card:hover::before {
        transform: scaleX(1);
    }

    .card-header {
        text-align: center;
        border: none;
        background: transparent;
        padding: 0;
    }

    .principal-logo {
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
    }

    .principal-logo img {
        max-height: 80%;
        max-width: 80%;
        object-fit: contain;
        transition: all 0.3s ease;
    }

    .principal-card:hover .principal-logo img {
        transform: scale(1.1);
    }

    .principal-name {
        color: #212529;
        font-size: 1.3rem;
        background: linear-gradient(135deg, #0d6efd, #6610f2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .principal-description {
        line-height: 1.6;
        font-size: 0.95rem;
        text-align: center;
    }

    .pagination {
        margin-bottom: 0;
    }

    .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }

    .page-link {
        color: #007bff;
        border: 1px solid #dee2e6;
        padding: 0.5rem 0.75rem;
        margin: 0 2px;
        border-radius: 0.25rem;
        cursor: pointer;
    }

    .page-link:hover {
        color: #0056b3;
        background-color: #e9ecef;
        border-color: #dee2e6;
    }

    .page-item.disabled .page-link {
        color: #6c757d;
        pointer-events: none;
        background-color: #fff;
        border-color: #dee2e6;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .logo-carousel-item img {
            max-height: 50px;
            max-width: 120px;
        }

        .carousel-gradient {
            width: 50px;
        }
    }

    @media (max-width: 768px) {
        .logo-carousel-track {
            gap: 40px;
            animation-duration: 30s;
        }

        .logo-carousel-item img {
            max-height: 40px;
            max-width: 100px;
        }

        .carousel-gradient {
            width: 30px;
        }

        @keyframes scrollLogos {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-50%));
            }
        }
    }
</style>

<section id="principal-section" class="py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h6 class="text-uppercase text-primary mb-2">Principal</h6>
                <h2 class="mb-3">Driven by Strong Partnerships</h2>
                <p class="mb-5">
                    Our collaboration with top principals drives innovation and growth, empowering businesses to move forward with confidence.
                </p>
            </div>
        </div>

        <div class="principal-container">
            <div id="principalCards">
                <div class="principal-page active">
                    <div class="row g-4">
                        <!-- Qlik Card -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-Qlik.png') ?>" alt="Qlik" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        Empowering data-driven insights through advanced analytics and intuitive visualization.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Confluent Card -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-Confluent.png') ?>" alt="Confluent" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        Real-time data streaming powered by Apache Kafka for smarter business operations.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Denodo Card -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-Denodo.png') ?>" alt="Denodo" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        Seamless data virtualization enabling unified access across multiple systems and sources.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Snowflake Card -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-Snowflake.png') ?>" alt="Snowflake" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        Scalable cloud data platform for high-performance analytics and AI innovation.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Dataiku Card -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-Dataiku.png') ?>" alt="Dataiku" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        Collaborative AI platform to build, deploy, and manage enterprise machine learning.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Cloudera Card -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-Cloudera.png') ?>" alt="Cloudera" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        Hybrid data platform integrating analytics, AI, and data management at scale.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="principal-page">
                    <div class="row g-4">
                        <!-- New Card 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-Tableau.png') ?>" alt="New Principal 1" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        Transform raw data into actionable insights with intuitive visual analytics and interactive dashboards.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- New Card 2 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-YugabyteDB.png') ?>" alt="New Principal 2" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        Distributed SQL database for cloud-native applications, delivering scalability, resilience, and PostgreSQL compatibility.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Tambahkan 4 card baru lainnya di sini -->
                        <!-- New Card 3 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-Hasura.png') ?>" alt="New Principal 3" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        Instant GraphQL APIs that accelerate development by connecting directly to your databases and services.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- New Card 4 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-ClickHouse.png') ?>" alt="New Principal 4" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        Real-time analytics database that delivers lightning-fast queries on massive volumes of structured data.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- New Card 5 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-Alibaba-Cloud.png') ?>" alt="New Principal 5" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        Comprehensive cloud computing services driving digital transformation across Asia and global markets.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- New Card 6 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-redis.png') ?>" alt="New Principal 6" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        In-memory data structure store enabling high-performance caching, messaging, and real-time applications.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Page 3 (Last 6 cards) -->
                <div class="principal-page">
                    <div class="row g-4">
                        <!-- New Card 7 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-Dell.png') ?>" alt="New Principal 7" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        End-to-end IT infrastructure solutions that power modern enterprises with reliable hardware and software.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- New Card 8 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-AWS.png') ?>" alt="New Principal 8" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        World's most comprehensive and broadly adopted cloud platform for scalable computing, storage, and AI services.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- New Card 9 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="principal-card h-100">
                                <div class="card-header mb-3">
                                    <div class="principal-logo">
                                        <img src="<?= base_url('assets/images/principals/Logo-Helett Packard.png') ?>" alt="New Principal 10" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="principal-description text-muted">
                                        Hybrid cloud solutions and intelligent edge technologies that accelerate data-first modernization.
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- Pagination Controls -->
            <div class="row mt-5">
                <div class="col-12">
                    <nav aria-label="Principal pagination">
                        <ul class="pagination justify-content-center" id="principalPagination">
                            <!-- Pagination buttons will be generated dynamically -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const principalPages = document.querySelectorAll('.principal-page');
        const paginationContainer = document.getElementById('principalPagination');
        const totalPages = principalPages.length;

        // Generate pagination buttons
        function generatePagination() {
            paginationContainer.innerHTML = '';

            // Previous button
            const prevLi = document.createElement('li');
            prevLi.className = 'page-item';
            prevLi.innerHTML = '<a class="page-link" href="#" aria-label="Previous" data-page="prev"><span aria-hidden="true">&laquo;</span></a>';
            paginationContainer.appendChild(prevLi);

            // Page number buttons
            for (let i = 0; i < totalPages; i++) {
                const li = document.createElement('li');
                li.className = `page-item ${i === 0 ? 'active' : ''}`;
                li.innerHTML = `<a class="page-link" href="#" data-page="${i}">${i + 1}</a>`;
                paginationContainer.appendChild(li);
            }

            // Next button
            const nextLi = document.createElement('li');
            nextLi.className = 'page-item';
            nextLi.innerHTML = '<a class="page-link" href="#" aria-label="Next" data-page="next"><span aria-hidden="true">&raquo;</span></a>';
            paginationContainer.appendChild(nextLi);

            // Add event listeners
            document.querySelectorAll('.page-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const page = this.getAttribute('data-page');
                    changePage(page);
                });
            });
        }

        // Change page function
        // Ganti hanya bagian animasi dalam fungsi changePage():
        function changePage(page) {
            const currentActive = document.querySelector('.principal-page.active');
            const currentPageIndex = Array.from(principalPages).indexOf(currentActive);
            let newPageIndex;

            if (page === 'prev') {
                newPageIndex = Math.max(0, currentPageIndex - 1);
            } else if (page === 'next') {
                newPageIndex = Math.min(totalPages - 1, currentPageIndex + 1);
            } else {
                newPageIndex = parseInt(page);
            }

            // Jika sudah di halaman yang sama, tidak perlu lakukan apa-apa
            if (newPageIndex === currentPageIndex) return;

            // Tentukan arah animasi (untuk efek slide horizontal)
            const isGoingForward = newPageIndex > currentPageIndex;

            // Matikan event listener sementara selama transisi
            document.querySelectorAll('.page-link').forEach(link => {
                link.style.pointerEvents = 'none';
            });

            // 1. Fade out halaman aktif saat ini dengan slide horizontal
            currentActive.style.opacity = '0';
            currentActive.style.transform = isGoingForward ? 'translateX(-30px)' : 'translateX(30px)';

            setTimeout(() => {
                // 2. Sembunyikan halaman lama
                currentActive.classList.remove('active');
                currentActive.style.opacity = '';
                currentActive.style.transform = '';

                // 3. Tampilkan halaman baru dengan posisi awal
                const newPage = principalPages[newPageIndex];
                newPage.classList.add('active');
                newPage.style.opacity = '0';
                newPage.style.transform = isGoingForward ? 'translateX(30px)' : 'translateX(-30px)';

                // Force reflow untuk memastikan transisi berjalan
                newPage.offsetHeight;

                // 4. Animasikan halaman baru masuk
                setTimeout(() => {
                    newPage.style.opacity = '1';
                    newPage.style.transform = 'translateX(0)';

                    // Aktifkan kembali event listener setelah transisi selesai
                    setTimeout(() => {
                        document.querySelectorAll('.page-link').forEach(link => {
                            link.style.pointerEvents = '';
                        });
                    }, 300);

                }, 50);

                // Update pagination buttons
                document.querySelectorAll('#principalPagination .page-item').forEach((item, index) => {
                    if (index === 0) return; // Skip prev button

                    if (index === newPageIndex + 1) { // +1 for prev button
                        item.classList.add('active');
                    } else {
                        item.classList.remove('active');
                    }
                });

                // Update prev/next button states
                const prevBtn = paginationContainer.querySelector('.page-item:first-child .page-link');
                const nextBtn = paginationContainer.querySelector('.page-item:last-child .page-link');

                if (newPageIndex === 0) {
                    prevBtn.parentElement.classList.add('disabled');
                } else {
                    prevBtn.parentElement.classList.remove('disabled');
                }

                if (newPageIndex === totalPages - 1) {
                    nextBtn.parentElement.classList.add('disabled');
                } else {
                    nextBtn.parentElement.classList.remove('disabled');
                }

            }, 300); // Tunggu hingga slide out selesai
        }

        // Initialize pagination
        generatePagination();

        // Show first page by default
        if (principalPages.length > 0) {
            principalPages[0].classList.add('active');
        }
    });
</script>