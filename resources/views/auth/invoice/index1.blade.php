<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <style type="text/css" media="all">
        body
        {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }
        .print_page_container
        {
            width: 100%;
            font-family: Arial, Helvetica, sans-serif;
            text-align: left;
        }
        .section
        {
            width: 100%;
            margin-bottom: 20px;
            padding: 0 0;
            font-size: 14px;
            border-collapse: collapse;
            border-spacing: 0;
            /*page-break-inside: avoid;*/
        }
        .leftbox, .rightbox
        {
            width: 48%;
            background-color: #dbe5f1;
        }
        .middlebox
        {
            width: 4%;
        }
        .customer_section, .contact_section
        {
            width: 100%;
            border: 0px solid #CCCCCC;
            border-collapse: collapse;
            border-spacing: 0;
            background-color: #dbe5f1
        }
        .print_heading, .ticket_heading, .mycompany_heading
        {
            text-align: left;
            font-weight: bold;
            font-size: 14;
            color: #FFFFFF;
            background-color: #366092;
            border-collapse: collapse;
            border-spacing: 0;
            border-bottom: 2px solid #366092;
            border-top: 2px solid #dbe5f1;
            border-left: 2px solid #dbe5f1;
            border-right: 2px solid #366092;
            padding: 3px 3px;
        }
        .customer_body
        {
            padding: 3px 3px;
            background-color: #dbe5f1;
        }
        .amountdue_section
        {
            text-align: right;
            border: 2px solid #CCCCCC;
            border-collapse: collapse;
            border-spacing: 0;
        }
        .ticket_section, .item_section, .asset_section, .appointment_section
        {
            width: 100%;
            text-align: left;
            border: 0px solid #CCCCCC;
            border-collapse: collapse;
            border-spacing: 0;
        }
        .customer_label
        {
            display:none;
            text-align: left;
            font-weight: bold;
            color: #000000;
            background-color: #FFFFFF;
            vertical-align: top;
            white-space: nowrap;
        }
        .ticket_label, .ticket_label2, .wolabel, .amountdue_label, .asset_label
        {
            text-align: left;
            vertical-align: top;
            font-weight: bold;
            color: #000000;
            background-color: #FFFFFF;
            white-space: nowrap;
            border: 1px solid #000000;
            border-collapse: collapse;
            border-spacing: 0;
            padding: 2px 2px;
        }
        .ticket_text, .ticket_text2, .wotext, .wotext_number, .amountdue_text, .asset_text
        {
            text-align: left;
            vertical-align: top;
            color: #000000;
            background-color: #dbe5f1;
            border: 1px solid #CCCCCC;
            border-collapse: collapse;
            border-spacing: 0;
            padding: 2px 2px;
        }
        .ticket_label, .ticket_label2
        {
            width: 10%;
        }
        .ticket_text, .ticket_text2
        {
            width: 40%;
        }
        .customer_label
        {
            width: 10%;
            margin-left: 10px;
        }
        .customer_text
        {
            width: 40%;
        }
        .asset_label
        {
            width: 20%;
        }
        .asset_text
        {
            width: 80%;
        }
        .wotext_number
        {
            text-align: right;
            white-space: nowrap;
        }
        .wotext, .wotext_number
        {
            padding-top: 3px;
            padding-bottom: 3px;
            padding-left: 3px;
            padding-right: 3px;
        }
        .my_company_info
        {
            font-weight: bold;
            color: #000000;
            background-color: #FFFFFF;
            font-family: Arial, Helvetica, sans-serif;
        }
        .customer_section, .customer_label, .customer_text, .contact_section, .wolabel
        {
            text-align: left;
            background-color: #dbe5f1;
            font-size: 14px;
        }
        .amountdue_label
        {
            text-align: right;
        }
        .ticket_info
        {
            font-family: "Arial Rounded MT Bold";
            color: #DDDDDD;
            text-align: center;
        }
        .largeHeader
        {
        }
        .subtotal_label
        {
            font-family: Arial;
            font-weight: bold;
            text-align: right;
            white-space: nowrap;
            font-size: 14px;
        }
        .subtotal_text
        {
            border-bottom: solid 1px #999999;
            text-align: right;
            font-size: 14px;
        }
        .signature
        {
            width: 216px;
            page-break-inside: avoid;
        }
        .my_company_logo
        {
            padding-bottom: 20px
        }
        .item_tax {display: none;}
        .item_approved {display: none;}
    </style>
</head>
<body>
<div class="print_page_container">
    <table cellspacing="0" cellpadding="0" border="0" class="section">
        <tbody>
        <tr>
            <td>
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                    <tr>
                        <td class="my_company_info" style="width: 50%;">
                            <div>&nbsp;</div>
                            Kamalia Khaddi<br />
                            www.kamaliakhaddi.com<br />
                            +92-316-5165612<br />
                            info@kamaliakhaddi.com<br />
                        </td>
                        <td class="ticket_info" style="width: 50%;">
                            <div>
