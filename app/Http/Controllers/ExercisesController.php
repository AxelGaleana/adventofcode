<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * @group User/ User Information Module
 * APIs for managing Employee Information
 */
class ExercisesController extends BaseController
{
    /**
     * The request instance.
     *
     * @var \Illuminate\Http\Request
     */
    private $request;
    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function reportRepairExerciseOne()
    {
        $this->validate($this->request, [
            'entries' => 'required|array',
        ]);

        $result = 0;

        $entries = $this->request->entries;

        foreach($entries as $entry)
        {
            $difference = 2020 - $entry;
            if (in_array($difference, $entries))
            {
                $result = $entry * $difference;
            }


        }

        if ($result != 0)
        {
            return response()->json([
                'result' => $result,
            ], 200);
        } 
        else
        {
            return response()->json([
                'result' => "No entries that sum 2020 were found.",
            ], 204);
        }
    }

    public function reportRepairExerciseTwo()
    {
        $this->validate($this->request, [
            'entries' => 'required|array',
        ]);

        $result = 0;

        $entries = $this->request->entries;

        foreach($entries as $entry)
        {
            for($i=0; $i<count($entries); $i++)
            {
                $difference = 2020 - $entry - $entries[$i];
                if (in_array($difference, $entries))
                {
                    $result = $entry * $difference * $entries[$i];
                }
            }


        }

        if ($result != 0)
        {
            return response()->json([
                'result' => $result,
            ], 200);
        } 
        else
        {
            return response()->json([
                'result' => "No entries that sum 2020 were found.",
            ], 204);
        }

    }


}
