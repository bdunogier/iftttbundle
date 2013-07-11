<?php
/**
 * File containing the RequestParserTest class.
 *
 * @copyright Copyright (C) 2013 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */
namespace BD\Bundle\IFTTTBundle\Tests\IFTTT;

use PHPUnit_Framework_TestCase;
use Symfony\Component\HttpFoundation\Request as HttpRequest;
use BD\Bundle\IFTTTBundle\IFTTT\Request as IFTTTRequest;
use BD\Bundle\IFTTTBundle\IFTTT\RequestParser;

class RequestParserTest extends PHPUnit_Framework_TestCase
{
    public function testFromRequest()
    {
        $httpRequest = HttpRequest::create(
            '/',
            'POST',
            array(
                1 => 'username',
                2 => 'password',
                3 => array(
                    'title' => 'This is the title',
                    'description' => 'This is the description'
                )
            )
        );

        $expectedIFTTTRequest = new IFTTTRequest(
            array(
                'username' => 'username',
                'password' => 'password',
                'title' => 'This is the title',
                'description' => "This is the description"
            )
        );

        $requestParser = new RequestParser;
        $IFTTTRequest = $requestParser->getRequest( $httpRequest->request->all() );

        self::assertEquals(
            $expectedIFTTTRequest,
            $IFTTTRequest
        );
    }
}
