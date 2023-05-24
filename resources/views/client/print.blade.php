<style>
   html, body {
      font-family: sans-serif;
      print-color-adjust: exact; 
      -webkit-print-color-adjust: exact;
   }

   .center-text {
      text-align: center;
   }

   .right-text {
      text-align: right;
   }

   .left-text {
      text-align: left;
   }

   p, h1, h2, h3, h4 {
      padding: 0px;
      margin: 0px;
   }

   .row {
      width: 100%;
   }

   .col-md-4 {
      width: 24.20%;
      margin-right: 15px;
      display: inline-table;
   }

   .col-md-6 {
      width: 45.6%;
      margin-right: 15px;
      display: inline-table;
   }

   .col-md-8 {
      width: 66.2%;
      display: inline-table;
   }

   .col-md-12 {
      width: 99.98%;
      display: inline-table;
   }

   .divider {
      print-color-adjust: exact; 
      width: 100%;
      height: 1px;;
      background-color: #6565;
      margin-top: 5px;
      margin-bottom: 5px;
   }

   .text-indent {
      text-indent: 15px;
   }

   .float-left {
      float: left;
   }

   .float-right {
      float: right;
   }

   table {
      width: 100%;
   }

   td.last {
      width: 1px;
      white-space: nowrap;
   }

   @page {
      margin: 15px;
   }

   @media print {
      html, body {
         margin: 0px;
         padding: 0px;
         font-size: .85em;
      }

      td, tr, th {
         font-size: .8em;
      }
   }
</style>

