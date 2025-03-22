@extends('admin.layout.layout')
@section('content')
@section('title', $title)
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">My Team Scan QR</h3>
                    </div>
                    <div class="card-body text-center">
                        <div class="qr_code">
                            {!! $qrCode !!}
                        </div>

                        <p>Or use this invite link:</p>
                        <p><strong>{{ $registerUrl }}</strong></p>

                        <!-- Copy and Share Buttons -->
                        <div class="copy-container">
                            <input type="text" id="inviteLink" class="hidden-input" value="{{ $registerUrl }}">

                            <!-- Copy Button -->
                            <button class="copy-btn" onclick="copyToClipboard()">
                                <i class="fas fa-copy"></i> Copy Link
                            </button>

                            <!-- Share Button -->
                            <button class="share-btn" onclick="shareLink()">
                                <i class="fas fa-share-alt"></i> Share
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('script')
<script>
    function copyToClipboard() {
        var copyText = document.getElementById("inviteLink");
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices
        document.execCommand("copy");

        alert("Link copied: " + copyText.value);
    }

    function shareLink() {
        var shareUrl = document.getElementById("inviteLink").value;

        if (navigator.share) {
            navigator.share({
                    title: "Join My Team",
                    text: "Register here: ",
                    url: shareUrl
                }).then(() => console.log('Shared successfully'))
                .catch((error) => console.log('Error sharing:', error));
        } else {
            // Fallback for devices without native sharing
            var whatsappUrl = "https://wa.me/?text=" + encodeURIComponent("Join my team! Register here: " + shareUrl);
            window.open(whatsappUrl, "_blank");
        }
    }
</script>
@endsection
