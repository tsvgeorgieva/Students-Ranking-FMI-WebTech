<?php
if (isset($_SESSION['messages'])) {
    echo '<ul>';
    foreach ($_SESSION['messages'] as $msg) {
        echo '<li class="alert alert-' . $msg['type'] . '">';
        echo htmlspecialchars($msg['text']);
        echo '</li>';
    }
    echo '</ul>';
    unset($_SESSION['messages']);
}
