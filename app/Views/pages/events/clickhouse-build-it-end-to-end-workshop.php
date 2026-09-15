<?php

$adiLogo              = 'https://alldataint.com/assets/images/logo_coloured.png';
$clickhouseLogoNav     = '
<svg xmlns="http://www.w3.org/2000/svg"
     viewBox="0 0 135 40"
     width="115"
     height="34"
     fill="currentColor"
     role="img"
     aria-label="ClickHouse">

    <rect width="2.25" height="20.25" x="2.71" y="9.88" rx="0.24"></rect>
    <rect width="2.25" height="20.25" x="7.21" y="9.88" rx="0.24"></rect>
    <rect width="2.25" height="20.25" x="11.71" y="9.88" rx="0.24"></rect>
    <rect width="2.25" height="20.25" x="16.21" y="9.88" rx="0.24"></rect>
    <rect width="2.25" height="4.5" x="20.71" y="17.75" rx="0.24"></rect>

    <path d="M40.03 15.14q-.95 0-1.7.34-.76.33-1.3.98-.52.64-.81 1.56-.27.91-.27 2.07a7 7 0 0 0 .45 2.63q.45 1.1 1.35 1.7t2.27.59q.83 0 1.58-.15.78-.15 1.57-.41v1.67q-.75.3-1.55.42-.8.15-1.84.14-1.96 0-3.27-.81a5 5 0 0 1-1.95-2.3q-.65-1.5-.65-3.5 0-1.46.4-2.66.42-1.23 1.19-2.1a5 5 0 0 1 1.9-1.36 7 7 0 0 1 2.65-.48 8.5 8.5 0 0 1 3.6.79l-.72 1.62q-.62-.3-1.37-.5a5 5 0 0 0-1.53-.24m7.6 11.36h-1.91V12.82h1.9zm4.9-9.7v9.7h-1.9v-9.7zm-.94-3.7q.44.01.76.26t.32.85q0 .57-.32.84a1.2 1.2 0 0 1-.76.25q-.45 0-.79-.25-.3-.27-.3-.84 0-.6.3-.85.33-.25.8-.25m7.84 13.58q-1.34 0-2.34-.52a3.6 3.6 0 0 1-1.56-1.62 6 6 0 0 1-.56-2.83q0-1.8.6-2.91.6-1.13 1.63-1.64a5 5 0 0 1 2.38-.54q.81 0 1.5.18.73.15 1.2.38l-.58 1.54q-.51-.2-1.08-.34-.56-.15-1.06-.14-.9 0-1.5.4-.57.37-.86 1.15-.27.76-.27 1.9 0 1.1.29 1.86.3.75.84 1.15.58.38 1.43.38a5 5 0 0 0 2.57-.65v1.66q-.53.3-1.13.45t-1.5.14m6.81-7.02q0 .38-.04.86-.01.5-.05.9h.05l.78-.97q.2-.26.4-.47l2.96-3.18h2.22l-3.9 4.16 4.15 5.54h-2.25l-3.2-4.34-1.12.94v3.4h-1.89V12.82h1.9zm18.4 6.84H82.7v-5.87h-6.13v5.87h-1.95V13.65h1.95v5.33h6.13v-5.33h1.95zm11.78-4.86q0 1.2-.32 2.14a5 5 0 0 1-.92 1.59q-.6.65-1.44.99a5.3 5.3 0 0 1-3.71 0 4.1 4.1 0 0 1-2.38-2.58 6 6 0 0 1-.34-2.16q0-1.6.54-2.72.56-1.1 1.59-1.69 1.04-.6 2.44-.6 1.34 0 2.34.6 1.03.58 1.6 1.7.6 1.11.6 2.73m-7.15 0q0 1.08.27 1.87.28.78.85 1.19t1.48.41q.9 0 1.47-.41.58-.42.85-1.19.27-.8.27-1.87 0-1.11-.29-1.87-.27-.76-.85-1.15a2.4 2.4 0 0 0-1.47-.42q-1.36 0-1.96.9-.62.9-.62 2.54m17.92-4.84v9.7h-1.53l-.27-1.28h-.09q-.3.5-.8.83-.47.33-1.05.47-.58.16-1.2.16-1.13 0-1.92-.36a2.6 2.6 0 0 1-1.18-1.15 4.5 4.5 0 0 1-.4-2.02V16.8h1.92v6.06q0 1.14.47 1.7.5.55 1.5.55t1.58-.4q.59-.39.81-1.14.25-.78.25-1.86V16.8zm9.43 6.96q0 .96-.47 1.6a3 3 0 0 1-1.35 1q-.88.32-2.12.32-1.03 0-1.77-.16-.71-.15-1.33-.43v-1.7q.65.31 1.5.56a6 6 0 0 0 1.65.23q1.08 0 1.55-.34.5-.34.49-.92 0-.31-.18-.57a2 2 0 0 0-.69-.54q-.48-.3-1.44-.65a15 15 0 0 1-1.56-.74 3 3 0 0 1-1-.88q-.34-.53-.34-1.33 0-1.26 1.01-1.93a5 5 0 0 1 2.7-.68 7 7 0 0 1 3.19.68l-.63 1.46a7 7 0 0 0-1.75-.56 4 4 0 0 0-.9-.09q-.86 0-1.31.27a.8.8 0 0 0-.45.76q0 .34.2.6.21.24.73.5.53.25 1.43.6t1.53.71q.64.36.97.88.34.53.34 1.33m6.1-7.14q1.27 0 2.19.54.92.52 1.4 1.51.5.99.5 2.34v1.04h-6.51q.03 1.5.77 2.29.75.8 2.11.8a8 8 0 0 0 1.66-.17q.74-.19 1.5-.52v1.58a7 7 0 0 1-3.23.65q-1.41 0-2.49-.56a4 4 0 0 1-1.69-1.65q-.6-1.12-.6-2.74 0-1.65.55-2.77a4.1 4.1 0 0 1 3.83-2.34m0 1.47q-1.04 0-1.66.67-.62.66-.72 1.89h4.57q0-.76-.24-1.33-.23-.59-.72-.9a2.2 2.2 0 0 0-1.24-.33"></path>
</svg>';
$clickhouseLogoFooter  = 'assets/images/clickhouse-logo-footer.png';

/** Escape aman untuk output HTML. */
function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/** Bahasa aktif: ?lang=id untuk Indonesia, default Inggris. */
$lang = (isset($_GET['lang']) && $_GET['lang'] === 'id') ? 'id' : 'en';

/**
 * Status form pendaftaran. Di versi asli ini hanya state di browser
 * (tidak benar-benar mengirim data kemana pun). Di sini disederhanakan
 * menjadi: form dikirim via POST -> tampilkan pesan terima kasih.
 * Sambungkan ke database/email Anda sendiri di blok ini bila perlu.
 */
$submitted = ($_SERVER['REQUEST_METHOD'] === 'POST');

