<?php

use App\Models\Employee\Employee;
use App\Models\Project\Project;
use App\Models\Account\Account;

/**
 * Global helpers file with misc functions.
 */
if (!function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}

if (!function_exists('access')) {
    /**
     * Access (lol) the Access:: facade as a simple function.
     */
    function access()
    {
        return app('access');
    }
}

if (!function_exists('hasher')) {
    /**
     * Hasher Function.
     */
    function hasher()
    {
        return app('hasher');
    }
}

if (!function_exists('history')) {
    /**
     * Access the history facade anywhere.
     */
    function history()
    {
        return true;
        return app('history');
    }
}

if (!function_exists('gravatar')) {
    /**
     * Access the gravatar helper.
     */
    function gravatar()
    {
        return app('gravatar');
    }
}

if (!function_exists('includeRouteFiles')) {

    /**
     * Loops through a folder and requires all PHP files
     * Searches sub-directories as well.
     *
     * @param $folder
     */
    function includeRouteFiles($folder)
    {
        $directory = $folder;
        $handle = opendir($directory);
        $directory_list = [$directory];

        while (false !== ($filename = readdir($handle))) {
            if ($filename != '.' && $filename != '..' && is_dir($directory . $filename)) {
                array_push($directory_list, $directory . $filename . '/');
            }
        }

        foreach ($directory_list as $directory) {
            foreach (glob($directory . '*.php') as $filename) {
                require $filename;
            }
        }
    }
}

if (!function_exists('getRtlCss')) {

    /**
     * The path being passed is generated by Laravel Mix manifest file
     * The webpack plugin takes the css filenames and appends rtl before the .css extension
     * So we take the original and place that in and send back the path.
     *
     * @param $path
     *
     * @return string
     */
    function getRtlCss($path)
    {
        $path = explode('/', $path);
        $filename = end($path);
        array_pop($path);
        $filename = rtrim($filename, '.css');

        return implode('/', $path) . '/' . $filename . '.rtl.css';
    }
}


if (!function_exists('getTaxAmount')) {

    function getTaxAmount($cost)
    {
        return (getTaxPercentage() * $cost / 100);
    }
}

if (!function_exists('getTaxPercentage')) {

    function getTaxPercentage()
    {
        return 0.1;
    }
}

if (!function_exists('getBrokerAmount')) {

    function getBrokerAmount($cost)
    {
        $brokerageCost = (getBrokerPercentage() * $cost / 100);

        return  $brokerageCost > 20 ? 20 : $brokerageCost;
    }
}

if (!function_exists('getBrokerPercentage')) {

    function getBrokerPercentage()
    {
        return env('BROKERAGE_PERCENT') ?? 0;
    }
}

if (!function_exists('getXchangeAmount')) {

    function getXchangeAmount($cost)
    {
        return (getXchangePercentage() * $cost / 100);
    }
}

if (!function_exists('getXchangePercentage')) {

    function getXchangePercentage()
    {
        return env('TRANSACTION_PERCENT') ?? 0;
    }
}

if (!function_exists('getGSTAmount')) {

    function getGSTAmount($cost)
    {
        return (getGSTPercentage() * $cost / 100);
    }
}

if (!function_exists('getGSTPercentage')) {

    function getGSTPercentage()
    {
        return env('GST_PERCENT') ?? 0;
    }
}

if (!function_exists('getCTTAmount')) {

    function getCTTAmount($cost)
    {
        return (getCTTPercentage() * $cost / 100);
    }
}

if (!function_exists('getCTTPercentage')) {

    function getCTTPercentage()
    {
        return env('CTT_PERCENT') ?? 0;
    }
}

if (!function_exists('getSebiAmount')) {

    function getSebiAmount($cost)
    {
        return (getSebiPercentage() * $cost / 100);
    }
}

if (!function_exists('getSebiPercentage')) {

    function getSebiPercentage()
    {
        return 0.01;
    }
}

if (!function_exists('getStampAmount')) {

    function getStampAmount($cost)
    {
        return (getStampPercentage() * $cost / 100);
    }
}

if (!function_exists('getStampPercentage')) {

    function getStampPercentage()
    {
        return env('STAMP_PERCENT') ?? 0;
    }
}


if (!function_exists('getCommissionAmount')) {

    function getCommissionAmount($cost)
    {
        return (getCommissionPercentage() * $cost / 100);
    }
}

if (!function_exists('getCommissionPercentage')) {

    function getCommissionPercentage()
    {
        return env('COMMISSION_PERCENT') ?? 0;
    }
}

if (!function_exists('getMarginAmount')) {

    function getMarginAmount($cost, $futureMonth)
    {
        return (getMarginPercentage($futureMonth) * $cost / 100);
    }
}

if (!function_exists('getMarginPercentage')) {

    function getMarginPercentage($futureMonth)
    {
        return config('access.marginPercentage')[$futureMonth] ?? 0;
    }
}

if (!function_exists('getNextPrice')) {

    function getNextPrice($totalCost, $extraCost, $isBuy = 1)
    {
        if ($isBuy) {
            return $totalCost + ($extraCost * 2) + 540;
        }

        return $totalCost - ($extraCost * 2) - 540;
    }
}

if (!function_exists('str_plural')) {

    function str_plural($value)
    {
        return \Str::plural($value);
        return $value;
    }
}

if (!function_exists('camel_case')) {

    function camel_case($value)
    {
        return \Str::camel($value);
    }
}


if (!function_exists('getAllEmployeeList')) {

    function getAllEmployeeList()
    {
        $empList = Employee::get();
        $empOptions = [];
        foreach($empList as $emp)
        {
            $empOptions[$emp->id] = $emp->first_name . ' ' . $emp->last_name;
        }

        return $empOptions;
    }
}

if (!function_exists('getAllProjectList')) {

    function getAllProjectList()
    {
        $projectList = Project::get();
        $projectOptions = [];
        foreach($projectList as $project)
        {
            $projectOptions[$project->id] = $project->title;
        }

        return $projectOptions;
    }
}

if (!function_exists('getCurrentUtcTime')) {

    function getCurrentUtcTime($format = 'Y-m-d H:i:s')
    {
        return gmdate($format);
    }
}


if (!function_exists('getCurrentIST')) {

    function getCurrentIST($format = 'Y-m-d H:i:s')
    {
        return date($format);
    }
}

if (!function_exists('getUser')) {

    function getUser()
    {
        return auth()->user();
    }
}

if (!function_exists('canApproveReports')) {

    function canApproveReports()
    {
        return auth()->user()->can_approve == 1 ?? false;
    }
}

if (!function_exists('getActiveAccountId')) {

    function getActiveAccountId()
    {
        $user = auth()->user();
        if($user->id == 1)
        {
            return null;
        }
        
        return $user->account_id;
    }
}


if (!function_exists('getAccountById')) {

    function getAccountById($accountId)
    {
        return Account::with('config')->find($accountId);
    }
}


if (!function_exists('generateUniqueId')) {

    function generateUniqueId()
    {
        return rand(111111111, 999999999);
    }
}


if (!function_exists('getReadableDateTime')) {

    function getReadableDateTime($dateTime = null)
    {
        return $dateTime ? date('d M Y h:i a', strtotime($dateTime)) : '-'  ;
    }
}

if (!function_exists('getPatientReportStatus')) {

    function getPatientReportStatus($status)
    {
        switch($status)
        {
            case 0:
                return 'Waiting for Approval';
                break;

            case 1:
                return 'Approved';
                break;

            case 2:
                return 'REJECTED';
                break;
                
            default:
                return 'N/A';
                break;
        }
    }
}