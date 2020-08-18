@extends('front-layout.layout')
@section('head')
<style type='text/css'>
H1 {
  font-family: Arial, sans-serif;
  font-size: 20pt;
  color: #08185A;
  font-weight: 600;
  margin-bottom: 0.1em
}

H2 {
  font-family: Arial, sans-serif;
  font-size: 14pt;
  color: #08185A;
  font-weight: 100;
  margin-top: 0.1em
}

H2.co {
  font-family: Arial, sans-serif;
  font-size: 24pt;
  color: #08185A;
  margin-top: 0.1em;
  margin-bottom: 0.1em;
  font-weight: 100
}

H3.co {
  font-family: Arial, sans-serif;
  font-size: 16pt;
  color: #FFFFFF;
  margin-top: 0.1em;
  margin-bottom: 0.1em;
  font-weight: 100
}

BODY {
  font-family: Verdana, Arial, sans-serif;
  font-size: 10pt;
  color: #08185A background-color:#FFFFFF
}

TR {
  height: 25px;
}

TR.shade {
  height: 25px;
  background-color: #CED7EF
}

TR.title {
  height: 25px;
  background-color: #0074C4
}

TD {
  font-family: Verdana, Arial, sans-serif;
  font-size: 8pt;
  color: #08185A
}

P {
  font-family: Verdana, Arial, sans-serif;
  font-size: 10pt;
  color: #FFFFFF
}

P.blue {
  font-family: Verdana, Arial, sans-serif;
  font-size: 7pt;
  color: #08185A
}

P.red {
  font-family: Verdana, Arial, sans-serif;
  font-size: 8pt;
  color: #FF0066
}

P.green {
  font-family: Verdana, Arial, sans-serif;
  font-size: 8pt;
  color: #00AA00
}

DIV.bl {
  font-family: Verdana, Arial, sans-serif;
  font-size: 8pt;
  color: #0074C4
}

LI {
  font-family: Verdana, Arial, sans-serif;
  font-size: 8pt;
  color: #FF0066
}

INPUT {
  font-family: Verdana, Arial, sans-serif;
  font-size: 8pt;
  color: #08185A;
  background-color: #CED7EF;
  font-weight: bold
}

SELECT {
  font-family: Verdana, Arial, sans-serif;
  font-size: 8pt;
  color: #08185A;
  background-color: #CED7EF;
  font-weight: bold
}

TEXTAREA {
  font-family: Verdana, Arial, sans-serif;
  font-size: 8pt;
  color: #08185A;
  background-color: #CED7EF;
  font-weight: normal;
  scrollbar-arrow-color: #08185A;
  scrollbar-base-color: #CED7EF
}

A:link {
  font-family: Verdana, Arial, sans-serif;
  font-size: 8pt;
  color: #08185A
}

A:visited {
  font-family: Verdana, Arial, sans-serif;
  font-size: 8pt;
  color: #08185A
}

A:hover {
  font-family: Verdana, Arial, sans-serif;
  font-size: 8pt;
  color: #FF0000
}

A:active {
  font-family: Verdana, Arial, sans-serif;
  font-size: 8pt;
  color: #FF0000
}
</style>
@endsection
@section('content')
<!-- start branding table -->
<table width='100%' border='2' cellpadding='2' bgcolor='#0074C4'>
  <tr>
    <td bgcolor='#CED7EF' width='90%'>
      <h2 class='co'>&nbsp;MasterCard Virtual Payment Client Example</h2>
    </td>
  </tr>
</table>
<!-- end branding table -->

<center>
  <h1>PHP 3-Party Transaction</h1>
</center>
<center>
  <h2>Simply input those required fields to change the functionality.</h2>
</center>


<!-- The "Pay Now!" button submits the form and gives control to the form 'action' parameter -->
<form action="{{route('request')}}" method="post" accept-charset="UTF-8">
  @csrf

  <input type="hidden" name="Title" value="PHP VPC 3 Party Transacion">

  <!-- get user input -->
  <table width="80%" align="center" border="0" cellpadding='0' cellspacing='0'>

    <tr class="shade">
      <td align="right"><strong><em>Virtual Payment Client URL:&nbsp;</em></strong></td>
      <td><input name="virtualPaymentClientURL" size="65" value="https://migs.mastercard.com.au/vpcpay"
          maxlength="250" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;
        <hr width="75%">&nbsp;</td>
    </tr>
    <tr class="title">
      <td colspan="2" height="25">
        <p><strong>&nbsp;Basic 3-Party Transaction Fields</strong></p>
      </td>
    </tr>
    <tr>
      <td align="right"><strong><em> VPC Version: </em></strong></td>
      <td><input name="vpc_Version" value="1" size="20" maxlength="8" /></td>
    </tr>
    <tr class="shade">
      <td align="right"><strong><em>Command Type: </em></strong></td>
      <td><input name="vpc_Command" value="pay" size="20" maxlength="16" /></td>
    </tr>
    <tr>
      <td align="right"><strong><em>Merchant AccessCode: </em></strong></td>
      <td><input name="vpc_AccessCode" value="77426638" size="20" maxlength="8" /></td>
    </tr>
    <tr class="shade">
      <td align="right"><strong><em>Merchant Transaction Reference: </em></strong></td>
      <td><input name="vpc_MerchTxnRef" value="ORDER958743-1" size="20" maxlength="40" /></td>
    </tr>
    <tr>
      <td align="right"><strong><em>MerchantID: </em></strong></td>
      <td><input name="vpc_Merchant" value="TESTEGPTEST" size="20" maxlength="16" /></td>
    </tr>
    <tr class="shade">
      <td align="right"><strong><em>Transaction OrderInfo: </em></strong></td>
      <td><input name="vpc_OrderInfo" value="ORDER958743" size="20" maxlength="34" /></td>
    </tr>
    <tr>
      <td align="right"><strong><em>Purchase Amount: </em></strong></td>
      <td><input name="vpc_Amount" value="100" maxlength="10" /></td>
    </tr>
    <tr class="shade">
      <td align="right"><strong><em>Receipt ReturnURL: </em></strong></td>
      <td><input name="vpc_ReturnURL" size="65" value="{{route('response')}}" maxlength="250" />
      </td>
    </tr>
    <tr>
      <td align="right"><strong><em>Payment Server Display Language Locale: </em></strong></td>
      <td><select name="vpc_Locale">
          <option SELECTED>en</option>
          <option>en</option>
        </select></td>
    </tr>
    <tr class="shade">
      <td align="right"><strong><em>Currency: </em></strong></td>
      <td><select name="vpc_Currency">
          <option SELECTED>EGP</option>
        </select></td>
    </tr>



    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" NAME="SubButL" value="Pay Now!"></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;
        <hr width="75%">&nbsp;</td>
    </tr>

    <tr>
      <td colspan="2">
        <p class='blue'><strong><em><u>Note</u>:</em></strong><br />
          Any information passed through the customer's browser
          can potentially be modified by the customer, or even by third parties to
          fraudulently alter the transaction data. Therefore all transactional
          information should <strong>not</strong> be passed through the browser in
          a way that could potentially be modified (e.g. hidden form fields).
          Transaction data should only be accepted once from a browser at the
          point of input, and then kept in a way that does not allow others
          to modify it (e.g. database, server session, etc.). Any transaction
          information displayed to a customer, such as amount, should be passed
          only as display information and the actual transactional data should be
          retrieved from the secure source last thing at the point of processing
          the transaction.</p>

      </td>
    </tr>

    <!-- <tr>
      <td width="40%">&nbsp;</td>
      <td width="60%">&nbsp;</td>
    </tr> -->

  </table>

</form>
@endsection