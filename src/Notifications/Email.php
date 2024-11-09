<?php

namespace Digitlimit\Githook\Notifications;

use Digitlimit\Githook\EventInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Email extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * The event instance.
     */
    public EventInterface $event;

    /**
     * Create a new notification instance.
     */
    public function __construct(
        EventInterface $event
    ) {
        $this->event = $event;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
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
        return (new MailMessage)
            ->line('Webhook event received: '.$this->event->event())
            ->line('Content: '.json_encode($this->event->content()));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'event' => $this->event->event(),
            'content' => $this->event->content(),
        ];
    }
}
