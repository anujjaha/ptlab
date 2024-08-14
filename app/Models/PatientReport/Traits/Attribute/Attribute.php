<?php 

namespace App\Models\PatientReport\Traits\Attribute;

/**
 * Trait Attribute
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com )
 */

use App\Repositories\PatientReport\EloquentPatientReportRepository;

trait Attribute
{
    /**
     * @return string
     */
    public function getUploadButtonAttribute($routes, $prefix = 'admin', $isAdmin = false)
    {
        $id = $isAdmin ? $this->id : hasher()->encode($this->id);

        return '<a href="javascript:void(0);" data-id="'. hasher()->encode($this->id) .'" class="upload-report btn btn-xs btn-primary"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Upload"></i></a> ';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute($routes, $prefix = 'admin', $isAdmin = false)
    {
        $id = $isAdmin ? $this->id : hasher()->encode($this->id);

        return '<a href="'.route($prefix .'.'. $routes->editRoute, $id).'" class="btn btn-xs btn-primary"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a> ';
    }

    /**
     * @return string
     */
    public function getDownloadButtonAttribute($routes, $prefix = 'admin', $isAdmin = false)
    {
        return '<a target="_blank" href="'.url('reports/pdf/'.$this->attachment).'" class="btn btn-xs btn-primary"><i class="fa fa-download" data-toggle="tooltip" data-placement="top" title="Download"></i></a> ';
    }

    /**
     * @return string
     */
    public function getSendWAButtonAttribute($routes, $prefix = 'admin', $isAdmin = false)
    {
        $id = hasher()->encode($this->id);

        return '<a onclick="sendWaReport(`'.trim($id).'`)" href="javascript:void(0);" data-id="'. $this->id .'" class="send-wa btn btn-xs btn-primary"><i class="fa fa-paper-plane" data-toggle="tooltip" data-placement="top" title="SEND"></i></a> ';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute($routes, $prefix = 'admin')
    {
        return '<a href="'.route($prefix .'.'. $routes->deleteRoute, $this).'"
                data-method="delete"
                data-trans-button-cancel="Cancel"
                data-trans-button-confirm="Delete"
                data-trans-title="Do you want to Delete this Item ?"
                class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<a href="javascript:void(0);"><i class="fa fa-close"></i></a>';
        $repository = new EloquentPatientReportRepository;
        $routes     = $repository->getModuleRoutes();

        return $this->getEditButtonAttribute($routes, $repository->clientRoutePrefix) . $this->getDeleteButtonAttribute($routes, $repository->clientRoutePrefix);
    }

    /**
     * @return string
     */
    public function getAdminActionButtonsAttribute()
    {
        //return '<a href="javascript:void(0);"><i class="fa fa-close"></i></a>';
        $repository = new EloquentPatientReportRepository;
        $routes     = $repository->getModuleRoutes();

        if($this->attachment)
        {
            return $this->getEditButtonAttribute($routes, $repository->adminRoutePrefix, true) .  
                $this->getDownloadButtonAttribute($routes, $repository->adminRoutePrefix, true) .
                $this->getSendWAButtonAttribute($routes, $repository->adminRoutePrefix, true);
            ;
        }
        return $this->getEditButtonAttribute($routes, $repository->adminRoutePrefix, true) ;
    }
}