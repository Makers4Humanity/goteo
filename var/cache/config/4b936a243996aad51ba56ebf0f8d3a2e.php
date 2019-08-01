<?php
// auto-generated by Goteo\Application\Config\YamlSettingsLoader
// date: 2019/08/01 18:05:25
return array (
  'create-project' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'edit-project' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'remove-project' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'full-html-edit' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'recommend-projects' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'assign-checker' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'translate-language' => 
  array (
    'model' => NULL,
    'relational' => 
    array (
      'table' => 'user_translang',
      'user_id' => 'user',
      'table_id' => 'lang',
    ),
  ),
  'create-call' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'edit-call' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'remove-call' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'view-any-call' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'edit-any-call' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'remove-any-call' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'edit-published-calls' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'publish-any-call' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'publish-calls' => 
  array (
    'model' => 
    array (
      'table' => 'call',
      'table_id' => 'id',
    ),
    'relational' => 
    array (
      'table' => 'user_call',
      'user_id' => 'user',
      'table_id' => 'call',
    ),
  ),
  'edit-calls' => 
  array (
    'model' => 
    array (
      'table' => 'call',
      'table_id' => 'id',
    ),
    'relational' => 
    array (
      'table' => 'user_call',
      'user_id' => 'user',
      'table_id' => 'call',
    ),
  ),
  'remove-calls' => 
  array (
    'model' => 
    array (
      'table' => 'call',
      'table_id' => 'id',
    ),
    'relational' => 
    array (
      'table' => 'user_call',
      'user_id' => 'user',
      'table_id' => 'call',
    ),
  ),
  'assign-consultant' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'review-project' => 
  array (
    'model' => 
    array (
      'table' => 'review',
      'table_id' => 'id',
      'query_id' => 'project',
    ),
    'relational' => 
    array (
      'table' => 'user_review',
      'user_id' => 'user',
      'table_id' => 'review',
    ),
  ),
  'view-any-project' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'edit-published-projects' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'publish-projects' => 
  array (
    'model' => 
    array (
      'table' => 'project',
      'table_id' => 'id',
    ),
    'relational' => 
    array (
      'table' => 'user_project',
      'user_id' => 'user',
      'table_id' => 'project',
    ),
  ),
  'edit-projects' => 
  array (
    'model' => 
    array (
      'table' => 'project',
      'table_id' => 'id',
    ),
    'relational' => 
    array (
      'table' => 'user_project',
      'user_id' => 'user',
      'table_id' => 'project',
    ),
  ),
  'remove-projects' => 
  array (
    'model' => 
    array (
      'table' => 'project',
      'table_id' => 'id',
    ),
    'relational' => 
    array (
      'table' => 'user_project',
      'user_id' => 'user',
      'table_id' => 'project',
    ),
  ),
  'edit-any-project' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'remove-any-project' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'publish-any-project' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'impersonate-owners' => 
  array (
    'model' => 
    array (
      'table' => 'project',
      'table_id' => 'id',
      'query_id' => 'owner',
    ),
    'relational' => 
    array (
      'table' => 'user_project',
      'user_id' => 'user',
      'table_id' => 'project',
    ),
  ),
  'impersonate-users' => 
  array (
    'model' => NULL,
    'relational' => 
    array (
      'table' => 'user_role',
      'user_id' => 'user_id',
      'table_id' => 'role_id',
    ),
  ),
  'impersonate-everyone' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'rebase-users' => 
  array (
    'model' => NULL,
    'relational' => 
    array (
      'table' => 'user_role',
      'user_id' => 'user_id',
      'table_id' => 'role_id',
    ),
  ),
  'admin-any-module-users' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'admin-module-stats' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'admin-module-users' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'admin-module-blog' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'admin-module-stories' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'admin-module-categories' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
  'admin-module-promote' => 
  array (
    'model' => NULL,
    'relational' => NULL,
  ),
);
