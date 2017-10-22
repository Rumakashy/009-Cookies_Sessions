<?php require 'inc/head.php'; ?>

<?php

if (!empty($_COOKIE["panier"])) {
    $panier = $_COOKIE['panier'];
    $totalPanier = 0;
    foreach ($_COOKIE["panier"] as $name => $value) {
        $totalPanier += $value;
    }
}
?>

<section class="cookies container-fluid">

    <div class="panel panel-default center-block" style="width: 650px">
        <div class="panel-body" style="position: relative;">
            <table>

                <?php if (empty($_COOKIE["panier"])) : ?>
                    <tr>
                        <td><h3>Votre panier est vide<h3></td>
                    </tr>


                <?php else: ?>

                    <thead>
                    <tr>
                        <th style="width: 500px">Nom de l'article</th>
                        <th style="width: 50px">Quantité</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($_COOKIE["panier"]["pecanNuts"])) : ?>
                        <tr>
                            <td><h2>Pecan Nuts</h2>
                                <p>Cooked by Penny !</p></td>
                            <td><h2><?= $_COOKIE["panier"]["pecanNuts"] ?></h2></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($_COOKIE["panier"]["ChocolateChips"])) : ?>
                        <tr>
                            <td><h2>Chocolate chips</h2>
                                <p>Cooked by Bernadette !</p></td>
                            <td><h2><?= $_COOKIE["panier"]["ChocolateChips"] ?></h2></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($_COOKIE["panier"]["ChocolateCookie"])) : ?>
                        <tr>
                            <td><h2>Chocolate cookie</h2>
                                <p>Cooked by Bernadette !</p></td>
                            <td><h2><?= $_COOKIE["panier"]["ChocolateCookie"] ?></h2></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($_COOKIE["panier"]["MmsCookies"])) : ?>
                        <tr>
                            <td><h2>M&M's© cookies</h2>
                                <p>Cooked by Penny !</p></td>
                            <td><h2><?= $_COOKIE["panier"]["MmsCookies"] ?></h2></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($_COOKIE["panier"])) : ?>
                        <tr>
                            <td><h2 class="text-right">TOTAL: &nbsp;&nbsp;</h2 ></td>
                            <td><h2><?= $totalPanier ?? '0' ?></h2></td>
                        </tr>
                    <?php endif; ?>
                    </tbody>

                <?php endif; ?>
            </table>
        </div>
    </div>
<?php require 'inc/foot.php'; ?>
