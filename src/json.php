<?php
/** Created by User: azder on Date: 18/03/2017 */

namespace Azder\S\Json;


function prettyfy( $value )
{
    return json_encode( $value, JSON_PRETTY_PRINT ) . PHP_EOL;
}

function uglyfy( $value )
{
    return json_encode( $value );
}

function assocify( $json )
{
    return json_decode( $json, true );
}