<div class="content">
   <img src="{{ URL::asset('imgs/company_logo.png') }}" alt="" style="width: 50px; position: fixed;">
   <h4 class="center-text">{{ strtoupper(env('APP_COMPANY')) }}</h4>
   <p class="center-text">{{ env('APP_ADDRESS') }}</p>
   <br>
   <h3 class="center-text">STATEMENT OF ACCOUNT</h3>
   <br>

   <div class="row">
      {{-- <div class="col-md-4">
         <p class="center-text" style="border: 1px solid #898989;">Questions or concerns?</p>
         <p class="center-text">Please Contact Us</p>
         <p class="center-text">anytime at these</p>
         <p class="center-text">following numbers:</p>
         <p class="center-text">(038)508-9731 * 508-</p>
         <p class="center-text">9751 * 508-9741</p>
      </div> --}}

      <div class="col-md-12">
         <table>
            <tr>
               <td class="text-right">Account Number</td>
               <td class="text-left" id="account-no-header"> : {{ $accountNo }}</td>
               <td class="text-right">Prev Reading</td>
               <td class="text-left" id="prev-reading"></td>
               <td class="text-right">Date From</td>
               <td class="text-left" id="date-from"></td>
            </tr>
            <tr>
               <td class="text-right">Consumer Name</td>
               <td class="text-left" id="consumer-name"></td>
               <td class="text-right">Pres Reading</td>
               <td class="text-left" id="pres-reading"></td>
               <td class="text-right">Date To</td>
               <td class="text-left" id="date-to"></td>
            </tr>
            <tr>
               <td class="text-right">Consumer Address</td>
               <td class="text-left" id="consumer-address"></td>
               <td class="text-right">Coreloss</td>
               <td class="text-left" id="coreloss"></td>
               <td class="text-right">Due Date</td>
               <td class="text-left" id="due-date"></td>
            </tr>
            <tr>
               <td class="text-right">Route</td>
               <td class="text-left" id="route"></td>
               <td class="text-right">Demand</td>
               <td class="text-left" id="demand"></td>
               <td class="text-right">Billing Month</td>
               <td class="text-left" id="billing-period"> : {{ date('F Y', strtotime($billingMonth)) }}</td>
            </tr>
            <tr>
               <td class="text-right">Meter Number</td>
               <td class="text-left" id="meter-number"></td>
               <td class="text-right">Multiplier</td>
               <td class="text-left" id="multiplier"></td>
               <td class="text-right">Bill Number</td>
               <td class="text-left" id="bill-number"></td>
            </tr>
            <tr>
               <td class="text-right">Consumer Type</td>
               <td class="text-left" id="consumer-type"></td>
               <td class="text-right">kWH Used</td>
               <td class="text-left" id="kwh-used"></td>
               <td class="text-right"></td>
               <td class="text-left"></td>
            </tr>
         </table>
      </div>

      <div class="col-md-12">
         <div class="divider"></div>
      </div>

      {{-- LEFT CHARGES --}}
      <div class="col-md-6">
         <table>
            <tr>
               <th class="center-text">CHARGES</th>
               <th></th>
               <th class="right-text">RATE</th>
               <th class="right-text">AMOUNT</th>
            </tr>
            {{-- GENERATION --}}
            <tr>
               <td colspan="4"><strong>Generation Charges</strong></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Generation Charge</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="generation-rate"></td>
               <td class="right-text" class="right-text" id="generation-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Other Generation Adj.</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="generation-ou-rate"></td>
               <td class="right-text" class="right-text" id="generation-ou-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Transmission System</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="transmission-system-rate"></td>
               <td class="right-text" class="right-text" id="transmission-system-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Transmission Demand</td>
               <td class="left-text">Per kW</td>
               <td class="right-text" class="right-text" id="transmission-demand-rate"></td>
               <td class="right-text" class="right-text" id="transmission-demand-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Other Transmission Adj.</td>
               <td class="left-text">Per kW</td>
               <td class="right-text" class="right-text" id="transmission-ou-rate"></td>
               <td class="right-text" class="right-text" id="transmission-ou-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">System Loss</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="system-loss-rate"></td>
               <td class="right-text" class="right-text" id="system-loss-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Other Sys. Loss Adj.</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="system-loss-ou-rate"></td>
               <td class="right-text" class="right-text" id="system-loss-ou-charge"></td>
            </tr>
            {{-- DISTRIBUTION --}}
            <tr>
               <td colspan="4"><strong>Distribution Charges</strong></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Distribution System</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="distribution-system-rate"></td>
               <td class="right-text" class="right-text" id="distribution-system-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Distribution Demand</td>
               <td class="left-text">Per kW</td>
               <td class="right-text" class="right-text" id="distribution-demand-rate"></td>
               <td class="right-text" class="right-text" id="distribution-demand-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Supply System</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="supply-system-rate"></td>
               <td class="right-text" class="right-text" id="supply-system-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Supply Retail</td>
               <td class="left-text">Per kW</td>
               <td class="right-text" class="right-text" id="supply-retail-rate"></td>
               <td class="right-text" class="right-text" id="supply-retail-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Metering System</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="metering-system-rate"></td>
               <td class="right-text" class="right-text" id="metering-system-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Metering Retail</td>
               <td class="left-text">Per kW</td>
               <td class="right-text" class="right-text" id="metering-retail-rate"></td>
               <td class="right-text" class="right-text" id="metering-retail-charge"></td>
            </tr>

            {{-- UNIVERSAL --}}
            <tr>
               <td colspan="4"><strong>Universal Charges</strong></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Missionary Electrification</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="missionary-electrification-rate"></td>
               <td class="right-text" class="right-text" id="missionary-electrification-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">NPC Stranded Debts</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="npc-stranded-debt-rate"></td>
               <td class="right-text" class="right-text" id="npc-stranded-debt-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">NPC Stranded Cost</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="npc-stranded-cost-rate"></td>
               <td class="right-text" class="right-text" id="npc-stranded-cost-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Environmental</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="environmental-rate"></td>
               <td class="right-text" class="right-text" id="environmental-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">ACRM - TAFPPCA</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="tafppca-rate"></td>
               <td class="right-text" class="right-text" id="tafppca-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">ACRM - TAFxA</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="tafxa-rate"></td>
               <td class="right-text" class="right-text" id="tafxa-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">DAA - GRAM</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="daa-gram-rate"></td>
               <td class="right-text" class="right-text" id="daa-gram-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">DAA - ICERA</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="daa-icera-rate"></td>
               <td class="right-text" class="right-text" id="daa-icera-charge"></td>
            </tr>

         </table>
      </div>

      {{-- RIGHT CHARGES --}}
      <div class="col-md-6">
         <table>
            <tr>
               <th class="center-text">CHARGES</th>
               <th></th>
               <th class="right-text">RATE</th>
               <th class="right-text">AMOUNT</th>
            </tr>

            {{-- OTHER CHARGES --}}
            <tr>
               <td colspan="4"><strong>Other Charges</strong></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Lifeline Subsidy Charge(Discount)</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="lifeline-rate"></td>
               <td class="right-text" class="right-text" id="lifeline-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Other Lifeline Rate Adj.</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="lifeline-ou-rate"></td>
               <td class="right-text" class="right-text" id="lifeline-ou-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">RFSC</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="rfsc-rate"></td>
               <td class="right-text" class="right-text" id="rfsc-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">FIT All.</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="fit-all-rate"></td>
               <td class="right-text" class="right-text" id="fit-all-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Senior Citizen Subsidy</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="sc-rate"></td>
               <td class="right-text" class="right-text" id="sc-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Other Senior Citizen Adj.</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="sc-ou-rate"></td>
               <td class="right-text" class="right-text" id="sc-ou-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Other Charges</td>
               <td class="left-text"></td>
               <td class="right-text" class="right-text" id="other-charges-rate"></td>
               <td class="right-text" class="right-text" id="other-charges-charge"></td>
            </tr>

            {{-- VAT CHARGES --}}
            <tr>
               <td colspan="4"><strong>Government Revenues</strong></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Generation VAT</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="generation-vat-rate"></td>
               <td class="right-text" class="right-text" id="generation-vat-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Transmission VAT</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="transmission-vat-rate"></td>
               <td class="right-text" class="right-text" id="transmission-vat-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">System Loss VAT</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="system-loss-vat-rate"></td>
               <td class="right-text" class="right-text" id="system-loss-vat-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Distribution VAT</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="distribution-vat-rate"></td>
               <td class="right-text" class="right-text" id="distribution-vat-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">DAA VAT</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="daa-vat-rate"></td>
               <td class="right-text" class="right-text" id="daa-vat-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">ACRM VAT</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="acrm-vat-rate"></td>
               <td class="right-text" class="right-text" id="acrm-vat-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Other VATables</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="others-vat-rate"></td>
               <td class="right-text" class="right-text" id="others-vat-charge"></td>
            </tr>

            {{-- PASS THROUGH TAXES --}}
            <tr>
               <td colspan="4"><strong>Pass Through Taxes</strong></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Franchise Tax</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="franchise-tax-rate"></td>
               <td class="right-text" class="right-text" id="franchise-tax-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Business Tax</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="business-tax-rate"></td>
               <td class="right-text" class="right-text" id="business-tax-charge"></td>
            </tr>
            <tr>
               <td class="left-text text-indent">Real Property Tax</td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text" id="real-property-tax-rate"></td>
               <td class="right-text" class="right-text" id="real-property-tax-charge"></td>
            </tr>

            <tr>
               <td colspan="5"><strong></strong></td>
            </tr>
            <tr>
               <td colspan="5"><strong></strong></td>
            </tr>
            <tr>
               <td colspan="5"><strong></strong></td>
            </tr>
            <tr>
               <td class="left-text"><strong>Transformer Rental</strong></td>
               <td class="left-text">Per Month</td>
               <td class="right-text" class="right-text"></td>
               <td class="right-text" class="right-text" id="transformer-rental"></td>
            </tr>
            <tr>
               <td class="left-text"><strong>Mandatory Rate Reduction</strong></td>
               <td class="left-text">Per kWH</td>
               <td class="right-text" class="right-text">0</td>
               <td class="right-text" class="right-text">0</td>
            </tr>
            <tr>
               <td class="left-text"><strong>Total VAT</strong></td>
               <td class="left-text"></td>
               <td class="right-text" class="right-text"></td>
               <td class="right-text" class="right-text" id="total-vat">0</td>
            </tr>
         </table>
      </div>

      <div class="col-md-12" style="margin-bottom: 5px;">
         <div class="divider"></div>
      </div>

      {{-- ARREARS --}}
      <div class="col-md-6">
         <i>Arrears Data</i>
         <table>
            <tr>
               <td>Number of Months</td>
               <td id="number-of-months"></td>
            </tr>

            <tr>
               <td>Total Arrears Payable</td>
               <td id="total-arrears"></td>
            </tr>
         </table>
      </div>

      {{-- TOTAL AMOUNT DUE --}}
      <div class="col-md-6">
         <table>
            <tr>
               <th>Current Amount Due</th>
               <th id="current-amount-due" style="font-size: 1em;" class="right-text"></th>
            </tr>

            <tr>
               <th>Surcharge/Penalty</th>
               <th id="surcharges" style="font-size: 1em;" class="right-text"></th>
            </tr>

            <tr>
               <th>Total Amount Due</th>
               <th id="total-amount-due" style="font-size: 1.9em;" class="right-text"></th>
            </tr>
         </table>
      </div>

      <div class="col-md-12" style="margin-bottom: 5px; margin-top: 5px;">
         <div class="divider"></div>
         <p class="center-text" style="color: #565656;"><i>Assist | BOHECO I @ {{ date('Y') }}</i></p>
      </div>
   </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
           integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
           crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"
           integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg=="
           crossorigin="anonymous"></script>

