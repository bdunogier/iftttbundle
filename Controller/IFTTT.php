<?php
/**
 * File containing the IFTTT controller.
 */
namespace BD\Bundle\IFTTTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BD\Bundle\XmlRpcBundle\XmlRpc\Response;
use BD\Bundle\IFTTTBundle\IFTTT\Handler;
use BD\Bundle\IFTTTBundle\IFTTT\RequestParser;

class IFTTT extends Controller
{
    /**
     * @var \BD\Bundle\IFTTTBundle\IFTTT\RequestParser
     */
    private $requestParser;

    /**
     * @var \BD\Bundle\IFTTTBundle\IFTTT\Handler
     */
    private $handler;

    public function __construct( RequestParser $requestParser, Handler $handler )
    {
        $this->requestParser = $requestParser;
        $this->handler = $handler;
    }

    public function getRecentPosts()
    {
        return new Response( array() );
    }

    public function supportedMethods()
    {
        return new Response( array( 'mt.supportedMethods' ) );
    }

    public function newPost()
    {
        $request = $this->requestParser->getRequest( $this->getRequest()->request->all() );
        $this->handler->handleAction( $request );

        return new Response( 200 );
    }
}
