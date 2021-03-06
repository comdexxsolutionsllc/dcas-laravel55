<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class DisableUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:disable {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Disable a user';

    /**
     * User's email to disable.
     *
     * @var string
     */
    protected $email = '';


    /**
     * User object to disable.
     *
     * @var \App\User
     */
    protected $user;

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->email = $this->argument('email');
        $this->user = User::where(compact('email'))->first();

        $this->exitIfUserNotFound($this->getUser(), $this->getEmail());

        $this->confirm('Are you sure you wish to disable this user?') ?
            $this->disableUser($this->getUser(), $this->getEmail()) :
            $this->info("User '$this->email' has not been disabled.");
    }

    /**
     * Exit command if user is not found.
     *
     * @param \App\User $user
     * @param           $email
     */
    protected function exitIfUserNotFound(User $user, $email)
    {
        if (empty($user)) {
            $this->error("User '$email' not found");
        }

        return;
    }

    /**
     * Disable the given user.
     *
     * @param \App\User $user
     * @param           $email
     */
    protected function disableUser(User $user, $email)
    {
        $user->is_disabled = 1;
        $user->save();

        $this->info("User '$email' disabled.");
    }

    /**
     * Get User's email.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Get User object.
     *
     * @return \App\User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}
