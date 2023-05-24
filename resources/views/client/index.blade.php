<!DOCTYPE html>
   <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
   
       <title>{{ env('APP_NAME') }} | Home</title>
   
       <!-- Font Awesome -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
             integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
             crossorigin="anonymous"/>
   
       <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
   
       <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
             rel="stylesheet">
             
       <!-- AdminLTE -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css"
             integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ=="
             crossorigin="anonymous"/>
   
       <!-- iCheck -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
             integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
             crossorigin="anonymous"/>
   
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
             integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
             crossorigin="anonymous"/>
   
       <link rel="stylesheet"
             href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
             integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
             crossorigin="anonymous"/>
   
       <!-- Styles -->
       <style>
           /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
           html {
               line-height: 1.15;
               -webkit-text-size-adjust: 100%
           }
   
           body {
               margin: 0
           }
   
           a {
               background-color: transparent
           }
   
           [hidden] {
               display: none
           }
   
           html {
               font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
               line-height: 1.5
           }
   
           *, :after, :before {
               box-sizing: border-box;
               border: 0 solid #e2e8f0
           }
   
           a {
               color: inherit;
               text-decoration: inherit
           }
   
           svg, video {
               display: block;
               vertical-align: middle
           }
   
           video {
               max-width: 100%;
               height: auto
           }
   
           .bg-white {
               --bg-opacity: 1;
               background-color: #fff;
               background-color: rgba(255, 255, 255, var(--bg-opacity))
           }
   
           .bg-gray-100 {
               --bg-opacity: 1;
               background-color: #f7fafc;
               background-color: rgba(247, 250, 252, var(--bg-opacity))
           }
   
           .border-gray-200 {
               --border-opacity: 1;
               border-color: #edf2f7;
               border-color: rgba(237, 242, 247, var(--border-opacity))
           }
   
           .border-t {
               border-top-width: 1px
           }
   
           .flex {
               display: flex
           }
   
           .grid {
               display: grid
           }
   
           .hidden {
               display: none
           }
   
           .items-center {
               align-items: center
           }
   
           .justify-center {
               justify-content: center
           }
   
           .font-semibold {
               font-weight: 600
           }
   
           .h-5 {
               height: 1.25rem
           }
   
           .h-8 {
               height: 2rem
           }
   
           .h-16 {
               height: 4rem
           }
   
           .text-sm {
               font-size: .875rem
           }
   
           .text-lg {
               font-size: 1.125rem
           }
   
           .leading-7 {
               line-height: 1.75rem
           }
   
           .mx-auto {
               margin-left: auto;
               margin-right: auto
           }
   
           .ml-1 {
               margin-left: .25rem
           }
   
           .mt-2 {
               margin-top: .5rem
           }
   
           .mr-2 {
               margin-right: .5rem
           }
   
           .ml-2 {
               margin-left: .5rem
           }
   
           .mt-4 {
               margin-top: 1rem
           }
   
           .ml-4 {
               margin-left: 1rem
           }
   
           .mt-8 {
               margin-top: 2rem
           }
   
           .ml-12 {
               margin-left: 3rem
           }
   
           .-mt-px {
               margin-top: -1px
           }
   
           .max-w-6xl {
               max-width: 72rem
           }
   
           .min-h-screen {
               min-height: 100vh
           }
   
           .overflow-hidden {
               overflow: hidden
           }
   
           .p-6 {
               padding: 1.5rem
           }
   
           .py-4 {
               padding-top: 1rem;
               padding-bottom: 1rem
           }
   
           .px-6 {
               padding-left: 1.5rem;
               padding-right: 1.5rem
           }
   
           .pt-8 {
               padding-top: 2rem
           }
   
           .fixed {
               position: fixed
           }
   
           .relative {
               position: relative
           }
   
           .top-0 {
               top: 0
           }
   
           .right-0 {
               right: 0
           }
   
           .shadow {
               box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
           }
   
           .text-center {
               text-align: center
           }
   
           .text-gray-200 {
               --text-opacity: 1;
               color: #edf2f7;
               color: rgba(237, 242, 247, var(--text-opacity))
           }
   
           .text-gray-300 {
               --text-opacity: 1;
               color: #e2e8f0;
               color: rgba(226, 232, 240, var(--text-opacity))
           }
   
           .text-gray-400 {
               --text-opacity: 1;
               color: #cbd5e0;
               color: rgba(203, 213, 224, var(--text-opacity))
           }
   
           .text-gray-500 {
               --text-opacity: 1;
               color: #a0aec0;
               color: rgba(160, 174, 192, var(--text-opacity))
           }
   
           .text-gray-600 {
               --text-opacity: 1;
               color: #718096;
               color: rgba(113, 128, 150, var(--text-opacity))
           }
   
           .text-gray-700 {
               --text-opacity: 1;
               color: #4a5568;
               color: rgba(74, 85, 104, var(--text-opacity))
           }
   
           .text-gray-900 {
               --text-opacity: 1;
               color: #1a202c;
               color: rgba(26, 32, 44, var(--text-opacity))
           }
   
           .underline {
               text-decoration: underline
           }
   
           .antialiased {
               -webkit-font-smoothing: antialiased;
               -moz-osx-font-smoothing: grayscale
           }
   
           .w-5 {
               width: 1.25rem
           }
   
           .w-8 {
               width: 2rem
           }
   
           .w-auto {
               width: auto
           }
   
           .grid-cols-1 {
               grid-template-columns:repeat(1, minmax(0, 1fr))
           }
   
           @media (min-width: 640px) {
               .sm\:rounded-lg {
                   border-radius: .5rem
               }
   
               .sm\:block {
                   display: block
               }
   
               .sm\:items-center {
                   align-items: center
               }
   
               .sm\:justify-start {
                   justify-content: flex-start
               }
   
               .sm\:justify-between {
                   justify-content: space-between
               }
   
               .sm\:h-20 {
                   height: 5rem
               }
   
               .sm\:ml-0 {
                   margin-left: 0
               }
   
               .sm\:px-6 {
                   padding-left: 1.5rem;
                   padding-right: 1.5rem
               }
   
               .sm\:pt-0 {
                   padding-top: 0
               }
   
               .sm\:text-left {
                   text-align: left
               }
   
               .sm\:text-right {
                   text-align: right
               }
           }
   
           @media (min-width: 768px) {
               .md\:border-t-0 {
                   border-top-width: 0
               }
   
               .md\:border-l {
                   border-left-width: 1px
               }
   
               .md\:grid-cols-2 {
                   grid-template-columns:repeat(2, minmax(0, 1fr))
               }
           }
   
           @media (min-width: 1024px) {
               .lg\:px-8 {
                   padding-left: 2rem;
                   padding-right: 2rem
               }
           }
   
           @media (prefers-color-scheme: dark) {
               .dark\:bg-gray-800 {
                   --bg-opacity: 1;
                   background-color: #2d3748;
                   background-color: rgba(45, 55, 72, var(--bg-opacity))
               }
   
               .dark\:bg-gray-900 {
                   --bg-opacity: 1;
                   background-color: #1a202c;
                   background-color: rgba(26, 32, 44, var(--bg-opacity))
               }
   
               .dark\:border-gray-700 {
                   --border-opacity: 1;
                   border-color: #4a5568;
                   border-color: rgba(74, 85, 104, var(--border-opacity))
               }
   
               .dark\:text-white {
                   --text-opacity: 1;
                   color: #fff;
                   color: rgba(255, 255, 255, var(--text-opacity))
               }
   
               .dark\:text-gray-400 {
                   --text-opacity: 1;
                   color: #cbd5e0;
                   color: rgba(203, 213, 224, var(--text-opacity))
               }
           }
   
           .gone {
               display: none;
           }
       </style>
   
       <style>
           body {
               font-family: 'Nunito';
           }

           p, 
           h1, h2, h3, h4 {
            padding: 0 !important;
            margin: 0 !important;
           }

           .divider {
            height: 1px;
            width: 100%;
            background-color: #cbd5e0;
            margin-top: 10px;
            margin-bottom: 10px;
           }

           .bg {
            background-color: #1c362d;
           }
       </style>
   </head>

   <body class="antialiased">
   <div class="min-h-screen bg p-2">
      <div class="row">
         <div class="col-lg-12" style="margin-bottom: 20px;">
            <span style="color: white;">
               <img src="{{ URL::asset('imgs/logo.webp') }}" alt="" style="width: 32px;">
                BOHECO I | <strong>{{ env('APP_NAME') }}</strong>
           </span>
         </div>

         {{-- Account Info --}}
         <div class="col-lg-4">
            <div class="card">
               <div class="card-body">
                  <span class="text-muted" id="account-no">{{ $accountNo }}</span>
                  <span class="float-right badge" id="status"></span><br>
                  <h3 id="account-name"></h3>
                  <p id="account-address"></p>

                  <div class="divider"></div>

                  <table class="table table-hover table-sm table-borderless">
                     <tr>
                        <td class="text-muted">Meter Number</td>
                        <th id="meter-no"></th>
                     </tr>
                     <tr>
                        <td class="text-muted">Pole Number</td>
                        <th id="pole-no"></th>
                     </tr>
                     <tr>
                        <td class="text-muted">Contact Number</td>
                        <th id="contactNo"></th>
                     </tr>
                     <tr>
                        <td class="text-muted">Email Address</td>
                        <th id="email"></th>
                     </tr>
                     <tr>
                        <td class="text-muted">Route Code</td>
                        <th id="route"></th>
                     </tr>
                  </table>
               </div>
            </div>
         </div>

         {{-- Ledger Info --}}
         <div class="col-lg-8">
            <div class="card" style="height: 85vh;">
               <div class="card-header">
                  <span class="card-title text-muted"><i class="fas fa-info-circle" style="margin-right: 10px;"></i> Ledger</span>
                  <div id="loader" class="spinner-border gone text-primary float-right" role="status">
                    <span class="sr-only">Loading...</span>
                    </div>
               </div>
               <div class="card-body table-responsive p-0">
                  <table class="table table-hover table-bordered table-sm" id="ledgers-table">
                     <thead>
                        <th>Billing Month</th>
                        <th>Bill Number</th>
                        <th class='text-right'>kWh Used</th>
                        <th class='text-right'>Amount Due</th>
                        <th class='text-right'>Surcharges</th>
                        <th class='text-right'>Total Amount Due</th>
                        <th>Due Date</th>
                        <th class="text-right"></th>
                     </thead>
                     <tbody>

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   {{-- SCRIPTS --}}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
           integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
           crossorigin="anonymous"></script>
   
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
           integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
           crossorigin="anonymous"></script>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
           integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" 
           crossorigin="anonymous"></script>
           
   <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
   <!-- AdminLTE App -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"
           integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA=="
           crossorigin="anonymous"></script>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"
           integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg=="
           crossorigin="anonymous"></script>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
           integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg=="
           crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
           integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
           crossorigin="anonymous"></script>
           
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.min.js" integrity="sha512-J+763o/bd3r9iW+gFEqTaeyi+uAphmzkE/zU8FxY6iAvD3nQKXa+ZAWkBI9QS9QkYEKddQoiy0I5GDxKf/ORBA==" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
   <script>
      $(document).ready(function() {
        $('#loader').removeClass('gone')
         getAccount("{{ $accountNo }}")
         getLedger("{{ $accountNo }}")
      })

      var Toast = Swal.mixin({
         toast: true,
         position: 'top-end',
         showConfirmButton: false,
         timer: 3000
      });

      function getAccount(acctNo) {
         $.ajax({
            url : "{{ env('APP_PUBLIC_URL') }}get-account-by-account-number",
            type : "GET",
            data : {
               acctNo : acctNo,
            },
            success : function(res) {
               $('#account-name').text(res['ConsumerName'])
               $('#account-address').text(res['ConsumerAddress'])

               $('#status').text(res['AccountStatus'])
               if (res['AccountStatus'] == 'ACTIVE') {
                  $('#status').addClass('bg-success')
               } else {
                  $('#status').addClass('bg-danger')
               }
               
               $('#meter-no').text(res['MeterNumber'])
               $('#pole-no').text(res['Pole'])
            //    $('#contactNo').text(res['ContactNumber'])
            //    $('#email').text(res['Email'])
               $('#route').text(res['Route'])
            },
            error : function(err) {
               Toast.fire({
                        icon : 'error',
                        text : 'Error getting account info'
                     })
            }
         })
      }

      function getLedger(acctNo) {
         $('#ledgers-table tbody tr').remove()
         $.ajax({
            url : "{{ env('APP_PUBLIC_URL') }}get-latest-bills",
            type : "GET",
            data : {
               q : acctNo,
            },
            success : function(res) {
               $.each(res, function(index, element) {
                  $('#ledgers-table tbody').append(addLedgerRow(res[index]))                  
               })
                $('#loader').addClass('gone')
            },
            error : function(err) {
                $('#loader').addClass('gone')
               Toast.fire({
                        icon : 'error',
                        text : 'Error getting ledger'
                     })
            }
         })
      }

      function addLedgerRow(arr) {
         return "<tr>" +
                    "<td>" +  (jQuery.isEmptyObject(arr['NetAmountPaid']) ? `<i class='fas fa-exclamation-circle text-danger'></i>` : `<i class='fas fa-check-circle text-success'></i>`) + " " + moment(arr['ServicePeriodEnd']).format('MMM YYYY') + "</td>" +
                    "<td>" + arr['BillNumber'] + "</td>" +
                    "<td class='text-right'>" + arr['PowerKWH'] + "</td>" +
                    "<td class='text-right'>₱ " + Number(parseFloat(arr['NetAmount'])).toLocaleString(2) + "</td>" +
                    "<td class='text-right'>₱ " + (jQuery.isEmptyObject(arr['NetAmountPaid']) ? Number(parseFloat(arr['Surcharges'])).toLocaleString(2) : '0') + "</td>" +
                    "<td class='text-right " + (jQuery.isEmptyObject(arr['NetAmountPaid']) ? 'text-danger' : 'text-success') + "'>₱ " + (jQuery.isEmptyObject(arr['NetAmountPaid']) ? Number(parseFloat(arr['Surcharges']) + parseFloat(arr['NetAmount'])).toLocaleString(2) : Number(parseFloat(arr['NetAmount'])).toLocaleString(2)) + "</td>" +
                    "<td>" + moment(arr['DueDate']).format('MMM d, YYYY') + "</td>" +
                    "<td class='text-right'>" + 
                        // "<a class='text-primary' style='margin-right: 15px;' title='View Statement of Account'><i class='fas fa-eye'></i></a>" +
                        "<a class='text-warning' href='" + `{{ url('client/print-soa') }}/` + arr['AccountNumber'] + `/` + arr['ServicePeriodEnd'] + "' title='Print Statement of Account'><i class='fas fa-print'></i></a>" +
                    "</td>" +
               "</tr>"
      }
   </script>
   
   </body>
   
   </html>