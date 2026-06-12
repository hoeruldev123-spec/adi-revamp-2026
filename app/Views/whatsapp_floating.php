<!-- ===== WhatsApp Floating Widget ===== -->
<div id="waWidget" class="wa-widget" aria-live="polite">
    <!-- Mini chat box -->
    <div id="waBox" class="wa-box" role="dialog" aria-label="WhatsApp quick chat">
        <div class="wa-box-header">
            <div class="wa-brand">
                <span class="wa-badge" aria-hidden="true">
                    <!-- WhatsApp icon (inline SVG) -->
                    <img src="<?= base_url('assets/icon-color/info-whatsapp-filled.svg') ?>" alt="whatsapp">
                </span>
                <div>
                    <div class="wa-title">Chat with us</div>
                    <div class="wa-subtitle">Typically replies within a few minutes</div>
                </div>
            </div>

            <button type="button" id="waClose" class="wa-close" aria-label="Close chat">
                <svg width="18" height="18" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
        </div>

        <div class="wa-box-body">
            <div class="wa-bubble">Hi! 👋 Choose a quick question below, or type your own message.</div>

            <div class="wa-quick">
                <button type="button" class="wa-chip" data-wa-msg="Hi, I’d like to know more about your services.">Services & pricing</button>
                <button type="button" class="wa-chip" data-wa-msg="Hi, can you help us with data integration / AI solutions?">AI & data integration</button>
                <button type="button" class="wa-chip" data-wa-msg="Hi, I’d like to request a demo / consultation.">Request a demo</button>
            </div>
        </div>

        <div class="wa-box-footer">
            <button type="button" id="waSend" class="wa-send">
                Start WhatsApp
                <span aria-hidden="true" class="wa-send-icon">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.854.146a.5.5 0 0 0-.52-.114l-15 6a.5.5 0 0 0 .04.94l5.943 1.982 1.982 5.943a.5.5 0 0 0 .94.04l6-15a.5.5 0 0 0-.385-.78zM6.832 8.168 13.11 2.89 7.832 9.168l-.72 2.16-1.2-3.6-3.6-1.2 2.16-.72z" />
                    </svg>
                </span>
            </button>
        </div>
    </div>

    <!-- Floating button -->
    <button type="button" id="waFab" class="wa-fab" aria-label="Open WhatsApp chat">
        <svg width="28" height="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.297.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" fill="#fff" />
        </svg>
    </button>
</div>
<!-- ===== /WhatsApp Floating Widget ===== -->