<script>
   getBillDetails(`{{ $accountNo }}`, `{{ $billingMonth }}`)

   function getBillDetails(acctNo, period) {
         $.ajax({
            url : "{{ env('APP_PUBLIC_URL') }}get-bill-details",
            type : "GET",
            data : {
               acctNo : acctNo,
               period : period,
            },
            success : function(res) {
               $('#prev-reading').text(' : ' + res['PowerPreviousReading'])
               $('#date-from').text(' : ' + moment(res['ServiceDateFrom']).format('MMM d, YYYY'))
               $('#consumer-name').text(' : ' + res['ConsumerName'])
               $('#pres-reading').text(' : ' + res['PowerPresentReading'])
               $('#date-to').text(' : ' + moment(res['ServiceDateTo']).format('MMM d, YYYY'))
               $('#consumer-address').text(' : ' + res['ConsumerAddress'])
               $('#coreloss').text(' : ' + res['CoreLoss'])
               $('#due-date').text(' : ' + moment(res['DueDate']).format('MMM d, YYYY'))
               $('#route').text(' : ' + res['Route'])
               $('#demand').text(' : -')
               $('#meter-number').text(' : ' + res['MeterNumber'])
               $('#multiplier').text(' : ' + res['Multiplier'])
               $('#bill-number').text(' : ' + res['BillNumber'])
               $('#consumer-type').text(' : ' + res['ConsumerType'])
               $('#kwh-used').text(' : ' + res['PowerKWH'])

               /**
                *  GENERATION
                */
               $('#generation-rate').text(res['GenerationSystemCharge'])
               $('#generation-charge').text(res['GenerationSystemAmt'])
               $('#transmission-system-rate').text(res['TransmissionSystemCharge'])
               $('#transmission-system-charge').text(res['TransmissionSystemAmt'])
               $('#transmission-demandd-rate').text('-')
               $('#transmission-demandd-charge').text('-')
               $('#system-loss-rate').text(res['SystemLossCharge'])
               $('#system-loss-charge').text(res['SystemLossAmt'])

               $('#distribution-system-rate').text(res['DistributionSystemCharge'])
               $('#distribution-system-charge').text(res['DistributionSystemAmt'])
               $('#distribution-demand-rate').text(res['DistributionDemandCharge'])
               $('#distribution-demand-charge').text(res['DistributionDemandAmt'])
               $('#metering-system-rate').text(res['MeteringSystemCharge'])
               $('#metering-system-charge').text(res['MeteringSystemAmt'])
               $('#metering-retail-rate').text(res['MeteringRetailCustomerCharge'])
               $('#metering-retail-charge').text(res['MeteringRetailCustomerAmt'])
               $('#supply-system-rate').text(res['RetailElectricServiceRate'])
               $('#supply-system-charge').text(res['RetailElectricServiceAmount'])
               $('#supply-retail-rate').text(res['RetailElectricServiceRateKW'])
               $('#supply-retail-charge').text(res['RetailElectricServiceAmountKW'])
               
               $('#missionary-electrification-rate').text(res['MissionaryElectrificationCharge'])
               $('#missionary-electrification-charge').text(res['MissionaryElectrificationAmt'])
               $('#npc-stranded-debt-rate').text(res['NPCStrandedDebtsRate'])
               $('#npc-stranded-debt-charge').text(res['NPCStraindedDebtsAmount'])
               $('#npc-stranded-cost-rate').text(res['NPCStrandedCostRate'])
               $('#npc-stranded-cost-charge').text(res['NPCStrandedCostAmount'])
               $('#environmental-rate').text(res['EnvironmentalCharge'])
               $('#environmental-charge').text(res['EnvironmentalAmt'])
               $('#tafppca-rate').text(res['ACRM_TAFPPCACharge'])
               $('#tafppca-charge').text(res['ACRM_TAFPPCA'])
               $('#tafxa-rate').text(res['ACRM_TAFxACharge'])
               $('#tafxa-charge').text(res['ACRM_TAFxA'])
               $('#daa-gram-rate').text(res['DAA_GRAMCharge'])
               $('#daa-gram-charge').text(res['DAA_GRAM'])
               $('#daa-icera-rate').text(res['DAA_ICERACharge'])
               $('#daa-icera-charge').text(res['DAA_ICERA'])
               
               $('#franchise-tax-rate').text(res['FranchiseTaxRate'])
               $('#franchise-tax-charge').text(res['FranchiseTaxAmount'])
               $('#business-tax-rate').text(res['BusinessTaxRate'])
               $('#business-tax-charge').text(res['Item16'])
               $('#real-property-tax-rate').text(res['RealPropertyTaxRate'])
               $('#real-property-tax-charge').text(res['Item17'])

               $('#lifeline-rate').text(res['LifelineSubsidyCharge'])
               $('#lifeline-charge').text(res['LifelineSubsidyAmt'])
               $('#lifeline-ou-rate').text(res['OtherLifelineRate'])
               $('#lifeline-ou-charge').text(res['Item21'])
               $('#rfsc-rate').text(res['RFSCRate'])
               $('#rfsc-charge').text(res['Item10'])
               $('#fit-all-rate').text(res['FitAllRate'])
               $('#fit-all-charge').text(res['FitAllAmount'])
               $('#sc-rate').text(res['SeniorCitizenSubsidyCharge'])
               $('#sc-charge').text(res['SeniorCitizenSubsidy'])
               $('#sc-ou-rate').text(res['OtherSeniorAdjRate'])
               $('#sc-ou-charge').text(res['Item22'])
               $('#other-charges-charge').text(res['OtherChargesAmount'])
               
               $('#generation-vat-rate').text(res['GenerationVatRate'])
               $('#generation-vat-charge').text(res['GenerationVAT'])
               $('#transmission-vat-rate').text(res['TransmissionVatRate'])
               $('#transmission-vat-charge').text(res['TransmissionVAT'])
               $('#system-loss-vat-rate').text(res['SystemLossVatRate'])
               $('#system-loss-vat-charge').text(res['SLVAT'])
               $('#distribution-vat-rate').text(res['DistributionVatRate'])
               $('#distribution-vat-charge').text(res['DistributionVAT'])
               $('#others-vat-rate').text(res['OthersVatRate'])
               $('#others-vat-charge').text(res['OthersVAT'])
               $('#daa-vat-rate').text(res['DaaVatRate'])
               $('#daa-vat-charge').text(res['DaaVatAmount'])
               $('#acrm-vat-rate').text(res['AcrmVatRate'])
               $('#acrm-vat-charge').text(res['AcrmVatAmount'])
               
               $('#transformer-rental').text(res['TransformerRental'])

               var amountDue = parseFloat(res['NetAmount'])
               var surcharges = jQuery.isEmptyObject(res['NetAmountPaid']) ? parseFloat(res['Surcharges']) : 0
               var totalAmountDue = amountDue + surcharges

               $('#current-amount-due').text('₱ ' + Number(amountDue).toLocaleString(2))
               $('#surcharges').text('₱ ' + Number(surcharges).toLocaleString(2))
               $('#total-amount-due').text('₱ ' + Number(totalAmountDue).toLocaleString(2))
               $('#number-of-months').text(res['ArrearsCount'])
               $('#total-arrears').text('₱ ' + Number(parseFloat(res['ArrearsAmount'])).toLocaleString(2))

               window.print();

               window.setTimeout(function(){
                  window.history.go(-1)
               }, 1000); 
            },
            error : function(err) {
               alert('Error getting bill details')
            }
         })
      }
</script>