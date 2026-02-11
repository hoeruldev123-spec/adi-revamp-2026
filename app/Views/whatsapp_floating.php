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
        <svg width="26" height="26" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M19.11 17.2c-.27-.14-1.6-.79-1.85-.88-.25-.09-.43-.14-.61.14-.18.27-.7.88-.86 1.06-.16.18-.32.2-.59.07-.27-.14-1.15-.42-2.2-1.33-.81-.72-1.36-1.6-1.52-1.87-.16-.27-.02-.42.12-.56.13-.13.27-.32.41-.48.14-.16.18-.27.27-.45.09-.18.05-.34-.02-.48-.07-.14-.61-1.47-.84-2.02-.22-.53-.44-.46-.61-.46h-.52c-.18 0-.48.07-.73.34-.25.27-.95.93-.95 2.27s.97 2.64 1.1 2.82c.14.18 1.9 2.9 4.6 4.07.64.28 1.14.45 1.53.57.64.2 1.22.17 1.68.1.51-.08 1.6-.65 1.83-1.28.23-.63.23-1.17.16-1.28-.07-.11-.25-.18-.52-.32z" />
            <path d="M26.67 5.33A13.27 13.27 0 0 0 3.7 20.9L2.67 29.33l8.62-2.02A13.27 13.27 0 0 0 29.33 16c0-3.56-1.39-6.91-3.66-9.17zM16 27.02c-2.1 0-4.16-.57-5.95-1.65l-.43-.25-5.11 1.2.62-5.02-.28-.49A10.99 10.99 0 1 1 16 27.02z" />
        </svg>
    </button>
</div>
<!-- ===== /WhatsApp Floating Widget ===== -->