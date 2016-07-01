<?php
if (isset($_SESSION['messages'])) {
    echo '<div>';
    foreach ($_SESSION['messages'] as $msg) {
        echo '<div class="alert alert-' . $msg['type'] . '">';
        echo htmlspecialchars($msg['text']);
        echo '</div>';
    }
    echo '</div>';
    unset($_SESSION['messages']);
}
