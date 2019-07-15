<?php
final class PhabricatorBrazilianPortugueseTranslation extends PhutilTranslation 
{

  public function getLocaleCode() 
  {
    return 'pt_BR';
  }

  protected function getTranslations() 
  {
    return array(
      // Overall
      '%s Day(s) Ago' => [
        '%s dia atrás',
        '%s dias atrás',
        '%s dias atrás',
      ],
      'Yes' => 'Sim',
      'No' => 'Não',
      'Learn More' => 'Aprenda Mais',
      'Log In' => 'Entrar',
      'Register Account' => 'Registrar Conta',
      'Register' => 'Registrar',
      'Create a New Account' => 'Criar Nova Conta',
      'Username/Password' => 'Usuário/Senha',
      'Send Email' => 'Enviar Email',
      'Fullscreen' => 'Tela Cheia',
      'Preamble' => 'Introdução--',
      'Profile' => 'Perfil',
      'Log Out %s' => 'Desconectar %s',
      'Availability' => 'Disponibilidade',
      'Administrator' => 'Administrador',
      'Commits' => 'Commits',
      'Revisions' => 'Revisões',
      'Tasks' => 'Tarefas',
      'Badges' => 'Distintivos',
      'Log Out' => 'Sair',
      'Save Query' => 'Salvar Consulta',
      'Use Results' => 'Usar Resultados',
      'From' => 'De',
      'Via' => 'Via',
      'Via %s' => 'Via %s',
      'Web' => 'Web',
      'Console' => 'Console',
      'Daemon' => 'Daemon',
      'Old' => 'Antigo',
      'New' => 'Novo',
      'Code' => 'Código',
      'Closed' => 'Fechado',
      'Changed Status' => 'Alterou Status',
      'Branch: %s' => 'Branch: %s',
      'Next' => 'Próximo',
      'Commit' => 'Commit',
      'COMMIT' => 'COMMIT',
      'Committed' => 'Commitado',
      'Details' => 'Detalhes',
      'Status' => 'Status',
      'Remove' => 'Remover',
      'Select' => 'Selecionar',
      'Auditors' => 'Auditores',
      'Auditors: %s' => 'Auditores: %s',
      'Home' => 'Início',
      'Branches' => 'Branches',
      'Tags' => 'Tags',
      'Graph' => 'Grafo',
      'History' => 'Histórico',
      'Create Custom Pages' => 'Criar Páginas Customizadas',
      'Explore More Applications' => 'Explorar Mais Aplicações',
      'Customize Menu...' => 'Customizar Menu...',
      'Create' => 'Criar',
      'Create New...' => 'Criar Novo...',
      'Update' => 'Atualizar',
      'Continue' => 'Continuar',
      'Send' => 'Enviar',
      'Submit' => 'Submeter',
      'Save' => 'Salvar',
      'Save Changes' => 'Salvar Alterações',
      'Changes saved.' => 'Alterações salvas.',
      'Changes (%s)' => 'Alterações (%s)',
      'Add Comment' => 'Adicionar Comentário',
      'Add Action...' => 'Adicionar Ação...',
      'Move on Workboard' => 'Mover no Quadro de Trabalho',
      'Change Project Tags' => 'Alterar Tags do Projeto',
      'Change Subscribers' => 'Alterar Contribuintes',
      'Change Status' => 'Mudar Status',
      'Change Priority' => 'Mudar Prioridade',
      'Assign / Claim' => 'Atribuir / Pegar',
      'Take Action' => 'Tomar Ação',
      'Join' => 'Entrar',
      'Code Block' => 'Bloco de Código',
      'Meme' => 'Meme',
      'Cancel' => 'Cancelar',
      'Close' => 'Fechar',
      'No data.' => 'Nenhum dado.',
      'Partial' => 'Parcial',
      'Partial Upload' => 'Upload Parcial',
      'View All' => 'Ver Todos',
      'All' => 'Todos',
      'Title' => 'Título',
      'Action' => 'Ação',
      'Priority' => 'Prioridade',
      'Actions' => 'Ações',
      'View Raw' => 'Ver Raw',
      'PREVIEW' => 'PREVIEW',
      'Preview' => 'Preview',
      'Help' => 'Ajuda',
      'Name' => 'Nome',
      'Document Preview' => 'Preview do Documento',
      'Description Preview' => 'Preview da Descrição',
      'Configure Form' => 'Configurar Formulário',
      'Description' => 'Descrição',
      'Comments' => 'Comentários',
      'Author' => 'Autor',
      'Subscribers' => 'Contribuintes',
      'Required' => 'Requerido',
      'Visible To' => 'Visível Para',
      'Editable By' => 'Editável Por',
      'Policies' => 'Políticas',
      'Default' => 'Padrão',
      '(Default)' => '(Padrão)',
      'Prototype' => 'Protótipo',
      '(Show Details)' => '(Mostrar Detalhes)',
      'Change Details' => 'Alterar Detalhes',
      'Updated' => 'Atualizado',
      'Loading...' => 'Carregando...',
      'None' => 'Nenhum',
      'Flagged' => 'Marcado',
      'Tooltip' => 'Tooltip',
      'Recent Activity' => 'Atividade Recente',
      '%s mentioned this in %s.' => '%s mencionou isso em %s.',
      '%s changed the visibility from %s to %s.' => '%s alterou a visibilidade de %s para %s.',
      '%s changed the edit policy from %s to %s.' => '%s alterou a política de edição de %s para %s.',
      'Choose which language you would like the Phabricator UI to use.' => 'Escolha qual idioma você quer que o Phabricator utilize.',
      'Choose the pronoun you prefer.' => 'Escolha o pronome que você prefere.',
      'Menu Items' => 'Itens do Menu',
      'Current Menu Items' => 'Atuais Itens do Menu',
      'Add New Menu Item...' => 'Adicionar Novo Item do Menu...',
      'Edit Menu Item' => 'Editar Item do Menu',
      'Application' => 'Aplicação',
      'Divider' => 'Разделитель',
      'Form' => 'Formulário',
      'Label' => 'Label',
      'Link' => 'Link',
      'Motivator' => 'Motivador',
      'Documentation' => 'Documentação',
      'Create Menu Item' => 'Criar Item do Menu',
      'This is a visual divider which you can use to separate sections in the menu. It does not have any configurable options.' =>
        'Esse é um divisor visual que você pode usar para separar seções no menu. Ele não tem nenhuma opção configurável.',
      'Motivate your team with inspirational quotes from great minds. This menu item shows a new quote every day.' =>
        'Motive sua equipe com frases inspiradores para grandes mentes. Esse item mostra uma nova frase todo dia.',
      'Source' => 'Fonte',
      'Configure Menu' => 'Configurar Menu',
      'Personal' => 'Pessoal',
      'Personal Settings' => 'Configurações Pessoais',
      'Manage Menu' => 'Gerenciar Menu',
      'Personal Menu Items' => 'Itens do Menu Pessoal',
      'Edit the menu for your personal account.' => 'Edite o menu para sua conta pessoal.',
      'Global Menu Items' => 'Itens do Menu Global',
      'Edit the global default menu for all users.' => 'Edite o menu global padrão para todos os usuários.',
      'Global' => 'Global',
      'You can not post an empty comment.' => 'Você não pode postar um comentário vazio.',
      'This %s already has that view policy.' => 'Esta %s já possui essa política de visualização.',
      'This %s already has that edit policy.' => 'Este %s já possui essa política de edição.',
      'This %s already has that join policy.' => 'Este %s já possui essa política de entrada.',
      'All users are already subscribed to this %s.' => 'Todos os usuários já se inscreveram para esse %s',
      'This object is already in that space.' => 'Esse objeto já está neste espaço.',
      'Edges already exist; transaction has no effect.' => 'Bordas já existem; a transação não tem efeito.',
      'You have not moved this object to any columns it is not already in.' => 'Você não moveu esse objeto para nenhuma coluna onde já não estivesse.',
      'Transaction (of type %s) has no effect.' => 'Transação (do tipo %s) não tem efeito.',
      'Download' => 'Download',
      'Changes from before your most recent comment are hidden.' => 'Alterações anteriores ao seu comentário mais recente estão ocultas.',
      'There are a very large number of changes, so older changes are hidden.' =>
        'Há um número muito grande de alterações, então alterações antigas estão ocultas.',
      'Show Older Changes' => 'Mostrar Alterações Antingas',
      'Weigh In' => 'Pensar em',
      'Set Sail for Adventure' => 'Zarpar para Aventura',
      'Pin Form On Screen' => 'Fixar Formulário na Tela',
      'Diff' => 'Diff',
      'Edited' => 'Editado',
      'Configuration' => 'Configuração',
      'View Form Configurations' => 'Ver Configurações do Formulário',
      'Edit Form Configuration' => 'Editar Configurações do Formulário',

      'Engineering' => 'Engenharia',
      'Choose User Icon' => 'Escolher Item do Usuário',
      'Operations' => 'Operações',
      'Resources' => 'Recursos',
      'Design' => 'Design',
      'Musician' => 'Músico',
      'Spy' => 'Espião',
      'Bot' => 'Robô',
      'Relationships' => 'Relacionamentos',
      'Administration' => 'Administração',
      'Security' => 'Segurança',
      'Logistics' => 'Logística',
      'Research' => 'Pesquisa',
      'Analysis' => 'Análise',
      'Executive' => 'Executivo',
      'Animal' => 'Animal',

      'No daemon(s) with id(s) %s exist!' => array(
        'Não existe nenhum daemon com o id %s!',
        'Não existem daemons com os ids %s!',
      ),

      'These %d configuration value(s) are related:' => array(
        'Esse %d valor de configuração se refere a:--',
        'Esses %d valores de configuração se referem a:',
        'Esses %d valores de configuração se referem a:',
      ),

      '%s Task(s)' => array('Tarefa', 'Tarefas'),

      '%s ERROR(S)' => array('ERRO', 'ERROS'),
      '%d Error(s)' => array('%d Erro', '%d Erros'),
      '%d Warning(s)' => array('%d Aviso', '%d Avisos'),
      '%d Auto-Fix(es)' => array('%d Auto-Fix', '%d Auto-Fixes'),
      '%d Advice(s)' => array('%d Advice', '%d Pieces of Advice'),
      '%d Detail(s)' => array('%d Detalhe', '%d Detalhes'),

      '(%d line(s))' => array('(%d linha)', '(%d linhas)'),

      '%d line(s)' => array('%d linha', '%d linhas'),
      '%d path(s)' => array('%d path', '%d paths'),
      '%d diff(s)' => array('%d diff', '%d diffs'),

      '%s Answer(s)' => array('%s Answer', '%s Answers'),
      'Show %d Comment(s)' => array('Show %d Comment', 'Show %d Comments'),

      '%s DIFF LINK(S)' => array('DIFF LINK', 'DIFF LINKS'),
      'You successfully created %d diff(s).' => array(
        'You successfully created %d diff.',
        'You successfully created %d diffs.',
      ),
      'Diff creation failed; see body for %s error(s).' => array(
        'Diff creation failed; see body for error.',
        'Diff creation failed; see body for errors.',
      ),

      'There are %d raw fact(s) in storage.' => array(
        'There is %d raw fact in storage.',
        'There are %d raw facts in storage.',
      ),

      'There are %d aggregate fact(s) in storage.' => array(
        'There is %d aggregate fact in storage.',
        'There are %d aggregate facts in storage.',
      ),

      '%s Commit(s) Awaiting Audit' => array(
        '%s Commit Awaiting Audit',
        '%s Commits Awaiting Audit',
      ),

      '%s Problem Commit(s)' => array(
        '%s Problem Commit',
        '%s Problem Commits',
      ),

      '%s Review(s) Blocking Others' => array(
        '%s Review Blocking Others',
        '%s Reviews Blocking Others',
      ),

      '%s Review(s) Need Attention' => array(
        '%s Review Needs Attention',
        '%s Reviews Need Attention',
      ),

      '%s Review(s) Waiting on Others' => array(
        '%s Review Waiting on Others',
        '%s Reviews Waiting on Others',
      ),

      '%s Active Review(s)' => array(
        '%s Active Review',
        '%s Active Reviews',
      ),

      '%s Flagged Object(s)' => array(
        '%s Flagged Object',
        '%s Flagged Objects',
      ),

      '%s Object(s) Tracked' => array(
        '%s Object Tracked',
        '%s Objects Tracked',
      ),

      '%s Assigned Task(s)' => array(
        '%s Tarefa atribuída',
        '%s Tarefas atribuídas',
      ),

      'Show %d Lint Message(s)' => array(
        'Show %d Lint Message',
        'Show %d Lint Messages',
      ),
      'Hide %d Lint Message(s)' => array(
        'Hide %d Lint Message',
        'Hide %d Lint Messages',
      ),

      'This is a binary file. It is %s byte(s) in length.' => array(
        'This is a binary file. It is %s byte in length.',
        'This is a binary file. It is %s bytes in length.',
      ),

      '%s Action(s) Have No Effect' => array(
        'A ação não tem efeito',
        'Estas ações não tem efeito',
      ),

      '%s Action(s) With No Effect' => array(
        'Ação sem efeito',
        'Ações sem efeito',
      ),

      'Some of your %s action(s) have no effect:' => array(
        'One of your actions has no effect:',
        'Some of your actions have no effect:',
      ),

      'Apply remaining %d action(s)?' => array(
        'Apply remaining action?',
        'Apply remaining actions?',
      ),

      'Apply %d Other Action(s)' => array(
        'Apply Remaining Action',
        'Apply Remaining Actions',
      ),

      'The %s action(s) you are taking have no effect:' => array(
        'The action you are taking has no effect:',
        'The actions you are taking have no effect:',
      ),

      '%s edited member(s), added %d: %s; removed %d: %s.' =>
        '%s edited members, added: %3$s; removed: %5$s.',

      '%s added %s member(s): %s.' => array(
        array(
          '%s adicionou um mebro: %3$s.',
          '%s adicionou membros: %3$s.',
        ),
      ),

      '%s removed %s member(s): %s.' => array(
        array(
          '%s removed a member: %3$s.',
          '%s removed members: %3$s.',
        ),
      ),

      '%s edited project(s), added %s: %s; removed %s: %s.' =>
        '%s edited projects, added: %3$s; removed: %5$s.',

      '%s added %s project(s): %s.' => array(
        array(
          '%s added a project: %3$s.',
          '%s added projects: %3$s.',
        ),
      ),

      '%s removed %s project(s): %s.' => array(
        array(
          '%s removed a project: %3$s.',
          '%s removed projects: %3$s.',
        ),
      ),

      '%s merged %s task(s): %s.' => array(
        array(
          '%s merged a task: %3$s.',
          '%s merged tasks: %3$s.',
        ),
      ),

      '%s merged %s task(s) %s into %s.' => array(
        array(
          '%s merged %3$s into %4$s.',
          '%s merged tasks %3$s into %4$s.',
        ),
      ),

      '%s added %s voting user(s): %s.' => array(
        array(
          '%s added a voting user: %3$s.',
          '%s added voting users: %3$s.',
        ),
      ),

      '%s removed %s voting user(s): %s.' => array(
        array(
          '%s removed a voting user: %3$s.',
          '%s removed voting users: %3$s.',
        ),
      ),

      '%s added %s subtask(s): %s.' => array(
        array(
          '%s added a subtask: %3$s.',
          '%s added subtasks: %3$s.',
        ),
      ),

      '%s added %s parent task(s): %s.' => array(
        array(
          '%s added a parent task: %3$s.',
          '%s added parent tasks: %3$s.',
        ),
      ),

      '%s removed %s subtask(s): %s.' => array(
        array(
          '%s removed a subtask: %3$s.',
          '%s removed subtasks: %3$s.',
        ),
      ),

      '%s removed %s parent task(s): %s.' => array(
        array(
          '%s removed a parent task: %3$s.',
          '%s removed parent tasks: %3$s.',
        ),
      ),

      '%s added %s subtask(s) for %s: %s.' => array(
        array(
          '%s added a subtask for %3$s: %4$s.',
          '%s added subtasks for %3$s: %4$s.',
        ),
      ),

      '%s added %s parent task(s) for %s: %s.' => array(
        array(
          '%s added a parent task for %3$s: %4$s.',
          '%s added parent tasks for %3$s: %4$s.',
        ),
      ),

      '%s removed %s subtask(s) for %s: %s.' => array(
        array(
          '%s removed a subtask for %3$s: %4$s.',
          '%s removed subtasks for %3$s: %4$s.',
        ),
      ),

      '%s removed %s parent task(s) for %s: %s.' => array(
        array(
          '%s removed a parent task for %3$s: %4$s.',
          '%s removed parent tasks for %3$s: %4$s.',
        ),
      ),

      '%s edited subtask(s), added %s: %s; removed %s: %s.' =>
        '%s edited subtasks, added: %3$s; removed: %5$s.',

      '%s edited subtask(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s edited subtasks for %s, added: %4$s; removed: %6$s.',

      '%s edited parent task(s), added %s: %s; removed %s: %s.' =>
        '%s edited parent tasks, added: %3$s; removed: %5$s.',

      '%s edited parent task(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s edited parent tasks for %s, added: %4$s; removed: %6$s.',

      '%s edited answer(s), added %s: %s; removed %d: %s.' =>
        '%s edited answers, added: %3$s; removed: %5$s.',

      '%s added %s answer(s): %s.' => array(
        array(
          '%s added an answer: %3$s.',
          '%s added answers: %3$s.',
        ),
      ),

      '%s removed %s answer(s): %s.' => array(
        array(
          '%s removed a answer: %3$s.',
          '%s removed answers: %3$s.',
        ),
      ),

     '%s edited question(s), added %s: %s; removed %s: %s.' =>
        '%s edited questions, added: %3$s; removed: %5$s.',

      '%s added %s question(s): %s.' => array(
        array(
          '%s added a question: %3$s.',
          '%s added questions: %3$s.',
        ),
      ),

      '%s removed %s question(s): %s.' => array(
        array(
          '%s removed a question: %3$s.',
          '%s removed questions: %3$s.',
        ),
      ),

      '%s edited mock(s), added %s: %s; removed %s: %s.' =>
        '%s edited mocks, added: %3$s; removed: %5$s.',

      '%s added %s mock(s): %s.' => array(
        array(
          '%s added a mock: %3$s.',
          '%s added mocks: %3$s.',
        ),
      ),

      '%s removed %s mock(s): %s.' => array(
        array(
          '%s removed a mock: %3$s.',
          '%s removed mocks: %3$s.',
        ),
      ),

      '%s added %s task(s): %s.' => array(
        array(
          '%s added a task: %3$s.',
          '%s added tasks: %3$s.',
        ),
      ),

      '%s removed %s task(s): %s.' => array(
        array(
          '%s removed a task: %3$s.',
          '%s removed tasks: %3$s.',
        ),
      ),

      '%s edited file(s), added %s: %s; removed %s: %s.' =>
        '%s edited files, added: %3$s; removed: %5$s.',

      '%s added %s file(s): %s.' => array(
        array(
          '%s added a file: %3$s.',
          '%s added files: %3$s.',
        ),
      ),

      '%s removed %s file(s): %s.' => array(
        array(
          '%s removed a file: %3$s.',
          '%s removed files: %3$s.',
        ),
      ),

      '%s edited contributor(s), added %s: %s; removed %s: %s.' =>
        '%s edited contributors, added: %3$s; removed: %5$s.',

      '%s added %s contributor(s): %s.' => array(
        array(
          '%s added a contributor: %3$s.',
          '%s added contributors: %3$s.',
        ),
      ),

      '%s removed %s contributor(s): %s.' => array(
        array(
          '%s removed a contributor: %3$s.',
          '%s removed contributors: %3$s.',
        ),
      ),

      '%s edited %s reviewer(s), added %s: %s; removed %s: %s.' =>
        '%s edited reviewers, added: %4$s; removed: %6$s.',

      '%s edited %s reviewer(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s edited reviewers for %3$s, added: %5$s; removed: %7$s.',

      '%s added %s reviewer(s): %s.' => array(
        array(
          '%s added a reviewer: %3$s.',
          '%s added reviewers: %3$s.',
        ),
      ),

      '%s added %s reviewer(s) for %s: %s.' => array(
        array(
          '%s added a reviewer for %3$s: %4$s.',
          '%s added reviewers for %3$s: %4$s.',
        ),
      ),

      '%s removed %s reviewer(s): %s.' => array(
        array(
          '%s removed a reviewer: %3$s.',
          '%s removed reviewers: %3$s.',
        ),
      ),

      '%s removed %s reviewer(s) for %s: %s.' => array(
        array(
          '%s removed a reviewer for %3$s: %4$s.',
          '%s removed reviewers for %3$s: %4$s.',
        ),
      ),

      '%d other(s)' => array(
        '1 other',
        '%d others',
      ),

      '%s edited subscriber(s), added %d: %s; removed %d: %s.' =>
        '%s edited subscribers, added: %3$s; removed: %5$s.',

      '%s added %d subscriber(s): %s.' => array(
        array(
          '%s Adicionou um contribuinte  : %3$s.',
          '%s Adicionou contribuintes: %3$s.',
        ),
      ),

      '%s removed %d subscriber(s): %s.' => array(
        array(
          '%s removeu um contribuinte: %3$s.',
          '%s removeu contribuintes: %3$s.',
        ),
      ),

      '%s edited watcher(s), added %s: %s; removed %d: %s.' =>
        '%s edited watchers, added: %3$s; removed: %5$s.',

      '%s added %s watcher(s): %s.' => array(
        array(
          '%s adicionou um observador: %3$s.',
          '%s adicionou observadores: %3$s.',
        ),
      ),

      '%s removed %s watcher(s): %s.' => array(
        array(
          '%s removeu um observador: %3$s.',
          '%s removeu observadores: %3$s.',
        ),
      ),

      '%s edited participant(s), added %d: %s; removed %d: %s.' =>
        '%s edited participants, added: %3$s; removed: %5$s.',

      '%s added %d participant(s): %s.' => array(
        array(
          '%s added a participant: %3$s.',
          '%s added participants: %3$s.',
        ),
      ),

      '%s removed %d participant(s): %s.' => array(
        array(
          '%s removed a participant: %3$s.',
          '%s removed participants: %3$s.',
        ),
      ),

      '%s edited image(s), added %d: %s; removed %d: %s.' =>
        '%s edited images, added: %3$s; removed: %5$s',

      '%s added %d image(s): %s.' => array(
        array(
          '%s added an image: %3$s.',
          '%s added images: %3$s.',
        ),
      ),

      '%s removed %d image(s): %s.' => array(
        array(
          '%s removed an image: %3$s.',
          '%s removed images: %3$s.',
        ),
      ),

      '%s Line(s)' => array(
        '%s Line',
        '%s Lines',
      ),

      'Indexing %d object(s) of type %s.' => array(
        'Indexing %d object of type %s.',
        'Indexing %d object of type %s.',
      ),

      'Run these %d command(s):' => array(
        'Run this command:',
        'Run these commands:',
      ),

      'Install these %d PHP extension(s):' => array(
        'Install this PHP extension:',
        'Install these PHP extensions:',
      ),

      'The current Phabricator configuration has these %d value(s):' => array(
        'The current Phabricator configuration has this value:',
        'The current Phabricator configuration has these values:',
      ),

      'The current MySQL configuration has these %d value(s):' => array(
        'The current MySQL configuration has this value:',
        'The current MySQL configuration has these values:',
      ),

      'You can update these %d value(s) here:' => array(
        'You can update this value here:',
        'You can update these values here:',
      ),

      'The current PHP configuration has these %d value(s):' => array(
        'The current PHP configuration has this value:',
        'The current PHP configuration has these values:',
      ),

      'To update these %d value(s), edit your PHP configuration file.' => array(
        'To update this %d value, edit your PHP configuration file.',
        'To update these %d values, edit your PHP configuration file.',
      ),

      'To update these %d value(s), edit your PHP configuration file, located '.
      'here:' => array(
        'To update this value, edit your PHP configuration file, located '.
        'here:',
        'To update these values, edit your PHP configuration file, located '.
        'here:',
      ),

      'PHP also loaded these %s configuration file(s):' => array(
        'PHP also loaded this configuration file:',
        'PHP also loaded these configuration files:',
      ),

      '%s added %d inline comment(s).' => array(
        array(
          '%s added an inline comment.',
          '%s added inline comments.',
        ),
      ),

      '%s comment(s)' => array('%s comment', '%s comments'),
      '%s rejection(s)' => array('%s rejection', '%s rejections'),
      '%s update(s)' => array('%s update', '%s updates'),

      'This configuration value is defined in these %d '.
      'configuration source(s): %s.' => array(
        'This configuration value is defined in this '.
        'configuration source: %2$s.',
        'This configuration value is defined in these %d '.
        'configuration sources: %s.',
      ),

      '%s Open Pull Request(s)' => array(
        '%s Open Pull Request',
        '%s Open Pull Requests',
      ),

      'Stale (%s day(s))' => array(
        'Stale (%s day)',
        'Stale (%s days)',
      ),

      'Old (%s day(s))' => array(
        'Old (%s day)',
        'Old (%s days)',
      ),

      '%s Commit(s)' => array(
        '%s Commit',
        '%s Commits',
      ),

      '%s attached %d file(s): %s.' => array(
        array(
          '%s attached a file: %3$s.',
          '%s attached files: %3$s.',
        ),
      ),

      '%s detached %d file(s): %s.' => array(
        array(
          '%s detached a file: %3$s.',
          '%s detached files: %3$s.',
        ),
      ),

      '%s changed file(s), attached %d: %s; detached %d: %s.' =>
        '%s changed files, attached: %3$s; detached: %5$s.',


      '%s added %s parent revision(s): %s.' => array(
        array(
          '%s added a parent revision: %3$s.',
          '%s added parent revisions: %3$s.',
        ),
      ),

      '%s added %s parent revision(s) for %s: %s.' => array(
        array(
          '%s added a parent revision for %3$s: %4$s.',
          '%s added parent revisions for %3$s: %4$s.',
        ),
      ),

      '%s removed %s parent revision(s): %s.' => array(
        array(
          '%s removed a parent revision: %3$s.',
          '%s removed parent revisions: %3$s.',
        ),
      ),

      '%s removed %s parent revision(s) for %s: %s.' => array(
        array(
          '%s removed a parent revision for %3$s: %4$s.',
          '%s removed parent revisions for %3$s: %4$s.',
        ),
      ),

      '%s edited parent revision(s), added %s: %s; removed %s: %s.' => array(
        '%s edited parent revisions, added: %3$s; removed: %5$s.',
      ),

      '%s edited parent revision(s) for %s, '.
      'added %s: %s; removed %s: %s.' => array(
        '%s edited parent revisions for %s, added: %3$s; removed: %5$s.',
      ),

      '%s added %s child revision(s): %s.' => array(
        array(
          '%s added a child revision: %3$s.',
          '%s added child revisions: %3$s.',
        ),
      ),

      '%s added %s child revision(s) for %s: %s.' => array(
        array(
          '%s added a child revision for %3$s: %4$s.',
          '%s added child revisions for %3$s: %4$s.',
        ),
      ),

      '%s removed %s child revision(s): %s.' => array(
        array(
          '%s removed a child revision: %3$s.',
          '%s removed child revisions: %3$s.',
        ),
      ),

      '%s removed %s child revision(s) for %s: %s.' => array(
        array(
          '%s removed a child revision for %3$s: %4$s.',
          '%s removed child revisions for %3$s: %4$s.',
        ),
      ),

      '%s edited child revision(s), added %s: %s; removed %s: %s.' => array(
        '%s edited child revisions, added: %3$s; removed: %5$s.',
      ),

      '%s edited child revision(s) for %s, '.
      'added %s: %s; removed %s: %s.' => array(
        '%s edited child revisions for %s, added: %3$s; removed: %5$s.',
      ),

      '%s added %s commit(s): %s.' => array(
        array(
          '%s added a commit: %3$s.',
          '%s added commits: %3$s.',
        ),
      ),

      '%s removed %s commit(s): %s.' => array(
        array(
          '%s removed a commit: %3$s.',
          '%s removed commits: %3$s.',
        ),
      ),

      '%s edited commit(s), added %s: %s; removed %s: %s.' =>
        '%s edited commits, added %3$s; removed %5$s.',

      '%s added %s reverted change(s): %s.' => array(
        array(
          '%s added a reverted change: %3$s.',
          '%s added reverted changes: %3$s.',
        ),
      ),

      '%s removed %s reverted change(s): %s.' => array(
        array(
          '%s removed a reverted change: %3$s.',
          '%s removed reverted changes: %3$s.',
        ),
      ),

      '%s edited reverted change(s), added %s: %s; removed %s: %s.' =>
        '%s edited reverted changes, added %3$s; removed %5$s.',

      '%s added %s reverted change(s) for %s: %s.' => array(
        array(
          '%s added a reverted change for %3$s: %4$s.',
          '%s added reverted changes for %3$s: %4$s.',
        ),
      ),

      '%s removed %s reverted change(s) for %s: %s.' => array(
        array(
          '%s removed a reverted change for %3$s: %4$s.',
          '%s removed reverted changes for %3$s: %4$s.',
        ),
      ),

      '%s edited reverted change(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s edited reverted changes for %2$s, added %4$s; removed %6$s.',

      '%s added %s reverting change(s): %s.' => array(
        array(
          '%s added a reverting change: %3$s.',
          '%s added reverting changes: %3$s.',
        ),
      ),

      '%s removed %s reverting change(s): %s.' => array(
        array(
          '%s removed a reverting change: %3$s.',
          '%s removed reverting changes: %3$s.',
        ),
      ),

      '%s edited reverting change(s), added %s: %s; removed %s: %s.' =>
        '%s edited reverting changes, added %3$s; removed %5$s.',

      '%s added %s reverting change(s) for %s: %s.' => array(
        array(
          '%s added a reverting change for %3$s: %4$s.',
          '%s added reverting changes for %3$s: %4$s.',
        ),
      ),

      '%s removed %s reverting change(s) for %s: %s.' => array(
        array(
          '%s removed a reverting change for %3$s: %4$s.',
          '%s removed reverting changes for %3$s: %4$s.',
        ),
      ),

      '%s edited reverting change(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s edited reverting changes for %s, added %4$s; removed %6$s.',

      '%s changed project member(s), added %d: %s; removed %d: %s.' =>
        '%s changed project members, added %3$s; removed %5$s.',

      '%s added %d project member(s): %s.' => array(
        array(
          '%s added a member: %3$s.',
          '%s added members: %3$s.',
        ),
      ),

      '%s removed %d project member(s): %s.' => array(
        array(
          '%s removed a member: %3$s.',
          '%s removed members: %3$s.',
        ),
      ),

      '%s project hashtag(s) are already used by other projects: %s.' => array(
        'Project hashtag "%2$s" is already used by another project.',
        'Some project hashtags are already used by other projects: %2$s.',
      ),

      '%s changed project hashtag(s), added %d: %s; removed %d: %s.' =>
        '%s changed project hashtags, added %3$s; removed %5$s.',

      'Hashtags must contain at least one letter or number. %s '.
      'project hashtag(s) are invalid: %s.' => array(
        'Hashtags must contain at least one letter or number. The '.
        'hashtag "%2$s" is not valid.',
        'Hashtags must contain at least one letter or number. These '.
        'hashtags are invalid: %2$s.',
      ),

      '%s added %d project hashtag(s): %s.' => array(
        array(
          '%s added a hashtag: %3$s.',
          '%s added hashtags: %3$s.',
        ),
      ),

      '%s removed %d project hashtag(s): %s.' => array(
        array(
          '%s removed a hashtag: %3$s.',
          '%s removed hashtags: %3$s.',
        ),
      ),

      '%s changed %s hashtag(s), added %d: %s; removed %d: %s.' =>
        '%s changed hashtags for %s, added %4$s; removed %6$s.',

      '%s added %d %s hashtag(s): %s.' => array(
        array(
          '%s added a hashtag to %3$s: %4$s.',
          '%s added hashtags to %3$s: %4$s.',
        ),
      ),

      '%s removed %d %s hashtag(s): %s.' => array(
        array(
          '%s removed a hashtag from %3$s: %4$s.',
          '%s removed hashtags from %3$s: %4$s.',
        ),
      ),

      '%d User(s) Need Approval' => array(
        '%d User Needs Approval',
        '%d Users Need Approval',
      ),

      '%s, %s line(s)' => array(
        array(
          '%s, %s line',
          '%s, %s lines',
        ),
      ),

      '%s pushed %d commit(s) to %s.' => array(
        array(
          '%s pushed a commit to %3$s.',
          '%s pushed %d commits to %s.',
        ),
      ),

      '%s commit(s)' => array(
        '1 commit',
        '%s commits',
      ),

      '%s removed %s JIRA issue(s): %s.' => array(
        array(
          '%s removed a JIRA issue: %3$s.',
          '%s removed JIRA issues: %3$s.',
        ),
      ),

      '%s added %s JIRA issue(s): %s.' => array(
        array(
          '%s added a JIRA issue: %3$s.',
          '%s added JIRA issues: %3$s.',
        ),
      ),

      '%s added %s required legal document(s): %s.' => array(
        array(
          '%s added a required legal document: %3$s.',
          '%s added required legal documents: %3$s.',
        ),
      ),

      '%s updated JIRA issue(s): added %s %s; removed %d %s.' =>
        '%s updated JIRA issues: added %3$s; removed %5$s.',

      '%s edited %s task(s), added %s: %s; removed %s: %s.' =>
        '%s edited tasks, added %4$s; removed %6$s.',

      '%s added %s task(s) to %s: %s.' => array(
        array(
          '%s added a task to %3$s: %4$s.',
          '%s added tasks to %3$s: %4$s.',
        ),
      ),

      '%s removed %s task(s) from %s: %s.' => array(
        array(
          '%s removed a task from %3$s: %4$s.',
          '%s removed tasks from %3$s: %4$s.',
        ),
      ),

      '%s edited %s task(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s edited tasks for %3$s, added: %5$s; removed %7$s.',

      '%s edited %s commit(s), added %s: %s; removed %s: %s.' =>
        '%s edited commits, added %4$s; removed %6$s.',

      '%s added %s commit(s) to %s: %s.' => array(
        array(
          '%s added a commit to %3$s: %4$s.',
          '%s added commits to %3$s: %4$s.',
        ),
      ),

      '%s removed %s commit(s) from %s: %s.' => array(
        array(
          '%s removed a commit from %3$s: %4$s.',
          '%s removed commits from %3$s: %4$s.',
        ),
      ),

      '%s edited %s commit(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s edited commits for %3$s, added: %5$s; removed %7$s.',

      '%s added %s revision(s): %s.' => array(
        array(
          '%s added a revision: %3$s.',
          '%s added revisions: %3$s.',
        ),
      ),

      '%s removed %s revision(s): %s.' => array(
        array(
          '%s removed a revision: %3$s.',
          '%s removed revisions: %3$s.',
        ),
      ),

      '%s edited %s revision(s), added %s: %s; removed %s: %s.' =>
        '%s edited revisions, added %4$s; removed %6$s.',

      '%s added %s revision(s) to %s: %s.' => array(
        array(
          '%s added a revision to %3$s: %4$s.',
          '%s added revisions to %3$s: %4$s.',
        ),
      ),

      '%s removed %s revision(s) from %s: %s.' => array(
        array(
          '%s removed a revision from %3$s: %4$s.',
          '%s removed revisions from %3$s: %4$s.',
        ),
      ),

      '%s edited %s revision(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s edited revisions for %3$s, added: %5$s; removed %7$s.',

      '%s edited %s project(s), added %s: %s; removed %s: %s.' =>
        '%s edited projects, added %4$s; removed %6$s.',

      '%s added %s project(s) to %s: %s.' => array(
        array(
          '%s added a project to %3$s: %4$s.',
          '%s added projects to %3$s: %4$s.',
        ),
      ),

      '%s removed %s project(s) from %s: %s.' => array(
        array(
          '%s removed a project from %3$s: %4$s.',
          '%s removed projects from %3$s: %4$s.',
        ),
      ),

      '%s edited %s project(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s edited projects for %3$s, added: %5$s; removed %7$s.',

      '%s added %s panel(s): %s.' => array(
        array(
          '%s added a panel: %3$s.',
          '%s added panels: %3$s.',
        ),
      ),

      '%s removed %s panel(s): %s.' => array(
        array(
          '%s removed a panel: %3$s.',
          '%s removed panels: %3$s.',
        ),
      ),

      '%s edited %s panel(s), added %s: %s; removed %s: %s.' =>
        '%s edited panels, added %4$s; removed %6$s.',

      '%s added %s dashboard(s): %s.' => array(
        array(
          '%s added a dashboard: %3$s.',
          '%s added dashboards: %3$s.',
        ),
      ),

      '%s removed %s dashboard(s): %s.' => array(
        array(
          '%s removed a dashboard: %3$s.',
          '%s removed dashboards: %3$s.',
        ),
      ),

      '%s edited %s dashboard(s), added %s: %s; removed %s: %s.' =>
        '%s edited dashboards, added %4$s; removed %6$s.',

      '%s added %s edge(s): %s.' => array(
        array(
          '%s added an edge: %3$s.',
          '%s added edges: %3$s.',
        ),
      ),

      '%s added %s edge(s) to %s: %s.' => array(
        array(
          '%s added an edge to %3$s: %4$s.',
          '%s added edges to %3$s: %4$s.',
        ),
      ),

      '%s removed %s edge(s): %s.' => array(
        array(
          '%s removed an edge: %3$s.',
          '%s removed edges: %3$s.',
        ),
      ),

      '%s removed %s edge(s) from %s: %s.' => array(
        array(
          '%s removed an edge from %3$s: %4$s.',
          '%s removed edges from %3$s: %4$s.',
        ),
      ),

      '%s edited edge(s), added %s: %s; removed %s: %s.' =>
        '%s edited edges, added: %3$s; removed: %5$s.',

      '%s edited %s edge(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s edited edges for %3$s, added: %5$s; removed %7$s.',

      '%s added %s member(s) for %s: %s.' => array(
        array(
          '%s added a member for %3$s: %4$s.',
          '%s added members for %3$s: %4$s.',
        ),
      ),

      '%s removed %s member(s) for %s: %s.' => array(
        array(
          '%s removed a member for %3$s: %4$s.',
          '%s removed members for %3$s: %4$s.',
        ),
      ),

      '%s edited %s member(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s edited members for %3$s, added: %5$s; removed %7$s.',

      '%d related link(s):' => array(
        'Related link:',
        'Related links:',
      ),

      'You have %d unpaid invoice(s).' => array(
        'You have an unpaid invoice.',
        'You have unpaid invoices.',
      ),

      'The configurations differ in the following %s way(s):' => array(
        'The configurations differ:',
        'The configurations differ in these ways:',
      ),

      'Phabricator is configured with an email domain whitelist (in %s), so '.
      'only users with a verified email address at one of these %s '.
      'allowed domain(s) will be able to register an account: %s' => array(
        array(
          'Phabricator is configured with an email domain whitelist (in %s), '.
          'so only users with a verified email address at %3$s will be '.
          'allowed to register an account.',
          'Phabricator is configured with an email domain whitelist (in %s), '.
          'so only users with a verified email address at one of these '.
          'allowed domains will be able to register an account: %3$s',
        ),
      ),

      'Show First %d Line(s)' => array(
        'Show First Line',
        'Show First %d Lines',
      ),

      "\xE2\x96\xB2 Show %d Line(s)" => array(
        "\xE2\x96\xB2 Show Line",
        "\xE2\x96\xB2 Show %d Lines",
      ),

      'Show All %d Line(s)' => array(
        'Show Line',
        'Show All %d Lines',
      ),

      "\xE2\x96\xBC Show %d Line(s)" => array(
        "\xE2\x96\xBC Show Line",
        "\xE2\x96\xBC Show %d Lines",
      ),

      'Show Last %d Line(s)' => array(
        'Show Last Line',
        'Show Last %d Lines',
      ),

      '%s marked %s inline comment(s) as done and %s inline comment(s) as '.
      'not done.' => array(
        array(
          array(
            '%s marked an inline comment as done and an inline comment '.
            'as not done.',
            '%s marked an inline comment as done and %3$s inline comments '.
            'as not done.',
          ),
          array(
            '%s marked %s inline comments as done and an inline comment '.
            'as not done.',
            '%s marked %s inline comments as done and %s inline comments '.
            'as done.',
          ),
        ),
      ),

      '%s marked %s inline comment(s) as done.' => array(
        array(
          '%s marked an inline comment as done.',
          '%s marked %s inline comments as done.',
        ),
      ),

      '%s marked %s inline comment(s) as not done.' => array(
        array(
          '%s marked an inline comment as not done.',
          '%s marked %s inline comments as not done.',
        ),
      ),

      'These %s object(s) will be destroyed forever:' => array(
        'This object will be destroyed forever:',
        'These objects will be destroyed forever:',
      ),

      'Are you absolutely certain you want to destroy these %s '.
      'object(s)?' => array(
        'Are you absolutely certain you want to destroy this object?',
        'Are you absolutely certain you want to destroy these objects?',
      ),

      '%s added %s owner(s): %s.' => array(
        array(
          '%s added an owner: %3$s.',
          '%s added owners: %3$s.',
        ),
      ),

      '%s removed %s owner(s): %s.' => array(
        array(
          '%s removed an owner: %3$s.',
          '%s removed owners: %3$s.',
        ),
      ),

      '%s changed %s package owner(s), added %s: %s; removed %s: %s.' => array(
        '%s changed package owners, added: %4$s; removed: %6$s.',
      ),

      'Found %s book(s).' => array(
        'Found %s book.',
        'Found %s books.',
      ),
      'Found %s file(s)...' => array(
        'Found %s file...',
        'Found %s files...',
      ),
      'Found %s file(s) in project.' => array(
        'Found %s file in project.',
        'Found %s files in project.',
      ),
      'Found %s unatomized, uncached file(s).' => array(
        'Found %s unatomized, uncached file.',
        'Found %s unatomized, uncached files.',
      ),
      'Found %s file(s) to atomize.' => array(
        'Found %s file to atomize.',
        'Found %s files to atomize.',
      ),
      'Atomizing %s file(s).' => array(
        'Atomizing %s file.',
        'Atomizing %s files.',
      ),
      'Creating %s document(s).' => array(
        'Creating %s document.',
        'Creating %s documents.',
      ),
      'Deleting %s document(s).' => array(
        'Deleting %s document.',
        'Deleting %s documents.',
      ),
      'Found %s obsolete atom(s) in graph.' => array(
        'Found %s obsolete atom in graph.',
        'Found %s obsolete atoms in graph.',
      ),
      'Found %s new atom(s) in graph.' => array(
        'Found %s new atom in graph.',
        'Found %s new atoms in graph.',
      ),
      'This call takes %s parameter(s), but only %s are documented.' => array(
        array(
          'This call takes %s parameter, but only %s is documented.',
          'This call takes %s parameter, but only %s are documented.',
        ),
        array(
          'This call takes %s parameters, but only %s is documented.',
          'This call takes %s parameters, but only %s are documented.',
        ),
      ),

      '%s Passed Test(s)' => '%s Passed',
      '%s Failed Test(s)' => '%s Failed',
      '%s Skipped Test(s)' => '%s Skipped',
      '%s Broken Test(s)' => '%s Broken',
      '%s Unsound Test(s)' => '%s Unsound',
      '%s Other Test(s)' => '%s Other',

      '%s Bulk Task(s)' => array(
        '%s Task',
        '%s Tasks',
      ),

      '%s added %s badge(s) for %s: %s.' => array(
        array(
          '%s added a badge for %s: %3$s.',
          '%s added badges for %s: %3$s.',
        ),
      ),
      '%s added %s badge(s): %s.' => array(
        array(
          '%s added a badge: %3$s.',
          '%s added badges: %3$s.',
        ),
      ),
      '%s awarded %s recipient(s) for %s: %s.' => array(
        array(
          '%s awarded %3$s to %4$s.',
          '%s awarded %3$s to multiple recipients: %4$s.',
        ),
      ),
      '%s awarded %s recipients(s): %s.' => array(
        array(
          '%s awarded a recipient: %3$s.',
          '%s awarded multiple recipients: %3$s.',
        ),
      ),
      '%s edited badge(s) for %s, added %s: %s; revoked %s: %s.' => array(
        array(
          '%s edited badges for %s, added %s: %s; revoked %s: %s.',
          '%s edited badges for %s, added %s: %s; revoked %s: %s.',
        ),
      ),
      '%s edited badge(s), added %s: %s; revoked %s: %s.' => array(
        array(
          '%s edited badges, added %s: %s; revoked %s: %s.',
          '%s edited badges, added %s: %s; revoked %s: %s.',
        ),
      ),
      '%s edited recipient(s) for %s, awarded %s: %s; revoked %s: %s.' => array(
        array(
          '%s edited recipients for %s, awarded %s: %s; revoked %s: %s.',
          '%s edited recipients for %s, awarded %s: %s; revoked %s: %s.',
        ),
      ),
      '%s edited recipient(s), awarded %s: %s; revoked %s: %s.' => array(
        array(
          '%s edited recipients, awarded %s: %s; revoked %s: %s.',
          '%s edited recipients, awarded %s: %s; revoked %s: %s.',
        ),
      ),
      '%s revoked %s badge(s) for %s: %s.' => array(
        array(
          '%s revoked a badge for %3$s: %4$s.',
          '%s revoked multiple badges for %3$s: %4$s.',
        ),
      ),
      '%s revoked %s badge(s): %s.' => array(
        array(
          '%s revoked a badge: %3$s.',
          '%s revoked multiple badges: %3$s.',
        ),
      ),
      '%s revoked %s recipient(s) for %s: %s.' => array(
        array(
          '%s revoked %3$s from %4$s.',
          '%s revoked multiple recipients for %3$s: %4$s.',
        ),
      ),

      '%s revoked %s recipients(s): %s.' => array(
        array(
          '%s revoked a recipient: %3$s.',
          '%s revoked multiple recipients: %3$s.',
        ),
      ),

      '%s automatically subscribed target(s) were not affected: %s.' => array(
        'An automatically subscribed target was not affected: %2$s.',
        'Automatically subscribed targets were not affected: %2$s.',
      ),

      'Declined to resubscribe %s target(s) because they previously '.
      'unsubscribed: %s.' => array(
        'Delined to resubscribe a target because they previously '.
        'unsubscribed: %2$s.',
        'Declined to resubscribe targets because they previously '.
        'unsubscribed: %2$s.',
      ),

      '%s target(s) are not subscribed: %s.' => array(
        'A target is not subscribed: %2$s.',
        'Targets are not subscribed: %2$s.',
      ),

      '%s target(s) are already subscribed: %s.' => array(
        'A target is already subscribed: %2$s.',
        'Targets are already subscribed: %2$s.',
      ),

      'Added %s subscriber(s): %s.' => array(
        'Added a subscriber: %2$s.',
        'Added subscribers: %2$s.',
      ),

      'Removed %s subscriber(s): %s.' => array(
        'Removed a subscriber: %2$s.',
        'Removed subscribers: %2$s.',
      ),

      'Queued email to be delivered to %s target(s): %s.' => array(
        'Queued email to be delivered to target: %2$s.',
        'Queued email to be delivered to targets: %2$s.',
      ),

      'Queued email to be delivered to %s target(s), ignoring their '.
      'notification preferences: %s.' => array(
        'Queued email to be delivered to target, ignoring notification '.
        'preferences: %2$s.',
        'Queued email to be delivered to targets, ignoring notification '.
        'preferences: %2$s.',
      ),

      '%s project(s) are not associated: %s.' => array(
        'A project is not associated: %2$s.',
        'Projects are not associated: %2$s.',
      ),

      '%s project(s) are already associated: %s.' => array(
        'A project is already associated: %2$s.',
        'Projects are already associated: %2$s.',
      ),

      'Added %s project(s): %s.' => array(
        'Added a project: %2$s.',
        'Added projects: %2$s.',
      ),

      'Removed %s project(s): %s.' => array(
        'Removed a project: %2$s.',
        'Removed projects: %2$s.',
      ),

      'Added %s reviewer(s): %s.' => array(
        'Added a reviewer: %2$s.',
        'Added reviewers: %2$s.',
      ),

      'Added %s blocking reviewer(s): %s.' => array(
        'Added a blocking reviewer: %2$s.',
        'Added blocking reviewers: %2$s.',
      ),

      'Required %s signature(s): %s.' => array(
        'Required a signature: %2$s.',
        'Required signatures: %2$s.',
      ),

      'Started %s build(s): %s.' => array(
        'Started a build: %2$s.',
        'Started builds: %2$s.',
      ),

      'Added %s auditor(s): %s.' => array(
        'Added an auditor: %2$s.',
        'Added auditors: %2$s.',
      ),

      '%s target(s) do not have permission to see this object: %s.' => array(
        'A target does not have permission to see this object: %2$s.',
        'Targets do not have permission to see this object: %2$s.',
      ),

      'This action has no effect on %s target(s): %s.' => array(
        'This action has no effect on a target: %2$s.',
        'This action has no effect on targets: %2$s.',
      ),

      'Mail sent in the last %s day(s).' => array(
        'Mail sent in the last day.',
        'Mail sent in the last %s days.',
      ),

      '%s Day(s)' => array(
        '%s Day',
        '%s Days',
      ),
      '%s Day(s) Ago' => array(
        '%s Day Ago',
        '%s Days Ago',
      ),

      'Setting retention policy for %s to %s day(s).' => array(
        array(
          'Setting retention policy for %s to one day.',
          'Setting retention policy for %s to %s days.',
        ),
      ),

      'Waiting %s second(s) for lease to activate.' => array(
        'Waiting a second for lease to activate.',
        'Waiting %s seconds for lease to activate.',
      ),

      '%s changed %s automation blueprint(s), added %s: %s; removed %s: %s.' =>
        '%s changed automation blueprints, added: %4$s; removed: %6$s.',

      '%s added %s automation blueprint(s): %s.' => array(
        array(
          '%s added an automation blueprint: %3$s.',
          '%s added automation blueprints: %3$s.',
        ),
      ),

      '%s removed %s automation blueprint(s): %s.' => array(
        array(
          '%s removed an automation blueprint: %3$s.',
          '%s removed automation blueprints: %3$s.',
        ),
      ),

      'WARNING: There are %s unapproved authorization(s)!' => array(
        'WARNING: There is an unapproved authorization!',
        'WARNING: There are unapproved authorizations!',
      ),

      'Found %s Open Resource(s)' => array(
        'Found %s Open Resource',
        'Found %s Open Resources',
      ),

      '%s Open Resource(s) Remain' => array(
        '%s Open Resource Remain',
        '%s Open Resources Remain',
      ),

      'Found %s Blueprint(s)' => array(
        'Found %s Blueprint',
        'Found %s Blueprints',
      ),

      '%s Blueprint(s) Can Allocate' => array(
        '%s Blueprint Can Allocate',
        '%s Blueprints Can Allocate',
      ),

      '%s Blueprint(s) Enabled' => array(
        '%s Blueprint Enabled',
        '%s Blueprints Enabled',
      ),

      '%s Event(s)' => array(
        '%s Event',
        '%s Events',
      ),

      '%s Unit(s)' => array(
        '%s Unit',
        '%s Units',
      ),

      'QUEUEING TASKS (%s Commit(s)):' => array(
        'QUEUEING TASKS (%s Commit):',
        'QUEUEING TASKS (%s Commits):',
      ),

      'Found %s total commit(s); updating...' => array(
        'Found %s total commit; updating...',
        'Found %s total commits; updating...',
      ),

      'Not enough process slots to schedule the other %s '.
      'repository(s) for updates yet.' => array(
        'Not enough process slots to schedule the other '.'
        repository for update yet.',
        'Not enough process slots to schedule the other %s '.
        'repositories for updates yet.',
      ),


      '%s updated %s, added %d: %s.' =>
        '%s updated %s, added: %4$s.',

      '%s updated %s, removed %s: %s.' =>
        '%s updated %s, removed: %4$s.',

      '%s updated %s, added %s: %s; removed %s: %s.' =>
        '%s updated %s, added: %4$s; removed: %6$s.',

      '%s updated %s for %s, added %d: %s.' =>
        '%s updated %s for %s, added: %5$s.',

      '%s updated %s for %s, removed %s: %s.' =>
        '%s updated %s for %s, removed: %5$s.',

      '%s updated %s for %s, added %s: %s; removed %s: %s.' =>
        '%s updated %s for %s, added: %5$s; removed; %7$s.',

      'Permanently destroyed %s object(s).' => array(
        'Permanently destroyed %s object.',
        'Permanently destroyed %s objects.',
      ),

      '%s added %s watcher(s) for %s: %s.' => array(
        array(
          '%s added a watcher for %3$s: %4$s.',
          '%s added watchers for %3$s: %4$s.',
        ),
      ),

      '%s removed %s watcher(s) for %s: %s.' => array(
        array(
          '%s removed a watcher for %3$s: %4$s.',
          '%s removed watchers for %3$s: %4$s.',
        ),
      ),

      '%s awarded this badge to %s recipient(s): %s.' => array(
        array(
          '%s awarded this badge to recipient: %3$s.',
          '%s awarded this badge to recipients: %3$s.',
        ),
      ),

      '%s revoked this badge from %s recipient(s): %s.' => array(
        array(
          '%s revoked this badge from recipient: %3$s.',
          '%s revoked this badge from recipients: %3$s.',
        ),
      ),

      '%s awarded %s to %s recipient(s): %s.' => array(
        array(
          array(
            '%s awarded %s to recipient: %4$s.',
            '%s awarded %s to recipients: %4$s.',
          ),
        ),
      ),

      '%s revoked %s from %s recipient(s): %s.' => array(
        array(
          array(
            '%s revoked %s from recipient: %4$s.',
            '%s revoked %s from recipients: %4$s.',
          ),
        ),
      ),

      '%s invited %s attendee(s): %s.' =>
        '%s invited: %3$s.',

      '%s uninvited %s attendee(s): %s.' =>
        '%s uninvited: %3$s.',

      '%s invited %s attendee(s): %s; uninvited %s attendee(s): %s.' =>
        '%s invited: %3$s; uninvited: %5$s.',

      '%s invited %s attendee(s) to %s: %s.' =>
        '%s added invites for %3$s: %4$s.',

      '%s uninvited %s attendee(s) to %s: %s.' =>
        '%s removed invites for %3$s: %4$s.',

      '%s updated the invite list for %s, invited %s: %s; uninvited %s: %s.' =>
        '%s updated the invite list for %s, invited: %4$s; uninvited: %6$s.',

      'Restart %s build(s)?' => array(
        'Restart %s build?',
        'Restart %s builds?',
      ),

      '%s is starting in %s minute(s), at %s.' => array(
        array(
          '%s is starting in one minute, at %3$s.',
          '%s is starting in %s minutes, at %s.',
        ),
      ),

      '%s added %s auditor(s): %s.' => array(
        array(
          '%s added an auditor: %3$s.',
          '%s added auditors: %3$s.',
        ),
      ),

      '%s removed %s auditor(s): %s.' => array(
        array(
          '%s removed an auditor: %3$s.',
          '%s removed auditors: %3$s.',
        ),
      ),

      '%s edited %s auditor(s), removed %s: %s; added %s: %s.' => array(
        array(
          '%s edited auditors, removed: %4$s; added: %6$s.',
        ),
      ),

      '%s accepted this revision as %s reviewer(s): %s.' =>
        '%s accepted this revision as: %3$s.',

      '%s added %s merchant manager(s): %s.' => array(
        array(
          '%s added a merchant manager: %3$s.',
          '%s added merchant managers: %3$s.',
        ),
      ),

      '%s removed %s merchant manager(s): %s.' => array(
        array(
          '%s removed a merchant manager: %3$s.',
          '%s removed merchant managers: %3$s.',
        ),
      ),

      '%s added %s account manager(s): %s.' => array(
        array(
          '%s added an account manager: %3$s.',
          '%s added account managers: %3$s.',
        ),
      ),

      '%s removed %s account manager(s): %s.' => array(
        array(
          '%s removed an account manager: %3$s.',
          '%s removed account managers: %3$s.',
        ),
      ),

      'You are about to apply a bulk edit which will affect '.
      '%s object(s).' => array(
        'You are about to apply a bulk edit to a single object.',
        'You are about to apply a bulk edit which will affect '.
        '%s objects.',
      ),

      'Destroyed %s credential(s) of type %s.' => array(
        'Destroyed one credential of type "%2$s".',
        'Destroyed %s credentials of type %s.',
      ),

      '%s notification(s) about objects which no longer exist or which '.
      'you can no longer see were discarded.' => array(
        'One notification about an object which no longer exists or which '.
        'you can no longer see was discarded.',
        '%s notifications about objects which no longer exist or which '.
        'you can no longer see were discarded.',
      ),

      'This draft revision will be sent for review once %s '.
      'build(s) pass: %s.' => array(
        'This draft revision will be sent for review once this build '.
        'passes: %2$s.',
        'This draft revision will be sent for review once these builds '.
        'pass: %2$s.',
      ),

      'This factor recently issued a challenge to a different login '.
      'session. Wait %s second(s) for the code to cycle, then try '.
      'again.' => array(
        'This factor recently issued a challenge to a different login '.
        'session. Wait %s second for the code to cycle, then try '.
        'again.',
        'This factor recently issued a challenge to a different login '.
        'session. Wait %s seconds for the code to cycle, then try '.
        'again.',
      ),

      'This factor recently issued a challenge for a different '.
      'workflow. Wait %s second(s) for the code to cycle, then try '.
      'again.' => array(
        'This factor recently issued a challenge for a different '.
        'workflow. Wait %s second for the code to cycle, then try '.
        'again.',
        'This factor recently issued a challenge for a different '.
        'workflow. Wait %s seconds for the code to cycle, then try '.
        'again.',
      ),


      'This factor recently issued a challenge which has expired. '.
      'A new challenge can not be issued yet. Wait %s second(s) for '.
      'the code to cycle, then try again.' => array(
        'This factor recently issued a challenge which has expired. '.
        'A new challenge can not be issued yet. Wait %s second for '.
        'the code to cycle, then try again.',
        'This factor recently issued a challenge which has expired. '.
        'A new challenge can not be issued yet. Wait %s seconds for '.
        'the code to cycle, then try again.',
      ),

      'You recently provided a response to this factor. Responses '.
      'may not be reused. Wait %s second(s) for the code to cycle, '.
      'then try again.' => array(
        'You recently provided a response to this factor. Responses '.
        'may not be reused. Wait %s second for the code to cycle, '.
        'then try again.',
        'You recently provided a response to this factor. Responses '.
        'may not be reused. Wait %s seconds for the code to cycle, '.
        'then try again.',
      ),


      // Maniphest
      'Open' => 'Aberta',
      'Resolved' => 'Resolvida',
      'Wontfix' => 'Não pode ser resolvida',
      'Invalid' => 'Invalida',
      'Wish' => 'Desejo',
      'Wishlist' => 'Lista de desejos',
      'Low' => 'Baixo',
      'Normal' => 'Normal',
      'High' => 'Alto',
      'Triage' => 'Classificação',
      "Needs Triage" => "Precisa Classificar",
      'Unbreak!' => 'Não pausar!',
      'Unbreak Now!' => 'Solte Agora!',
      'Closed, Resolved' => 'Fechado, Resolvido',
      'Closed, Wontfix' => 'Fechado, Não pode ser resolvido',
      'Closed, Invalid' => 'Fechado, Invalido',
      'Duplicate' => 'Duplicado',
      'Closed, Duplicate' => 'Fechado, Duplicado',
      'Spite' => 'Ódio',
      'Closed, Spite' => 'Fechado, Ódio',
      'Reports' => 'Relatórios',
      'Batch Task Editor' => 'Editor de Tarefas em Lote',
      'Mentioned In' => 'Mencionado em',
      '%s moved this task from %s to %s on the %s board.' => '%s moveu essa tarefa de %s para %s, no quadro %s.',
      '%s moved this task to %s on the %s board.' => '%s moveu essa tarefa para %s, no quadro %s.',
      '%s moved this task on %s board(s): %s.' => '%s moveu esta tarefa em %s: %s.',
      '%s moved %s from %s to %s on the %s board.' => '%s moveu %s de %s para %s, no quadro %s.',
      '%s moved %s to %s on the %s board.' => '%s moveu %s para %s, no quadro %s.',
      '%s moved %s on %s board(s): %s.' => '%s moveu %s em %s, quadro(s): %s.',
      '%s created subtask %s.' => '%s subtarefa criada %s.',
      '%s reopened subtask %s as %s.' => '%s subtarefa reaberta %s como %s.',
      '%s reopened subtask %s as %s.' => '%s subtarefa reaberta %s como %s.',
      '%s closed subtask %s as %s.' => '%s subtarefa fechada %s como %s.',
      '%s changed the status of subtask %s from %s to %s.' => '%s иmudou o status da subterefa %s de %s para %s.',
      '%s reopened %s, a subtask of %s, as %s.' => '%s reaberta %s, uma subtarefa de %s, como %s.',
      '%s closed %s, a subtask of %s, as %s.' => '%s fechou %s, uma subtarefa de %s, como %s.',
      '%s changed the status of %s, a subtask of %s, from %s to %s.' => '%s mudou o status de %s, uma subtarefa de %s, de %s para %s.',
      'Build Passed' => 'Build Passou',
      'Build Failed' => 'Falaha na Build',
      'Build Status' => 'Bulid Status',
      'Commented On' => 'Comentado em',
      'Changed Policy' => 'Política Alterada',
      'Changed Subscribers' => 'Assinantes alterados',
      'Created' => 'Criada',
      'Retitled' => 'Renomeada',
      'Edit Related Tasks' => 'Editar tarefas relacionadas',
      'Save Related Tasks' => 'Salvar tarefas relacionadas',
      'Current Tasks' => 'Tarefas atuais',
      'Quote Comment' => 'Quote Comment',
      'View Remarkup' => 'Visualizar remarcação',
      'Parent Task' => 'Tarefa pai',
      'All Open Objects' => 'Todos os objetos abertos',
      'Current Parent Tasks' => 'Tarefas dos pais atuais',
      'Current Subtasks' => 'Subtarefas atuais',
      'Save Subtasks' => 'Salvar subtarefas',
      'Save Parent Tasks' => 'Salvar tarefas dos pais',
      'Created By Me' => 'Criado por mim',
      'All Objects' => 'Todos Objetos',
      'Edit Related Mocks' => 'editar Mocks relacionados',
      'Save Related Mocks' => 'Salve Mocks relacionados',
      'Current Mocks' => 'Mocks atual',
      'Edit Related Revisions' => 'Editar revisões relacionadas',
      'Save Related Revisions' => 'Salve revisões relacionadas',
      'Current Commits' => 'commits atuais',
      'Edit Related Commits' => 'Editar commits relacionados',
      'Save Related Commits' => 'Salve commits relacionados',

      'Comment for this transaction was not loaded.' => 'Комментарий для этой транзакции не был загружен',
      'Task Graph' => 'Граф задачи',
      'History Graph' => 'Граф истории',
      'Task Author' => 'Autor da tarefa',
      'Edit Related Tasks...' => 'Editar tarefas relacionadas...',
      'Edit Parent Tasks' => 'Editar tarefas pai',
      'Edit Subtasks' => 'Editar subtarefas',
      'Close As Duplicate' => 'Fechar como duplicado',
      'Close This Task As a Duplicate Of' => 'Fechar esta tarefa como uma duplicata de',
      'Merge Into Selected Task' => 'Mesclar na tarefa selecionada',
      'Related Objects' => 'Objetos Relacionados',
      'Mentions' => 'Menções',
      'Edit Related Objects...' => 'Editar objetos relacionados...',
      'Edit Commit' => 'Editar Commit',
      'Edit Commits' => 'Editar Commits',
      'Edit Tasks' => 'Editar tarefas',
      'Edit Task: %s' => 'Editar tarefa: %s',
      'Edit Mocks' => 'Editar Mocks',
      'Edit Revisions' => 'Editar Revisões',
      'All Mocks' => 'Todas Mocks',
      'Create Mock' => 'Criar Mock',
      'Open Mocks' => 'Abrir Mocks',
      'Download Raw Diff' => 'Baixar Raw Diff',
      'Tasks and Bugs' => 'Tarefas e Bugs',
      'Create Task' => 'Criar Tarefa',
      'Maniphest Task' => 'Maniphest Tarefa',
      'Create New Task' => 'Criar Nova Tarefa',
      'Quick Create' => 'Criação rápida',
      'Upload Picture' => 'Carregar foto',
      'Current Picture' => 'Imagem atual',
      'Use Picture' => 'Use a imagem',
      'Edit Project Picture' => 'Editar imagem do projeto',
      'Upload New Picture' => 'Carregar nova imagem',
      'Choose Icon and Color...' => 'Escolha o ícone e cor...',
      'Type a project name...' => 'Digite um nome de projeto...',
      'Type a username...' => 'Digite um nome de usuário...',
      'Type a username or function...' => 'Digite um nome de usuário ou função...',
      'Type a username or "none"...' => 'Digite um nome de usuário ou "none"...',
      'Type a user, project, or mailing list name...' => 'Digite um nome de usuário, projeto ou lista de discussão...',
      'Queries' => 'Consultas',
      'Query: %s' => 'Questão: %s',
      'Search...' => 'Buscar...',
      'Search Parent Tasks' => 'Pesquisar tarefas pai',
      'Search Subtasks' => 'Pesquisar subtarefas',
      'Parent IDs' => 'IDs pai',
      'Assigned' => 'Atribuída',
      'Assigned To' => 'Atribuir Para',
      'Assigned: %s' => 'Atribuída: %s',
      'Authored' => 'De autoria',
      'Authored By' => 'De autoria',
      'Subscribed' => 'Subscrita',
      'Open Tasks' => 'Tarefas Abertas',
      'All Tasks' => 'Todas Tarefas',
      'By User' => 'Pelo Usuário',
      'By Project' => 'Pelo Projeto',
      "Compose Image" => "Compor Imagem",
      "Choose Background Color" => "Escolha a cor de fundo",
      "Choose Icon" => "Escolher ícone",
      'Pushed' => 'Pushed',
      'Parents' => 'Pais',
      'Reviewers' => 'Revisores',

      // 'This file was added.' => 'Этот файл был добавлен',
      // 'This image was added.' => 'Это изображение было добавлено',
      // 'This directory was added.' => 'Эта директория была добавлена',
      // 'This binary file was added.' => 'Этот бинарный файл был добавлен',
      // 'This symlink was added.' => 'Эта символическая ссылка была добавлена',
      // 'This submodule was added.' => 'Этот подмодуль был добавлен',

      // 'This file was deleted.' => 'Этот файл был удалён',
      // 'This image was deleted.' => 'Это изображение было удалено',
      // 'This directory was deleted.' => 'Эта директория была удалена',
      // 'This binary file was deleted.' => 'Этот бинарный файл был удалён',
      // 'This symlink was deleted.' => 'Эта символическая ссылка была удалена',
      // 'This submodule was deleted.' => 'Этот подмодуль был удалён',

      // 'This file was moved from %s.' => 'Этот файл был перемещён сюда из %s',
      // 'This image was moved from %s.' => 'Это изображение было перемещено сюда из %s',
      // 'This directory was moved from %s.' => 'Эта директория была перемещена сюда из %s',
      // 'This binary file was moved from %s.' => 'Этот бинарный файл был перемещён сюда из %s',
      // 'This symlink was moved from %s.' => 'Эта символическая ссылка была перемещена сюда из %s',
      // 'This submodule was moved from %s.' => 'Этот подмодуль был перемещён сюда из %s',

      // 'This file was copied from %s.' => 'Этот файл был скопирован сюда из %s',
      // 'This image was copied from %s.' => 'Это изображение было скопировано сюда из %s',
      // 'This directory was copied from %s.' => 'Эта директория была скопирована сюда из %s',
      // 'This binary file was copied from %s.' => 'Этот бинарный файл был скопирован сюда из %s',
      // 'This symlink was copied from %s.' => 'Эта символическая ссылка была скопирована сюда из %s',
      // 'This submodule was copied from %s.' => 'Этот подмодуль был скопирован сюда из %s',

      // 'This file was moved to %s.' => 'Этот файл был перемещён в %s',
      // 'This image was moved to %s.' => 'Это изображение было перемещено в %s',
      // 'This directory was moved to %s.' => 'Эта директория была перемещена в %s',
      // 'This binary file was moved to %s.' => 'Этот бинарный файл был перемещён в %s',
      // 'This symlink was moved to %s.' => 'Эта символическая ссылка была перемещена в %s',
      // 'This submodule was moved to %s.' => 'Этот подмодуль был перемещён в %s',

      // 'This file was copied from %s.' => 'Этот файл был скопирован в %s',
      // 'This image was copied from %s.' => 'Это изображение было скопировано в %s',
      // 'This directory was copied from %s.' => 'Эта директория была скопирована в %s',
      // 'This binary file was copied from %s.' => 'Этот бинарный файл был скопирован в %s',
      // 'This symlink was copied from %s.' => 'Эта символическая ссылка была скопирована в %s',
      // 'This submodule was copied from %s.' => 'Этот подмодуль был скопирован в %s',

      // 'This file was deleted after being copied to %s.' => 'Этот файл был удалён после копирования из %s',
      // 'This image was deleted after being copied to %s.' => 'Это изображение удалено после копирования из %s',
      // 'This directory was deleted after being copied to %s.' => 'Эта директория была удалена после копирования из %s',
      // 'This binary file was deleted after being copied to %s.' => 'Этот бинарный файл был удалён после копирования из %s',
      // 'This symlink was deleted after being copied to %s.' => 'Эта символическая ссылка была удалена после копирования из %s',
      // 'This submodule was deleted after being copied to %s.' => 'Этот подмодуль был удалён после копирования из %s',

      // 'This file was not modified.' => 'Данный файл не был изменён',
      'This is an image.' => 'Esta é uma imagem',
      'This is a directory.' => 'Este é um diretório',
      'This is a binary file.' => 'Este é um arquivo binário',
      'This is a symlink.' => 'Este é um link simbólico',
      'This is a submodule.' => 'ЭEste é um submódulo',

      // Auth
      'Login to Phabricator' => 'Logar no Phabricator',
      'Username or Email' => 'Usuario ou email',
      'Password' => 'Senha',
      'Forgot your password?' => 'Esqueceu sua senha?',
      'Register New Account' => 'Registrar novo Usuario',
      'Phabricator Username' => 'Usuario Phabricator',
      'Real Name' => 'Nome real',
      'Confirm Password' => 'Confirmar senha',
      'Minimum length of %d characters.' => ['Comprimento mínimo de - %d caracteres.', 'Comprimento mínimo de - %d caracteres.', 'Comprimento mínimo de - %d caracteres.'],
      'Register Phabricator Account' => 'Registrar uma conta Phabricator',
      'Login' => 'Login',
      'Log out of Phabricator?' => 'Sair do Phabricator?',
      'Are you sure you want to log out?' => 'Vocẽ tem certeza que quer sair?',
      'Log Out' => 'Sair',
      'Logout' => 'Sair',

      // Date/Time
      'Date' => 'Data',
      'Time' => 'Hora',
      'Date and Time' => 'Data e Hora',

      // Days
      'MTWTFSS' => 'STQQSSD',
      'Mon' => 'Seg',
      'Tue' => 'Ter',
      'Wed' => 'Qua',
      'Thu' => 'Qui',
      'Fri' => 'Sex',
      'Sat' => 'Sáb',
      'Sun' => 'Dom',

      'Monday' => 'Segunda',
      'Tuesday' => 'Terça',
      'Wednesday' => 'Quarta',
      'Thursday' => 'Quinta',
      'Friday' => 'Sexta',
      'Saturday' => 'Sábado',
      'Sunday' => 'Domingo',
      'Yesterday' => 'Ontem',
      'Today' => 'Hoje',
      'Tomorrow' => 'Amanhã',

      // Months
      'Jan' => 'Jan',
      'Feb' => 'Fev',
      'Mar' => 'Mar',
      'Apr' => 'Abr',
      'May' => 'Mai',
      'Jun' => 'Jun',
      'Jul' => 'Jul',
      'Aug' => 'Ago',
      'Sep' => 'Set',
      'Oct' => 'Out',
      'Nov' => 'Nov',
      'Dec' => 'Dez',

      'January' => 'Janeiro',
      'February' => 'Fevereiro',
      'March' => 'Março',
      'April' => 'Abril',
      'May' => 'Maio',
      'June' => 'Junho',
      'July' => 'Julho',
      'August' => 'Agosto',
      'September' => 'Setembro',
      'October' => 'Outubro',
      'November' => 'Novembro',
      'December' => 'Dezembro',

      '%s closed this task as %s.' => '%s fechou esta tarefa como %s.',
      '%s created this task.' => '%s criou esta tarefa',

      // Calendar
      'Event' => 'Evento',
      'Calendar Event' => 'Calendário do evento',
      'Calendar' => 'Calendário',
      'From %s to %s' => 'De %s para %s',
      'Create Event' => 'Criar evento',
      'Create Private Event' => 'Criar evento privado',
      'Create Public Event' => 'Создать публичное событие',
      'Choose Icon...' => 'Escolher ícone...',
      'Choose Calendar Event Icon' => 'Escolha o ícone do evento da agenda',
      'Edit Event' => 'Editar Evento',
      'Join Event' => 'Junte-se ao evento',
      'Decline' => 'Recusar',
      'Accept' => 'Aceitar',
      'Would you like to join this event?' => 'Você gostaria de participar deste evento?',
      'Decline Event' => 'Recusar Evento',
      'Cancel Event' => 'Cancelar Evento',
      'You can always reinstate the event later.' => 'Você sempre pode restabelecer o evento mais tarde.',
      "Don't Cancel Event" => 'Não cancelar evento',
      'Reinstate Event' => 'Restabelecer Evento',
      'Reinstate this event?' => 'ВRestabelecer este evento?',
      "Don't Reinstate Event" => 'Não restabeleça o evento',
      'Clear sailing ahead.' => 'Navegação clara em frente.',
      'No events found.' => 'Nenhum evento encontrado',
      'My Events' => 'Meus Eventos',
      'End' => 'Fim',
      'Starts' => 'Comerçar',
      'Ends' => 'Terminar',
      'Invitees' => 'Convidados',
      'All Day Event' => 'Evento de dia inteiro',
      'Month View' => 'Ver Mês',
      'Day View' => 'Ver Dia',
      'Upcoming Events' => 'Грядущие события',
      'All Events' => 'Todos enventos',
      'Created By' => 'Criado por',
      'Invited' => 'Convidamos',
      'Occurs After' => 'Ocorre depois',
      'Occurs Before' => 'Произойдёт до',
      'Show only upcoming events.' => 'Показать только грядущие события',
      'Cancelled Events' => 'Отменённые события',
      'Display Options' => 'Параметры отображения',
      'Add To Plate' => 'Добавить на панель...',
      '%s created this event.' => '%s создал(а) данное событие.',
      '%s edited this %s.' => '%s отредактировал(а) %s.',
      '%s changed the name of this event from %s to %s.' => '%s изменил(а) название этого события с %s на %s um.',
      '%s made this an all day event.' => '%s сделал(а) его полнодневным событием.',
      '%s converted this from an all day event.' => '%s сконвертировал(а) это из полнодневного события.',
      "%s updated the event's description." => ' %s обновил(а) описание события',
      '%s invited %s.' => '%s пригласил(а) %s.',
      '%s has joined this event.' => '%s присоединился(-лась) к данному событию.',
      '%s is attending this event.' => '%s посещает данное событие.',
      '%s is attending %s.' => '%s посещает событие %s.',
      'Would you like to decline this event?' => 'Вы желаетесь отказаться от данного события?',
      '%s has declined this event.' => '%s отказался(-лась) от данного события.',
      '%s has declined %s.' => '%s отказался(-лась) от события %s.',
      '%s cancelled this event.' => '%s отменил(а) данное событие.',
      '%s cancelled %s.' => '%s отменил(а) событие %s.',
      '%s reinstated this event.' => '%s восстановил(а) данное событие',
      '%s reinstated %s.' => '%s восстановил(а) событие %s',
      '%s edited the end date of this event.' => '%s отредактировал(а) конечную дату данного события.',
      '%s edited the start date of this event.' => '%s отредактировал(а) начальную дату данного события.',
      "%s set this event's icon to %s." => '%s установил(а) иконку этому событию на %s',
      '%s invited %s to %s.' => '%s пригласил(а) %s в %s.',
      '%s made %s an all day event.' => '%s сделал(а) %s полнодневным событием.',
      '%s converted %s from an all day event.' => '%s сконвертировал(а) %s из полнодневного события',
      
      // Harbormaster
      'All Buildables' => 'Все собираемые',
      'Buildable %d' => 'Собираемый %d',
      'Buildable' => 'Собираемый',
      'Builds' => 'Сборки',
      'Browse Builds' => 'Смотреть сборки',
      'Build %d' => 'Сборка %d',
      'My Builds' => 'Мои сборки',
      'All Builds' => 'Все сборки',
      'Waiting' => 'Esperando',
      'Completed' => 'Completou',
      'No builds found.' => 'Сборок не найдено.',

      // Files
      'Files' => 'Arquivos',
      'Store and Share Files' => 'Armazenar e compartilhar arquivos',
      'Drop Files to Upload' => 'Solte arquivos para upload',
      'Image' => 'Imagem',
      'Countdown to Events' => 'Contagem regressiva para eventos',
      'Uploaded by %s on %s' => 'ЗEnviado por %s em %s',
      'Masterfully imagined by %s on %s.' => 'Magistralmente imaginado por %s em %s.',

      // Settings
      'Settings' => 'Configurações',
      'Edit Settings' => 'Editar Configurações',
      'Save Preferences' => 'Salvar Preferências',
      'Save Account Settings' => 'Salvar Configurações da Conta',
      'Account Settings' => "Configurações da conta",
      'Account' => 'Conta',
      'Translation' => 'Tradução',
      'Pronoun' => 'Pronome',
      '%s updated their profile' => '%s atualizou seu perfil',
      '%s updated his profile' => '%s atualizaou o perfil dele',
      '%s updated her profile' => '%s atualizaou o perfil dela',
      'Date and Time Settings' => 'Configurações de data e hora',
      'Timezone' => 'Fuso horário',
      'Time-of-Day Format' => 'Formato data e hora',
      'Format used when rendering a time of day.' => 'Formato usado ao renderizar uma hora do dia.',
      'Date Format' => 'Formato de data',
      'Format used when rendering a date.' => 'Formato usado ao renderizar uma data',
      'European (28-02-2000)' => 'Europeu (28-02-2000)',
      'Week Starts On' => 'Semana inicia em',
      'Calendar weeks will start with this day.' => 'As semanas do calendário começarão com este dia.',
      '12-hour (2:34 PM)' => '12-hora (2:34 PM)',
      '24-hour (14:34)' => '24-hora (14:34)',

       // Config
      'Configure Phabricator' => 'Configuração Phabricator',

      // 404
      'Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.' => 'Não habite no passado, não sonhe com o futuro, concentre a mente no momento presente.',
      'Focus' => 'Foco',

      // //Projetos
      // 'Workboard' => 'Quadro de Trabalho',
      'Members' => 'Membros',
      'Member' => 'Membro',
      // 'Members and Watchers' => 'Membros e observadores',
      // 'Subprojects' => 'Subprojetos',
      // 'Subprojects and Milestones' => 'Subprojetos e Marcos',
      // 'Manage' => 'Gerenciar',  
      // 'Project History' => 'História do Projeto',

      // Signs
      'You signed this document on %s.' => 'Você assinou este documento em %s',
      'View/Sign Document' => 'Exibir/Assinar documento',
      'View Signatures' => 'Ver Assinaturas',
      'Signatures' => 'Assinaturas',
      'Show only documents I have signed.' => 'Mostrar apenas documentos que assinei',
      'Creators' => 'Criadoras',
      'Contributors' => 'Contribuidores',
      'All Signatures' => 'Todas Assinaturas',
      'Add Exemption' => 'Adicionar Isenção',
      'Add Signature Exemption' => 'Adicionar isenção de assinatura',
      'Exempt User' => 'Usuário Isento',
      'Signed Documents' => 'Documentos assinados',
      'Find Signatures' => 'Encontrar assinaturas',
      'Notes' => 'Notas',
      'Signed on %s' => 'Assinado em %s',
      'Not Signed' => 'Não assinado',
      'Version %d (%s)' => 'Versão %d (%s)',
      'No documents found.' => 'Nenhum documento encontrado',
      'Create a Document' => 'Criar um Documento',
      'Create Document' => 'Criar Documento',
      'Who Should Sign?' => 'Quem deve assinar?',
      'Individuals' => 'Indivíduos',
      'Corporations' => 'Corporações',
      'No One' => 'Ninguém',
      'Signature Required to use Phabricator' => 'Assinatura Requerida para usar o Phabricator',
      'Document Body' => 'Corpo do documento',
      'Create New Document' => 'Criar novo documento',
      'Document' => 'Documento',

      'You can record a signature exemption if a user has signed an ' .
        'equivalent document. Other applications will behave as through the ' .
        'user has signed this document.' =>
        'You can record a signature exemption if a user has signed an ' .
        'equivalent document. Other applications will behave as through the ' .
        'user has signed this document.',

      'Statuses' => 'Status',
      'Priorities' => 'Prioridades',
      'Assigned To' => 'Atribuído para',
      'Assigned to Me' => 'Atribuído a mim',
      'Advanced Filter...' => 'Filtro Avançado...',
      'In All Projects' => 'Em todos os projetos',
      'In Any Project' => 'Em nenhum projeto',
      'Not In Projects' => 'Não em projetos',
      "In Users' Projects" => 'Em projetos de usuários',
      'Authors' => 'Autores',
      'Contains Words' => 'Contém palavras',
      'Priority' => 'Prioridade',
      'Blocking' => 'Bloqueio',
      'Blocked' => 'Bloqueado',
      'Group By' => 'Agrupar por',
      'Order By' => 'Ordenar por',
      'Task IDs' => 'IDs de tarefas',
      'Created After' => 'Criado depois',
      'Created Before' => 'Criado antes',
      'Updated After' => 'Atualizado depois',
      'Updated Before' => 'Atualizado antes',
      'Page Size' => 'Tamanho da pagina',
      'Shift-Click to Select Tasks' => 'Shift-Clique para Selecionar Tarefas',
      'Select All' => 'Selecionar todas',
      'Clear Selection' => 'Limpar seleção',
      'Export to Excel' => 'Exportar para Excel',
      'Export Tasks to Excel' => 'Exportar tarefas para Excel',
      'Do you want to export the query results to Excel?' => 'Você quer exportar o resultado para Excel',
      'Batch Edit Selected »' => 'Edição em lote selecionada»',
      'Edit Task' => 'Editar Tarefa',
      'Save Task' => 'Salvar Tarefa',
      'Merge Duplicates In' => 'Mesclar duplicados em',
      'Merge Duplicates Into This Task' => 'Mesclar duplicados nesta tarefa',
      'Tasks to Close and Merge' => 'Tarefas para fechar e mesclar',
      'Close and Merge Selected Tasks' => 'Fechar e mesclar tarefas selecionadas',
      'Create Subtask' => 'Criar subtareda',
      'Edit Blocking Tasks' => 'Editar tarefas de bloqueio',
      'Automatically Subscribed' => 'Inscrever-se automaticamente',
      'Unsubscribe' => 'Cancelar inscrição',
      'Subscribe' => 'Se inscrever',
      'Start Tracking Time' => 'Start Tracking Time',
      'What time did you start working?' => 'A que horas você começou a trabalhar?',
      'Award Token' => 'Token de prêmio',
      'Give Token' => 'Dar Token',
      'New task created. Create another?' => 'Nova tarefa criada. Criar outro?',
      'Similar Task' => 'Tarefa similar',
      'Empty Task' => 'Tarefa vazia',
      'Older changes are hidden. ' => 'Mudanças mais antigas estão ocultas.',
      'Show older changes.' => 'Mostrar alterações mais antigas.',
      "Additional Hashtags" => "Hashtags Adicionais",
      "Joinable By" => "Juntável por",
      "Project Members" => "Membros do projeto",
      "Select Project" => "Selecionar projeto",
      "Members Of" => "Membros de",
      "Public (No Login Required)" => "Público (sem necessidade de login)",
      "Object Policies" => "Políticas de objeto",
      "Members of Project..." => "Membros do projeto...",
      "Other Project..." => "Outro projeto...",
      "Choose Project Icon" => "Escolhe icone do projeto",
      'Reference: Advanced Functions' => 'Referência: Funções Avançadas',
      'User Guide: Search' => 'Guia do usuário: pesquisa',
      'Current Viewer' => 'Visualizador Atual',
      'Select current viewer.' => 'Selecione o visualizador atual.',

      '%s created this task.' => '%s criou esta tarefa',
      '%s renamed this task from %s to %s.' => '%s renomeou essa tarefa de с %s para %s.',
      '%s closed %s as %s.' => '%s fechou %s como %s.',
      '%s updated the image for %s from %s to %s.' => '%s atualizou a imagem para %s de %s para %s.',
      '%s lowered the priority of %s from %s to %s.' => '%s diminuiu a prioridade de %s de %s para %s.',
      '%s changed the status of %s from %s to %s.' => '%s mudou o status do %s de %s para %s.',
      'Weigh In' => 'Pesar em',
      '%s added a comment.' => '%s adicionou um comentário..',
      '%s closed this task as a duplicate.' => '%s fechou esta tarefa como uma duplicata.',
      '%s closed this task as %s.' => '%s fechou esta tarefa como %s.',
      '%s placed this task up for grabs.' => '%s colocou esta tarefa em disputa.',
      '%s placed %s up for grabs.' => '%s colocou %s em disputa.',
      '%s assigned this task to %s.' => '%s atribuiu essa tarefa para %s.',
      '%s claimed this task.' => '%s pegou essa tarefa.',
      '%s updated subscribers...' => '%s assinantes atualizados...',
      '%s triaged this task as %s priority.' => '%s triou esta tarefa com prioridade %s.',
      '%s removed %s as the assignee of this task.' => '%s removeu %s como o cessionário desta tarefa.',
      '%s raised the priority of this task from %s to %s.' => '%s levantou a prioridade desta tarefa de %s para %s.',
      '%s reopened this task as %s.' => '%s reabriu esta tarefa como %s.',
      '%s changed the task status from %s to %s.' => '%s mudou o status da tarefa de %s para %s',
      '%s lowered the priority of this task from %s to %s.' => '%s diminuiu a prioridade desta tarefa de %s para %s.',
      '%s edited associated projects.' => '%s projetos associados editados.',
      '%s awarded a token.' => '%s premiado com um token.',
      '%s set %s to %s.' => '%s setar %s para %s.',
      '%s edited the task description.' => '%s editou a descrição da tarefa.',
      '%s updated the description of %s.' => '%s atualizou a descrição de %s',
      '%s changed %s from %s to %s.' => '%s mudou %s de %s para %s.',
      '%s committed %s (authored by %s).' => '%s commitado(а) %s (de autoria de %s).',

// Flags
      'Flag For Later' => 'Bandeira para mais tarde',
      'Remove %s Flag' => 'Remover %s Bandeira',
      'Flag %s' => 'Bandeira %s',
      'You can flag this %s if you want to remember to look at it later.' => 'Você pode sinalizar este %s se você quiser se lembrar de ver isso mais tarde.',
      'Create Flag' => 'Criar Bandeira',
      'Note' => 'Nota',
      'Members' => 'Membros',
      'Subprojects' => 'Subprojetos',
      'Manage' => 'Gerenciar',
      'Manage Repository' => 'Gerenciar repositório',
      'Project History' => 'Histórico do projeto',
      'Looks Like' => 'Parece',

      // Feed
      'Feed' => 'Feed',
      'Notifications' => 'Notificações',
      'Connected' => 'Conectado',
      'Disconnected' => 'Desconectado',
      'You have no notifications.' => 'Você não tem notificações',
      'To begin on such a grand journey, requires but just a single step.' => 'Para começar uma jornada tão grandiosa, requer apenas um único passo.',
      'Story' => 'História',
      'All Stories' => 'Todas as histórias',
      'Notification Server not enabled.' => 'Servidor de notificação não está habilitado.',
      'Notification Server Issue' => 'Problema no servidor de notificação',
      'Unable to determine server status. This probably means the server is not in great shape. The specific issue encountered was:' =>
        'Não é possível determinar o status do servidor. Isso provavelmente significa que o servidor não está em grande forma. O problema específico encontrado foi:',
      'Notification Server Status' => 'Status do servidor de notificação',
      'Mark All Read' => 'Marcar todas como lida',
      'Really mark all notifications as read?' => 'Realmente marcar todas as notificações como lidas?',
      "You can't ignore your problems forever, you know." => 'Você não pode ignorar seus problemas para sempre, você sabe.',
      'Send Test Notification' => 'Enviar notificação de teste',
      'This is a test notification, sent at %s.' => 'Esta é uma notificação de teste, enviada em %s.',
      '%s created %s.' => '%s Criado %s.',
      '%s edited %s.' => '%s editado %s.',
      '%s deleted %s.' => '%s deletado %s.',
      '%s set %s to %s on %s.' => '%s inserido %s para %s em %s.',
      '%s changed %s from %s to %s on %s.' => '%s mudou %s de %s para %s em %s.',
      '%s renamed %s from %s to %s.' => '%s renomeado %s de %s para %s.',
      'Tasks must have a title.' => 'Tarefas devem ter um título.',
      'Feed Story' => 'Alimentar historias',
      'An outlandish exaggeration of intricate tales from around the realm.' => 'Um exagero estranho de contos intrincados de todo o reino.',


      // Diffusion
      'Host and Browse Repositories' => 'Host e Navegar Repositórios',

      // Audit
      'Browse and Audit Commits' => 'Navegar e fazer auditoria de commits',

      // Projects
      'Visible' => 'Visível',
      'Add Column' => 'Add Coluna',
      'Create Column' => 'Criar Coluna',
      'Reorder Columns' => 'Gravar Colunas',
      'Show Hidden Columns' => 'Mostrar esconder coluna',
      'Change Background Color' => 'Mudar cor do Background',
      'Manage Workboard' => 'Gerenciar Quadro de Trabalho',
      'Disable Workboard' => 'Desabilitar Quadro de Trabalho',
      'Workboard: %s' => 'Quadro de Trabalho: %s',
      'Natural' => 'Naturak',
      'Sort by Priority' => 'Ordenar por prioridade',
      'Save as Default' => 'Salvar como padrão',
      'Backlog' => 'Pendências',
      'Batch Edit Tasks...' => 'Editar tarefas em lote...',
      'Workboard' => 'Quadro de Trabalho',
      'Projects' => 'Projetos',
      'Get Organized' => 'Organize-se',
      'Create Project' => 'Criar projeto',
      'Create New Project' => 'Criar novo Projeto',
      'Joined' => 'Ingressou',
      'Watching' => 'Observando',
      'Active' => 'Ativo',
      '%s created this project.' => '%s criou este projeto.',
      "%s set this project's icon to %s." => '%s definir o icone deste projeto %s.',
      '%s renamed this project from %s to %s.' => '%s Renomeou esse projeto de %s para %s.',
      "%s set this project's color to %s." => '%s Inserir a cor desse projeto  %s.',
      "%s changed the default filter for the project workboard." => '%s Alterar o filtro padrão do quadro de trabalho do projeto.',
      "Edit Details" => "Editar Detalhes",
      "Edit Menu" => "Editar Menu",
      "Edit Picture" => "Editar Imagem",
      "Archive Project" => "Arquivar projeto",
      "Milestone" => "Marco",
      "Milestones" => "Marcos",
      "%s Milestones" => "%s - Marcos",
      "%s Subprojects" => "%s - Subprojetos",
      "Has Milestones" => "Tem Marcos",
      "Milestones can be created for this project." => "Marcos podem ser criados para este projeto.",
      "Subprojects can be created for this project." => "Subprojetos podem ser criado para este projeto.",
      "This project has no milestones." => "Este projeto não tem marcos.",
      "This project has no subprojects." => "Este projeto não tem subprojetos.",
      "None Created" => "Nenhum criado",
      "You can create subprojects for this project." => "Você pode criar subprojetos para este projeto.",
      "This project has milestones." => "Este projeto tem marcos.",
      "Subprojects and milestones are only partially implemented." => "Subprojetos e marcos são apenas parcialmente implementados.",
      "Create Next Milestone" => "Criar proximo marco",
      "Create Subproject" => "Criar Subprojeto",
      "Create Milestone" => "Criar marco",
      "Subprojects and Milestones" => "Subprojetos e Marcos",
      "This project does not have any members." => "Este projeto não possui membro",
      "Watchers" => "Observadores",
      "This project does not have any watchers." => "Este projeto não possui observadores .",
      "Membership" => "Membro",
      "Members and Watchers" => "Membros e Observadores",
      "Members of the parent project are members of this project." => "Os membros do projeto pai são membros deste projeto.",
      "Join Project" => "Junte-se ao Projeto",
      "Leave Project" => "Deixar Projeto",
      "Watch Project" => "Observar Projeto",
      "Unwatch Project" =>'Deixar de observar',
      "Disable Mail" => "Desabilitar email",
      "Add Members" => "Adicionar Membro",
      "Lock Project" => "Bloquear projeto",
      "Members of all subprojects are members of this project." => "Os membros de todos os subprojetos são membros deste projeto.",
      "You are watching this project and will receive mail about changes made to any related object." => 'Você está observando este projeto e receberá mensagens sobre alterações feitas em qualquer objeto relacionado.',
      "You can create milestones for this project." => "Você pode criar narcos para este projeto",
      "Has Subprojects" => "Tem subprojetos",
      "This project has subprojects." => "Este projeto tem subprojetos",
      'Warning' => "Aviso",
      'Parent Project' => 'Projeto pai',
      'Mail to Members' => 'Email para membros',
      'You will receive mail that is sent to project members.' => 'Você receberá e-mails enviados aos membros do projeto.',
      '%s added a comment to %s.' => '%s adicionou um comentario para %s.',
      '%s edited the description of %s.' => '%s editou a descrição de %s.',
      '%s edited the content of %s.' => '%s editou o conteudo de %s.',
      '%s awarded %s a %s token.' => '%s premiou %s com um token %s.',
      '%s triaged %s as %s priority.' => '%s triou %s como prioridade %s.',
      '%s changed the visibility for %s.' => '%s mudou a visibildiade para %s.',
      '%s changed the name of %s from %s to %s.' => '%s mudou o nome de %s para %s на %s.',
      '%s changed the start date of %s from %s to %s.' => '%s mudou data inicial %s de %s para %s.',
      '%s set the icon for %s to %s.' => '%s definir a icone para %s por %s.',
      '%s set the image for %s to %s.' => '%s definir a imagem para %s por %s.',
      '%s set the color for %s to %s.' => '%s definir a cor para %s por %s.',
      '%s renamed %s from %s to %s.' => '%s denomeado %s de %s para %s.',
      '%s created this object with visibility %s.' => '%s criou este objeto com visibilidade %s.',
      '%s created this object with edit policy %s.' => '%s criou este objeto com a política de edição %s.',
      '%s created this object with join policy %s.' => '%s criou este objeto com política de junção %s.',
      '%s created this object in space %s.' => '%s criou este objeto no espaço %s.',
      '%s shifted this object from the %s space to the %s space.' => '%s deslocou este objeto do espaço %s  para o espaço %s.',
      "%s updated this project's image from %s to %s." => "%s atualizou a imagem deste projeto de %s para %s.",
      "Edit Column" => "Editar coluna",
      "Hide Column" => "Esconder coluna",
      "Point Limit" => "Limite de ponto",
      "Maximum number of points of tasks allowed in the column." => "Número máximo de pontos de tarefas permitidos na coluna.",
      "Save Column" => "Salvar coluna",
      "Edit %s" => "Editar %s",
      "Hashtags" => "Hashtags",
      "You are a member and you will receive mail that is sent to all project members." =>
        "Você é um membro e receberá mensagens enviadas a todos os membros do projeto.",
      'Normal Project' => 'Projeto Normal',
      'Users with access may join and leave this project.' => 'Usuários com acesso podem entrar e sair deste projeto.',

      // Profiles
      'User Accounts and Profiles' => 'Contas de Usuario e Perfis',
      'Enabled' => 'Habilitar',
      'User' => 'Usuario',
      'User Account' => 'Conta de usuario',
      'People' => 'Pessoas',
      'User Since' => 'Usuário desde',
      'Roles' => 'Funções',
      'Not Approved' => 'Não aprovado',
      'Unverified' => 'Não verificado',
      'Verified' => 'Verificado',
      'Available' => 'Acessível',
      'Edit Profile' => 'Editar perfil',
      'Edit Profile Picture' => 'Editar imagem do perfil',
      'Remove Administrator' => 'Remover Administrador',
      'Change Username' => 'Mudar Username',
      'Disable User' => 'Desabilitar usuário',
      'Delete User' => 'Deletar Usuário',
      'Send Welcome Email' => 'Enviar email de boas vindas',
      'Basic Policies' => 'Políticas Básicas',
      'All Users' => 'Todos Usuarios',
      'Administrators' => 'Adaministrador',
      'No One' => 'Ninguém',
      'User Policies' => 'Usar politicas',
      'Advanced' => 'Avançado',
      'Custom Policy...' => 'Políticas customiada...',
      'User Details' => 'Detalhes do Usuario',
      'User has not been awarded any badges.' => 'O usuário não recebeu nenhum selo.',


      //===============================
      'Assigned Tasks' => 'Tarefas atribuídas',
      'No tasks found.' => 'Nenhuma tarefa encontrada.',
      'Active Revisions' => 'Revisões Ativas',
      'No revisions found.' => 'Nenhuma revisão foi encontrada.',
      'Active Repositories' => 'Repositórios Ativos',
      'No repositories found for this query.' => 'Nenhum repositório encontrado para esta consulta.',

       // Actions
      'View Herald Transcript' => 'Visualizar Transcrição do Mensageiro',
      'Create Notification Rules' => "Criar regras de notificação",
      'Comment' => 'Comentario',
      'Change Status' => 'Mudar Status',
      'Reassign / Claim' => 'Reatribuição / Reivindicar',
      'Assign / Claim' => 'Atribuir / Reivindicar',
      'Add CCs' => 'Adicionar CCs',
      'Change Priority' => 'Alterar Prioridade',
      'Associate Projects' => 'Associar Projeto',
      'Task' => 'Tarefa',
      'Done' => "Feito",
      "Edit Favorites" => "Editar Favoritos",
      'FAVORITES' => 'FAVORITOS',
      'Search' => 'Procurar',
      'Edit Query' => 'Editar Consulta',
      'Edit Queries...' => 'Editar Consultas...',

      'Hide Query' => 'Ocultar Consulta',
      'Export Data' => 'Exportar dados',
      'Advanced Search' => 'Busca Avançada',
      'Query' => 'Consulta',
      'Mute Notifications' => 'Silenciar Notificações',
      'Mute' => 'Silenciar',
      'Mute this object? You will no longer receive notifications or email about it.' => 'Silencie esse objeto? Você não receberá mais notificações ou enviará um e-mail sobre isso.',
      'You are automatically subscribed to this object.' => 'Você está automaticamente inscrito nesse objeto.',
      'Type a user, project, package, or maling list name...' => 'Digite um usuário, projeto, pacote, ou o nome da lista de discussão ...',

    );
  }

}
