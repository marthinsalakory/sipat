<?php

class Flasher
{
    public static function setFlash($warna, $pesan)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'warna'  => $warna
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="alert alert-danger background-' . $_SESSION['flash']["warna"] . '">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled text-white"></i>
                            </button>
                            <code class="col-xl-11 text-center">' . $_SESSION['flash']['pesan'] . '</code>
                        </div>
                    </div>';
            unset($_SESSION['flash']);
        }
    }
}
