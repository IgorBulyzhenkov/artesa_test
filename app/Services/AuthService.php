<?php
namespace App\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthService
{
    private $lockoutTime = 300;
    private $maxAttempts = 3;

    public function authenticate(array $credentials): array
    {
        if ($this->isBlocked()) {
            $secondsLeft = session('login_block') - time();
            return [
                'status'    => false,
                'message'   => "Try again in seconds {$secondsLeft}",
                'code'      => 429,
            ];
        }

        $user = User::where('name', $credentials['name'])->first();

        if (is_null($user) || !Hash::check($credentials['password'], $user->password)) {

            $this->incrementAttempts();

            return [
                'status'    => false,
                'message'   => 'Wrong credentials!',
                'code'      => 400,
            ];
        }

        $this->resetAttempts();

        Auth::login($user);

        return [
            'status'    => true,
            'message'   => 'Login successful!',
            'code'      => 200,
        ];
    }

    private function isBlocked()
    {
        $blockTime = session('login_block');
        return $blockTime && $blockTime > time();
    }

    private function incrementAttempts()
    {
        $attempts = session('login_attempts', 0) + 1;
        session(['login_attempts' => $attempts]);

        if ($attempts >= $this->maxAttempts) {
            session([
                'login_block'       => time() + $this->lockoutTime,
                'login_attempts'    => 0
            ]);
        }
    }

    private function resetAttempts()
    {
        session()->forget(['login_attempts', 'login_block']);
    }
}
