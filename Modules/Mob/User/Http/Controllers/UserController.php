<?php

namespace Mob\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Mob\User\Http\Requests\UserRequest;
use Mob\User\Http\Requests\UserUpdateRequest;
use Mob\User\Models\User;
use Mob\User\Repositories\UserRepo;
use Illuminate\Http\Request;
use Mob\User\Services\UserService;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
//     * @return \Illuminate\Http\Response
     */

    public UserRepo $repo;
    public UserService $service;

    public function __construct(UserRepo $userRepo, UserService $userService)
    {
        $this->repo = $userRepo;
        $this->service = $userService;
    }

    public function index()
    {
        $users = $this->repo->index();
        return view('User::index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User::create');
    }

    /**
     * Store a newly created resource in storage.
     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $this->service->store($request);
        return to_route('users.index');
    }

    /**
     * Display the specified resource.
     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
     */

//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->repo->findById($id);
        return view('User::edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $this->service->update($request, $id);
        return to_route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repo->delete($id);
        return to_route('users.index')->with(['success_delete' => 'کاربر با موفقیت حذف شد']);
    }
}
