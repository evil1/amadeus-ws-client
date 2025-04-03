<?php

namespace Amadeus\Client\RequestOptions;

use Amadeus\Client\RequestOptions\Ticket\RebookAndRepricePNR\Segment;
use Amadeus\Client\RequestOptions\Ticket\RebookAndRepricePNR\Ticket;

class TicketRebookAndRepricePNROptions extends Base
{
    const ACTION_COMMIT = 'COMMIT';

    const ACTION_DISPLAY_QUOTATIONS = 'QTDISPLAY';

    const ACTION_DISPLAY_FULL_REPRICING = 'FULLDISPLAY';

    const ACTION_SANITIZE_FOP_TST = 'SANITIZE';

    /**
     * @var string[] List of actions to perform. Allowed actions are: `COMMIT` to commit modifications, `QTDISPLAY` to
     * have quotation records returned after a repricing and `FULLDISPLAY` if all repricing details should be returned
     * by the service. If left empty, by default commit will not be performed.
     */
    public array $actions = [];

    /**
     * @var string PNR locator.
     */
    public string $bookingIdentifier;

    /**
     * @var Segment[]
     */
    public array $segments = [];

    /**
     * @var int[] Segments Refs to cancel
     */
    public array $cancellation = [];

    /**
     * @var Ticket[]
     */
    public array $tickets = [];
}