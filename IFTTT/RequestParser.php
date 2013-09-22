<?php
/**
 * File containing the RequestParser class
 */
namespace BD\Bundle\IFTTTBundle\IFTTT;

use BD\Bundle\IFTTTBundle\IFTTT\Request;

/**
 * Parses an IFTTT HTTP request to an IFTTT request
 */
class RequestParser
{
    /**
     * Creates an IFTTT Request from XML RPC post data
     *
     * @param array $requestPostData
     *
     * @return \BD\Bundle\IFTTTBundle\IFTTT\Request
     */
    public function getRequest( array $requestPostData )
    {
        $requestProperties = array(
            'username'    => $requestPostData[1],
            'password'    => $requestPostData[2],
            'title'       => $requestPostData[3]['title'],
            'description' => $requestPostData[3]['description'],
            'keywords'    => $requestPostData[3]['mt_keywords'],
            'status'      => $requestPostData[3]['post_status'],
        );

        return new Request( $requestProperties );
    }
}
