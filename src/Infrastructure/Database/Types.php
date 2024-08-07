<?php

namespace App\Infrastructure\Database;

/**
 * @see App\Infrastructure\Database\Types for more details
 */
enum Types: string
{
    case ASCII_STRING = 'ascii_string';
    case BIGINT = 'bigint';
    case BINARY = 'binary';
    case BLOB = 'blob';
    case BOOLEAN = 'boolean';
    case DATE_MUTABLE = 'date';
    case DATE_IMMUTABLE = 'date_immutable';
    case DATEINTERVAL = 'dateinterval';
    case DATETIME_MUTABLE = 'datetime';
    case DATETIME_IMMUTABLE = 'datetime_immutable';
    case DATETIMETZ_MUTABLE = 'datetimetz';
    case DATETIMETZ_IMMUTABLE = 'datetimetz_immutable';
    case DECIMAL = 'decimal';
    case FLOAT = 'float';
    case GUID = 'guid';
    case INTEGER = 'integer';
    case JSON = 'json';
    case SIMPLE_ARRAY = 'simple_array';
    case SMALLINT = 'smallint';
    case STRING = 'string';
    case TEXT = 'text';
    case TIME_MUTABLE = 'time';
    case TIME_IMMUTABLE = 'time_immutable';
    case TINYINT = 'tinyint';
    case IMAGE = 'image';
}