// -----------------------------------------------------------------
// Teks konten dua bahasa (EN / ID)
// -----------------------------------------------------------------
$copy = [
    'en' => [
        'navWhy' => 'Why attend',
        'navWho' => 'Who it is for',
        'navAgenda' => 'Agenda',
        'navPartners' => 'Partners',
        'register' => 'Register',
        'eyebrow' => 'Hands on workshop for data and AI architects and the leaders they advise',
        'h1a' => 'See real time analytics and AI',
        'h1b' => 'built end to end, in one morning.',
        'heroSub' => 'A working analytics app goes live on ClickHouse Cloud in front of you: streaming data from Postgres, conversational BI, full observability, and an AI SRE that diagnoses a live incident. You build it with an AI coding agent doing the typing, and you take the result back to your team. Want to experience lightning-fast query performance firsthand and see just how cost-effective ClickHouse can be? Join this workshop and see it in action.',
        'heroCta' => 'Reserve your seat',
        'heroCta2' => 'See the agenda',
        'heroNote' => 'Free to attend. Seats are limited. Bring a lead engineer or architect as your plus one.',
        'dateLabel' => 'Date',
        'dateValue' => 'Wednesday, 8 October 2026',
        'timeValue' => '09:00 to 13:00 WIB',
        'locationLabel' => 'Location',
        'stat1' => 'one morning',
        'stat2' => 'on trial credits',
        'stat3' => 'leader plus one',
        'whyEyebrow' => 'Why attend',
        'whyTitle' => 'Decide with evidence, not slideware.',
        'whyBody' => 'Boards are asking for real time dashboards, AI agents on company data, and lower platform cost, all at once. Most evaluations run on vendor decks and six week proofs of concept. This session compresses that into one morning, so you can judge what the stack looks like, how long it takes, and what it costs before you commit budget.',
        'whyPoints' => [
            ['n' => '01', 'title' => 'See the full stack running in four hours', 'body' => 'Ingestion, storage, analytics, AI chat, and observability, connected on one platform. Not a demo someone else prepared: a trial environment ClickHouse provides for you, live on public data inside the first 40 minutes.'],
            ['n' => '02', 'title' => 'Judge cost and effort firsthand', 'body' => 'ClickHouse provides everything you need, including the trial account, the credits, the sample app, and a public dataset. Every command is copy and paste, and your coding agent handles the typing. You see exactly how much engineering a modern real time stack demands.'],
            ['n' => '03', 'title' => 'Leave with a prototype your team can extend', 'body' => 'Your trial account stays active for up to 30 days after the session, and the repository is yours. If you want to go deeper, All Data International and ClickHouse will extend the trial for a one to one proof of concept in your environment.']
        ],
        'prEyebrow' => 'Proven across Asia Pacific',
        'prTitle' => 'Payments, streaming, and fintech leaders already run on ClickHouse.',
        'prBody' => 'More than 4,000 companies run ClickHouse, including Sony, Visa, Capital One, Anthropic, and Tesla. Traditional cloud data warehouses such as BigQuery and Snowflake are optimised for ad hoc and long running reports, and their pricing grows with every query. ClickHouse is designed for real time analytics at high concurrency, at a fraction of the cost. High volume fintech and media businesses in this region chose it for exactly that reason.',
        'logos' => [
            ['name' => 'Juspay', 'meta' => 'Payments · India'],
            ['name' => 'Airwallex', 'meta' => 'Fintech · APAC'],
            ['name' => 'Sony LIV', 'meta' => 'Streaming · India'],
            ['name' => 'Canva', 'meta' => 'SaaS · Australia'],
            ['name' => 'Coinhall', 'meta' => 'Trading · Singapore'],
            ['name' => 'Visa', 'meta' => 'Payments · Global']
        ],
        'quotes' => [
            ['stat' => '10x', 'statLabel' => 'lower operating costs after moving real time analytics from BigQuery to ClickHouse', 'text' => 'ClickHouse solves most of our problems very efficiently at a small fraction of the price in terms of infrastructure. This is a far better advantage for us in our books.', 'who' => 'Tamil Selvan, Software Development Engineer', 'org' => 'Juspay, 50 million+ daily payment transactions'],
            ['stat' => '40x', 'statLabel' => 'cost savings versus BigQuery', 'text' => 'Initially, we used BigQuery, but as our data grew, so did its costs and performance issues. ClickHouse significantly outperformed other databases we tested and delivered at 40x cost savings.', 'who' => 'Engineering team', 'org' => 'Coinhall, Singapore'],
            ['stat' => '10M+', 'statLabel' => 'streaming events ingested for live operations dashboards', 'text' => 'At Sony LIV, we ingest tens of millions of video streaming events into ClickHouse Cloud and run queries to generate complex dashboards for analysis.', 'who' => 'Operations and data team', 'org' => 'Sony LIV, India']
        ],
        'whoEyebrow' => 'Who should attend',
        'whoTitle' => 'The architects who set the data and AI direction, and the leaders who fund it.',
        'whoBody' => 'This session is built for the people who define the target architecture, shortlist the platforms, and make or shape the buying decision. The build is fully guided and every step is copy and paste, so a leader can sit alongside their architect and see the same thing.',
        'whoRoles' => ['Lead Data and AI Architects', 'Enterprise and Solution Architects', 'Heads of Data Platform and Engineering', 'Chief Data Officers, CTOs, and Heads of Analytics and AI'],
        'whoIndustriesLabel' => 'Especially relevant for',
        'whoIndustries' => ['Banking and finance', 'Telecom', 'Retail and FMCG', 'Digital natives and fintech'],
        'plusOneTitle' => 'Bring a plus one.',
        'plusOneBody' => 'Architects, bring the leader who signs off on the platform. Leaders, bring the architect who will run the proof of concept. One of you evaluates the design, the other decides. Both leave with the same evidence.',
        'outEyebrow' => 'What you leave with',
        'outTitle' => 'A working stack on a ClickHouse Cloud trial account you keep.',
        'outBody' => 'ClickHouse provides the trial account, credits, sample app, and dataset. You connect each piece during the session, module by module, over 3.2 million rows of public NYC taxi data. No customer data or attendee data is used at any point.',
        'outcomes' => [
            ['n' => '01', 'title' => 'A live operations dashboard', 'body' => 'Millions of rows seeded from object storage, with queries fast enough to feel the difference.'],
            ['n' => '02', 'title' => 'A real time CDC pipeline', 'body' => 'A managed Postgres provided for the session, streaming continuously into ClickHouse through ClickPipes.'],
            ['n' => '03', 'title' => 'Conversational BI', 'body' => 'Ask questions of the data in plain language with ClickHouse Agents, governed by role based access. No SQL required.'],
            ['n' => '04', 'title' => 'Full observability and an AI SRE', 'body' => 'Application traces and logs flow into ClickStack. Your agent builds a dashboard and an alert, then diagnoses and fixes a live incident.'],
            ['n' => '05', 'title' => 'Traced AI chat', 'body' => 'An AI chat in the app with every turn, generation, and cost traced end to end in Langfuse.'],
            ['n' => '+', 'title' => 'The whole repository', 'body' => 'Yours to keep and extend after the room clears, along with a trial account active for up to 30 days.']
        ],
        'btEyebrow' => 'Better together',
        'btTitle' => 'Global platform. Local delivery.',
        'btBody' => 'ClickHouse brings the real time analytics platform. All Data International brings eleven years of delivering data and AI programmes for Indonesian enterprises. You get one accountable team from first workshop to production.',
        'btAdiTitle' => 'All Data International',
        'btAdiPoints' => ['Trusted technology partner to leading Indonesian banks, insurers, telcos, and state enterprises', 'Consulting, use case development, managed services, and support, delivered locally', 'ISO 27001, ISO 45001, and ISO 14001 certified', 'Official ClickHouse partner in Indonesia'],
        'btTogetherTag' => 'Together',
        'btTogetherTitle' => 'From this workshop to your production roadmap.',
        'btTogetherBody' => 'After the session, All Data International and ClickHouse are happy to extend your trial for a deeper proof of concept, one to one, in your own environment and with your own sources. The prototype you build here becomes the first milestone.',
        'btChTitle' => 'ClickHouse',
        'btChPoints' => ['The open source real time analytics database, used by thousands of companies worldwide', 'ClickHouse Cloud: fully managed, with ClickPipes, ClickStack, and ClickHouse Agents on one platform', 'Millions of rows queried in milliseconds, at a fraction of the cost of traditional warehouses', 'Built for the workloads AI agents and real time products demand'],
        'agEyebrow' => 'Agenda',
        'agTitle' => 'One morning, ten stops.',
        'agenda' => [
            ['time' => '09:00', 'title' => 'Registration and coffee', 'body' => 'Laptops open, accounts verified, agent connected.'],
            ['time' => '09:30', 'title' => 'Opening: why real time and AI, now', 'body' => 'What has changed in the market, and what the morning will prove.'],
            ['time' => '09:45', 'title' => 'ClickHouse Cloud and the base app', 'body' => 'Create the schema, seed 3.2 million rows, and tour the live dashboards.'],
            ['time' => '10:15', 'title' => 'Real time CDC and ClickHouse Agents', 'body' => 'Stream Postgres into ClickHouse, then query it in plain language.'],
            ['time' => '11:00', 'title' => 'Observability and the AI SRE', 'body' => 'Send traces and logs to ClickStack. Your agent builds a dashboard and an alert.'],
            ['time' => '11:45', 'title' => 'Break and fix', 'body' => 'A realistic fault is injected. The AI SRE diagnoses it from telemetry and ships the fix.'],
            ['time' => '12:15', 'title' => 'Traced AI chat with Langfuse', 'body' => 'Follow every generation and its cost end to end.'],
            ['time' => '12:40', 'title' => 'Wrap up and next steps', 'body' => 'What you built, how to extend your trial for a proof of concept, and how All Data International and ClickHouse can help.']
        ],
        'spEyebrow' => 'Your hosts',
        'spTitle' => 'Guided by the people who built it.',
        'bringTitle' => 'What to bring',
        'bring' => ['A laptop with Docker running', 'An AI coding tool you are signed into: Claude Code, Cursor, Codex CLI, or Windsurf', 'A ClickHouse Cloud trial account. Setup instructions arrive after you register.', 'No company data. The workshop uses a public dataset only.'],
        'bringNote' => 'Prefer to watch rather than type? Bring your plus one and follow along on the shared screen.',
        'regEyebrow' => 'Register',
        'regTitle' => 'Reserve your seat.',
        'regBody' => 'Seats are limited to keep the session hands on and well supported. Registrations from data and AI architects and platform leaders are prioritised. Add your plus one and we will hold both places.',
        'thanksTitle' => 'You are on the list.',
        'thanksBody' => 'We will confirm your seat by email within two working days, along with setup instructions for the morning.',
        'fName' => 'Full name',
        'fEmail' => 'Work email',
        'fCompany' => 'Company',
        'fRole' => 'Job title',
        'fRolePh' => 'e.g. Head of Data',
        'fIndustry' => 'Industry',
        'fOther' => 'Other',
        'fPlusTitle' => 'Your plus one (optional)',
        'fPlusName' => 'Guest name',
        'fPlusRole' => 'Guest job title',
        'fSubmit' => 'Reserve my seat',
        'fFine' => 'By registering you agree to be contacted by All Data International and ClickHouse about this event.',
        'footContact' => 'Contact',
        'footPartner' => 'Official partner of ClickHouse in Indonesia.'
    ],
    'id' => [
        'navWhy' => 'Mengapa hadir',
        'navWho' => 'Untuk siapa',
        'navAgenda' => 'Agenda',
        'navPartners' => 'Mitra',
        'register' => 'Daftar',
        'eyebrow' => 'Workshop praktik untuk arsitek data dan AI serta pemimpin yang mereka dampingi',
        'h1a' => 'Lihat analitik real time dan AI',
        'h1b' => 'dibangun tuntas dalam satu pagi.',
        'heroSub' => 'Saksikan langsung bagaimana aplikasi analitik berjalan di ClickHouse Cloud: mulai dari streaming data dari Postgres, conversational BI, full observability, hingga AI SRE yang mampu mendiagnosis insiden secara real-time. Anda akan membangun aplikasi ini dengan bantuan AI coding agent yang menangani proses coding, lalu membawa hasilnya kembali untuk diterapkan bersama tim Anda. Ingin merasakan langsung performa query yang sangat cepat sekaligus melihat seberapa cost-effective ClickHouse untuk kebutuhan analitik Anda? Ikuti workshop ini dan lihat langsung bagaimana ClickHouse bekerja.',
        'heroCta' => 'Amankan kursi Anda',
        'heroCta2' => 'Lihat agenda',
        'heroNote' => 'Gratis. Kursi terbatas. Ajak lead engineer atau arsitek Anda sebagai pendamping.',
        'dateLabel' => 'Tanggal',
        'dateValue' => 'Rabu, 8 Oktober 2026',
        'timeValue' => '09.00 sampai 13.00 WIB',
        'locationLabel' => 'Lokasi',
        'stat1' => 'satu pagi',
        'stat2' => 'dengan kredit trial',
        'stat3' => 'pemimpin plus satu',
        'whyEyebrow' => 'Mengapa hadir',
        'whyTitle' => 'Putuskan berdasarkan bukti, bukan slide.',
        'whyBody' => 'Direksi meminta dasbor real time, AI agent di atas data perusahaan, dan biaya platform yang lebih rendah, semuanya sekaligus. Kebanyakan evaluasi berjalan lewat deck vendor dan proof of concept enam minggu. Sesi ini memadatkannya menjadi satu pagi, sehingga Anda dapat menilai seperti apa arsitekturnya, berapa lama, dan berapa biayanya sebelum berkomitmen anggaran.',
        'whyPoints' => [
            ['n' => '01', 'title' => 'Lihat seluruh stack berjalan dalam empat jam', 'body' => 'Ingesti, penyimpanan, analitik, AI chat, dan observabilitas, terhubung dalam satu platform. Bukan demo yang disiapkan orang lain: lingkungan trial yang disediakan ClickHouse untuk Anda, berjalan dengan data publik dalam 40 menit pertama.'],
            ['n' => '02', 'title' => 'Nilai biaya dan upaya secara langsung', 'body' => 'ClickHouse menyediakan semua yang Anda butuhkan, termasuk akun trial, kredit, aplikasi contoh, dan dataset publik. Setiap perintah cukup salin dan tempel, dan coding agent Anda menangani pengetikan. Anda melihat persis berapa banyak rekayasa yang dibutuhkan stack real time modern.'],
            ['n' => '03', 'title' => 'Pulang dengan prototipe yang dapat dikembangkan tim Anda', 'body' => 'Akun trial Anda tetap aktif hingga 30 hari setelah sesi, dan repositorinya milik Anda. Jika ingin lebih dalam, All Data International dan ClickHouse akan memperpanjang trial untuk proof of concept satu lawan satu di lingkungan Anda.']
        ],
        'prEyebrow' => 'Terbukti di Asia Pasifik',
        'prTitle' => 'Pemimpin pembayaran, streaming, dan fintech sudah berjalan di ClickHouse.',
        'prBody' => 'Lebih dari 4.000 perusahaan menjalankan ClickHouse, termasuk Sony, Visa, Capital One, Anthropic, dan Tesla. Data warehouse cloud tradisional seperti BigQuery dan Snowflake dioptimalkan untuk laporan ad hoc dan berjalan lama, dan biayanya bertambah pada setiap kueri. ClickHouse dirancang untuk analitik real time pada konkurensi tinggi, dengan biaya yang jauh lebih rendah. Bisnis fintech dan media bervolume tinggi di kawasan ini memilihnya karena alasan itu.',
        'logos' => [
            ['name' => 'Juspay', 'meta' => 'Pembayaran · India'],
            ['name' => 'Airwallex', 'meta' => 'Fintech · APAC'],
            ['name' => 'Sony LIV', 'meta' => 'Streaming · India'],
            ['name' => 'Canva', 'meta' => 'SaaS · Australia'],
            ['name' => 'Coinhall', 'meta' => 'Trading · Singapura'],
            ['name' => 'Visa', 'meta' => 'Pembayaran · Global']
        ],
        'quotes' => [
            ['stat' => '10x', 'statLabel' => 'biaya operasional lebih rendah setelah memindahkan analitik real time dari BigQuery ke ClickHouse', 'text' => 'ClickHouse solves most of our problems very efficiently at a small fraction of the price in terms of infrastructure. This is a far better advantage for us in our books.', 'who' => 'Tamil Selvan, Software Development Engineer', 'org' => 'Juspay, 50 juta+ transaksi pembayaran per hari'],
            ['stat' => '40x', 'statLabel' => 'penghematan biaya dibanding BigQuery', 'text' => 'Initially, we used BigQuery, but as our data grew, so did its costs and performance issues. ClickHouse significantly outperformed other databases we tested and delivered at 40x cost savings.', 'who' => 'Tim engineering', 'org' => 'Coinhall, Singapura'],
            ['stat' => '10M+', 'statLabel' => 'event streaming diingesti untuk dasbor operasional langsung', 'text' => 'At Sony LIV, we ingest tens of millions of video streaming events into ClickHouse Cloud and run queries to generate complex dashboards for analysis.', 'who' => 'Tim operasi dan data', 'org' => 'Sony LIV, India']
        ],
        'whoEyebrow' => 'Siapa yang sebaiknya hadir',
        'whoTitle' => 'Arsitek yang menetapkan arah data dan AI, dan pemimpin yang mendanainya.',
        'whoBody' => 'Sesi ini dibangun untuk mereka yang mendefinisikan arsitektur target, menyusun daftar pendek platform, dan mengambil atau membentuk keputusan pembelian. Seluruh pembangunan dipandu penuh dan setiap langkah cukup salin dan tempel, sehingga pemimpin dapat duduk di samping arsiteknya dan melihat hal yang sama.',
        'whoRoles' => ['Lead Data dan AI Architect', 'Enterprise dan Solution Architect', 'Head of Data Platform dan Engineering', 'Chief Data Officer, CTO, dan Head of Analytics dan AI'],
        'whoIndustriesLabel' => 'Sangat relevan untuk',
        'whoIndustries' => ['Perbankan dan keuangan', 'Telekomunikasi', 'Ritel dan FMCG', 'Digital native dan fintech'],
        'plusOneTitle' => 'Ajak satu pendamping.',
        'plusOneBody' => 'Arsitek, ajak pemimpin yang menyetujui platform. Pemimpin, ajak arsitek yang akan menjalankan proof of concept. Satu mengevaluasi desain, yang lain memutuskan. Keduanya pulang dengan bukti yang sama.',
        'outEyebrow' => 'Yang Anda bawa pulang',
        'outTitle' => 'Stack yang berjalan di akun trial ClickHouse Cloud yang Anda simpan.',
        'outBody' => 'ClickHouse menyediakan akun trial, kredit, aplikasi contoh, dan dataset. Anda menghubungkan setiap bagian selama sesi, modul demi modul, di atas 3,2 juta baris data publik taksi NYC. Tidak ada data pelanggan atau data peserta yang digunakan sama sekali.',
        'outcomes' => [
            ['n' => '01', 'title' => 'Dasbor operasional langsung', 'body' => 'Jutaan baris dimuat dari object storage, dengan kueri yang cukup cepat untuk terasa bedanya.'],
            ['n' => '02', 'title' => 'Pipeline CDC real time', 'body' => 'Managed Postgres yang disediakan untuk sesi, mengalir terus menerus ke ClickHouse melalui ClickPipes.'],
            ['n' => '03', 'title' => 'BI percakapan', 'body' => 'Tanyakan data dalam bahasa sehari hari dengan ClickHouse Agents, diatur oleh akses berbasis peran. Tanpa SQL.'],
            ['n' => '04', 'title' => 'Observabilitas penuh dan AI SRE', 'body' => 'Trace dan log aplikasi mengalir ke ClickStack. Agent Anda membangun dasbor dan alert, lalu mendiagnosis dan memperbaiki insiden langsung.'],
            ['n' => '05', 'title' => 'AI chat yang tertelusur', 'body' => 'AI chat di dalam aplikasi dengan setiap giliran, generasi, dan biaya tertelusur tuntas di Langfuse.'],
            ['n' => '+', 'title' => 'Seluruh repositori', 'body' => 'Milik Anda untuk disimpan dan dikembangkan setelah sesi selesai, beserta akun trial yang aktif hingga 30 hari.']
        ],
        'btEyebrow' => 'Lebih kuat bersama',
        'btTitle' => 'Platform global. Pelaksanaan lokal.',
        'btBody' => 'ClickHouse menghadirkan platform analitik real time. All Data International menghadirkan sebelas tahun pengalaman menjalankan program data dan AI untuk enterprise Indonesia. Anda mendapatkan satu tim yang bertanggung jawab dari workshop pertama hingga produksi.',
        'btAdiTitle' => 'All Data International',
        'btAdiPoints' => ['Mitra teknologi tepercaya bagi bank, asuransi, telko, dan BUMN terkemuka di Indonesia', 'Konsultasi, pengembangan use case, managed services, dan dukungan, dilaksanakan secara lokal', 'Tersertifikasi ISO 27001, ISO 45001, dan ISO 14001', 'Mitra resmi ClickHouse di Indonesia'],
        'btTogetherTag' => 'Bersama',
        'btTogetherTitle' => 'Dari workshop ini ke roadmap produksi Anda.',
        'btTogetherBody' => 'Setelah sesi, All Data International dan ClickHouse dengan senang hati memperpanjang trial Anda untuk proof of concept yang lebih dalam, satu lawan satu, di lingkungan Anda sendiri dan dengan sumber data Anda sendiri. Prototipe yang Anda bangun di sini menjadi milestone pertama.',
        'btChTitle' => 'ClickHouse',
        'btChPoints' => ['Database analitik real time open source, digunakan ribuan perusahaan di seluruh dunia', 'ClickHouse Cloud: terkelola penuh, dengan ClickPipes, ClickStack, dan ClickHouse Agents dalam satu platform', 'Jutaan baris dikueri dalam milidetik, dengan biaya jauh lebih rendah dari warehouse tradisional', 'Dibangun untuk beban kerja yang dituntut AI agent dan produk real time'],
        'agEyebrow' => 'Agenda',
        'agTitle' => 'Satu pagi, sepuluh pemberhentian.',
        'agenda' => [
            ['time' => '09.00', 'title' => 'Registrasi dan kopi', 'body' => 'Laptop dibuka, akun diverifikasi, agent terhubung.'],
            ['time' => '09.30', 'title' => 'Pembukaan: mengapa real time dan AI, sekarang', 'body' => 'Apa yang berubah di pasar, dan apa yang akan dibuktikan pagi ini.'],
            ['time' => '09.45', 'title' => 'ClickHouse Cloud dan aplikasi dasar', 'body' => 'Buat skema, muat 3,2 juta baris, dan jelajahi dasbor langsung.'],
            ['time' => '10.15', 'title' => 'CDC real time dan ClickHouse Agents', 'body' => 'Alirkan Postgres ke ClickHouse, lalu kueri dalam bahasa sehari hari.'],
            ['time' => '11.00', 'title' => 'Observabilitas dan AI SRE', 'body' => 'Kirim trace dan log ke ClickStack. Agent Anda membangun dasbor dan alert.'],
            ['time' => '11.45', 'title' => 'Rusak dan perbaiki', 'body' => 'Sebuah gangguan realistis disuntikkan. AI SRE mendiagnosisnya dari telemetri dan merilis perbaikan.'],
            ['time' => '12.15', 'title' => 'AI chat tertelusur dengan Langfuse', 'body' => 'Ikuti setiap generasi dan biayanya secara tuntas.'],
            ['time' => '12.40', 'title' => 'Penutup dan langkah berikutnya', 'body' => 'Apa yang Anda bangun, cara memperpanjang trial untuk proof of concept, dan bagaimana All Data International dan ClickHouse dapat membantu.']
        ],
        'spEyebrow' => 'Pemandu Anda',
        'spTitle' => 'Dipandu oleh orang yang membangunnya.',
        'bringTitle' => 'Yang perlu dibawa',
        'bring' => ['Laptop dengan Docker berjalan', 'AI coding tool yang sudah Anda login: Claude Code, Cursor, Codex CLI, atau Windsurf', 'Akun trial ClickHouse Cloud. Petunjuk persiapan dikirim setelah Anda mendaftar.', 'Tanpa data perusahaan. Workshop hanya menggunakan dataset publik.'],
        'bringNote' => 'Lebih suka menyimak daripada mengetik? Ajak pendamping Anda dan ikuti melalui layar bersama.',
        'regEyebrow' => 'Pendaftaran',
        'regTitle' => 'Amankan kursi Anda.',
        'regBody' => 'Kursi dibatasi agar sesi tetap praktik dan terdampingi dengan baik. Pendaftaran dari arsitek data dan AI serta pemimpin platform diprioritaskan. Tambahkan pendamping Anda dan kami akan menahan kedua kursi.',
        'thanksTitle' => 'Anda sudah terdaftar.',
        'thanksBody' => 'Kami akan mengonfirmasi kursi Anda melalui email dalam dua hari kerja, beserta petunjuk persiapan untuk pagi itu.',
        'fName' => 'Nama lengkap',
        'fEmail' => 'Email kantor',
        'fCompany' => 'Perusahaan',
        'fRole' => 'Jabatan',
        'fRolePh' => 'mis. Head of Data',
        'fIndustry' => 'Industri',
        'fOther' => 'Lainnya',
        'fPlusTitle' => 'Pendamping Anda (opsional)',
        'fPlusName' => 'Nama pendamping',
        'fPlusRole' => 'Jabatan pendamping',
        'fSubmit' => 'Daftarkan saya',
        'fFine' => 'Dengan mendaftar Anda setuju dihubungi oleh All Data International dan ClickHouse terkait acara ini.',
        'footContact' => 'Kontak',
        'footPartner' => 'Mitra resmi ClickHouse di Indonesia.'
    ],
];

