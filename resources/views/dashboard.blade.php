<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Remittance Dashboard</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>
  <div class="sidebar">
    <h2>MobileCause</h2>
    <ul>
      <li>Accounts</li>
      <li>Transaction</li>
      <li class="active">Remittance</li>
      <li>Accounts Receivable</li>
    </ul>
  </div>

  <div class="main">
    <div class="topbar">
      <h1>Remittance</h1>
      <div class="user">Jennette ▾</div>
    </div>

    <div class="section-header">
      <h2>Campaigns Queue</h2>
      <button class="green-button">Send to Quickbooks</button>
    </div>

    <table>
      <thead>
        <tr>
          <th>Campaign Name</th>
          <th>Organization Name</th>
          <th>Transaction</th>
          <th>Live</th>
          <th>Web</th>
          <th>Recurring</th>
          <th>Total</th>
          <th>Fee</th>
          <th>Payment</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Annual Gala</td>
          <td>Blue Cross</td>
          <td>54</td>
          <td>$12,892</td>
          <td>$42,700</td>
          <td>-</td>
          <td>$55,592</td>
          <td>$3,941</td>
          <td>$51,651</td>
        </tr>
        <!-- Repeat rows as needed -->
      </tbody>
    </table>

    <div class="pagination">‹ 1 2 3 4 ›</div>
  </div>
</body>
</html>
