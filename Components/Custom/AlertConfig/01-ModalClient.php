<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Confirmar Operação</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Deseja Realmente Excluir o Registro - ID: <?php echo $LISTAR_CLIENTES['id']; ?></p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-danger" data-dismiss="modal">Cancelar</a>
                <a href="../../Controllers/ActionsViews/01-DeleteRegistroClient.php?id=<?php echo $LISTAR_CLIENTES['id']; ?>" class="btn btn-success" name="ConfirmDeleteClient">Confirmar</a>
            </div>
        </div>
    </div>
</div>