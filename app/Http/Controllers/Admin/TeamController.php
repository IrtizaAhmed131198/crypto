<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TeamController extends Controller
{
    public function qr()
    {
        $user = Auth::user(); // Get the logged-in user

        if (!$user->invite_code) {
            $user->invite_code = User::generateUniqueInviteCode();
            $user->save();
        }

        $registerUrl = route('signup', ['inviteCode' => $user->invite_code]);

        $qrCode = QrCode::size(250)->generate($registerUrl);

        return view('admin.team.qr', [
            'title' => 'QR Code',
            'qrCode' => $qrCode,
            'registerUrl' => $registerUrl
        ]);
    }
}
