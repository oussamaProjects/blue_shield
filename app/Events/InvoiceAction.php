<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\Invoice;

class InvoiceAction
{
    private $invoice;
    private $action;

    use InteractsWithSockets, SerializesModels;

    public function getInvoice()
    {
        return $this->invoice;
    }
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Create a new event instance.
     * InvoiceAction constructor.
     * @param Invoice $invoice
     * @param $action
     */
    public function __construct(Invoice $invoice, $action)
    {
        $this->invoice = $invoice;
        $this->action = $action;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
