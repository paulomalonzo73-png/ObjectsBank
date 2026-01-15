<?php
require 'classes/Account.php';
require 'classes/Customer.php';
require 'includes/header.php';

$accounts = [
    new Account(['account_number' => '30948271'], 'Checking', 12540),
    new Account(['account_number' => '30948289'], 'Checking', -1850),
    new Account(['account_number' => '55719024'], 'Savings', 48200),
    new Account(['account_number' => '55719077'], 'Savings', 9600)
];

$customer = new Customer(
    'Paulo',
    'Malonzo',
    'paulo.malonzo@email.com',
    $accounts
);
?>

<h2>NAME: <?= strtoupper($customer->getFullName()); ?></h2>

<table>
  <tr>
    <th>Account Number</th>
    <th>Account Type</th>
    <th>Balance</th>
  </tr>

  <?php foreach ($customer->accounts as $account): ?>
    <tr>
      <td><?= $account->number['account_number']; ?></td>
      <td><?= $account->type; ?></td>

      <?php if ($account->getBalance() >= 0): ?>
        <td class="credit">₱ <?= number_format($account->getBalance(), 2); ?></td>
      <?php else: ?>
        <td class="overdrawn">₱ <?= number_format($account->getBalance(), 2); ?></td>
      <?php endif; ?>
    </tr>
  <?php endforeach; ?>
</table>

<?php require 'includes/footer.php'; ?>
