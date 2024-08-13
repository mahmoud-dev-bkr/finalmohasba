
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap"
      rel="stylesheet"
    />
    <title>استيراد</title>

    <style type="text/css">
      body {
        background-color: #fff;
        font-family: "Cairo", sans-serif !important;
      }
      .row:before,
      .row:after {
        display: table;
        content: " ";
      }
      .row:after {
        clear: both;
      }
      .col {
        float: left;
        position: relative;
        min-height: 1px;
      }
      .ar .col {
        float: right;
      }
      .col-xs-4 {
        width: 33.33333333%;
      }
      .col-xs-6 {
        width: 50%;
      }
      .col-xs-8 {
        width: 66.66666667%;
      }
      .col-xs-12 {
        width: 100%;
      }
      .pl0 {
        padding-left: 0;
      }
      .pl10 {
        padding-left: 0.625em;
      }
      .pr15 {
        padding-left: 0.938em;
      }
      .pl20 {
        padding-left: 1.25em;
      }
      .pl30 {
        padding-left: 1.875em;
      }
      .pl40 {
        padding-left: 2.5em;
      }
      .pl50 {
        padding-left: 3.125em;
      }
      .pl60 {
        padding-left: 3.75em;
      }
      .pl70 {
        padding-left: 4.375em;
      }
      .pl80 {
        padding-left: 5em;
      }
      .pl90 {
        padding-left: 5.625em;
      }
      .pl100 {
        padding-left: 6.25em;
      }
      .pr0 {
        padding-right: 0;
      }
      .pr10 {
        padding-right: 0.625em;
      }
      .pr20 {
        padding-right: 1.25em;
      }
      .pr30 {
        padding-right: 1.875em;
      }
      .pr40 {
        padding-right: 2.5em;
      }
      .pr50 {
        padding-right: 3.125em;
      }
      .pr55 {
        padding-right: 3.438em;
      }
      .pr60 {
        padding-right: 3.75em;
      }
      .pr70 {
        padding-right: 4.375em;
      }
      .pr80 {
        padding-right: 5em;
      }
      .pr90 {
        padding-right: 5.625em;
      }
      .pr100 {
        padding-right: 6.25em;
      }
      .mb0 {
        margin-bottom: 0;
      }
      .mb5 {
        margin-bottom: 0.313em;
      }
      .mb10 {
        margin-bottom: 0.625em;
      }
      .mb15 {
        margin-bottom: 0.938em;
      }
      .mb20 {
        margin-bottom: 1.25em;
      }
      .mb30 {
        margin-bottom: 1.875em;
      }
      .mb40 {
        margin-bottom: 2.5em;
      }
      .mb50 {
        margin-bottom: 3.125em;
      }
      .mb60 {
        margin-bottom: 3.75em;
      }
      .mb70 {
        margin-bottom: 4.375em;
      }
      .mb80 {
        margin-bottom: 5em;
      }
      .mb90 {
        margin-bottom: 5.625em;
      }
      .mb100 {
        margin-bottom: 6.25em;
      }
      .mb160 {
        margin-bottom: 10em;
      }
      .text-align-locale {
        text-align: left !important;
      }
      .ar .text-align-locale {
        text-align: right !important;
      }
      .description-pre-line {
        white-space: pre-line;
      }
      thead {
        display: table-header-group;
      }
      tfoot {
        display: table-row-group;
      }
      tr {
        page-break-inside: avoid;
      }

      .ar.content {
        direction: rtl;
      }
      .pdf-header {
        border-bottom: 1px solid #ddd;
        padding-bottom: 6px;
      }
      .pdf-footer {
        padding-top: 1px;
        padding-bottom: 0;
        font-size: 8px;
      }
      .header-logo img {
        margin-top: 10px;
        max-height: 100px;
        width: auto;
      }
      .header-logo-container {
        text-align: left;
      }
      .ar .header-logo-container {
        text-align: right;
      }
      .del-note-header-logo-container {
        text-align: right;
        padding-right: 0;
      }
      .ar .del-note-header-logo-container {
        text-align: left;
        padding-left: 0;
      }
      .header-info-container {
        text-align: right;
        line-height: 1em;
      }
      .ar .header-info-container {
        text-align: left;
      }
      .del-note-header-info-container {
        text-align: left;
        line-height: 1em;
      }
      .ar .del-note-header-info-container {
        text-align: right;
      }
      .header-info-container h4,
      .del-note-header-info-container h4 {
        margin-top: 0px;
      }
      .header-org-info {
        font-size: 9pt;
      }
      .invoice-title {
        text-transform: uppercase;
        font-size: 28px;
        font-weight: 500;
        margin-bottom: 0px;
        margin-top: 0px;
        line-height: 1.1em;
      }
      .pdf-brief {
        margin-top: 10px;
      }
      .brief-field-title {
        color: #8c979d;
        font-weight: bold;
        line-height: 1em;
      }
      .brief-invoice-container {
        text-align: right;
      }
      .ar .brief-invoice-container {
        text-align: left;
      }
      .document-info-field-title {
        text-align: right;
        width: 50%;
      }
      .document-info-field-value {
        text-align: left;
        width: 40%;
      }
      .ar .document-info-field-title {
        text-align: left;
        width: 50%;
      }
      .ar .document-info-field-value {
        text-align: right;
        width: 40%;
      }
      .document-info-wrapper {
        float: right;
        font-size: 8pt;
      }
      .ar .document-info-wrapper {
        float: left;
      }
      .document-amount-container {
        background-color: #ddd;
        vertical-align: middle;
      }
      .document-amount-container td {
        padding-top: 4px;
        padding-bottom: 4px;
      }
      .pdf-data {
        margin-top: 10px;
      }
      .data-table {
        font-size: 9pt;
        line-height: 1.1em;
      }
      .item-list-col-hash {
        width: 3% !important;
        text-align: left;
        font-weight: bold;
      }
      .item-list-col-prod {
        width: 60% !important;
        text-align: left !important;
      }
      .td-both-lang-alignment {
        text-align: left !important;
      }
      .item-list-col-unit {
        width: 10% !important;
      }
      .item-list-col-dis {
        width: 8% !important;
      }
      .item-list-col-vat {
        width: 3% !important;
      }
      .item-list-col-hash-detail {
        text-align: left;
        font-weight: bold;
        vertical-align: top;
      }
      .ar .item-list-col-hash {
        text-align: right;
      }
      .ar .item-list-col-prod {
        text-align: right;
      }
      .ar .item-list-col-hash-detail {
        text-align: right;
      }
      .sub-totals-details {
        text-align: right;
      }
      .ar .sub-totals-details {
        text-align: left;
      }
      .sub-totals-details table {
        float: right;
      }
      .ar .sub-totals-details table {
        float: left;
      }
      .row.sub-totals {
        margin-top: 20px;
      }
      .sub-totals-details {
        font-size: 10pt;
        font-weight: bold;
      }
      .sub-total-entry {
        margin-top: 5px;
        font-size: 10pt;
      }
      .sub-total-entry-title {
        padding-right: 15px;
      }
      .sub-total-entry-title {
        padding-right: 15px;
      }
      .ar .sub-total-entry-title {
        padding-left: 15px;
        padding-right: 0px;
      }
      .sub-total-entry-value {
        text-align: left;
      }
      .ar .sub-total-entry-value {
        text-align: right;
      }
      .sub-amount-due .sub-total-entry-title,
      .sub-amount-due .sub-total-entry-value {
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        padding-top: 8px;
        padding-bottom: 8px;
      }
      .description {
        font-size: smaller;
      }
      .unit-name {
        font-size: smaller;
      }
      .row.additional-info {
        margin-top: 20px;
      }
      .additional-info-entry {
        margin-top: 10px;
        display: block;
        page-break-inside: avoid;
      }
      .additional-info-entry h5 {
        color: #797878;
        font-weight: 500;
        border-bottom: 1px solid #e8f0f2;
      }
      .table-striped tbody .accounts:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
      }
      .table-striped tbody .accounts:nth-of-type(even) {
        background-color: #dcdcdc;
      }
      .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
        border-collapse: collapse;
        text-align: center;
      }
      #no-more-tables table tbody tr {
        border-bottom: 0.5px solid #d7dadf;
      }
      .table thead th,
      tr.reports-total td,
      tr.reports-total th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
        padding: 0.75rem;
        background-color: transparent;
      }
      .table-compact thead th {
        padding: 0.2rem;
      }
      .table td,
      .table th {
        padding: 0.3rem;
        vertical-align: top;
      }
      .ar tbody th.account-name,
      .ar tbody td.account-name {
        text-align: right;
      }
      tr.reports-total {
        background-color: transparent !important;
      }
      .dates-columns thead th {
        direction: ltr;
      }
      table.table-sm-font tbody td {
        font-size: 8pt;
      }
      table.table-sm-font tbody th {
        font-size: 8pt;
      }
      .table-xlarge thead th,
      .table-xlarge tr.reports-total td,
      .table-xlarge tr.reports-total th {
        padding-left: 0.2rem;
        padding-right: 0.2rem;
        font-size: 0.7rem;
      }
      .table-ver-lines td,
      .table-ver-lines th {
        border-left: 1px solid #dee2e6;
      }
      .table-bordered td,
      .table-bordered th {
        border: 1px solid #dee2e6;
      }
      .account-type-total td {
        padding: 0.2rem;
      }
      .account-type-total th {
        padding-right: 20px;
        font-weight: 400;
      }
      .main-account td {
        font-size: larger;
      }
      .main-account th {
        font-size: larger;
      }
      .main-account-total td {
        font-weight: bold;
      }
      .main-account-total th {
        font-size: larger;
      }
      .income-statement .table thead th,
      .income-statement tr.reports-total td,
      .income-statement tr.reports-total th {
        vertical-align: bottom;
        border-bottom: 1px solid #000000;
        border-top: 1px solid #000000;
        padding: 5px;
        background-color: transparent;
      }
      tr.accounts td {
        padding: 0.2rem;
      }
      tr.accounts th {
        padding-right: 40px;
        font-weight: 400;
      }
      tr.pdf_td td {
        font-size: 11pt !important;
      }
      tr.pdf_tr_th th {
        font-size: 11pt !important;
      }
      .spacer-row {
        height: 21px;
      }
      .created-by {
        color: #656c6c;
        font-size: xx-small;
        text-align: right;
        vertical-align: bottom;
        padding-bottom: 0px;
        font-weight: normal;
      }
      .journal thead tr {
        border-top: 1px solid #dee2e6;
        border-bottom: 1px solid #dee2e6;
      }
      .journal tbody tr {
        font-size: 8pt;
      }
      .journal .reports-total {
        border-top: 1px solid #dee2e6;
      }
      .double-line-row td,
      .double-line-row th {
        border-top: 1px solid #000000;
        border-bottom: 1px solid #000000;
      }
      .bold-row td,
      .bold-row th {
        font-weight: bold;
      }
      .white-row td,
      .white-row th {
        background: white;
      }
      .small-font-title {
        font-size: 9pt;
      }
      .xsmall-font-title {
        font-size: 7pt;
      }
      .small-font-title th {
        padding: 3px;
      }
      .center-align-row td {
        text-align: center;
        vertical-align: middle;
      }
      .pdf-data.reports .padleftindex-2 {
        padding-left: 40px;
      }
      .arabic .pdf-data.reports .padleftindex-2 {
        padding-right: 40px;
        padding-left: unset;
      }
      .pdf-data.reports .padleftindex-3 {
        padding-left: 70px;
      }
      .arabic .pdf-data.reports .padleftindex-3 {
        padding-right: 70px;
        padding-left: unset;
      }
      .pdf-data.reports .padleftindex-4 {
        padding-left: 100px;
      }
      .arabic .pdf-data.reports .padleftindex-4 {
        padding-right: 100px;
        padding-left: unset;
      }
      .pdf-data.reports .padleftindex-5 {
        padding-left: 130px;
      }
      .arabic .pdf-data.reports .padleftindex-5 {
        padding-right: 130px;
        padding-left: unset;
      }
      .pdf-data.reports .padleftindex-6 {
        padding-left: 160px;
      }
      .arabic .pdf-data.reports .padleftindex-6 {
        padding-right: 160px;
        padding-left: unset;
      }
      .pdf-data.reports .padleftindex-7 {
        padding-left: 190px;
      }
      .arabic .pdf-data.reports .padleftindex-7 {
        padding-right: 190px;
        padding-left: unset;
      }
      .pdf-data.reports .padleftindex-8 {
        padding-left: 220px;
      }
      .arabic .pdf-data.reports .padleftindex-8 {
        padding-right: 220px;
        padding-left: unset;
      }
      .spacer-row {
        height: 21px;
      }
      table tbody tr.reports-total-balance td {
        position: relative;
        color: #394659;
        font-weight: 600;
        border-top: 1px solid #394659;
      }
      .pdf-data.reports table tbody tr.reports-total-balance td:first-child,
      .pdf-data.reports table tbody tr.reports-net-balance td:first-child {
        padding-left: 35px !important;
      }
      .pdf-data.reports table tbody tr.reports-net-balance {
        border-bottom: 3px solid #394659;
        border-bottom-style: double;
        border-top: 2px solid #394659;
      }
      .pdf-data.reports table tbody tr.reports-net-balance td {
        position: relative;
        color: #394659;
        font-weight: 600;
      }
      .arabic
        .pdf-data.reports
        table
        tbody
        tr.reports-total-balance
        td:first-child,
      .arabic
        .pdf-data.reports
        table
        tbody
        tr.reports-net-balance
        td:first-child {
        padding-left: 35px !important;
      }
      .arabic .pdf-data.reports table tbody tr.reports-net-balance {
        border-bottom: 3px solid #394659;
        border-bottom-style: double;
        border-top: 2px solid #394659;
      }
      .arabic .pdf-data.reports table tbody tr.reports-net-balance td {
        position: relative;
        color: #394659;
        font-weight: 600;
      }
      table tbody tr.reports-main-balance {
        position: relative;
        color: #394659;
        font-weight: 600;
        border-top: 2px solid #394659;
        border-bottom: 2px solid #394659;
      }
      table.table.reports tbody td:nth-child(1) {
        text-align: left;
      }
      .arabic table.table.reports tbody td:nth-child(1) {
        text-align: right;
      }
      .journal-report-align-cols {
        width: 35%;
      }
      .journal > thead > tr > th {
        text-align: center;
      }
      .journal > tbody > .reports-total > th {
        text-align: center;
      }
      .no-break {
        word-break: normal !important;
      }
      .mb-4 {
        margin-bottom: 4px;
      }
      .col-md-6 {
        width: 50%;
      }
      .d-flex {
        display: flex;
      }
      .mt-5 {
        margin-top: 5%;
      }
      .mt-3 {
        margin-top: 3%;
      }
      .mt-2 {
        margin-top: 2%;
      }
      .del-note-items td,
      .del-note-items th {
        padding-bottom: 5px;
      }
      .pdf-data.reports table tbody tr td.report-table-head {
        background-color: inherit;
        color: #394659;
        font-size: 16px;
        font-weight: 600;
      }
      .arabic .pdf-data.reports table tbody tr td.report-table-head {
        background-color: inherit;
        color: #394659;
        font-size: 16px;
        font-weight: 600;
      }
      .reports-header {
        margin-bottom: 5%;
      }
      .arabic .pdf-data.reports table tbody tr td.report-table-head {
        background-color: inherit;
        color: #394659;
        font-size: 16px;
        font-weight: 600;
      }
      .brief-field-value {
        overflow-wrap: break-word;
        word-wrap: break-word;
      }
      .item-list-col-hash-detail {
        overflow-wrap: break-word;
        word-wrap: break-word;
      }
      .qr-code {
        float: right;
      }
      .ar .qr-code {
        float: left;
      }
      .font-18 {
        font-size: 18px;
      }
      .resource-info-field-title {
        text-align: left;
        width: auto;
        font-size: 16px;
        font-weight: bold;
      }
      .resource-info-field-value {
        text-align: left;
        width: auto;
        font-weight: normal;
        font-size: 16px;
      }
      .ar .resource-info-field-title {
        text-align: right;
        width: auto;
        font-size: 16px;
        font-weight: bold;
      }
      .ar .resource-info-field-value {
        text-align: right;
        width: auto;
        font-weight: normal;
        font-size: 16px;
      }
      .asset-name-dep_ar {
        text-align: right;
        font-family: 600;
      }
      .asset-name-dep_en {
        text-align: left;
        font-family: 600;
      }
    </style>
    <style type="text/css">
      body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
      }
      * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
      }
      .page {
        width: 210mm;
        padding: 20mm;
        margin: 10mm auto;
        border: 1px #d3d3d3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      }
      .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 257mm;
        outline: 2cm #ffeaea solid;
      }
      @page {
        size: A4;
        margin: 0;
      }
      @media print {
        html,
        body {
          width: 210mm !important;
        }
        .page {
          margin: 0;
          border: initial;
          border-radius: initial;
          width: initial !important;
          min-height: initial;
          box-shadow: initial;
          background: initial;
          page-break-after: always;
        }
      }
    </style>
    <style>
      body {
        font-size: 15px;
        background-color: #fff;
      }
      .page {
        padding: 50px 37px;
      }
      * {
        color: black;
      }
      .sub-total-entry-title {
        text-align: left;
      }

      .ar .sub-total-entry-title {
        text-align: right;
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      p {
        margin: 0;
      }
    </style>
  </head>
  <body>
    <div class="page content ar">
      <div class="row pdf-header">
        <div class="col col-xs-12">
          <div class="row">
            <div class="col col-xs-6 header-logo-container"></div>
            <div class="col col-xs-6 header-info-container">
              <h2 class="invoice-title">اشعار دائن</h2>
              <h4>Invoice</h4>
              <div class="header-org-info">
                <div><strong>test mohsa</strong></div>
                <div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row pdf-brief">
        <div class="col col-xs-8">
          <div class="brief-contact-item">
            <div class="brief-field-title ar_content">تفاصيل بيانات العميل</div>
            <div class="brief-field-value">{{ $Client->name }}</div>
          </div>
          <div class="brief-contact-item mb5">
            شراع, مدينة, السعودية, {{$Client->Tex_Number}}
          </div>
        </div>
        <div class="col col-xs-4 brief-invoice-container">
          <table cellpadding="0" class="document-info-wrapper">
            <tbody>
              <tr>
                <td class="document-info-field-title ar_content">
                  <strong>الحالة:&nbsp;&nbsp;</strong>
                </td>
                <td class="document-info-field-value ar_content">موافق عليها</td>
              </tr>
              <tr>
                <td class="document-info-field-title ar_content">
                  <strong>المرجع:&nbsp;&nbsp;</strong>
                </td>
                <td class="document-info-field-value">{{ $Sales_invoices->code }}</td>
              </tr>
              <tr>
                <td class="document-info-field-title ar_content">
                  <strong>تاريخ الإصدار:&nbsp;&nbsp;</strong>
                </td>
                <td class="document-info-field-value">{{ $Sales_invoices->Date_start }}</td>
              </tr>
              <tr>
                <td class="document-info-field-title ar_content">
                  <strong>تاريخ الاستحقاق:&nbsp;&nbsp;</strong>
                </td>
                <td class="document-info-field-value">{{ $Sales_invoices->Date_end }}</td>
              </tr>
              <tr class="document-amount-container">
                <td class="document-info-field-title ar_content">
                  <strong>المبلغ المستحق:&nbsp;&nbsp;</strong>
                </td>
                <td class="document-info-field-value">{{ $Sales_invoices->total }} ر.س</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row pdf-data">
        <div class="col-xs-12">
          <table
            cellpadding="1"
            cellspacing="5"
            width="100%"
            class="data-table"
          >
            <thead>
              <tr>
                <th class="item-list-col-hash">#</th>
                <th class="text-align-locale ar_content">
                  المنتج<br /><small class="">Products</small>
                </th>
                <th class="text-align-locale ar_content">
                  الكمية<br /><small class="">Qty</small>
                </th>
                <th class="text-align-locale item-list-col-unit ar_content">
                  سعر الوحدة<br /><small class="">Unit Price</small>
                </th>
                <th class="text-align-locale item-list-col-dis ar_content">
                  الخصم<br /><small dir="rtl" class="">Discount</small>
                </th>
                <th class="text-align-locale item-list-col-vat ar_content">
                  الاجمالي قبل الضريبة<br />
                  <small class=""> Total Before VAT </small>
                </th>
                <th class="text-align-locale item-list-col-vat ar_content">
                  الضريبة %<br />
                  <small class=""> VAT % </small>
                </th>
                <th class="text-align-locale item-list-col-vat ar_content">
                  الضريبة
                  <br />
                  <small class=""> VAT </small>
                </th>
                <th class="text-align-locale ar_content">
                  الاجمالي<br /><small class="">Amount</small>
                </th>
              </tr>
            </thead>
            <tbody>
                @php
                    $count = 0;
                @endphp
                @foreach ( $PurchaseInvoiceDetails as $PurchaseInvoiceDetail )
                @php 
                    $product = App\Product::where('id', $PurchaseInvoiceDetail->product_id)->first();
                @endphp
                  <tr>
                    <td class="item-list-col-hash-detail">{{ $count+= 1  }}</td>
                    <td>
                      <strong>{{ $product->name_en }}</strong><br />
                      <strong>{{ $product->serial_number }}</strong><br />
                      <span
                        ><div class="description description-pre-line">
                          test
                        </div></span
                      >
                    </td>
                    <td class="text-align-locale">
                      {{ $PurchaseInvoiceDetail->qun }} <span class="ar_content">ج</span>
                    </td>
                    <td class="text-align-locale">{{ $product->sel }} ر.س</td>
                    <td class="text-align-locale">0.0% <br />0.00 ر.س ر.س</td>
                    <td class="text-align-locale">{{ $PurchaseInvoiceDetail->price_before}} ر.س</td>
                    <td class="text-align-locale">{{ $PurchaseInvoiceDetail->tax }} </td>
                    <td class="text-align-locale">{{ $PurchaseInvoiceDetail->tax_value }} ر.س</td>
                    <td class="text-align-locale">{{ $PurchaseInvoiceDetail->price_after}} ر.س</td>
                  </tr>
                @endforeach 
            </tbody>
          </table>
        </div>
      </div>
      <div class="row sub-totals">
        <div class="col-xs-12">
          <div class="sub-totals-details">
            <table>
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr class="sub-total-entry">
                  <td class="sub-total-entry-title ar_content">
                    <strong>الاجمالي قبل الضريبة:</strong>
                  </td>
                  <td class="sub-total-entry-value">
                    <strong>{{ $Sales_invoices->total_with_tax }} ر.س</strong>
                  </td>
                </tr>
                <tr class="sub-total-entry">
                  <td class="sub-total-entry-title ar_content">
                    <strong>اجمالي الضريبة:</strong>
                  </td>
                  <td class="sub-total-entry-value">
                    <strong>{{ $Sales_invoices->tax_value }} ر.س</strong>
                  </td>
                </tr>
                <tr class="sub-total-entry">
                  <td class="sub-total-entry-title ar_content">
                    <strong>المجموع:</strong>
                  </td>
                  <td class="sub-total-entry-value">
                    <strong>{{ $Sales_invoices->old_balance }}  ر.س</strong>
                  </td>
                </tr>
                <tr class="sub-total-entry sub-amount-due">
                  <td class="sub-total-entry-title ar_content">
                    <strong>المبلغ المستحق:</strong>
                  </td>
                  <td class="sub-total-entry-value">
                    <strong>{{ $Sales_invoices->total }}  ر.س</strong>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row additional-info">
        <div class="col-xs-12"></div>
      </div>
    </div>
    <script>
      window.print();
    </script>
  </body>
</html>
