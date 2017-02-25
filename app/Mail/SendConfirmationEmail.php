<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendConfirmationEmail extends Mailable
{
  use Queueable, SerializesModels;

  public $total = 30;

  public function __construct()
  {
      //
  }

  public function build()
  {
    $address = 'dazzlingturbo@gmail.com';
  $name = 'Ignore Me';
  $subject = 'Krytonite Found';

  return $this->view('email.confirmationEmail');
  }
}
