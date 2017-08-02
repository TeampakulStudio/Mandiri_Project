<?php
    $success = $this->session->flashdata('success');
    $error   = $this->session->flashdata('error');
    $warning = $this->session->flashdata('warning');

    if ($error) {
        $message_status = 'message-error';
        $message = $error;
    }

    if ($warning) {
        $message_status = 'message-warning';
        $message = $warning;
    }

    if ($success) {
        $message_status = 'message-success';
        $message = $success;
    }
?>

<?php if ($success || $warning || $error): ?>
    <div class="row">
        <div class="col-10">
            <div class="message-box <?= $message_status ?>">
                <?= $message ?>
            </div>
        </div>
    </div>
<?php endif ?>