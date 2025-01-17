<?php

namespace DavideCasiraghi\LaravelEventsCalendar\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /***************************************************************************/
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teachers';

    /***************************************************************************/

    protected $fillable = [
        'name', 'bio', 'country_id', 'year_starting_practice', 'year_starting_teach', 'significant_teachers', 'profile_picture', 'website', 'facebook', 'created_by', 'slug',
    ];

    /**
     * Get the events for the teacher.
     */
    public function events()
    {
        return $this->belongsToMany('DavideCasiraghi\LaravelEventsCalendar\Models\Event', 'event_has_teachers', 'teacher_id', 'event_id');
    }

    /***************************************************************************/

    /**
     * Get the events where this teacher is going to teach to.
     *
     * @param  \DavideCasiraghi\LaravelEventsCalendar\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public static function eventsByTeacher($teacher, $lastestEventsRepetitionsQuery)
    {
        $ret = $teacher->events()
                         ->select('events.title', 'events.category_id', 'events.slug', 'events.sc_venue_name', 'events.sc_country_name', 'events.sc_city_name', 'events.sc_teachers_names', 'event_repetitions.start_repeat', 'event_repetitions.end_repeat')
                         ->joinSub($lastestEventsRepetitionsQuery, 'event_repetitions', function ($join) {
                             $join->on('events.id', '=', 'event_repetitions.event_id');
                         })
                         ->orderBy('event_repetitions.start_repeat', 'asc')
                         ->get();

        return $ret;
    }
}
