<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Cinfo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $mdata;

    public function __construct()
    {
        //
    }

    // public function __construct($mdata)
    // {
    //     //
    //     echo "ADSFASDF";
    //     $this->mdata = $mdata;
    // }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail')->subject('Test Mail');
        // return $this->view('emails.cookmail');
    }
}
