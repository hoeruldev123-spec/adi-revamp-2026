<?php
/**
 * Partial: markup form Form Builder.
 * Digunakan oleh service render (native) maupun halaman standalone (iframe).
 *
 * Variabel: $event, $form, $fields, $action
 */
use App\Models\FormFieldModel;

$fieldModel = new FormFieldModel();
?>

<?php
// Notifikasi sukses untuk integrasi native/iframe:
// redirect kembali dengan ?success=1 maupun flash session (form_success).
$fbSuccessMsg = session('form_success') ?? null;
if ($fbSuccessMsg !== null || (($_GET['success'] ?? null) === '1')):
?>
    <div class="alert alert-success" role="alert">
        <?= esc($fbSuccessMsg ?: 'Terima kasih! Registrasi Anda telah berhasil kami terima.') ?>
    </div>
<?php
    // Sukses: tampilkan pesan, jangan render form lagi.
    return;
endif;
?>

<?= form_open($action, ['class' => 'fb-form-form', 'novalidate' => 'novalidate']) ?>
    <?= csrf_field() ?>
    <input type="hidden" name="event_code" value="<?= esc($event['event_code']) ?>">
    <input type="hidden" name="redirect_url" value="<?= esc(current_url()) ?>">
    <input type="hidden" name="website" value="" autocomplete="off" tabindex="-1" style="position:absolute;left:-9999px;width:1px;height:1px;">

    <?php if (! empty($form['description'])): ?>
        <p class="fb-form-description mb-3 text-muted"><?= esc($form['description']) ?></p>
    <?php endif; ?>

    <?php foreach ($fields as $field): ?>
        <?php
        $fname  = $field['name'];
        $fid    = 'fb_' . preg_replace('/[^a-zA-Z0-9_]/', '', $fname);
        $label  = esc($field['label']);
        $value  = old($fname, $field['type'] === 'hidden' ? ($field['placeholder'] ?? '') : '');
        $req    = ! empty($field['required']);
        $opt    = $fieldModel->decodeOptions($field['options'] ?? '');
        $errors = session('form_errors') ?? [];
        $error  = is_array($errors) ? ($errors[$fname] ?? '') : '';
        ?>

        <?php if ($field['type'] === 'hidden'): ?>
            <input type="hidden" name="<?= esc($fname) ?>" value="<?= esc($value) ?>">
            <?php continue; ?>
        <?php endif; ?>

        <div class="fb-field mb-3">
            <label for="<?= $fid ?>" class="fb-label form-label">
                <?= $label ?><?= $req ? ' <span class="text-danger">*</span>' : '' ?>
            </label>

            <?php if (in_array($field['type'], ['text', 'email', 'tel', 'url', 'number', 'date'], true)): ?>
                <input
                    type="<?= esc($field['type']) ?>"
                    class="form-control <?= $error ? 'is-invalid' : '' ?>"
                    id="<?= $fid ?>" name="<?= esc($fname) ?>"
                    placeholder="<?= esc($field['placeholder'] ?? '') ?>"
                    value="<?= esc($value) ?>"
                    <?= $req ? 'required' : '' ?>>

            <?php elseif ($field['type'] === 'textarea'): ?>
                <textarea
                    class="form-control <?= $error ? 'is-invalid' : '' ?>"
                    id="<?= $fid ?>" name="<?= esc($fname) ?>"
                    placeholder="<?= esc($field['placeholder'] ?? '') ?>"
                    rows="4" <?= $req ? 'required' : '' ?>><?= esc($value) ?></textarea>

            <?php elseif ($field['type'] === 'select'): ?>
                <select class="form-select <?= $error ? 'is-invalid' : '' ?>"
                        id="<?= $fid ?>" name="<?= esc($fname) ?>" <?= $req ? 'required' : '' ?>>
                    <option value=""><?= esc($field['placeholder'] ?? 'Pilih...') ?></option>
                    <?php foreach ($opt as $o): ?>
                        <option value="<?= esc($o) ?>" <?= $value === $o ? 'selected' : '' ?>><?= esc($o) ?></option>
                    <?php endforeach; ?>
                </select>

            <?php elseif ($field['type'] === 'radio'): ?>
                <?php foreach ($opt as $i => $o): ?>
                    <?php
                    $rid = $fid . '_' . $i;
                    $checked = $value === $o ? 'checked' : '';
                    echo '<div class="form-check">'
                        . '<input class="form-check-input" type="radio" name="' . esc($fname) . '"'
                        . ' id="' . esc($rid) . '" value="' . esc($o) . '" ' . $checked
                        . ($req ? ' required' : '') . '>'
                        . '<label class="form-check-label" for="' . esc($rid) . '">' . esc($o) . '</label>'
                        . '</div>';
                    ?>
                <?php endforeach; ?>

            <?php elseif ($field['type'] === 'checkbox'): ?>
                <?php
                $checkedArr = is_array(old($fname)) ? old($fname) : (is_array($value) ? $value : []);
                ?>
                <?php foreach ($opt as $i => $o): ?>
                    <?php
                    $rid = $fid . '_' . $i;
                    $checked = in_array($o, $checkedArr, true) ? 'checked' : '';
                    echo '<div class="form-check">'
                        . '<input class="form-check-input" type="checkbox" name="' . esc($fname) . '[]"'
                        . ' id="' . esc($rid) . '" value="' . esc($o) . '" ' . $checked . '>'
                        . '<label class="form-check-label" for="' . esc($rid) . '">' . esc($o) . '</label>'
                        . '</div>';
                    ?>
                <?php endforeach; ?>

            <?php endif; ?>

            <?php if (! empty($field['help_text'])): ?>
                <div class="form-text"><?= esc($field['help_text']) ?></div>
            <?php endif; ?>
            <?php if ($error): ?>
                <div class="invalid-feedback d-block"><?= esc($error) ?></div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

    <?php if (session('form_error')): ?>
        <div class="alert alert-danger"><?= esc(session('form_error')) ?></div>
    <?php endif; ?>

    <button type="submit" class="fb-submit btn btn-primary w-100">
        <?= esc($form['submit_label'] ?: 'Daftar') ?>
    </button>
<?= form_close() ?>
