<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-53HWWYDWK9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-53HWWYDWK9');
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">  
</head>

<body class="font-sans antialiased bg-gray-100">

    <header class="sticky top-0 z-30 bg-gray-100">
        <div class="grid grid-cols-3 justify-between border-b border-gray-100 sticky top-0 z-30">
            @include('layouts.navigation')
        </div>
    </header>
    
     <!--<div class="grid w-full justify-center">-->
          

     <!--           <div class="grid grid-cols-2 p-2">-->
     <!--               <div class="col-span-2">-->
     <!--                   <p class="text-sm text-center">Disarankan menggunakan Firefox</p>-->
     <!--                   <p class="text-sm text-center">Streaming tidak dapat diplay jika menggunakan aplikasi selain Firefox</p>-->
     <!--               </div>-->
     <!--               <div class="grid justify-center"><a-->
     <!--                       href='https://play.google.com/store/apps/details?id=org.mozilla.firefox&hl=en&gl=US&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'-->
     <!--                       target="blank"><img alt='Get it on Google Play' width="120"-->
     <!--                           src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png' /></a>-->
     <!--                           </div>-->
     <!--                           <div class="grid justify-center"><a-->
     <!--                       href="https://apps.apple.com/us/app/firefox-private-safe-browser/id989804926?itsct=apps_box_badge&amp;itscg=30200"-->
     <!--                       target="blank"><img-->
     <!--                           src="https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/en-us?size=250x83&amp;releaseDate=1447286400"-->
     <!--                           alt="Download on the App Store" width="94"></a>-->
     <!--               </div>-->
     <!--           </div>-->

            
     <!--   </div>-->
    
    @if ($jadwala->isEmpty($jadwala)) 
    <main class="px-10 py-10 min-h-screen sticky bg-gray-100">
        @include('layouts.rii')
    </main>
    
    @else
    <main class="px-10 py-10 min-h-screen sticky bg-gray-100">
        @include('layouts.app')
    </main>
    @endif
    
    @if ($jadwala->isEmpty($jadwala)) 
    
    @else
    <footer class="bg-white border-t-6 border-yellow-tsn flex items-center justify-center p-2 sticky bottom-0 z-20 h-20">
        @include('layouts.navigation-bottom')
        
    </footer>
    @endif
    
    <!--<script language="javascript" type="text/javascript" src="https://panel.radioislam.my.id:2199/system/player.js"></script>-->
</body>

</html>