<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class TicketCreated extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

//	/**
//	 * Get the notification's delivery channels.
//	 *
//	 * @param mixed $notifiable
//	 *
//	 * @return array
//	 */
//	public function via($notifiable): array
//	{
//		return ['database'];
//	}
//
//	/**
//	 * Get the mail representation of the notification.
//	 *
//	 * @param mixed $notifiable
//	 *
//	 * @return array
//	 */
//	public function toMail($notifiable): array
//	{
//		return [
//		];
//	}
//
//	/**
//	 * Get the array representation of the notification.
//	 *
//	 * @param mixed $notifiable
//	 *
//	 * @return array
//	 */
//	public function toArray($notifiable): array
//	{
//		return [
//			// TODO
//		];
//	}
}
