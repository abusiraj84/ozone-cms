<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\User;

class PostCreated extends Notification
{
    use Queueable;



    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
   
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('نحن نعمل جاهدين لنصل إلى منصةمتكاملة')
                    ->action('تم إنشاء المقال بنجاح', url('/'))
                    ->line('شكرا لاستعمالكم منصة أوزون');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'data' => 'This is my first notification'
        ];
    }
}
