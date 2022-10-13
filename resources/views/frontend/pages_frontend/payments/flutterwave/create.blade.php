<center>
<br><br>
<br><br>
<h3>DYNAMIC FLUTTERWAVE</h3>
<form method="POST" action="{{ route('pay') }}" id="paymentForm">
    {{ csrf_field() }}

    <input name="name" placeholder="Name" /> <br><br>
    <input name="amount" type="text" placeholder="Amount" /> <br><br>
    <input name="email" type="email" placeholder="Email" /> <br><br>
    <input name="address" type="text" placeholder="Address" /><br><br>
    <input name="title" type="text" placeholder="Title" /><br><br>
    <input name="description" type="text" placeholder="Message" /><br><br>
    <input name="phone" type="tel" placeholder="Phone number" /><br><br>

    <input type="submit" value="Make Donation" />
</form>

</center>