<?php

// namespace App\Mail;

// use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Mail\Mailable;
// use Illuminate\Queue\SerializesModels;

// class ContactFormMail extends Mailable
// {
//     use Queueable, SerializesModels;

//     public $data;

//     /**
//      * Create a new message instance.
//      *
//      * @param  array  $data
//      * @return void
//      */
//     public function __construct(array $data)
//     {
//         $this->data = $data;
//     }

//     /**
//      * Build the message.
//      *
//      * @return $this
//      */
//     public function build()
//     {
//         return $this->from('azzamokimane20@gmail.com') // Update with your email address
//                     ->subject('New Contact Form Submission')
//                     ->view('pages.contact.contact')
//                     ->with(['data' => $this->data]);
//     }

// }


// ContactFormMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    /**
     * Create a new message instance.
     *
     * @param  array  $formData
     * @return void
     */
    public function __construct(array $formData)
    {
        $this->formData = $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('azzamokimane20@gmail.com')
                    ->subject('New Contact Form Submission')
                    ->view('pages.contact.contact')
                    ->with('formData', $this->formData);
    }
}

