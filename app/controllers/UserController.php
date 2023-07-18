<?php

include_once "Core/renderView.php";
include_once "Core/functions.php";
include_once "app/requests/StoreUserRequest.php";
include_once "app/requests/UpdateUserRequest.php";

class UserController
{

    /**
     * Show list of Users
     *
     * @return void
     */
    public function index()
    {
        renderView('index');
    }


    /**
     * Show form create User
     *
     * @return void
     */
    public function showCreateForm()
    {
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
