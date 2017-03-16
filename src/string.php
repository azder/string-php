<?php
/** Created by User: azder on Date: 13/03/2017 */

namespace Azder\S;

const string_empty    = '';
const string_space    = ' ';
const string_aster    = '*';
const string_ellipsis = '...';
const string_at       = '@';
const string_hash     = '#';
const string_bang     = '!';
const string_shebang  = '#!';


function concat( ...$args ): string
{
    return implode( string_empty, $args );
}

function spaceout( ...$args ): string
{
    return implode( string_space, $args );
}


function glue( string $glue, ...$args ): string
{
    return implode( $glue, $args );
}

function gluer( string $glue ): callable
{
    return function ( ...$args ) use ( $glue ) : string
    {
        return implode( $glue, $args );
    };
}


function wrap( string $wrap, $value ): string
{
    return string_empty . $wrap . $value . $wrap;
}

function wrapper( string $wrap ): callable
{
    return function ( $value ) use ( $wrap ) : string
    {
        return string_empty . $wrap . $value . $wrap;
    };
}


function suffix( string $suffix, $value ): string
{
    return string_empty . $value . $suffix;
}

function suffixer( string $suffix ): callable
{
    return function ( $value ) use ( $suffix ) : string
    {
        return string_empty . $value . $suffix;
    };
}


function prefix( string $prefix, $value ): string
{
    return string_empty . $prefix . $value;
}

function prefixer( string $prefix ): callable
{
    return function ( $value ) use ( $prefix ) : string
    {
        return string_empty . $prefix . $value;
    };
}