$t = $copy[$lang];
?>
<!DOCTYPE html>
<html lang="<?= e($lang) ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Build It, End to End | All Data International and ClickHouse</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">
    <link rel="apple-touch-icon" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            background: #ffffff;
            color: #0b1f3a;
            font-family: Inter, system-ui, sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        * {
            box-sizing: border-box;
        }

        a {
            color: #008bf9;
            text-decoration: none;
        }

        a:hover {
            color: #006fd1;
            text-decoration: underline;
        }

        input,
        select,
        button,
        textarea {
            font-family: inherit;
        }

        @media (max-width:820px) {
            .two {
                grid-template-columns: 1fr !important;
            }

            .three {
                grid-template-columns: 1fr !important;
            }

            .hero {
                grid-template-columns: 1fr !important;
            }

            .navlinks {
                display: none !important;
            }
        }

        /* Hover & focus (menggantikan style-hover/style-focus versi bundel asli) */
        .btn-primary:hover {
            background: #006fd1 !important;
            color: #ffffff !important;
            text-decoration: none !important;
        }

        .btn-secondary:hover {
            border-color: #008bf9 !important;
            color: #008bf9 !important;
            text-decoration: none !important;
        }

        .form-input:focus {
            border-color: #008bf9 !important;
            box-shadow: 0 0 0 3px rgba(0, 139, 249, 0.15);
            outline: none;
        }

        .form-input-sm:focus {
            border-color: #008bf9 !important;
            outline: none;
        }
    </style>
