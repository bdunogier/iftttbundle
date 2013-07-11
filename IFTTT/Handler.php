<?php
/**
 * File containing the Handler interface.
 */
namespace BD\Bundle\IFTTTBundle\IFTTT;

/**
 * IFTTT Handlers are meant to perform the actual action when IFTTT sends data to the app.
 *
 * Handlers must implement handleAction, and do whatever they see fit with the data.
 */
interface Handler
{
    /**
     * Handles an IFTTT action
     * @param Request $request
     * @return void
     */
    public function handleAction( Request $request );
}
