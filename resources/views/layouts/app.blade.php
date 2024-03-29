<!DOCTYPE html>

<!-- 
=========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="{{ str_replace('_', '-', app()->getLocale()) }}"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets/') }}"
  data-template="vertical-menu-template-free"
 >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ config('app.name') }}" />
        <meta property="og:description" content="Anglican Church of Nigeria web version mobile application" />
        <meta property="og:image" content="{{ asset('assets/img/favicon/Untitled_design__20_-removebg-preview.png') }}" />
        <meta property="og:image:width" content="200" />
        <meta property="og:image:height" content="200" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:alt" content="{{ config('app.name') }}" />

        <title>{{ config('app.name', 'Conaio') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/Untitled_design__20_-removebg-preview.png') }}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
        />

        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

        <!-- Page CSS -->

        <!-- Helpers -->
        <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('assets/js/config.js') }}"></script>
        {{-- Flutterwave --}}
        <script src="https://checkout.flutterwave.com/v3.js"></script>
        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="font-sans antialiased">
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                @include('layouts.sidebar')


                <!-- Layout container -->
                <div class="layout-page">
                    
                    @include('layouts.navigation')

                    <!-- Page Content -->
                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                        <main>
                            {{ $slot }}
                        </main>
                        @include('layouts.footer')
                        <div class="content-backdrop fade"></div>
                    </div>
                <!-- / Layout page -->
                </div>
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>



        {{-- Google CDN --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

        <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

        <!-- Main JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <!-- Page JS -->
        <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        {{-- Diocese and Province auto fill --}}
        <script type="text/javascript">
            $(document).ready(function () {
                $('#province_id').on('change', function () {
                    var provinceId = this.value;
                    
                    $('#diocese').html('');
                    $.ajax({
                        url: '{{ route('getDiocese') }}?province_id='+provinceId,
                        type: 'get',
                        success: function (res) {
                            $('#diocese').html('<option value="">Select diocese</option>');
                            $.each(res, function (key, value) {
                                $('#diocese').append('<option value="' + value
                                    .id + '">' + value.name + '</option>');
                            });
                           
                        }
                    });
        
                });
               
            });
        </script>
        {{-- //End Diocese and Province auto fill --}}

        <script>
            setTimeout(() => {
                const box = document.getElementById('bottomAlert');

                // 👇️ removes element from DOM

                // 👇️ hides element (still takes up space on page)
                // box.style.visibility = 'hidden';
                }, 1500);
        </script>

        <script>
            $(document).ready(function(){
                $("#showModalOnPageLoad").modal('show');
            });
        </script>

              {{-- Script for flutter wave --}}
      <script>

        $(function () {
            $("#makePaymentForm").submit(function (e) {
                e.preventDefault();
                var name = $("#name").val();
                var email = $("#email").val();
                var phone_number = $("#phone_number").val();
                var type = $("#type").val();
                var currency = $("#currency").val();
                var amount = $("#amount").val();
                var province_id = $("#province_id").val();
                var diocese = $("#diocese").val();

                makePayment(name,email,phone_number,amount,currency);
            });
        });

        function makePayment(name,email,phone_number,amount,currency) {
          FlutterwaveCheckout({
            public_key: "FLWPUBK-6b712ffa17bb76fb9fef1c981c149b4e-X",
            //public_key: "FLWPUBK_TEST-61f4e2391ee8c2815a517cc6d8cbb25a-X",
            tx_ref: "RX1_{{ Str::substr(rand(0,time()),0,10) }}",
            amount,
            currency,
            payment_options: "card, banktransfer, ussd",
            redirect_url: "{{ route('donation.success') }}",
            //Looks like it uses this with requests on it even after it cancels a transaction.
            meta: {
              consumer_id: 23,
              consumer_mac: "92a3-912ba-1192a",
            },
            customer: {
              email,
              phone_number,
              name,
            },

            //callback: function(data) {
            // Send AJAX verification request to backend
            //verifyTransactionOnBackend(payment.id);
            //var tx_ref = data.tx_ref;
            //console.log(tx_ref);
            //var _token = $("input[name='_token']").val();
            //$.ajax({
            //    type = "POST",
            //    url: "{{ URL::to('verify-payment') }}",
            //    data: {
            //        tx_id,
            //        _token
            //    },
                //success: function (response) {
                //console.log(response);
                //}
            //});
            //},
            customizations: {
              title: "Conaio Donation",
              description: "Donation into the Angican Church of Nigeria.",
              logo: "https://api.conaio.com/assets/img/Untitled_design__20_-removebg-preview.png",
            },
          });
        }
      </script>
    </body>
</html>
