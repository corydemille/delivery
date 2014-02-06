<?php
class AccountController extends HomeController {

    public function getCreate() {

        return View::make('account.create');

    }

    public function postCreate() {

    }
}