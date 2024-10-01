

<style>

    .action-title-page {
        display: flex;
        justify-content: center;
        width: 100%;
        height: 3em;
        margin: 1em 0 2em 0;
    }

    .action-title-page h2 {
        font-size: 2em;
    }

    .article-tabela {
        width: 80%;
        margin: auto;
        box-sizing: border-box;
    }

    .rodape {
        display: flex;
        justify-content: center;
        margin-top: 2em;
    }

</style>

<?php $__env->startSection('content'); ?>

<article class="action-title-page">
    <h2>CARROS</h3>
</article>
<article class="article-tabela">
    <table class="table">
        <thead>
            <tr>
                <th style="width: 20%">Marca</th>
                <th style="width: 20%">Modelo</th>
                <th style="width: 10%">Ano</th>
                <th style="width: 20%">Cor</th>
                <th style="width: 30%">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $carros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($carro->marca); ?></td>
                    <td><?php echo e($carro->modelo); ?></td>
                    <td><?php echo e($carro->ano); ?></td>
                    <td><?php echo e($carro->cor); ?></td>
                    <td>
                        <a href="<?php echo e(route('carros.show', $carro->id)); ?>" class="btn btn-info">Detalhes</a>
                        <a href="<?php echo e(route('carros.edit', $carro->id)); ?>" class="btn btn-warning">Editar</a>
                        <form action="<?php echo e(route('carros.destroy', $carro->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</article>
<article class="rodape">
    <a href="<?php echo e(route('carros.create')); ?>" class="btn btn-primary mb-3">Novo carro</a>
</article>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gabri\OneDrive\Documentos\ADS\PW\P1\P1AluguelCarros\resources\views/carros/index.blade.php ENDPATH**/ ?>