</head>

<body>
    <div style="min-height:100vh;display:flex;flex-direction:column;">

        <!-- Nav -->

        <header style="position:sticky;top:0;z-index:20;background:rgba(255,255,255,0.94);backdrop-filter:blur(8px);border-bottom:1px solid #e6edf5;">
            <div style="max-width:1160px;margin:0 auto;padding:14px 24px;display:flex;align-items:center;justify-content:space-between;gap:24px;">

                <!-- Logos -->
                <div style="display:flex;align-items:center;gap:18px;">

                    <!-- All Data International -->
                    <a href="https://alldataint.com/" style="display:flex;align-items:center;text-decoration:none;">
                        <img
                            src="https://alldataint.com/assets/images/logo_coloured.png"
                            alt="All Data International Logo"
                            style="height:40px;width:auto;display:block;object-fit:contain;">
                    </a>

                    <!-- Separator -->
                    <span style="width:1px;height:28px;background:#d5dfeb;display:block;"></span>

                    <!-- ClickHouse -->
                    <a
                        href="https://clickhouse.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        style="display:flex;align-items:center;text-decoration:none;color:#000;">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 135 40"
                            width="115"
                            height="34"
                            fill="currentColor"
                            role="img"
                            aria-label="ClickHouse">
                            <rect width="2.25" height="20.25" x="2.71" y="9.88" rx="0.24"></rect>
                            <rect width="2.25" height="20.25" x="7.21" y="9.88" rx="0.24"></rect>
                            <rect width="2.25" height="20.25" x="11.71" y="9.88" rx="0.24"></rect>
                            <rect width="2.25" height="20.25" x="16.21" y="9.88" rx="0.24"></rect>
                            <rect width="2.25" height="4.5" x="20.71" y="17.75" rx="0.24"></rect>

                            <path d="M40.03 15.14q-.95 0-1.7.34-.76.33-1.3.98-.52.64-.81 1.56-.27.91-.27 2.07a7 7 0 0 0 .45 2.63q.45 1.1 1.35 1.7t2.27.59q.83 0 1.58-.15.78-.15 1.57-.41v1.67q-.75.3-1.55.42-.8.15-1.84.14-1.96 0-3.27-.81a5 5 0 0 1-1.95-2.3q-.65-1.5-.65-3.5 0-1.46.4-2.66.42-1.23 1.19-2.1a5 5 0 0 1 1.9-1.36 7 7 0 0 1 2.65-.48 8.5 8.5 0 0 1 3.6.79l-.72 1.62q-.62-.3-1.37-.5a5 5 0 0 0-1.53-.24m7.6 11.36h-1.91V12.82h1.9zm4.9-9.7v9.7h-1.9v-9.7zm-.94-3.7q.44.01.76.26t.32.85q0 .57-.32.84a1.2 1.2 0 0 1-.76.25q-.45 0-.79-.25-.3-.27-.3-.84 0-.6.3-.85.33-.25.8-.25m7.84 13.58q-1.34 0-2.34-.52a3.6 3.6 0 0 1-1.56-1.62 6 6 0 0 1-.56-2.83q0-1.8.6-2.91.6-1.13 1.63-1.64a5 5 0 0 1 2.38-.54q.81 0 1.5.18.73.15 1.2.38l-.58 1.54q-.51-.2-1.08-.34-.56-.15-1.06-.14-.9 0-1.5.4-.57.37-.86 1.15-.27.76-.27 1.9 0 1.1.29 1.86.3.75.84 1.15.58.38 1.43.38a5 5 0 0 0 2.57-.65v1.66q-.53.3-1.13.45t-1.5.14m6.81-7.02q0 .38-.04.86-.01.5-.05.9h.05l.78-.97q.2-.26.4-.47l2.96-3.18h2.22l-3.9 4.16 4.15 5.54h-2.25l-3.2-4.34-1.12.94v3.4h-1.89V12.82h1.9zm18.4 6.84H82.7v-5.87h-6.13v5.87h-1.95V13.65h1.95v5.33h6.13v-5.33h1.95zm11.78-4.86q0 1.2-.32 2.14a5 5 0 0 1-.92 1.59q-.6.65-1.44.99a5.3 5.3 0 0 1-3.71 0 4.1 4.1 0 0 1-2.38-2.58 6 6 0 0 1-.34-2.16q0-1.6.54-2.72.56-1.1 1.59-1.69 1.04-.6 2.44-.6 1.34 0 2.34.6 1.03.58 1.6 1.7.6 1.11.6 2.73m-7.15 0q0 1.08.27 1.87.28.78.85 1.19t1.48.41q.9 0 1.47-.41.58-.42.85-1.19.27-.8.27-1.87 0-1.11-.29-1.87-.27-.76-.85-1.15a2.4 2.4 0 0 0-1.47-.42q-1.36 0-1.96.9-.62.9-.62 2.54m17.92-4.84v9.7h-1.53l-.27-1.28h-.09q-.3.5-.8.83-.47.33-1.05.47-.58.16-1.2.16-1.13 0-1.92-.36a2.6 2.6 0 0 1-1.18-1.15 4.5 4.5 0 0 1-.4-2.02V16.8h1.92v6.06q0 1.14.47 1.7.5.55 1.5.55t1.58-.4q.59-.39.81-1.14.25-.78.25-1.86V16.8zm9.43 6.96q0 .96-.47 1.6a3 3 0 0 1-1.35 1q-.88.32-2.12.32-1.03 0-1.77-.16-.71-.15-1.33-.43v-1.7q.65.31 1.5.56a6 6 0 0 0 1.65.23q1.08 0 1.55-.34.5-.34.49-.92 0-.31-.18-.57a2 2 0 0 0-.69-.54q-.48-.3-1.44-.65a15 15 0 0 1-1.56-.74 3 3 0 0 1-1-.88q-.34-.53-.34-1.33 0-1.26 1.01-1.93a5 5 0 0 1 2.7-.68 7 7 0 0 1 3.19.68l-.63 1.46a7 7 0 0 0-1.75-.56 4 4 0 0 0-.9-.09q-.86 0-1.31.27a.8.8 0 0 0-.45.76q0 .34.2.6.21.24.73.5.53.25 1.43.6t1.53.71q.64.36.97.88.34.53.34 1.33m6.1-7.14q1.27 0 2.19.54.92.52 1.4 1.51.5.99.5 2.34v1.04h-6.51q.03 1.5.77 2.29.75.8 2.11.8a8 8 0 0 0 1.66-.17q.74-.19 1.5-.52v1.58a7 7 0 0 1-3.23.65q-1.41 0-2.49-.56a4 4 0 0 1-1.69-1.65q-.6-1.12-.6-2.74 0-1.65.55-2.77a4.1 4.1 0 0 1 3.83-2.34m0 1.47q-1.04 0-1.66.67-.62.66-.72 1.89h4.57q0-.76-.24-1.33-.23-.59-.72-.9a2.2 2.2 0 0 0-1.24-.33"></path>
                        </svg>
                    </a>

                </div>

                <!-- Navigation -->
                <nav class="navlinks" style="display:flex;gap:28px;font-size:14px;font-weight:500;color:#3b4d63;">
                    <a href="#why" style="color:#3b4d63;"><?= e($t['navWhy']) ?></a>
                    <a href="#who" style="color:#3b4d63;"><?= e($t['navWho']) ?></a>
                    <a href="#agenda" style="color:#3b4d63;"><?= e($t['navAgenda']) ?></a>
                    <a href="#partners" style="color:#3b4d63;"><?= e($t['navPartners']) ?></a>
                </nav>

                <!-- Right Actions -->
                <div style="display:flex;align-items:center;gap:12px;">

                    <!-- Language -->
                    <div style="display:flex;border:1px solid #d5dfeb;border-radius:999px;overflow:hidden;font-size:12px;font-weight:600;">
                        <a
                            href="?lang=en"
                            style="padding:6px 12px;border:none;text-decoration:none;display:inline-block;<?= $lang === 'en' ? 'background:#0b1f3a;color:#ffffff;' : 'background:#ffffff;color:#3b4d63;' ?>">EN</a>

                        <a
                            href="?lang=id"
                            style="padding:6px 12px;border:none;text-decoration:none;display:inline-block;<?= $lang === 'id' ? 'background:#0b1f3a;color:#ffffff;' : 'background:#ffffff;color:#3b4d63;' ?>">ID</a>
                    </div>

                    <!-- Register -->
                    <a
                        href="https://forms.cloud.microsoft/r/GCQDj3tTW5"
                        class="btn-primary"
                        style="background:#008bf9;color:#ffffff;padding:10px 18px;border-radius:999px;font-size:14px;font-weight:600;white-space:nowrap;"><?= e($t['register']) ?></a>

                </div>

            </div>
        </header>



        <!-- Hero -->
        <section style="background:linear-gradient(180deg,#f3f8fe 0%,#ffffff 100%);border-bottom:1px solid #e6edf5;">
            <div class="hero" style="max-width:1160px;margin:0 auto;padding:72px 24px 64px;display:grid;grid-template-columns:minmax(0,7fr) minmax(0,5fr);gap:56px;align-items:center;">
                <div style="display:flex;flex-direction:column;gap:22px;">
                    <div style="display:inline-flex;align-items:center;gap:10px;align-self:flex-start;background:#faff69;color:#161616;font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;padding:8px 14px;border-radius:999px;"><?= e($t['eyebrow']) ?></div>
                    <h1 style="margin:0;font-size:clamp(40px,5.2vw,64px);line-height:1.02;font-weight:900;letter-spacing:-0.03em;color:#0b1f3a;text-wrap:balance;"><?= e($t['h1a']) ?> <span style="color:#008bf9;"><?= e($t['h1b']) ?></span></h1>
                    <p style="margin:0;font-size:19px;line-height:1.55;color:#3b4d63;max-width:600px;text-wrap:pretty;"><?= e($t['heroSub']) ?></p>
                    <div style="display:flex;gap:14px;flex-wrap:wrap;align-items:center;margin-top:6px;">
                        <a href="#register" class="btn-primary" style="background:#008bf9;color:#ffffff;padding:15px 26px;border-radius:999px;font-size:16px;font-weight:700;"><?= e($t['heroCta']) ?></a>
                        <a href="#agenda" class="btn-secondary" style="color:#0b1f3a;padding:15px 22px;border-radius:999px;border:1px solid #c9d6e5;font-size:16px;font-weight:600;background:#ffffff;"><?= e($t['heroCta2']) ?></a>
                    </div>
                    <p style="margin:6px 0 0;font-size:14px;color:#5b6b80;"><?= e($t['heroNote']) ?></p>
                </div>
                <div style="background:#ffffff;border:1px solid #dfe8f2;border-radius:20px;padding:30px;box-shadow:0 20px 50px rgba(11,31,58,0.08);display:flex;flex-direction:column;gap:22px;">
                    <div style="display:flex;flex-direction:column;gap:4px;">
                        <span style="font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:#008bf9;"><?= e($t['dateLabel']) ?></span>
                        <span style="font-size:26px;font-weight:800;letter-spacing:-0.02em;color:#0b1f3a;"><?= e($t['dateValue']) ?></span>
                        <span style="font-size:15px;color:#3b4d63;"><?= e($t['timeValue']) ?></span>
                    </div>
                    <div style="height:1px;background:#e6edf5;"></div>
                    <div style="display:flex;flex-direction:column;gap:4px;">
                        <span style="font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:#008bf9;"><?= e($t['locationLabel']) ?></span>
                        <span style="font-size:18px;font-weight:700;color:#0b1f3a;">AWS Office</span>
                        <span style="font-size:15px;line-height:1.5;color:#3b4d63;">Sinarmas MSIG Tower, 16th Floor<br>Jl. Jend. Sudirman No. Kav 21, South Jakarta</span>
                    </div>
                    <div style="height:1px;background:#e6edf5;"></div>
                    <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px;">
                        <div style="display:flex;flex-direction:column;gap:2px;"><span style="font-size:22px;font-weight:800;color:#0b1f3a;">4h</span><span style="font-size:12px;color:#5b6b80;"><?= e($t['stat1']) ?></span></div>
                        <div style="display:flex;flex-direction:column;gap:2px;"><span style="font-size:22px;font-weight:800;color:#0b1f3a;">$0</span><span style="font-size:12px;color:#5b6b80;"><?= e($t['stat2']) ?></span></div>
                        <div style="display:flex;flex-direction:column;gap:2px;"><span style="font-size:22px;font-weight:800;color:#0b1f3a;">1+1</span><span style="font-size:12px;color:#5b6b80;"><?= e($t['stat3']) ?></span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why -->
        <section id="why" style="max-width:1160px;margin:0 auto;padding:88px 24px 40px;width:100%;">
            <div class="two" style="display:grid;grid-template-columns:minmax(0,5fr) minmax(0,7fr);gap:48px;align-items:start;">
                <div style="display:flex;flex-direction:column;gap:14px;">
                    <span style="font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:#008bf9;"><?= e($t['whyEyebrow']) ?></span>
                    <h2 style="margin:0;font-size:clamp(30px,3.4vw,42px);line-height:1.1;font-weight:800;letter-spacing:-0.025em;color:#0b1f3a;text-wrap:balance;"><?= e($t['whyTitle']) ?></h2>
                    <p style="margin:0;font-size:17px;line-height:1.6;color:#3b4d63;text-wrap:pretty;"><?= e($t['whyBody']) ?></p>
                </div>
                <div style="display:flex;flex-direction:column;gap:14px;">
                    <?php foreach ($t['whyPoints'] as $p): ?>
                        <div style="display:grid;grid-template-columns:52px 1fr;gap:18px;padding:22px 24px;background:#f3f8fe;border-radius:16px;">
                            <span style="width:52px;height:52px;border-radius:14px;background:#ffffff;border:1px solid #d5e4f5;display:flex;align-items:center;justify-content:center;font-family:'Roboto Mono',monospace;font-size:15px;font-weight:500;color:#008bf9;"><?= e($p['n']) ?></span>
                            <div style="display:flex;flex-direction:column;gap:6px;">
                                <h3 style="margin:0;font-size:18px;font-weight:700;color:#0b1f3a;"><?= e($p['title']) ?></h3>
                                <p style="margin:0;font-size:15px;line-height:1.55;color:#3b4d63;text-wrap:pretty;"><?= e($p['body']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Proof -->
        <section id="proof" style="max-width:1160px;margin:0 auto;padding:40px 24px 88px;width:100%;display:flex;flex-direction:column;gap:40px;">
            <div style="display:flex;flex-direction:column;gap:14px;max-width:720px;">
                <span style="font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:#008bf9;"><?= e($t['prEyebrow']) ?></span>
                <h2 style="margin:0;font-size:clamp(30px,3.4vw,42px);line-height:1.1;font-weight:800;letter-spacing:-0.025em;color:#0b1f3a;text-wrap:balance;"><?= e($t['prTitle']) ?></h2>
                <p style="margin:0;font-size:17px;line-height:1.6;color:#3b4d63;text-wrap:pretty;"><?= e($t['prBody']) ?></p>
            </div>
            <div class="three" style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:18px;">
                <?php foreach ($t['quotes'] as $q): ?>
                    <div style="display:flex;flex-direction:column;gap:18px;padding:28px;background:#f3f8fe;border-radius:18px;">
                        <div style="display:flex;flex-direction:column;gap:2px;">
                            <span style="font-size:34px;font-weight:900;letter-spacing:-0.03em;color:#008bf9;line-height:1;"><?= e($q['stat']) ?></span>
                            <span style="font-size:13px;font-weight:600;color:#3b4d63;"><?= e($q['statLabel']) ?></span>
                        </div>
                        <p style="margin:0;font-size:15px;line-height:1.6;color:#0b1f3a;text-wrap:pretty;">“<?= e($q['text']) ?>”</p>
                        <div style="display:flex;flex-direction:column;gap:2px;margin-top:auto;">
                            <strong style="font-size:14px;color:#0b1f3a;"><?= e($q['who']) ?></strong>
                            <span style="font-size:13px;color:#5b6b80;"><?= e($q['org']) ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Who -->
        <section id="who" style="max-width:1160px;margin:0 auto;padding:48px 24px 88px;width:100%;">
            <div style="background:#0b1f3a;border-radius:24px;padding:56px 48px;color:#ffffff;display:flex;flex-direction:column;gap:40px;">
                <div class="two" style="display:grid;grid-template-columns:minmax(0,5fr) minmax(0,7fr);gap:48px;align-items:start;">
                    <div style="display:flex;flex-direction:column;gap:14px;">
                        <span style="font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:#faff69;"><?= e($t['whoEyebrow']) ?></span>
                        <h2 style="margin:0;font-size:clamp(30px,3.4vw,42px);line-height:1.1;font-weight:800;letter-spacing:-0.025em;color:#ffffff;text-wrap:balance;"><?= e($t['whoTitle']) ?></h2>
                        <p style="margin:0;font-size:17px;line-height:1.6;color:#c4d1e0;text-wrap:pretty;"><?= e($t['whoBody']) ?></p>
                    </div>
                    <div style="display:flex;flex-direction:column;gap:22px;">
                        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:10px;">
                            <?php foreach ($t['whoRoles'] as $r): ?>
                                <div style="display:flex;align-items:center;gap:12px;padding:14px 16px;border:1px solid rgba(255,255,255,0.16);border-radius:12px;font-size:15px;font-weight:600;color:#ffffff;">
                                    <span style="width:8px;height:8px;border-radius:50%;background:#faff69;flex:none;"></span><?= e($r) ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div style="display:flex;flex-direction:column;gap:10px;">
                            <span style="font-size:13px;font-weight:600;color:#8fa4bd;"><?= e($t['whoIndustriesLabel']) ?></span>
                            <div style="display:flex;flex-wrap:wrap;gap:8px;">
                                <?php foreach ($t['whoIndustries'] as $i): ?>
                                    <span style="padding:7px 14px;border-radius:999px;background:rgba(255,255,255,0.08);font-size:13px;font-weight:500;color:#e2eaf3;"><?= e($i) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display:grid;grid-template-columns:auto 1fr;gap:20px;align-items:center;background:#faff69;color:#161616;border-radius:16px;padding:22px 26px;">
                    <span style="font-family:'Roboto Mono',monospace;font-size:28px;font-weight:500;line-height:1;">+1</span>
                    <div style="display:flex;flex-direction:column;gap:4px;">
                        <strong style="font-size:17px;font-weight:800;"><?= e($t['plusOneTitle']) ?></strong>
                        <span style="font-size:15px;line-height:1.5;text-wrap:pretty;"><?= e($t['plusOneBody']) ?></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outcomes -->
        <section id="outcomes" style="background:#f3f8fe;border-top:1px solid #e6edf5;border-bottom:1px solid #e6edf5;">
            <div style="max-width:1160px;margin:0 auto;padding:88px 24px;display:flex;flex-direction:column;gap:44px;">
                <div style="display:flex;flex-direction:column;gap:14px;max-width:680px;">
                    <span style="font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:#008bf9;"><?= e($t['outEyebrow']) ?></span>
                    <h2 style="margin:0;font-size:clamp(30px,3.4vw,42px);line-height:1.1;font-weight:800;letter-spacing:-0.025em;color:#0b1f3a;text-wrap:balance;"><?= e($t['outTitle']) ?></h2>
                    <p style="margin:0;font-size:17px;line-height:1.6;color:#3b4d63;text-wrap:pretty;"><?= e($t['outBody']) ?></p>
                </div>
                <div class="three" style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:18px;">
                    <?php foreach ($t['outcomes'] as $o): ?>
                        <div style="background:#ffffff;border:1px solid #dfe8f2;border-radius:18px;padding:26px;display:flex;flex-direction:column;gap:14px;min-height:190px;">
                            <span style="font-family:'Roboto Mono',monospace;font-size:13px;color:#008bf9;font-weight:500;"><?= e($o['n']) ?></span>
                            <h3 style="margin:0;font-size:19px;font-weight:700;color:#0b1f3a;line-height:1.25;"><?= e($o['title']) ?></h3>
                            <p style="margin:0;font-size:15px;line-height:1.55;color:#3b4d63;text-wrap:pretty;"><?= e($o['body']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Better together -->
        <section id="partners" style="max-width:1160px;margin:0 auto;padding:88px 24px;width:100%;display:flex;flex-direction:column;gap:44px;">
            <div style="display:flex;flex-direction:column;gap:14px;max-width:720px;">
                <span style="font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:#008bf9;"><?= e($t['btEyebrow']) ?></span>
                <h2 style="margin:0;font-size:clamp(30px,3.4vw,42px);line-height:1.1;font-weight:800;letter-spacing:-0.025em;color:#0b1f3a;text-wrap:balance;"><?= e($t['btTitle']) ?></h2>
                <p style="margin:0;font-size:17px;line-height:1.6;color:#3b4d63;text-wrap:pretty;"><?= e($t['btBody']) ?></p>
            </div>
            <div class="three" style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:18px;align-items:stretch;">
                <div style="border:1px solid #dfe8f2;border-radius:18px;padding:30px;display:flex;flex-direction:column;gap:18px;">
                    <img src="<?= $adiLogo ?>" alt="All Data International" style="height:44px;width:auto;align-self:flex-start;">
                    <h3 style="margin:0;font-size:20px;font-weight:700;color:#0b1f3a;"><?= e($t['btAdiTitle']) ?></h3>
                    <ul style="margin:0;padding:0;list-style:none;display:flex;flex-direction:column;gap:10px;font-size:15px;line-height:1.5;color:#3b4d63;">
                        <?php foreach ($t['btAdiPoints'] as $p): ?><li style="display:flex;gap:10px;"><span style="color:#008bf9;font-weight:700;">·</span><span><?= e($p) ?></span></li><?php endforeach; ?>
                    </ul>
                </div>
                <div style="background:#0b1f3a;border-radius:18px;padding:30px;display:flex;flex-direction:column;gap:18px;color:#ffffff;">
                    <span style="display:inline-flex;align-self:flex-start;background:#faff69;color:#161616;font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;padding:6px 12px;border-radius:999px;"><?= e($t['btTogetherTag']) ?></span>
                    <h3 style="margin:0;font-size:22px;font-weight:800;line-height:1.2;letter-spacing:-0.02em;"><?= e($t['btTogetherTitle']) ?></h3>
                    <p style="margin:0;font-size:15px;line-height:1.6;color:#c4d1e0;text-wrap:pretty;"><?= e($t['btTogetherBody']) ?></p>
                </div>
                <div style="border:1px solid #dfe8f2;border-radius:18px;padding:30px;display:flex;flex-direction:column;gap:18px;">
                    <div style="height:34px;display:flex;align-items:center;align-self:flex-start;margin:7px 0;color:#000000;">
                        <?= $clickhouseLogoNav ?>
                    </div>
                    <h3 style="margin:0;font-size:20px;font-weight:700;color:#0b1f3a;"><?= e($t['btChTitle']) ?></h3>
                    <ul style="margin:0;padding:0;list-style:none;display:flex;flex-direction:column;gap:10px;font-size:15px;line-height:1.5;color:#3b4d63;">
                        <?php foreach ($t['btChPoints'] as $p): ?><li style="display:flex;gap:10px;"><span style="color:#008bf9;font-weight:700;">·</span><span><?= e($p) ?></span></li><?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Agenda + speakers -->
        <section id="agenda" style="background:#f3f8fe;border-top:1px solid #e6edf5;border-bottom:1px solid #e6edf5;">
            <div class="two" style="max-width:1160px;margin:0 auto;padding:88px 24px;display:grid;grid-template-columns:minmax(0,7fr) minmax(0,5fr);gap:56px;align-items:start;">
                <div style="display:flex;flex-direction:column;gap:28px;">
                    <div style="display:flex;flex-direction:column;gap:14px;">
                        <span style="font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:#008bf9;"><?= e($t['agEyebrow']) ?></span>
                        <h2 style="margin:0;font-size:clamp(30px,3.4vw,42px);line-height:1.1;font-weight:800;letter-spacing:-0.025em;color:#0b1f3a;text-wrap:balance;"><?= e($t['agTitle']) ?></h2>
                    </div>
                    <div style="display:flex;flex-direction:column;background:#ffffff;border:1px solid #dfe8f2;border-radius:18px;overflow:hidden;">
                        <?php foreach ($t['agenda'] as $a): ?>
                            <div style="display:grid;grid-template-columns:84px 1fr;gap:18px;padding:18px 24px;border-bottom:1px solid #edf2f8;">
                                <span style="font-family:'Roboto Mono',monospace;font-size:14px;color:#008bf9;font-weight:500;padding-top:2px;"><?= e($a['time']) ?></span>
                                <div style="display:flex;flex-direction:column;gap:3px;">
                                    <strong style="font-size:16px;font-weight:700;color:#0b1f3a;"><?= e($a['title']) ?></strong>
                                    <span style="font-size:14px;line-height:1.5;color:#3b4d63;"><?= e($a['body']) ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div style="display:flex;flex-direction:column;gap:28px;">
                    <div style="display:flex;flex-direction:column;gap:14px;">
                        <span style="font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:#008bf9;"><?= e($t['spEyebrow']) ?></span>
                        <h2 style="margin:0;font-size:clamp(26px,2.6vw,32px);line-height:1.15;font-weight:800;letter-spacing:-0.02em;color:#0b1f3a;"><?= e($t['spTitle']) ?></h2>
                    </div>
                    <div style="display:flex;flex-direction:column;gap:14px;">
                        <div style="display:flex;gap:16px;align-items:center;background:#ffffff;border:1px solid #dfe8f2;border-radius:16px;padding:18px 20px;">
                            <img
                                src="<?= base_url('assets/images/events/speakers/rizki.webp') ?>"
                                alt="Rizki Ramadhan"
                                style="width:56px;height:56px;border-radius:50%;object-fit:cover;display:block;flex:none;border:3px solid #ffffff;box-shadow:0 0 0 2px #008bf9;">
                            <div style="display:flex;flex-direction:column;gap:2px;">
                                <strong style="font-size:17px;color:#0b1f3a;">Rizki Ramadhan</strong>
                                <span style="font-size:14px;color:#3b4d63;">Solution Architect, All Data International</span>
                            </div>
                        </div>

                        <div style="display:flex;gap:16px;align-items:center;background:#ffffff;border:1px solid #dfe8f2;border-radius:16px;padding:18px 20px;">
                            <img
                                src="<?= base_url('assets/images/events/speakers/shuo.webp') ?>"
                                alt="Si Shuo Yang"
                                style="width:56px;height:56px;border-radius:50%;object-fit:cover;display:block;flex:none;border:3px solid #ffffff;box-shadow:0 0 0 2px #008bf9;">
                            <div style="display:flex;flex-direction:column;gap:2px;">
                                <strong style="font-size:17px;color:#0b1f3a;">Si Shuo Yang</strong>
                                <span style="font-size:14px;color:#3b4d63;">Partner Solution Architect, ClickHouse</span>
                            </div>
                        </div>
                    </div>
                    <div style="display:flex;flex-direction:column;gap:12px;background:#ffffff;border:1px solid #dfe8f2;border-radius:16px;padding:22px 24px;">
                        <strong style="font-size:15px;font-weight:700;color:#0b1f3a;"><?= e($t['bringTitle']) ?></strong>
                        <ul style="margin:0;padding:0;list-style:none;display:flex;flex-direction:column;gap:8px;font-size:14px;line-height:1.5;color:#3b4d63;">
                            <?php foreach ($t['bring'] as $b): ?><li style="display:flex;gap:10px;"><span style="color:#008bf9;font-weight:700;">·</span><span><?= e($b) ?></span></li><?php endforeach; ?>
                        </ul>
                        <span style="font-size:13px;line-height:1.5;color:#5b6b80;"><?= e($t['bringNote']) ?></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Register -->
        <section id="register" style="max-width:1160px;margin:0 auto;padding:88px 24px;width:100%;">
            <div class="two" style="display:grid;grid-template-columns:minmax(0,5fr) minmax(0,7fr);gap:56px;align-items:start;">
                <div style="display:flex;flex-direction:column;gap:14px;">
                    <span style="font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:#008bf9;"><?= e($t['regEyebrow']) ?></span>
                    <h2 style="margin:0;font-size:clamp(30px,3.4vw,42px);line-height:1.1;font-weight:800;letter-spacing:-0.025em;color:#0b1f3a;text-wrap:balance;"><?= e($t['regTitle']) ?></h2>
                    <p style="margin:0;font-size:17px;line-height:1.6;color:#3b4d63;text-wrap:pretty;"><?= e($t['regBody']) ?></p>
                    <div style="margin-top:12px;display:flex;flex-direction:column;gap:6px;font-size:15px;color:#3b4d63;">
                        <span><strong style="color:#0b1f3a;"><?= e($t['dateValue']) ?></strong> · <?= e($t['timeValue']) ?></span>
                        <span>AWS Office, Sinarmas MSIG Tower 16th Floor, South Jakarta</span>
                    </div>
                </div>
                <div style="background:#ffffff;border:1px solid #dfe8f2;border-radius:20px;padding:32px;box-shadow:0 20px 50px rgba(11,31,58,0.06);">

                    <a
                        href="https://forms.cloud.microsoft/r/GCQDj3tTW5"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn-primary"
                        style="
            display:inline-flex;
            align-items:center;
            justify-content:center;
            background:#008bf9;
            color:#ffffff;
            border:none;
            padding:15px 26px;
            border-radius:999px;
            font-size:16px;
            font-weight:700;
            cursor:pointer;
            margin-top:4px;
            text-decoration:none;
        ">
                        <?= e($t['fSubmit']) ?>
                    </a>

                </div>
            </div>
        </section>

        <footer style="margin-top:auto;background:#0b1f3a;color:#c4d1e0;">
            <div style="max-width:1160px;margin:0 auto;padding:40px 24px;display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center;gap:24px;">
                <div style="display:flex;align-items:center;gap:18px;">

                    <!-- All Data International Logo -->
                    <a
                        href="https://alldataint.com/"
                        style="display:flex;align-items:center;text-decoration:none;">
                        <img
                            src="https://alldataint.com/assets/images/events/All_Data_Logo-putih.png"
                            alt="All Data International Logo"
                            style="height:36px;width:auto;object-fit:contain;display:block;">
                    </a>

                    <!-- Separator -->
                    <span style="font-size:20px;color:#8fa4bd;font-weight:300;line-height:1;">
                        ×
                    </span>

                    <!-- ClickHouse Logo -->
                    <a
                        href="https://clickhouse.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        style="display:flex;align-items:center;text-decoration:none;color:#ffffff;">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 135 40"
                            width="115"
                            height="34"
                            fill="currentColor"
                            role="img"
                            aria-label="ClickHouse">
                            <rect width="2.25" height="20.25" x="2.71" y="9.88" rx="0.24"></rect>
                            <rect width="2.25" height="20.25" x="7.21" y="9.88" rx="0.24"></rect>
                            <rect width="2.25" height="20.25" x="11.71" y="9.88" rx="0.24"></rect>
                            <rect width="2.25" height="20.25" x="16.21" y="9.88" rx="0.24"></rect>
                            <rect width="2.25" height="4.5" x="20.71" y="17.75" rx="0.24"></rect>

                            <path d="M40.03 15.14q-.95 0-1.7.34-.76.33-1.3.98-.52.64-.81 1.56-.27.91-.27 2.07a7 7 0 0 0 .45 2.63q.45 1.1 1.35 1.7t2.27.59q.83 0 1.58-.15.78-.15 1.57-.41v1.67q-.75.3-1.55.42-.8.15-1.84.14-1.96 0-3.27-.81a5 5 0 0 1-1.95-2.3q-.65-1.5-.65-3.5 0-1.46.4-2.66.42-1.23 1.19-2.1a5 5 0 0 1 1.9-1.36 7 7 0 0 1 2.65-.48 8.5 8.5 0 0 1 3.6.79l-.72 1.62q-.62-.3-1.37-.5a5 5 0 0 0-1.53-.24m7.6 11.36h-1.91V12.82h1.9zm4.9-9.7v9.7h-1.9v-9.7zm-.94-3.7q.44.01.76.26t.32.85q0 .57-.32.84a1.2 1.2 0 0 1-.76.25q-.45 0-.79-.25-.3-.27-.3-.84 0-.6.3-.85.33-.25.8-.25m7.84 13.58q-1.34 0-2.34-.52a3.6 3.6 0 0 1-1.56-1.62 6 6 0 0 1-.56-2.83q0-1.8.6-2.91.6-1.13 1.63-1.64a5 5 0 0 1 2.38-.54q.81 0 1.5.18.73.15 1.2.38l-.58 1.54q-.51-.2-1.08-.34-.56-.15-1.06-.14-.9 0-1.5.4-.57.37-.86 1.15-.27.76-.27 1.9 0 1.1.29 1.86.3.75.84 1.15.58.38 1.43.38a5 5 0 0 0 2.57-.65v1.66q-.53.3-1.13.45t-1.5.14m6.81-7.02q0 .38-.04.86-.01.5-.05.9h.05l.78-.97q.2-.26.4-.47l2.96-3.18h2.22l-3.9 4.16 4.15 5.54h-2.25l-3.2-4.34-1.12.94v3.4h-1.89V12.82h1.9zm18.4 6.84H82.7v-5.87h-6.13v5.87h-1.95V13.65h1.95v5.33h6.13v-5.33h1.95zm11.78-4.86q0 1.2-.32 2.14a5 5 0 0 1-.92 1.59q-.6.65-1.44.99a5.3 5.3 0 0 1-3.71 0 4.1 4.1 0 0 1-2.38-2.58 6 6 0 0 1-.34-2.16q0-1.6.54-2.72.56-1.1 1.59-1.69 1.04-.6 2.44-.6 1.34 0 2.34.6 1.03.58 1.6 1.7.6 1.11.6 2.73m-7.15 0q0 1.08.27 1.87.28.78.85 1.19t1.48.41q.9 0 1.47-.41.58-.42.85-1.19.27-.8.27-1.87 0-1.11-.29-1.87-.27-.76-.85-1.15a2.4 2.4 0 0 0-1.47-.42q-1.36 0-1.96.9-.62.9-.62 2.54m17.92-4.84v9.7h-1.53l-.27-1.28h-.09q-.3.5-.8.83-.47.33-1.05.47-.58.16-1.2.16-1.13 0-1.92-.36a2.6 2.6 0 0 1-1.18-1.15 4.5 4.5 0 0 1-.4-2.02V16.8h1.92v6.06q0 1.14.47 1.7.5.55 1.5.55t1.58-.4q.59-.39.81-1.14.25-.78.25-1.86V16.8zm9.43 6.96q0 .96-.47 1.6a3 3 0 0 1-1.35 1q-.88.32-2.12.32-1.03 0-1.77-.16-.71-.15-1.33-.43v-1.7q.65.31 1.5.56a6 6 0 0 0 1.65.23q1.08 0 1.55-.34.5-.34.49-.92 0-.31-.18-.57a2 2 0 0 0-.69-.54q-.48-.3-1.44-.65a15 15 0 0 1-1.56-.74 3 3 0 0 1-1-.88q-.34-.53-.34-1.33 0-1.26 1.01-1.93a5 5 0 0 1 2.7-.68 7 7 0 0 1 3.19.68l-.63 1.46a7 7 0 0 0-1.75-.56 4 4 0 0 0-.9-.09q-.86 0-1.31.27a.8.8 0 0 0-.45.76q0 .34.2.6.21.24.73.5.53.25 1.43.6t1.53.71q.64.36.97.88.34.53.34 1.33m6.1-7.14q1.27 0 2.19.54.92.52 1.4 1.51.5.99.5 2.34v1.04h-6.51q.03 1.5.77 2.29.75.8 2.11.8a8 8 0 0 0 1.66-.17q.74-.19 1.5-.52v1.58a7 7 0 0 1-3.23.65q-1.41 0-2.49-.56a4 4 0 0 1-1.69-1.65q-.6-1.12-.6-2.74 0-1.65.55-2.77a4.1 4.1 0 0 1 3.83-2.34m0 1.47q-1.04 0-1.66.67-.62.66-.72 1.89h4.57q0-.76-.24-1.33-.23-.59-.72-.9a2.2 2.2 0 0 0-1.24-.33"></path>
                        </svg>
                    </a>

                </div>
                <div style="display:flex;flex-direction:column;gap:4px;font-size:13px;line-height:1.5;">
                    <span style="color:#ffffff;font-weight:600;">
                        <?= e($t['footContact']) ?>
                    </span>

                    <span>
                        <strong style="color:#ffffff;">Aji Nugroho</strong>
                        |
                        <a href="mailto:aji.nugroho@alldataint.com" style="color:#ffffff;text-decoration:none;">
                            aji.nugroho@alldataint.com
                        </a>
                        |
                        <a href="https://wa.me/6281283938595" target="_blank" rel="noopener noreferrer" style="color:#ffffff;text-decoration:none;">
                            +62 812-8393-8595
                        </a>
                    </span>

                    <span style="color:#8fa4bd;">
                        © 2026 PT All Data International. <?= e($t['footPartner']) ?>
                    </span>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>