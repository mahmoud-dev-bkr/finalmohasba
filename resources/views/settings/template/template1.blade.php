<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            text-align: center;
            color: #555;
            background-color: #FAFAFA;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.15); */
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
            border-radius: 8px !important;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            border-collapse: collapse;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            /* font-size: 45px; */
            /* line-height: 45px; */
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #F7F7F7;
            /* border-bottom: 1px solid #ddd; */
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            /* border-top: 2px solid #eee; */
            font-weight: bold;
        }

        .invoice-box img {
            max-width: 100px;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top invoice-box ">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <!-- <img src="logo.png" style="width:100%; max-width:300px;"> -->
                                <h1>
                                    Logo settings
                                </h1>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td class="title">
                                <div style="margin-left: 20px; display: flex;margin-bottom: -19px;">
                                    <div style="padding-top: 20px; margin-right: 6px;">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.2 0C5.29044 0 3.45909 0.758569 2.10883 2.10883C0.758569 3.45909 0 5.29044 0 7.2C0 9.10956 0.758569 10.9409 2.10883 12.2912C3.45909 13.6414 5.29044 14.4 7.2 14.4C9.10956 14.4 10.9409 13.6414 12.2912 12.2912C13.6414 10.9409 14.4 9.10956 14.4 7.2C14.4 5.29044 13.6414 3.45909 12.2912 2.10883C10.9409 0.758569 9.10956 0 7.2 0ZM0.888 7.744H2.896C2.928 8.472 3.0296 9.1952 3.2 9.904H1.472C1.15041 9.22447 0.952647 8.493 0.888 7.744ZM7.744 3.424V0.952C8.51495 1.24498 9.14844 1.8157 9.52 2.552C9.68427 2.82987 9.82827 3.11787 9.952 3.416L7.744 3.424ZM10.32 4.504C10.5056 5.2104 10.616 5.9344 10.648 6.664H7.744V4.504H10.32ZM6.656 0.952V3.424H4.448C4.57134 3.12612 4.7157 2.8374 4.88 2.56C5.24998 1.82068 5.88367 1.24693 6.656 0.952ZM6.656 4.504V6.664H3.76C3.792 5.9344 3.9024 5.2104 4.088 4.504H6.656ZM2.896 6.656H0.888C0.952647 5.907 1.15041 5.17554 1.472 4.496H3.2C3.02863 5.20439 2.92681 5.92782 2.896 6.656ZM3.76 7.744H6.656V9.904H4.088C3.90313 9.19751 3.79319 8.47352 3.76 7.744ZM6.664 10.944V13.416C5.89305 13.123 5.25956 12.5523 4.888 11.816C4.7237 11.5386 4.57934 11.2499 4.456 10.952L6.664 10.944ZM7.744 13.416V10.984H9.952C9.82866 11.2819 9.6843 11.5706 9.52 11.848C9.14844 12.5843 8.51495 13.155 7.744 13.448V13.416ZM7.744 9.864V7.704H10.64C10.6068 8.43352 10.4969 9.15751 10.312 9.864H7.744ZM11.512 7.704H13.52C13.4554 8.453 13.2576 9.18447 12.936 9.864H11.2C11.368 9.168 11.4696 8.4584 11.504 7.744L11.512 7.704ZM11.512 6.624C11.476 5.90899 11.3715 5.19907 11.2 4.504H12.928C13.2504 5.184 13.448 5.9152 13.512 6.664L11.512 6.624ZM12.312 3.424H10.88C10.6212 2.69612 10.2456 2.01522 9.768 1.408C10.7635 1.85486 11.6282 2.54884 12.28 3.424H12.312ZM4.632 1.408C4.15442 2.01522 3.77884 2.69612 3.52 3.424H2.12C2.77178 2.54884 3.6365 1.85486 4.632 1.408ZM2.112 11.008H3.52C3.77884 11.7359 4.15442 12.4168 4.632 13.024C3.63374 12.5704 2.76876 11.868 2.12 10.984L2.112 11.008ZM9.76 13.024C10.2376 12.4168 10.6132 11.7359 10.872 11.008H12.28C11.6242 11.8714 10.7599 12.5541 9.768 12.992L9.76 13.024Z"
                                                fill="#5E6470" />
                                        </svg>
                                    </div>
                                    <p> www.website.com </p>
                                </div>
                                <div style="margin-left: 20px; display: flex;margin-bottom: -19px;">
                                    <div style="padding-top: 20px; margin-right: 6px;">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.66602 6L7.99935 8.33333L11.3327 6" stroke="#5E6470"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M1.33301 11.333V4.66634C1.33301 4.31272 1.47348 3.97358 1.72353 3.72353C1.97358 3.47348 2.31272 3.33301 2.66634 3.33301H13.333C13.6866 3.33301 14.0258 3.47348 14.2758 3.72353C14.5259 3.97358 14.6663 4.31272 14.6663 4.66634V11.333C14.6663 11.6866 14.5259 12.0258 14.2758 12.2758C14.0258 12.5259 13.6866 12.6663 13.333 12.6663H2.66634C2.31272 12.6663 1.97358 12.5259 1.72353 12.2758C1.47348 12.0258 1.33301 11.6866 1.33301 11.333Z"
                                                stroke="#5E6470" />
                                        </svg>
                                    </div>
                                    <p> hello@email.com </p>
                                </div>
                                <div style="margin-left: 20px; display: flex;margin-bottom: -19px;">
                                    <div style="padding-top: 20px; margin-right: 6px;">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.0043 5.30699C12.5289 7.16207 11.5636 8.85527 10.2094 10.2094C8.85527 11.5636 7.16207 12.5289 5.30699 13.0043C3.87966 13.3677 2.66699 12.1403 2.66699 10.667V10.0003C2.66699 9.63233 2.96633 9.33699 3.33233 9.30033C3.93934 9.24049 4.53519 9.09714 5.10299 8.87433L6.11633 9.88766C7.76627 9.09676 9.09676 7.76627 9.88766 6.11633L8.87433 5.10299C9.09737 4.53522 9.24095 3.93937 9.30099 3.33233C9.33699 2.96566 9.63233 2.66699 10.0003 2.66699H10.667C12.1403 2.66699 13.3677 3.87966 13.0043 5.30699Z"
                                                stroke="#5E6470" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p> +91 00000 00000 </p>
                                </div>
                            </td>
                            <td>
                                <p
                                    style="font-weight: 400; font-size: 14px; line-height: 16.94px; margin-right: 20px; margin-top: 20px;">
                                    Invoice Number: <span
                                        style="font-weight: 800; font-size: 14px; line-height: 16.94px;"> #12345678
                                    </span>
                                </p>
                                <p style="margin-right: 20px">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1150_15891)">
                                            <path
                                                d="M4.5384 0C4.68692 0 4.82936 0.0589998 4.93438 0.16402C5.0394 0.269041 5.0984 0.411479 5.0984 0.56V1.6072H11.112V0.5672C11.112 0.418679 11.171 0.276241 11.276 0.17122C11.381 0.0661998 11.5235 0.0072 11.672 0.0072C11.8205 0.0072 11.963 0.0661998 12.068 0.17122C12.173 0.276241 12.232 0.418679 12.232 0.5672V1.6072H14.4C14.8242 1.6072 15.2311 1.77566 15.5311 2.07555C15.8311 2.37543 15.9998 2.78219 16 3.2064V14.4008C15.9998 14.825 15.8311 15.2318 15.5311 15.5317C15.2311 15.8315 14.8242 16 14.4 16H1.6C1.17579 16 0.768947 15.8315 0.468912 15.5317C0.168877 15.2318 0.000212104 14.825 0 14.4008L0 3.2064C0.000212104 2.78219 0.168877 2.37543 0.468912 2.07555C0.768947 1.77566 1.17579 1.6072 1.6 1.6072H3.9784V0.5592C3.97861 0.410817 4.03771 0.268585 4.1427 0.163737C4.2477 0.0588899 4.39002 -1.51411e-07 4.5384 0ZM1.12 6.1936V14.4008C1.12 14.4638 1.13242 14.5263 1.15654 14.5845C1.18066 14.6427 1.21602 14.6956 1.26059 14.7402C1.30516 14.7848 1.35808 14.8201 1.41631 14.8443C1.47455 14.8684 1.53697 14.8808 1.6 14.8808H14.4C14.463 14.8808 14.5255 14.8684 14.5837 14.8443C14.6419 14.8201 14.6948 14.7848 14.7394 14.7402C14.784 14.6956 14.8193 14.6427 14.8435 14.5845C14.8676 14.5263 14.88 14.4638 14.88 14.4008V6.2048L1.12 6.1936ZM5.3336 11.6952V13.028H4V11.6952H5.3336ZM8.6664 11.6952V13.028H7.3336V11.6952H8.6664ZM12 11.6952V13.028H10.6664V11.6952H12ZM5.3336 8.5136V9.8464H4V8.5136H5.3336ZM8.6664 8.5136V9.8464H7.3336V8.5136H8.6664ZM12 8.5136V9.8464H10.6664V8.5136H12ZM3.9784 2.7264H1.6C1.53697 2.7264 1.47455 2.73882 1.41631 2.76294C1.35808 2.78706 1.30516 2.82242 1.26059 2.86699C1.21602 2.91156 1.18066 2.96448 1.15654 3.02271C1.13242 3.08095 1.12 3.14337 1.12 3.2064V5.0744L14.88 5.0856V3.2064C14.88 3.14337 14.8676 3.08095 14.8435 3.02271C14.8193 2.96448 14.784 2.91156 14.7394 2.86699C14.6948 2.82242 14.6419 2.78706 14.5837 2.76294C14.5255 2.73882 14.463 2.7264 14.4 2.7264H12.232V3.4696C12.232 3.61812 12.173 3.76056 12.068 3.86558C11.963 3.9706 11.8205 4.0296 11.672 4.0296C11.5235 4.0296 11.381 3.9706 11.276 3.86558C11.171 3.76056 11.112 3.61812 11.112 3.4696V2.7264H5.0984V3.4624C5.0984 3.61092 5.0394 3.75336 4.93438 3.85838C4.82936 3.9634 4.68692 4.0224 4.5384 4.0224C4.38988 4.0224 4.24744 3.9634 4.14242 3.85838C4.0374 3.75336 3.9784 3.61092 3.9784 3.4624V2.7264Z"
                                                fill="#5E6470" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1150_15891">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span> Wed, May 27, 2024 </span>
                                    <span> . 9:27:53 AM </span>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div class="invoice-box" style="margin-top: 10px!important;">
            <table>
                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    <div
                                        style="margin-left: 20px; display: flex;margin-bottom: -19px;justify-content: space-between;">
                                        <div style="margin-right: 6px;">
                                            <p style="color: #5E6470;"> Billed to </p>
                                        </div>
                                        <p> Ahmed Atif </p>
                                    </div>
                                    <div
                                        style="margin-left: 20px; display: flex;margin-bottom: -19px;justify-content: space-between;">
                                        <div style="margin-right: 6px;">
                                            <p style="color: #5E6470;"> Company Name </p>
                                        </div>
                                        <p> Tarseya Company </p>
                                    </div>
                                    <div
                                        style="margin-left: 20px; display: flex;margin-bottom: -19px;justify-content: space-between;">
                                        <div style="margin-right: 6px;">
                                            <p style="color: #5E6470;"> Company Address </p>
                                        </div>
                                        <p> Egypt, Cairo </p>
                                    </div>
                                    <div
                                        style="margin-left: 20px; display: flex;margin-bottom: -19px;justify-content: space-between;">
                                        <div style="margin-right: 6px;">
                                            <p style="color: #5E6470;"> Company Phone </p>
                                        </div>
                                        <p> +966 12345678 </p>
                                    </div>
                                </td>
                                <td>
                                    <div style="margin-top: 20px; margin-right: 20px;"> Invoice of (USD)<br>
                                        <span style="font-size: 20px!important;font-weight: 800;"> $4,950.00 </span>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table>
                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr style="background-color: #F7F7F7;">
                                <td style="padding: 15px;"> Item Details </td>
                                <td style="padding: 15px;"> QTY </td>
                                <td style="padding: 15px;"> RATE </td>
                                <td style="padding: 15px;"> Amount </td>
                            </tr>
                            <tr style="border-bottom: 2px solid #D7DAE0; ">
                                <td style="padding: 15px;"> Item Details </td>
                                <td style="padding: 15px;"> 1 </td>
                                <td style="padding: 15px;"> $3,000.00 </td>
                                <td style="padding: 15px;"> $3,000.00 </td>
                            </tr>
                            <tr style="border-bottom: 2px solid #D7DAE0; ">
                                <td style="padding: 15px;"> Item Details </td>
                                <td style="padding: 15px;"> 1 </td>
                                <td style="padding: 15px;"> $3,000.00 </td>
                                <td style="padding: 15px;"> $3,000.00 </td>
                            </tr>
                            <tr style="border-bottom: 2px solid #D7DAE0; ">
                                <td style="padding: 15px;"> Item Details </td>
                                <td style="padding: 15px;"> 1 </td>
                                <td style="padding: 15px;"> $3,000.00 </td>
                                <td style="padding: 15px;"> $3,000.00 </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="total">
                    <td>
                        <br>
                        <p>Thanks for the business.</p>
                    </td>
                    <td style="background-color: #F7F7F7;"> Subtotal: $4,500.00<br> Tax (10%): $450.00<br> Total:
                        $4,950.00 </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
