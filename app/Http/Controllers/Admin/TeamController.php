<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TeamController extends Controller
{
    public function qr()
    {
        $inviteCode = '10132972';

        $registerUrl = route('signup', ['inviteCode' => $inviteCode]); // Replace with your actual registration route

        $qrCode = QrCode::size(250)->generate($registerUrl);

        return view('admin.team.qr', ['title' => 'QR Code', 'qrCode' => $qrCode, 'registerUrl' => $registerUrl]);
    }
}
