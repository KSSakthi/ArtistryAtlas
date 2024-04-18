<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Database\Eloquent\Model; // Import the Model class

class WelcomeMailNotification extends Notification
{
    use Queueable;

    public $user;

    /**
     * Create a new notification instance.
     */
    public function __construct(Model $user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        // $mailData = [
        //     'name' => $this->user->firstname,
        //     'email' => $this->user->email,
        // ];

        // return (new MailMessage)->markdown(
        //     'emails.welcome', ['mailData' => $mailData]
        // );
        return (new MailMessage)
        ->subject('Welcome to Artistry Atlas - Revealing A World Of Creativity 🎨')
        ->line("Dear {$this->user->firstname},")
        ->line('Welcome to Artistry Atlas, where creativity knows no bounds! We\'re thrilled to have you join our vibrant community of artists and art enthusiasts.')
        ->line('🎨 **Your Creative Journey Begins:** Artistry Atlas is not just a platform; it\'s a canvas for your imagination. Whether you\'re an artist ready to showcase your masterpieces or an art lover seeking inspiration, you\'re in the right place.')
        ->line('🚀 **Get Started:** 1. **Complete Your Profile:** Let the world know who you are. Share your bio, aspirations, and a captivating quote.   2. **Explore Categories:** Dive into various art forms - Vector, Digital, Pen, and more. Find your niche. 3. **Engage with the Community:** Like, comment, and connect. The art world is more beautiful when shared.')
        ->line('💌 **Stay Connected:** Receive updates, announcements, and discover new features by keeping an eye on your inbox and notifications.')
        ->action('Visit our website', url('/'))
        ->line('If you ever need assistance or have questions, feel free to reach out. Artistry Atlas is here to empower and celebrate your artistic journey.')
        ->line('Let the creativity flow!')
        ->line('Best Regards,')
        ->line('The Artistry Atlas Team');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array
     */
    public function toArray(object $notifiable): array
    {
        return [];
    }
}
