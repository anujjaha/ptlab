<?php 

namespace App\Http\Controllers\Backend\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Repositories\Profile\EloquentProfileRepository;

/**
 * Class AdminProfileController
 */
class AdminProfileController extends Controller
{
    /**
     * Profile Repository
     *
     * @var object
     */
    public $repository;

    /**
     * Create Success Message
     *
     * @var string
     */
    protected $createSuccessMessage = "Profile Created Successfully!";

    /**
     * Edit Success Message
     *
     * @var string
     */
    protected $editSuccessMessage = "Profile Edited Successfully!";

    /**
     * Delete Success Message
     *
     * @var string
     */
    protected $deleteSuccessMessage = "Profile Deleted Successfully";

    /**
     * __construct
     *
     */
    public function __construct()
    {
        $this->repository = new EloquentProfileRepository;
    }

    /**
     * Profile Listing
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view($this->repository->setAdmin(true)->getModuleView('listView'))->with([
            'repository' => $this->repository
        ]);
    }

    /**
     * Profile View
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $profileTags = getProfileTagOptions();

        return view($this->repository->setAdmin(true)->getModuleView('createView'))->with([
            'repository' => $this->repository,
            'profileTags' => $profileTags
        ]);
    }

    /**
     * Profile Store
     *
     * @return \Illuminate\View\View
     */
    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return redirect()->route($this->repository->setAdmin(true)->getActionRoute('listRoute'))->withFlashSuccess($this->createSuccessMessage);
    }

    /**
     * Profile Edit
     *
     * @return \Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $item = $this->repository->findOrThrowException($id);
        $profileTags = getProfileTagOptions();

        return view($this->repository->setAdmin(true)->getModuleView('editView'))->with([
            'item'          => $item,
            'repository'    => $this->repository,
            'profileTags'    => $profileTags
        ]);
    }

    /**
     * Profile Show
     *
     * @return \Illuminate\View\View
     */
    public function show($id, Request $request)
    {
        $item = $this->repository->findOrThrowException($id);

        return view($this->repository->setAdmin(true)->getModuleView('editView'))->with([
            'item'          => $item,
            'repository'    => $this->repository
        ]);
    }


    /**
     * Profile Update
     *
     * @return \Illuminate\View\View
     */
    public function update($id, Request $request)
    {
        $status = $this->repository->update($id, $request->all());

        return redirect()->route($this->repository->setAdmin(true)->getActionRoute('listRoute'))->withFlashSuccess($this->editSuccessMessage);
    }

    /**
     * Profile Destroy
     *
     * @return \Illuminate\View\View
     */
    public function destroy($id)
    {
        $status = $this->repository->destroy($id);

        return redirect()->route($this->repository->setAdmin(true)->getActionRoute('listRoute'))->withFlashSuccess($this->deleteSuccessMessage);
    }

    /**
     * Get Table Data
     *
     * @return json|mixed
     */
    public function getTableData()
    {
        return Datatables::of($this->repository->getForDataTable())
            ->escapeColumns(['id', 'sort'])
                ->addColumn('profile_image', function ($item) {
                return '
                    <div class="text-center">
                        <a target="_blank" href="'.$item->profile_image.'"><img
                            src="'.$item->profile_image.'"
                            alt="Profile"
                            class="profile-table-image"
                        ></a>
                    </div>
                ';
            })
            ->addColumn('surname', function ($item) {
                return ucwords($item->surname . ' ' .$item->firstname . ' '. $item->fathername);
            })
            ->addColumn('birthdate', function ($item) {
                return $item->birthdate ? date('d M Y',strtotime($item->birthdate)) : '-';
            })
            ->addColumn('gotra_id', function ($item) {
                return $item->gotra->title ?? '-';
            })
            ->addColumn('email', function ($item) {
                return $item->primaryAddress->getFullAddress() ?? '';
            })
            ->addColumn('actions', function ($item) {
                return $item->admin_action_buttons;
            })
            ->make(true);
    }
}