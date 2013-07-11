<?php
/**
 * File containing the Request class.
 *
 * @copyright Copyright (C) 2013 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */
namespace BD\Bundle\IFTTTBundle\IFTTT;
use InvalidArgumentException;

/**
 * The request sent by IFTTT
 */
class Request
{
    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    public function __construct( array $properties = array() )
    {
        foreach ( $properties as $property => $value )
        {
            if ( !property_exists( $this, $property ) )
                throw new InvalidArgumentException( "No such property $property" );
            $this->$property = $value;
        }
    }
}
