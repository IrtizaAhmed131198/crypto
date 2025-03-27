@extends('admin.layout.layout')
@section('content')

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="flex flex-justify-between flex-align-center banner" style="background-color: black !important">
        <div>
          <h1 class="text-4xl text-white mb-2">Assign expert to</h1>
          <h1 class="text-4xl text-white mb-4">Manage Dashboard</h1>
          <div class="banner__cta">
            <button class="button bg-secondary text-white" style=" padding: 13px; border-radius: 16px; ">Find expert</button>
          </div>
        </div>
        <div class="banner__img">
          <img src="https://i.ibb.co/vBkwrv5/banner.png" alt="banner">
        </div>
      </div>

    {{-- <div class="row">
        <h2>Welcome {{ Auth::user()->name }}</h2>
    </div> --}}
    <!-- /.row -->
  </div><!--/. container-fluid -->
</section>

<br>
<br>

<section class="container-fluid">
    <h2>Market</h2>
<div class="portos">
    <div class="flex flex-justify-between flex-align-center bg-white porto">
      <svg width="48" height="48" viewBox="20 20 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2">
        <g filter="url(#filter0_d_1_55)">
          <rect x="20" y="20" width="48" height="48" rx="16" fill="#EF8E19"></rect>
        </g>
        <path d="M40.25 51.5V53.375C40.25 53.582 40.418 53.75 40.625 53.75H42.125C42.2245 53.75 42.3198 53.7105 42.3902 53.6402C42.4605 53.5698 42.5 53.4745 42.5 53.375V51.5H43.25V53.375C43.25 53.582 43.418 53.75 43.625 53.75H45.125C45.2245 53.75 45.3198 53.7105 45.3902 53.6402C45.4605 53.5698 45.5 53.4745 45.5 53.375V51.5H45.626C48.614 51.5 50.75 49.9505 50.75 47.27C50.75 45.017 49.2395 43.7855 47.471 43.61V43.478C48.926 43.115 49.9955 42.017 49.9955 40.193C49.9955 37.895 48.2705 36.5 45.638 36.5H45.5V34.625C45.5 34.5255 45.4605 34.4302 45.3902 34.3598C45.3198 34.2895 45.2245 34.25 45.125 34.25H43.625C43.5255 34.25 43.4302 34.2895 43.3598 34.3598C43.2895 34.4302 43.25 34.5255 43.25 34.625V36.5H42.3905V34.625C42.3905 34.5255 42.351 34.4302 42.2807 34.3598C42.2103 34.2895 42.115 34.25 42.0155 34.25H40.625C40.5255 34.25 40.4302 34.2895 40.3598 34.3598C40.2895 34.4302 40.25 34.5255 40.25 34.625V36.5L37.253 36.5165C37.1535 36.5165 37.0582 36.556 36.9878 36.6263C36.9175 36.6967 36.878 36.792 36.878 36.8915V38.375C36.878 38.5805 37.043 38.75 37.25 38.75L38.3825 38.7425C38.6796 38.7445 38.9638 38.8639 39.1732 39.0746C39.3825 39.2854 39.5 39.5704 39.5 39.8675V48.125C39.5 48.4234 39.3815 48.7095 39.1705 48.9205C38.9595 49.1315 38.6734 49.25 38.375 49.25L37.253 49.2665C37.1535 49.2665 37.0582 49.306 36.9878 49.3763C36.9175 49.4467 36.878 49.542 36.878 49.6415V51.1415C36.878 51.3485 37.046 51.5165 37.253 51.5165L40.25 51.5ZM42.3905 38.7305H44.969C46.328 38.7305 47.126 39.4775 47.126 40.6985C47.126 42.005 46.2635 42.7415 44.3105 42.7415H42.3905V38.7305ZM42.3905 44.807H45.1505C46.856 44.807 47.7845 45.677 47.7845 47.093C47.7845 48.5225 46.8455 49.268 44.5475 49.268H42.3905V44.8085V44.807Z" fill="white"></path>
        <defs>
          <filter id="filter0_d_1_55" x="0" y="0" width="88" height="88" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
            <feOffset></feOffset>
            <feGaussianBlur stdDeviation="10"></feGaussianBlur>
            <feComposite in2="hardAlpha" operator="out"></feComposite>
            <feColorMatrix type="matrix" values="0 0 0 0 0.5586 0 0 0 0 0.560629 0 0 0 0 0.57 0 0 0 0.04 0"></feColorMatrix>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_55"></feBlend>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_55" result="shape"></feBlend>
          </filter>
        </defs>
      </svg>
      <div class="mt-1">
        <div class="flex flex-align-center flex-justify-between mb-2">
          <p class="text-xl mr-4"><b>BTC</b><span class="text-gray-500 text-sm"> / USDT</span></p>
          <p class="text-xl">$135,25</p>
        </div>
        <div class="flex flex-align-center flex-justify-between">
          <small class="text-gray-500">Bitcoin</small>
          <small class="flex flex-align-center text-error"><svg width="20" height="20" viewBox="5 5 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.869 16.6308C10.811 16.5743 10.563 16.3609 10.359 16.1622C9.076 14.9971 6.976 11.9576 6.335 10.3668C6.232 10.1252 6.014 9.51437 6 9.18802C6 8.8753 6.072 8.5772 6.218 8.29274C6.422 7.93814 6.743 7.65368 7.122 7.49781C7.385 7.39747 8.172 7.2416 8.186 7.2416C9.047 7.08573 10.446 7 11.992 7C13.465 7 14.807 7.08573 15.681 7.21335C15.695 7.22796 16.673 7.38383 17.008 7.55431C17.62 7.86702 18 8.47784 18 9.13151V9.18802C17.985 9.61374 17.605 10.509 17.591 10.509C16.949 12.0141 14.952 14.9834 13.625 16.1768C13.625 16.1768 13.284 16.5129 13.071 16.659C12.765 16.887 12.386 17 12.007 17C11.584 17 11.19 16.8724 10.869 16.6308Z" fill="#FF4842"></path>
            </svg>
            $32 (2%)</small>
        </div>
      </div>
    </div>
    <div class="flex flex-justify-between flex-align-center bg-white porto">
      <svg width="48" height="48" viewBox="20 20 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2">
        <g filter="url(#filter0_d_117_77)">
          <rect x="20" y="20" width="48" height="48" rx="16" fill="#636890"></rect>
        </g>
        <path d="M52.8406 43.5407L44.5906 33.0407C44.5205 32.9511 44.4308 32.8786 44.3285 32.8287C44.2262 32.7788 44.1138 32.7529 44 32.7529C43.8862 32.7529 43.7738 32.7788 43.6715 32.8287C43.5692 32.8786 43.4795 32.9511 43.4094 33.0407L35.1594 43.5407C35.0544 43.6708 34.9971 43.8329 34.9971 44.0001C34.9971 44.1672 35.0544 44.3294 35.1594 44.4594L43.4094 54.9594C43.4795 55.0491 43.5692 55.1216 43.6715 55.1714C43.7738 55.2213 43.8862 55.2472 44 55.2472C44.1138 55.2472 44.2262 55.2213 44.3285 55.1714C44.4308 55.1216 44.5205 55.0491 44.5906 54.9594L52.8406 44.4594C52.9456 44.3294 53.0029 44.1672 53.0029 44.0001C53.0029 43.8329 52.9456 43.6708 52.8406 43.5407ZM44.75 35.6657L51.0687 43.7094L44.75 46.5876V35.6657ZM43.25 46.5876L36.9312 43.7094L43.25 35.6657V46.5876ZM43.25 48.2376V52.3344L38.2437 45.9594L43.25 48.2376ZM44.75 48.2376L49.7562 45.9594L44.75 52.3344V48.2376Z" fill="white"></path>
        <defs>
          <filter id="filter0_d_117_77" x="0" y="0" width="88" height="88" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
            <feOffset></feOffset>
            <feGaussianBlur stdDeviation="10"></feGaussianBlur>
            <feComposite in2="hardAlpha" operator="out"></feComposite>
            <feColorMatrix type="matrix" values="0 0 0 0 0.5586 0 0 0 0 0.560629 0 0 0 0 0.57 0 0 0 0.04 0"></feColorMatrix>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_117_77"></feBlend>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_117_77" result="shape"></feBlend>
          </filter>
        </defs>
      </svg>
      <div class="mt-1">
        <div class="flex flex-align-center flex-justify-between mb-2">
          <p class="text-xl mr-4"><b>ETH</b><span class="text-gray-500 text-sm"> / USDT</span></p>
          <p class="text-xl">$215,00</p>
        </div>
        <div class="flex flex-align-center flex-justify-between">
          <small class="text-gray-500">Ethereum</small>
          <small class="flex flex-align-center text-success"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="rotate-180">
              <path d="M10.869 16.6308C10.811 16.5743 10.563 16.3609 10.359 16.1622C9.076 14.9971 6.976 11.9576 6.335 10.3668C6.232 10.1252 6.014 9.51437 6 9.18802C6 8.8753 6.072 8.5772 6.218 8.29274C6.422 7.93814 6.743 7.65368 7.122 7.49781C7.385 7.39747 8.172 7.2416 8.186 7.2416C9.047 7.08573 10.446 7 11.992 7C13.465 7 14.807 7.08573 15.681 7.21335C15.695 7.22796 16.673 7.38383 17.008 7.55431C17.62 7.86702 18 8.47784 18 9.13151V9.18802C17.985 9.61374 17.605 10.509 17.591 10.509C16.949 12.0141 14.952 14.9834 13.625 16.1768C13.625 16.1768 13.284 16.5129 13.071 16.659C12.765 16.887 12.386 17 12.007 17C11.584 17 11.19 16.8724 10.869 16.6308Z" fill="#6DD64D"></path>
            </svg>
            $32 (2%)</small>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->

@endsection
