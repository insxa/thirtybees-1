<?php

require_once __DIR__.'/../../thirtybees/src/init.php';

use BulkGate\ThirtyBeesSms, BulkGate\Extensions;

/**
 * @author Lukáš Piják 2018 TOPefekt s.r.o.
 * @link https://www.bulkgate.com/
 */
class AdminBulkGateSmsCampaignDefaultController extends BulkGateController
{
    public function __construct()
    {
        parent::__construct();
        $this->meta_title = $this->_('sms_campaigns', 'Sms Campaigns');
    }

    public function renderView()
    {
        return $this->bulkGateView("SmsCampaign", "default", true);
    }
}
