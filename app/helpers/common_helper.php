<?php
if (!function_exists('set_flash_alert')) {
    function set_flash_alert($alert, $message) {
        $LAVA =& lava_instance();
        $LAVA->session->set_flashdata(array('alert' => $alert, 'message' => $message));
    }
}

if (!function_exists('flash_alert')) {
    function flash_alert() {
        $LAVA =& lava_instance();
        if ($LAVA->session->flashdata('alert') !== NULL) {
            echo '
            <div class="alert alert-' . htmlspecialchars($LAVA->session->flashdata('alert')) . ' alert-dismissible fade show" role="alert">
                <div>' . htmlspecialchars($LAVA->session->flashdata('message')) . '</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    }
}
?>
