<?php
require_once 'app/requests/StoreUserRequest.php';
require_once 'app/requests/UpdateUserRequest.php';
require_once 'app/models/User.php';


class UserController
{

    /**
     * Show list of Users
     *
     * @return void
     */
    public function index()
    {
        $user = User::all();

        return view('index', [
            'users' => $user
        ]);
    }


    /**
     * Show form create User
     *
     * @return void
     */
    public function showCreateForm()
    {
        echo "showCreateFrom";
    }


    /**
     * Store User in database
     *
     * @return void
     */
    public function store()
    {
    }


    /**
     * Show form edit User
     *
     * @return void
     */
    public function showEditForm()
    {
    }


    /**
     * Update User in database
     *
     * @return void
     */
    public function update()
    {
    }


    /**
     * Delete User in database
     *
     * @return void
     */
    public function destroy()
    {
    }
}