<span style="font-size: 22px;">
<div>
    <img src="https://www.kamaliakhaddi.com/images/website/logos/main-logo.png" width="100px">
</div>
    <br/>
<span style="color: #366092;">Invoice # {{$singleOrder["order_no"]}} </span><br />
</span></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" border="0" class="section">
        <tbody>
        <tr>
            <td class="leftbox" style="text-align: left; vertical-align: top;">
                <table cellspacing="0" cellpadding="0" border="0" class="customer_section">
                    <tbody>
                    <tr>
                        <td class="print_heading" colspan="5">
                            Bill To
                        </td>
                    </tr>
                    <tr style="background-color: #dbe5f1">
                        <td class="customer_body">
                            Mr. {{$singleOrder["name"]}}<br/>
                            {{$singleOrder["shipping_address"]}}<br/>
                            {{$singleOrder["city"]}}<br/>
                            Phone: {{$singleOrder["phone"]}}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
            <td class="middlebox">&nbsp;
            </td>
            <td class="rightbox" style="text-align: right; vertical-align: top;">
                <table cellspacing="0" cellpadding="0" border="0" class="contact_section">
                    <tbody>
                    <tr>
                        <td class="print_heading">
                            Balance Due
                        </td>
                    </tr>
                    <tr>
                        <td class="customer_body">
                            Rs: {{$singleOrder["billing_total"]}}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    <!-- Items -->
    <table cellspacing="0" cellpadding="0" border="0" class="section">
        <tbody>
        <tr>
            <td class="print_heading" colspan="6">
                Item(s)
            </td>
        </tr>
        <tr>
            <td class="print_heading">#</td>
            <td class="print_heading">Product Code</td>
            <td class="print_heading">Item & Description</td>
            <td class="print_heading">Rate</td>
            <td class="print_heading">Quantity</td>
            <td class="print_heading">Amount</td>
        </tr>
        @foreach($singleOrder->products()->get() as $indexKey=>$product)
            <tr>
                <td class="customer_body">{{$indexKey+1}}</td>
                <td class="customer_body">
                    <p>{{$product["product-code"]}}</p>
                </td>
                <td class="customer_body">
                    <p>{{$product["product-name"]}}</p>
                </td>
                <td class="customer_body">
                    @if($product["sale-price"] == NULL )
                        Rs: {{$product["product-price"]}}
                    @else
                        Rs: {{$product["sale-price"]}}
                    @endif
                </td>
                <td class="customer_body">{{$product->pivot->quantity}}</td>
                <td class="customer_body">
                    @if($product["sale-price"] == NULL )
                        Rs: {{$product["product-price"] * $product->pivot->quantity}}
                    @else
                        Rs: {{$product["sale-price"] * $product->pivot->quantity}}
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- Total -->
    <table cellspacing="0" cellpadding="0" border="0" class="section">
        <tbody>
        <tr>
            <td style="width: 60%; vertical-align: top;">&nbsp;
            </td>
            <td style="width: 40%; vertical-align: top;">
                <table width="100%" cellspacing="2" cellpadding="2" border="0" style="float: right;">
                    <tbody>
                    <tr>
                        <td class="subtotal_label" style="width: 25%; font-weight: bold;">
                            Total &nbsp;
                        </td>
                        <td class="subtotal_text" style="width: 75%;">Rs: {{$singleOrder["billing_total"]}}<br />
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    <!-- Notes -->
    <table cellspacing="0" cellpadding="0" border="0" class="section">
        <tbody>
        <tr>
            <td class="print_heading">
                Notes
            </td>
        </tr>
        <tr>
            <td><br />
            </td>
        </tr>
        </tbody>
    </table>
    <!-- Terms -->
    <table cellspacing="0" cellpadding="0" border="0" class="section">
        <tbody>
        <tr>
            <td class="print_heading">
                Terms
            </td>
        </tr>
        <tr>
            <td>
                <br />
            </td>
        </tr>
        </tbody>
    </table>
    <!-- Signature -->
    <table cellspacing="0" cellpadding="0" border="0" class="section">
        <tbody>
        <tr>
            <td style="width: 50%;">
                <table cellspacing="6" cellpadding="2" border="0" style="width: 100%;">
                    <tbody>
                    <tr>
                        <td colspan="2">&nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 75%; border-bottom: 1px solid #000000;">
                            <br />
                            <br />
                        </td>
                        <td valign="bottom" style="width: 22%; border-bottom: 1px solid #000000;">
                            <br />
                            {{
                                    date("Y-m-d")
                                }}
                            <br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Signature
                        </td>
                        <td>
                            Date
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</div>
</body>
</html>