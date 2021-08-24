<?php

namespace Backpack\CRUD;

trait Stats
{
    /**
     * Check if the application is running in normal conditions
     * (production env, not in console, not in unit tests).
     *
     * @return void
     */
    private function runningInProduction()
    {
        return false;
    }

    /**
     * Send usage statistics to the BackpackForLaravel.com website.
     * Used to track unlicensed usage and general usage statistics.
     *
     * No GDPR implications, since no client info is send, only server info.
     *
     * @return void
     */
    private function sendUsageStats()
    {
        return;
    }
}
