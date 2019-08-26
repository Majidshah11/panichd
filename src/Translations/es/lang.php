<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => 'Tiques Activos',
  'nav-completed-tickets'            => 'Tiques Completos',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => 'Asunto',
  'table-owner'                      => 'Dueño',
  'table-status'                     => 'Estado',
  'table-last-updated'               => 'Última Actualización',
  'table-priority'                   => 'Prioridad',
  'table-agent'                      => 'Agente',
  'table-category'                   => 'Categoría',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => 'No hay data esta tabla',
  'table-info'                       => 'Mostrando _START_ a _END_ de _TOTAL_ entradas',
  'table-info-empty'                 => 'Mostrando 0 de 0 a 0 records',
  'table-info-filtered'              => '(filtrados de _MAX_ totales)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => 'Mostrar _MENU_ entradas',
  'table-loading-results'            => 'Cargando...',
  'table-processing'                 => 'Procesando...',
  'table-search'                     => 'Buscar:',
  'table-zero-records'               => 'No hemos encontrado entradas que correspondan',
  'table-paginate-first'             => 'Primera',
  'table-paginate-last'              => 'Última',
  'table-paginate-next'              => 'Siguiente',
  'table-paginate-prev'              => 'Anterior',
  'table-aria-sort-asc'              => ': activar para ordernar por esta columna ascendentemente',
  'table-aria-sort-desc'             => ': activar para ordernar por esta columna descendentemente',

  'btn-back'                         => 'Regresar',
  'btn-cancel'                       => 'Cancelar', // NEW
  'btn-close'                        => 'Cerrar',
  'btn-delete'                       => 'Borrar',
  'btn-edit'                         => 'Editar',
  'btn-mark-complete'                => 'Marcar com Completo',
  'btn-submit'                       => 'Enviar',

  'agent'                            => 'Agente',
  'category'                         => 'Categoría',
  'colon'                            => ': ',
  'comments'                         => 'Comentarios',
  'created'                          => 'Creado',
  'description'                      => 'Descripción',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'Última Actualización',
  'no-replies'                       => 'Sin respuestas.',
  'owner'                            => 'Dueño',
  'priority'                         => 'Prioridad',
  'reopen-ticket'                    => 'Reabrir Tique',
  'reply'                            => 'Responder',
  'responsible'                      => 'Responsable',
  'status'                           => 'Estado',
  'subject'                          => 'Asunto',

 /*
  *  Page specific
  */

// ____
  'index-title'                      => 'Soporte página principal',

// tickets/____
  'index-my-tickets'                 => 'Mis Tiques',
  'btn-create-new-ticket'            => 'Crear nuevo tique',
  'index-complete-none'              => 'No hay tiques completados',
  'index-active-check'               => 'Asegúrate de revisar los Tiques Activos si no puedes encontrar el tique.',
  'index-active-none'                => 'No hay tiques activos,',
  'index-create-new-ticket'          => 'crear un tique nuevo',
  'index-complete-check'             => 'Asegúrate de revisar los Tiques Completados si no puedes encontrar el tique.',

  'create-new-ticket'                => 'Crear Nuevo Tique',
  'create-ticket-brief-issue'        => 'Un resumen del problema que tienes',
  'create-ticket-describe-issue'     => 'Describe en detalle el problema que tienes',

  'show-ticket-title'                => 'Tique',
  'show-ticket-js-delete'            => '¿Estás seguro que quieres borrar?: ',
  'show-ticket-modal-delete-title'   => 'Borrar Tique',
  'show-ticket-modal-delete-message' => '¿Estás seguro que quieres borrar: :subject?',

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => 'Agentes :names fueron añadidos a agentes',
  'administrators-are-added-to-administrators'      => 'Administradores :names fueron añadidos a administradores', //New
  'agents-joined-categories-ok'                     => 'Te agregaste a categorías',
  'agents-is-removed-from-team'                     => 'Eliminamos agente\s :name del equipo de agentes',
  'administrators-is-removed-from-team'             => 'Eliminamos administrador\es :name del equipo de administradores', // New

// CategoriesController
  'category-name-has-been-created'   => 'La categoría :name fue creada!',
  'category-name-has-been-modified'  => 'La cateogría :name fue modificada!',
  'category-name-has-been-deleted'   => 'La categoría :name fue borrada!',

// PrioritiesController
  'priority-name-has-been-created'   => 'La prioridad :name fue creada!',
  'priority-name-has-been-modified'  => 'La prioridad :name fue modificada!',
  'priority-name-has-been-deleted'   => 'La prioridad :name fue borrada!',
  'priority-all-tickets-here'        => 'Todos los tiques relacionados a la cateogoría aquí',

// StatusesController
  'status-name-has-been-created'   => 'El estado :name fue creado!',
  'status-name-has-been-modified'  => 'El estado :name fue modificado!',
  'status-name-has-been-deleted'   => 'El estado :name fue borrado!',
  'status-all-tickets-here'        => 'Todos los tiques relacionados al estado aquí',

// CommentsController
  'comment-has-been-added-ok'        => 'Comentario fue añadido de forma correcta',

// NotificationsController
  'notify-new-comment-from'          => 'Nuevo comentario de ',
  'notify-on'                        => ' en ',
  'notify-status-to-complete'        => ' estado a Completado ',
  'notify-status-to'                 => ' estado a ',
  'notify-transferred'               => ' transferido ',
  'notify-to-you'                    => ' a usted ',
  'notify-created-ticket'            => ' creó tique ',
  'notify-updated'                   => ' actualizado ',

 // TicketsController
  'the-ticket-has-been-created'      => 'El tique fue creado!',
  'the-ticket-has-been-modified'     => 'El tique fue modificado!',
  'the-ticket-has-been-deleted'      => 'El tique :name fue borrado!',
  'the-ticket-has-been-completed'    => 'El tique :name fue completado!',
  'the-ticket-has-been-reopened'     => 'El tique :name fue reabierto!',
  'you-are-not-permitted-to-do-this' => 'No tienes los permisos necesarios para realizar esta acción!',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware UserAccessMiddleware
  'you-are-not-permitted-to-access'     => 'No tienes los permisos necesarios para accesar esta página!',

];
