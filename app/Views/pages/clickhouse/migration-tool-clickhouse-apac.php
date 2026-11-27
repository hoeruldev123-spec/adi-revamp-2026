<?php

$lang = (isset($_GET['lang']) && $_GET['lang'] === 'id') ? 'id' : 'en';

$siteUrl = 'https://alldataint.com';
$logoUrl = 'https://alldataint.com/assets/images/logo_coloured.png';
$clickhouseLogoUrl = base_url('assets/images/principals/ClickHouse_Logo.webp');
$contactEmail = 'info@alldataint.com';
$contactUrl = 'mailto:' . $contactEmail . '?subject=ClickHouse%20Migration%20Assessment';

if (!function_exists('e')) {
    function e(string $value): string {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}

/**
 * Escape text and highlight every [bracketed] wording with a yellow marker.
 */
if (!function_exists('highlightBrackets')) {
    function highlightBrackets(string $value): string {
        $escaped = e($value);
        return (string) preg_replace(
            '/(\[[^\]]+\])/',
            '<mark class="rounded bg-yellow-300 px-1 py-0.5 font-semibold text-slate-900">$1</mark>',
            $escaped
        );
    }
}

$copy = [
    'en' => [
        'pageTitle' => 'The data warehouse migration nobody wants to start | All Data International',
        'pageDescription' => 'How we move BigQuery, Oracle and PostgreSQL warehouses onto ClickHouse Cloud without losing a number, why the AI does only half the work, and why the destination is not just a faster warehouse.',
        'navHomeAria' => 'All Data International home',
        'navMainAria' => 'Main navigation',
        'navOpenAria' => 'Open navigation',
        'navLangAria' => 'Select language',
        'navChallenges' => 'Why migrations stall',
        'navApproach' => 'What it takes',
        'navProcess' => 'Where the AI works',
        'navClickhouse' => 'Why ClickHouse Cloud',
        'ctaBook' => 'Book an assessment',
        'heroBadge' => 'Migration Tool · AI-assisted migration to ClickHouse Cloud',
        'heroH1Lead' => 'The data warehouse migration',
        'heroH1Highlight' => 'nobody wants to start',
        'heroSub' => 'How we move BigQuery, Oracle and PostgreSQL warehouses onto ClickHouse Cloud without losing a number, why the AI does only half the work, and why the destination is not just a faster warehouse.',
        'heroCtaSecondary' => 'Read the full context',
        'heroTicks' => [
            'BigQuery, Oracle & PostgreSQL',
            'Engineer-approved steps',
            'Reconciled to the cent',
        ],
        'workbenchTitle' => 'ClickHouse Cloud Migration Workbench',
        'workbenchAlt' => 'ClickHouse Migration Tools APAC',
        'storyP1Before' => 'It is the second week of the month and the finance report is still running. It was built eight years ago on Oracle by a team that has mostly moved on. The PL/SQL that produces it runs to several hundred lines, and the one engineer who still understands it has asked, politely, not to be the person who changes it. Everyone agrees the warehouse should move. The project has been in the plan for two years. The reason it keeps slipping is a single sentence that comes up in every steering meeting: ',
        'storyP1Strong' => 'what if the numbers don’t match?',
        'storyP2' => 'We have had a version of this conversation with data leaders at banks, insurers, telecoms operators and state-owned enterprises across Indonesia. What has changed in the last year is the pressure behind it. The same leaders are now being asked to put AI on top of their data: agents that answer questions for the business, models that need fresh features, customer-facing products that query live. A warehouse built for an overnight batch cannot do that, and no amount of tuning will make it. So the question is no longer whether to move, but where to, and the answer should not be a slightly newer version of the same thing.',
        'storyCallout' => 'This post is for the head of data or platform lead who recognises that position. In about eight minutes it covers why these migrations stall, what it takes to finish one, where an AI-assisted tool helps and where it does not, and why we chose ClickHouse Cloud, a platform built for real-time and agent workloads, as the place to land.',
        'challengesKicker' => 'The core friction',
        'challengesTitle' => 'Why migrations stall',
        'challengesIntro' => 'The technical work of a migration is well understood. What stops it is a set of risks that the people who would have to approve it are right to worry about.',
        'challengesCardKicker' => 'Why teams hesitate',
        'challengesCardText' => 'None of these is a reason to stay. All of them are reasons to run the migration differently, and to be deliberate about what you are migrating to.',
        'challenges' => [
            [
                'number' => '01',
                'title' => 'The numbers might not match.',
                'description' => 'A regulatory return, a month-end close or a commission payout has to reconcile to the cent. A migration that is 99.9% right is a migration that failed, and proving the last 0.1% by hand takes longer than the migration itself.',
                'tag' => 'Reconciliation risk',
            ],
            [
                'number' => '02',
                'title' => 'The logic lives in code nobody owns.',
                'description' => 'Business rules accumulated in stored procedures over a decade. They are undocumented, they work, and rewriting them means first working out what they do.',
                'tag' => 'Legacy PL/SQL & procedures',
            ],
            [
                'number' => '03',
                'title' => 'The bill grows faster than the value.',
                'description' => 'Licences, per-query charges and compute scale with data volume. Dashboards that took seconds now take minutes, so people stop opening them, so the platform costs more and delivers less.',
                'tag' => 'Unpredictable cost & latency',
            ],
            [
                'number' => '04',
                'title' => 'The team knows the old platform, not the new one.',
                'description' => 'A migration is also a change in skills. If the engineers who will run the new warehouse have never used it, the risk does not end at cut-over.',
                'tag' => 'Team readiness & ownership',
            ],
            [
                'number' => '05',
                'title' => 'Residency and cloud choice are already decided.',
                'description' => 'In regulated sectors, where the data can live and which cloud it runs on are usually settled before the database is. Any destination has to fit those constraints, not argue with them.',
                'tag' => 'Compliance & cloud lock-in',
            ],
            [
                'number' => '06',
                'title' => 'The business is already asking for AI on this data.',
                'description' => 'Agents, assistants and customer-facing analytics all need answers in seconds on data that is minutes old. If the destination cannot serve that, the migration solves last year’s problem and leaves next year’s untouched.',
                'tag' => 'Real-time & AI readiness',
            ],
        ],
        'approachKicker' => 'Our method',
        'approachTitle' => 'What it takes to finish one',
        'approachIntro' => 'AI-assisted migration tools are not rare in 2026, and ours is not the point of this post. What finishes a migration is the method around the tool. This is ours.',
        'approachCardKicker' => 'How we balance AI & engineering',
        'approachCardText' => 'The agent removes the weeks of mechanical conversion; the engineer carries the judgement about which tables go first, how to treat a procedure with side effects, and when the validation is good enough to cut over.',
        'approach' => [
            [
                'step' => '01',
                'title' => 'Start with an assessment, not a quote',
                'description' => 'Before anything moves, we spend one day with your team mapping the warehouse: which tables and reports matter, which procedures carry business logic, how fresh each dataset needs to be, and which workloads fit ClickHouse well today and which should wait. The output is a written plan with a migration order, not a sales proposal. Sometimes the answer is that only part of the warehouse should move first, and we say so.',
                'tag' => 'Written migration plan',
            ],
            [
                'step' => '02',
                'title' => 'Let the agent do the repetitive work, with an engineer approving every step',
                'description' => 'Our migration tool is an AI agent with a dashboard on top. It reads the source schema, proposes ClickHouse tables, converts stored procedures, rewrites queries and runs the validation and benchmarks. It does not create anything without approval, it explains each decision, and it flags what it is unsure about rather than guessing. One of our engineers reviews every proposal before it is applied. The agent removes the weeks of mechanical conversion; the engineer carries the judgement about which tables go first, how to treat a procedure with side effects, and when the validation is good enough to cut over.',
                'tag' => 'Human approval at every step',
            ],
            [
                'step' => '03',
                'title' => 'Validate the way an auditor would',
                'description' => 'Row counts are the first check, not the last. For every migrated table the tool compares source and target counts and stops on any mismatch rather than quietly re-running, because a partial re-insert is how duplicates get in. Once parity passes, it spot-checks money columns and JSON keys with sums and counts on both sides, which is the question a DBA asks next. For every converted procedure we run the original and the new logic on the same data and compare the output row by row. In our demo, the converted PL/SQL produced the same rows and the same totals to the cent.',
                'image' => '/assets/images/clickhouse-migration-tools-2.webp',
                'image_caption' => 'The Validation tab after an Oracle run: 13 of 13 tables matched, 1,126,035 rows. On the right, the agent’s own rules for the step, including stop-on-mismatch and the sum and count spot-checks.',
                'tag' => 'Evidence-based validation',
            ],
            [
                'step' => '04',
                'title' => 'Run both systems until you trust the new one',
                'description' => 'We keep the old warehouse live and running in parallel for an agreed period, with the same reports produced from both. Cut-over happens when your finance and risk teams have signed off on matching output, not when the data finished copying.',
                'tag' => 'Parallel run & sign-off',
            ],
            [
                'step' => '05',
                'title' => 'Stay after go-live',
                'description' => 'All Data International has run data platforms for Indonesian banks, insurers, government and other state-owned enterprises for more than a decade, in Bahasa Indonesia and in your time zone, under ISO 27001 controls. We offer managed services and training alongside the migration, so the team that inherits the new warehouse is not learning it alone. We also work across Snowflake, Cloudera, Confluent, Denodo, Qlik and AWS as well as ClickHouse, which is why we can say which workloads belong on which platform without a vested interest in the answer.',
                'tag' => 'Managed services & training',
            ],
        ],
        'processKicker' => 'Seven repeatable stages',
        'processTitle' => 'Where the AI does the work',
        'processIntro' => 'For readers who want the detail, the tool runs the same seven stages for BigQuery, Oracle and PostgreSQL. The agent’s reasoning for each step sits alongside, so every decision is on the record.',
        'processCaption' => 'The seven stages, with the Oracle TPC-H demo at step 3. The agent’s reasoning for each step sits alongside, so every decision is on the record.',
        'stages' => [
            [
                'Discover and design.',
                'The agent reads tables, columns and constraints and proposes ClickHouse tables with data types and sorting keys. Oracle NUMBER precision, BigQuery nested and repeated fields, and PostgreSQL JSON, enums and arrays each get explicit handling; PostgreSQL JSON maps to ClickHouse’s native JSON type (production ready from 25.3).',
            ],
            [
                'Migrate data.',
                'Data is copied with live progress per table. In our Oracle demo, 13 tables and 1,126,035 rows completed in 1 minute 12 seconds, about 15,600 rows per second, on a [service size] ClickHouse Cloud service.',
            ],
            [
                'Validate.',
                'Row counts and key aggregates are compared table by table.',
            ],
            [
                'Convert stored procedures.',
                'ClickHouse has no stored procedures, so procedural logic is re-expressed as materialized views that keep results current on each insert, plus scheduled queries where a view does not fit. The result is business logic that lived in code becoming visible SQL anyone on the team can read.',
            ],
            [
                'Rewrite queries.',
                'Reports and analytical queries are translated to ClickHouse SQL, with dialect differences mapped and uncertain cases flagged for review.',
            ],
            [
                'Benchmark.',
                'The same queries run on both systems. In our demo of [N] reporting queries on [dataset], ClickHouse Cloud returned results [X] times faster on average over [N] runs on a [service size] service against [source configuration].',
            ],
            [
                'Optimise and summarise.',
                'The slowest queries are tuned and the agent produces a summary of what moved, what was checked and how it performs.',
            ],
        ],
        'resultKicker' => 'The result in ClickHouse Cloud',
        'resultTitle' => 'Business logic becomes visible SQL anyone on the team can read.',
        'resultTextBefore' => 'The migrated tables sit alongside ',
        'resultTextAfter' => ', a materialized view that now does the work of a stored procedure.',
        'resultAlt' => 'The result in ClickHouse Cloud: the migrated tables alongside daily_order_summary, a materialized view that now does the work of a stored procedure.',
        'sourcesKicker' => 'Supported source warehouses',
        'sourcesTitle' => 'BigQuery, Oracle and PostgreSQL',
        'sourcesIntro' => 'ClickHouse publishes its own migration guides for BigQuery and PostgreSQL; our tool automates that path and extends it to Oracle, where no official guide exists.',
        'sourcesCol1' => 'Source',
        'sourcesCol2' => 'What moves',
        'sourcesCol3' => 'Explicit source-specific handling',
        'sources' => [
            [
                'Oracle',
                'Tables, columns, constraints, reports, analytical queries & stored procedures (PL/SQL)',
                'Oracle NUMBER precision gets explicit handling; stored procedures are re-expressed as materialized views or scheduled queries. While no official ClickHouse guide exists for Oracle, our tool automates this path.',
            ],
            [
                'BigQuery',
                'Tables, columns, constraints, reports & analytical queries',
                'BigQuery nested and repeated fields get explicit handling alongside dialect mapping, automating ClickHouse’s official migration path.',
            ],
            [
                'PostgreSQL',
                'Tables, columns, constraints, reports & analytical queries',
                'PostgreSQL JSON, enums and arrays get explicit handling; PostgreSQL JSON maps to ClickHouse’s native JSON type (production ready from 25.3).',
            ],
        ],
        'clickhouseKicker' => 'Why the destination matters',
        'clickhouseTitleLead' => 'Why the destination is ClickHouse Cloud, ',
        'clickhouseTitleHighlight' => 'and not another warehouse',
        'clickhouseIntro1' => 'Every data warehouse you are likely to be offered was designed around the same idea: data lands overnight, reports run in the morning, and a day of lag is fine because nothing downstream needs anything faster. That idea has had a good thirty years. It is now the thing holding you back, and moving to a newer warehouse that shares it buys a cheaper bill and the same ceiling.',
        'clickhouseIntro2' => 'ClickHouse started from the opposite premise. It was built in 2009 to answer questions on billions of events while they were still arriving, open-sourced in 2016, and is now the engine behind real-time products at companies such as Sony, Tesla, Lyft, Instacart and Anthropic. It was never designed as a warehouse that got faster; it was designed as the layer that applications, dashboards and now agents query directly, on data that is seconds old. The warehouse reports you migrate first run on it comfortably. The point is what the same platform lets you do next.',
        'platformBenefits' => [
            [
                'title' => 'Fresh by construction.',
                'description' => 'ClickHouse sorts and compresses data as it is inserted and keeps pre-aggregated summaries current through materialized views, so a query reads prepared data rather than waiting for a refresh cycle. The overnight ETL job and the procedure that rebuilt the summary table stop being necessary. The same report that ran at 6 a.m. can run at 6:01 with the morning’s transactions in it, and a fraud or risk team can look at today rather than yesterday.',
            ],
            [
                'title' => 'Built for machine-speed demand.',
                'description' => 'When the thing running the query is an agent or a customer-facing product, query volume stops looking like a few dozen analysts and starts looking like thousands of requests an hour, all expecting current answers. ClickHouse was built for that concurrency and prices on compute and storage you can size, rather than per scan or per credit. ClickHouse’s own CostBench work (September 2026) measures exactly this pattern, continuous ingest with continuous queries, and is the evidence we point to; the honest version of the claim is that it holds for continuous real-time workloads, which is what you are migrating toward. InMobi, the Bangalore-based ad platform, moved publisher reporting to ClickHouse in 2026 and saw P99 latency fall from over a minute to under three seconds while monthly spend fell from about USD 40,000 to 8,000. Your numbers will differ; we give an estimate after the assessment.',
            ],
            [
                'title' => 'Agent-ready, not agent-washed.',
                'description' => 'Because the engine serves fresh data at high concurrency, the same ClickHouse Cloud service that holds the migrated warehouse can serve agents without a second copy of the data. ClickHouse Agents (in public beta) lets your teams ask questions of live data through chat and build reusable agents with governed access, and the ClickHouse MCP server lets the agent tools you already use query it directly. This is the part a warehouse built for batch cannot bolt on, because the latency and cost model underneath were never designed for a machine asking questions all day.',
            ],
            [
                'title' => 'Open, and in your cloud.',
                'description' => 'ClickHouse is Apache 2.0 licensed, speaks standard SQL and reads from Iceberg, Delta Lake and the catalogues around them, so it sits alongside what you already have rather than demanding a big-bang replacement. ClickHouse Cloud runs on AWS, Google Cloud and Microsoft Azure, with a bring-your-own-cloud option that keeps the data plane in your own account. For Indonesian institutions with residency requirements and a cloud already chosen, that is usually the difference between a destination that is possible and one that is not.',
            ],
        ],
        'caveatTitle' => 'One caveat, because your DBAs will raise it anyway.',
        'caveatText' => 'ClickHouse is not a feature-for-feature copy of BigQuery, Oracle or a general-purpose warehouse. There are no stored procedures, and transactional patterns or highly normalised schemas with wide joins need redesign rather than lift-and-shift. We treat that as a feature of the assessment, not a flaw in the destination: the workloads that fit are the ones where real-time, concurrency and cost matter, which is where the value is. ClickHouse publishes its own migration guides for BigQuery and PostgreSQL; our tool automates that path and extends it to Oracle, where no official guide exists.',
        'summaryKicker' => 'Summary',
        'summaryTitle' => 'What to take away',
        'summaryText' => 'Migrations stall on risk, not on effort. The risks are real: numbers that must reconcile, logic nobody owns, a team that knows the old platform, residency rules that cannot bend. An AI agent removes most of the mechanical work, and that matters, but what gets a migration signed off is an assessment that picks the right workloads, validation an auditor would accept, a parallel run until finance trusts the output, and a partner who is still there after go-live. And what makes it worth doing at all is landing somewhere built for what the business will ask of the data next, rather than a tidier version of where you are now.',
        'summaryLink' => 'Explore our technology partners',
        'ctaKicker' => 'Next step',
        'ctaTitle' => 'Start with a One-Day Assessment.',
        'ctaText' => 'If you have a warehouse that has been “next year’s project” for more than one year, the first step is a one-day assessment of your pipelines and warehouse. You get a written migration plan, and we run the tool against a copy of your own schema so you can see the proposed ClickHouse design before committing to anything.',
        'footerTagline' => 'Driving Organizations into Smart Decisions with AI',
        'footerRights' => 'All rights reserved.',
    ],
    'id' => [
        'pageTitle' => 'Migrasi data warehouse yang enggan dimulai siapa pun | All Data International',
        'pageDescription' => 'Bagaimana kami memindahkan data warehouse BigQuery, Oracle, dan PostgreSQL ke ClickHouse Cloud tanpa meleset satu angka pun, mengapa AI hanya mengerjakan separuh pekerjaan, dan mengapa tujuannya bukan sekadar warehouse yang lebih cepat.',
        'navHomeAria' => 'Beranda All Data International',
        'navMainAria' => 'Navigasi utama',
        'navOpenAria' => 'Buka navigasi',
        'navLangAria' => 'Pilih bahasa',
        'navChallenges' => 'Mengapa migrasi tertunda',
        'navApproach' => 'Pendekatan kami',
        'navProcess' => 'Peran AI',
        'navClickhouse' => 'Mengapa ClickHouse Cloud',
        'ctaBook' => 'Jadwalkan asesmen',
        'heroBadge' => 'Migration Tool · Migrasi ke ClickHouse Cloud dengan bantuan AI',
        'heroH1Lead' => 'Migrasi data warehouse',
        'heroH1Highlight' => 'yang enggan dimulai siapa pun',
        'heroSub' => 'Bagaimana kami memindahkan data warehouse BigQuery, Oracle, dan PostgreSQL ke ClickHouse Cloud tanpa meleset satu angka pun, mengapa AI hanya mengerjakan separuh pekerjaan, dan mengapa tujuannya bukan sekadar warehouse yang lebih cepat.',
        'heroCtaSecondary' => 'Baca konteks lengkapnya',
        'heroTicks' => [
            'BigQuery, Oracle & PostgreSQL',
            'Setiap langkah disetujui engineer',
            'Terekonsiliasi hingga ke sen',
        ],
        'workbenchTitle' => 'ClickHouse Cloud Migration Workbench',
        'workbenchAlt' => 'ClickHouse Migration Tools APAC',
        'storyP1Before' => 'Sudah minggu kedua bulan berjalan dan laporan keuangan masih saja berjalan. Laporan itu dibangun delapan tahun lalu di Oracle oleh tim yang sebagian besar sudah pindah. Kode PL/SQL yang menghasilkannya mencapai ratusan baris, dan satu-satunya engineer yang masih memahaminya meminta dengan sopan agar bukan dia yang mengubahnya. Semua pihak sepakat data warehouse harus dipindahkan. Proyeknya sudah masuk rencana selama dua tahun. Alasan proyek ini terus tertunda adalah satu kalimat yang selalu muncul di setiap rapat pengarah: ',
        'storyP1Strong' => 'bagaimana jika angkanya tidak cocok?',
        'storyP2' => 'Kami sering berdiskusi dengan para pimpinan data di bank, perusahaan asuransi, operator telekomunikasi, dan BUMN di seluruh Indonesia tentang kondisi serupa. Yang berubah dalam setahun terakhir adalah tekanannya. Para pimpinan yang sama kini diminta menghadirkan AI di atas data mereka: agen yang menjawab pertanyaan bisnis, model yang membutuhkan fitur data terbaru, serta produk untuk pelanggan yang melakukan kueri secara langsung. Warehouse yang dibangun untuk pemrosesan batch semalaman tidak mampu melakukannya, dan penyetelan sekuat apa pun tidak akan mengubahnya. Jadi pertanyaannya bukan lagi apakah harus pindah, melainkan pindah ke mana dan jawabannya tidak seharusnya sekadar versi yang sedikit lebih baru dari sistem lama.',
        'storyCallout' => 'Tulisan ini ditujukan bagi head of data atau platform lead yang mengalami situasi tersebut. Dalam sekitar delapan menit, Anda akan memahami mengapa migrasi semacam ini sering tertunda, apa yang dibutuhkan untuk menyelesaikannya hingga tuntas, di mana alat berbantuan AI membantu dan di mana batasannya, serta mengapa kami memilih ClickHouse Cloud platform yang dibangun untuk beban kerja real-time dan agen AI sebagai tujuan migrasi.',
        'challengesKicker' => 'Hambatan utama',
        'challengesTitle' => 'Mengapa migrasi tertunda',
        'challengesIntro' => 'Pekerjaan teknis dalam sebuah migrasi sudah dipahami dengan baik. Yang menghentikannya adalah serangkaian risiko yang memang wajar dikhawatirkan oleh para pengambil keputusan yang harus menyetujuinya.',
        'challengesCardKicker' => 'Mengapa tim ragu melangkah',
        'challengesCardText' => 'Tak satu pun dari hal ini menjadi alasan untuk bertahan di sistem lama. Semuanya justru menjadi alasan untuk menjalankan migrasi dengan cara berbeda, dan menentukan tujuan migrasi secara cermat.',
        'challenges' => [
            [
                'number' => '01',
                'title' => 'Angkanya berisiko tidak cocok.',
                'description' => 'Laporan regulator, tutup buku akhir bulan, atau pembayaran komisi harus terekonsiliasi hingga ke sen. Migrasi yang benar 99,9% tetap berarti migrasi yang gagal, dan membuktikan 0,1% sisanya secara manual memakan waktu lebih lama daripada migrasinya sendiri.',
                'tag' => 'Risiko rekonsiliasi',
            ],
            [
                'number' => '02',
                'title' => 'Logika bisnis terjebak di kode tanpa pemilik.',
                'description' => 'Aturan bisnis menumpuk di dalam stored procedure selama satu dekade. Kode tersebut tidak terdokumentasi tetapi berjalan, sehingga menulis ulangnya berarti harus membedah terlebih dahulu apa yang sebenarnya dilakukannya.',
                'tag' => 'PL/SQL & prosedur lawas',
            ],
            [
                'number' => '03',
                'title' => 'Biaya membengkak lebih cepat daripada nilai bisnis.',
                'description' => 'Lisensi, biaya per kueri, dan komputasi terus naik seiring pertumbuhan volume data. Dasbor yang dulunya terbuka dalam hitungan detik kini memakan waktu bermenit-menit, sehingga orang berhenti membukanya platform menjadi makin mahal namun manfaatnya makin kecil.',
                'tag' => 'Biaya & latensi tak terduga',
            ],
            [
                'number' => '04',
                'title' => 'Tim menguasai platform lama, bukan yang baru.',
                'description' => 'Migrasi juga berarti perubahan keahlian. Jika para engineer yang akan mengoperasikan warehouse baru belum pernah menggunakannya, risiko tidak berakhir saat cut-over.',
                'tag' => 'Kesiapan & kepemilikan tim',
            ],
            [
                'number' => '05',
                'title' => 'Residensi data dan pilihan cloud sudah ditetapkan.',
                'description' => 'Di sektor teregulasi, lokasi penyimpanan data dan penyedia cloud biasanya sudah diputuskan sebelum pemilihan basis data. Platform tujuan harus mengikuti batasan tersebut, bukan menentangnya.',
                'tag' => 'Kepatuhan & keterikatan cloud',
            ],
            [
                'number' => '06',
                'title' => 'Bisnis sudah menuntut AI di atas data ini.',
                'description' => 'Agen AI, asisten cerdas, dan analitik pelanggan membutuhkan jawaban dalam hitungan detik dari data yang baru berusia beberapa menit. Jika platform tujuan tidak mampu menyajikannya, migrasi hanya menyelesaikan masalah tahun lalu tanpa menyentuh kebutuhan tahun depan.',
                'tag' => 'Kesiapan real-time & AI',
            ],
        ],
        'approachKicker' => 'Metode kami',
        'approachTitle' => 'Apa yang dibutuhkan untuk menuntaskannya',
        'approachIntro' => 'Alat migrasi berbantuan AI bukanlah hal langka di tahun 2026, dan bukan alatnya yang menjadi inti tulisan ini. Yang menuntaskan migrasi adalah metode di sekitar alat tersebut. Inilah metode kami.',
        'approachCardKicker' => 'Menyeimbangkan AI & rekayasa',
        'approachCardText' => 'Agen AI memangkas berminggu-minggu pekerjaan konversi mekanis; sementara engineer memegang kendali atas tabel mana yang dipindahkan terlebih dahulu, bagaimana menangani prosedur dengan efek samping, dan kapan validasi dinilai cukup kuat untuk cut-over.',
        'approach' => [
            [
                'step' => '01',
                'title' => 'Mulai dengan asesmen, bukan penawaran harga',
                'description' => 'Sebelum apa pun dipindahkan, kami meluangkan satu hari bersama tim Anda untuk memetakan warehouse: tabel dan laporan mana yang kritikal, prosedur mana yang menyimpan logika bisnis, seberapa segar setiap dataset harus tersedia, serta beban kerja mana yang cocok di ClickHouse saat ini dan mana yang sebaiknya menunggu. Hasilnya adalah rencana tertulis lengkap dengan urutan migrasi, bukan proposal penjualan. Terkadang keputusannya adalah hanya memindahkan sebagian warehouse terlebih dahulu, dan kami menyampaikannya apa adanya.',
                'tag' => 'Rencana migrasi tertulis',
            ],
            [
                'step' => '02',
                'title' => 'Biarkan agen menangani pekerjaan repetitif, dengan persetujuan engineer di setiap langkah',
                'description' => 'Alat migrasi kami adalah agen AI dengan dasbor pemantauan di atasnya. Agen ini membaca skema sumber, mengusulkan struktur tabel ClickHouse, mengonversi stored procedure, menulis ulang kueri, serta menjalankan validasi dan benchmark. Agen tidak membuat perubahan apa pun tanpa persetujuan, menjelaskan setiap keputusannya, dan menandai bagian yang meragukan alih-alih menebak. Engineer kami meninjau setiap usulan sebelum diterapkan. Agen memangkas berminggu-minggu konversi mekanis; engineer mengambil keputusan strategis mengenai urutan tabel, penanganan prosedur dengan efek samping, serta kelayakan validasi sebelum cut-over.',
                'tag' => 'Persetujuan manusia di tiap langkah',
            ],
            [
                'step' => '03',
                'title' => 'Validasi dengan ketelitian seorang auditor',
                'description' => 'Jumlah baris hanyalah pemeriksaan pertama, bukan yang terakhir. Untuk setiap tabel yang dimigrasikan, alat ini membandingkan jumlah di sumber dan target serta langsung berhenti jika ada ketidaksesuaian, bukan diam-diam mengulang proses karena penyisipan ulang parsial sering memicu duplikasi data. Setelah paritas jumlah lolos, sistem melakukan uji petik pada kolom nominal uang dan kunci JSON dengan menjumlahkan serta menghitung di kedua sisi, hal yang selalu ditanyakan oleh seorang DBA. Untuk setiap prosedur yang dikonversi, kami menjalankan logika lama dan baru pada data yang sama dan membandingkan hasilnya baris demi baris. Dalam demo kami, PL/SQL yang dikonversi menghasilkan baris dan total nilai yang identik hingga ke sen.',
                'image' => '/assets/images/clickhouse-migration-tools-2.webp',
                'image_caption' => 'Tab Validasi setelah eksekusi Oracle: 13 dari 13 tabel cocok, total 1.126.035 baris. Di sisi kanan tampak aturan agen untuk langkah tersebut, termasuk berhenti saat terjadi ketidakcocokan serta uji petik sum dan count.',
                'tag' => 'Validasi berbasis bukti',
            ],
            [
                'step' => '04',
                'title' => 'Jalankan kedua sistem secara paralel hingga Anda yakin',
                'description' => 'Kami menjaga warehouse lama tetap aktif dan berjalan paralel selama periode yang disepakati, dengan laporan yang sama dihasilkan dari kedua sistem. Cut-over dilakukan ketika tim keuangan dan risiko Anda telah menyetujui kecocokan hasilnya, bukan sekadar ketika proses penyalinan data selesai.',
                'tag' => 'Operasi paralel & persetujuan akhir',
            ],
            [
                'step' => '05',
                'title' => 'Tetap mendampingi setelah go-live',
                'description' => 'All Data International telah mengelola platform data untuk perbankan, asuransi, instansi pemerintah, dan BUMN di Indonesia selama lebih dari satu dekade dalam Bahasa Indonesia, di zona waktu Anda, dan di bawah kendali ISO 27001. Kami menyediakan layanan terkelola (managed services) serta pelatihan bersama proses migrasi, sehingga tim yang mewarisi warehouse baru tidak perlu belajar sendirian. Kami juga berpengalaman di Snowflake, Cloudera, Confluent, Denodo, Qlik, dan AWS selain ClickHouse, sehingga kami dapat merekomendasikan platform terbaik bagi tiap beban kerja secara objektif.',
                'tag' => 'Layanan terkelola & pelatihan',
            ],
        ],
        'processKicker' => 'Tujuh tahap yang terstruktur',
        'processTitle' => 'Di mana AI bekerja',
        'processIntro' => 'Bagi pembaca yang menginginkan detail teknis, alat ini menjalankan tujuh tahap yang sama untuk BigQuery, Oracle, dan PostgreSQL. Penalaran agen untuk setiap langkah tercatat berdampingan, sehingga setiap keputusan terdokumentasi dengan jelas.',
        'processCaption' => 'Ketujuh tahap migrasi, menampilkan demo Oracle TPC-H pada langkah ke-3. Penalaran agen untuk tiap langkah tampil berdampingan sehingga setiap keputusan terdokumentasi.',
        'stages' => [
            [
                'Temukan dan rancang.',
                'Agen membaca tabel, kolom, dan constraint, lalu mengusulkan tabel ClickHouse lengkap dengan tipe data dan sorting key. Presisi Oracle NUMBER, field nested dan repeated BigQuery, serta JSON, enum, dan array PostgreSQL masing-masing ditangani secara eksplisit; JSON PostgreSQL dipetakan ke tipe JSON bawaan ClickHouse (siap produksi mulai versi 25.3).',
            ],
            [
                'Migrasi data.',
                'Data disalin dengan pemantauan progres langsung per tabel. Pada demo Oracle kami, 13 tabel dan 1.126.035 baris selesai dalam 1 menit 12 detik sekitar 15.600 baris per detik pada layanan ClickHouse Cloud berukuran [ukuran layanan].',
            ],
            [
                'Validasi.',
                'Jumlah baris dan agregasi kunci dibandingkan tabel demi tabel.',
            ],
            [
                'Konversi stored procedure.',
                'ClickHouse tidak memiliki stored procedure, sehingga logika prosedural diubah menjadi materialized view yang memperbarui hasil setiap ada data masuk, ditambah scheduled query bila view tidak sesuai. Hasilnya, logika bisnis yang sebelumnya tersembunyi di dalam kode menjadi SQL terbuka yang dapat dibaca siapa saja di tim.',
            ],
            [
                'Tulis ulang kueri.',
                'Laporan dan kueri analitik diterjemahkan ke ClickHouse SQL, dengan perbedaan dialek dipetakan dan kasus yang meragukan ditandai untuk ditinjau.',
            ],
            [
                'Uji benchmark.',
                'Kueri yang sama dijalankan di kedua sistem. Dalam demo kami dengan [N] kueri pelaporan pada [dataset], ClickHouse Cloud memberikan hasil rata-rata [X] kali lebih cepat selama [N] kali eksekusi pada layanan berukuran [ukuran layanan] dibandingkan [konfigurasi sumber].',
            ],
            [
                'Optimasi dan ringkasan.',
                'Kueri yang paling lambat dioptimalkan dan agen menyusun ringkasan mengenai apa yang telah dipindahkan, apa yang telah diperiksa, dan bagaimana performanya.',
            ],
        ],
        'resultKicker' => 'Hasil di ClickHouse Cloud',
        'resultTitle' => 'Logika bisnis berubah menjadi SQL terbuka yang dapat dibaca siapa saja.',
        'resultTextBefore' => 'Tabel yang dimigrasikan berdampingan dengan ',
        'resultTextAfter' => ', sebuah materialized view yang kini menjalankan tugas stored procedure.',
        'resultAlt' => 'Hasil di ClickHouse Cloud: tabel yang dimigrasikan berdampingan dengan daily_order_summary, materialized view yang menggantikan stored procedure.',
        'sourcesKicker' => 'Sumber data warehouse yang didukung',
        'sourcesTitle' => 'BigQuery, Oracle, dan PostgreSQL',
        'sourcesIntro' => 'ClickHouse menyediakan panduan migrasi resmi untuk BigQuery dan PostgreSQL; alat kami mengotomatiskan jalur tersebut dan memperluasnya ke Oracle, yang belum memiliki panduan resmi.',
        'sourcesCol1' => 'Sumber',
        'sourcesCol2' => 'Yang dipindahkan',
        'sourcesCol3' => 'Penanganan khusus sumber',
        'sources' => [
            [
                'Oracle',
                'Tabel, kolom, constraint, laporan, kueri analitik & stored procedure (PL/SQL)',
                'Presisi NUMBER Oracle ditangani secara eksplisit; stored procedure diubah menjadi materialized view atau scheduled query. Meskipun belum ada panduan resmi ClickHouse untuk Oracle, alat kami mengotomatiskan jalur ini.',
            ],
            [
                'BigQuery',
                'Tabel, kolom, constraint, laporan & kueri analitik',
                'Field nested dan repeated BigQuery ditangani secara eksplisit bersama pemetaan dialek, mengotomatiskan jalur migrasi resmi ClickHouse.',
            ],
            [
                'PostgreSQL',
                'Tabel, kolom, constraint, laporan & kueri analitik',
                'Tipe JSON, enum, dan array PostgreSQL ditangani secara eksplisit; JSON PostgreSQL dipetakan ke tipe JSON bawaan ClickHouse (siap produksi mulai versi 25.3).',
            ],
        ],
        'clickhouseKicker' => 'Mengapa tujuan migrasi menentukan hasil',
        'clickhouseTitleLead' => 'Mengapa tujuannya adalah ClickHouse Cloud, ',
        'clickhouseTitleHighlight' => 'bukan warehouse lain',
        'clickhouseIntro1' => 'Hampir semua data warehouse yang ditawarkan di pasar dirancang dengan gagasan yang sama: data masuk semalaman, laporan dijalankan pagi hari, dan keterlambatan satu hari dianggap wajar karena belum ada kebutuhan yang lebih cepat. Gagasan itu bertahan dengan baik selama tiga puluh tahun. Kini gagasan itulah yang menahan Anda, dan pindah ke warehouse lebih baru yang memakai prinsip sama hanya menghasilkan tagihan sedikit lebih murah dengan batasan yang tetap sama.',
        'clickhouseIntro2' => 'ClickHouse berangkat dari premis yang berlawanan. Dibangun pada 2009 untuk menjawab pertanyaan atas miliaran peristiwa saat data masih mengalir masuk, dirilis sebagai open-source pada 2016, dan kini menjadi mesin di balik produk real-time di perusahaan seperti Sony, Tesla, Lyft, Instacart, dan Anthropic. ClickHouse tidak pernah dirancang sebagai warehouse yang dipercepat; ia dirancang sebagai lapisan yang dikueri langsung oleh aplikasi, dasbor, dan kini agen AI, di atas data yang hanya berusia hitungan detik. Laporan warehouse yang Anda migrasikan di tahap awal akan berjalan nyaman di atasnya namun nilai sesungguhnya adalah apa yang bisa Anda bangun berikutnya di platform yang sama.',
        'platformBenefits' => [
            [
                'title' => 'Segar sejak dari rancangannya.',
                'description' => 'ClickHouse mengurutkan dan mengompresi data saat dimasukkan serta menjaga ringkasan pra-agregasi tetap mutakhir melalui materialized view, sehingga kueri membaca data yang sudah siap tanpa menunggu siklus refresh. Pekerjaan ETL semalaman dan prosedur pembangunan ulang tabel ringkasan menjadi tidak diperlukan lagi. Laporan yang biasanya berjalan pukul 06.00 dapat dijalankan pukul 06.01 dengan transaksi pagi itu sudah tercakup, dan tim fraud atau risiko dapat memantau kondisi hari ini alih-alih kemarin.',
            ],
            [
                'title' => 'Dirancang untuk permintaan berkecepatan mesin.',
                'description' => 'Saat pengirim kueri adalah agen AI atau produk pelanggan, volume kueri tidak lagi seperti beberapa puluh analis, melainkan ribuan permintaan per jam yang semuanya menuntut jawaban terkini. ClickHouse dibangun untuk konkurensi semacam itu dengan skema biaya komputasi dan penyimpanan yang dapat Anda ukur, bukan per pemindaian atau per kredit. Riset CostBench dari ClickHouse (September 2026) mengukur pola ini secara langsung ingest berkelanjutan bersama kueri berkelanjutan dan menjadi rujukan kami; klaim yang jujur adalah keunggulan ini berlaku untuk beban kerja real-time berkelanjutan, arah yang sedang Anda tuju. InMobi, platform periklanan asal Bangalore, memindahkan pelaporan penerbit mereka ke ClickHouse pada 2026 dan melihat latensi P99 turun dari lebih dari satu menit menjadi di bawah tiga detik, sementara biaya bulanan turun dari sekitar USD 40.000 menjadi USD 8.000. Angka Anda akan berbeda; kami memberikan estimasi setelah asesmen.',
            ],
            [
                'title' => 'Siap untuk agen AI, bukan sekadar tempelan.',
                'description' => 'Karena mesinnya menyajikan data segar dengan konkurensi tinggi, layanan ClickHouse Cloud yang menyimpan warehouse hasil migrasi dapat langsung melayani agen AI tanpa salinan data kedua. ClickHouse Agents (dalam beta publik) memungkinkan tim Anda bertanya pada data langsung melalui chat dan membangun agen yang dapat digunakan ulang dengan akses terkelola, sementara server ClickHouse MCP memungkinkan alat agen yang sudah Anda pakai melakukan kueri secara langsung. Inilah kemampuan yang tidak bisa sekadar ditempelkan pada warehouse berbasis batch, karena model latensi dan biayanya sejak awal tidak dirancang untuk mesin yang mengajukan pertanyaan sepanjang hari.',
            ],
            [
                'title' => 'Terbuka, dan berjalan di cloud Anda.',
                'description' => 'ClickHouse berlisensi Apache 2.0, mendukung SQL standar, serta dapat membaca dari Iceberg, Delta Lake, dan katalog di sekitarnya, sehingga mampu berdampingan dengan infrastruktur yang sudah ada tanpa menuntut penggantian total sekaligus. ClickHouse Cloud berjalan di AWS, Google Cloud, dan Microsoft Azure, dengan opsi bring-your-own-cloud (BYOC) yang menjaga data plane tetap di akun Anda sendiri. Bagi institusi di Indonesia dengan kewajiban residensi data dan pilihan cloud yang sudah ditetapkan, hal ini sering menjadi penentu antara tujuan yang memungkinkan dan yang tidak.',
            ],
        ],
        'caveatTitle' => 'Satu catatan penting, karena DBA Anda pasti akan menanyakannya.',
        'caveatText' => 'ClickHouse bukan salinan fitur-demi-fitur dari BigQuery, Oracle, ataupun warehouse serba guna. Tidak ada stored procedure, dan pola transaksional atau skema yang sangat ternormalisasi dengan join lebar memerlukan perancangan ulang alih-alih sekadar lift-and-shift. Kami memandang hal ini sebagai bagian penting dari asesmen, bukan kekurangan platform tujuan: beban kerja yang paling cocok adalah yang menuntut kecepatan real-time, konkurensi tinggi, dan efisiensi biaya di situlah nilai terbesarnya berada. ClickHouse menerbitkan panduan migrasi resminya untuk BigQuery dan PostgreSQL; alat kami mengotomatiskan jalur tersebut dan memperluasnya ke Oracle yang belum memiliki panduan resmi.',
        'summaryKicker' => 'Ringkasan',
        'summaryTitle' => 'Poin utama',
        'summaryText' => 'Migrasi terhenti karena risiko, bukan karena kurangnya upaya. Risiko-risiko itu nyata: angka yang wajib cocok, logika yang tak bertuan, tim yang terbiasa dengan platform lama, dan aturan residensi yang tidak bisa ditawar. Agen AI menghilangkan sebagian besar pekerjaan mekanis dan itu sangat membantu, tetapi yang membuat migrasi disetujui adalah asesmen yang memilih beban kerja yang tepat, validasi yang dapat diterima auditor, operasi paralel hingga tim keuangan memercayai hasilnya, serta mitra yang tetap mendampingi setelah go-live. Dan yang membuat seluruh proses ini layak dijalankan adalah mendarat di platform yang siap menjawab tuntutan bisnis berikutnya terhadap data, bukan sekadar versi yang sedikit lebih rapi dari sistem Anda saat ini.',
        'summaryLink' => 'Jelajahi mitra teknologi kami',
        'ctaKicker' => 'Langkah berikutnya',
        'ctaTitle' => 'Mulai dengan Asesmen Satu Hari.',
        'ctaText' => 'Jika Anda memiliki data warehouse yang terus menjadi “proyek tahun depan” selama lebih dari setahun, langkah pertamanya adalah asesmen satu hari terhadap pipeline dan warehouse Anda. Anda akan mendapatkan rencana migrasi tertulis, dan kami menjalankan alat kami pada salinan skema Anda sendiri agar Anda dapat melihat rancangan ClickHouse yang diusulkan sebelum mengambil komitmen apa pun.',
        'footerTagline' => 'Driving Organizations into Smart Decisions with AI',
        'footerRights' => 'Hak cipta dilindungi.',
    ],
];

$t = $copy[$lang];
?>
<!doctype html>
<html lang="<?= e($lang) ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($t['pageTitle']) ?></title>
    <meta name="description" content="<?= e($t['pageDescription']) ?>">
    <meta name="theme-color" content="#0056b3">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?= $lang === 'id' ? 'id_ID' : 'en_US' ?>">
    <meta property="og:title" content="<?= e($t['pageTitle']) ?>">
    <meta property="og:description" content="<?= e($t['pageDescription']) ?>">
    <meta property="og:url" content="<?= e($siteUrl) ?>">
    <meta property="og:image" content="<?= rtrim($siteUrl, '/') . '/assets/images/clickhouse-migration-tools-1.webp'; ?>">
    <meta property="og:image:alt" content="<?= e($t['pageTitle']) ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon/favicon.ico') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/favicon/android-chrome-192x192.png') ?>">
    <link rel="icon" type="image/png" sizes="512x512" href="<?= base_url('assets/favicon/android-chrome-512x512.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/favicon/site.webmanifest') ?>">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        adi: {
                            blue: '#0056B3',
                            cyan: '#00A3E0',
                            orange: '#FF6C37',
                            navy: '#0B1730',
                            ink: '#14243D',
                            mist: '#F3F8FC'
                        }
                    },
                    boxShadow: {
                        soft: '0 18px 55px rgba(4, 40, 82, .10)',
                        glow: '0 18px 55px rgba(0, 163, 224, .20)'
                    }
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
        body { font-family: Inter, sans-serif; }
        .brand-gradient { background: linear-gradient(120deg, #0056B3 0%, #00A3E0 58%, #FF6C37 100%); }
        .text-gradient {
            background: linear-gradient(120deg, #0056B3 0%, #00A3E0 72%);
            -webkit-background-clip: text; background-clip: text; color: transparent;
        }
        .hero-grid {
            background-image: linear-gradient(rgba(0,86,179,.055) 1px, transparent 1px), linear-gradient(90deg, rgba(0,86,179,.055) 1px, transparent 1px);
            background-size: 42px 42px;
        }
        .dot-pattern {
            background-image: radial-gradient(rgba(0,163,224,.34) 1px, transparent 1px);
            background-size: 15px 15px;
        }
        .section-kicker { letter-spacing: .16em; }
        .stage-line { background: linear-gradient(90deg, #0056B3, #00A3E0); }
        .mobile-menu[hidden] { display: none; }
        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            *, *::before, *::after { animation-duration: .01ms !important; transition-duration: .01ms !important; }
        }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased">
    <!-- Header -->
    <header class="sticky top-0 z-50 border-b border-slate-100 bg-white/90 backdrop-blur-xl">
        <div class="mx-auto flex max-w-7xl items-center justify-between gap-3 px-5 py-4 lg:px-8">
            <div class="flex items-center gap-3 sm:gap-4">
                <a href="<?= e($siteUrl) ?>" class="flex items-center" aria-label="<?= e($t['navHomeAria']) ?>">
                    <img src="<?= e($logoUrl) ?>" alt="All Data International" class="h-7 w-auto sm:h-9" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                    <span class="hidden text-xl font-extrabold tracking-tight text-adi-blue">All Data International</span>
                </a>
                <span class="h-5 w-px bg-slate-200" aria-hidden="true"></span>
                <a href="#clickhouse" class="flex items-center" aria-label="ClickHouse">
                    <img src="<?= e($clickhouseLogoUrl) ?>" alt="ClickHouse" class="h-5 w-auto object-contain sm:h-6" loading="lazy">
                </a>
            </div>
            <nav class="hidden items-center gap-7 text-sm font-semibold text-slate-600 lg:flex" aria-label="<?= e($t['navMainAria']) ?>">
                <a class="transition hover:text-adi-blue" href="#challenges"><?= e($t['navChallenges']) ?></a>
                <a class="transition hover:text-adi-blue" href="#approach"><?= e($t['navApproach']) ?></a>
                <a class="transition hover:text-adi-blue" href="#process"><?= e($t['navProcess']) ?></a>
                <a class="transition hover:text-adi-blue" href="#clickhouse"><?= e($t['navClickhouse']) ?></a>
            </nav>
            <div class="flex items-center gap-2.5 sm:gap-3">
                <!-- Language Toggle (EN / ID) -->
                <div class="inline-flex items-center rounded-full border border-slate-200 bg-slate-50 p-1 text-xs font-bold" role="group" aria-label="<?= e($t['navLangAria']) ?>">
                    <a
                        href="?lang=en"
                        aria-current="<?= $lang === 'en' ? 'true' : 'false' ?>"
                        class="rounded-full px-2.5 py-1 transition <?= $lang === 'en' ? 'bg-adi-navy text-white shadow-sm' : 'text-slate-600 hover:text-adi-blue' ?>"
                    >EN</a>
                    <a
                        href="?lang=id"
                        aria-current="<?= $lang === 'id' ? 'true' : 'false' ?>"
                        class="rounded-full px-2.5 py-1 transition <?= $lang === 'id' ? 'bg-adi-navy text-white shadow-sm' : 'text-slate-600 hover:text-adi-blue' ?>"
                    >ID</a>
                </div>
                <a href="#assessment" class="hidden rounded-full bg-adi-cyan px-5 py-3 text-sm font-bold text-white shadow-lg shadow-cyan-500/20 transition hover:-translate-y-0.5 hover:bg-cyan-600 md:inline-flex">
                    <?= e($t['ctaBook']) ?> <span class="ml-2">↗</span>
                </a>
                <button id="menuButton" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-adi-blue lg:hidden" aria-label="<?= e($t['navOpenAria']) ?>" aria-expanded="false" aria-controls="mobileMenu">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
                </button>
            </div>
        </div>
        <div id="mobileMenu" class="mobile-menu border-t border-slate-100 bg-white px-5 py-4 lg:hidden" hidden>
            <nav class="flex flex-col gap-4 text-sm font-semibold text-slate-700">
                <a href="#challenges"><?= e($t['navChallenges']) ?></a>
                <a href="#approach"><?= e($t['navApproach']) ?></a>
                <a href="#process"><?= e($t['navProcess']) ?></a>
                <a href="#clickhouse"><?= e($t['navClickhouse']) ?></a>
                <a href="#assessment" class="font-bold text-adi-cyan"><?= e($t['ctaBook']) ?> ↗</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero -->
        <section class="hero-grid relative isolate overflow-hidden bg-gradient-to-br from-white via-sky-50 to-blue-50">
            <div class="pointer-events-none absolute -right-32 -top-28 -z-10 h-[520px] w-[520px] rounded-full bg-cyan-300/20 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-48 -left-24 -z-10 h-[420px] w-[420px] rounded-full bg-blue-300/20 blur-3xl"></div>
            <div class="mx-auto max-w-5xl px-5 py-20 text-center lg:px-8 lg:py-28">
                <div class="mb-7 inline-flex items-center gap-2 rounded-full border border-blue-100 bg-white/80 px-4 py-2 text-xs font-bold uppercase tracking-[.14em] text-adi-blue shadow-sm">
                    <span class="h-2 w-2 rounded-full bg-adi-cyan"></span>
                    <?= highlightBrackets($t['heroBadge']) ?>
                </div>
                <h1 class="mx-auto max-w-4xl text-4xl font-black leading-[1.08] tracking-tight text-adi-navy sm:text-5xl lg:text-[3.75rem]">
                    <?= highlightBrackets($t['heroH1Lead']) ?> <span class="text-gradient"><?= highlightBrackets($t['heroH1Highlight']) ?></span>
                </h1>
                <p class="mx-auto mt-7 max-w-2xl text-lg leading-8 text-slate-600">
                    <?= highlightBrackets($t['heroSub']) ?>
                </p>
                <div class="mt-9 flex flex-col justify-center gap-3 sm:flex-row">
                    <a href="#assessment" class="inline-flex items-center justify-center rounded-full bg-adi-cyan px-7 py-4 text-sm font-extrabold text-white shadow-glow transition hover:-translate-y-1 hover:bg-cyan-600">
                        <?= e($t['ctaBook']) ?> <span class="ml-3 text-lg">↗</span>
                    </a>
                    <a href="#story" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white/80 px-7 py-4 text-sm font-bold text-adi-blue transition hover:border-adi-cyan hover:bg-white">
                        <?= e($t['heroCtaSecondary']) ?> <span class="ml-2">↓</span>
                    </a>
                </div>
                <div class="mt-10 flex flex-wrap items-center justify-center gap-x-6 gap-y-3 text-sm font-semibold text-slate-500">
                    <?php foreach ($t['heroTicks'] as $tick): ?>
                    <span class="inline-flex items-center gap-2"><span class="text-adi-cyan">✓</span> <?= highlightBrackets($tick) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Hero Preview / Perspective Showcase -->
        <section class="relative isolate overflow-hidden bg-gradient-to-b from-blue-50/70 via-white to-white py-14 lg:py-20">
            <div class="mx-auto max-w-6xl px-5 lg:px-8">
                <div class="relative mx-auto max-w-5xl [perspective:1800px]">
                    <div class="pointer-events-none absolute -inset-6 rounded-[2.5rem] bg-gradient-to-tr from-adi-blue/15 via-adi-cyan/20 to-sky-200/15 blur-3xl"></div>
                    <div
                        class="relative overflow-hidden rounded-[1.75rem] border border-slate-200/80 bg-white p-3 shadow-[0_32px_70px_-15px_rgba(11,23,48,0.22)] transition-transform duration-700 ease-out sm:p-5 lg:[transform:rotateX(8deg)_rotateY(10deg)_rotateZ(-1.5deg)] lg:hover:[transform:rotateX(2deg)_rotateY(3deg)_rotateZ(0deg)]"
                    >
                        <div class="mb-3 flex items-center gap-2 border-b border-slate-100 pb-3 px-2">
                            <span class="h-2.5 w-2.5 rounded-full bg-rose-400"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-amber-400"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
                            <span class="ml-2 text-xs font-semibold text-slate-400"><?= e($t['workbenchTitle']) ?></span>
                        </div>
                        <img
                            src="<?= base_url('assets/images/clickhouse-migration-tools-1.webp') ?>"
                            alt="<?= e($t['workbenchAlt']) ?>"
                            class="h-auto w-full rounded-xl object-cover"
                            loading="lazy"
                        />
                    </div>
                </div>
            </div>
        </section>

        <!-- Context / Narrative Intro -->
        <section id="story" class="scroll-mt-24 border-y border-slate-100 bg-white py-16 lg:py-20">
            <div class="mx-auto max-w-4xl px-5 lg:px-8">
                <div class="space-y-6 text-base leading-8 text-slate-700 sm:text-lg sm:leading-9">
                    <p>
                        <?= highlightBrackets($t['storyP1Before']) ?><strong class="font-extrabold text-adi-navy"><?= highlightBrackets($t['storyP1Strong']) ?></strong>
                    </p>
                    <p>
                        <?= highlightBrackets($t['storyP2']) ?>
                    </p>
                    <div class="rounded-3xl border border-blue-100 bg-adi-mist p-6 text-base leading-8 text-slate-700">
                        <?= highlightBrackets($t['storyCallout']) ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Challenges -->
        <section id="challenges" class="scroll-mt-24 bg-white py-20 lg:py-28">
            <div class="mx-auto grid max-w-7xl gap-14 px-5 lg:grid-cols-[.82fr_1.18fr] lg:items-start lg:px-8">
                <div class="lg:sticky lg:top-28 lg:self-start">
                    <p class="section-kicker text-xs font-extrabold uppercase text-adi-cyan"><?= e($t['challengesKicker']) ?></p>
                    <h2 class="mt-4 text-3xl font-black leading-tight tracking-tight text-adi-navy sm:text-4xl"><?= highlightBrackets($t['challengesTitle']) ?></h2>
                    <p class="mt-6 text-base leading-8 text-slate-600"><?= highlightBrackets($t['challengesIntro']) ?></p>
                    <div class="mt-8 rounded-3xl bg-adi-navy p-6 text-white shadow-soft">
                        <p class="text-xs font-bold uppercase tracking-[.16em] text-sky-300"><?= e($t['challengesCardKicker']) ?></p>
                        <p class="mt-3 text-base font-bold leading-relaxed"><?= highlightBrackets($t['challengesCardText']) ?></p>
                    </div>
                </div>
                <div class="space-y-4">
                    <?php foreach ($t['challenges'] as $item): ?>
                    <article class="flex gap-5 rounded-3xl border border-slate-100 bg-white p-6 shadow-sm transition duration-300 hover:border-blue-100 hover:shadow-soft sm:p-7">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-blue-50 text-sm font-black text-adi-blue"><?= e($item['number']) ?></div>
                        <div class="min-w-0 flex-1">
                            <h3 class="text-lg font-extrabold text-adi-navy"><?= highlightBrackets($item['title']) ?></h3>
                            <p class="mt-2 text-sm leading-7 text-slate-600"><?= highlightBrackets($item['description']) ?></p>
                            <span class="mt-4 inline-flex rounded-full bg-cyan-50 px-3 py-1.5 text-xs font-bold text-adi-blue"><?= highlightBrackets($item['tag']) ?></span>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Approach -->
        <section id="approach" class="scroll-mt-24 bg-adi-mist py-20 lg:py-28">
            <div class="mx-auto max-w-5xl px-5 lg:px-8">
                <div class="max-w-3xl">
                    <p class="section-kicker text-xs font-extrabold uppercase text-adi-cyan"><?= e($t['approachKicker']) ?></p>
                    <h2 class="mt-4 text-3xl font-black leading-tight tracking-tight text-adi-navy sm:text-4xl"><?= highlightBrackets($t['approachTitle']) ?></h2>
                    <p class="mt-5 text-base leading-8 text-slate-600"><?= highlightBrackets($t['approachIntro']) ?></p>
                </div>

                <div class="mt-8 rounded-3xl bg-adi-navy p-6 text-white shadow-soft sm:p-7">
                    <p class="text-xs font-bold uppercase tracking-[.16em] text-sky-300"><?= e($t['approachCardKicker']) ?></p>
                    <p class="mt-3 text-lg font-extrabold leading-relaxed"><?= highlightBrackets($t['approachCardText']) ?></p>
                </div>

                <div class="mt-8 space-y-5">
                    <?php foreach ($t['approach'] as $item): ?>
                    <article class="flex flex-col gap-5 rounded-3xl border border-white bg-white p-6 shadow-sm sm:flex-row sm:p-8">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-blue-50 text-sm font-black text-adi-blue"><?= e($item['step']) ?></div>
                        <div class="min-w-0 flex-1">
                            <h3 class="text-xl font-extrabold text-adi-navy"><?= highlightBrackets($item['title']) ?></h3>
                            <p class="mt-2.5 text-sm leading-7 text-slate-600 sm:text-base sm:leading-8"><?= highlightBrackets($item['description']) ?></p>

                            <?php if (!empty($item['image'])): ?>
                            <figure class="mt-6 overflow-hidden rounded-2xl border border-slate-100 bg-slate-50">
                                <img
                                    src="<?= e($item['image']) ?>"
                                    alt="<?= e($item['image_caption'] ?? $item['title']) ?>"
                                    class="h-auto w-full object-cover"
                                    loading="lazy"
                                >
                                <?php if (!empty($item['image_caption'])): ?>
                                <figcaption class="border-t border-slate-100 bg-white px-4 py-3 text-xs leading-5 text-slate-500">
                                    <?= highlightBrackets($item['image_caption']) ?>
                                </figcaption>
                                <?php endif; ?>
                            </figure>
                            <?php endif; ?>

                            <span class="mt-5 inline-flex rounded-full bg-cyan-50 px-3 py-1.5 text-xs font-bold text-adi-blue"><?= highlightBrackets($item['tag']) ?></span>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Process -->
        <section id="process" class="scroll-mt-24 bg-adi-navy py-20 text-white lg:py-28">
            <div class="mx-auto max-w-7xl px-5 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="section-kicker text-xs font-extrabold uppercase text-sky-300"><?= e($t['processKicker']) ?></p>
                    <h2 class="mt-4 text-3xl font-black tracking-tight sm:text-4xl"><?= highlightBrackets($t['processTitle']) ?></h2>
                    <p class="mt-5 text-base leading-8 text-slate-300"><?= highlightBrackets($t['processIntro']) ?></p>
                </div>

                <figure class="mx-auto mt-12 max-w-5xl overflow-hidden rounded-3xl border border-white/10 bg-white/[.05] shadow-soft">
                    <img
                        src="<?= e('/assets/images/clickhouse-migration-tools-1.webp') ?>"
                        alt="<?= e($t['processCaption']) ?>"
                        class="h-auto w-full object-cover"
                        loading="lazy"
                    >
                    <figcaption class="border-t border-white/10 bg-white/[.03] px-5 py-3.5 text-center text-xs leading-6 text-slate-300 sm:px-6">
                        <?= highlightBrackets($t['processCaption']) ?>
                    </figcaption>
                </figure>
                <div class="relative mt-16 flex flex-wrap justify-center gap-5">
                    <?php
                    $stageIcons = [
                        '<svg class="h-5 w-5 text-sky-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/><path d="M11 8v6"/><path d="M8 11h6"/></svg>',
                        '<svg class="h-5 w-5 text-sky-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/><path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3"/></svg>',
                        '<svg class="h-5 w-5 text-sky-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>',
                        '<svg class="h-5 w-5 text-sky-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m17 2 4 4-4 4"/><path d="M3 11v-1a4 4 0 0 1 4-4h14"/><path d="m7 22-4-4 4-4"/><path d="M21 13v1a4 4 0 0 1-4 4H3"/></svg>',
                        '<svg class="h-5 w-5 text-sky-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/><line x1="14" y1="4" x2="10" y2="20"/></svg>',
                        '<svg class="h-5 w-5 text-sky-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>',
                        '<svg class="h-5 w-5 text-sky-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="21" x2="4" y2="14"/><line x1="4" y1="10" x2="4" y2="3"/><line x1="12" y1="21" x2="12" y2="12"/><line x1="12" y1="8" x2="12" y2="3"/><line x1="20" y1="21" x2="20" y2="16"/><line x1="20" y1="12" x2="20" y2="3"/><line x1="2" y1="14" x2="6" y2="14"/><line x1="10" y1="8" x2="14" y2="8"/><line x1="18" y1="16" x2="22" y2="16"/></svg>',
                    ];
                    ?>
                    <?php foreach ($t['stages'] as $index => $stage): ?>
                    <article class="relative flex w-full flex-col rounded-3xl border border-white/10 bg-white/[.06] p-6 transition hover:border-cyan-300/50 hover:bg-white/[.09] sm:w-[calc(50%-0.625rem)] lg:w-[calc(25%-0.9375rem)]">
                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-black text-sky-300"><?= str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                            <span class="flex h-10 w-10 items-center justify-center rounded-2xl border border-sky-300/20 bg-sky-400/10">
                                <?= $stageIcons[$index] ?? '' ?>
                            </span>
                        </div>
                        <h3 class="mt-7 text-lg font-extrabold"><?= highlightBrackets($stage[0]) ?></h3>
                        <p class="mt-3 text-sm leading-7 text-slate-300"><?= highlightBrackets($stage[1]) ?></p>
                    </article>
                    <?php endforeach; ?>
                </div>
                <div class="mt-12 rounded-3xl border border-sky-300/20 bg-gradient-to-r from-blue-500/20 to-cyan-400/10 p-6 sm:p-8">
                    <div class="grid items-center gap-5 md:grid-cols-[1fr_auto]">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[.16em] text-sky-300"><?= e($t['resultKicker']) ?></p>
                            <h3 class="mt-2 text-xl font-extrabold"><?= highlightBrackets($t['resultTitle']) ?></h3>
                            <p class="mt-2 max-w-3xl text-sm leading-7 text-slate-300"><?= highlightBrackets($t['resultTextBefore']) ?><code class="rounded bg-white/10 px-1.5 py-0.5 text-sky-200">daily_order_summary</code><?= highlightBrackets($t['resultTextAfter']) ?></p>
                        </div>
                    </div>

                    <figure class="mt-6 overflow-hidden rounded-2xl border border-white/10 bg-adi-navy/60">
                        <img
                            src="<?= e('/assets/images/clickhouse-migration-tools-3.webp') ?>"
                            alt="<?= e($t['resultAlt']) ?>"
                            class="h-auto w-full object-cover"
                            loading="lazy"
                        >
                    </figure>
                </div>
            </div>
        </section>

        <!-- Sources -->
        <section class="bg-white py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-5 lg:px-8">
                <div class="max-w-3xl">
                    <p class="section-kicker text-xs font-extrabold uppercase text-adi-cyan"><?= e($t['sourcesKicker']) ?></p>
                    <h2 class="mt-4 text-3xl font-black tracking-tight text-adi-navy sm:text-4xl"><?= highlightBrackets($t['sourcesTitle']) ?></h2>
                    <p class="mt-5 text-base leading-8 text-slate-600"><?= highlightBrackets($t['sourcesIntro']) ?></p>
                </div>
                <div class="mt-10 overflow-hidden rounded-3xl border border-slate-200 shadow-sm">
                    <div class="hidden grid-cols-[.55fr_1fr_1.45fr] gap-6 bg-adi-mist px-7 py-4 text-xs font-extrabold uppercase tracking-wider text-adi-blue md:grid">
                        <div><?= e($t['sourcesCol1']) ?></div><div><?= e($t['sourcesCol2']) ?></div><div><?= e($t['sourcesCol3']) ?></div>
                    </div>
                    <?php foreach ($t['sources'] as $source): ?>
                    <div class="grid gap-3 border-t border-slate-100 px-6 py-6 first:border-t-0 md:grid-cols-[.55fr_1fr_1.45fr] md:gap-6 md:px-7">
                        <div class="text-base font-extrabold text-adi-blue"><?= highlightBrackets($source[0]) ?></div>
                        <div><p class="mb-1 text-[11px] font-bold uppercase tracking-wider text-slate-400 md:hidden"><?= e($t['sourcesCol2']) ?></p><p class="text-sm leading-6 text-slate-700"><?= highlightBrackets($source[1]) ?></p></div>
                        <div><p class="mb-1 text-[11px] font-bold uppercase tracking-wider text-slate-400 md:hidden"><?= e($t['sourcesCol3']) ?></p><p class="text-sm leading-6 text-slate-600"><?= highlightBrackets($source[2]) ?></p></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Why ClickHouse -->
        <section id="clickhouse" class="scroll-mt-24 overflow-hidden bg-gradient-to-br from-blue-50 via-white to-cyan-50 py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-5 lg:px-8">

                <div class="mx-auto max-w-3xl text-center">
                    <div class="mb-5 flex justify-center">
                        <img src="<?= e($clickhouseLogoUrl) ?>" alt="ClickHouse" class="h-10 w-auto object-contain sm:h-12" loading="lazy">
                    </div>
                    <div class="inline-flex items-center gap-2.5 rounded-full border border-blue-100 bg-white px-4 py-2 shadow-sm">
                        <span class="section-kicker text-xs font-extrabold uppercase text-adi-cyan"><?= e($t['clickhouseKicker']) ?></span>
                    </div>
                    <h2 class="mt-4 text-3xl font-black tracking-tight text-adi-navy sm:text-4xl"><?= highlightBrackets($t['clickhouseTitleLead']) ?><span class="text-gradient"><?= highlightBrackets($t['clickhouseTitleHighlight']) ?></span></h2>
                    <p class="mt-5 text-base leading-8 text-slate-600"><?= highlightBrackets($t['clickhouseIntro1']) ?></p>
                    <p class="mt-4 text-base leading-8 text-slate-600"><?= highlightBrackets($t['clickhouseIntro2']) ?></p>
                </div>


                <div class="mt-14 grid gap-5 md:grid-cols-2">
                    <?php foreach ($t['platformBenefits'] as $index => $benefit): ?>
                    <article class="rounded-3xl border border-white bg-white p-7 shadow-sm sm:p-9">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-adi-mist text-xl font-black text-adi-blue"><?= str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT) ?></div>
                        <h3 class="mt-6 text-xl font-extrabold text-adi-navy"><?= highlightBrackets($benefit['title']) ?></h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600"><?= highlightBrackets($benefit['description']) ?></p>
                    </article>
                    <?php endforeach; ?>
                </div>
                <div class="mt-8 rounded-3xl border border-cyan-100 bg-cyan-50/80 p-6 sm:p-8">
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-start">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white text-xl text-adi-cyan">!</span>
                        <div>
                            <h3 class="font-extrabold text-adi-navy"><?= highlightBrackets($t['caveatTitle']) ?></h3>
                            <p class="mt-2 text-sm leading-7 text-slate-700"><?= highlightBrackets($t['caveatText']) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Delivery credibility / What to take away -->
        <section class="bg-white py-20 lg:py-24">
            <div class="mx-auto grid max-w-7xl gap-10 px-5 lg:grid-cols-[.8fr_1.2fr] lg:items-center lg:px-8">
                <div>
                    <p class="section-kicker text-xs font-extrabold uppercase text-adi-cyan"><?= e($t['summaryKicker']) ?></p>
                    <h2 class="mt-4 text-3xl font-black tracking-tight text-adi-navy sm:text-4xl"><?= highlightBrackets($t['summaryTitle']) ?></h2>
                </div>
                <div>
                    <p class="text-base leading-8 text-slate-600"><?= highlightBrackets($t['summaryText']) ?></p>
                    <a href="<?= e($siteUrl) ?>/our-partners" class="mt-6 inline-flex items-center gap-2 text-sm font-extrabold text-adi-blue hover:text-adi-cyan"><?= e($t['summaryLink']) ?> <span>↗</span></a>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section id="assessment" class="scroll-mt-24 relative isolate overflow-hidden bg-adi-navy py-20 text-white lg:py-24">
            <div class="pointer-events-none absolute -right-24 -top-36 -z-10 h-96 w-96 rounded-full bg-adi-cyan/20 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-40 -left-20 -z-10 h-96 w-96 rounded-full bg-adi-blue/40 blur-3xl"></div>
            <div class="mx-auto grid max-w-7xl items-center gap-10 px-5 lg:grid-cols-[1fr_auto] lg:px-8">
                <div class="max-w-3xl">
                    <p class="section-kicker text-xs font-extrabold uppercase text-sky-300"><?= e($t['ctaKicker']) ?></p>
                    <h2 class="mt-4 text-3xl font-black tracking-tight sm:text-4xl lg:text-5xl"><?= highlightBrackets($t['ctaTitle']) ?></h2>
                    <p class="mt-5 text-base leading-8 text-slate-300"><?= highlightBrackets($t['ctaText']) ?></p>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row lg:flex-col">
                    <a href="<?= e($contactUrl) ?>" class="inline-flex min-w-56 items-center justify-center rounded-full bg-adi-cyan px-7 py-4 text-sm font-extrabold text-white shadow-lg shadow-cyan-500/20 transition hover:-translate-y-1 hover:bg-cyan-600"><?= e($t['ctaBook']) ?> ↗</a>
                    <a href="mailto:<?= e($contactEmail) ?>" class="inline-flex min-w-56 items-center justify-center rounded-full border border-white/25 px-7 py-4 text-sm font-bold text-white transition hover:bg-white/10"><?= e($contactEmail) ?></a>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-[#071225] px-5 py-8 text-slate-400">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 text-center sm:flex-row sm:text-left lg:px-8">
            <div>
                <p class="text-sm font-bold text-white">All Data International</p>
                <p class="mt-1 text-xs"><?= e($t['footerTagline']) ?></p>
            </div>
            <div class="text-xs">
                <a href="<?= e($siteUrl) ?>" class="transition hover:text-white">alldataint.com</a>
                <span class="mx-2 text-slate-600">|</span>
                <a href="mailto:<?= e($contactEmail) ?>" class="transition hover:text-white"><?= e($contactEmail) ?></a>
            </div>
            <p class="text-xs">© <?= date('Y') ?> All Data International. <?= e($t['footerRights']) ?></p>
        </div>
    </footer>

    <script>
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        menuButton?.addEventListener('click', () => {
            const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
            menuButton.setAttribute('aria-expanded', String(!isExpanded));
            mobileMenu.hidden = isExpanded;
        });
        mobileMenu?.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.hidden = true;
                menuButton?.setAttribute('aria-expanded', 'false');
            });
        });
    </script>
</body>
</html>
