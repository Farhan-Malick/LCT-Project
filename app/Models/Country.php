<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function get_countries()
    {
        $result = Country::all();
        return to_array($result);
    }

    public function get_countries_having_events($country_id = null)
    {

        $result = Country::Join("events", "events.country_id", '=', "countries.id")
                ->select(["countries.*", "events.city", "events.state"])
                ->where("events.country_id", '!=', null)
                ->where("events.country_id", '!=', null)
                ->groupBy('events.id', 'events.city', 'events.state')
                ->get();


        $countries = $result->unique('id')->all();

        $cities    = $result->unique('city');

        if(!empty($country_id))
            $cities = $cities->where("id" , '==', $country_id);

        $cities    = $cities->all();

        $states    = $result->unique('state')->all();

        return [
            'countries' => $countries,
            'cities'    => $cities,
            'states'    => $states
        ];
    }

    // get event country
    public function get_event_country($id = null)
    {
       $result = Country::where(['id' => $id])->first();

        return collect($result);
    }
}
