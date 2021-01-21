
<?php require_once "config.php"; ?>

<form action="charge.php" method="post">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-name="inventory"
            data-key="<?php echo $stripe['publishable_key']; ?>"
            data-description="inventory payment system with stripe"
            data-amount="5000"
            data-label="Pay"
            data-email="mahtab.u1484@gmial.com"
            data-locale="auto"
            data-image="https://logopond.com/logos/7b91b2efc18361b9f3d67e6102382cd4.png">
    </script>
</form>
