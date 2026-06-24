
<?php $__env->startSection("conteudo"); ?>
<main>
    <div class="container">
        <div class="header">
            <h1>🎉 Você foi convidado!</h1>
        </div>
        
        <div class="content">
            <h2>Olá!</h2>
            
            <p>Você recebeu um convite para criar uma conta em <strong>Safe Watch</strong>.</p>
            
            <div class="invite-info">
                <p><strong>📧 Email:</strong> <?php echo e($convite->email); ?></p>
                <?php if($convite->expiraEm): ?>
                    <p><strong>⏰ Expira em:</strong> <?php echo e($convite->expiraEm->format('d/m/Y H:i')); ?></p>
                <?php endif; ?>
            </div>
            
            <div class="btn-container">
                <a href="<?php echo e(route('convite', $convite->token)); ?>" class="btn">
                    Criar minha conta
                </a>
            </div>
            
            <div class="details">
                <div class="details-item">
                    <div class="number">✓</div>
                    <div>Gratuito</div>
                </div>
                <div class="details-item">
                    <div class="number">⚡</div>
                    <div>Rápido</div>
                </div>
                <div class="details-item">
                    <div class="number">🔒</div>
                    <div>Seguro</div>
                </div>
            </div>
            
            <div class="warning">
                ⚠️ Este link de convite é pessoal e intransferível. 
                Não compartilhe este email com outras pessoas.
            </div>
            
            <p style="text-align: center; margin-top: 20px;">
                <a href="<?php echo e(route('home')); ?>" class="btn-secondary">
                    Conhecer a plataforma
                </a>
            </p>
        </div>
        
        <div class="footer">
            <p>
                Se você não esperava por este convite, pode ignorar este email.<br>
                Este convite expirará em <?php echo e($convite->expiraEm ? $convite->expiraEm->diffForHumans() : '7 dias'); ?>.
            </p>
            <p>
                <small>
                    Safe Watch - 
                    <a href="<?php echo e(route('home')); ?>"></a>
                </small>
            </p>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("login/index", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\TCC\resources\views/email/convite.blade.php ENDPATH**/ ?>