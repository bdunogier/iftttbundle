<?php
/**
 * File containing the IFTTT controller.
 */
namespace BD\Bundle\IFTTTBundle\Controller;

use BD\Bundle\XmlRpcBundle\XmlRpc\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IFTTT extends Controller
{
    public function getRecentPosts()
    {
        return new Response( array() );
    }

    public function newPost()
    {

    }
}
