<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{

    public function update($user, array $input)
    {
        Validator::make($input, [
            'mobile' => ['required', 'string', 'max:10'],

            'location' => [
                'required',
                'string',
                'max:255',
            ],
        ])->validateWithBag('updateProfileInformation');

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'mobile' => $input['mobile'],
                'location' => $input['location'],
            ])->save();
        }
    }

    private function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'mobile' => $input['mobile'],
            'location' => $input['location'],
        ])->save();
    }
}
