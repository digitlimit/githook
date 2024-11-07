<?php

namespace Digitlimit\Githook\Notifications;

use Digitlimit\Githook\EventInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Slack\BlockKit\Blocks\ContextBlock;
use Illuminate\Notifications\Slack\SlackMessage;

class Slack extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(
        public EventInterface $event
    ){
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['slack'];
    }

    /**
     * Get the Slack representation of the notification.
     */
    public function toSlack(object $notifiable): SlackMessage
    {
        return (new SlackMessage)
            ->text('Webhook event received: ' . $this->event->event())
            ->headerBlock('Webhook Event Received')
            ->contextBlock(function (ContextBlock $block) {
                $block->text('Content: ' . json_encode($this->event->content()));
            });
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
            'content' => $this->event->content()
        ];
    }
}
