<?php

function is_logged_in()
{
    //instansiasi untuk memanggil fitur CI
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth/blocked');
    }
}
