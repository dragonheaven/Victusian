<?php
namespace App\Event;
use DateTime;
use DateTimeZone;

date_default_timezone_set('UTC');


class Event {

	// Tests whether the given ISO8601 string has a time-of-day or not
	const ALL_DAY_REGEX = '/^\d{4}-\d\d-\d\d$/'; // matches strings like "2013-12-29"

	public $id;
	public $title;
	public $allDay; // a boolean
	public $start; // a DateTime
	public $end; // a DateTime, or null
	public $properties = array(); // an array of other misc properties

	public function __construct($array, $timezone=null) {

		$this->id = $array->eventid;
		$this->title = $array->title;

		if ($array->type == 0) {
			// allDay has been explicitly specified
			$this->allDay = true;
		}
		else {
			// Guess allDay based off of ISO8601 date strings
			$this->allDay = preg_match(self::ALL_DAY_REGEX, $array->startdate) &&
				(!isset($array->expiredate) || preg_match(self::ALL_DAY_REGEX, $array->expiredate));
		}

		if ($this->allDay) {
			// If dates are allDay, we want to parse them in UTC to avoid DST issues.
			$timezone = null;
		}

		// Parse dates
		$this->start = new DateTime($array->startdate, $timezone);
		$this->end = isset($array->expiredate) ? new DateTime($array->expiredate, $timezone) : null;

		// Record misc properties
		foreach ($array as $name => $value) {
			if($name == 'eventid') $this->properties['id'] = $value;
			if($name == 'title') $this->properties['title'] = $value;
			if($name == 'type' && $array->type == 0){
				$this->properties['allday'] = true;
			}else $this->properties['allday'] = false;
			if($name == 'startdate') $this->properties['start'] = $value;
			if($name = 'expiredate') $this->properties['end'] = $value;
		}
	}


	// Returns whether the date range of our event intersects with the given all-day range.
	// $rangeStart and $rangeEnd are assumed to be dates in UTC with 00:00:00 time.
	public function isWithinDayRange($rangeStart, $rangeEnd) {

		// Normalize our event's dates for comparison with the all-day range.
		$eventStart = $this->stripTime($this->start);

		if (isset($this->end)) {
			$eventEnd = $this->stripTime($this->end); // normalize
		}
		else {
			$eventEnd = $eventStart; // consider this a zero-duration event
		}

		// Check if the two whole-day ranges intersect.
		return $eventStart < $rangeEnd && $eventEnd >= $rangeStart;
	}

	public function stripTime($datetime) {
		return new DateTime($datetime->format('Y-m-d'));
	}

	// Converts this Event object back to a plain data array, to be used for generating JSON
	public function toArray() {

		// Start with the misc properties (don't worry, PHP won't affect the original array)
		$array = $this->properties;

		$array['id'] = $this->id;
		$array['title'] = $this->title;

		// Figure out the date format. This essentially encodes allDay into the date string.
		if ($this->allDay) {
			$format = 'Y-m-d'; // output like "2013-12-29"
		}
		else {
			$format = 'c'; // full ISO8601 output, like "2013-12-29T09:00:00+08:00"
		}

		// Serialize dates into strings
		$array['start'] = $this->start->format($format);
		if (isset($this->end)) {
			$array['end'] = $this->end->format($format);
		}

		return $array;
	}

}