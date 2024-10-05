<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice #{{ $order->order_number }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        .header img {
            width: 100px; /* Adjust as needed */
        }
        .header .invoice-info {
            text-align: right;
            margin-left: 20px; /* Space between logo and text */
        }
        h1 {
            font-size: 2.5em;
            margin: 0;
        }
        p.subtitle {
            margin: 5px 0;
            font-size: 1.2em;
        }
        h2 {
            margin-top: 30px;
            font-size: 1.8em;
            border-bottom: 2px solid #eee;
            padding-bottom: 5px;
        }
        p {
            margin: 5px 0;
        }
        .user-details, .order-summary {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 1.2em;
        }
        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="header">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Bitmap_V2_logo.png" alt="Logo">
        <div class="invoice-info">
            <h1>INVOICE</h1>
            <p class="subtitle">Invoice #{{ $order->order_number }}</p>
            <p><strong>Date:</strong> {{ $order->created_at->format('Y-m-d H:i') }}</p>
        </div>
    </div>

    <div class="user-details">
        <h4>User Details</h4>
        <p><strong>Name:</strong> {{ optional($order->user)->name ?? 'N/A' }}</p>
        <p><strong>Email:</strong> {{ optional($order->user)->email ?? 'N/A' }}</p>
        <p><strong>Phone:</strong> {{ optional($order->user)->phone ?? 'N/A' }}</p>
        <p><strong>Shipping Address:</strong> {{ $order->address1 }}, {{ $order->city }}, {{ $order->state }} - {{ $order->post_code }}</p>
    </div>

    <h4>Products in this Order</h4>
    <table>
        <thead>
            <tr>
                <th>Product Title</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($carts as $cart)
            @php
                $product = $cart->product;
                $discount = $product->discount ?? 0;
                $discountedPrice = $product->price - ($product->price * ($discount / 100));
                $totalPrice = $discountedPrice * $cart->quantity;
            @endphp
                <tr>
                    <td>{{ $cart->product->title ?? 'Unknown Product' }}</td>
                    <td>${{ number_format($discountedPrice, 2) }}</td>
                    <td>{{ $cart->quantity }}</td>
                    <td>${{ number_format($totalPrice, 2) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No products found in this order.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="order-summary" style="margin-top:40px;">
        <h4>Order Summary</h4>
        <p>Subtotal: ${{ number_format($order->sub_total, 2) }}</p>
        <p>Delivery Fee: ${{ number_format($order->delivery_fee, 2) }}</p>
        <p>Coupon Discount: ${{ number_format($order->coupon ?? 0, 2) }}</p>
        <p class="total"><strong>Total Amount:</strong> ${{ number_format($order->total_amount, 2) }}</p>
    </div>

    <div class="footer">
        <p>Thank you for your purchase!</p>
    </div>

</body>
</html>
