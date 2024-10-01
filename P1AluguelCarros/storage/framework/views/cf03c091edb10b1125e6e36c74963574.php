

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

    .formularios {
        width: 50%;
        height: auto;
        margin: auto;
    }

    .botoes-formulario {
        display: flex;
        justify-content: space-evenly;
    }

</style>

<?php $__env->startSection('content'); ?>
<div class="container">
    <article class="action-title-page">
        <h2>EDITE O CARRO</h3>
    </article>

    <form action="<?php echo e(route('carros.store')); ?>" method="POST" class="formularios">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="placa">Placa</label>
            <input type="text" id="placa" name="placa" class="form-control" minlength="7" maxlength="7" value="<?php echo e($carro->placa); ?>" disabled>
        </div>
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" id="marca" name="marca" class="form-control" minlength="3" maxlength="30" value="<?php echo e($carro->marca); ?>" required>
        </div>
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" class="form-control" minlength="3" maxlength="30" value="<?php echo e($carro->modelo); ?>" required>
        </div>
        <div class="form-group">
            <label for="ano">Ano</label>
            <input type="number" id="ano" name="ano" class="form-control" min="1900" max="2025" value="<?php echo e($carro->ano); ?>" required>
        </div>
        <div class="form-group">
            <label for="cor">Cor</label>
            <input type="text" id="cor" name="cor" class="form-control" minlength="3" maxlength="30" value="<?php echo e($carro->cor); ?>" required>
        </div>

        <div class="botoes-formulario">
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="<?php echo e(route('carros.index')); ?>" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gabri\OneDrive\Documentos\ADS\PW\P1\P1AluguelCarros\resources\views/carros/edit.blade.php ENDPATH**/ ?>