<?php
namespace App\Controllers;

use App\Models\User;


class UserController
{

    /**
     * Show list of Users
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
     * @return void
     */
    public function showCreateForm()
    {
        echo "showCreateFrom";
    }


    /**
     * Store User in database
     * @return void
     */
    public function store()
    {
        echo "store";
    }


    /**
     * Show form edit User
     * @return void
     */
    public function showEditForm()
    {
    }


    /**
     * Update User in database
     * @return void
     */
    public function update()
    {
    }


    /**
     * Delete User in database
     * @return void
     */
    public function destroy()
    {
    }


}
