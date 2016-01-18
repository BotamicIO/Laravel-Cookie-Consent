<?php

if (!function_exists('cookie_consent')) {
    function cookie_consent($message = null, $dismiss = null, $learnMore = null, $link = null, $theme = null)
    {
        $builder = app('cookie-consent');

        if (!is_null($message)) {
            $builder->message($message);
        }

        if (!is_null($dismiss)) {
            $builder->dismiss($dismiss);
        }

        if (!is_null($learnMore)) {
            $builder->learnMore($learnMore);
        }

        if (!is_null($link)) {
            $builder->link($link);
        }

        if (!is_null($theme)) {
            $builder->theme($theme);
        }

        return $builder->render();
    }
}
