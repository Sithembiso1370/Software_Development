<?php
// Function	Description
// checkdate()	Validates a Gregorian date
echo checkdate(12,29,2021);
echo '<br>';
echo date('Y-m-d');
// date_add()	Adds days, months, years, hours, minutes, and seconds to a date
// echo date_add() ; 
// date_create_from_format()	Returns a new DateTime object formatted according to a specified format
// date_create()	Returns a new DateTime object
// date_date_set()	Sets a new date
// date_default_timezone_get()	Returns the default timezone used by all date/time functions
// date_default_timezone_set()	Sets the default timezone used by all date/time functions
// date_diff()	Returns the difference between two dates
// date_format()	Returns a date formatted according to a specified format
// date_get_last_errors()	Returns the warnings/errors found in a date string
// date_interval_create_from_date_string()	Sets up a DateInterval from the relative parts of the string
// date_interval_format()	Formats the interval
// date_isodate_set()	Sets the ISO date
// date_modify()	Modifies the timestamp
// date_offset_get()	Returns the timezone offset
// date_parse_from_format()	Returns an associative array with detailed info about a specified date, according to a specified format
// date_parse()	Returns an associative array with detailed info about a specified date
// date_sub()	Subtracts days, months, years, hours, minutes, and seconds from a date
// date_sun_info()	Returns an array containing info about sunset/sunrise and twilight begin/end, for a specified day and location
// date_sunrise()	Returns the sunrise time for a specified day and location
// date_sunset()	Returns the sunset time for a specified day and location
// date_time_set()	Sets the time
// date_timestamp_get()	Returns the Unix timestamp
// date_timestamp_set()	Sets the date and time based on a Unix timestamp
// date_timezone_get()	Returns the time zone of the given DateTime object
// date_timezone_set()	Sets the time zone for the DateTime object
// date()	Formats a local date and time
// getdate()	Returns date/time information of a timestamp or the current local date/time
// gettimeofday()	Returns the current time
// gmdate()	Formats a GMT/UTC date and time
// gmmktime()	Returns the Unix timestamp for a GMT date
// gmstrftime()	Formats a GMT/UTC date and time according to locale settings
// idate()	Formats a local time/date as integer
// localtime()	Returns the local time
// microtime()	Returns the current Unix timestamp with microseconds
// mktime()	Returns the Unix timestamp for a date
// strftime()	Formats a local time and/or date according to locale settings
// strptime()	Parses a time/date generated with strftime()
// strtotime()	Parses an English textual datetime into a Unix timestamp
// time()	Returns the current time as a Unix timestamp
// timezone_abbreviations_list()	Returns an associative array containing dst, offset, and the timezone name
// timezone_identifiers_list()	Returns an indexed array with all timezone identifiers
// timezone_location_get()	Returns location information for a specified timezone
// timezone_name_from_ abbr()	Returns the timezone name from abbreviation
// timezone_name_get()	Returns the name of the timezone
// timezone_offset_get()	Returns the timezone offset from GMT
// timezone_open()	Creates new DateTimeZone object
// timezone_transitions_get()	Returns all transitions for the timezone
// timezone_version_get()	Returns the version of the timezonedb