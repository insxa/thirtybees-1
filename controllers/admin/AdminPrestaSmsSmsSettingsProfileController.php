<?php

require_once __DIR__.'/../../prestasms/src/init.php';

use BulkGate\PrestaSms, BulkGate\Extensions;

/**
 * @author Lukáš Piják 2018 TOPefekt s.r.o.
 * @link https://www.bulkgate.com/
 */
class AdminPrestaSmsSmsSettingsProfileController extends PrestaSmsController
{
    public function __construct()
    {
        parent::__construct();
        $this->meta_title = $this->_('sender_id_settings', 'Sender ID Settings');
    }

    public function renderView()
    {
        return $this->prestaSmsView("SmsSettings", "profile", true);
    }
}