<?php
function display_error_bucket($error_bucket)
{
    echo "<p>AN ERROR OCCURRED PLACING YOUR ORDER</p>";
    if (count($error_bucket) > 0) {
        echo "<ul>";
        foreach ($error_bucket as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
}
