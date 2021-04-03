<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap/bootstrap.min.css">

        <link rel="stylesheet" href="<?= base_url() ?>assets/css/purecookie.css">

        <link rel="stylesheet" href="<?= base_url() ?>assets/css/app.css">	

        <!-- jQuery 2.2.3 -->
		<script src="<?= base_url() ?>assets/js/jQuery/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap 3.3.6 -->
        <script src="<?= base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/js/purecookie.js"></script>
        
        <script src="<?= base_url() ?>assets/js/app.js"></script>
	</head>
	<body>
        <div class="container">
            <div class="header">
                <div class="header-logo-wrap">
                    <a href="/">
                        <img class="logo-img" src="<?= base_url() ?>assets/images/imarketplan_logo.png">
                    </a>
                </div>
            </div>
            <div class="content">
                <?php 
                $this->view($view);
                ?>
            </div>
            <div class="footer">
                <p class="disclaimer-desc">Disclaimer: By using iMarketPlan.com you agree to not hold Lusso’s News, LLC or iMarketPlan.com accountable for any problems that may occur. Lusso’s News, LLC. or iMarketPlan.com are not responsible for any trade or investment. iMarketPlan.com is a product of Lusso’s News, LLC. iMarketPlan.com is for information purposes only and not advice. <a href="https://lussosnews.com/terms-of-service/">https://lussosnews.com/terms-of-service/</a></p>
            </div>
            
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- imarketplan -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-6441450994703042"
                data-ad-slot="4113487676"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
	</body>
</html>