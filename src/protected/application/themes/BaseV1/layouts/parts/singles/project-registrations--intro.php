<?php if ($entity->introInscricoes || $this->isEditable()): ?>

    <div id="intro-das-inscricoes" ng-class="{'registration-fieldset': data.isEditable}">
        <h4 ng-if="data.isEditable">1. Introdução</h4>
        <p class="registration-help" ng-if="data.isEditable">Crie um texto de introdução.</p>
        <p class="js-editable" data-edit="introInscricoes" data-original-title="Introdução da inscrição" data-emptytext="Insira o texto." data-placeholder="Insira o texto." data-showButtons="bottom" data-placement="bottom"><?php echo $this->isEditable() ? $entity->introInscricoes : nl2br($entity->introInscricoes); ?></p>
    </div>
    <!-- #intro-das-inscricoes -->
<?php endif; ?>