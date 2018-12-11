<div class="container">
    <div class="header">
        <!-- content -->
        <div style="font-size: 20px; padding: 15px; font-weight: 900;">
            GALERIA
        </div>
        <!-- end content -->
    </div>
    <div class="page">
        <div class="menu">
            <!-- menu -->
            
            <!-- end menu -->
        </div>
        <div class="content">
            <!-- content --> 
            <div style="">
                <?php if(count($data['errors']) > 0): ?>
                    <?php foreach($data['errors'] as $e): ?>
                        <?=$e;?><br>
                    <?php endforeach; ?>
                <?php endif; ?>
                <form method="POST" action="">
                    <small>Login</small>
                    <input type="text" name="login" value="" />

                    <small>Haslo</small>
                    <input type="password" name="password" value="" />

                    <input type="submit" value="Zaloguj sie" />
                </form>
            </div>
            <!-- end content -->
        </div>
    </div>
</div>