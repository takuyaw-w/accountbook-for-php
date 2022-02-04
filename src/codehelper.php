<?php

function h($str): string {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
