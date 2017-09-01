<?php
    $success = $this->session->flashdata('success');
    $error   = $this->session->flashdata('error');
    $warning = $this->session->flashdata('warning');

    if ($error) {
        $message_status = 'alert-error';
        $message = $error;
    }

    if ($warning) {
        $message_status = 'alert-warning';
        $message = $warning;
    }

    if ($success) {
        $message_status = 'alert-success';
        $message = $success;
    }
?>

<?php if ($success || $warning || $error): ?>
    <div class="row justify-content-md-center">
 
    <div class="col-sm-12">
            <div class="alert <?= $message_status ?> fade in text-center">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?= $message ?>
            </div>
     </div>
   
     </div>

<?php endif ?>