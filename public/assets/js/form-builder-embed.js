/**
 * Form Builder JavaScript Embed (Method 2).
 *
 * Penggunaan dari landing page project berbeda:
 *
 *   <div id="event-form"></div>
 *   <script src="https://form.domain.com/assets/js/form-builder-embed.js"></script>
 *   <script>
 *     EventForm.render({
 *       event:  "EVT-2026-DATAIKU-001",
 *       target: "#event-form"
 *     });
 *   </script>
 *
 * Opsi:
 *   - baseUrl : base URL aplikasi Form Builder (default: otomatis dari src script)
 *   - target  : selector elemen tujuan
 *   - event   : Event ID
 */
(function (global) {
    'use strict';

    function resolveBaseUrl() {
        var scripts = document.getElementsByTagName('script');
        for (var i = 0; i < scripts.length; i++) {
            var src = scripts[i].src || '';
            if (src.indexOf('form-builder-embed.js') !== -1) {
                return src.substring(0, src.indexOf('form-builder-embed.js'));
            }
        }
        return '/';
    }

    function el(html) {
        var t = document.createElement('template');
        t.innerHTML = html.trim();
        return t.content.firstChild;
    }

    function buildField(f) {
        var wrap = '<div class="fb-field mb-3">';
        var required = f.required ? ' required' : '';
        var labelHtml = '<label class="form-label">' + escapeHtml(f.label) +
            (f.required ? ' <span class="text-danger">*</span>' : '') + '</label>';
        var inner = '';
        var name = f.name;

        switch (f.type) {
            case 'textarea':
                inner = '<textarea class="form-control" name="' + name + '" rows="4"' + required + '></textarea>';
                break;
            case 'select':
                var opts = '<option value="">' + escapeHtml(f.placeholder || 'Pilih...') + '</option>';
                (f.options || []).forEach(function (o) {
                    opts += '<option value="' + escapeHtml(o) + '">' + escapeHtml(o) + '</option>';
                });
                inner = '<select class="form-select" name="' + name + '"' + required + '>' + opts + '</select>';
                break;
            case 'radio':
                (f.options || []).forEach(function (o, i) {
                    var id = 'fb_' + name + '_' + i;
                    inner += '<div class="form-check"><input class="form-check-input" type="radio" id="' + id +
                        '" name="' + name + '" value="' + escapeHtml(o) + '"' + required + '>' +
                        '<label class="form-check-label" for="' + id + '">' + escapeHtml(o) + '</label></div>';
                });
                break;
            case 'checkbox':
                (f.options || []).forEach(function (o, i) {
                    var id = 'fb_' + name + '_' + i;
                    inner += '<div class="form-check"><input class="form-check-input" type="checkbox" id="' + id +
                        '" name="' + name + '[]" value="' + escapeHtml(o) + '">' +
                        '<label class="form-check-label" for="' + id + '">' + escapeHtml(o) + '</label></div>';
                });
                break;
            case 'hidden':
                return '<input type="hidden" name="' + name + '" value="' + escapeHtml(f.placeholder || '') + '">';
            default:
                var inputType = (f.type === 'email' || f.type === 'tel' || f.type === 'url' ||
                    f.type === 'number' || f.type === 'date') ? f.type : 'text';
                inner = '<input class="form-control" type="' + inputType + '" name="' + name +
                    '" placeholder="' + escapeHtml(f.placeholder || '') + '"' + required + '>';
        }

        var help = f.help_text ? '<div class="form-text">' + escapeHtml(f.help_text) + '</div>' : '';
        return wrap + labelHtml + inner + help + '</div>';
    }

    function escapeHtml(str) {
        if (str === null || str === undefined) return '';
        return String(str)
            .replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;').replace(/'/g, '&#39;');
    }

    var EventForm = {
        render: function (opts) {
            opts = opts || {};
            var baseUrl = opts.baseUrl || resolveBaseUrl();
            var target = document.querySelector(opts.target || '#event-form');
            if (! target) { return; }
            if (! opts.event) { target.innerHTML = '<p class="text-danger">Event ID tidak diisi.</p>'; return; }

            target.innerHTML = '<p class="text-muted">Memuat form...</p>';

            fetch(baseUrl + 'api/forms/' + encodeURIComponent(opts.event))
                .then(function (r) { return r.json(); })
                .then(function (data) {
                    if (! data.success) {
                        target.innerHTML = '<p class="text-danger">' + escapeHtml(data.message) + '</p>';
                        return;
                    }
                    target.innerHTML = '';

                    var form = el('<form class="fb-embed-form" novalidate></form>');
                    var html = '';
                    if (data.form.description) {
                        html += '<p class="text-muted">' + escapeHtml(data.form.description) + '</p>';
                    }
                    html += '<input type="hidden" name="event_code" value="' + escapeHtml(data.event.code) + '">';
                    html += '<input type="hidden" name="format" value="json">';
                    data.fields.forEach(function (f) { html += buildField(f); });
                    html += '<button type="submit" class="btn btn-primary w-100">' +
                        escapeHtml(data.form.submit_label || 'Daftar') + '</button>';
                    html += '<div class="fb-message mt-2"></div>';
                    form.innerHTML = html;

                    form.addEventListener('submit', function (e) {
                        e.preventDefault();
                        var msg = form.querySelector('.fb-message');
                        msg.innerHTML = '';
                        fetch(data.action, {
                            method: 'POST',
                            body: new FormData(form)
                        })
                        .then(function (r) { return r.json(); })
                        .then(function (res) {
                            if (res.success) {
                                form.innerHTML = '<div class="alert alert-success">' +
                                    escapeHtml(res.message) + '</div>';
                            } else {
                                msg.innerHTML = '<div class="alert alert-danger">' +
                                    escapeHtml(res.message) + '</div>';
                            }
                        })
                        .catch(function () {
                            msg.innerHTML = '<div class="alert alert-danger">Terjadi kesalahan koneksi.</div>';
                        });
                    });

                    target.appendChild(form);
                })
                .catch(function () {
                    target.innerHTML = '<p class="text-danger">Gagal memuat form.</p>';
                });
        }
    };

    global.EventForm = EventForm;

    if (document.readyState !== 'loading' && global.EventFormAuto) {
        global.EventFormAuto.forEach(function (o) { EventForm.render(o); });
    }
})(window);
